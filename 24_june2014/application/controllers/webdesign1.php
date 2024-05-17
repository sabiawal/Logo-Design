<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Webdesign extends CI_Controller 
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
    }
    
    public function index(){
    @$_SESSION["visitedwa"] = "0";
    $this->load->view('webdesign/index');
    }
    
    public function ordermid()
    {
        if (@$_SESSION["visitedwa"] == "1")
        {
            @$_SESSION["visitedwa"] = "0";
            echo "<script>history.go(-1);</script>";
        }
        else
        {
            if(!$_POST)
            {
                if(!@$_SESSION['web_package'])
                {
                    redirect('web-site-design/webdesigner-limited-sale/index'); 
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
        redirect('web-site-design/webdesigner-limited-sale/order');         		   
    }	
    
    public function order()
    { 
        @$_SESSION["visitedwa"] = "1";
        @$_SESSION["visitedwb"] = "0";
        if(!@$_SESSION['web_package'])
        {
            redirect('web-site-design/webdesigner-limited-sale/index'); 
        }
        $this->load->view('webdesign/order');
    }
    
    
    public function cartmid()
    {
        if (@$_SESSION["visitedwb"] == "1")
        {            
            @$_SESSION["visitedwb"] = "0";
            echo "<script>history.go(-1);</script>";            
        }
        else
        {           
            if(!$_POST)
            {
                if(!@$_SESSION['company_name'])
                {
                    if(!@$_SESSION['web_package'])
                    {
                        redirect('web-site-design/webdesigner-limited-sale/index'); 
                    }
                    else
                    {
                        redirect('web-site-design/webdesigner-limited-sale/order'); 
                    }
                }
            }
            else
            {			
                foreach($_POST as $k => $v)
                {
                    $_SESSION[$k] = $v;
                }
                
                
                if(isset($_POST['logo_detail']) && $_POST['logo_detail'] !='' )
                {
                    $logo = explode('-',$_POST['logo_detail']);
                    $_SESSION['logo_price'] = $logo[0];
                    $_SESSION['logo_package'] = $logo[1];
                }
                else
                {
                    $_SESSION['logo_price'] = '';
                    $_SESSION['logo_package'] = '';
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
                
               if(isset($_SESSION['email_id']) && $_SESSION['email_id'] != '0' && $_SESSION['email_id']!='')
                {
                     /*if(isset($_SESSION['contact_info']) && $_SESSION['contact_info'] != '0' && $_SESSION['contact_info'] !='')
                    {                                            
                        $this->load->model('webdesignmodel');
                        $this->webdesignmodel->insert();                               
                        
                        // send message here
                        $this->load->library('email');
                        $this->email->set_newline("\r\n");
                        $config['protocol'] = 'sendmail';
                        $config['mailpath'] = '/usr/sbin/sendmail';
                        $config['charset'] = 'iso-8859-1';
                        $config['wordwrap'] = TRUE;
                        $config['mailtype'] = 'html'; 
                        $this->email->initialize($config);
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
                        redirect('web-site-design/webdesigner-limited-sale/cart');                    
                    }
                    else
                    {
                        echo "Invalid Email or Phone No.."; 
                        redirect('web-site-design/webdesigner-limited-sale/order');
                        die();                              
                    }*/
					redirect('web-site-design/webdesigner-limited-sale/cart');
                }
                else
                {
                    echo "Invalid Email or Phone No.."; 
                    redirect('web-site-design/webdesigner-limited-sale/order');
                    die();                              
                }
            }                    
        }
    //redirect('web-site-design/webdesigner-limited-sale/cart');
    }  
    
    public function cart()
    {
        @$_SESSION["visitedwb"] = "1";
        @$_SESSION["visitedwc"] = "0";
        if(!@$_SESSION['company_name'])
        {
            if(!@$_SESSION['web_package'])
            {
                redirect('web-site-design/webdesigner-limited-sale/index'); 
            }
            else
            {
                redirect('web-site-design/webdesigner-limited-sale/order'); 
            }
        }
        $this->load->view('webdesign/cart');
    }
    //savman
	 public function savmanWebPromotion()
	{//ajax conteoller
		//echo $_POST['promo_code'];	
		$this->load->model('logodesignmodel');      
		$query =$this->logodesignmodel->promo_codes($_POST['promo_code'],SITE_ID);
		$tax_rate=$this->logodesignmodel->get_tax_rate(SITE_ID);
		
		if(count($query)>0)
		{
			if($query['pc_type']==1)
			{
				$_SESSION['temp_logo_price']=$_SESSION['logo_price']-(($query['pc_discount']/100)*$_SESSION['logo_price']);	
				$_SESSION['temp_web_price']=$_SESSION['web_price']-(($query['pc_discount']/100)*$_SESSION['web_price']);
			}
			// Updating logo_web-total
			//Web order
			$dis_amt=$_SESSION['web_price']-$_SESSION['temp_web_price'];
			$sub_total_before_tax=$_SESSION['web_price'];
			$tax_amount=$tax_rate*$_SESSION['temp_web_price'];
		
			$sub_total=$_SESSION['web_price'];
			$purchase_discount=0;
			$sub_total_before_discount=$sub_total-$purchase_discount;
			$data = array(
					'sub_total'=>$_SESSION['web_price'],
					'purchase_discount'=>$purchase_discount,
					'sub_total_before_discount' => $sub_total_before_discount,
					'discount_amount' => $dis_amt,
					'sub_total_before_tax' =>$_SESSION['temp_web_price'] ,
					'tax_amount' =>$tax_amount,
					'net_total' =>$_SESSION['temp_web_price']+$tax_amount
				);
			$query =$this->logodesignmodel->promo_codes_webtotal_update($data,$_SESSION['insert_id'],'web');
			//Logo
			$dis_amt_logo=$_SESSION['logo_price']-$_SESSION['temp_logo_price'];
			$sub_total_before_tax_logo=$_SESSION['logo_price'];
			$tax_amount_logo=$tax_rate*$_SESSION['temp_logo_price'];
			$sub_total_logo=$_SESSION['logo_price'];
			$purchase_discount_logo=0;
			$sub_total_before_discount_logo=$sub_total_logo-$purchase_discount_logo;
			$data_logo = array(
					'sub_total'=>$_SESSION['logo_price'],
					'purchase_discount'=>$purchase_discount_logo,
					'sub_total_before_discount' => $sub_total_before_discount_logo,
					'discount_amount' => $dis_amt_logo,
					'sub_total_before_tax' =>$_SESSION['temp_logo_price'] ,
					'tax_amount' =>$tax_amount_logo,
					'net_total' =>$_SESSION['temp_logo_price']+$tax_amount_logo
				);
			
			$_SESSION['tax_amount']=$tax_amount_logo+$tax_amount;
			$query =$this->logodesignmodel->promo_codes_webtotal_update($data_logo,$_SESSION['insert_id2'],'logo');
		}
		else{
			echo 'wrong';
		}

		
	}
	
	function testing(){
		 $this->load->model('logodesignmodel');      
	     $data['tax_rate']=$this->logodesignmodel->get_tax_rate(SITE_ID);
		 $this->load->view('webdesign/promotional_code',$data);
	}
	//savman
    public function paybank()
    {        
        
		if(!@$_SESSION['company_name'])
        {
            if(!@$_SESSION['web_package'])
            {
                redirect('web-site-design/webdesigner-limited-sale/index'); 
            }
            else
            {
                redirect('web-site-design/webdesigner-limited-sale/order'); 
            }
        }
		
		 if(isset($_SESSION['email_id']) && $_SESSION['email_id'] != '0' && $_SESSION['email_id']!='')
                {
                    if(isset($_SESSION['contact_info']) && $_SESSION['contact_info'] != '0' && $_SESSION['contact_info'] !='')
                    {                                            
                        $this->load->model('webdesignmodel');
                        $this->webdesignmodel->insert();                               
                        
                        // send message here
                        $this->load->library('email');
                        $this->email->set_newline("\r\n");
                        $config['protocol'] = 'sendmail';
                        $config['mailpath'] = '/usr/sbin/sendmail';
                        $config['charset'] = 'iso-8859-1';
                        $config['wordwrap'] = TRUE;
                        $config['mailtype'] = 'html'; 
                        $this->email->initialize($config);
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
                                       
                    }
				}
        $this->load->view('webdesign/paybank');
    }
    
    public function portfolio()
    {		
        $this->load->view('webdesign/portfolio');		
    }
    
    public function howworks()
    {		
        $this->load->view('webdesign/howworks');
    }
    
    public function whyus()
    {		
        $this->load->view('webdesign/whyus');
    }
    public function about()
    {		
        $this->load->view('webdesign/about');
    }
    
    public function ourmgmt()
    {		
        $this->load->view('webdesign/ourmgmt');
    }
    public function qualitycontrol()
    {		
        $this->load->view('webdesign/qualitycontrol');
    }
    
    public function partnership()
    {		
        $this->load->view('webdesign/partnership');
    }
    
    public function terms()
    {		
        $this->load->view('webdesign/terms');
    }
    public function guarantee()
    {		
        $this->load->view('webdesign/guarantee');
    }
    
    public function hosting()
    {		
        $this->load->view('webdesign/hosting');
    }
    
    public function seo()
    {		
        $this->load->view('webdesign/seo');
    }
    
    public function privacypolicy()
    {		
        $this->load->view('webdesign/privacypolicy');
    }
    
    public function faq()
    {		
        $this->load->view('webdesign/faq');
    }
    
    public function contact()
    {		
        $this->load->view('webdesign/contact');
    }
    
    public function charity()
    {		
        $this->load->view('webdesign/charity');
    }
    
    public function adaward()
    {		
        $this->load->view('webdesign/adaward');
    }
    
    public function rdaward()
    {		
        $this->load->view('webdesign/rdaward');
    }
    
    public function saward()
    {		
        $this->load->view('webdesign/saward');
    }
    
    public function story()
    {		
        $this->load->view('webdesign/story');
    }
    
    public function successstory()
    {		
        $this->load->view('webdesign/successstory');
    }
    
    public function thankyou()
    {  
        if($_GET['web_id'] != '' && $_GET['web_id'] !='0')
        {
            $query = $this->db->query("SELECT `ip`,`email`,`company_name`,`contact_info` FROM `web_order` where web_id='".$_GET['web_id']."'");        
            $row = $query->row();
            
            $ip     = $row->ip;
            //$email  = $row->email;
            //$contact_info = $row->contact_info;
            //$logo_id =  $row->logo_web_id;
            //$company_name = $row->company_name;
            if($ip == $_GET['ip'])
            {                		
                $this->load->model('webdesignmodel');
                $this->webdesignmodel->update(); 
            }
            else
            {
                redirect('web-site-design/webdesigner-limited-sale/index');
            }
        }
        else
        {
            redirect('web-site-design/webdesigner-limited-sale/index');
        }      
        $this->load->view('webdesign/thankyou');
        session_destroy();        
    }
    
    public function payment()
    {
        if(!@$_GET['web_id'])
        {
            redirect('web-site-design/webdesigner-limited-sale/index');
        } 
        $this->load->view('webdesign/payment');
    }
    
    public function jetpay()
    {
        if(!@$_SESSION['company_name'])
        {
            if(!@$_SESSION['web_package'])
            {
                redirect('web-site-design/webdesigner-limited-sale/index'); 
            }
            else
            {
                redirect('web-site-design/webdesigner-limited-sale/order'); 
            }
        }
        
        $this->load->library('mydata');
        $data['value']=$this->mydata->getcountry();
        $data['GatewaySettings']=$this->mydata->gatewaysetting();            
        $this->load->view('webdesign/jetpay',$data);
    }
    public function process_transactionmid()
    {
        foreach($_POST as $k => $v)
        {                
            $_SESSION[$k] = $v;
        }        
        redirect('web-site-design/webdesigner-limited-sale/process_transaction');
    }
    public function process_transaction()
    {        
        $this->load->library('mydata');
        $data['GatewaySettings']=$this->mydata->gatewaysetting();
        $this->load->view('webdesign/process_transaction',$data);
    }
    public function failed()
    {
        $this->load->view('failed');
	}
    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */