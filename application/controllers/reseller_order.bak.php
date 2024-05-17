<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reseller_order extends CI_Controller {
    var $today = '';
    public function __construct()
    {
        parent::__construct();
        
        //echo '<pre>';
        //print_r($_SESSION);
        //echo '</pre>';
        $day=date("l");$date=date("j");$month=date("M");$year=date("y");       
        $zone = '';       
        if(COUNTRY == 'USA'){$zone =  " EST";}
        $today = 'Midnight'.$zone.', <span style="text-decoration:underline;">'.$day.'</span> '.$date.' '.$month.' &lsquo;'.$year;        
        $data['today']      = $today;
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
        if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'):
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.vianet.com.np';
            $config['smtp_port'] = 25;
        endif;
        
        
		$this->email->initialize($config);        
        //echo md5(base_url().$this->uri->uri_string());
        
    }
	public function index($p_index=NULL)
	{
	   //$this->output->cache(80);
        $_SESSION['va'] = 0;
        //echo $this->today;
        switch($p_index)
        {
            case 1:
                $logo_package    = START_LP;
                $logo_price      = START_LP_P_RES;
            break; case 2:
                $logo_package    = START_PLUS_LP;
                $logo_price      = START_PLUS_LP_P_RES;
            break; case 3:
                $logo_package    = SUPER_START_PLUS_LP;
                $logo_price      = SUPER_START_PLUS_LP_P_RES;
            break; case 4:
                $logo_package    = SURGE_LP;
                $logo_price      = SURGE_LP_P_RES;
            break; case 5:
                $logo_package    = SURGE_PLUS_LP;
                $logo_price      = SURGE_PLUS_LP_P_RES;
            break; case 6:
                $logo_package    = SUPER_SURGE_PLUS_LP;
                $logo_price      = SUPER_SURGE_PLUS_LP_P_RES;
            break; case 7:
                $logo_package    = EXCEL_LP;
                $logo_price      = EXCEL_LP_P_RES;
            break; default:
                if(!isset($_SESSION['logo_package'])):
                    redirect('packages');
                else:
                    $logo_package    = $_SESSION['logo_package'];
                    $logo_price      = $_SESSION['logo_price'];
                endif;
            break;
        }
        $data['logo_package'] = $logo_package;
        $data['logo_price'] = $logo_price;
        $this->load->view('reseller/orders/index',$data);        
	}
    public function extramid(){
        if(@$_SESSION['va'] == 1):
            @$_SESSION["visiteda"] = 0;
            echo "<script>history.go(-1);</script>";
        else:
            foreach($_POST as $k => $v)
            {
                $_SESSION[$k] = $v;
            }
            redirect('reseller_orders/extra1');
        endif;
    }
    public function extra1(){
        if(!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if(!isset($_SESSION['logo_package'])):
                redirect('reseller/packages');
            endif;
            redirect('reseller_orders/index');
        endif;
        //
        $_SESSION['va'] = 1;
        
        if(isset($_SESSION['web_package'])):
            switch($_SESSION['web_package']){
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
                    unset($_SESSION['web_package'],$_SESSION['web']);
                break;
            }
        endif;
        
        if(isset($_SESSION['brouchure_package'])):
            switch($_SESSION['brouchure_package']){
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
                    unset($_SESSION['brouchure_package'],$_SESSION['brouchure']);
                break;
            }
        endif;
        $this->load->view('reseller/orders/extra1');
    }
    public function extra2(){
        if(!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if(!isset($_SESSION['logo_package'])):
                redirect('reseller/packages');
            endif;
            redirect('reseller_orders/index');
        endif;        
        $this->logodesignmodel->save_logo_order();        
        $this->load->view('reseller/orders/extra2');
    }
    public function review(){
        if(!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if(!isset($_SESSION['logo_package'])):
                redirect('reseller/packages');
            endif;
            redirect('reseller_orders/index');
        endif;
        $this->load->view('reseller/orders/review');
    }
    public function promo(){
        if(isset($_POST['pcode']))
            echo $this->logodesignmodel->promo($_POST['pcode']); 
        
    }
    public function payment(){
        if(!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
            if(!isset($_SESSION['logo_package'])):
                redirect('reseller/packages');
            endif;
            redirect('reseller_orders/index');
        endif;
        $purchase_dis   = 0;
        $promotional_discount =0;
        $tax_amount = 0;
              
        $order_desc     = $_SESSION['logo_package'].'('.CURRENCY.$_SESSION['logo_price'].')';
        $gross_total_price    = $_SESSION['logo_price'];
        
        
        // web package
        if(isset($_SESSION['web_package'])):
            $order_desc .= ', '.$_SESSION['web_package'].'('.CURRENCY.$_SESSION['web'].')';
            $gross_total_price    += $_SESSION['web'];
        endif;
        // brochure package
        if(isset($_SESSION['brouchure_package'])):
            $order_desc .= ', '.$_SESSION['brouchure_package'].'('.CURRENCY.$_SESSION['brouchure'].')';
            $gross_total_price    += $_SESSION['brouchure'];
        endif;
        // Option one
        if(isset($_SESSION['options'])):
            $order_desc .= ', '.$_SESSION['options'].'('.CURRENCY.$_SESSION['options_price'].')';
            $gross_total_price    += $_SESSION['options_price'];
        endif;
        // option two (extra2 page)
        $extra_opt_price =0;
        for($i=1;$i<=20;$i++){
            if(isset($_SESSION['options'.$i])):
                //$order_desc .= ', '.$_SESSION['options'.$i].'('.CURRENCY.$_SESSION['options'.$i.'_price'].')';
                //$gross_total_price    += $_SESSION['options'.$i.'_price'];
                $extra_opt_price    += $_SESSION['options'.$i.'_price'];                
            endif;        
        }
        if($extra_opt_price>0):
            $order_desc .= ', Other Extra Packages ('.CURRENCY.$extra_opt_price.')';
            $gross_total_price    += $extra_opt_price;        
        endif;
        
        
        $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total_price);
        if($purchase_dis_rate > 0){
            $purchase_dis    = round($purchase_dis_rate*$gross_total_price,2);
            $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total_price.'</span> <br>
                                    Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')                                    
                                    ';
        }
        
        
        if(isset($_SESSION['pcode'])):
            $p = $this->logodesignmodel->promo($_SESSION['pcode']);
            $pcode = json_decode($p);
            if($pcode != ''){
                $promotional_discount = $pcode->promo_dis;
            }
            
        endif;
        
        if($promotional_discount>0){
            $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')';
        }
        
        
        $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
        if($tax_rate){
            $tax_amount = $tax_rate*$total_before_tax;
            $order_desc.= ', <br > Tax Amount ('.CURRENCY.$tax_amount.')';
            
        }        
                        
        $order_desc .='.';
        
        
        $data['gross_total_price']          = $gross_total_price;
        $data['purchase_dis']               = $purchase_dis;
        $data['total_before_promotional']   = $total_before_promotional =$gross_total_price-$purchase_dis;
        $data['promotional_discount']       = $promotional_discount;
        $data['total_before_tax']           = $total_before_tax       = $total_before_promotional-$promotional_discount;
        $data['tax_amount']                 = $tax_amount;
        $data['net_total']                  = $net_total = number_format($total_before_tax+$tax_amount,2,'.','');
        
        $data['order_desc']         = $order_desc; 
        
        //echo gettype($gross_total_price)."<br>";        
        $net_total *= 100;
         
        //echo gettype($net_total);
        settype($net_total, 'integer');
        //echo gettype($net_total);
        
        $this->logodesignmodel->save_logo_order();
        //sending email to order@ldg sites
        
        $message = $this->load->view('email_templates/logo/order_details', '', true);  
        /*
        //$message = 'sfdajfds';                   
        $this->email->from('<'.@$_SESSION['email_id'].'>','New Customer');
        $this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
        $this->email->message($message);
        //$this->email->to(ORDER_MAIL);
        $this->email->to('jagdesh010@hotmail.com');
        $this->email->send();
        $this->email->clear();*/
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Additional headers
        //$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $headers .= 'From: New Customer <'.$_SESSION['email_id'].'>' . "\r\n";
        //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
        //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
        
        $to         = 'jagdesh010@hotmail.com';
        $subject    = "NEW LOGO/WEB ORDER ARRIVED";
        $mailbody   = $message;
        
        
        $mail = mail($to,$subject,$mailbody,$headers);
        
        
        
        
        //sending email to client
        /*$message = $this->load->view('email_templates/logo/paymentemail', '', true);
        //$message = 'sfdajfds';
        $this->email->from('<'.ORDER_MAIL.'>','Logo Admin');
        $this->email->subject('Your Logo Order Received');    		    	
        $this->email->message($message);
        $this->email->to(@$_SESSION['email_id']);
        $this->email->send();
        $this->email->clear();*/
        
        //
        
        
        
        
        if(SITE_ID == 7):
            $this->load->library('jetpay');       
            $data['state']              = $this->jetpay->get_state();
            if(isset($_POST['submit']))
            {            
                $transactionID  = $this->jetpay->get_transactionID();
                $trans_type     = $this->jetpay->trans_type;
                $tid            = $this->jetpay->tid;
                $cardnum        = $_POST['cardnum'];
                $cvv            = $_POST['cvv'];
                $expmo          = (strlen($_POST['expmonth'])< 2)?'0'.$_POST['expmonth']:$_POST['expmonth'];
                $expyr          = $_POST['expyear'];
                $name           = $_POST['fullname'];
                $amount         = $net_total;                             
                $address        = $_POST['billing_address'];
                $city           = $_POST['city'];
                $state          = $_POST['state'];
                $zip            = $_POST['zip'];
                $email          = $_SESSION['email_id'];
                $verSub         = '';
                
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
                
                if($xmlResponse->ActionCode == '000'):
                    $this->logodesignmodel->update();
                    //redirect('orders/thankyou');
                    header('Location: '.base_url().'orders/thankyou?p='.$amount);
                else:
                var_dump($xmlResponse);
                    //$data['ActionCode'] = $xmlResponse->ActionCode;
                    $data['ResponseText'] = $xmlResponse->ResponseText;
                endif;
                //var_dump($xmlResponse->JetPayResponse);            
            }
            $this->load->view('reseller/orders/jetpay',$data);
        elseif(SITE_ID == 6):
            echo "nochex";
        endif;
    }
    
    public function epayment(){
        if(isset($_REQUEST['logo_web_id']) && $_REQUEST['logo_web_id'] !=''){
            $logo_web_id = $_REQUEST['logo_web_id'];
            $auth = $_REQUEST['auth_code'];
            $get_row = $this->logodesignmodel->get_num_rows('logo_web',array('logo_web_id'=>$logo_web_id,'authentication_code'=>@$auth));
            
            //echo $get_row;
            if($get_row > 0){
                $unpaid_status = $this->logodesignmodel->get_num_rows('logo_web',array('logo_web_id'=>$logo_web_id,'payment'=>'0'));
                if($unpaid_status >0){
                    $details    = $this->logodesignmodel->get_row_obj('logo_web',array('logo_web_id'=>$logo_web_id));
                    $extra      = $this->logodesignmodel->get_row_obj('order_extra',array('logo_web_id'=>$logo_web_id));
                    
                    $_SESSION['company_name'] = $details->company_name;
                    $logo_price = $details->price;
                    $web        = $details->web;
                    $brouchure  = $details->brouchure;
                    $options    = $details->options;
                    
                    $extra_opt  = $extra->price_extra_logo;
                    $extra_opt  += $extra->price_logoby_designer;
                    $extra_opt  += $extra->price_order_lifetime;
                    $extra_opt  += $extra->price_order_flas;
                    $extra_opt  += $extra->price_logo_24hr;
                    $extra_opt  += $extra->price_black_white;
                    $extra_opt  += $extra->price_business_card;
                    $extra_opt  += $extra->price_order_letter;
                    $extra_opt  += $extra->price_order_envelop;
                    $extra_opt  += $extra->price_order_complement;
                    $extra_opt  += $extra->price_order_stationary;
                    $extra_opt  += $extra->price_order_business;
                    $extra_opt  += $extra->price_order_letter_print;
                    $extra_opt  += $extra->price_order_envelop_print;
                    $extra_opt  += $extra->price_order_complement_print;
                    $extra_opt  += $extra->price_order_mouse;
                    $extra_opt  += $extra->price_order_cap;
                    $extra_opt  += $extra->price_order_pens;
                    $extra_opt  += $extra->price_order_cotton;
                    $extra_opt  += $extra->price_order_tshirt;
                    
                    $order_desc = $details->package.'('.CURRENCY.$details->price.')';
                    if($web){
                        $order_desc .= ', '.$details->web_gold.'('.CURRENCY.$web.')'; 
                    }
                    if($brouchure){
                        $order_desc .= ', '.$details->web_elite.'('.CURRENCY.$brouchure.')';
                    }
                    if($options){
                        $order_desc .= ', '.$extra->blackn24.'('.CURRENCY.$options.')';
                    }
                    if($extra_opt > 0){
                        $order_desc .= ', Other Extra Packages ('.CURRENCY.$extra_opt.')';
                    }
                    
                    $gross_total = $logo_price+$web+$brouchure+$options+$extra_opt;
                    
                    $purchase_dis   = 0;
                    $purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total);
                    if($purchase_dis_rate > 0){
                        $purchase_dis    = round($purchase_dis_rate*$gross_total,2);
                        $order_desc     .= '<br ><span style="color:#c00"> Gross Total : '.CURRENCY.$gross_total.'</span> <br>
                                    Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')                                    
                                    ';                        
                    }
                    $total_before_promo = $gross_total-$purchase_dis;
                    $promotional_discount =0;
                    if(isset($_REQUEST['pcode'])):
                        $p = $this->logodesignmodel->promo($_REQUEST['pcode'],$total_before_promo,$logo_web_id);
                        $pcode = json_decode($p);
                        if($pcode !=''){
                            $promotional_discount = $pcode->promo_dis;
                        }                        
                    endif;
                    if($promotional_discount>0){
                        $order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')';
                    }
                    
                    $tax_amount = 0;
                    $tax_rate = $this->logodesignmodel->get_tax_rate(SITE_ID);
                    if($tax_rate){
                        $tax_amount = $tax_rate*$total_before_tax;
                    }
                    
                    $net_total = $gross_total-$purchase_dis-$promotional_discount+$tax_amount;
                    
                    $data['order_desc'] = $order_desc;
                    $data['net_total']  = $net_total;
                    
                    $net_total *= 100;         
                    //echo gettype($net_total);
                    settype($net_total, 'integer');
                                
                    if(SITE_ID == 7):
                        $this->load->library('jetpay');       
                        $data['state']              = $this->jetpay->get_state();
                        if(isset($_POST['submit']))
                        {            
                            $transactionID  = $this->jetpay->get_transactionID();
                            $trans_type     = $this->jetpay->trans_type;
                            $tid            = $this->jetpay->tid;
                            $cardnum        = $_POST['cardnum'];
                            $cvv            = $_POST['cvv'];
                            $expmo          = (strlen($_POST['expmonth'])< 2)?'0'.$_POST['expmonth']:$_POST['expmonth'];
                            $expyr          = $_POST['expyear'];
                            $name           = $_POST['fullname'];
                            $amount         = $net_total;                            
                            $address        = $_POST['billing_address'];
                            $city           = $_POST['city'];
                            $state          = $_POST['state'];
                            $zip            = $_POST['zip'];
                            $email          = $details->email_id;
                            $verSub         = '';
                            
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
                            
                            if($xmlResponse->ActionCode == '000'):
                                $this->logodesignmodel->update($logo_web_id);
                                //redirect('orders/thankyou');
                                header('Location: '.base_url().'orders/thankyou?p='.$amount);
                            else:
                            var_dump($xmlResponse);
                                //$data['ActionCode'] = $xmlResponse->ActionCode;
                                $data['ResponseText'] = $xmlResponse->ResponseText;
                            endif;
                            //var_dump($xmlResponse->JetPayResponse);            
                        }
                    endif;
                    
                    
                    $this->load->view('reseller/orders/jetpay',$data);
                    
                }
                else{
                    die('You already made payment with us');
                }
            }
            else{
                die("invalid link");
            }            
        }
        else{
            die("Invalid Order ID");
        }
    }
    

    
    // for autosaving data typed by user
    public function autosave(){
        if(isset($_POST))
        {
            foreach($_POST as $k => $v)
            {
                $_SESSION[$k] = $v;
            }            
        }
    }
    
    // save option one item
    public function save_options(){
        if(isset($_POST['opt'])):
            switch($_POST['opt']){
                case 1:
                    $return['options']          = $_SESSION['options']        = EXPRESS_DELIVERY;
                    $return['options_price']    = $_SESSION['options_price']  = EXPRESS_DELIVERY_P;
                break;
                
                case 2:
                    $return['options']          = $_SESSION['options']        = BLACK_N_WHITE;
                    $return['options_price']    = $_SESSION['options_price']  = BLACK_N_WHITE_P;
                break;
                
                case 3:
                    $return['options']          = $_SESSION['options']        = BOTH_SERVICES;
                    $return['options_price']    = $_SESSION['options_price']  = BOTH_SERVICES_P;
                break;
                
                default:
                    unset($_SESSION['options'],$_SESSION['options_price']);
                    $return['options']          = '';
                    $return['options_price']    = '';
                break;
            }
            echo json_encode($return);
        endif;
        
    }

    public function save_extra_options(){
        if(isset($_POST['extra_options'])): 
            $extra_options = preg_split('/(?<=\d)(?=[a-z])|(?<=[a-z])(?=\d)/i', $_POST['extra_options']);            
            $index = $extra_options[1];            
            if(@$_POST['val'] == '0'):
                unset($_SESSION['options'.$index],$_SESSION['options'.$index.'_price']);
                $return['extra_options']        = '';
                $return['extra_options_price']  = '';
            else:                
                switch($index){
                    case 1:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = SIX_LOGO_CONCEPT;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = SIX_LOGO_CONCEPT_P;                     
                    break;
                    
                    case 2:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = LOGO_BY_DIFFERENT_DESIGNER;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LOGO_BY_DIFFERENT_DESIGNER_P;                     
                    break;
                    
                    case 3:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = LIFE_TIME_FILE_STORAGE;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LIFE_TIME_FILE_STORAGE_P;                     
                    break;
                    
                    case 4:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = ANIMATED_FLASH;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = ANIMATED_FLASH_P;                     
                    break;
                    
                    case 5:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = LOGO_WITHIN_24_HOUR;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LOGO_WITHIN_24_HOUR_P;                     
                    break;
                    
                    case 6:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = BLACK_N_WHITE_FILE_LOGO;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = BLACK_N_WHITE_FILE_LOGO_P;                     
                    break;
                    
                    case 7:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = IMPRESS_WITH_BUSINESS_CARD;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = IMPRESS_WITH_BUSINESS_CARD_P;                     
                    break;
                    
                    case 8:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = LETTER_HEAD;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LETTER_HEAD_P;                     
                    break;
                    
                    case 9:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = ENVELOPE_DESIGN;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = ENVELOPE_DESIGN_P;                     
                    break;
                    
                    case 10:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = COMPLIMENT_SLIP;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = COMPLIMENT_SLIP_P;                     
                    break;
                    
                    case 11:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = STATIONARY_DESIGN_BUNDLE;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = STATIONARY_DESIGN_BUNDLE_P;                     
                    break;
                    
                    case 12:
			
                        if(( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options']        = $_SESSION['options'.$index]           = BUSINESS_CARD_PRINT_250;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = BUSINESS_CARD_PRINT_250_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = BUSINESS_CARD_PRINT_500;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = BUSINESS_CARD_PRINT_500_P;
                        else:
                            $return['extra_options']        = '';
                            $return['extra_options_price']  = '';                                        
                        endif;                  
                    break;
                    
                    case 13:
                        if(( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options']        = $_SESSION['options'.$index]           = LETTER_HEAD_PRINT_25;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LETTER_HEAD_PRINT_25_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = LETTER_HEAD_PRINT_250;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LETTER_HEAD_PRINT_250_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '3' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '3')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = LETTER_HEAD_PRINT_1000;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = LETTER_HEAD_PRINT_1000_P;
                        else:
                            $return['extra_options']        = '';
                            $return['extra_options_price']  = '';                                        
                        endif;                                             
                    break;
                    
                    case 14:
                        if(( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options']        = $_SESSION['options'.$index]           = ENVELOPE_DESIGN_PRINT_100;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = ENVELOPE_DESIGN_PRINT_100_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = ENVELOPE_DESIGN_PRINT_250;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = ENVELOPE_DESIGN_PRINT_250_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '3' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '3')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = ENVELOPE_DESIGN_PRINT_1000;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = ENVELOPE_DESIGN_PRINT_1000_P;
                        else:
                            $return['extra_options']        = '';
                            $return['extra_options_price']  = '';                                        
                        endif;                                            
                    break;
                    
                    case 15:
                        if(( isset($_POST['extra_qty']) && $_POST['extra_qty'] == '1') || (isset($_POST['ext_option']) && $_POST['ext_option'] == '1')):
                            $return['extra_options']        = $_SESSION['options'.$index]           = COMPLIMENT_SLIP_PRINT_100;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = COMPLIMENT_SLIP_PRINT_100_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '2' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '2')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = COMPLIMENT_SLIP_PRINT_250;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = COMPLIMENT_SLIP_PRINT_250_P;
                        elseif(isset($_POST['extra_qty']) && $_POST['extra_qty'] == '3' || (isset($_POST['ext_option']) && $_POST['ext_option'] == '3')) :
                            $return['extra_options']        = $_SESSION['options'.$index]           = COMPLIMENT_SLIP_PRINT_1000;
                            $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = COMPLIMENT_SLIP_PRINT_1000_P;
                        else:
                            $return['extra_options']        = '';
                            $return['extra_options_price']  = '';                                        
                        endif;              
                    break;
                    
                    case 16:    
                        $qty = isset($_POST['extra_qty'])?$_POST['extra_qty']:(isset($_POST['ext_option'])?$_POST['ext_option']:1);
                        $return['extra_options']        = $_SESSION['options'.$index]           = MOUSE_MAT_WITH_LOGO .'('. MOUSE_MAT_WITH_LOGO_P . ' * '. $qty . ')';
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = MOUSE_MAT_WITH_LOGO_P * $qty;                     
                    break;
                    
                    case 17:  
            			if(isset($_POST['extra_qty']) && $_POST['extra_qty'] != ''){
            			    $options = explode(':',$_POST['extra_qty']);
            			}
            			else{
            			    $options = explode(':',$_POST['ext_option']);
            			}
                        $return['extra_options']        = $_SESSION['options'.$index]           = CAP_WITH_LOGO. $options[1].'('.CAP_WITH_LOGO_P.'*'.$options[0].')';
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = CAP_WITH_LOGO_P * $options[0];                     
                    break;
                    
                    case 18:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = PEN_WITH_LOGO;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = PEN_WITH_LOGO_P;                     
                    break;
                    
                    case 19:                    
                        $return['extra_options']        = $_SESSION['options'.$index]           = BAG_WITH_LOGO;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = BAG_WITH_LOGO_P;                     
                    break;
                    
                    case 20:
            			if(isset($_POST['extra_qty']) && $_POST['extra_qty'] != ''){
            			    $options = explode(':',$_POST['extra_qty']);
            			}
            			else{
            			    $options = explode(':',$_POST['ext_option']);
            			}            			
            			$totol_price = TSHIRT_WITH_LOGO_P * array_sum($options);						
                        $return['extra_options']        = $_SESSION['options'.$index]           = TSHIRT_WITH_LOGO;
                        $return['extra_options_price']  = $_SESSION['options'.$index.'_price']  = $totol_price;                     
                    break;
                    
                    default:
                        unset($_SESSION['options'.$index],$_SESSION['options'.$index.'_price']);
                        $return['extra_options']        = '';
                        $return['extra_options_price']  = '';
                    break;
                }
            endif;
	    
            echo json_encode($return);
        endif;        
    }
    public function thankyou()
    {
        session_destroy();
        $this->load->view('reseller/orders/thankyou');
    }
}