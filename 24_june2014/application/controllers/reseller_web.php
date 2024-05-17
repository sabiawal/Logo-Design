<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reseller_web extends CI_Controller 
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
        parent::__construct();
        // Your own constructor code
        @session_start();
        if(!$_SESSION['reseller_id']){
            $redirect_url = $this->uri->uri_string(); 
            $_SESSION['redirect_url'] = $redirect_url;			
            redirect('reseller/login');			
        }
        $this->load->model('logodesignmodel');
        //loading email library
        $this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html'; 
		$this->email->initialize($config);
    }
	/* for Reseller WebDesign */
	public function index(){
 	  $_SESSION['web_a'] = '0';
       $this->load->view('reseller/webdesign/index');
	}
    public function ordermid(){
    if (@$_SESSION["web_a"] == "1"){
            @$_SESSION["web_a"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else{
            if(!$_POST){
                if(!@$_SESSION['web_package']){
                    redirect('reseller_web/index'); 
                }
            }
            else{            
                foreach($_POST as $k => $v){
                    $_SESSION[$k] = $v;
                }
            }                        
        }        
        redirect('reseller_web/order'); 
	}
	public function order(){
        $_SESSION['web_a'] = '1';
        $_SESSION['web_b'] = '0';
        if(!@$_SESSION['web_package']){
            redirect('reseller_web/index');
        }
        $this->load->view('reseller/webdesign/order');
	}
    public function cartmid(){
        if (@$_SESSION["web_b"] == "1"){            
            @$_SESSION["web_b"] = "0";
            echo "<script>history.go(-1);</script>";            
        }
        else{           
            if(!$_POST){
                if(!@$_SESSION['company_name']){
                    if(!@$_SESSION['web_package']){
                        redirect('reseller_web/index'); 
                    }
                    else{
                        redirect('reseller_web/order'); 
                    }
                }
            }
            else{			
                foreach($_POST as $k => $v){
                    $_SESSION[$k] = $v;
                }
                if(isset($_POST['logo_detail']) && $_POST['logo_detail'] !='' ){
                    $logo = explode('-',$_POST['logo_detail']);
                    $_SESSION['logo_price'] = $logo[0];
                    $_SESSION['logo_package'] = $logo[1];
                }
                else{
                    $_SESSION['logo_price'] = '';
                    $_SESSION['logo_package'] = '';
                }                
                $src=@$_FILES['file']['tmp_name'];
                $image = @$_FILES['file']['name']; 
                $files = str_replace(" ", "", $image);
                if($files){
                    $file = base_url()."web_images/".mktime()."-".$files;
                    move_uploaded_file($src,"web_images/".mktime()."-".$files);
                }
                else{
                    $file="";
                }                 
                $_SESSION['file']=$file;
                if(isset($_SESSION['email_id']) && $_SESSION['email_id'] != '0' && $_SESSION['email_id']!=''){
                    if(isset($_SESSION['contact_info']) && $_SESSION['contact_info'] != '0' && $_SESSION['contact_info'] !=''){                                            
                        $this->load->model('webdesignmodel');
                        $this->webdesignmodel->insert();                               
                        $this->email->from(ORDER_MAIL,'Web Admin');
                        $this->email->subject('Your Web Order Received');
                        $message = $this->load->view('webdesign/emails/paymentemail', '', true);
                        $this->email->message($message);
                        $this->email->to(@$_SESSION['email_id']);
                        $this->email->send();
                        $this->email->clear();
                        $message = $this->load->view('webdesign/emails/sendorderemail', '', true);
                        $this->email->from(@$_SESSION['email_id'],'New Customer');
                        $this->email->subject('NEW WEB ORDER ARRIVED');
                        $this->email->message($message);
                        $this->email->to('jagdesh010@gmail.com');
                        $this->email->send();
                        $this->email->clear();
                        $this->email->from(@$_SESSION['email_id'],'New Customer');
                        $this->email->subject('NEW WEB ORDER ARRIVED');
                        $this->email->message($message);
                        $this->email->to(ORDER_MAIL);
                        $this->email->send();   				
                        redirect('reseller_web/cart');                    
                    }
                    else{
                        echo "Invalid Email or Phone No.."; 
                        redirect('reseller_web/order');
                        die();                              
                    }
                }
                else{
                    echo "Invalid Email or Phone No.."; 
                    redirect('reseller_web/order');
                    die();                              
                }
            }                    
        }
    //redirect('web-site-design/webdesigner-limited-sale/cart');
    }  
    public function cart(){
        @$_SESSION["web_b"] = "1";
        @$_SESSION["web_c"] = "0";
        if(!@$_SESSION['company_name']){
            if(!@$_SESSION['web_package']){
                redirect('reseller_web/index'); 
            }
            else{
                redirect('reseller_web/order'); 
            }
        }
        $this->load->view('reseller/webdesign/cart');
    }
    public function paybank()
    {        
        if(!@$_SESSION['company_name']){
            if(!@$_SESSION['web_package']){
                redirect('reseller_web/index'); 
            }
            else{
                redirect('reseller_web/order'); 
            }
        }
        $this->load->view('reseller/webdesign/paybank');
    }
	public function portfolio(){		
        $this->load->view('reseller/webdesign/portfolio');		
    }
    public function howworks(){		
        $this->load->view('reseller/webdesign/howworks');
    }
    public function whyus(){		
        $this->load->view('reseller/webdesign/whyus');
    }
    public function about(){		
        $this->load->view('reseller/webdesign/about');
    }
    public function ourmgmt(){		
        $this->load->view('reseller/webdesign/ourmgmt');
    }
    public function qualitycontrol(){		
        $this->load->view('reseller/webdesign/qualitycontrol');
    }
    public function partnership(){		
        $this->load->view('reseller/webdesign/partnership');
    }
    public function terms(){		
        $this->load->view('reseller/webdesign/terms');
    }
    public function guarantee(){		
        $this->load->view('reseller/webdesign/guarantee');
    }
    public function hosting(){		
        $this->load->view('reseller/webdesign/hosting');
    }
    public function seo(){		
        $this->load->view('reseller/webdesign/seo');
    }
    public function privacypolicy(){		
        $this->load->view('reseller/webdesign/privacypolicy');
    }
    public function faq()
    {		
        $this->load->view('reseller/webdesign/faq');
    }
    public function contact(){
       if(isset($_POST['submit'])){
        //echo "<pre>"; print_r($_POST);echo "</pre>";die;
        $message = '
            <table width="400" border="0" cellpadding="0" cellspacing="0">
            <tr>
            	<td width="140"><b>Full Name</b></td>
            	<td width="260"><p>'.@$_POST['Fname']." ".@$_POST['Lname'] .'</p></td>
            </tr>
            <tr>
            	<td><b>Company Name</b></td>
            	<td><p>'.@$_POST['company'].'</p></td>
            </tr>
            <tr>
            	<td><b>Address</b></td>
            	<td><p>'.@$_POST['address'].'</p></td>
            </tr>
            <tr>
            	<td><b>State</b></td>
            	<td><p>'.@$_POST['state'].'</p></td>
            </tr>
            <tr>
            	<td><b>City</b></td>
            	<td><p>'.@$_POST['city'].'</p></td>
            </tr>
            <tr>
            	<td><b>Zip</b></td>
            	<td><p>'.@$_POST['zip'].'</p></td>
            </tr>
            <tr>
            	<td><b>Country</b></td>
            	<td><p>'.@$_POST['country'].'</p></td>
            </tr>
            <tr>
            	<td><b>Email</b></td>
            	<td><p>'.@$_POST['email'].'</p></td>
            </tr>
            <tr>
            	<td><b>Phone</b></td>
            	<td><p>'.@$_POST['phone'].'</p></td>
            </tr>
            <tr>
            	<td><b>Fax</b></td>
            	<td><p>'.@$_POST['fax'].'</p></td>
            </tr>
            <tr>
            	<td><b>Comments</b></td>
            	<td><p>'.@$_POST['comment'].'</p></td>
            </tr>        
            </table>
        ';
        $this->email->from(@$_POST['email'],@$_POST['Fname']." ".@$_POST['Lname']);
        $this->email->subject('Clients Comments - '.@$_POST['title']);
        $this->email->message($message);
        $this->email->to(INFO_MAIL); 
        //$this->email->to('jagdesh010@hotmail.com');   
        $this->email->send();
        $this->email->clear();  
        }
        $this->load->view('reseller/webdesign/contact');
    }
    public function charity(){		
        $this->load->view('reseller/webdesign/charity');
    }
    public function adaward(){		
        $this->load->view('reseller/webdesign/adaward');
    }
    public function rdaward(){		
        $this->load->view('reseller/webdesign/rdaward');
    }
    public function saward(){		
        $this->load->view('reseller/webdesign/saward');
    }
    public function story(){		
        $this->load->view('reseller/webdesign/story');
    }
    public function successstory(){		
        $this->load->view('reseller/webdesign/successstory');
    }
    public function thankyou(){  
        if($_GET['web_id'] != '' && $_GET['web_id'] !='0')
        {
            $query = $this->db->query("SELECT `ip`,`email`,`company_name`,`contact_info` FROM `web_order` where web_id='".$_GET['web_id']."'");        
            $row = $query->row();
            $ip     = $row->ip;
            //$email  = $row->email;
            //$contact_info = $row->contact_info;
            //$logo_id =  $row->logo_web_id;
            //$company_name = $row->company_name;
            if($ip == $_GET['ip']){                		
                $this->load->model('webdesignmodel');
                $this->webdesignmodel->update(); 
            }
            else{
                redirect('reseller_web/index');
            }
        }
        else{
            redirect('reseller_web/index');
        }      
        $this->load->view('reseller/webdesign/thankyou');
        session_destroy();        
    }
    public function payment(){
        if(!@$_GET['web_id']){
            redirect('reseller_web/index');
        } 
        $this->load->view('reseller/webdesign/payment');
    }
    public function jetpay(){
        if(!@$_SESSION['company_name']){
            if(!@$_SESSION['web_package']){
                redirect('reseller_web/index'); 
            }
            else{
                redirect('reseller_web/order'); 
            }
        }
        $this->load->library('mydata');
        $data['value']=$this->mydata->getcountry();
        $data['GatewaySettings']=$this->mydata->gatewaysetting();            
        $this->load->view('reseller/webdesign/jetpay',$data);
    }
    public function process_transactionmid(){
        foreach($_POST as $k => $v){                
            $_SESSION[$k] = $v;
        }        
        redirect('reseller_web/process_transaction');
    }
    public function process_transaction(){        
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('reseller/webdesign/process_transaction',$data);
    }
    public function failed(){
        $this->load->view('reseller/webdesign/failed');
	} 
    public function logout(){
        session_destroy();
        redirect('reseller/login');
    }
}
?>