<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reseller extends CI_Controller 
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
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        session_start();
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
	public function index()
    {	
        if(!$_SESSION['reseller_id']){$this->load->view('reseller/home');}
        else{$this->load->view('reseller/index');}
	}
    public function compare_us()
    {
       $this->load->view('reseller/compare_us');        
	}
	public function confidentiality()
    {
       $this->load->view('reseller/confidentiality');
	}
	public function process()
    {
	   $this->load->view('reseller/process');
	}
	public function programme()
    {
	   $this->load->view('reseller/programme');
	}
	public function qualifications()
    {
	   $this->load->view('reseller/qualifications');
	}	
	public function orderstart()
    {
	   $_SESSION['ra'] = '0';
       $this->load->view('reseller/orderstart');
	}
   	public function okordermid()
    {
        if (@$_SESSION["ra"] == "1")
        {
            @$_SESSION["ra"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST['username'])
            {
                redirect('reseller/orderstart');
            }
            else
            {
                foreach($_POST as $key => $value)
                {
                    $_SESSION[$key] = $value;
                }
                $reseller_id = $this->logodesignmodel->checkuser();                
                if($reseller_id == '')
                {
                    unset($_SESSION['error_msg']);                    
                    //sending Reseller Login Detail to Client
                    $message = $this->load->view('emails/reseller_login', '', true);                     
                    $this->email->from(INFO_MAIL,'Reseller Service');
            		$this->email->subject('Congratulations: Your reseller account details');
            		$this->email->message($message);
            		$this->email->to(@$_SESSION['email_id']);
            		$this->email->send();
                    $this->logodesignmodel->create_reseller();
                    $this->wufooSignup();           //for redirecting to the wufoo site (for reseller signup page)
                    //redirect('reseller/okorder');
                }
                else
                {
                    $_SESSION['error_msg'] = 'Your Email ID Already Exists';
                    redirect('reseller/orderstart');
                }
            }
        }
	}
    
    //Email capturing code redirecting to wufo site....(for reseller signup page)    
        
    public function wufooSignup(){
        $this->load->view('reseller/wufo_resellerSignup');
    }    
        
    public function okorder()
    {
	   $this->load->view('reseller/okorder');
	}
    public function login()
    {
        @$_SESSION["ra"] == "0";
        if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] !='')
        {
			redirect('reseller/packages');
		}
        else
        {
			$this->load->view('reseller/login');
		}	   
	}
    //function to check valid user
	public function check_login()
    {	
		$reseller_id = $this->logodesignmodel->check_login();       	
		if($reseller_id != '')
        {
            unset($_SESSION['error_msg']);
            $reseller_detail = $this->logodesignmodel->reseller_detail($reseller_id);																				
            $session_data = array('reseller_id'=>$reseller_detail->reseller_id,'username'=>$reseller_detail->username);
            $this->session->set_userdata($session_data);
			$_SESSION['reseller_id'] = $reseller_detail->reseller_id;
			$_SESSION['username'] = $reseller_detail->username;
            $name =  explode(' ',$reseller_detail->fullname);
            $_SESSION['fname'] =   $name[0]; 
			if($_SESSION['redirect_url'])
			{			     			
				redirect($_SESSION['redirect_url']);	
				echo "<script>window.location='".base_url().$_SESSION['redirect_url']."'</script>";
			}
			else
			{					
				echo "<script>window.location='".base_url()."reseller/packages'</script>";					
				redirect('reseller/packages');																
			}
		}
        else
        {			
			$_SESSION['error_msg'] = 'Invalid Username or Password'; 
			redirect('reseller/login');
			echo "<script>window.location='".base_url()."reseller/login'</script>";									
		}														
	}
    public function forget()
    {
        if(isset($_POST['email_id']))
        {
            $update_id = $this->logodesignmodel->checkuser();
            if($update_id !='')
            {
                $reset_code = md5(mktime());
                $update_data = array('reset_code'=>$reset_code);
                $this->logodesignmodel->reseller_update($update_data,$update_id);
                $message  = 'Click the link below to reset your password: <br /><br /><br />';
                $message .= '<a href="'.site_url('reseller/reset').'?uid='.$update_id.'&r='.$reset_code.'">'.site_url('reseller/reset').'</a> <br /><br /><br />';
                $message .= '<b>Thank You,</b><br />';
                $message .= 'Reseller Service';
                //sending Reseller Login Detail to Client                                  
                $this->email->from(INFO_MAIL,'Reseller Service');
        		$this->email->subject('Password Reset link');
        		$this->email->message($message);
        		$this->email->to(@$_POST['email_id']);
        		$this->email->send();
                ?>
                <script type="text/javascript">alert('Email Send with Reset instruction. Please Check Email');</script>
                <?php
            }
            else
            {
                ?>
                <script type="text/javascript">alert('Sorry! we could not find your Email in record');</script>
                <?php
            }
        }
        $this->load->view('reseller/forget');
    }
    public function reset()
    {
        if(!isset($_GET['uid']) && !isset($_GET['r']))
        {
            redirect('reseller/login');
        }
        else
        {
            $query = $this->db->query('select reset_code from reseller where reseller_id="'.$_GET['uid'].'"');
            $row = $query->row();
            if(isset($_POST['new_password']))
            {
                $update_reseller = array('reset_code'=>'','password'=>sha1(mysql_real_escape_string($_POST['new_password'])));
                $this->logodesignmodel->reseller_update($update_reseller,$_GET['uid']);
                ?>
                <script type="text/javascript">
                    alert('Password Updated! \n Please Try login With New Password');                   
                </script>
                <?php
                unset($_SESSION['error_msg']);
                $this->load->view('reseller/login');
            }
            else
            {
                if($row->reset_code == $_GET['r'] && $row->reset_code !='')
                {  
                    $this->load->view('reseller/reset');
                }
                else
                {
                    die('Invalid Link or Expired');
                }
            }
        }
    }
    public function packages()
    {
        @$_SESSION["ra"] == "0";
        @$_SESSION["visiteda"] = "0";
        if(!$_SESSION['reseller_id'])
        {
            $redirect_url = $this->uri->uri_string(); 
            $_SESSION['redirect_url'] = $redirect_url;			
            redirect('reseller/login');			
        }
        else 
        {
            $this->load->view('reseller/packages');
        }
    }
    public function ordermid()
    {
        if (@$_SESSION["visiteda"] == "1")
        {
            @$_SESSION["visiteda"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['package'])
                {
                    redirect('reseller/packages');
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                $_SESSION['firstSelPackage'] = $_SESSION['price'];
            }
        }
        if(isset($_SESSION['price']) && trim(@$_SESSION['price'])!='' && trim(@$_SESSION['package'])!='' && isset($_SESSION['package'])){
        redirect('reseller/order');  
        }
        else{redirect('reseller/packages');}
	}	
    public function order()
    { 
        @$_SESSION["visiteda"] = "1";
        @$_SESSION["visitedb"] = "0";
        if(!@$_SESSION['package'])
        {
            redirect('reseller/packages'); 
        }
        $this->load->view('reseller/order');
    }
    public function orderonemid()
    {
        if (@$_SESSION["visitedb"] == "1")
        {
            @$_SESSION["visitedb"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['fname'])
                {
                    if(!@$_SESSION['package'])
                    {
                        redirect('reseller/packages'); 
                    }
                    else
                    {
                        redirect('reseller/order');
                    }
                }
            }
            if(!@$_SESSION['package'])
            {
                redirect('reseller/packages');            
            }
            else
            {
                foreach($_POST as $k => $v)
                {//die('sessino value');
                    $_SESSION[$k] = $v;
                }
                if(isset($_POST['web']) && $_POST['web'] != '' )
                {
                    if($_POST['web']==Budget_Website_Price)
                    {
                        $_SESSION['webpackage']='Budget website 1 page';
                    }
                    if($_POST['web']==Gold_Website_Price)
                    {
                        $_SESSION['webpackage']='Gold website up to 6 pages';
                    }
                    if($_POST['web']==Elite_Website_Price)
                    {
                        $_SESSION['webpackage']='Elite website  up to 12 pages';
                    }
                }
                else
                {
                    $_SESSION['webpackage']=''; 
                }
                if(isset($_POST['brouchure']) && $_POST['brouchure'] != '' )
                {       
                    if($_POST['brouchure']==Brochure_Tri_Fold_Price)
                    {
                        $_SESSION['bhaucharpackage']='Tri-fold double-sided';
                    }
                    if($_POST['brouchure']==Brochure_4_Page_Price)
                    {
                        $_SESSION['bhaucharpackage']='4 Page exec';
                    }           
                    if($_POST['brouchure']==Brochure_8_Page_Price)
                    {
                        $_SESSION['bhaucharpackage']='8 Page exec';
                    } 
                }
                else
                {
                    $_SESSION['bhaucharpackage']='';
                }                       
                $src=@$_FILES['file']['tmp_name'];
                $image = @$_FILES['file']['name'];
                $files = str_replace(" ", "", $image);
                if($files)
                {
                    $file = base_url()."web_images/".mktime()."-".$files;
                    move_uploaded_file($src,"web_images/".mktime()."-".$files);
                }
                else
                {
                    $file="";
                }
                $_SESSION['file']=$file;
            }
        }
        $this->wufoo();             //for redirecting to the wufoo site 
        //redirect('reseller/orderone');
    }  
    
    //Email capturing code redirecting to wufo site....
    
    public function wufoo(){
        $this->load->view('reseller/wufo_reseller');
    }
    
    public function orderone()
    {
        @$_SESSION["visitedb"] = "1";
        @$_SESSION["visitedc"] = "0";
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('reseller/packages'); 
            }
            else
            {
                redirect('reseller/order');
            }
        }
        $this->load->view('reseller/orderone');
    }    
    public function ordertwomid()
    {
        if (@$_SESSION["visitedc"] == "1")
        {
            @$_SESSION["visitedc"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['fname'])
                {
                    if(!@$_SESSION['package'])
                    {
                        redirect('reseller/packages'); 
                    }
                    else
                    {
                        redirect('reseller/order');
                    }
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                $this->logodesignmodel->insert();
            }
        }
        redirect('reseller/ordertwo');
    }
    public function ordertwo()
    {
        @$_SESSION["visitedc"] = "1";
        @$_SESSION["visitedd"] = "0";       
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('reseller/packages'); 
            }
            else
            {
                redirect('reseller/order');
            }
        }
        $this->load->view('reseller/ordertwo');
	}
    public function cartmid()
    {
        if (@$_SESSION["visitedd"] == "1")
        {
            @$_SESSION["visitedd"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['fname'])
                {
                    if(!@$_SESSION['package'])
                    {
                        redirect('reseller/packages');
                    }
                    else
                    {
                        redirect('reseller/order');
                    }
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
            }
        }
        redirect('reseller/cart');
    }
    public function cart()
    {
        @$_SESSION["visitedd"] = "1";
        @$_SESSION["visitede"] = "0";
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('reseller/packages'); 
            }
            else
            {
                redirect('reseller/order');
            }
        }
        $this->load->view('reseller/cart');
    }
    public function paybankmid()
    {
        if (@$_SESSION["visitede"] == "1")
        {
            @$_SESSION["visitede"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['fname'])
                {
                    if(!@$_SESSION['package'])
                    {
                        redirect('reseller/packages'); 
                    }
                    else
                    {
                        redirect('reseller/order');
                    }
                }
            }
            else{
                foreach($_POST as $k => $v){
                    $_SESSION[$k] = $v;
                }
                //sending email to order@ldg sites
                $message = $this->load->view('emails/sendorderemail', '', true);                     
                $this->email->from(@$_SESSION['email_id'],'New Customer');
                $this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
                $this->email->message($message);
                $this->email->to(ORDER_MAIL);
                $this->email->send();
                $this->email->clear();
                //sending email to client
                $message = $this->load->view('emails/paymentemail', '', true);
                $this->email->from(ORDER_MAIL,'Logo Admin');
                $this->email->subject('Your Logo Order Received');    		    	
                $this->email->message($message);
                $this->email->to(@$_SESSION['email_id']);
                $this->email->send();
                $this->email->clear();
                $this->logodesignmodel->insertAutoMail($message);   // passing client email to model            		           
            }                                  
        }
        redirect('reseller/paybank');
    }
    public function paybank(){
        @$_SESSION["visitede"] = "1";
        if(!@$_SESSION['fname']){
            if(!@$_SESSION['package']){
                redirect('reseller/packages');
            }
            else{
                redirect('reseller/order');
            }
        }
        $this->load->view('reseller/paybank');
    } 
    public function thankyou(){
        if(isset($_GET['mainlogowebid'])){
            $this->logodesignmodel->update();
        }
        elseif($_GET['web_id'] != '' && $_GET['web_id'] !='0'){
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
                redirect('reseller/webdesignindex');
            }
        }       
        else{
            redirect('reseller/packages');
        }  
        $this->load->view('reseller/thankyou');
    }
	public function payment(){
        if(!@$_GET['mainlogowebid']){
            redirect('reseller/packages');
        } 
        $this->load->view('reseller/payment');
	}
    public function charity(){
        $this->load->view('reseller/charity');
	}
	public function ourmgmt(){
        $this->load->view('reseller/ourmgmt');
	}
	public function qualitycontrol(){
        $this->load->view('reseller/qualitycontrol');
	}
	public function partnership(){
        $this->load->view('reseller/partnership');
	}
	public function terms(){
        $this->load->view('reseller/terms');
	}
	public function privacypolicy(){
        $this->load->view('reseller/privacypolicy');
	}
	public function casestudy(){
        $this->load->view('reseller/casestudy');
	}
	public function faq(){
        $this->load->view('reseller/faq');
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
        $this->load->view('reseller/contact');
	}    
    /*public function contactMail(){
        $title       = $_POST['title'];
        $Fname       = $_POST['Fname'];
        $Lname       = $_POST['Lname'];
        $company     = $_POST['company'];
        $address     = $_POST['address'];
        $state       = $_POST['state'];
        $city        = $_POST['city'];
        $zip         = $_POST['zip'];
        $country     = $_POST['country'];
        $email       = $_POST['email'];
        $phone       = $_POST['phone'];
        $fax         = $_POST['fax'];
        $comment     = $_POST['comment'];      
       // send message here
            $this->load->library('email');
    		$this->email->set_newline("\r\n");
    		$config['protocol'] = 'sendmail';
    		$config['mailpath'] = '/usr/sbin/sendmail';
    		$config['charset'] = 'iso-8859-1';
    		$config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
    		$this->email->initialize($config);
    		$this->email->from( $email ,'Customer');
    		$this->email->subject('Customer Feedback');           
    		$message = 
            "<strong> Title </strong>          : ".$title."<br />
             <strong> First Name </strong>     : ".$Fname."<br />
             <strong> Last Name </strong>      : ".$Lname."<br />
             <strong> Company </strong>        : ".$company."<br />
             <strong> Address </strong>        : ".$address."<br />
             <strong> State </strong>          : ".$state."<br />
             <strong> City </strong>           : ".$city."<br />
             <strong> Zip </strong>            : ".$zip."<br />
             <strong> Country </strong>        : ".$country."<br />
             <strong> Email </strong>          : ".$email."<br />
             <strong> Phone </strong>          : ".$phone."<br />
             <strong> Fax </strong>            : ".$fax."<br />
             <strong> Clients Comment </strong>: ".$comment."
             ";    	
    		$this->email->message($message);
    		$this->email->to(INFO_MAIL);
            #$this->email->to('jagdesh010@hotmail.com');
    		$this->email->send();
            $this->email->clear();           
            echo "<script>alert(\"Thank You !!! For Your Comment\"); history.go(-1);</script>"; 
            }  */         
	public function freesms(){
        $this->load->view('reseller/freesms');
	}
	public function livehelp(){
        $this->load->view('reseller/livehelp');
	}	
    public function adaward(){
        $this->load->view('reseller/adaward');
	}	
    public function saward(){
        $this->load->view('reseller/saward');
	}
    public function rdaward(){
        $this->load->view('reseller/rdaward');
	}
    public function jetpaymid(){
        if (@$_SESSION["visitedf"] == "1"){
            @$_SESSION["visitedf"] = "0";
            echo "<script>history.go(-1);</script>";          
        }
        else{
            foreach($_POST as $k => $v){
                $_SESSION[$k] = $v;
            }
            //sending email to order@ldg sites
            $message = $this->load->view('emails/sendorderemail', '', true);                     
            $this->email->from(@$_SESSION['email_id'],'New Customer');
    		$this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
    		$this->email->message($message);
    		$this->email->to(ORDER_MAIL);
    		$this->email->send();
            $this->email->clear();
            //sending email to client
            $message = $this->load->view('emails/paymentemail', '', true);
            $this->email->from(ORDER_MAIL,'Logo Admin');
    		$this->email->subject('Your Logo Order Received');    		    	
    		$this->email->message($message);
    		$this->email->to(@$_SESSION['email_id']);
    		$this->email->send();
            $this->email->clear();
            $this->logodesignmodel->insertAutoMail($message);   // passing client email to model
        }
        redirect('reseller/jetpay'); 
    } 
    public function jetpay(){
        if(!@$_SESSION['fname']){
            if(!@$_SESSION['package']){
                redirect('reseller/packages'); 
            }
            else{
                redirect('reseller/order');
            }
        }
        else{ 
            $this->load->library('mydata');
            $data['value']=$this->mydata->getcountry();
            $data['GatewaySettings']=$this->mydata->gatewaysetting();
            $this->load->view('reseller/jetpay',$data);        
        }
    }
    public function process_transactionmid(){                   
        foreach($_POST as $k => $v){                
            $_SESSION[$k] = $v;
        }        
        redirect('reseller/process_transaction'); 
    }
    public function process_transaction(){        
        @$_SESSION["visitedg"] = "1";
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('reseller/process_transaction',$data);
	}
    public function jetpaymidpayment(){          
        foreach($_POST as $k => $v){
            $_SESSION[$k] = $v;
        }
        redirect('reseller/jetpaypayment'); 
    }
    public function jetpaypayment(){             
        $this->load->library('mydata');
        $data['value']=$this->mydata->getcountry();
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('reseller/jetpaypayment',$data);
	} 
    public function process_transaction_payment(){ 
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('reseller/process_transaction_payment',$data);
	}
    public function failed(){
        $this->load->view('reseller/failed');
	}
    public function cvv(){
        $this->load->view('reseller/cvv');
	}
    public function promotional(){ 
        if(isset($_POST['code'])){
            $pcode = mysql_real_escape_string(@$_POST['code']);
        }
         if(isset($_POST['logowebid'])){
            $logowebid = @$_POST['logowebid'];
        }
        $this->logodesignmodel->pcode($pcode,$logowebid);
    }
	public function about(){
	   $this->load->view('reseller/about');
	}
	public function guarantee(){
	   $this->load->view('reseller/guarantee');
	}
    public function testimonials(){
	   $this->load->view('reseller/portfolio');
	}    
	public function portfolio(){
	   $this->load->view('reseller/portfolio');
	}
    public function portfolio2(){
        $this->load->view('reseller/portfolio2');
	}
	public function portfolio3(){
        $this->load->view('reseller/portfolio3');
	}	
	public function portfolio4(){
        $this->load->view('reseller/portfolio4');
    }
	public function portfolio5(){
        $this->load->view('reseller/portfolio5');
	}
	public function portfolio6(){
        $this->load->view('reseller/portfolio6');
	}
	public function portfolio7(){
        $this->load->view('reseller/portfolio7');
	}	
	public function portfolio8(){
        $this->load->view('reseller/portfolio8');
	}
	public function portfolio9(){
        $this->load->view('reseller/portfolio9');
	}
	public function portfolio10(){
        $this->load->view('reseller/portfolio10');
	}
	public function compare(){
	   $this->load->view('reseller/compare');
	}
	public function processs(){
	   $this->load->view('reseller/processs');
	}

    public function logout(){
        session_destroy();
        redirect('reseller/login');
    }
}

?>