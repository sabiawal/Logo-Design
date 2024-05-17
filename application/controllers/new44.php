<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class New44 extends CI_Controller {	
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code

         if(isset($_GET['bks'])){
            redirect('new44/'.$_GET['bks']);
        }

// error_reporting(E_ALL);
        $this->load->database();
        $this->load->model('new44model');
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
        }
        $today = 'Midnight ' . $zone . ', <span style="text-decoration:underline;">' . $day . '</span> ' . $date . ' ' . $month . ' &lsquo;' . $year;
        $data['today'] = $today;
        $this->load->vars($data);



        //$this->output->cache(1440); // 1440 min( one day) 
    }
	public function index(){redirect('new44/more_services');}
    
    public function newpackages()
    {  
        $row = $this->logodesignmodel->get_num_rows('new_packages');    
        
        if(isset($_GET['pid']))
        {
            $num = intval($_GET['pid']);            
            if($num <= 0 || $num > $row)
            {               
                $package_id = 0;
            }
            else
            {
                if($num == 45 || $num == 46)
                {
                    $package_id = 0;
                }
                else
                {
                    $package_id = $num;
                }
                
            }            
        }
        else
        {
            $package_id = 0;
        }  
        //echo $package_id;      
        
        if ($package_id != 0)
		{
			$packages['new_package'] = $this->logodesignmodel->getpackages($package_id);        
			$this->load->view('new44/newpackages',$packages);
		}		
	}

    /*
    
    public function category(){
        $data['marketing_package']  = $this->logodesignmodel->get_more_services(1); 
        $data['logo_package']       = $this->logodesignmodel->get_more_services(2); 
        $data['email_package']      = $this->logodesignmodel->get_more_services(3);
        $data['web_package']        = $this->logodesignmodel->get_more_services(4);  
        $data['merc_package']       = $this->logodesignmodel->get_more_services(5); 
        $data['stationary_package'] = $this->logodesignmodel->get_more_services(6);        
        $data['page_title'] = 'More Services';
        $this->load->view('new44/category',$data);
	}*/
    public function category(){
        redirect('new44/more_services');
    }
    public function more_services(){              
        $data['page_title'] = 'More Services';
        $this->load->view('new44/more_services',$data);
	}
    
	
	public function order($sub_package_id=NULL){
        if (!isset($_SESSION['new_package_name'])) {
            redirect('new44/more_services');
            die;
        }


        $data['page_title'] = 'Order More Services';
		$data['package_detail'] =$this->new44model->getmoreservices($sub_package_id)->row();
        if(!$data['package_detail']){
            redirect('new44/more_services');
        }
        //echo "<pre>";print_r($data);die;

	   if(COUNTRY == 'USA'){
        $price    = $data['package_detail']->usd;
        $price_reg= $data['package_detail']->usd_reg;
	}
    if(COUNTRY == 'UK'){
       $price    = $data['package_detail']->gbp;
        $price_reg = $data['package_detail']->gbp_reg;
	}

    $_SESSION['price']=$price;
   $_SESSION['price_reg']=$price_reg;
   $_SESSION['sub_package_id']=$data['package_detail']->sub_package_id;
   $_SESSION['package_type']=$data['package_detail']->package_type;
   $_SESSION['package_description2']=$data['package_detail']->package_description2;

   

     
	   $this->load->view('new44/step_1',$data);
	}
    
	
	function logobrief() {

        // echo "<pre>";print_r($_SESSION);die;
        if (!isset($_SESSION['new_package_name']) || !isset($_SESSION['package_type'])) {
            redirect('new44/more_services');
            die;
        }

       
        if (!isset($_SESSION['fname']) || !isset($_SESSION['lname']) || !isset($_SESSION['company_name']) || !isset($_SESSION['email_id'])) {
                redirect('new44/more_services');
                die;
            
        } 
      

        $this->load->view('new44/step_2');
       
    }
	
    public function autosave() {
        if (isset($_POST)) {
            foreach ($_POST as $k => $v) {
                $_SESSION[$k] = $v;
            }
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
           


            echo '
				<p>' . $_POST['value'] . '
              <h3>' . CURRENCY . '<span class="main_price">';
            if ($_POST['name'] == 'web_package') {
                echo $_SESSION['web_price'];
            } 

            echo '</span></h3></p>';
        } else {
            echo '';
        }
    }
  function prev_file() {

        if (isset($_POST['fileList'])) {
            if (!isset($_SESSION['fileList'])) {
                //$file=$_POST['fileList'];
                echo $_SESSION['fileList'] = $_POST['fileList'];
            } else {
				if(empty($_SESSION['fileList'])){
					 echo $_SESSION['fileList'] = $_POST['fileList'];
					 }
				else{
                echo $_SESSION['fileList'] = $_SESSION['fileList'] . ':' . $_POST['fileList'];
				}
            }
            //unset($_SESSION['fileList']);
            //$file=$file.'/'.$_POST['fileList'];
            //echo $_SESSION['fileList']=$file.'/'.$_POST['fileList'];
        }
    }
	
		function remove_attach(){
		//print_r($_POST['file_name']);
		$file='';
		unlink('web_images/'.$_POST['file_name']);
		if($_POST['number'] ==0){
				if($_POST['next_number'] != 0){
					$file=$_POST['file_name'].':';
					}
					else{
					$file=$_POST['file_name'];
					}
			}
			else{
				$file=':'.$_POST['file_name'];
				}
				
		if(isset($_SESSION['fileList'])){

                          echo $_SESSION['fileList'] = str_replace($file,"",$_SESSION['fileList']);
                          if (isset($_SESSION['logo_web_id']) && $_SESSION['logo_web_id'] != '') {
            $insert_array = array('files' => $_SESSION['fileList']);
            $this->db->update('logo_web', $insert_array, array("logo_web_id" => $_SESSION['logo_web_id']));
        }

                }
        if(isset($_SESSION['filewithoutflash'])){
                          echo $_SESSION['filewithoutflash'] = str_replace($file,"",$_SESSION['filewithoutflash']);
                          
                          if (isset($_SESSION['logo_web_id']) && $_SESSION['logo_web_id'] != '') {
            $insert_array = array('files' => $_SESSION['filewithoutflash']);
            $this->db->update('logo_web', $insert_array, array("logo_web_id" => $_SESSION['logo_web_id']));
        }

                    
                }

		}

 function special() {
        if (!isset($_SESSION['fname']) || !isset($_SESSION['lname']) || !isset($_SESSION['company_name']) || !isset($_SESSION['email_id'])) {
            redirect('new44/logobrief/');
            die;
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
        // echo "<pre>";print_r($_SESSION);
        // die;
        $this->new44model->save_logo_order();
    // die('bikkkk');
        $this->load->view('new44/step_3');
    }
	
	
    public function promo() {
        //$this->output->cache(1440);
        if (isset($_POST['pcode']))
            echo $this->logodesignmodel->promo($_POST['pcode']);
    }
    public function payment_process() {
        //$this->output->cache(1440);        
        
            $this->new44model->save_logo_order();
            //sending email to order@ldg sites        
            $message = $this->load->view('email_templates/logo/order_details', '', true);

            //$message = 'sfdajfds';                   
            $this->email->from('<' . @$_SESSION['email_id'] . '>', 'New Customer');
            $this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
            $this->email->message($message);
            $this->email->to(ORDER_MAIL);
            //$this->email->cc('dilheartone@hotmail.com');
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

            redirect('new44/payment');
        
    }
	    public function payment() {
        //$this->output->cache(1440);
        if (!isset($_SESSION['fname']) || !isset($_SESSION['company_name'])):
            if (!isset($_SESSION['logo_package'])):
                redirect('new44/more_services');
            endif;
            redirect('new44/more_services');
        endif;
        $purchase_dis = 0;
        $promotional_discount = 0;
        $tax_amount = 0;
          $logoprice = 0;
        $order_desc = str_replace("<br/>", "\n", $_SESSION['package_type']) . ' (' . CURRENCY . ($_SESSION['price'] + $logoprice ) . ')';
        $gross_total_price = $_SESSION['price'] + $logoprice;


        // web package
       
            if (isset($_SESSION['web_package'])):
                $order_desc .= ', ' . $_SESSION['web_package'] . ' (' . CURRENCY . $_SESSION['web_price'] . ')';
                $gross_total_price += $_SESSION['web_price'];
            endif;
        // brochure package
        
        // Option one

       
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


        $purchase_dis_rate = $this->new44model->get_purchase_dis_rate($gross_total_price);
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
        $tax_rate = $this->new44model->get_tax_rate(SITE_ID);
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
                $address = isset($_POST['billing_address'])?$_POST['billing_address']:"";
                $city = isset($_POST['city'])?$_POST['city']:"";
                $state = isset($_POST['state'])?$_POST['state']:"";
                $zip = isset($_POST['zip'])?$_POST['zip']:"";
                $email = $_SESSION['email_id'];
                $verSub = ""; 

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
                // $xmlString .= "<BillingAddress>" . $address . "</BillingAddress>";
                // $xmlString .= "<BillingCity>" . $city . "</BillingCity>";
                // $xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
                // $xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
                $xmlString .= "<Email>" . $email . "</Email>";
                $xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
                $xmlString .= "</JetPay>";

               //print_r($xmlString)."<br>";        
                //Send XML to JetPay 
               // echo "bikash";die;
                $xmlResponse = $this->jetpay->sendXMLString($xmlString);
                // var_dump($xmlResponse); die;
                if ($xmlResponse->ActionCode == '000'):
                   // echo "bikash";
                    $this->new44model->update();
                    redirect("new44/thankyou?p=$amount");
                    //header('Location: ' . base_url() . 'orders/thankyou?p=' . $amount);
                else:
                    //echo "pj";
                   // echo "<pre>"; 
                   // var_dump($xmlString);
                   // var_dump($xmlResponse);
                    //$data['ActionCode'] = $xmlResponse->ActionCode;
                    $data['ResponseText'] = $xmlResponse->ResponseText;
                endif;
                //var_dump($xmlResponse->JetPayResponse);            
            }
            $this->load->view('new44/jetpay', $data);
        elseif (SITE_ID == 6):
            $this->load->view('logo/orders/nochex', $data);
        endif;
    }

     public function thankyou() {
        if (COUNTRY == "UK"):    // LDG.COM will Update record in Payment page 
            $this->new44model->update();
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

        // $session=$_POST["sesName1"];
        // $session2=$_POST["sesName2"];
        if($session2 == 'web'){unset($_SESSION['web_price']);}       
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

    public function reselect_package() {
        $session = $_POST["sesName1"];
        $session2 = $_POST["sesName2"];
        if($session2 == 'web'){$_SESSION['web_price']=$_POST["sesValue2"];}
        $_SESSION[$session] = $_POST["sesValue1"];
        $_SESSION[$session2] = $_POST["sesValue2"];

        if ($_SESSION['deletedServices'][$session])
            unset($_SESSION['deletedServices'][$session]);
        //echo @$_SESSION[$session].'----'.@$_SESSION[$session2];
    }

	  // save option one item
    public function save_options() {
        if (isset($_POST['options'])):
            unset($_SESSION['deletedServices']['options']);
            $_SESSION['pack_id'] = isset($_SESSION['pack_id']) ? $_SESSION['pack_id'] : "";
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
                        unset($_SESSION['options11'], $_SESSION['options11_price']);
                        break;

                    case 8:
                        $return['extra_options'] = $_SESSION[$ses_name] = LETTER_HEAD;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = LETTER_HEAD_P;
                        unset($_SESSION['options11'], $_SESSION['options11_price']);
                        break;

                    case 9:
                        $return['extra_options'] = $_SESSION[$ses_name] = ENVELOPE_DESIGN;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = ENVELOPE_DESIGN_P;
                        break;

                    case 10:
                        $return['extra_options'] = $_SESSION[$ses_name] = COMPLIMENT_SLIP;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = COMPLIMENT_SLIP_P;
                        unset($_SESSION['options11'], $_SESSION['options11_price']);
                        break;

                    case 11:
                        $return['extra_options'] = $_SESSION[$ses_name] = STATIONARY_DESIGN_BUNDLE;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = STATIONARY_DESIGN_BUNDLE_P;
                        unset($_SESSION['options7'], $_SESSION['options7_price'], $_SESSION['options8'], $_SESSION['options8_price'], $_SESSION['options10'], $_SESSION['options10_price']);
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
                        $return['total_mo']='<a id="options16___'.MOUSE_MAT_WITH_LOGO.'('.MOUSE_MAT_WITH_LOGO_P.' * '.$qty.')___options16_price___'.MOUSE_MAT_WITH_LOGO_P * $qty.'" class="remove_package" href="javascript:void(0)" style="display: none;"><img src="'.base_url().'assets/images/remove.gif"></a>';
                        $_SESSION['mouse_qty']=$qty;
                        break;

                    case 17:
                        if (isset($_POST['extra_qty']) && $_POST['extra_qty'] != '') {
                            $options = explode(':', $_POST['extra_qty']);
                        } else {
                            $options = explode(':', $_POST['ext_option']);
                        }
                         $_SESSION['cap_qty']=$options[0];
                          $_SESSION['cap_color']=$options[1];
                        $return['extra_options'] = $_SESSION[$ses_name] = CAP_WITH_LOGO . $options[1] . '(' . CAP_WITH_LOGO_P . '*' . $options[0] . ')';
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = CAP_WITH_LOGO_P * $options[0];
                        // <a style="" id="options17___Order a &lt;u&gt;custom CAP&lt;/u&gt; with your personal logo on (free delivery)!Cap Color - Black(35*1)___options17_price___35" class="remove_package" href="javascript:void(0)"><img src="http://www.logodesignguarantee.com/assets/images/remove.gif"></a>
                        $return['total_mo']='<a id="options17___'.CAP_WITH_LOGO . $options[1] . '(' . CAP_WITH_LOGO_P . '*' . $options[0] . ')___options17_price___'.CAP_WITH_LOGO_P * $options[0].'" class="remove_package" href="javascript:void(0)" style="display: none;"><img src="'.base_url().'assets/images/remove.gif"></a>';

                        break;

                    case 18:
                        $return['extra_options'] = $_SESSION[$ses_name] = PEN_WITH_LOGO;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = PEN_WITH_LOGO_P;
                        break;

                    case 19:
                        $return['extra_options'] = $_SESSION[$ses_name] = BAG_WITH_LOGO;
                        $return['extra_options_price'] = $_SESSION[$ses_name2] = BAG_WITH_LOGO_P;
                        break;

                    case 20:
                        if(isset($_POST['extra_qty']) && $_POST['extra_qty'] != ''){
                            $options = explode(':',$_POST['extra_qty']);
                            
                            
                        }
                        else{
                            $options = explode(':',$_POST['ext_option']);
                        }  
                        //echo $options;                    
                        $totol_price = TSHIRT_WITH_LOGO_P *($options[1]+$options[2]+$options[3]+$options[4]+ $options[5]);
                        
                        $_SESSION['tsmall']=$options[1];
                        $_SESSION['tmiddle']=$options[2];
                        $_SESSION['tlarge']=$options[3];
                        $_SESSION['txlarge']=$options[4];
                        $_SESSION['txxlarge']=$options[5];
                        $size='S='.$options[1].', M='.$options[2].', L='.$options[3].', XL='.$options[4].', XXL='.$options[5];
                        if($options[1] == 0 && $options[2] == 0 && $options[3] == 0 && $options[4] == 0 && $options[5] == 0  ){$return['total_tshirt']=0;}
                        else{
                        $return['total_tshirt']='<a id="options20___'.TSHIRT_WITH_LOGO.$size.'___options20_price___'.$totol_price.'" class="remove_package" href="javascript:void(0)" style="display: none;"><img src="'.base_url().'assets/images/remove.gif"></a>';
                        }
                        
                        $return['extra_options']        = $_SESSION[$ses_name]  = TSHIRT_WITH_LOGO.$size;
                        $return['extra_options_price']  = $_SESSION[$ses_name2]  = $totol_price;                     
                    break;

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
	
	
    public function email_newsletter(){
        $data['package_detail'] = $package_detail=  $this->new44model->get_more_services(3,22); // category_id, package_id


         //echo "<pre>";print_r($package_detail->result());exit;
        $this->load->view('new44/email_newsletter',$data);
    }
	
    public function email_signature(){
        $data['package_detail'] = $this->new44model->get_more_services(3,42); // category_id, package_id
        $this->load->view('new44/email_signature',$data);
    }
    public function email_templates(){
        $data['package_detail'] = $this->new44model->get_more_services(3,23); // category_id, package_id
        $this->load->view('new44/email_templates',$data);
    }
    public function market_book_cover_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,17); // category_id, package_id
        $this->load->view('new44/market_book_cover_design',$data);
    }
    public function market_brochure_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,1); // category_id, package_id
        $this->load->view('new44/market_brochure_design',$data);
    }
    public function market_bumper_sticker(){
        $data['package_detail'] = $this->new44model->get_more_services(1,9); // category_id, package_id
        $this->load->view('new44/market_bumper_sticker',$data);
    }
    public function market_catalog_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,13); // category_id, package_id
        $this->load->view('new44/market_catalog_design',$data);
    }
    public function market_cddvd_cover(){
        $data['package_detail'] = $this->new44model->get_more_services(1,12); // category_id, package_id
        $this->load->view('new44/market_cddvd_cover',$data);
    }
    public function market_flyer(){
        $data['package_detail'] = $this->new44model->get_more_services(1,3); // category_id, package_id
        $this->load->view('new44/market_flyer',$data);
    }
    public function market_illustration(){
        $data['package_detail'] = $this->new44model->get_more_services(1,14); // category_id, package_id
        $this->load->view('new44/market_illustration',$data);
    }
    public function market_invitation_card(){
        $data['package_detail'] = $this->new44model->get_more_services(1,5); // category_id, package_id
        $this->load->view('new44/market_invitation_card',$data);
    }
    public function market_magazing_cover(){
        $data['package_detail'] = $this->new44model->get_more_services(1,15); // category_id, package_id
        $this->load->view('new44/market_magazing_cover',$data);
    }
    public function market_member_card_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,6); // category_id, package_id
        $this->load->view('new44/market_member_card_design',$data);
    }
    public function market_menu_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,8); // category_id, package_id
        $this->load->view('new44/market_menu_design',$data);
    }
    public function market_postcard_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,10); // category_id, package_id
        $this->load->view('new44/market_postcard_design',$data);
    }
    public function market_poster_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,4); // category_id, package_id
        $this->load->view('new44/market_poster_design',$data);
    }
    public function market_powerpoint_slide(){
        $data['package_detail'] = $this->new44model->get_more_services(1,7); // category_id, package_id
        $this->load->view('new44/market_powerpoint_slide',$data);
    }
    public function market_product_label(){
        $data['package_detail'] = $this->new44model->get_more_services(1,11); // category_id, package_id
        $this->load->view('new44/market_product_label',$data);
    }
    public function market_product_pack(){
        $data['package_detail'] = $this->new44model->get_more_services(1,16); // category_id, package_id
        $this->load->view('new44/market_product_pack',$data);
    }
    public function market_social_media(){
        $data['package_detail'] = $this->new44model->get_more_services(1,2); // category_id, package_id
        $this->load->view('new44/market_social_media',$data);
    }
    public function market_sticker_design(){
        $data['package_detail'] = $this->new44model->get_more_services(1,18); // category_id, package_id
        $this->load->view('new44/market_sticker_design',$data);
    }
    public function logo_animated_design(){
        $data['package_detail'] = $this->new44model->get_more_services(2,19); // category_id, package_id
        $this->load->view('new44/logo_animated_design',$data);
    }
    public function logo_redesign(){
        $data['package_detail'] = $this->new44model->get_more_services(2,20); // category_id, package_id
        $this->load->view('new44/logo_redesign',$data);
    }
    public function logo_grayscale(){
        $data['package_detail'] = $this->new44model->get_more_services(2,21); // category_id, package_id
        $this->load->view('new44/logo_grayscale',$data);
    }
    public function merch_bookmark_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,29); // category_id, package_id
        $this->load->view('new44/merch_bookmark_design',$data);
    }
    public function merch_door_hanger_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,33); // category_id, package_id
        $this->load->view('new44/merch_door_hanger_design',$data);
    }
    public function merch_folder_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,31); // category_id, package_id
        $this->load->view('new44/merch_folder_design',$data);
    }
    public function merch_merchandise_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,32); // category_id, package_id
        $this->load->view('new44/merch_merchandise_design',$data);
    }
    public function merch_screen_wallpaper_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,34); // category_id, package_id
        $this->load->view('new44/merch_screen_wallpaper_design',$data);
    }
    public function merch_signage_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,30); // category_id, package_id
        $this->load->view('new44/merch_signage_design',$data);
    }
    public function merch_tshirt_design(){
        $data['package_detail'] = $this->new44model->get_more_services(5,28); // category_id, package_id
        $this->load->view('new44/merch_tshirt_design',$data);
    }
    public function stat_business_card_design(){
        $data['package_detail'] = $this->new44model->get_more_services(6,36); // category_id, package_id
        $this->load->view('new44/stat_business_card_design',$data);
    }
    public function stat_complementary_slip(){
        $data['package_detail'] = $this->new44model->get_more_services(6,39); // category_id, package_id
        $this->load->view('new44/stat_complementary_slip',$data);
    }
    public function stat_electronic_letter(){
        $data['package_detail'] = $this->new44model->get_more_services(6,44); // category_id, package_id
        $this->load->view('new44/stat_electronic_letter',$data);
    }
    public function stat_envelope(){
        $data['package_detail'] = $this->new44model->get_more_services(6,38); // category_id, package_id
        $this->load->view('new44/stat_envelope',$data);
    }
    public function stat_fax_template(){
        $data['package_detail'] = $this->new44model->get_more_services(6,40); // category_id, package_id
        $this->load->view('new44/stat_fax_template',$data);
    }
    public function stat_letterhead(){
        $data['package_detail'] = $this->new44model->get_more_services(6,37); // category_id, package_id
        $this->load->view('new44/stat_letterhead',$data);
    }
    public function stat_notepad(){
        $data['package_detail'] = $this->new44model->get_more_services(6,43); // category_id, package_id
        $this->load->view('new44/stat_notepad',$data);
    }
    public function stat_stationary(){
        $data['package_detail'] = $this->new44model->get_more_services(6,35); // category_id, package_id
        $this->load->view('new44/stat_stationary',$data);
    }
    public function web_anim_banner(){
        $data['package_detail'] = $this->new44model->get_more_services(4,25); // category_id, package_id
        $this->load->view('new44/web_anim_banner',$data);
    }
    public function web_anim_header(){
        $data['package_detail'] = $this->new44model->get_more_services(4,41); // category_id, package_id
        $this->load->view('new44/web_anim_header',$data);
    }
    public function web_favicon_design(){
        $data['package_detail'] = $this->new44model->get_more_services(4,27); // category_id, package_id
        $this->load->view('new44/web_favicon_design',$data);
    }
    public function web_icon_design(){
        $data['package_detail'] = $this->new44model->get_more_services(4,26); // category_id, package_id
        $this->load->view('new44/web_icon_design',$data);
    }
    public function web_landing_page(){
        $data['package_detail'] = $this->new44model->get_more_services(4,24); // category_id, package_id
        $this->load->view('new44/web_landing_page',$data);
    }

    function uploadimagesfile(){
        $fil = '';
            $nows = date('ymdhis') . '_';

            foreach($_FILES as $file)
    {

         $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if ($ext == 'jpg' || $ext == 'JPG' || $ext == 'svgz' || $ext == 'SVGZ' || $ext == 'svg' || $ext == 'SVG' || $ext == 'tiff' || $ext == 'TIFF' || $ext == 'tif' || $ext == 'TIF' || $ext == 'ico' || $ext == 'ICO' || $ext == 'bmp' || $ext == 'BMP' || $ext == 'jpe' || $ext == 'JPE' || $ext == 'jpeg' || $ext == 'JPEG' || $ext == 'GIF' || $ext == 'gif' || $ext == 'PNG' || $ext == 'png') {
            $filesss = $_SERVER['DOCUMENT_ROOT'] . '/web_images/' . $nows . $file['name'];
            if(move_uploaded_file($file['tmp_name'], $filesss)){

            $fil = $fil . ':' . $nows . $file['name'];

            echo '<div class="inner-filelist" ><img src="' . base_url() . 'web_images/' . $nows . $file['name'] . '" height="150" width="150" class="remove_attach" title="' . $nows . $file['name'] . '"/><a class="thremove"><img src="assets/images/delete1.png"></a>  </div>';
            }else{
                echo '<div class="inner-filelist" style="color:red;">Can not upload '.$file['name'].'</div>';
            }

        } else if($ext == 'DOC' || $ext == 'doc' || $ext == 'DOCX' || $ext == 'docx' || $ext == 'CSV' || $ext == 'csv' || $ext == 'pdf' || $ext == 'PDF' || $ext == 'ppt' || $ext == 'pptx' || $ext == 'PPT' || $ext == 'xlsx' || $ext == 'XLSX'|| $ext == 'fodt' || $ext == 'odt' || $ext == 'ott' || $ext == 'odt'|| $ext == 'odp'|| $ext == 'otp'|| $ext == 'ods'|| $ext == 'ots'|| $ext == 'zip'|| $ext == 'rar' || $ext == 'rtf'|| $ext == 'tar'|| $ext == 'psd' || $ext == 'ai'|| $ext == 'eps') {

            $filesss = $_SERVER['DOCUMENT_ROOT'] . '/web_images/' . $nows . $file['name'];
                    if(move_uploaded_file($file['tmp_name'], $filesss)){

                    $fil = $fil . ':' . $nows . $file['name'];

                    $b = substr($nows . $file['name'], 13);
                    echo '<div class="inner-filelist" ><a title="' . $nows . $file['name'] . '" href="' . base_url() . 'web_images/' . $nows . $file['name'] . '" download>' . $b . '</a><a class="thremove"><img src="assets/images/delete1.png"></a></div>';
                    }else{
                        echo '<div class="inner-filelist" style="color:red;">Can not upload '.$file['name'].'</div>';
                    }
        }
        else{
             echo '<div class="inner-filelist" style="color:red;">'.$file['name'].' file is not valid</div>';
        }
       
    }
            $fil = substr($fil, 1);
            if(isset($_SESSION['fileList']) && !empty($_SESSION['fileList'])){
                $_SESSION['fileList'] = $_SESSION['fileList'].':'.$fil;
            }else{

            $_SESSION['fileList']=$fil;
            }

    }



    
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */