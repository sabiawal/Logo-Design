<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logo_order extends CI_Controller {

    var $today = '';

    public function __construct() {
        parent::__construct();
        //echo '<pre>';
        //print_r($_SESSION);
        //echo '</pre>';
        //header('Cache-Control: no-store, no-cache, must-revalidate');

        if (isset($_GET['uk'])) {
            redirect('orders/' . $_GET['uk']);
        }

        $this->load->database();
        $this->load->library('user_agent');
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

        $day = date("l");
        $date = date("j");
        $month = date("M");
        $year = date("y");
        $zone = '';
        if (COUNTRY == 'USA') {
            $zone = "EST";
            $today = 'Midnight ' . $zone . ', <span style="text-decoration:underline;">' . $day . '</span> ' . $date . ' ' . $month . ' &lsquo;' . $year;
        } else {

            $today = 'Midnight, <span style="text-decoration:underline;">' . $day . '</span> ' . $date . ' ' . $month . ' &lsquo;' . $year;
        }
        $data['today'] = $today;
        $this->load->vars($data);

        //echo md5(base_url().$this->uri->uri_string());
    }

    public function index_old($p_index = NULL) {
        $_SESSION['va'] = 0;
        //echo $this->today;
        switch ($p_index) {
            case 1:
                $logo_package = START_LP;
                $logo_price = START_LP_P;
                break;
            case 2:
                $logo_package = START_PLUS_LP;
                $logo_price = START_PLUS_LP_P;
                break;
            case 3:
                $logo_package = SUPER_START_PLUS_LP;
                $logo_price = SUPER_START_PLUS_LP_P;
                break;
            case 4:
                $logo_package = SURGE_LP;
                $logo_price = SURGE_LP_P;
                break;
            case 5:
                $logo_package = SURGE_PLUS_LP;
                $logo_price = SURGE_PLUS_LP_P;
                break;
            case 6:
                $logo_package = SUPER_SURGE_PLUS_LP;
                $logo_price = SUPER_SURGE_PLUS_LP_P;
                break;
            case 7:
                $logo_package = EXCEL_LP;
                $logo_price = EXCEL_LP_P;
                break;
            default:
                if (!isset($_SESSION['logo_package'])):
                    redirect('packages');
                else:
                    $logo_package = $_SESSION['logo_package'];
                    $logo_price = $_SESSION['logo_price'];
                endif;
                break;
        }
        $data['logo_package'] = $logo_package;
        $data['logo_price'] = $logo_price;
        $data['p_index'] = $p_index;
        $this->load->view('logo/orders/index', $data);
    }

    public function index1($p_index = NULL) {
        $_SESSION['index'] = "index";

        if ($p_index != '1' && $p_index != '2' && $p_index != '3' && $p_index != '4' && $p_index != '5' && $p_index != '7') {
            redirect('packages');
            die;
        }
        $_SESSION['va'] = 0;
        switch ($p_index) {
            case 1:
                $logo_package = START_LP;
                $logo_price = START_LP_P;
                break;
            case 2:
                $logo_package = START_PLUS_LP;
                $logo_price = START_PLUS_LP_P;
                break;
            case 3:
                $logo_package = SUPER_START_PLUS_LP;
                $logo_price = SUPER_START_PLUS_LP_P;
                break;
            case 4:
                $logo_package = SURGE_LP;
                $logo_price = SURGE_LP_P;
                break;
            case 5:
                $logo_package = SURGE_PLUS_LP;
                $logo_price = SURGE_PLUS_LP_P;
                break;
            case 6:
                $logo_package = SUPER_SURGE_PLUS_LP;
                $logo_price = SUPER_SURGE_PLUS_LP_P;
                break;
            case 7:
                $logo_package = EXCEL_LP;
                $logo_price = EXCEL_LP_P;
                break;
            default:
                if (!isset($_SESSION['logo_package'])):
                    redirect('packages');
                else:
                    $logo_package = $_SESSION['logo_package'];
                    $logo_price = $_SESSION['logo_price'];
                endif;
                break;
        }
        $data['logo_package'] = $logo_package;
        $data['logo_price'] = $logo_price;
        $data['p_index'] = $p_index;
        $this->load->view('logo/orders/contact_info', $data);
    }

    public function index($p_index = NULL) {
        if (isset($_SESSION['p_index']) && empty($p_index)) {
            $p_index = $_SESSION['p_index'];
        } else if ($p_index > 22 || $p_index == 0) {
            redirect('packages');
            die;
        }
        $_SESSION['index'] = "index";

        $_SESSION['va'] = 0;
        switch ($p_index) {
            case 1:
                $logo_package = START_LP;
                $logo_price = START_LP_P;
                $logo_price_cut = START_LP_P_R;
                break;
            case 2:
                $logo_package = START_PLUS_LP;
                $logo_price = START_PLUS_LP_P;
                $logo_price_cut = START_PLUS_LP_P_R;
                break;
            case 3:
                $logo_package = SUPER_START_PLUS_LP;
                $logo_price = SUPER_START_PLUS_LP_P;
                $logo_price_cut = SUPER_START_PLUS_LP_P_R;
                break;
            case 4:
                $logo_package = SURGE_LP;
                $logo_price = SURGE_LP_P;
                $logo_price_cut = SURGE_LP_P_R;
                break;
            case 5:
                $logo_package = SURGE_PLUS_LP;
                $logo_price = SURGE_PLUS_LP_P;
                $logo_price_cut = SURGE_PLUS_LP_P_R;
                break;
            case 6:
                $logo_package = SUPER_SURGE_PLUS_LP;
                $logo_price = SUPER_SURGE_PLUS_LP_P;
                $logo_price_cut = SUPER_SURGE_PLUS_LP_P_R;
                break;
            case 7:
                $logo_package = EXCEL_LP;
                $logo_price = EXCEL_LP_P;
                $logo_price_cut = EXCEL_LP_P_R;
                break;
            case 8:
                $logo_package = START_UP_LP;
                $logo_price = START_UP_LP_P;
                $logo_price_cut = START_UP_LP_P_R;
                break;
            case 9:
                $logo_package = START_UP_ST_LP;
                $logo_price = START_UP_ST_LP_P;
                $logo_price_cut = START_UP_ST_LP_P_R;
                break;
            case 10:
                $logo_package = COMPLETE_LP;
                $logo_price = COMPLETE_LP_P;
                $logo_price_cut = COMPLETE_LP_P_R;
                break;
            case 11:
                $logo_package = START_UP_LP_WITH_1_PAGE;
                $logo_price = START_UP_LP_P_WITH_1_PAGE;
                $logo_price_cut = START_UP_LP_P_R_WITH_1_PAGE;
                break;
            case 12:
                $logo_package = START_UP_LP_6;
                $logo_price = START_UP_LP_P_WITH_6_PAGE;
                $logo_price_cut = START_UP_LP_P_R_WITH_6_PAGE;
                break;
            case 13:
                $logo_package = START_UP_LP_12;
                $logo_price = START_UP_LP_P_WITH_12_PAGE;
                $logo_price_cut = START_UP_LP_P_R_WITH_12_PAGE;
                break;
            case 14:
                $logo_package = COMPLETE_LP_WITH_12_PAGE;
                $logo_price = COMPLETE_LP_P_WITH_12_PAGE;
                $logo_price_cut = COMPLETE_LP_P_R_WITH_12_PAGE;
                break;
            case 15:
                $logo_package = COMPLETE_STAT_AND_6_PAGE;
                $logo_price = COMPLETE_STAT_AND_6_PAGE_P;
                $logo_price_cut = COMPLETE_STAT_AND_6_PAGE_P_R;
                break;
            case 16:
                $logo_package = bronze;
                $logo_price = bronze_P;
                $logo_price_cut = bronze_P_R;
                break;
            case 17:
                $logo_package = silver;
                $logo_price = silver_P;
                $logo_price_cut = silver_P_R;
                break;
            case 18:
                $logo_package = gold;
                $logo_price = gold_P;
                $logo_price_cut = gold_P_R;
                break;
            case 19:
                $logo_package = stationery;
                $logo_price = stationery_P;
                $logo_price_cut = stationery_P_R;
                break;
            case 20:
                $logo_package = stationery_brochure;
                $logo_price = stationery_brochure_P;
                $logo_price_cut = stationery_brochure_P_R;
                break;
            case 21:
                $logo_package = logo_with_animation;
                $logo_price = logo_with_animation_P;
                $logo_price_cut = logo_with_animation_P_R;
                break;
            case 22:
                $logo_package = ADVANCED_LP;
                $logo_price = ADVANCED_LP_P;
                $logo_price_cut = ADVANCED_LP_P_R;
                break;

            default:
                if (!isset($_SESSION['logo_package'])):
                    redirect('packages');
                else:
                    $logo_package = $_SESSION['logo_package'];
                    $logo_price = $_SESSION['logo_price'];
                    $logo_price_cut = $_SESSION['logo_price_cut'];
                endif;
                break;
        }
        $data['logo_package'] = $logo_package;
        $data['logo_price'] = $logo_price;
        $data['logo_price_cut'] = $logo_price_cut;
        $data['p_index'] = $p_index;
        $this->load->view('logo/orders/contactinfo_sunil', $data);
        // $this->load->view('logo/orders/contact_info', $data);
    }

    function logobrief_old() {

        $_SESSION['logobrief'] = "logobrief";
        //echo "<pre>";print_r($_SESSION);
        if (!isset($_SESSION['logo_package']) || !isset($_SESSION['logo_price']) || !isset($_SESSION['p_index'])) {
            redirect('packages');
            die;
        }

        if (!isset($_SESSION['fname'])) {
            if (!isset($_POST['fname']) || !isset($_POST['lname']) || !isset($_POST['company_name']) || $_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['company_name'] == '' || $_POST['email_id'] == '') {
                redirect('orders/index/' . $_SESSION['p_index']);
                die;
            } else {
                $_SESSION['fname'] = $_POST['fname'];
                $_SESSION['lname'] = $_POST['lname'];
                $_SESSION['company_name'] = $_POST['company_name'];
                $_SESSION['email_id'] = $_POST['email_id'];
                $_SESSION['phone_no'] = $_POST['phone_no'];
            }
        } else {

            if (isset($_POST['fname']) && (@$_SESSION['fname'] != $_POST['fname'])) {
                $_SESSION['fname'] = @$_POST['fname'];
            }
            if (isset($_POST['lname']) && (@$_SESSION['lname'] != $_POST['lname'])) {
                $_SESSION['lname'] = @$_POST['lname'];
            }
            if (isset($_POST['company_name']) && (@$_SESSION['company_name'] != $_POST['company_name'])) {
                $_SESSION['company_name'] = @$_POST['company_name'];
            }
            if (isset($_POST['email_id']) && (@$_SESSION['email_id'] != $_POST['email_id'])) {
                $_SESSION['email_id'] = @$_POST['email_id'];
            }
            if (isset($_POST['phone_no']) && (@$_SESSION['phone_no'] != $_POST['phone_no'])) {
                $_SESSION['phone_no'] = $_POST['phone_no'];
            }
        }

        $this->load->view('logo/orders/logo_bref');
    }

    function logobrief() {

        $_SESSION['logobref'] = "logobref";
        if (isset($_SESSION['deletedServices']['web_package'])) {
            unset($_SESSION['deletedServices']['web_package']);
        }
        if (isset($_SESSION['deletedServices']['brouchure_package'])) {
            unset($_SESSION['deletedServices']['brouchure_package']);
        }
        //echo "<pre>";print_r($_SESSION);
        if (!isset($_SESSION['logo_package']) || !isset($_SESSION['logo_price']) || !isset($_SESSION['p_index'])) {
            redirect('packages');
            die;
        }

        if (!isset($_SESSION['fname']) || !isset($_SESSION['lname']) || !isset($_SESSION['company_name']) || !isset($_SESSION['email_id'])) {
            if (!isset($_POST['fname']) || !isset($_POST['lname']) || !isset($_POST['company_name']) || $_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['company_name'] == '' || $_POST['email_id'] == '') {
                redirect('orders/index/' . $_SESSION['p_index']);
                die;
            } else {
                $_SESSION['fname'] = $_POST['fname'];
                $_SESSION['lname'] = $_POST['lname'];
                $_SESSION['company_name'] = $_POST['company_name'];
                $_SESSION['email_id'] = $_POST['email_id'];
                $_SESSION['phone_no'] = $_POST['phone_no'];
            }
        } else {

            if ($_SESSION['fname'] == '' || $_SESSION['lname'] == '' || $_SESSION['company_name'] == '' || $_SESSION['email_id'] == '') {
                redirect('orders/index/' . $_SESSION['p_index']);
                die;
            }


            if (isset($_POST['fname']) && (@$_SESSION['fname'] != $_POST['fname'])) {
                $_SESSION['fname'] = @$_POST['fname'];
            }
            if (isset($_POST['lname']) && (@$_SESSION['lname'] != $_POST['lname'])) {
                $_SESSION['lname'] = @$_POST['lname'];
            }
            if (isset($_POST['company_name']) && (@$_SESSION['company_name'] != $_POST['company_name'])) {
                $_SESSION['company_name'] = @$_POST['company_name'];
            }
            if (isset($_POST['email_id']) && (@$_SESSION['email_id'] != $_POST['email_id'])) {
                $_SESSION['email_id'] = @$_POST['email_id'];
            }
            if (isset($_POST['phone_no']) && (@$_SESSION['phone_no'] != $_POST['phone_no'])) {
                $_SESSION['phone_no'] = $_POST['phone_no'];
            }
        }
        // echo"<pre>"; print_r($_SESSION); die;
        $this->load->view('logo/orders/logo_bref_sunil');
        // $this->load->view('logo/orders/logo_bref');
    }

    function update_floated_old() {
        $_POST['name'];
        $_POST['value'];
        if (!empty($_POST['value'])) {
            if (isset($_SESSION['web_package'])):
                switch ($_SESSION['web_package']) {
                    case BUDGET_WP:
                        $_SESSION['web_price'] = BUDGET_WP_P;
                        break;

                    case GOLD_WP:
                        $_SESSION['web_price'] = GOLD_WP_P;
                        break;

                    case ELITE_WP:
                        $_SESSION['web_price'] = ELITE_WP_P;
                        break;

                    default:
                        unset($_SESSION['web_package'], $_SESSION['web_price']);
                        break;
                }
            endif;
            if (isset($_SESSION['brouchure_package'])):
                switch ($_SESSION['brouchure_package']) {
                    case TRI_FOLD_BP:
                        $_SESSION['brouchure'] = TRI_FOLD_BP_P;
                        break;

                    case FOUR_PAGE_EXEC_BP:
                        $_SESSION['brouchure'] = FOUR_PAGE_EXEC_BP_P;
                        break;

                    case EIGHT_PAGE_EXEC_BP:
                        $_SESSION['brouchure'] = EIGHT_PAGE_EXEC_BP_P;
                        break;

                    default:
                        unset($_SESSION['brouchure_package'], $_SESSION['brouchure']);
                        break;
                }
            endif;


            echo '
                <p>' . $_POST['value'] . '
              <h3>' . CURRENCY . '<span class="main_price">';
            if ($_POST['name'] == 'web_package') {
                echo $_SESSION['web_price'];
            } else {
                echo $_SESSION['brouchure'];
            }

            echo '</span></h3></p>';
        } else {
            echo '';
        }
    }

    function update_floated() {
        $_POST['name'];
        $_POST['value'];
        if (!empty($_POST['value'])) {
            if (isset($_SESSION['web_package'])):
                switch ($_SESSION['web_package']) {
                    case BUDGET_WP:
                        $_SESSION['web_price'] = BUDGET_WP_P;
                        break;

                    case GOLD_WP:
                        $_SESSION['web_price'] = GOLD_WP_P;
                        break;

                    case ELITE_WP:
                        $_SESSION['web_price'] = ELITE_WP_P;
                        break;

                    default:
                        unset($_SESSION['web_package'], $_SESSION['web_price']);
                        break;
                }
            endif;
            if (isset($_SESSION['brouchure_package'])):
                switch ($_SESSION['brouchure_package']) {
                    case TRI_FOLD_BP:
                        $_SESSION['brouchure'] = TRI_FOLD_BP_P;
                        break;

                    case FOUR_PAGE_EXEC_BP:
                        $_SESSION['brouchure'] = FOUR_PAGE_EXEC_BP_P;
                        break;

                    case EIGHT_PAGE_EXEC_BP:
                        $_SESSION['brouchure'] = EIGHT_PAGE_EXEC_BP_P;
                        break;

                    default:
                        unset($_SESSION['brouchure_package'], $_SESSION['brouchure']);
                        break;
                }
            endif;


            echo '
                <p>' . $_POST['value'] . '
              <h3>' . CURRENCY . '<span class="main_price">';
            if ($_POST['name'] == 'web_package') {
                echo $_SESSION['web_price'];
            } else {
                echo $_SESSION['brouchure'];
            }

            echo '</span></h3></p>';
        } else {
            echo '';
        }
    }

    function special() {
        $_SESSION['special'] = "special";
        $_SESSION['attachment'] = @$_FILES['attachment']['tmp_name'];
        @$_SESSION['pack_id'] = @$_SESSION['p_index'];
        if (!isset($_SESSION['fname']) || !isset($_SESSION['lname']) || !isset($_SESSION['company_name']) || !isset($_SESSION['email_id'])) {
            redirect('orders/logobrief/');
            die;
        }

        if ($_SESSION['fname'] == '' || $_SESSION['lname'] == '' || $_SESSION['company_name'] == '' || $_SESSION['email_id'] == '') {
            redirect('orders/index/' . $_SESSION['p_index']);
            die;
        }

        if (!isset($_SESSION['cmp_logo_name'])) {
            if (!isset($_POST['cmp_logo_name']) || !isset($_POST['business_detail']) || $_POST['cmp_logo_name'] == '' || $_POST['business_detail'] == '') {
                redirect('orders/logobrief/');
                die;
            } else {
                $_SESSION['cmp_logo_name'] = @$_POST['cmp_logo_name'];
                $_SESSION['tagline'] = @$_POST['tagline'];
                $_SESSION['business_detail'] = @$_POST['business_detail'];
                $_SESSION['m5_colors'] = @$_POST['m5_colors'];
                $_SESSION['colors'] = @$_POST['colors'];
                $_SESSION['m5_no_colors'] = @$_POST['m5_no_colors'];
                $_SESSION['no_colors'] = @$_POST['no_colors'];
                $_SESSION['idea_of_clint'] = @$_POST['idea_of_clint'];
                $_SESSION['fileList'] = @$_POST['fileList'];
                $_SESSION['contact_details'] = @$_POST['contact_details'];
                @$_SESSION['deletedServices']['web_package'];
                $_SESSION['web_package'] = @$_POST['web_package'];
                $_SESSION['brouchure_package'] = @$_POST['brouchure_package'];
                $_SESSION['attachment'] = @$_FILES['attachment']['tmp_name'];
            }
        } else {
            if (@isset($_POST['cmp_logo_name']) && (@$_SESSION['cmp_logo_name'] != @$_POST['cmp_logo_name'])) {
                $_SESSION['cmp_logo_name'] = @$_POST['cmp_logo_name'];
            }
            if (@isset($_POST['tagline']) && (@$_SESSION['tagline'] != @$_POST['tagline'])) {
                $_SESSION['tagline'] = @$_POST['tagline'];
            }
            if (@isset($_POST['business_detail']) && (@$_SESSION['business_detail'] != @$_POST['business_detail'])) {
                $_SESSION['business_detail'] = @$_POST['business_detail'];
            }
            if (@isset($_POST['m5_colors']) && (@$_SESSION['m5_colors'] != @$_POST['m5_colors'])) {
                $_SESSION['m5_colors'] = @$_POST['m5_colors'];
            }
            if (@isset($_POST['colors']) && (@$_SESSION['colors'] != @$_POST['colors'])) {
                $_SESSION['colors'] = @$_POST['colors'];
            }

            if (@isset($_POST['m5_no_colors']) && (@$_SESSION['m5_no_colors'] != @$_POST['m5_no_colors'])) {
                $_SESSION['m5_no_colors'] = @$_POST['m5_no_colors'];
            }

            if (@isset($_POST['no_colors']) && (@$_SESSION['no_colors'] != @$_POST['no_colors'])) {
                $_SESSION['no_colors'] = @$_POST['no_colors'];
            }

            if (@isset($_POST['idea_of_clint']) && (@$_SESSION['idea_of_clint'] != @$_POST['idea_of_clint'])) {
                $_SESSION['idea_of_clint'] = @$_POST['idea_of_clint'];
            }

            if (@isset($_POST['fileList']) && (@$_SESSION['fileList'] != @$_POST['fileList'])) {
                $_SESSION['fileList'] = @$_POST['fileList'];
            }
            if (@isset($_FILES['attachment']['tmp_name']) && (@$_SESSION['attachment'] != @$_FILES['attachment']['tmp_name'])) {

                $_SESSION['attachment'] = @$_FILES['attachment']['tmp_name'];
            }


            if (@isset($_POST['contact_details']) && (@$_SESSION['contact_details'] != @$_POST['contact_details'])) {
                $_SESSION['contact_details'] = @$_POST['contact_details'];
            }
            if (@$_SESSION['deletedServices']['web_package']) {
                unset($_SESSION['web_package'], $_SESSION['web_price'], $_SESSION['web_id']);
                // $_SESSION['web_package'] = @$_POST['web_package'];
            } else if (@isset($_POST['web_package'])) {
                unset($_SESSION['deletedServices']['web_package']);
                $_SESSION['web_package'] = @$_POST['web_package'];
            }

            if (@$_SESSION['deletedServices']['brouchure_package']) {
                unset($_SESSION['brouchure_package']);
                // $_SESSION['web_package'] = @$_POST['web_package'];
            } else if (@isset($_POST['brouchure_package'])) {
                unset($_SESSION['deletedServices']['brouchure_package']);
                $_SESSION['brouchure_package'] = @$_POST['brouchure_package'];
            }

            //$this->logodesignmodel->save_logo_order();
        }
        if (isset($_SESSION['web_package'])):
            switch ($_SESSION['web_package']) {
                case BUDGET_WP:
                    $_SESSION['web_price'] = BUDGET_WP_P;
                    break;

                case GOLD_WP:
                    $_SESSION['web_price'] = GOLD_WP_P;
                    break;

                case ELITE_WP:
                    $_SESSION['web_price'] = ELITE_WP_P;
                    break;

                default:
                    unset($_SESSION['web_package'], $_SESSION['web_price']);
                    break;
            }
        endif;

        if (isset($_SESSION['brouchure_package'])):
            switch ($_SESSION['brouchure_package']) {
                case TRI_FOLD_BP:
                    $_SESSION['brouchure'] = TRI_FOLD_BP_P;
                    break;

                case FOUR_PAGE_EXEC_BP:
                    $_SESSION['brouchure'] = FOUR_PAGE_EXEC_BP_P;
                    break;

                case EIGHT_PAGE_EXEC_BP:
                    $_SESSION['brouchure'] = EIGHT_PAGE_EXEC_BP_P;
                    break;

                default:
                    unset($_SESSION['brouchure_package'], $_SESSION['brouchure']);
                    break;
            }
        endif;


        $this->logodesignmodel->save_logo_order();
        $this->load->view('logo/orders/special');
    }

    function specialoffers() {




        if (!isset($_SESSION['cmp_logo_name']) || !isset($_SESSION['business_detail'])) {
            redirect('orders/special/');
            die;
        }


        $this->logodesignmodel->save_logo_order();
        $this->load->view('logo/orders/specialoffers');
    }

    public function extramid() {
        //$_POST['pack_id'];
        //$this->output->cache(1440);
        if (@$_SESSION['va'] == 1):
            @$_SESSION["va"] = 0;
            echo "<script>history.go(-1);</script>";
        else:
            foreach ($_POST as $k => $v) {
                $_SESSION[$k] = $v;
            }
            //$this->load->view('logo/orders/extramid');
            redirect('orders/extra1');
        endif;
    }

    public function extra1() {
        //echo "<pre>";print_r($_SESSION);die;
        //$this->output->cache(1440);
        if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('packages');
            endif;
            redirect('orders/index');
        endif;
        //
        $_SESSION['va'] = 1;

        if (isset($_SESSION['web_package'])):
            switch ($_SESSION['web_package']) {
                case BUDGET_WP:
                    $_SESSION['web'] = BUDGET_WP_P;
                    break;

                case GOLD_WP:
                    $_SESSION['web'] = GOLD_WP_P;
                    break;

                case ELITE_WP:
                    $_SESSION['web'] = ELITE_WP_P;
                    break;

                default:
                    unset($_SESSION['web_package'], $_SESSION['web']);
                    break;
            }
        endif;

        if (isset($_SESSION['brouchure_package'])):
            switch ($_SESSION['brouchure_package']) {
                case TRI_FOLD_BP:
                    $_SESSION['brouchure'] = TRI_FOLD_BP_P;
                    break;

                case FOUR_PAGE_EXEC_BP:
                    $_SESSION['brouchure'] = FOUR_PAGE_EXEC_BP_P;
                    break;

                case EIGHT_PAGE_EXEC_BP:
                    $_SESSION['brouchure'] = EIGHT_PAGE_EXEC_BP_P;
                    break;

                default:
                    unset($_SESSION['brouchure_package'], $_SESSION['brouchure']);
                    break;
            }
        endif;
        $this->logodesignmodel->save_logo_order();
        $this->load->view('logo/orders/extra1');
    }

    public function extra2() {
        //$this->output->cache(1440);
        if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('packages');
            endif;
            redirect('orders/index');
        endif;
        $this->logodesignmodel->save_logo_order();
        $this->load->view('logo/orders/extra2');
    }

    public function review_old() {
        //$this->output->cache(1440);
        unset($_SESSION['pcode']);
        $_SESSION['vb'] = 0;
        if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('packages');
            endif;
            redirect('orders/index');
        endif;
        $this->logodesignmodel->save_logo_order();
        $this->load->view('logo/orders/review');
    }

    public function review() {

        if (isset($_SESSION['nochex'])) {
            unset($_SESSION['nochex']);
        } else if (!isset($_SESSION['review'])) {
            $_SESSION['review'] = "review";
            unset($_SESSION['specialoffers']);
        } else {
            unset($_SESSION['specialoffers']);
        }

        //$this->output->cache(1440);
        unset($_SESSION['pcode']);
        $_SESSION['vb'] = 0;
        if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('packages');
            endif;
            redirect('orders/index');
        endif;
        //$this->load->view('logo/orders/review');
        $this->load->view('logo/orders/review_new');
    }

    public function promo() {
        //$this->output->cache(1440);
        if (isset($_POST['pcode']))
            echo $this->logodesignmodel->promo($_POST['pcode']);
    }

    // public function payment_process() {
    //     //$this->output->cache(1440);        
    //     if (@$_SESSION["vb"] == 1) {
    //         @$_SESSION["visiteda"] = 0;
    /* echo '<script>history.go(-1);</script>'; */
    //     } else {
    //         $this->logodesignmodel->save_logo_order();
    //         //sending email to order@ldg sites        
    //         $message = $this->load->view('email_templates/logo/order_details', '', true);
    //         //$message = 'sfdajfds';                   
    //         $this->email->from('<' . @$_SESSION['email_id'] . '>', 'New Customer');
    //         $this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
    //         $this->email->message($message);
    //         $this->email->to(ORDER_MAIL);
    //         //$this->email->to('jagdesh010@hotmail.com');
    //         $this->email->send();
    //         $this->email->clear();
    //         //sending email to client
    //         $message = $this->load->view('email_templates/logo/paymentemail', '', true);
    //         //$message = 'sfdajfds';
    //         $this->email->from('<' . ORDER_MAIL . '>', 'Logo Admin');
    //         $this->email->subject('Your Logo Order Received');
    //         $this->email->message($message);
    //         $this->email->to(@$_SESSION['email_id']);
    //         $this->email->send();
    //         $this->email->clear();
    //         redirect('orders/payment');
    //     }
    // }
    public function payment_process() {

        //$this->output->cache(1440);        
        //if (@$_SESSION["vb"] == 1) {
        //   @$_SESSION["visiteda"] = 0;
        /* echo "<script>history.go(-1);</script>"; */
        //} else {
        $this->logodesignmodel->save_logo_order();
        //sending email to order@ldg sites        
        $message = $this->load->view('email_templates/logo/order_details', '', true);

        //$message = 'sfdajfds';                   
        $this->email->from('<' . @$_SESSION['email_id'] . '>', 'New Customer');
        $this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
        $this->email->message($message);
        $this->email->to(ORDER_MAIL);
        $this->email->cc("dilheartone@hotmail.com");
        //$this->email->to('jagdesh010@hotmail.com');
        $this->email->send();
        $this->email->clear();


        //sending email to client
        $message = $this->load->view('email_templates/logo/paymentemail', '', true);
        //$message = 'sfdajfds';
        $this->email->from('<' . ORDER_MAIL . '>', 'Logo Admin');
        $this->email->subject('Your Logo Order Received');
        $this->email->message($message);
        $this->email->to(@$_SESSION['email_id']);
        $this->email->send();
        $this->email->clear();

        redirect('orders/payment');
        //}
    }

    // public function payment() {
    //     //$this->output->cache(1440);
    //     if (@$_SESSION["vb"] == 1) {
    //         @$_SESSION["vb"] = 0;
    /*  echo "<script>history.go(-1);</script>"; */
    //     } else {
    //         $this->logodesignmodel->save_logo_order();
    //         if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
    //             if (!isset($_SESSION['logo_package'])):
    //                 redirect('packages');
    //             endif;
    //             redirect('orders/index');
    //         endif;
    //         $purchase_dis = 0;
    //         $promotional_discount = 0;
    //         $tax_amount = 0;
    //         $order_desc = $_SESSION['logo_package'] . '(' . CURRENCY . $_SESSION['logo_price'] . ')';
    //         $gross_total_price = $_SESSION['logo_price'];
    //         // web package
    //         if (isset($_SESSION['web_package'])):
    //             $order_desc .= ', ' . $_SESSION['web_package'] . '(' . CURRENCY . $_SESSION['web'] . ')';
    //             $gross_total_price += $_SESSION['web'];
    //         endif;
    //         // brochure package
    //         if (isset($_SESSION['brouchure_package'])):
    //             $order_desc .= ', ' . $_SESSION['brouchure_package'] . '(' . CURRENCY . $_SESSION['brouchure'] . ')';
    //             $gross_total_price += $_SESSION['brouchure'];
    //         endif;
    //         // Option one
    //         if (isset($_SESSION['options'])):
    //             $order_desc .= ', ' . $_SESSION['options'] . '(' . CURRENCY . $_SESSION['options_price'] . ')';
    //             $gross_total_price += $_SESSION['options_price'];
    //         endif;
    //         // option two (extra2 page)
    //         $extra_opt_price = 0;
    //         for ($i = 1; $i <= 20; $i++) {
    //             if (isset($_SESSION['options' . $i])):
    //                 //$order_desc .= ', '.$_SESSION['options'.$i].'('.CURRENCY.$_SESSION['options'.$i.'_price'].')';
    //                 //$gross_total_price    += $_SESSION['options'.$i.'_price'];
    //                 $extra_opt_price += $_SESSION['options' . $i . '_price'];
    //             endif;
    //         }
    //         if ($extra_opt_price > 0):
    //             $order_desc .= ', Other Extra Packages (' . CURRENCY . $extra_opt_price . ')';
    //             $gross_total_price += $extra_opt_price;
    //         endif;
    //         $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total_price);
    //         if ($purchase_dis_rate > 0) {
    //             $purchase_dis = round($purchase_dis_rate * $gross_total_price, 2);
    //             /* $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total_price.'</span> <br>
    //               Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')
    //               '; */
    //         }
    //         if (isset($_SESSION['pcode'])):
    //             $p = $this->logodesignmodel->promo($_SESSION['pcode']);
    //             $pcode = json_decode($p);
    //             if ($pcode != '') {
    //                 $promotional_discount = $pcode->promo_dis;
    //             }
    //         endif;
    //         $total_before_promotional = $gross_total_price - $purchase_dis;
    //         if ($promotional_discount > 0) {
    //             /* $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')'; */
    //         }
    //         $total_before_tax = $total_before_promotional - $promotional_discount;
    //         $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
    //         if ($tax_rate) {
    //             $tax_amount = $tax_rate * $total_before_tax;
    //             /* $order_desc.= ', <br > Tax Amount '.CURRENCY.$tax_amount; */
    //         }
    //         //$order_desc .='.';        
    //         $data['purchase_dis_rate'] = $purchase_dis_rate;
    //         $data['gross_total_price'] = $gross_total_price;
    //         $data['purchase_dis'] = $purchase_dis;
    //         $data['total_before_promotional'] = $total_before_promotional;
    //         $data['promotional_discount'] = $promotional_discount;
    //         $data['total_before_tax'] = $total_before_tax;
    //         $data['tax_amount'] = $tax_amount;
    //         $data['net_total'] = $net_total = number_format($total_before_tax + $tax_amount, 2, '.', '');
    //         $data['order_desc'] = $order_desc;
    //         $this->db->update('logo_web', array('paid_price' => $net_total), array("logo_web_id" => $_SESSION['logo_web_id']));
    //         if (SITE_ID == 7):
    //             //echo gettype($gross_total_price)."<br>";        
    //             $net_total *= 100;
    //             //echo gettype($net_total);
    //             settype($net_total, 'integer');
    //             //echo gettype($net_total);
    //             $this->load->library('jetpay');
    //             $data['state'] = $this->jetpay->get_state();
    //             if (isset($_POST['submit'])) {
    //                 $transactionID = $this->jetpay->get_transactionID();
    //                 $trans_type = $this->jetpay->trans_type;
    //                 $tid = $this->jetpay->tid;
    //                 $cardnum = $_POST['cardnum'];
    //                 $cvv = $_POST['cvv'];
    //                 $expmo = (strlen($_POST['expmonth']) < 2) ? '0' . $_POST['expmonth'] : $_POST['expmonth'];
    //                 $expyr = $_POST['expyear'];
    //                 $name = $_POST['fullname'];
    //                 $amount = $net_total;
    //                 $address = $_POST['billing_address'];
    //                 $city = $_POST['city'];
    //                 $state = $_POST['state'];
    //                 $zip = $_POST['zip'];
    //                 $email = $_SESSION['email_id'];
    //                 $verSub = '';
    //                 $xmlString = "<JetPay>";
    //                 $xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
    //                 $xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
    //                 $xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
    //                 $xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
    //                 $xmlString .= "<CVV2>" . $cvv . "</CVV2>";
    //                 $xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
    //                 $xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
    //                 $xmlString .= "<CardName>" . $name . "</CardName>";
    //                 $xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
    //                 $xmlString .= "<BillingAddress>" . $address . "</BillingAddress>";
    //                 $xmlString .= "<BillingCity>" . $city . "</BillingCity>";
    //                 $xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
    //                 $xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
    //                 $xmlString .= "<Email>" . $email . "</Email>";
    //                 $xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
    //                 $xmlString .= "</JetPay>";
    //                 //print "$xmlString.<br>";        
    //                 //Send XML to JetPay 
    //                 $xmlResponse = $this->jetpay->sendXMLString($xmlString);
    //                 //var_dump($xmlResponse); die;
    //                 if ($xmlResponse->ActionCode == '000'):
    //                     $this->logodesignmodel->update();
    //                     //redirect('orders/thankyou');
    //                     header('Location: ' . base_url() . 'orders/thankyou?p=' . $amount);
    //                 else:
    //                     //var_dump($xmlResponse);
    //                     //$data['ActionCode'] = $xmlResponse->ActionCode;
    //                     $data['ResponseText'] = $xmlResponse->ResponseText;
    //                 endif;
    //                 //var_dump($xmlResponse->JetPayResponse);            
    //             }
    //             $this->load->view('logo/orders/jetpay', $data);
    //         elseif (SITE_ID == 6):
    //             $this->load->view('logo/orders/nochex', $data);
    //             @$_SESSION["vb"] = 1;
    //         endif;
    //     }
    // }
    public function payment() {
        if (isset($_SESSION['nochex'])) {
            //$_SESSION['specialoffers']="specialoffers";
            redirect('orders/review');
        } else {
            //unset($_SESSION['review']);
            $_SESSION['nochex'] = "sent to nochex";
        }
        //$this->output->cache(1440);
        if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('packages');
            endif;
            redirect('orders/index');
        endif;
        $purchase_dis = 0;
        $promotional_discount = 0;
        $tax_amount = 0;

        if ($_SESSION['p_index'] == 11 || $_SESSION['p_index'] == 16) {
            $logoprice = BUDGET_WP_P;
        } else if ($_SESSION['p_index'] == 12 || $_SESSION['p_index'] == 15 || $_SESSION['p_index'] == 17) {
            $logoprice = GOLD_WP_P;
        } else if ($_SESSION['p_index'] == 13 || $_SESSION['p_index'] == 14 || $_SESSION['p_index'] == 18) {
            $logoprice = ELITE_WP_P;
        } else {
            $logoprice = 0;
        }
        $logo_package = $_SESSION['logo_package'];
        if (strstr($_SESSION['logo_package'], "CARD")) {
            $logo_package = str_replace("CARD", " ", $_SESSION['logo_package']);
        }
        $order_desc = $logo_package . ' (' . CURRENCY . ($_SESSION['logo_price'] + $logoprice ) . ')';
        $gross_total_price = $_SESSION['logo_price'] + $logoprice;


        // web package
        if ($_SESSION['p_index'] != 11 && $_SESSION['p_index'] != 12 && $_SESSION['p_index'] != 13 && $_SESSION['p_index'] != 14 && $_SESSION['p_index'] != 15 && $_SESSION['p_index'] != 16 && $_SESSION['p_index'] != 17 && $_SESSION['p_index'] != 18) {
            if (isset($_SESSION['web_package'])):
                $order_desc .= ', ' . $_SESSION['web_package'] . ' (' . CURRENCY . $_SESSION['web_price'] . ')';
                $gross_total_price += $_SESSION['web_price'];
            endif;
        }
        // brochure package
        if (isset($_SESSION['brouchure_package'])):
            $order_desc .= ', ' . $_SESSION['brouchure_package'] . ' (' . CURRENCY . $_SESSION['brouchure'] . ')';
            $gross_total_price += $_SESSION['brouchure'];
        endif;
        // Option one

        if (isset($_SESSION['poptions_pack' . $_SESSION['p_index']])):
            $order_desc .= ', ' . $_SESSION['options'] . ' (' . CURRENCY . $_SESSION['options_price'] . ')';
            $gross_total_price += $_SESSION['options_price'];
        endif;
        // option two (extra2 page)
        $extra_opt_price = 0;
        for ($i = 1; $i <= 20; $i++) {
            if (isset($_SESSION['options' . $i])):
                //$order_desc .= ', '.$_SESSION['options'.$i].'('.CURRENCY.$_SESSION['options'.$i.'_price'].')';
                //$gross_total_price    += $_SESSION['options'.$i.'_price'];
                $extra_opt_price += $_SESSION['options' . $i . '_price'];
            endif;
        }
        if ($extra_opt_price > 0):
            $order_desc .= ', Other Extra Packages (' . CURRENCY . $extra_opt_price . ')';
            $gross_total_price += $extra_opt_price;
        endif;


        $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total_price);
        if ($purchase_dis_rate > 0) {
            $purchase_dis = round($purchase_dis_rate * $gross_total_price, 2);
            /* $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total_price.'</span> <br>
              Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')
              '; */
        }


        if (isset($_SESSION['pcode'])):
            $p = $this->logodesignmodel->promo($_SESSION['pcode']);
            $pcode = json_decode($p);
            if ($pcode != '') {
                $promotional_discount = $pcode->promo_dis;
            }

        endif;
        $total_before_promotional = $gross_total_price - $purchase_dis;
        if ($promotional_discount > 0) {
            /* $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')'; */
        }

        $total_before_tax = $total_before_promotional - $promotional_discount;
        $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
        if ($tax_rate) {
            $tax_amount = $tax_rate * $total_before_tax;
            /* $order_desc.= ', <br > Tax Amount '.CURRENCY.$tax_amount; */
        }

        //$order_desc .='.';        

        $data['purchase_dis_rate'] = $purchase_dis_rate;

        $data['gross_total_price'] = $gross_total_price;
        $data['purchase_dis'] = $purchase_dis;
        $data['total_before_promotional'] = $total_before_promotional;
        $data['promotional_discount'] = $promotional_discount;
        $data['total_before_tax'] = $total_before_tax;
        $data['tax_amount'] = $tax_amount;
        $data['net_total'] = $net_total = number_format($total_before_tax + $tax_amount, 2, '.', '');

        $data['order_desc'] = $order_desc;

        $this->db->update('logo_web', array('paid_price' => $net_total), array("logo_web_id" => $_SESSION['logo_web_id']));


        if (SITE_ID == 7):
            //echo gettype($gross_total_price)."<br>";        
            $net_total *= 100;

            //echo gettype($net_total);
            settype($net_total, 'integer');
            //echo gettype($net_total);

            $this->load->library('jetpay');
            $data['state'] = $this->jetpay->get_state();
            if (isset($_POST['submit'])) {
                $transactionID = $this->jetpay->get_transactionID();
                $trans_type = $this->jetpay->trans_type;
                $tid = $this->jetpay->tid;
                $cardnum = $_POST['cardnum'];
                $cvv = $_POST['cvv'];
                $expmo = (strlen($_POST['expmonth']) < 2) ? '0' . $_POST['expmonth'] : $_POST['expmonth'];
                $expyr = $_POST['expyear'];
                $name = $_POST['fullname'];
                $amount = $net_total;
                $address = $_POST['billing_address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];
                $email = $_SESSION['email_id'];
                $verSub = '';

                $xmlString = "<JetPay>";
                $xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
                $xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
                $xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
                $xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
                $xmlString .= "<CVV2>" . $cvv . "</CVV2>";
                $xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
                $xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
                $xmlString .= "<CardName>" . $name . "</CardName>";
                $xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
                $xmlString .= "<BillingAddress>" . $address . "</BillingAddress>";
                $xmlString .= "<BillingCity>" . $city . "</BillingCity>";
                $xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
                $xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
                $xmlString .= "<Email>" . $email . "</Email>";
                $xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                $xmlString .= "</JetPay>";

                //print "$xmlString.<br>";        
                //Send XML to JetPay 
                $xmlResponse = $this->jetpay->sendXMLString($xmlString);
                //var_dump($xmlResponse); die;
                if ($xmlResponse->ActionCode == '000'):
                    $this->logodesignmodel->update();
                    //redirect('orders/thankyou');
                    header('Location: ' . base_url() . 'orders/thankyou?p=' . $amount);
                else:
                    //var_dump($xmlResponse);
                    //$data['ActionCode'] = $xmlResponse->ActionCode;
                    $data['ResponseText'] = $xmlResponse->ResponseText;
                endif;
                //var_dump($xmlResponse->JetPayResponse);            
            }
            $this->load->view('logo/orders/jetpay', $data);
        elseif (SITE_ID == 6):
            $this->load->view('logo/orders/nochex', $data);
        endif;
    }

    public function payment_old() {
        if (isset($_SESSION['nochex'])) {
            //$_SESSION['specialoffers']="specialoffers";
            redirect('orders/review');
        } else {
            //unset($_SESSION['review']);
            $_SESSION['nochex'] = "sent to nochex";
        }
        //$this->output->cache(1440);
        if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('packages');
            endif;
            redirect('orders/index');
        endif;
        $purchase_dis = 0;
        $promotional_discount = 0;
        $tax_amount = 0;


        $order_desc = $_SESSION['logo_package'] . ' (' . CURRENCY . $_SESSION['logo_price'] . ')';
        $gross_total_price = $_SESSION['logo_price'];


        // web package
        if (isset($_SESSION['web_package'])):
            $order_desc .= ', ' . $_SESSION['web_package'] . ' (' . CURRENCY . $_SESSION['web_price'] . ')';
            $gross_total_price += $_SESSION['web_price'];
        endif;
        // brochure package
        if (isset($_SESSION['brouchure_package'])):
            $order_desc .= ', ' . $_SESSION['brouchure_package'] . ' (' . CURRENCY . $_SESSION['brouchure'] . ')';
            $gross_total_price += $_SESSION['brouchure'];
        endif;
        // Option one
        if (isset($_SESSION['options'])):
            $order_desc .= ', ' . $_SESSION['options'] . ' (' . CURRENCY . $_SESSION['options_price'] . ')';
            $gross_total_price += $_SESSION['options_price'];
        endif;
        // option two (extra2 page)
        $extra_opt_price = 0;
        for ($i = 1; $i <= 20; $i++) {
            if (isset($_SESSION['options' . $i])):
                //$order_desc .= ', '.$_SESSION['options'.$i].'('.CURRENCY.$_SESSION['options'.$i.'_price'].')';
                //$gross_total_price    += $_SESSION['options'.$i.'_price'];
                $extra_opt_price += $_SESSION['options' . $i . '_price'];
            endif;
        }
        if ($extra_opt_price > 0):
            $order_desc .= ', Other Extra Packages (' . CURRENCY . $extra_opt_price . ')';
            $gross_total_price += $extra_opt_price;
        endif;


        $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total_price);
        if ($purchase_dis_rate > 0) {
            $purchase_dis = round($purchase_dis_rate * $gross_total_price, 2);
            /* $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total_price.'</span> <br>
              Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')
              '; */
        }


        if (isset($_SESSION['pcode'])):
            $p = $this->logodesignmodel->promo($_SESSION['pcode']);
            $pcode = json_decode($p);
            if ($pcode != '') {
                $promotional_discount = $pcode->promo_dis;
            }

        endif;
        $total_before_promotional = $gross_total_price - $purchase_dis;
        if ($promotional_discount > 0) {
            /* $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')'; */
        }

        $total_before_tax = $total_before_promotional - $promotional_discount;
        $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
        if ($tax_rate) {
            $tax_amount = $tax_rate * $total_before_tax;
            /* $order_desc.= ', <br > Tax Amount '.CURRENCY.$tax_amount; */
        }

        //$order_desc .='.';        

        $data['purchase_dis_rate'] = $purchase_dis_rate;

        $data['gross_total_price'] = $gross_total_price;
        $data['purchase_dis'] = $purchase_dis;
        $data['total_before_promotional'] = $total_before_promotional;
        $data['promotional_discount'] = $promotional_discount;
        $data['total_before_tax'] = $total_before_tax;
        $data['tax_amount'] = $tax_amount;
        $data['net_total'] = $net_total = number_format($total_before_tax + $tax_amount, 2, '.', '');

        $data['order_desc'] = $order_desc;

        $this->db->update('logo_web', array('paid_price' => $net_total), array("logo_web_id" => $_SESSION['logo_web_id']));


        if (SITE_ID == 7):
            //echo gettype($gross_total_price)."<br>";        
            $net_total *= 100;

            //echo gettype($net_total);
            settype($net_total, 'integer');
            //echo gettype($net_total);

            $this->load->library('jetpay');
            $data['state'] = $this->jetpay->get_state();
            if (isset($_POST['submit'])) {
                $transactionID = $this->jetpay->get_transactionID();
                $trans_type = $this->jetpay->trans_type;
                $tid = $this->jetpay->tid;
                $cardnum = $_POST['cardnum'];
                $cvv = $_POST['cvv'];
                $expmo = (strlen($_POST['expmonth']) < 2) ? '0' . $_POST['expmonth'] : $_POST['expmonth'];
                $expyr = $_POST['expyear'];
                $name = $_POST['fullname'];
                $amount = $net_total;
                $address = $_POST['billing_address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];
                $email = $_SESSION['email_id'];
                $verSub = '';

                $xmlString = "<JetPay>";
                $xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
                $xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
                $xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
                $xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
                $xmlString .= "<CVV2>" . $cvv . "</CVV2>";
                $xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
                $xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
                $xmlString .= "<CardName>" . $name . "</CardName>";
                $xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
                $xmlString .= "<BillingAddress>" . $address . "</BillingAddress>";
                $xmlString .= "<BillingCity>" . $city . "</BillingCity>";
                $xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
                $xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
                $xmlString .= "<Email>" . $email . "</Email>";
                $xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                $xmlString .= "</JetPay>";

                //print "$xmlString.<br>";        
                //Send XML to JetPay 
                $xmlResponse = $this->jetpay->sendXMLString($xmlString);
                //var_dump($xmlResponse); die;
                if ($xmlResponse->ActionCode == '000'):
                    $this->logodesignmodel->update();
                    //redirect('orders/thankyou');
                    header('Location: ' . base_url() . 'orders/thankyou?p=' . $amount);
                else:
                    //var_dump($xmlResponse);
                    //$data['ActionCode'] = $xmlResponse->ActionCode;
                    $data['ResponseText'] = $xmlResponse->ResponseText;
                endif;
                //var_dump($xmlResponse->JetPayResponse);            
            }
            $this->load->view('logo/orders/jetpay', $data);
        elseif (SITE_ID == 6):
            $this->load->view('logo/orders/nochex', $data);
        endif;
    }

    public function epayment_old() {
        if (isset($_REQUEST['logo_web_id']) && $_REQUEST['logo_web_id'] != '') {
            $logo_web_id = $_REQUEST['logo_web_id'];
            $_SESSION['logo_web_id'] = $logo_web_id;
            $auth = $_REQUEST['auth_code'];
            $get_row = $this->logodesignmodel->get_num_rows('logo_web', array('logo_web_id' => $logo_web_id, 'authentication_code' => @$auth));

            //echo $get_row;
            if ($get_row > 0) {
                $unpaid_status = $this->logodesignmodel->get_num_rows('logo_web', array('logo_web_id' => $logo_web_id, 'payment' => '0'));
                if ($unpaid_status > 0) {
                    $details = $this->logodesignmodel->get_row_obj('logo_web', array('logo_web_id' => $logo_web_id));
                    $extra = $this->logodesignmodel->get_row_obj('order_extra', array('logo_web_id' => $logo_web_id));

                    $_SESSION['company_name'] = $details->company_name;
                    $logo_price = $details->price;
                    $web = $details->web;
                    $brouchure = $details->brouchure;
                    $options = $details->options;

                    $extra_opt = $extra->price_extra_logo;
                    $extra_opt += $extra->price_logoby_designer;
                    $extra_opt += $extra->price_order_lifetime;
                    $extra_opt += $extra->price_order_flas;
                    $extra_opt += $extra->price_logo_24hr;
                    $extra_opt += $extra->price_black_white;
                    $extra_opt += $extra->price_business_card;
                    $extra_opt += $extra->price_order_letter;
                    $extra_opt += $extra->price_order_envelop;
                    $extra_opt += $extra->price_order_complement;
                    $extra_opt += $extra->price_order_stationary;
                    $extra_opt += $extra->price_order_business;
                    $extra_opt += $extra->price_order_letter_print;
                    $extra_opt += $extra->price_order_envelop_print;
                    $extra_opt += $extra->price_order_complement_print;
                    $extra_opt += $extra->price_order_mouse;
                    $extra_opt += $extra->price_order_cap;
                    $extra_opt += $extra->price_order_pens;
                    $extra_opt += $extra->price_order_cotton;
                    $extra_opt += $extra->price_order_tshirt;

                    $order_desc = $details->package . '(' . CURRENCY . $details->price . ')';
                    if ($web) {
                        $order_desc .= ', ' . $details->web_gold . '(' . CURRENCY . $web . ')';
                    }
                    if ($brouchure) {
                        $order_desc .= ', ' . $details->web_elite . '(' . CURRENCY . $brouchure . ')';
                    }
                    if ($options) {
                        $order_desc .= ', ' . $extra->blackn24 . '(' . CURRENCY . $options . ')';
                    }
                    if ($extra_opt > 0) {
                        $order_desc .= ', Other Extra Packages (' . CURRENCY . $extra_opt . ')';
                    }

                    $gross_total = $logo_price + $web + $brouchure + $options + $extra_opt;

                    $purchase_dis = 0;
                    $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total);
                    if ($purchase_dis_rate > 0) {
                        $purchase_dis = round($purchase_dis_rate * $gross_total, 2);
                        /* $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total.'</span> <br>
                          Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')
                          '; */
                    }
                    $total_before_promo = $gross_total - $purchase_dis;
                    $promotional_discount = 0;
                    if (isset($_REQUEST['pcode'])):
                        $p = $this->logodesignmodel->promo($_REQUEST['pcode'], $total_before_promo, $logo_web_id);
                        $pcode = json_decode($p);
                        if ($pcode != '') {
                            $promotional_discount = $pcode->promo_dis;
                        }
                    endif;
                    /* sif($promotional_discount>0){
                      $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')';
                      } */
                    $total_before_tax = $total_before_promo - $promotional_discount;
                    $tax_amount = 0;
                    $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
                    if ($tax_rate) {
                        $tax_amount = $tax_rate * $total_before_tax;
                    }

                    $net_total = $gross_total - $purchase_dis - $promotional_discount + $tax_amount;

                    $data['gross_total_price'] = $gross_total;
                    $data['purchase_dis_rate'] = $purchase_dis_rate;
                    $data['purchase_dis'] = $purchase_dis;
                    $data['promotional_discount'] = $promotional_discount;
                    $data['tax_amount'] = $tax_amount;

                    $data['order_desc'] = $order_desc;
                    $data['net_total'] = $net_total;

                    $this->db->update('logo_web', array('paid_price' => $net_total), array("logo_web_id" => $logo_web_id));

                    $net_total *= 100;
                    //echo gettype($net_total);
                    settype($net_total, 'integer');

                    if (SITE_ID == 7):
                        $this->load->library('jetpay');
                        $data['state'] = $this->jetpay->get_state();
                        if (isset($_POST['submit'])) {
                            $transactionID = $this->jetpay->get_transactionID();
                            $trans_type = $this->jetpay->trans_type;
                            $tid = $this->jetpay->tid;
                            $cardnum = $_POST['cardnum'];
                            $cvv = $_POST['cvv'];
                            $expmo = (strlen($_POST['expmonth']) < 2) ? '0' . $_POST['expmonth'] : $_POST['expmonth'];
                            $expyr = $_POST['expyear'];
                            $name = $_POST['fullname'];
                            $amount = $net_total;
                            $address = $_POST['billing_address'];
                            $city = $_POST['city'];
                            $state = $_POST['state'];
                            $zip = $_POST['zip'];
                            $email = $details->email_id;
                            $verSub = '';

                            $xmlString = "<JetPay>";
                            $xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
                            $xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
                            $xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
                            $xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
                            $xmlString .= "<CVV2>" . $cvv . "</CVV2>";
                            $xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
                            $xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
                            $xmlString .= "<CardName>" . $name . "</CardName>";
                            $xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
                            $xmlString .= "<BillingAddress>" . $address . "</BillingAddress>";
                            $xmlString .= "<BillingCity>" . $city . "</BillingCity>";
                            $xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
                            $xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
                            $xmlString .= "<Email>" . $email . "</Email>";
                            $xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                            $xmlString .= "</JetPay>";

                            //print "$xmlString.<br>";        
                            //Send XML to JetPay 
                            $xmlResponse = $this->jetpay->sendXMLString($xmlString);

                            if ($xmlResponse->ActionCode == '000'):
                                $this->logodesignmodel->update($logo_web_id);
                                //redirect('orders/thankyou');
                                header('Location: ' . base_url() . 'orders/thankyou?p=' . $amount);
                            else:
                                var_dump($xmlResponse);
                                //$data['ActionCode'] = $xmlResponse->ActionCode;
                                $data['ResponseText'] = $xmlResponse->ResponseText;
                            endif;
                            //var_dump($xmlResponse->JetPayResponse);            
                        }
                        $this->load->view('logo/orders/jetpay', $data);
                    elseif (SITE_ID == 6):
                        //$_SESSION['logo_web_id'] = $_REQUEST['logo_web_id'];
                        $this->load->view('logo/orders/nochex', $data);
                    endif;
                }
                else {
                    die('You already made payment with us');
                }
            } else {
                die("invalid link");
            }
        } else {
            die("Invalid Order ID");
        }
    }

    public function epayment() {
        if (isset($_REQUEST['logo_web_id']) && $_REQUEST['logo_web_id'] != '') {
            $logo_web_id = $_REQUEST['logo_web_id'];
            $_SESSION['logo_web_id'] = $logo_web_id;
            $auth = $_REQUEST['auth_code'];
            $get_row = $this->logodesignmodel->get_num_rows('logo_web', array('logo_web_id' => $logo_web_id, 'authentication_code' => @$auth));

            //echo $get_row;
            if ($get_row > 0) {
                $unpaid_status = $this->logodesignmodel->get_num_rows('logo_web', array('logo_web_id' => $logo_web_id, 'payment' => '0'));
                if ($unpaid_status > 0) {
                    $details = $this->logodesignmodel->get_row_obj('logo_web', array('logo_web_id' => $logo_web_id));
                    $extra = $this->logodesignmodel->get_row_obj('order_extra', array('logo_web_id' => $logo_web_id));

                    $_SESSION['company_name'] = $details->company_name;
                    $logo_price = $details->price;
                    $web = $details->web;
                    $brouchure = $details->brouchure;
                    $options = $details->options;

                    $extra_opt = $extra->price_extra_logo;
                    $extra_opt += $extra->price_logoby_designer;
                    $extra_opt += $extra->price_order_lifetime;
                    $extra_opt += $extra->price_order_flas;
                    $extra_opt += $extra->price_logo_24hr;
                    $extra_opt += $extra->price_black_white;
                    $extra_opt += $extra->price_business_card;
                    $extra_opt += $extra->price_order_letter;
                    $extra_opt += $extra->price_order_envelop;
                    $extra_opt += $extra->price_order_complement;
                    $extra_opt += $extra->price_order_stationary;
                    $extra_opt += $extra->price_order_business;
                    $extra_opt += $extra->price_order_letter_print;
                    $extra_opt += $extra->price_order_envelop_print;
                    $extra_opt += $extra->price_order_complement_print;
                    $extra_opt += $extra->price_order_mouse;
                    $extra_opt += $extra->price_order_cap;
                    $extra_opt += $extra->price_order_pens;
                    $extra_opt += $extra->price_order_cotton;
                    $extra_opt += $extra->price_order_tshirt;
                    $pack_detail = $details->package;
                    if ($pack_detail == START_UP_LP_WITH_1_PAGE || $pack_detail == START_UP_LP_6 || $pack_detail == START_UP_LP_12 || $pack_detail == COMPLETE_LP_WITH_12_PAGE || $pack_detail == COMPLETE_STAT_AND_6_PAGE || $pack_detail == bronze || $pack_detail == silver || $pack_detail == gold) {
                        if (strstr($pack_detail, "CARD")) {
                            $logo_package = str_replace("CARD", " ", $pack_detail);
                        }
                        if (!empty($details->web_gold)) {
                            $order_desc = $pack_detail . ' (' . CURRENCY . ($details->price + $web) . ')';
                        } else {
                            $order_desc = $pack_detail . ' (' . CURRENCY . $details->price . ')';
                            if ($web) {
                                $order_desc .= ', ' . $details->web_gold . ' (' . CURRENCY . $web . ')';
                            }
                        }
                    } else {

                        $order_desc = $pack_detail . ' (' . CURRENCY . $details->price . ')';

                        if ($web) {
                            $order_desc .= ', ' . $details->web_gold . ' (' . CURRENCY . $web . ')';
                        }
                    }
                    $order_desc = str_replace("<br/>", "\n", $order_desc);
                    if ($brouchure) {
                        $order_desc .= ', ' . $details->web_elite . ' (' . CURRENCY . $brouchure . ')';
                    }
                    if ($options) {
                        $order_desc .= ', ' . $extra->blackn24 . ' (' . CURRENCY . $options . ')';
                    }
                    if ($extra_opt > 0) {
                        $order_desc .= ', Other Extra Packages (' . CURRENCY . $extra_opt . ')';
                    }

                    $gross_total = $logo_price + $web + $brouchure + $options + $extra_opt;

                    $purchase_dis = 0;
                    $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total);
                    if ($purchase_dis_rate > 0) {
                        $purchase_dis = round($purchase_dis_rate * $gross_total, 2);
                        /* $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total.'</span> <br>
                          Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')
                          '; */
                    }
                    $total_before_promo = $gross_total - $purchase_dis;
                    $promotional_discount = 0;
                    if (isset($_REQUEST['pcode'])):
                        $p = $this->logodesignmodel->promo($_REQUEST['pcode'], $total_before_promo, $logo_web_id);
                        $pcode = json_decode($p);
                        if ($pcode != '') {
                            $promotional_discount = $pcode->promo_dis;
                        }
                    endif;
                    /* sif($promotional_discount>0){
                      $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')';
                      } */
                    $total_before_tax = $total_before_promo - $promotional_discount;
                    $tax_amount = 0;
                    $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
                    if ($tax_rate) {
                        $tax_amount = $tax_rate * $total_before_tax;
                    }

                    $net_total = $gross_total - $purchase_dis - $promotional_discount + $tax_amount;

                    $data['gross_total_price'] = $gross_total;
                    $data['purchase_dis_rate'] = $purchase_dis_rate;
                    $data['purchase_dis'] = $purchase_dis;
                    $data['promotional_discount'] = $promotional_discount;
                    $data['tax_amount'] = $tax_amount;

                    $data['order_desc'] = $order_desc;
                    $data['net_total'] = $net_total;

                    $this->db->update('logo_web', array('paid_price' => $net_total), array("logo_web_id" => $_SESSION['logo_web_id']));

                    $net_total *= 100;
                    //echo gettype($net_total);
                    settype($net_total, 'integer');

                    if (SITE_ID == 7):
                        $this->load->library('jetpay');
                        $data['state'] = $this->jetpay->get_state();
                        if (isset($_POST['submit'])) {
                            $transactionID = $this->jetpay->get_transactionID();
                            $trans_type = $this->jetpay->trans_type;
                            $tid = $this->jetpay->tid;
                            $cardnum = $_POST['cardnum'];
                            $cvv = $_POST['cvv'];
                            $expmo = (strlen($_POST['expmonth']) < 2) ? '0' . $_POST['expmonth'] : $_POST['expmonth'];
                            $expyr = $_POST['expyear'];
                            $name = $_POST['fullname'];
                            $amount = $net_total;
                            $address = $_POST['billing_address'];
                            $city = $_POST['city'];
                            $state = $_POST['state'];
                            $zip = $_POST['zip'];
                            $email = $details->email_id;
                            $verSub = '';

                            $xmlString = "<JetPay>";
                            $xmlString .= "<TransactionType>" . $trans_type . "</TransactionType>";
                            $xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
                            $xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
                            $xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
                            $xmlString .= "<CVV2>" . $cvv . "</CVV2>";
                            $xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
                            $xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
                            $xmlString .= "<CardName>" . $name . "</CardName>";
                            $xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
                            $xmlString .= "<BillingAddress>" . $address . "</BillingAddress>";
                            $xmlString .= "<BillingCity>" . $city . "</BillingCity>";
                            $xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
                            $xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
                            $xmlString .= "<Email>" . $email . "</Email>";
                            $xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                            $xmlString .= "</JetPay>";

                            //print "$xmlString.<br>";        
                            //Send XML to JetPay 
                            $xmlResponse = $this->jetpay->sendXMLString($xmlString);

                            if ($xmlResponse->ActionCode == '000'):
                                $this->logodesignmodel->update($logo_web_id);
                                //redirect('orders/thankyou');
                                header('Location: ' . base_url() . 'orders/thankyou?p=' . $amount);
                            else:
                                var_dump($xmlResponse);
                                //$data['ActionCode'] = $xmlResponse->ActionCode;
                                $data['ResponseText'] = $xmlResponse->ResponseText;
                            endif;
                            //var_dump($xmlResponse->JetPayResponse);            
                        }
                        $this->load->view('logo/orders/jetpay', $data);
                    elseif (SITE_ID == 6):
                        $_SESSION['logo_web_id'] = $_REQUEST['logo_web_id'];
                        $this->load->view('logo/orders/nochex', $data);
                    endif;
                }
                else {
                    die('You already made payment with us');
                }
            } else {
                die("invalid link");
            }
        } else {
            die("Invalid Order ID");
        }
    }

    // for autosaving data typed by user
    public function autosave() {
        if (isset($_POST)) {
            foreach ($_POST as $k => $v) {
                $_SESSION[$k] = $v;
            }
        }
    }

    // save option one item
    public function save_options() {
        if (isset($_POST['options'])):
            unset($_SESSION['deletedServices']['options']);

            $_SESSION['pack_id'] = isset($_POST['pack_id']) ? $_POST['pack_id'] : $_SESSION['pack_id'];

            switch ($_POST['options']) {
                case 1:
                    $return['options'] = $_SESSION['options'] = EXPRESS_DELIVERY;
                    $return['options_price'] = $_SESSION['options_price'] = EXPRESS_DELIVERY_P;
                    break;

                case 2:
                    $return['options'] = $_SESSION['options'] = BLACK_N_WHITE;
                    $return['options_price'] = $_SESSION['options_price'] = BLACK_N_WHITE_P;
                    break;

                case 3:
                    $return['options'] = $_SESSION['options'] = BOTH_SERVICES;
                    $return['options_price'] = $_SESSION['options_price'] = BOTH_SERVICES_P;
                    break;

                default:
                    unset($_SESSION['options'], $_SESSION['options_price'], $_SESSION['poptions' . $_SESSION['pack_id']], $_SESSION['poptions_pack' . $_SESSION['pack_id']], $_SESSION['poptions_price' . $_SESSION['pack_id']]);
                    $return['options'] = '';
                    $return['options_price'] = '';
                    break;
            }

            if (isset($_SESSION['options_price'])) {
                $_SESSION['poptions_price' . $_SESSION['pack_id']] = $_SESSION['options_price'];
            }
            if (isset($_SESSION['options'])) {
                $_SESSION['poptions_pack' . $_SESSION['pack_id']] = $_SESSION['options'];
            }
            echo json_encode($return);
        endif;
    }

    public function save_extra_options() {
        if (isset($_POST['extra_options'])):
            $extra_options = preg_split('/(?<=\d)(?=[a-z])|(?<=[a-z])(?=\d)/i', $_POST['extra_options']);
            $index = $extra_options[1];
            $ses_name = 'options' . $index;
            $ses_name2 = 'options' . $index . '_price';
            if (@$_POST['val'] == '0'):
                unset($_SESSION['options' . $index], $_SESSION['options' . $index . '_price']);
                $return['extra_options'] = '';
                $return['extra_options_price'] = '';
            else:
                unset($_SESSION['deletedServices'][$ses_name]);
                switch ($index) {
                    case 1:
                        $return['extra_options'] = $_SESSION[$ses_name] = SIX_LOGO_CONCEPT;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = SIX_LOGO_CONCEPT_P;
                        break;

                    case 2:
                        $return['extra_options'] = $_SESSION[$ses_name] = LOGO_BY_DIFFERENT_DESIGNER;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = LOGO_BY_DIFFERENT_DESIGNER_P;
                        break;

                    case 3:
                        $return['extra_options'] = $_SESSION[$ses_name] = LIFE_TIME_FILE_STORAGE;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = LIFE_TIME_FILE_STORAGE_P;
                        break;

                    case 4:
                        $return['extra_options'] = $_SESSION[$ses_name] = ANIMATED_FLASH;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = ANIMATED_FLASH_P;
                        break;

                    case 5:
                        $return['extra_options'] = $_SESSION[$ses_name] = LOGO_WITHIN_24_HOUR;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = LOGO_WITHIN_24_HOUR_P;
                        break;

                    case 6:
                        $return['extra_options'] = $_SESSION[$ses_name] = BLACK_N_WHITE_FILE_LOGO;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = BLACK_N_WHITE_FILE_LOGO_P;
                        break;

                    case 7:
                        $return['extra_options'] = $_SESSION[$ses_name] = IMPRESS_WITH_BUSINESS_CARD;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = IMPRESS_WITH_BUSINESS_CARD_P;
                        if (isset($_SESSION['options11'])) {
                            unset($_SESSION['options11'], $_SESSION['options11_price']);
                        }
                        break;

                    case 8:
                        $return['extra_options'] = $_SESSION[$ses_name] = LETTER_HEAD;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = LETTER_HEAD_P;
                        if (isset($_SESSION['options11'])) {
                            unset($_SESSION['options11'], $_SESSION['options11_price']);
                        }
                        break;

                    case 9:
                        $return['extra_options'] = $_SESSION[$ses_name] = ENVELOPE_DESIGN;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = ENVELOPE_DESIGN_P;
                        break;

                    case 10:
                        $return['extra_options'] = $_SESSION[$ses_name] = COMPLIMENT_SLIP;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = COMPLIMENT_SLIP_P;
                        if (isset($_SESSION['options11'])) {
                            unset($_SESSION['options11'], $_SESSION['options11_price']);
                        }
                        break;

                    case 11:
                        $return['extra_options'] = $_SESSION[$ses_name] = STATIONARY_DESIGN_BUNDLE;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = STATIONARY_DESIGN_BUNDLE_P;
                        if (isset($_SESSION['options7'])) {
                            unset($_SESSION['options7'], $_SESSION['options7_price']);
                        }
                        if (isset($_SESSION['options8'])) {
                            unset($_SESSION['options8'], $_SESSION['options8_price']);
                        }
                        if (isset($_SESSION['options10'])) {
                            unset($_SESSION['options10'], $_SESSION['options10_price']);
                        }
                        break;

                    case 12:

                        if (( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options'] = $_SESSION[$ses_name] = BUSINESS_CARD_PRINT_250;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = BUSINESS_CARD_PRINT_250_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = BUSINESS_CARD_PRINT_500;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = BUSINESS_CARD_PRINT_500_P;
                        else:
                            $return['extra_options'] = '';
                            $return['extra_options_price'] = '';
                        endif;
                        break;

                    case 13:
                        if (( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options'] = $_SESSION[$ses_name] = LETTER_HEAD_PRINT_25;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = LETTER_HEAD_PRINT_25_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = LETTER_HEAD_PRINT_250;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = LETTER_HEAD_PRINT_250_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '3' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '3')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = LETTER_HEAD_PRINT_1000;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = LETTER_HEAD_PRINT_1000_P;
                        else:
                            $return['extra_options'] = '';
                            $return['extra_options_price'] = '';
                        endif;
                        break;

                    case 14:
                        if (( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options'] = $_SESSION[$ses_name] = ENVELOPE_DESIGN_PRINT_100;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = ENVELOPE_DESIGN_PRINT_100_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = ENVELOPE_DESIGN_PRINT_250;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = ENVELOPE_DESIGN_PRINT_250_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '3' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '3')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = ENVELOPE_DESIGN_PRINT_1000;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = ENVELOPE_DESIGN_PRINT_1000_P;
                        else:
                            $return['extra_options'] = '';
                            $return['extra_options_price'] = '';
                        endif;
                        break;

                    case 15:
                        if (( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options'] = $_SESSION[$ses_name] = COMPLIMENT_SLIP_PRINT_100;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = COMPLIMENT_SLIP_PRINT_100_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = COMPLIMENT_SLIP_PRINT_250;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = COMPLIMENT_SLIP_PRINT_250_P;
                        elseif (isset($_POST['extra_qty']) && $_POST['extra_qty'] == '3' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '3')) :
                            $return['extra_options'] = $_SESSION[$ses_name] = COMPLIMENT_SLIP_PRINT_1000;
                            $return['extra_options_price'] = $_SESSION[$ses_name2] = COMPLIMENT_SLIP_PRINT_1000_P;
                        else:
                            $return['extra_options'] = '';
                            $return['extra_options_price'] = '';
                        endif;
                        break;

                    case 16:
                        $qty = isset($_POST['extra_qty']) ? $_POST['extra_qty'] : (isset($_POST['ext_option']) ? $_POST['ext_option'] : 1);
                        $return['extra_options'] = $_SESSION[$ses_name] = MOUSE_MAT_WITH_LOGO . '(' . MOUSE_MAT_WITH_LOGO_P . ' * ' . $qty . ')';
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = MOUSE_MAT_WITH_LOGO_P * $qty;
                        $return['total_mo'] = '<a id="options16___' . MOUSE_MAT_WITH_LOGO . '(' . MOUSE_MAT_WITH_LOGO_P . ' * ' . $qty . ')___options16_price___' . MOUSE_MAT_WITH_LOGO_P * $qty . '" class="remove_package" href="javascript:void(0)" style="display: none;"><img src="' . base_url() . 'assets/images/remove.gif"></a>';
                        $_SESSION['mouse_qty'] = $qty;
                        break;
                    // $qty = isset($_POST['extra_qty']) ? $_POST['extra_qty'] : (isset($_POST['ext_option']) ? $_POST['ext_option'] : 1);
                    // $return['extra_options'] = $_SESSION[$ses_name] = MOUSE_MAT_WITH_LOGO . '(' . MOUSE_MAT_WITH_LOGO_P . ' * ' . $qty . ')';
                    // $return['extra_options_price'] = $_SESSION[$ses_name2] = MOUSE_MAT_WITH_LOGO_P * $qty;
                    // break;

                    case 17:
                        if (isset($_POST['extra_qty']) && $_POST['extra_qty'] != '') {
                            $options = explode(':', $_POST['extra_qty']);
                        } else {
                            $options = explode(':', $_POST['ext_option']);
                        }
                        $_SESSION['cap_qty'] = $options[0];
                        $_SESSION['cap_color'] = $options[1];
                        $return['extra_options'] = $_SESSION[$ses_name] = CAP_WITH_LOGO . $options[1] . '(' . CAP_WITH_LOGO_P . '*' . $options[0] . ')';
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = CAP_WITH_LOGO_P * $options[0];
                        // <a style="" id="options17___Order a &lt;u&gt;custom CAP&lt;/u&gt; with your personal logo on (free delivery)!Cap Color - Black(35*1)___options17_price___35" class="remove_package" href="javascript:void(0)"><img src="http://www.logodesignguarantee.com/ldg_com/assets/images/remove.gif"></a>
                        $return['total_mo'] = '<a id="options17___' . CAP_WITH_LOGO . $options[1] . '(' . CAP_WITH_LOGO_P . '*' . $options[0] . ')___options17_price___' . CAP_WITH_LOGO_P * $options[0] . '" class="remove_package" href="javascript:void(0)" style="display: none;"><img src="' . base_url() . 'assets/images/remove.gif"></a>';

                        break;
                    // if (isset($_POST['extra_qty']) && $_POST['extra_qty'] != '') {
                    //     $options = explode(':', $_POST['extra_qty']);
                    // } else {
                    //     $options = explode(':', $_POST['ext_option']);
                    // }
                    // $return['extra_options'] = $_SESSION[$ses_name] = CAP_WITH_LOGO . $options[1] . '(' . CAP_WITH_LOGO_P . '*' . $options[0] . ')';
                    // $return['extra_options_price'] = $_SESSION[$ses_name2] = CAP_WITH_LOGO_P * $options[0];
                    // break;

                    case 18:
                        $return['extra_options'] = $_SESSION[$ses_name] = PEN_WITH_LOGO;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = PEN_WITH_LOGO_P;
                        break;

                    case 19:
                        $return['extra_options'] = $_SESSION[$ses_name] = BAG_WITH_LOGO;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = BAG_WITH_LOGO_P;
                        break;

                    case 20:

                        if (isset($_POST['extra_qty']) && $_POST['extra_qty'] != '') {
                            $options = explode(':', $_POST['extra_qty']);
                        } else {
                            $options = explode(':', $_POST['ext_option']);
                        }
                        //echo $options;                    
                        $totol_price = TSHIRT_WITH_LOGO_P * ($options[1] + $options[2] + $options[3] + $options[4] + $options[5]);

                        $_SESSION['tsmall'] = $options[1];
                        $_SESSION['tmiddle'] = $options[2];
                        $_SESSION['tlarge'] = $options[3];
                        $_SESSION['txlarge'] = $options[4];
                        $_SESSION['txxlarge'] = $options[5];
                        $size = 'S=' . $options[1] . ', M=' . $options[2] . ', L=' . $options[3] . ', XL=' . $options[4] . ', XXL=' . $options[5];
                        if ($options[1] == 0 && $options[2] == 0 && $options[3] == 0 && $options[4] == 0 && $options[5] == 0) {
                            $return['total_tshirt'] = 0;
                        } else {
                            $return['total_tshirt'] = '<a id="options20___' . TSHIRT_WITH_LOGO . $size . '___options20_price___' . $totol_price . '" class="remove_package" href="javascript:void(0)" style="display: none;"><img src="' . base_url() . 'assets/images/remove.gif"></a>';
                        }

                        $return['extra_options'] = $_SESSION[$ses_name] = TSHIRT_WITH_LOGO . $size;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = $totol_price;
                        break;
                    // if (isset($_POST['extra_qty']) && $_POST['extra_qty'] != '') {
                    //     $options = explode(':', $_POST['extra_qty']);
                    //     $sizes='S['.$options[1].']M['.$options[2].']L['.$options[3].']XL['.$options[4].']XXl['.$options[5].']';
                    //     $_SESSION['tsmall']=$options[1];
                    //     $_SESSION['tmiddle']=$options[2];
                    //     $_SESSION['tlarge']=$options[3];
                    //     $_SESSION['txlarge']=$options[4];
                    //     $_SESSION['txxlarge']=$options[5];
                    //      $options = array_sum($options);
                    // } else {
                    //     $options = explode(':', $_POST['ext_option']);
                    //     $sizes='S['.$options[1].']M['.$options[2].']L['.$options[3].']XL['.$options[4].']XXl['.$options[5].']';
                    //     $options=$options[1]+$options[2]+$options[3]+$options[4]+$options[5];
                    //     $_SESSION['tsmall']=$options[1];
                    //     $_SESSION['tmiddle']=$options[2];
                    //     $_SESSION['tlarge']=$options[3];
                    //     $_SESSION['txlarge']=$options[4];
                    //     $_SESSION['txxlarge']=$options[5];
                    // }
                    // $totol_price = TSHIRT_WITH_LOGO_P *$options;
                    // $return['extra_options'] = $_SESSION[$ses_name] = TSHIRT_WITH_LOGO.$sizes;
                    // $return['extra_options_price'] = $_SESSION[$ses_name2] = $totol_price;
                    // break;

                    default:
                        unset($_SESSION[$ses_name], $_SESSION[$ses_name2]);
                        $return['extra_options'] = '';
                        $return['extra_options_price'] = '';
                        break;
                }
            endif;

            echo json_encode($return);
        endif;
    }

    public function thankyou() {
        if (COUNTRY == "UK"):    // LDG.COM will Update record in Payment page 
            $this->logodesignmodel->update();
        endif;
        session_destroy();
        $this->load->view('logo/orders/thankyou');
    }

    // for Edit Shopping Basket
    public function remove_package() {
        $session = $_POST["sesName1"];
        $session2 = $_POST["sesName2"];

        if ($session == "options" && isset($_SESSION['poptions_pack' . $_SESSION['pack_id']])) {
            unset($_SESSION['poptions_price' . $_SESSION['pack_id']], $_SESSION['poptions_pack' . $_SESSION['pack_id']]);
        }
        if ($session2 == 'web') {
            unset($_SESSION['web_price']);
        }
        unset($_SESSION[$session]);
        unset($_SESSION[$session2]);
        $_SESSION['deletedServices'][$session] = $_POST['sesName1'] . '___' . $_POST['sesValue1'] . '___' . $_POST['sesName2'] . '___' . $_POST['sesValue2'];
        //echo @$_SESSION[$session].'----'.@$_SESSION[$session2];
    }

    public function reasign_session() {

        $_SESSION['poptions_price' . $_SESSION['pack_id']] = "39";
        $_SESSION['poptions_pack' . $_SESSION['pack_id']] = "24 hours delivery";
        //echo"<pre>";print_r($_SESSION);
    }

    public function reselect_package_old() {
        $session = $_POST["sesName1"];
        $session2 = $_POST["sesName2"];

        $_SESSION[$session] = $_POST["sesValue1"];
        $_SESSION[$session2] = $_POST["sesValue2"];

        if ($_SESSION['deletedServices'][$session])
            unset($_SESSION['deletedServices'][$session]);
        //echo @$_SESSION[$session].'----'.@$_SESSION[$session2];
    }

    public function reselect_package() {
        $session = $_POST["sesName1"];
        $session2 = $_POST["sesName2"];
        if ($session2 == 'web') {
            $_SESSION['web_price'] = $_POST["sesValue2"];
        }
        $_SESSION[$session] = $_POST["sesValue1"];
        $_SESSION[$session2] = $_POST["sesValue2"];

        if ($_SESSION['deletedServices'][$session])
            unset($_SESSION['deletedServices'][$session]);
        //echo @$_SESSION[$session].'----'.@$_SESSION[$session2];
    }

    // for Edit Shopping Basket Ends

    function prev_file() {

        if (isset($_POST['fileList'])) {
            if (!isset($_SESSION['fileList'])) {
                //$file=$_POST['fileList'];
                echo $_SESSION['fileList'] = $_POST['fileList'];
            } else {
                if (empty($_SESSION['fileList'])) {
                    echo $_SESSION['fileList'] = $_POST['fileList'];
                } else {
                    echo $_SESSION['fileList'] = $_SESSION['fileList'] . ':' . $_POST['fileList'];
                }
            }
            //unset($_SESSION['fileList']);
            //$file=$file.'/'.$_POST['fileList'];
            //echo $_SESSION['fileList']=$file.'/'.$_POST['fileList'];
        }
    }

    function remove_attach() {
        //print_r($_POST['file_name']);
        $file = '';
        unlink('web_images/' . $_POST['file_name']);
        if ($_POST['number'] == 0) {
            if ($_POST['next_number'] != 0) {
                $file = $_POST['file_name'] . ':';
            } else {
                $file = $_POST['file_name'];
            }
        } else {
            $file = ':' . $_POST['file_name'];
        }

        //echo $_SESSION['fileList'] = str_replace($file, "", $_SESSION['fileList']);
        if (isset($_SESSION['fileList'])) {

            echo $_SESSION['fileList'] = str_replace($file, "", $_SESSION['fileList']);
            if (isset($_SESSION['logo_web_id']) && $_SESSION['logo_web_id'] != '') {
                $insert_array = array('files' => $_SESSION['fileList']);
                $this->db->update('logo_web', $insert_array, array("logo_web_id" => $_SESSION['logo_web_id']));
            }
        }
        if (isset($_SESSION['filewithoutflash'])) {
            echo $_SESSION['filewithoutflash'] = str_replace($file, "", $_SESSION['filewithoutflash']);

            if (isset($_SESSION['logo_web_id']) && $_SESSION['logo_web_id'] != '') {
                $insert_array = array('files' => $_SESSION['filewithoutflash']);
                $this->db->update('logo_web', $insert_array, array("logo_web_id" => $_SESSION['logo_web_id']));
            }
        }
    }

    function uploadimagesfile() {
        $fil = '';
        $nows = date('ymdhis') . '_';

        foreach ($_FILES as $file) {

            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            if ($ext == 'jpg' || $ext == 'JPG' || $ext == 'svgz' || $ext == 'SVGZ' || $ext == 'svg' || $ext == 'SVG' || $ext == 'tiff' || $ext == 'TIFF' || $ext == 'tif' || $ext == 'TIF' || $ext == 'ico' || $ext == 'ICO' || $ext == 'bmp' || $ext == 'BMP' || $ext == 'jpe' || $ext == 'JPE' || $ext == 'jpeg' || $ext == 'JPEG' || $ext == 'GIF' || $ext == 'gif' || $ext == 'PNG' || $ext == 'png') {
                $filesss = $_SERVER['DOCUMENT_ROOT'] . '/web_images/' . $nows . $file['name'];
                if (move_uploaded_file($file['tmp_name'], $filesss)) {

                    $fil = $fil . ':' . $nows . $file['name'];

                    echo '<div class="inner-filelist" ><img src="' . base_url() . 'web_images/' . $nows . $file['name'] . '" height="150" width="150" class="remove_attach" title="' . $nows . $file['name'] . '"/><a class="thremove"><img src="assets/images/delete1.png"></a>  </div>';
                } else {
                    echo '<div class="inner-filelist" style="color:red;">Can not upload ' . $file['name'] . '</div>';
                }
            } else if ($ext == 'DOC' || $ext == 'doc' || $ext == 'DOCX' || $ext == 'docx' || $ext == 'CSV' || $ext == 'csv' || $ext == 'pdf' || $ext == 'PDF' || $ext == 'ppt' || $ext == 'pptx' || $ext == 'PPT' || $ext == 'xlsx' || $ext == 'XLSX' || $ext == 'fodt' || $ext == 'odt' || $ext == 'ott' || $ext == 'odt' || $ext == 'odp' || $ext == 'otp' || $ext == 'ods' || $ext == 'ots' || $ext == 'zip' || $ext == 'rar' || $ext == 'rtf' || $ext == 'tar' || $ext == 'psd' || $ext == 'ai' || $ext == 'eps') {

                $filesss = $_SERVER['DOCUMENT_ROOT'] . '/web_images/' . $nows . $file['name'];
                if (move_uploaded_file($file['tmp_name'], $filesss)) {

                    $fil = $fil . ':' . $nows . $file['name'];

                    $b = substr($nows . $file['name'], 13);
                    echo '<div class="inner-filelist" ><a title="' . $nows . $file['name'] . '" href="' . base_url() . 'web_images/' . $nows . $file['name'] . '" download>' . $b . '</a><a class="thremove"><img src="assets/images/delete1.png"></a></div>';
                } else {
                    echo '<div class="inner-filelist" style="color:red;">Can not upload ' . $file['name'] . '</div>';
                }
            } else {
                echo '<div class="inner-filelist" style="color:red;">' . $file['name'] . ' file is not valid</div>';
            }
        }
        $fil = substr($fil, 1);
        if (isset($_SESSION['fileList']) && !empty($_SESSION['fileList'])) {
            $_SESSION['fileList'] = $_SESSION['fileList'] . ':' . $fil;
        } else {

            $_SESSION['fileList'] = $fil;
        }
    }

}
