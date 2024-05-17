<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reseller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $ignore_views = array('login', 'check_login', 'index');
        if (!in_array($this->router->method, $ignore_views)):
            if (!isset($_SESSION['reseller_id'])) {
                if (method_exists($this, $this->router->method)) {
                    $_SESSION['redirect_url'] = $this->uri->uri_string();
                    //  redirect('reseller/login');
                }
            } else {
                if (isset($_SESSION['redirect_url'])) {
                    unset($_SESSION['redirect_url']);
                }
            }
        endif;

        //echo '<pre>';
        //print_r($_SESSION);
        //echo '</pre>';
        $day = date("l");
        $date = date("j");
        $month = date("M");
        $year = date("y");
        $today = 'Midnight ' . TIME_ZONE . ', <span style="text-decoration:underline;">' . $day . '</span> ' . $date . ' ' . $month . ' &lsquo;' . $year;
        $data['today'] = $today;
        $this->load->vars($data);

        $this->load->database();
        $this->load->model('logodesignmodel');

        $this->load->library('email');
        $this->email->set_newline("\r\n");

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1'):
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.vianet.com.np';
            $config['smtp_port'] = 25;
        endif;


        $this->email->initialize($config);
        // $this->output->cache(1440); // 1440 min( one day) 
    }

    public function index() {
        //$this->output->cache(300);
        $_SESSION["ra"] = "0";
        $data['page_title'] = 'Reseller Services ';
        $this->load->view('reseller/index', $data);
    }

    public function okordermid() {

        if (@$_SESSION["ra"] == "1") {
            @$_SESSION["ra"] = "0";
            echo "<script>history.go(-1);</script>";
        } else {
            if (!isset($_POST['username'])) {
                redirect('reseller/index');
            } else {
                foreach ($_POST as $key => $value) {
                    $_SESSION[$key] = $value;
                }

                //var_dump($_POST);die;
                $reseller_id = $this->logodesignmodel->checkuser();
                //var_dump($_POST);die; 
                //echo $reseller_id;die;              
                if ($reseller_id == '') {
                    unset($_SESSION['error_msg']);
                    //sending Reseller Login Detail to Client
                    $message = $this->load->view('email_templates/reseller/reseller_login', '', true);
                    $this->email->from(INFO_MAIL, 'Reseller Service');
                    $this->email->subject('Congratulations: Your reseller account details');
                    $this->email->message($message);
                    $this->email->to(@$_SESSION['email_id']);
                    $this->email->send();
                    $this->logodesignmodel->create_reseller();

                   // if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1'):
                      //  $this->wufooSignup();           //for redirecting to the wufoo site (for reseller signup page)
                   // else:
                        redirect('reseller/okorder');
                  // endif;
                }
                else {
                    $_SESSION['error_msg'] = 'Your Email ID Already Exists';
                    redirect('reseller/login');
                }
            }
        }
    }

    public function okorder() {
        $this->load->view('reseller/okorder');
    }

    public function login() {
        //$this->output->cache(300);
        $data['page_title'] = 'Reseller Login ';
        $this->load->view('reseller/login', $data);
    }

    //function to check valid user
    public function check_login() {
        $reseller_id = $this->logodesignmodel->check_login();
        if ($reseller_id != '') {
            unset($_SESSION['error_msg']);
            $reseller_detail = $this->logodesignmodel->reseller_detail($reseller_id);
            $session_data = array('reseller_id' => $reseller_detail->reseller_id, 'username' => $reseller_detail->username);
            $this->session->set_userdata($session_data);
            $_SESSION['reseller_id'] = $reseller_detail->reseller_id;
            $_SESSION['username'] = $reseller_detail->username;
            $_SESSION['fullname'] = $reseller_detail->fullname;
            $name = explode(' ', $reseller_detail->fullname);
            if (is_array($name)) {
                $_SESSION['fname'] = $name[0]; 
            } else {
                $_SESSION['fname'] = $name;
            }
            if (isset($_SESSION['redirect_url'])) {
                redirect($_SESSION['redirect_url']);
                echo "<script>window.location='" . base_url() . $_SESSION['redirect_url'] . "'</script>";
            } else {
                echo "<script>window.location='" . base_url() . "reseller/packages'</script>";
                redirect('reseller/packages');
            }
        } else {
            $_SESSION['error_msg'] = 'Your Email ID Already Exists';
            redirect('reseller/login');
            echo "<script>window.location='" . base_url() . "reseller/login'</script>";
        }
    }

    public function forget() {
        if (isset($_POST['email_id'])) {
            $update_id = $this->logodesignmodel->checkuser();
            if ($update_id != '') {
                $reset_code = md5(mktime());
                $update_data = array('reset_code' => $reset_code);
                $this->logodesignmodel->reseller_update($update_data, $update_id);
                $message = 'Click the link below to reset your password: <br /><br /><br />';
                $message .= '<a href="' . site_url('reseller/reset') . '?uid=' . $update_id . '&r=' . $reset_code . '">' . site_url('reseller/reset') . '</a> <br /><br /><br />';
                $message .= '<b>Thank You,</b><br />';
                $message .= 'Reseller Service';
                //sending Reseller Login Detail to Client                                  
                $this->email->from(INFO_MAIL, 'Reseller Service');
                $this->email->subject('Password Reset link');
                $this->email->message($message);
                $this->email->to(@$_POST['email_id']);
                $this->email->send();
                ?>
                <script type="text/javascript">alert('Email Send with Reset instruction. Please Check Email');</script>
                <?php

            } else {
                ?>
                <script type="text/javascript">alert('Sorry! we could not find your Email in record');</script>
                <?php

            }
        }
        $this->load->view('reseller/forget');
    }

    public function reset() {
        if (!isset($_GET['uid']) && !isset($_GET['r'])) {
            redirect('reseller/login');
        } else {
            $query = $this->db->query('select reset_code from reseller where reseller_id="' . $_GET['uid'] . '"');
            $row = $query->row();
            if (isset($_POST['new_password'])) {
                $update_reseller = array('reset_code' => '', 'password' => sha1(mysql_real_escape_string($_POST['new_password'])));
                $this->logodesignmodel->reseller_update($update_reseller, $_GET['uid']);
                ?>
                <script type="text/javascript">
                    alert('Password Updated! \n Please Try login With New Password');
                </script>
                <?php

                unset($_SESSION['error_msg']);
                $this->load->view('reseller/login');
            } else {
                if ($row->reset_code == $_GET['r'] && $row->reset_code != '') {
                    $this->load->view('reseller/reset');
                } else {
                    die('Invalid Link or Expired');
                }
            }
        }
    }

    public function wufooSignup() {
        $this->load->view('reseller/wufo_resellerSignup');
    }

    public function logout() {
        session_destroy();
        redirect('reseller/login');
    }

    // Logo design pages
    public function packages() {
        $data['page_title'] = 'See Our Packages';
        //$this->load->view('reseller/packages', $data);
        $this->load->view('reseller/startup', $data);
    }

    public function process() {
        $data['page_title'] = 'Process';
        $this->load->view('reseller/process', $data);
    }

    public function compare() {
        $data['page_title'] = 'Compare';
        $this->load->view('reseller/compare', $data);
    }

    public function portfolio() {
        $data['page_title'] = 'Portfolio';
        $this->load->view('reseller/portfolio', $data);
    }

    public function guarantee() {
        $data['page_title'] = '100 % Money Back Guarantee';
        $this->load->view('reseller/guarantee', $data);
    }

    public function about() {
        $data['page_title'] = 'About Us';
        $this->load->view('reseller/about', $data);
    }

    public function management() {
        $data['page_title'] = 'Management Team';
        $this->load->view('reseller/management', $data);
    }

    public function quality() {
        $data['page_title'] = 'Quality Control';
        $this->load->view('reseller/quality', $data);
    }

    public function partnership() {
        $data['page_title'] = 'Partnership Program';
        $this->load->view('reseller/partnership', $data);
    }

    public function terms() {
        $data['page_title'] = 'Terms and Condition';
        $this->load->view('reseller/terms', $data);
    }

    public function privacy() {
        $data['page_title'] = 'Privacy Policy';
        $this->load->view('reseller/privacy', $data);
    }

    public function sampleproject() {
        $data['page_title'] = 'Sample Project';
        $this->load->view('reseller/sampleproject', $data);
    }

    public function faq() {
        $data['page_title'] = 'Frequently Asked Questions';
        $this->load->view('reseller/faq', $data);
    }

    public function charity() {
        $data['page_title'] = 'See Our Charitable Work';
        $this->load->view('reseller/charity', $data);
    }

    public function contact() {
        $data['page_title'] = 'Contact Us';
        $this->load->view('reseller/contact', $data);
    }

    public function casestudy() {
        $data['page_title'] = 'Case Study';
        $this->load->view('reseller/sampleproject', $data);
    }

}
