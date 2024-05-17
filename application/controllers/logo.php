<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $day = date("l");
        $date = date("j");
        $month = date("M");
        $year = date("y");
        $today = 'Midnight ' . TIME_ZONE . ', <span style="text-decoration:underline;">' . $day . '</span> ' . $date . ' ' . $month . ' &lsquo;' . $year;
        $data['today'] = $today;
        $this->load->vars($data);
        //echo md5($this->uri->uri_string()); 
        //echo $this->router->fetch_class();
        // 1440 min( one day) 
        //echo $this->router->fetch_class();
        //echo "<br/>"; // class = controller
//echo $this->router->fetch_method();       
    }

    public function __destruct() {
        //$this->db->close();
    }

    // public function index() {
    //     $this->output->cache(1440);
    //     $data['page_title'] = 'Home Page';
    //     $this->load->view('logo/index', $data);
    // }

    public function index() {
        $this->output->cache(1440);
        $this->load->view('includes/header-common');
        if ($this->uri->segment(1) != 'sixhourdetail') {
            $this->load->view('includes/slider-common');
        }
        $this->load->view('logo/index');
    }
    

    public function packages() {
        if (isset($_SESSION['web_package'])) {
            unset($_SESSION['web_package']);
        }
        $data['page_title'] = 'See Our Packages';
        $this->load->view('logo/startup', $data);
        // $this->load->view('logo/packages',$data);
    }

    public function process() {
        $this->output->cache(1440);
        $data['page_title'] = 'Process';
        $this->load->view('logo/process', $data);
    }

    public function compare() {
        $this->output->cache(1440);
        $data['page_title'] = 'Compare';
        $this->load->view('logo/compare', $data);
    }

    public function portfolio() {
        $this->output->cache(1440);
        $data['page_title'] = 'Portfolio';
        $this->load->view('logo/portfolionew', $data);
        // $this->load->view('logo/portfolio',$data);
    }

    public function guarantee() {
        $this->output->cache(1440);
        $data['page_title'] = '100 % Money Back Guarantee';
        $this->load->view('logo/guarantee', $data);
    }

    public function about() {
        $this->output->cache(1440);
        $data['page_title'] = 'About Us';
        $this->load->view('logo/about', $data);
    }

    public function management() {
        $this->output->cache(1440);
        $data['page_title'] = 'Management Team';
        $this->load->view('logo/management', $data);
    }

    public function quality() {
        $this->output->cache(1440);
        $data['page_title'] = 'Quality Control';
        $this->load->view('logo/quality', $data);
    }

    public function partnership() {
        $this->output->cache(1440);
        $data['page_title'] = 'Partnership Program';
        $this->load->view('logo/partnership', $data);
    }

    public function terms() {
        $this->output->cache(1440);
        $data['page_title'] = 'Terms and Condition';
        $this->load->view('logo/terms', $data);
    }

    public function privacy() {
        $this->output->cache(1440);
        $data['page_title'] = 'Privacy Policy';
        $this->load->view('logo/privacy', $data);
    }

    public function sampleproject() {
        $this->output->cache(1440);
        $data['page_title'] = 'Sample Project';
        $this->load->view('logo/sampleproject', $data);
    }

    public function faq() {
        $this->output->cache(1440);
        $data['page_title'] = 'Frequently Asked Questions';
        $this->load->view('logo/faq', $data);
    }

    public function charity() {
        $this->output->cache(1440);
        $data['page_title'] = 'See Our Charitable Work';
        $this->load->view('logo/charity', $data);
    }

    public function contact() {
        $data['page_title'] = 'Contact Us';
        if (isset($_POST['submit'])):

            /* echo '<pre>';
              print_r($_POST);
              die; */
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $message = '
            <table width="400" border="0" cellpadding="0" cellspacing="0">
            <tr>
            	<td width="140"><b>Full Name</b></td>
            	<td width="260"><p>' . @$_POST['fname'] . " " . @$_POST['lname'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Company Name</b></td>
            	<td><p>' . @$_POST['company_name'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Address</b></td>
            	<td><p>' . @$_POST['address'] . '</p></td>
            </tr>
            <tr>
            	<td><b>State</b></td>
            	<td><p>' . @$_POST['state'] . '</p></td>
            </tr>
            <tr>
            	<td><b>City</b></td>
            	<td><p>' . @$_POST['city'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Zip</b></td>
            	<td><p>' . @$_POST['zip'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Country</b></td>
            	<td><p>' . @$_POST['country'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Email</b></td>
            	<td><p>' . @$_POST['email_id'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Phone</b></td>
            	<td><p>' . @$_POST['phone_no'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Fax</b></td>
            	<td><p>' . @$_POST['fax'] . '</p></td>
            </tr>
            <tr>
            	<td><b>Comments</b></td>
            	<td><p>' . @$_POST['comments'] . '</p></td>
            </tr>        
            </table>
        ';
            $this->email->from('<' . @$_POST['email_id'] . '>', @$_POST['fname'] . " " . @$_POST['lname']);
            $this->email->subject('Clients Comments - ' . @$_POST['title']);
            $this->email->message($message);
            $this->email->to(INFO_MAIL);
            //$this->email->to('jagdesh010@hotmail.com');   
            $this->email->send();
            $this->email->clear();

            // Add Call Back Request From Site 
            $assign = '325';
            $assigned_date = date('Y-m-d H:i:s');
            $site_id = '6';
            $phone = @$_POST['phone_no'];
            $email = @$_POST['email_id'];
            $notes = @$_POST['comments'];

            $client_name = @$_POST['fname'] . " " . @$_POST['lname'];
            $this->db->insert('tbl_callback', array('assigned' => $assign, 'assigned_date' => $assigned_date, 'site_id' => $site_id, 'client_name' => $client_name, 'phone' => $phone, 'email' => $email, 'notes' => $notes));
            //$this->template->load('template','callback',@$data);	
            $data['staff_id'] = $staff_id = $assign;
            $data['callback_id'] = $callback_id = $this->db->insert_id();
            $data['phonestaff_detail'] = $phonestaff_detail = $this->db->get_where("tbl_phone_staff", array('staff_id' => $staff_id))->row();
            $request = $this->db->get_where('tbl_callback', array('id' => $callback_id))->row();
            $clientfrom = $this->db->get_where("tbl_sites", array('site_id' => $site_id))->row();
            $sitemail = "info@logodesignguarantee.co.uk";
            // Send Email to PhoneStaff
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from($sitemail, 'Admin Team ');
            $this->email->subject("ASSIGNED CALL BACK");
            $message = $this->load->view('logo/emailtemplate4', $data, TRUE);
            $this->email->message($message);

            $this->email->to('phonestaff@logodesignguarantee.com');
            $this->email->cc('mwgeronimo@hotmail.com,tommyod46@hotmail.com');
            //  $this->email->to('suzanmahrzan@hotmail.com');	
            // $this->email->bcc('suzanmahrzan@hotmail.com'); 
            $this->email->send();
        endif;

        $this->load->view('logo/contact', $data);
    }

    public function casestudy() {
        $data['page_title'] = 'Case Study';
        $this->load->view('logo/sampleproject', $data);
    }

    function invoice_payment() {
        if ($this->router->fetch_method() != "packages") {
            $this->output->cache(1440);
        }
        $this->load->view('invoice_payment');
    }

    public function sixhourdetail() {
        $data['page_title'] = '6-HOUR Logo Service';
        // $data['page_title'] = '';
        // die(base_url());
        $this->load->view('logo/6hourdetail', $data);
    }

}
