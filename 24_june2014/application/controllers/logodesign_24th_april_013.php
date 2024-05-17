<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logodesign extends CI_Controller {
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
        @session_start();
        if($_SERVER['REMOTE_ADDR'] == '127.0.0.1')
        {
            //echo '<h1>Session Array</h1>';
//            echo '<pre>';
//            print_r($_SESSION);
//            echo '</pre>';
        }
        $this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html'; 
		$this->email->initialize($config);
        
        // getting tax rate global
        $this->load->model('logodesignmodel');
        $this->tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);        
    }
	public function index()
    {        
        $data['tax_rate'] = $this->tax_rate;
        $this->load->view('index',$data);        
	}
    public function packages()
    { 
        @$_SESSION["visiteda"] = "0";
        $this->load->view('packages');
	}	
	public function process()
    {
        $this->load->view('process');
	}
	public function compare()
    {
        $this->load->view('compare');
	}
	public function portfolio()
    {	    
        $this->load->view('portfolio');
	}
    public function industry($value)
    {
		$data['value'] = $value;
        $this->load->view('industry',$data);
	} 	
	public function portfolio2()
    {
        $this->load->view('portfolio2');
	}
	public function portfolio3()
    {
        $this->load->view('portfolio3');
	}	
	public function portfolio4()
    {
        $this->load->view('portfolio4');
    }
	public function portfolio5()
    {
        $this->load->view('portfolio5');
	}
	public function portfolio6()
    {
        $this->load->view('portfolio6');
	}
	public function portfolio7()
    {
        $this->load->view('portfolio7');
	}	
	public function portfolio8()
    {
        $this->load->view('portfolio8');
	}
	public function portfolio9()
    {
        $this->load->view('portfolio9');
	}
	public function portfolio10()
    {
        $this->load->view('portfolio10');
	}
    public function portfolio11()
    {
        $this->load->view('portfolio11');
	}
	public function guarantee()
    {
        $this->load->view('guarantee');
	}
    public function about()
    {
        $this->load->view('about');
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
                    redirect('packages');
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                // Added by Padam
                //if(!@$_SESSION['firstSelPackage'])
                $_SESSION['firstSelPackage'] = $_SESSION['price'];
            }
        }
        if(isset($_SESSION['price']) && trim(@$_SESSION['price'])!='' && trim(@$_SESSION['package'])!='' && isset($_SESSION['package']))
        {
			redirect('order');  
        }
        else
        {
		  redirect('packages');
		}
	}	
    public function order()
    { 
        @$_SESSION["visiteda"] = "1";
        @$_SESSION["visitedb"] = "0";
        if(!@$_SESSION['package'])
        {
		     redirect('packages'); 
        }
        $this->load->view('order');
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
                        redirect('packages'); 
                    }
                    else{
                        redirect('order');
                    }
                }
            }
            if(!@$_SESSION['package'])
            {
                redirect('packages');            
            }
            else
            {
                foreach($_POST as $k => $v)
                {
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
        redirect('orderone');
    }  
    public function orderone()
    {        
        @$_SESSION["visitedb"] = "1";
        @$_SESSION["visitedc"] = "0";
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('packages'); 
            }
            else
            {
                redirect('order');
            }
        }
        $data['tax_rate'] = $this->tax_rate;
        $this->load->view('orderone',$data);
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
                        redirect('packages'); 
                    }
                    else
                    {
                        redirect('order');
                    }
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                $this->load->model('logodesignmodel');
                $this->logodesignmodel->insert();
            }
        }
        redirect('ordertwo');
    }
    public function ordertwo()
    {
        @$_SESSION["visitedc"] = "1";
        @$_SESSION["visitedd"] = "0";       
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('packages'); 
            }
            else
            {
                redirect('order');
            }
        }
        $this->load->view('ordertwo');
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
                        redirect('packages');
                    }
                    else
                    {
                        redirect('order');
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
        redirect('cart');
    }
    public function cart()
    {
        @$_SESSION["visitedd"] = "1";
        @$_SESSION["visitede"] = "0";
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('packages'); 
            }
            else
            {
                redirect('order');
            }
        }
        $this->load->view('cart');
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
                        redirect('packages'); 
                    }
                    else
                    {
                        redirect('order');
                    }
                }
            }
            else
            {
                foreach($_POST as $k => $v)
                {
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
                $this->load->model('logodesignmodel'); 
                $this->logodesignmodel->insertAutoMail($message);   // passing client email to model            		           
            }                                  
        }
        redirect('paybank');
    }
    public function paybank()
    {
        @$_SESSION["visitede"] = "1";
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('packages');
            }
            else
            {
                redirect('order');
            }
        }
        $this->load->view('paybank');
	} 
     public function thankyou()
     {
        session_destroy(); 
        if(@$_GET['mainlogowebid'])
        {
          $this->load->model('logodesignmodel');
           $this->logodesignmodel->update();
	    }
        else
        {
            redirect('packages');
        }  
        $this->load->view('thankyou');
	}
	public function payment()
    {
	    if(!@$_GET['mainlogowebid'])
        {
	       redirect('packages');
	    } 
        $this->load->view('payment');
	}
	public function charity()
    {
        $this->load->view('charity');
	}
	public function ourmgmt()
    {
        $this->load->view('ourmgmt');
	}
	public function qualitycontrol(){
        $this->load->view('qualitycontrol');
	}
	public function partnership(){
        $this->load->view('partnership');
	}
	public function terms(){
        $this->load->view('terms');
	}
	public function privacypolicy(){
        $this->load->view('privacypolicy');
	}
	public function casestudy(){
        $this->load->view('casestudy');
	}
	public function faq(){
        $this->load->view('faq');
	}
	public function contact(){
        $this->load->view('contact');
	}    
    public function contactMail()
    {
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
    }           
	public function freesms(){
        $this->load->view('freesms');
	}
	public function livehelp(){
        $this->load->view('livehelp');
	}	
    public function adaward(){
        $this->load->view('adaward');
	}	
    public function saward(){
        $this->load->view('saward');
	}
    public function rdaward(){
        $this->load->view('rdaward');
	}
    public function autosave(){
        $this->load->view('autosave');
	}
    public function jetpaymid()
    {
        if (@$_SESSION["visitedf"] == "1")
        {
            @$_SESSION["visitedf"] = "0";
            echo "<script>history.go(-1);</script>";          
        }
        else
        {
            foreach($_POST as $k => $v)
            {
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
            $this->load->model('logodesignmodel'); 
            $this->logodesignmodel->insertAutoMail($message);   // passing client email to model
        }
        redirect('jetpay'); 
    } 
    public function jetpay()
    {
        if(!@$_SESSION['fname'])
        {
            if(!@$_SESSION['package'])
            {
                redirect('packages'); 
            }
            else
            {
                redirect('order');
            }
        }
        else
        { 
            $this->load->library('mydata');
            $data['value']=$this->mydata->getcountry();
            $data['GatewaySettings']=$this->mydata->gatewaysetting();
            $this->load->view('jetpay',$data);        
        }
	}
    public function process_transactionmid()
    {                   
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('process_transaction'); 
    }
    public function process_transaction()
    {        
        @$_SESSION["visitedg"] = "1";
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('process_transaction',$data);
	}
    public function jetpaymidpayment()
    {          
        foreach($_POST as $k => $v)
        {
            $_SESSION[$k] = $v;
        }
        redirect('jetpaypayment'); 
    }
    public function jetpaypayment()
    {             
        $this->load->library('mydata');
        $data['value']=$this->mydata->getcountry();
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('jetpaypayment',$data);
	} 
    public function process_transaction_payment()
    { 
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('process_transaction_payment',$data);
	}
    public function failed(){
        $this->load->view('failed');
	}
    public function cvv(){
        $this->load->view('cvv');
	}
    public function promotional()
    { 
        if(isset($_POST['code']))
        {
            $pcode = mysql_real_escape_string(@$_POST['code']);
        }
         if(isset($_POST['logowebid']))
        {
            $logowebid = @$_POST['logowebid'];
        }
        $this->load->model('logodesignmodel');
        $this->logodesignmodel->pcode($pcode,$logowebid);
    }
}