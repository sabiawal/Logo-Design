<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Logodesign2 extends CI_Controller {
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
    }
	public function index()
    {	   
        $this->load->view('logodesign2/index');
	}
	public function packages()
    {
        @$_SESSION["visiteda"] = "0";
        $this->load->model('logodesignmodel2');        
        $packages['logo_package_rows'] = $this->logodesignmodel2->getpackages(45);
        $packages['web_package_rows'] = $this->logodesignmodel2->getpackages(46);
        $this->load->view('logodesign2/packages',$packages);       
	}
	public function process()
    {
        $this->load->view('logodesign2/process');
	}
	public function compare(){
        $this->load->view('logodesign2/compare');
	}
	public function portfolio(){	    
        $this->load->view('logodesign2/portfolio');
	}	
	public function portfolio2(){
        $this->load->view('logodesign2/portfolio2');
	}
	public function portfolio3(){
        $this->load->view('logodesign2/portfolio3');
	}	
	public function portfolio4(){
        $this->load->view('logodesign2/portfolio4');
    }
	public function portfolio5(){
        $this->load->view('logodesign2/portfolio5');
	}
	public function portfolio6(){
        $this->load->view('logodesign2/portfolio6');
	}
	public function portfolio7(){
        $this->load->view('logodesign2/portfolio7');
	}	
	public function portfolio8(){
        $this->load->view('logodesign2/portfolio8');
	}
	public function portfolio9(){
        $this->load->view('logodesign2/portfolio9');
	}
	public function portfolio10(){
        $this->load->view('logodesign2/portfolio10');
	}
	public function guarantee(){
        $this->load->view('logodesign2/guarantee');
	}
    public function about(){
        $this->load->view('logodesign2/about');
	}	
	public function ordermid(){
        if (@$_SESSION["visiteda"] == "1"){
        @$_SESSION["visiteda"] = "0";
        echo "<script>history.go(-1);</script>";
        }
        else
        {
          if(!$_POST){
		  if(!@$_SESSION['package']){
		     redirect('logodesign2/packages');
		  }
       	}
        else{
            foreach($_POST as $k => $v){
                $_SESSION[$k] = $v;
            }
         }
        }
		 if(isset($_SESSION['price']) && trim(@$_SESSION['price'])!='' && trim(@$_SESSION['package'])!='' && isset($_SESSION['package'])){
			redirect('logodesign2/order');  
            }
			else{
				redirect('logodesign2/packages');
				}
	}	
    public function order(){
        @$_SESSION["visiteda"] = "1";
        @$_SESSION["visitedb"] = "0";
        if(!@$_SESSION['package']){
		     redirect('logodesign2/packages'); 
		  }
        $this->load->view('logodesign2/order');
    }
    public function orderonemid(){
        if (@$_SESSION["visitedb"] == "1")
        {
        @$_SESSION["visitedb"] = "0";
        echo "<script>history.go(-1);</script>";
        }
        else
        {
        if(!$_POST){
		  if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
		}
        if(!@$_SESSION['package'])
        {
            redirect('logodesign2/packages');            
        }
        else{
            foreach($_POST as $k => $v){
                $_SESSION[$k] = $v;
            }
            if(isset($_POST['web']) && $_POST['web'] != '' ){
                if($_POST['web']==Budget_Website_Price)
                {
                    $_SESSION['webpackage']='Budget website 1 page';
                }
                if($_POST['web']==Gold_Website_Price){
                    $_SESSION['webpackage']='Gold website up to 5 pages';
                }
                if($_POST['web']==Elite_Website_Price){
                    $_SESSION['webpackage']='Elite website  up to 12 pages';
                }
            }
            else{
               $_SESSION['webpackage']=''; 
            }
            if(isset($_POST['brouchure']) && $_POST['brouchure'] != '' ){       
                if($_POST['brouchure']==Brochure_Tri_Fold_Price){
                    $_SESSION['bhaucharpackage']='Tri-fold double-sided';
                }
                if($_POST['brouchure']==Brochure_4_Page_Price){
                    $_SESSION['bhaucharpackage']='4 Page exec';
                }           
                if($_POST['brouchure']==Brochure_8_Page_Price){
                    $_SESSION['bhaucharpackage']='8 Page exec';
                } 
            }
            else{
                $_SESSION['bhaucharpackage']='';
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
	   }
    }
    redirect('logodesign2/orderone');
    }  
    public function orderone(){
        @$_SESSION["visitedb"] = "1";
        @$_SESSION["visitedc"] = "0";
        if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
        $this->load->view('logodesign2/orderone');
    }    
    public function ordertwomid(){
        if (@$_SESSION["visitedc"] == "1")
        {
        @$_SESSION["visitedc"] = "0";
        echo "<script>history.go(-1);</script>";
        }
        else
        {
          if(!$_POST){
		  if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
		}
        else{
            foreach($_POST as $k => $v){
                $_SESSION[$k] = $v;
            }
            $this->load->model('logodesignmodel2');
            $this->logodesignmodel2->insert();
        }
        }
        redirect('logodesign2/ordertwo');
    }
    public function ordertwo(){
        @$_SESSION["visitedc"] = "1";
        @$_SESSION["visitedd"] = "0";       
        if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
        $this->load->view('logodesign2/ordertwo');
	}
    public function cartmid(){
        if (@$_SESSION["visitedd"] == "1")
        {
        @$_SESSION["visitedd"] = "0";
        echo "<script>history.go(-1);</script>";
        }
        else
        {
          if(!$_POST){
		  if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages');
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
		}
        else{
            foreach($_POST as $k => $v){
                $_SESSION[$k] = $v;
            }
        }
        }
        redirect('logodesign2/cart');
    }
    public function cart(){
        @$_SESSION["visitedd"] = "1";
        @$_SESSION["visitede"] = "0";
         if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages2'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
        $this->load->view('logodesign2/cart');
	}
    public function paybankmid(){
        if (@$_SESSION["visitede"] == "1"){
        @$_SESSION["visitede"] = "0";
        echo "<script>history.go(-1);</script>";
        }
        else{
           if(!$_POST){
		  if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
		}
        else{
            foreach($_POST as $k => $v){
                $_SESSION[$k] = $v;
            }
            // send message here
            $this->load->library('email');
    		$this->email->set_newline("\r\n");
    		$config['protocol'] = 'sendmail';
    		$config['mailpath'] = '/usr/sbin/sendmail';
    		$config['charset'] = 'iso-8859-1';
    		$config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html'; 
    		$this->email->initialize($config);
    		$this->email->from(ORDER_MAIL,'Logo Admin');
    		$this->email->subject('Your Logo Order Received');
    		$message = $this->load->view('logodesign2/emails/paymentemail', '', true);    	
    		$this->email->message($message);
    		$this->email->to(@$_SESSION['email_id']);
    		$this->email->send();
            $this->email->clear();            
            $message = $this->load->view('logodesign2/emails/sendorderemail', '', true);
            $this->email->from(@$_SESSION['email_id'],'New Customer');
    		$this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
    		$this->email->message($message);
    		$this->email->to(ORDER_MAIL);
    		$this->email->send();            		           
        }                                  
        }
        redirect('logodesign2/paybank');
    }
    public function paybank(){
        @$_SESSION["visitede"] = "1";
        if(!@$_SESSION['fname']){
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages');
                }
                else{
                    redirect('logodesign2/order');
                }
		  }
          else{
            $this->load->model('logodesignmodel2');
            $this->logodesignmodel2->insertAutoMail();
          }
        $this->load->view('logodesign2/paybank');
	} 
     public function thankyou(){
        session_destroy(); 
        if(@$_GET['mainlogowebid']){
          $this->load->model('logodesignmodel2');
           $this->logodesignmodel2->update();
	    }
        else{
            redirect('logodesign2/packages');
        }  
        $this->load->view('logodesign2/thankyou');
	}
	public function payment(){
	    if(!@$_GET['mainlogowebid']){
	       redirect('logodesign2/packages');
	    } 
        $this->load->view('logodesign2/payment');
	}
	public function charity(){
        $this->load->view('logodesign2/charity');
	}
	public function ourmgmt(){
        $this->load->view('logodesign2/ourmgmt');
	}
	public function qualitycontrol(){
        $this->load->view('logodesign2/qualitycontrol');
	}
	public function partnership(){
        $this->load->view('logodesign2/partnership');
	}
	public function terms(){
        $this->load->view('logodesign2/terms');
	}
	public function privacypolicy(){
        $this->load->view('logodesign2/privacypolicy');
	}
	public function casestudy(){
        $this->load->view('logodesign2/casestudy');
	}
	public function faq(){
        $this->load->view('logodesign2/faq');
	}
	public function contact(){
        $this->load->view('logodesign2/contact');
	}    
    public function contactMail(){
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
            }           
	public function freesms(){
        $this->load->view('logodesign2/freesms');
	}
	public function livehelp(){
        $this->load->view('logodesign2/livehelp');
	}	
    public function adaward(){
        $this->load->view('logodesign2/adaward');
	}	
    public function saward(){
        $this->load->view('logodesign2/saward');
	}
    public function rdaward(){
        $this->load->view('logodesign2/rdaward');
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
        }
        redirect('logodesign2/jetpay'); 
    }  
    public function jetpay()
    {
        if(!@$_SESSION['fname'])
        {
		      if(!@$_SESSION['package']){
                    redirect('logodesign2/packages'); 
                }
                else{
                    redirect('logodesign2/order');
                }
		  }     
        $this->load->library('mydata');
        $data['value']=$this->mydata->getcountry();
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('logodesign2/jetpay',$data);
	}
    public function process_transactionmid()
    {                   
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('logodesign2/process_transaction'); 
    }
    public function process_transaction()
    {        
        @$_SESSION["visitedg"] = "1";
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('logodesign2/process_transaction',$data);
	}
    public function failed(){
        $this->load->view('logodesign2/failed');
	}
    public function cvv(){
        $this->load->view('logodesign2/cvv');
	}
}