<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reseller_web_order extends CI_Controller {

    public function __construct() {
        parent::__construct();

//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
        $day = date("l");
        $date = date("j");
        $month = date("M");
        $year = date("y");
        $zone = '';
        if (COUNTRY == 'USA') {
            $zone = " EST";
        }
        $today = 'Midnight' . $zone . ', <span style="text-decoration:underline;">' . $day . '</span> ' . $date . ' ' . $month . ' ' . $year;
        $data['today'] = $today;
        $this->load->vars($data);

        $this->load->database();
        $this->load->model('webdesignmodel');

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
//echo $this->logodesignmodel->get_auth_code();
        $this->email->initialize($config);
    }

    public function index($p_index = NULL) {
        $_SESSION['va'] = 0;

        switch ($p_index) {
            case 1:
                $web_package = BUDGET_WP;
                $web_price = BUDGET_WP_P;
                break;

            case 2:
                $web_package = GOLD_WP;
                $web_price = GOLD_WP_P;
                break;

            case 3:
                $web_package = ELITE_WP;
                $web_price = ELITE_WP_P;
                break;
			
			case 4:
                $web_package = ELITE_ECOMMERCE_WP;
                $web_price = ELITE_ECOMMERCE_WP_P;
                break;

            case 5:
                $web_package = ELITE_EXTENDED_ECOMMERCE_WP;
                $web_price = ELITE_EXTENDED_ECOMMERCE_WP_P;
                break;
                                                                                    
            case 6:
                $web_package = BASIC_COMMERCE_WP;
                $web_price = BASIC_COMMERCE_WP_P;
                break;  

            case 7:
                $web_package = ADVANCED_COMMERCE_WP;
                $web_price = ADVANCED_COMMERCE_WP_P;
                break;

            default:
                if (!isset($_SESSION['web_package'])):
                    redirect('reseller_web/index');
                else:
                    $web_package = $_SESSION['web_package'];
                    $web_price = $_SESSION['web_price'];
                endif;
                break;
        }
        $data['web_package'] = $web_package;
        $data['web_price'] = $web_price;
        $this->load->view('reseller_web/orders/index', $data);
    }

    public function extramid() {
        if (@$_SESSION['va'] == 1):
            @$_SESSION["visiteda"] = 0;
            echo "<script>history.go(-1);</script>";
        else:
            foreach ($_POST as $k => $v) {
                $_SESSION[$k] = $v;
            }
            redirect('reseller_web_orders/review');
        endif;
    }

    public function review() {
        $_SESSION['vb'] = 0;
        unset($_SESSION['pcode']);
        if (!isset($_SESSION['company_name']) && !isset($_SESSION['contact_info'])):
            if (!isset($_SESSION['web_package'])):
                redirect('reseller_web/index');
            endif;
            redirect('reseller_web/orders');
        endif;

        if (isset($_SESSION['logo_package'])):
            switch ($_SESSION['logo_package']) {
                case START_LP:
                    $_SESSION['logo_price'] = START_LP_P;
                    break;

                case START_PLUS_LP:
                    $_SESSION['logo_price'] = START_PLUS_LP_P;
                    break;

                case SUPER_START_PLUS_LP:
                    $_SESSION['logo_price'] = SUPER_START_PLUS_LP_P;
                    break;
                case SURGE_LP:
                    $_SESSION['logo_price'] = SURGE_LP_P;
                    break;
                case SURGE_PLUS_LP:
                    $_SESSION['logo_price'] = SURGE_PLUS_LP_P;
                    break;
                case SUPER_SURGE_PLUS_LP:
                    $_SESSION['logo_price'] = SUPER_SURGE_PLUS_LP_P;
                    break;
                case EXCEL_LP:
                    $_SESSION['logo_price'] = EXCEL_LP_P;
                    break;

                default:
                    unset($_SESSION['logo_price'], $_SESSION['logo_package']);
                    break;
            }
        endif;
//$this->webdesignmodel->save_web_order();

        $this->load->view('reseller_web/orders/review');
    }

    public function promo() {
        if (isset($_POST['pcode']))
            echo $this->webdesignmodel->promo($_POST['pcode']);
    }

    public function payment() {
        if (@$_SESSION["vb"] == 1) {
            @$_SESSION["vb"] = 0;
            echo "<script>history.go(-1);</script>";
        } else {
            $this->webdesignmodel->save_web_order();
            if (!isset($_SESSION['fname']) && !isset($_SESSION['company_name'])):
                if (!isset($_SESSION['logo_package'])):
                    redirect('packages');
                endif;
                redirect('orders/index');
            endif;
            $order_desc = $_SESSION['web_package'] . '(' . CURRENCY . $_SESSION['web_price'] . ')';
            $gross_total_price = $_SESSION['web_price'];
// logo package
            if (isset($_SESSION['logo_package'])):
                $order_desc .= ', ' . $_SESSION['logo_package'] . '(' . CURRENCY . $_SESSION['logo_price'] . ')';
                $gross_total_price += $_SESSION['logo_price'];
            endif;


            $purchase_dis = 0;
//$purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total_price);
            $purchase_dis_rate = 0;
            if ($purchase_dis_rate > 0) {
                $purchase_dis = round($purchase_dis_rate * $gross_total_price, 2);
                $order_desc .= '<br ><span style="color:#c00"> Gross Total : ' . CURRENCY . $gross_total_price . '</span> <br>
                                    Purchase Discount ' . ($purchase_dis_rate * 100) . '% (' . CURRENCY . $purchase_dis . ')                                    
                                    ';
            }
            $total_before_promotional = $gross_total_price - $purchase_dis;
            $promotional_discount = 0;
            if (isset($_SESSION['pcode'])):
                $p = $this->webdesignmodel->promo($_SESSION['pcode']);
                $pcode = json_decode($p);
                if ($pcode != '') {
                    $promotional_discount = $pcode->promo_dis;
                }

            endif;

            if ($promotional_discount > 0) {
//$order_desc .= ', <br > Promotional Discount ('.CURRENCY.$promotional_discount.')';
            }
            $reseller_dis = 0;
            $reseller_dis_rate = RESELLER_DISCOUNT;
            if ($reseller_dis_rate && isset($_SESSION['reseller_id'])) {
                $reseller_dis = round($reseller_dis_rate * $total_before_promotional, 2);
//$order_desc .= 'Reseller Discount ' . ($reseller_dis_rate * 100) . '% (' . CURRENCY . number_format($reseller_dis, 2) . ")<br/>";
                $total_before_promotional = $total_before_promotional - $reseller_dis;
            }
            $total_before_tax = $total_before_promotional - $promotional_discount;
            $tax_amount = 0;
            $tax_rate = $this->webdesignmodel->get_tax_rate(SITE_ID);
            if ($tax_rate) {
                $tax_amount = $tax_rate * $total_before_tax;
//$order_desc.= ', <br > Tax Amount ('.CURRENCY.$tax_amount.')';            
            }

//$order_desc .='.';

            $data['reseller_dis'] = number_format($reseller_dis, 2);
            $data['reseller_dis_rate'] = $reseller_dis_rate;
            $data['gross_total_price'] = $gross_total_price;
            $data['purchase_dis'] = $purchase_dis;
            $data['total_before_promotional'] = $total_before_promotional;
            $data['promotional_discount'] = $promotional_discount;
            $data['total_before_tax'] = $total_before_tax;
            $data['tax_amount'] = $tax_amount;
            $data['net_total'] = $net_total = number_format($total_before_tax + $tax_amount, 2, '.', '');
            $data['order_desc'] = $order_desc;

            $net_total *= 100;

//echo gettype($net_total);
//settype($net_total, 'integer');
//echo gettype($net_total);



            $this->webdesignmodel->save_web_order();
// send message here
            $message = $this->load->view('email_templates/web/paymentemail', '', true);
//echo $message;die;
            $this->email->from(RESELLER_MAIL, 'Web Admin');
            $this->email->subject('Your Web Order Received');
            $this->email->message($message);
            $this->email->to(@$_SESSION['email']);
            $this->email->send();
            $this->email->clear();

            $message = $this->load->view('email_templates/web/order_details', '', true);
            $this->email->from(@$_SESSION['email'], 'New Customer');
            $this->email->subject('NEW WEB ORDER ARRIVED');
            $this->email->message($message);
            $this->email->to(RESELLER_MAIL);
            $this->email->send();


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
                    $email = $_SESSION['email'];
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
                        $this->webdesignmodel->update();
                        redirect('reseller_web_orders/thankyou?p=' . $amount);
                    else:
//var_dump($xmlResponse);
//$data['ActionCode'] = $xmlResponse->ActionCode;
                        $data['ResponseText'] = $xmlResponse->ResponseText;
                    endif;
//var_dump($xmlResponse->JetPayResponse);            
                }

                $this->load->view('reseller_web/orders/jetpay', $data);
            elseif (SITE_ID == 6):
                $this->load->view('reseller_web/orders/nochex', $data);
                @$_SESSION["vb"] = 1;
            endif;
        }
    }

    public function epayment() {
        if (isset($_REQUEST['web_id']) && $_REQUEST['web_id'] != '') {
            $web_id = $_REQUEST['web_id'];
            $auth = $_REQUEST['auth_code'];
            $get_row = $this->webdesignmodel->get_num_rows('web_order', array('web_id' => $web_id, 'authentication_code' => @$auth));

            //echo $get_row;
            if ($get_row > 0) {
                $unpaid_status = $this->webdesignmodel->get_num_rows('web_order', array('web_id' => $web_id, 'payment_status' => '0'));
                if ($unpaid_status > 0) {
                    $details = $this->webdesignmodel->get_row_obj('web_order', array('web_id' => $web_id));

                   $_SESSION['company_name'] = substr($details->company_name, 0, -5);
                    if (SITE_ID == '6'): $web_price = $details->priceInPound;
                    elseif (SITE_ID == '7'): $web_price = $details->priceInDollar;
                    else: $web_price = 0;
                    endif;

                    $logo_price = $details->logo_price;


                    $order_desc = $details->web_package . '(' . CURRENCY . $web_price . ')';
                    if ($logo_price) {
                        $order_desc .= ', ' . $details->logo_package . '(' . CURRENCY . $details->logo_price . ')';
                    }

                    $gross_total = $web_price + $logo_price;

                    $purchase_dis = 0;
                    //$purchase_dis_rate = $this->webdesignmodel->get_purchase_dis_rate($gross_total);
                    $purchase_dis_rate = 0;
                    if ($purchase_dis_rate > 0) {
                        $purchase_dis = round($purchase_dis_rate * $gross_total, 2);
                        $order_desc .= '<br ><span style="color:#c00"> Gross Total : ' . CURRENCY . $gross_total . '</span> <br>
                                    Purchase Discount ' . ($purchase_dis_rate * 100) . '% (' . CURRENCY . $purchase_dis . ')                                    
                                    ';
                    }
                    $total_before_promo = $gross_total - $purchase_dis;
                    $reseller_dis = 0;
                    $reseller_dis_rate = RESELLER_DISCOUNT;
                    if ($reseller_dis_rate && $details->reseller_id) {
                        $reseller_dis = round($reseller_dis_rate * $total_before_promo, 2);
                       // $order_desc .= '<br/>Reseller Discount ' . ($reseller_dis_rate * 100) . '% (' . CURRENCY . number_format($reseller_dis, 2) . ")";
                    }


                    $total_before_promo = $total_before_promo - $reseller_dis;
                    $promotional_discount = 0;
                    if (isset($_REQUEST['pcode'])):
                        $p = $this->webdesignmodel->promo($_REQUEST['pcode'], $total_before_promo, $logo_web_id);
                        $pcode = json_decode($p);
                        if ($pcode != '') {
                            $promotional_discount = $pcode->promo_dis;
                        }
                    endif;
                    if ($promotional_discount > 0) {
                        $order_desc .= ', <br > Promotional Discount (' . CURRENCY . $promotional_discount . ')';
                    }
                    $total_before_tax = $total_before_promo - $promotional_discount;
                    $tax_amount = 0;
                    $tax_rate = $this->webdesignmodel->get_tax_rate(SITE_ID);
                    if ($tax_rate) {
                        $tax_amount = $tax_rate * $total_before_tax;
                    }

                    $net_total = $total_before_tax + $tax_amount;


                    $data['gross_total_price'] = $gross_total;
                    $data['purchase_dis_rate'] = $purchase_dis_rate;
                    $data['purchase_dis'] = $purchase_dis;
                    $data['promotional_discount'] = $promotional_discount;
                    $data['tax_amount'] = $tax_amount;
                    $data['reseller_dis'] = number_format($reseller_dis, 2);
                    $data['reseller_dis_rate'] = $reseller_dis_rate;
                    $data['order_desc'] = $order_desc;
                    $data['net_total'] = $net_total;


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
                            $amount = $net_total * 100;
                            $address = $_POST['billing_address'];
                            $city = $_POST['city'];
                            $state = $_POST['state'];
                            $zip = $_POST['zip'];
                            $email = $details->email;
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
                                $this->webdesignmodel->update($logo_web_id);
                                redirect('web-site-design/webdesigner-limited-sale/orders/thankyou');
                            else:
                                var_dump($xmlResponse);
                                //$data['ActionCode'] = $xmlResponse->ActionCode;
                                $data['ResponseText'] = $xmlResponse->ResponseText;
                            endif;
                            //var_dump($xmlResponse->JetPayResponse);            
                        }
                        $this->load->view('reseller_web/orders/jetpay', $data);
                    elseif (SITE_ID == 6):
                        $this->load->view('reseller_web/orders/nochex', $data);
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

    /* public function epayment() {
      if (isset($_REQUEST['web_id']) && $_REQUEST['web_id'] != '') {
      $web_id = $_REQUEST['web_id'];
      $auth = $_REQUEST['auth_code'];
      $get_row = $this->webdesignmodel->get_num_rows('web_order', array('web_id' => $web_id, 'authentication_code' => @$auth));

      //echo $get_row;
      if ($get_row > 0) {
      $unpaid_status = $this->webdesignmodel->get_num_rows('web_order', array('web_id' => $web_id, 'payment_status' => '0'));
      if ($unpaid_status > 0) {
      $details = $this->webdesignmodel->get_row_obj('web_order', array('web_id' => $web_id));

      $_SESSION['company_name'] = $details->company_name;
      if (SITE_ID == '6'): $web_price = $details->priceInPound;
      elseif (SITE_ID == '7'): $web_price = $details->priceInDollar;
      else: $web_price = 0;
      endif;

      $logo_price = $details->logo_price;


      $order_desc = $details->web_package . '(' . CURRENCY . $web_price . ')';
      if ($logo_price) {
      $order_desc .= ', ' . $details->logo_package . '(' . CURRENCY . $details->logo_price . ')';
      }

      $gross_total = $web_price + $logo_price;

      $purchase_dis = 0;
      //$purchase_dis_rate = $this->webdesignmodel->get_purchase_dis_rate($gross_total);
      $purchase_dis_rate = 0;
      if ($purchase_dis_rate > 0) {
      $purchase_dis = round($purchase_dis_rate * $gross_total, 2);
      $order_desc .= '<br ><span style="color:#c00"> Gross Total : ' . CURRENCY . $gross_total . '</span> <br>
      Purchase Discount ' . ($purchase_dis_rate * 100) . '% (' . CURRENCY . $purchase_dis . ')
      ';
      }
      $total_before_promo = $gross_total - $purchase_dis;
      $promotional_discount = 0;
      if (isset($_REQUEST['pcode'])):
      $p = $this->webdesignmodel->promo($_REQUEST['pcode'], $total_before_promo, $logo_web_id);
      $pcode = json_decode($p);
      if ($pcode != '') {
      $promotional_discount = $pcode->promo_dis;
      }
      endif;
      if ($promotional_discount > 0) {
      $order_desc .= ', <br > Promotional Discount (' . CURRENCY . $promotional_discount . ')';
      }
      $total_before_tax = $total_before_promo - $promotional_discount;
      $tax_amount = 0;
      $tax_rate = $this->webdesignmodel->get_tax_rate(SITE_ID);
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
      $amount = $net_total * 100;
      $address = $_POST['billing_address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $email = $details->email;
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
      $this->webdesignmodel->update($logo_web_id);
      redirect('reseller_web_orders/thankyou');
      else:
      var_dump($xmlResponse);
      //$data['ActionCode'] = $xmlResponse->ActionCode;
      $data['ResponseText'] = $xmlResponse->ResponseText;
      endif;
      //var_dump($xmlResponse->JetPayResponse);
      }
      endif;


      $this->load->view('web/orders/jetpay', $data);
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
      } */

// for autosaving data typed by user
    public function autosave() {
        if (isset($_POST)) {
            foreach ($_POST as $k => $v) {
                $_SESSION[$k] = $v;
            }
        }
    }

    public function thankyou() {
        session_destroy();
        $this->load->view('reseller_web/orders/thankyou');
    }

}
