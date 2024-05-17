<?php
class Logodesignmodel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
    }

    function save_logo_order_old() {
        $tax_rate = $this->get_tax_rate(SITE_ID);
        if (!isset($_SESSION['auth_code'])) {
            $_SESSION['auth_code'] = $this->get_auth_code();
        }
        $fname = str_replace("'", " ", stripslashes(@$_SESSION['fname']));
        $lname = str_replace("'", " ", stripslashes(@$_SESSION['lname']));
        $company_name = str_replace("'", " ", stripslashes(@$_SESSION['company_name']));
        if (isset($_SESSION['reseller_id'])) {
            $company_name .= ' - (R)';
        }
        $phone_no = str_replace("'", " ", stripslashes(@$_SESSION['phone_no']));
        $email_id = str_replace("'", " ", stripslashes(@$_SESSION['email_id']));
        $email_id = trim($email_id);
        $cmp_logo_name = stripslashes(@$_SESSION['cmp_logo_name']);
        $tagline = stripslashes(@$_SESSION['tagline']);
        $business_detail = str_replace("'", " ", stripslashes(@$_SESSION['business_detail']));

        $m5_colors = @$_SESSION['m5_colors'];
        $colors = str_replace("'", " ", stripslashes(@$_SESSION['colors']));
        $m5_no_colors = @$_SESSION['m5_no_colors'];
        $no_colors = str_replace("'", " ", stripslashes(@$_SESSION['no_colors']));

        $idea_of_clint = str_replace("'", " ", stripslashes(@$_SESSION['idea_of_clint']));
        $contact_details = str_replace("'", " ", stripslashes(@$_SESSION['contact_details']));

        $web = (isset($_SESSION['web_price'])) ? $_SESSION['web_price'] : "0"; // This Session Contain the amount value of Web Package From Logo Order 
        $brouchure = (isset($_SESSION['brouchure'])) ? $_SESSION['brouchure'] : "0"; // This Session Contain the amount value of Brouchure Package From Logo Order            
        $options_price = (isset($_SESSION['options_price'])) ? $_SESSION['options_price'] : "0"; // First 3 option value(amount) in orderone page this value is not from order page

        $web_gold = (isset($_SESSION['web_package'])) ? $_SESSION['web_package'] : "";
        $web_elite = (isset($_SESSION['brouchure_package'])) ? $_SESSION['brouchure_package'] : ""; // this is not a web package, this is brouchure package and naming is also same in database i.e. web_elite field is used in database too            
        $package = @$_SESSION['logo_package'];
        $dollar = 0;   // currently not using in ldg sites but this is the logo package price converted into dollar amount of UK site 
        $price = $_SESSION['logo_price'];
        $file = @$_SESSION['fileList'];
        $site_id = SITE_ID;
        $submit_date = date("Y-m-d H:i:s", mktime(gmdate("H") + 5, gmdate("i") + 45, gmdate("s"), gmdate("m"), gmdate("d"), gmdate("Y")));
        $ip = $_SERVER['REMOTE_ADDR'];

        // payment link for payment email and automated email
        $p_info = '';
        if (isset($_SESSION['pcode'])):
            $p_info = '&amp;pcode=' . $_SESSION['pcode'];
        endif;
        if (isset($_SESSION['logo_web_id']) && !isset($_SESSION['reseller_id'])):
            $_SESSION['payment_link'] = base_url() . 'orders/epayment.php?logo_web_id=' . $_SESSION['logo_web_id'] . '&amp;auth_code=' . $_SESSION['auth_code'] . $p_info;
        endif;
        // Ends payment link for payment email and automated email

        if (isset($_SESSION['logo_web_id']) && isset($_SESSION['reseller_id'])) {
            // $this->reseller_id = $_SESSION['reseller_id'];
            $reseller_id = $_SESSION['reseller_id'];
            $_SESSION['payment_link'] = base_url() . 'reseller_orders/epayment.php?logo_web_id=' . $_SESSION['logo_web_id'] . '&amp;auth_code=' . $_SESSION['auth_code'] . $p_info;
        }

        if ($_SESSION['fname'] == '0' || $_SESSION['company_name'] == '0')
            die();
        else {
             $browser_details = '('.$this->agent->platform().')('.$this->agent->browser().')('.$this->agent->version().')('.$this->agent->mobile().')('.$this->agent->robot().')';
            $insert_array = array(
                'fname' => $fname,
                'lname' => $lname,
                'company_name' => $company_name,
                'phone_no' => $phone_no,
                'email_id' => $email_id,
                'se_email_id' => '',
                'cmp_logo_name' => $cmp_logo_name,
                'tagline' => $tagline,
                'business_detail' => $business_detail,
                'm5_colors' => $m5_colors,
                'colors' => $colors,
                'm5_no_colors' => $m5_no_colors,
                'no_colors' => $no_colors,
                'idea_of_clint' => $idea_of_clint,
                'contact_details' => $contact_details,
                'web' => $web,
                'brouchure' => $brouchure,
                'options' => $options_price,
                'web_gold' => @$web_gold,
                'web_elite' => @$web_elite,
                'package' => $package,
                'dollar' => $dollar,
                'price' => $price,
                'files' => $file,
                'site_id' => $site_id,
                'submit_date' => $submit_date,
                'ip' => $ip,
                'service_type' => 'include 6 Hr',
                'browser_details' => $browser_details,
                'authentication_code' => $_SESSION['auth_code']
            );

            if (isset($_SESSION['reseller_id'])):
                $insert_array['reseller_id'] = $_SESSION['reseller_id'];
            endif;
            if (isset($_SESSION['payment_link'])):
                $insert_array['payment_link'] = $_SESSION['payment_link'];
            endif;

            // Insert/Update on logo web - updating logo web if modification made by back next on the order
            if (isset($_SESSION['logo_web_id']) && $_SESSION['logo_web_id'] != '') {
                $this->db->update('logo_web', $insert_array, array("logo_web_id" => $_SESSION['logo_web_id']));
            } else {
                $this->db->insert('logo_web', $insert_array);
                $_SESSION['logo_web_id'] = $this->db->insert_id();
            }
            // End Insert/Update on logo web
            // Start insert/update Extra1 option in order_extra table and total price calc
            $data1 = array(
                "email" => $email_id,
                "submit_date" => $submit_date,
                "ip" => $ip,
                "site_id" => SITE_ID,
                "payment" => '0',
                "status_insert" => '0',
                "logo_web_id" => $_SESSION['logo_web_id']
            );
            // Starts Adding total in logo_web_total table for logo order (Excluding web order)        
            $gross_total_price = $price; //price of logo package
            // Web package
            if (isset($_SESSION['web_package']))
                $gross_total_price += $web;
            // brochure package
            if (isset($_SESSION['brouchure_package']))
                $gross_total_price += $brouchure;
            // Option one
            if (isset($_SESSION['options']) && $_SESSION['options'] != '') {
                $data1["blackn24"] = $_SESSION['options'];
                $gross_total_price += $_SESSION['options_price'];
            } else {
                $data1["blackn24"] = '';
            }


            // Extra 2 page variables
            if ((isset($_SESSION['options1']) && $_SESSION['options1'] != '')) {
                $data1["extra_logo"] = $_SESSION['options1'];
                $data1["price_extra_logo"] = $_SESSION['options1_price'];
                $gross_total_price += $_SESSION['options1_price'];
            } else {
                $data1["extra_logo"] = '';
                $data1["price_extra_logo"] = "";
            }
            if ((isset($_SESSION['options2']) && $_SESSION['options2'] != '')) {
                $data1["logoby_designer"] = $_SESSION['options2'];
                $data1["price_logoby_designer"] = $_SESSION['options2_price'];
                $gross_total_price += $_SESSION['options2_price'];
            } else {
                $data1["logoby_designer"] = '';
                $data1["price_logoby_designer"] = "";
            }
            if ((isset($_SESSION['options3']) && $_SESSION['options3'] != '')) {
                $data1["order_lifetime"] = $_SESSION['options3'];
                $data1["price_order_lifetime"] = $_SESSION['options3_price'];
                $gross_total_price += $_SESSION['options3_price'];
            } else {
                $data1["order_lifetime"] = '';
                $data1["price_order_lifetime"] = "";
            }
            if ((isset($_SESSION['options4']) && $_SESSION['options4'] != '')) {
                $data1["order_flas"] = $_SESSION['options4'];
                $data1["price_order_flas"] = $_SESSION['options4_price'];
                $gross_total_price += $_SESSION['options4_price'];
            } else {
                $data1["order_flas"] = '';
                $data1["price_order_flas"] = "";
            }
            if ((isset($_SESSION['options5']) && $_SESSION['options5'] != '')) {
                $data1["logo_24hr"] = $_SESSION['options5'];
                $data1["price_logo_24hr"] = $_SESSION['options5_price'];
                $gross_total_price += $_SESSION['options5_price'];
            } else {
                $data1["logo_24hr"] = '';
                $data1["price_logo_24hr"] = "";
            }
            if ((isset($_SESSION['options6']) && $_SESSION['options6'] != '')) {
                $data1["black_white"] = $_SESSION['options6'];
                $data1["price_black_white"] = $_SESSION['options6_price'];
                $gross_total_price += $_SESSION['options6_price'];
            } else {
                $data1["black_white"] = '';
                $data1["price_black_white"] = "";
            }
            if ((isset($_SESSION['options7']) && $_SESSION['options7'] != '')) {
                $data1["business_card"] = $_SESSION['options7'];
                $data1["price_business_card"] = $_SESSION['options7_price'];
                $gross_total_price += $_SESSION['options7_price'];
            } else {
                $data1["business_card"] = '';
                $data1["price_business_card"] = "";
            }
            if ((isset($_SESSION['options8']) && $_SESSION['options8'] != '')) {
                $data1["order_letter"] = $_SESSION['options8'];
                $data1["price_order_letter"] = $_SESSION['options8_price'];
                $gross_total_price += $_SESSION['options8_price'];
            } else {
                $data1["order_letter"] = '';
                $data1["price_order_letter"] = '';
            }
            if ((isset($_SESSION['options9']) && $_SESSION['options9'] != '')) {
                $data1["order_envelop"] = $_SESSION['options9'];
                $data1["price_order_envelop"] = $_SESSION['options9_price'];
                $gross_total_price += $_SESSION['options9_price'];
            } else {
                $data1["order_envelop"] = '';
                $data1["price_order_envelop"] = '';
            }
            if ((isset($_SESSION['options10']) && $_SESSION['options10'] != '')) {
                $data1["order_complement"] = $_SESSION['options10'];
                $data1["price_order_complement"] = $_SESSION['options10_price'];
                $gross_total_price += $_SESSION['options10_price'];
            } else {
                $data1["order_complement"] = '';
                $data1["price_order_complement"] = "";
            }
            if ((isset($_SESSION['options11']) && $_SESSION['options11'] != '')) {
                $data1["order_stationary"] = $_SESSION['options11'];
                $data1["price_order_stationary"] = $_SESSION['options11_price'];
                $gross_total_price += $_SESSION['options11_price'];
            } else {
                $data1["order_stationary"] = '';
                $data1["price_order_stationary"] = "";
            }
            if ((isset($_SESSION['options12']) && $_SESSION['options12'] != '')) {
                $data1["order_business"] = $_SESSION['options12'];
                $data1["price_order_business"] = $_SESSION['options12_price'];
                $gross_total_price += $_SESSION['options12_price'];
            } else {
                $data1["order_business"] = '';
                $data1["price_order_business"] = "";
            }
            if ((isset($_SESSION['options13']) && $_SESSION['options13'] != '')) {
                $data1["order_letter_print"] = $_SESSION['options13'];
                $data1["price_order_letter_print"] = $_SESSION['options13_price'];
                $gross_total_price += $_SESSION['options13_price'];
            } else {
                $data1["order_letter_print"] = '';
                $data1["price_order_letter_print"] = "";
            }
            if ((isset($_SESSION['options14']) && $_SESSION['options14'] != '')) {
                $data1["order_envelop_print"] = $_SESSION['options14'];
                $data1["price_order_envelop_print"] = $_SESSION['options14_price'];
                $gross_total_price += $_SESSION['options14_price'];
            } else {
                $data1["order_envelop_print"] = '';
                $data1["price_order_envelop_print"] = "";
            }
            if ((isset($_SESSION['options15']) && $_SESSION['options15'] != '')) {
                $data1["order_complement_print"] = $_SESSION['options15'];
                $data1["price_order_complement_print"] = $_SESSION['options15_price'];
                $gross_total_price += $_SESSION['options15_price'];
            } else {
                $data1["order_complement_print"] = '';
                $data1["price_order_complement_print"] = "";
            }
            if ((isset($_SESSION['options16']) && $_SESSION['options16'] != '')) {
                $data1["order_mouse"] = $_SESSION['options16'];
                $data1["price_order_mouse"] = $_SESSION['options16_price'];
                $gross_total_price += $_SESSION['options16_price'];
            } else {
                $data1["order_mouse"] = '';
                $data1["price_order_mouse"] = "";
            }
            if ((isset($_SESSION['options17']) && $_SESSION['options17'] != '')) {
                $data1["order_cap"] = $_SESSION['options17'];
                $data1["price_order_cap"] = $_SESSION['options17_price'];
                $gross_total_price += $_SESSION['options17_price'];
            } else {
                $data1["order_cap"] = '';
                $data1["price_order_cap"] = "";
            }
            if ((isset($_SESSION['options18']) && $_SESSION['options18'] != '')) {
                $data1["order_pens"] = $_SESSION['options18'];
                $data1["price_order_pens"] = $_SESSION['options18_price'];
                $gross_total_price += $_SESSION['options18_price'];
            } else {
                $data1["order_pens"] = '';
                $data1["price_order_pens"] = "";
            }
            if ((isset($_SESSION['options19']) && $_SESSION['options19'] != '')) {
                $data1["order_cotton"] = $_SESSION['options19'];
                $data1["price_order_cotton"] = $_SESSION['options19_price'];
                $gross_total_price += $_SESSION['options19_price'];
            } else {
                $data1["order_cotton"] = '';
                $data1["price_order_cotton"] = "";
            }
            if ((isset($_SESSION['options20']) && $_SESSION['options20'] != '')) {
                $data1["order_tshirt"] = $_SESSION['options20'];
                $data1["price_order_tshirt"] = $_SESSION['options20_price'];
                $gross_total_price += $_SESSION['options20_price'];
            } else {
                $data1["order_tshirt"] = '';
                $data1["price_order_tshirt"] = "";
            }


            if (isset($_SESSION['insert_extra'])) {
                $this->db->update('order_extra', $data1, array("extra_id" => $_SESSION['insert_extra']));
            } else {
                $this->db->insert('order_extra', $data1);
                $_SESSION['insert_extra'] = $this->db->insert_id();
            }
            // Ends insert/update Extra1 option             
            //getting purchase discount rate of all package including web package
            $purchase_dis_rate = $this->get_purchase_dis_rate($gross_total_price);

            $promo_logo = 0;
            $promo_web = 0;
            $pc_id = 0;
            if (isset($_SESSION['pcode'])):
                $p = $this->promo($_SESSION['pcode']);
                $pcode = json_decode($p);
                $promo_dis = $pcode->promo_dis;
                $promo_logo = number_format(($promo_dis / $gross_total_price) * ($gross_total_price - $web), 2, '.', '');
                $promo_web = number_format(($promo_dis / $gross_total_price) * ($web), 2, '.', '');
                $pc_id = $pcode->pc_id;
            endif;

            $gross_total_price -= $web;    // deducting web package to store price for logo        
            $purchase_discount = number_format(($gross_total_price * $purchase_dis_rate), 2, '.', '');
            $total_before_dis = number_format(($gross_total_price - $purchase_discount), 2, '.', '');


            $before_tax = $total_before_dis - $promo_logo;
            $tax = number_format($before_tax * $tax_rate, 2, ".", "");
            $net_total = $before_tax + $tax;


            $totalData = array(
                "submit_date" => $submit_date,
                "logo_web_id" => $_SESSION['logo_web_id'],
                "web_id" => 0,
                "site_id" => SITE_ID,
                "promotional_id" => $pc_id,
                "currency" => CURRENCY,
                "sub_total" => $gross_total_price,
                "purchase_discount" => $purchase_discount,
                "sub_total_before_discount" => $total_before_dis,
                "discount_amount" => $promo_logo,
                "sub_total_before_tax" => $before_tax,
                "tax_amount" => $tax,
                "net_total" => $net_total
            );
            if (isset($_SESSION['total_id_logo'])) {
                $this->db->update('logo_web_total', $totalData, array("id" => $_SESSION['total_id_logo']));
            } else {
                $this->db->insert('logo_web_total', $totalData);
                $_SESSION['total_id_logo'] = $this->db->insert_id();
            }

            // if web package selected
            if (isset($_SESSION['web_package'])):
                // inserting web package in web_order
                $search = array('6', '7');
                $replace = array('LDG.UK', 'LDG.COM');
                $site = str_replace($search, $replace, SITE_ID);

                if ($_SESSION['web_package'] == BUDGET_WP) {
                    $page_no = 1;
                } elseif ($_SESSION['web_package'] == GOLD_WP) {
                    $page_no = 6;
                } elseif ($_SESSION['web_package'] == ELITE_WP) {
                    $page_no = 12;
                } else {
                    $page_no = 0;
                }

                $priceInPound = round(($web * CONVERSION_MULTIPLYER), 2);
                $priceInDollar = round(($web * CONVERSION_MULTIPLYER2), 2);

                $web_data = array('company_name' => $company_name, 'contact_info' => ($fname . ' ' . $lname), 'email' => $email_id, 'contact_phone' => $phone_no, 'best_time' => '', 'domain_name' => '', 'web_idea' => '', 'comment' => '', 'site' => $site, 'pageno' => $page_no, 'ip' => $ip, 'logo_price' => $price, 'logo_package' => $package, 'priceInPound' => $priceInPound, 'priceInDollar' => $priceInDollar, 'order_date' => $submit_date, 'payment_status' => '0', 'submit_date' => $submit_date, 'web_package' => $_SESSION['web_package'], 'logo_web_id' => $_SESSION['logo_web_id'], 'authentication_code' => '', 'payment_link' => '');

                //update/insert into web_order table select form logo order
                if (isset($_SESSION['web_id'])) {
                    $this->db->update('web_order', $web_data, array('web_id' => $_SESSION['web_id']));
                } else {
                    $this->db->insert('web_order', $web_data);
                    $_SESSION['web_id'] = $this->db->insert_id();
                    $this->db->update('logo_web', array('web_id' => $_SESSION['web_id']), array('logo_web_id' => $_SESSION['logo_web_id']));
                }

                $gross_total_price = $web;
                $purchase_discount = number_format(($gross_total_price * $purchase_dis_rate), 2, '.', '');
                $total_before_dis = $gross_total_price - $purchase_discount;
                $before_tax = $total_before_dis - $promo_web;
                $tax = number_format($before_tax * $tax_rate, 2, ".", "");
                $net_total = $before_tax - $tax;


                $totalData = array(
                    "submit_date" => $submit_date,
                    "logo_web_id" => 0,
                    "web_id" => $_SESSION['web_id'],
                    "site_id" => SITE_ID,
                    "promotional_id" => '',
                    "currency" => CURRENCY,
                    "sub_total" => $gross_total_price,
                    "purchase_discount" => $purchase_discount,
                    "sub_total_before_discount" => $before_tax,
                    "discount_amount" => $promo_web,
                    "sub_total_before_tax" => $before_tax,
                    "tax_amount" => $tax,
                    "net_total" => $net_total
                );
                if (isset($_SESSION['total_id_web'])) {
                    $this->db->update('logo_web_total', $totalData, array("id" => $_SESSION['total_id_web']));
                } else {
                    $this->db->insert('logo_web_total', $totalData);
                    $_SESSION['total_id_web'] = $this->db->insert_id();
                }
            else:
                if (isset($_SESSION['web_id'])) {
                    $this->db->delete('web_order', array('web_id' => $_SESSION['web_id']));
                    $this->db->delete('logo_web_total', array('id' => $_SESSION['total_id_web']));
                    $this->db->update('logo_web', array('web_id' => 0), array('logo_web_id' => $_SESSION['logo_web_id']));
                    unset($_SESSION['web_id'], $_SESSION['total_id_web']);
                }
            endif;
        }
    }

    function save_logo_order() {
        $tax_rate = $this->get_tax_rate(SITE_ID);
        if (!isset($_SESSION['auth_code'])) {
            $_SESSION['auth_code'] = $this->get_auth_code();
        }
        $fname = str_replace("'", " ", stripslashes(@$_SESSION['fname']));
        $lname = str_replace("'", " ", stripslashes(@$_SESSION['lname']));
        $company_name = str_replace("'", " ", stripslashes(@$_SESSION['company_name']));
        if (isset($_SESSION['reseller_id'])) {
            $company_name .= ' - (R)';
        }
        $phone_no = str_replace("'", " ", stripslashes(@$_SESSION['phone_no']));
        $email_id = str_replace("'", " ", stripslashes(@$_SESSION['email_id']));
        $email_id = trim($email_id);
        $cmp_logo_name = stripslashes(@$_SESSION['cmp_logo_name']);
        $tagline = stripslashes(@$_SESSION['tagline']);
        $business_detail = str_replace("'", " ", stripslashes(@$_SESSION['business_detail']));

        $m5_colors = @$_SESSION['m5_colors'];
        $colors = str_replace("'", " ", stripslashes(@$_SESSION['colors']));
        $m5_no_colors = @$_SESSION['m5_no_colors'];
        $no_colors = str_replace("'", " ", stripslashes(@$_SESSION['no_colors']));

        $idea_of_clint = str_replace("'", " ", stripslashes(@$_SESSION['idea_of_clint']));
        $contact_details = str_replace("'", " ", stripslashes(@$_SESSION['contact_details']));

        $web = (isset($_SESSION['web_price'])) ? $_SESSION['web_price'] : "0"; // This Session Contain the amount value of Web Package From Logo Order 
        $brouchure = (isset($_SESSION['brouchure'])) ? $_SESSION['brouchure'] : "0"; // This Session Contain the amount value of Brouchure Package From Logo Order            
        $options_price = (isset($_SESSION['poptions_price' . $_SESSION['p_index']])) ? $_SESSION['options_price'] : "0"; // First 3 option value(amount) in orderone page this value is not from order page
        //$options_price = (isset($_SESSION['options_price'])) ? $_SESSION['options_price'] : "0"; // First 3 option value(amount) in orderone page this value is not from order page

        $web_gold = (isset($_SESSION['web_package'])) ? $_SESSION['web_package'] : "";
        $web_elite = (isset($_SESSION['brouchure_package'])) ? $_SESSION['brouchure_package'] : ""; // this is not a web package, this is brouchure package and naming is also same in database i.e. web_elite field is used in database too            
        $package = @$_SESSION['logo_package'];
        $dollar = 0;   // currently not using in ldg sites but this is the logo package price converted into dollar amount of UK site 
        $price = $_SESSION['logo_price'];
        // for( $sa=0; $sa<count($_FILES['attachment']['name']); $sa++){
        //     echo $_FILES['attachment']['name'][$sa];
        //     echo $_FILES['attachment']['tmp_name'][$sa];
        // }
        // die;
// echo "<pre>"; print_r($_FILES);print_r($_SESSION); die;
        if (isset($_SESSION['fileList']) && $_SESSION['fileList']) {
            $fil = $_SESSION['fileList'];
        } else {
            // echo "<pre>"; print_r($_FILES);
            // echo count($_FILES['attachment']['name']);
            $fil = '';
            $nows = date('ymdhis') . '_';
            if (isset($_FILES['attachment']['name'][0]) && $_FILES['attachment']['name'][0] != '') {
                for ($sa = 0; $sa < count($_FILES['attachment']['name']); $sa++) {
//echo $sa."<br/>";
                    $filesss = $_SERVER['DOCUMENT_ROOT'] . '/web_images/' . $nows . $_FILES['attachment']['name'][$sa];
                     move_uploaded_file($_FILES['attachment']['tmp_name'][$sa], $filesss);
                    $fil = $fil . ':' . $nows . $_FILES['attachment']['name'][$sa];
                }

                $fil = substr($fil, 1);
                 if(isset($_SESSION['filewithoutflash'])){
                    if($_SESSION['filewithoutflash'] != ''){

                            $fil=$_SESSION['filewithoutflash'].':'.$fil;
                    }
                 }
            }

            else{
                if(isset($_SESSION['filewithoutflash'])){
                    $fil=$_SESSION['filewithoutflash'];
                 }
                 //$fil = substr($fil, 1);

            }

             $_SESSION['filewithoutflash']=$fil;
        }

        $file = $fil;
        $site_id = SITE_ID;
        $submit_date = date("Y-m-d H:i:s", mktime(gmdate("H") + 5, gmdate("i") + 45, gmdate("s"), gmdate("m"), gmdate("d"), gmdate("Y")));
        $ip = $_SERVER['REMOTE_ADDR'];

        // payment link for payment email and automated email
        $p_info = '';
        if (isset($_SESSION['pcode'])):
            $p_info = '&amp;pcode=' . $_SESSION['pcode'];
        endif;
        if (isset($_SESSION['logo_web_id']) && !isset($_SESSION['reseller_id'])):
            $_SESSION['payment_link'] = base_url() . 'orders/epayment.php?logo_web_id=' . $_SESSION['logo_web_id'] . '&amp;auth_code=' . $_SESSION['auth_code'] . $p_info;
        endif;
        // Ends payment link for payment email and automated email

        if (isset($_SESSION['logo_web_id']) && isset($_SESSION['reseller_id'])) {
            // $this->reseller_id = $_SESSION['reseller_id'];
            $reseller_id = $_SESSION['reseller_id'];
            $_SESSION['payment_link'] = base_url() . 'reseller_orders/epayment.php?logo_web_id=' . $_SESSION['logo_web_id'] . '&amp;auth_code=' . $_SESSION['auth_code'] . $p_info;
        }

        if ($_SESSION['fname'] == '0' || $_SESSION['company_name'] == '0')
            die();
        else {
            $browser_details = '('.$this->agent->platform().')('.$this->agent->browser().')('.$this->agent->version().')('.$this->agent->mobile().')';
            $insert_array = array(
                'fname' => $fname,
                'lname' => $lname,
                'company_name' => $company_name,
                'phone_no' => $phone_no,
                'email_id' => $email_id,
                'se_email_id' => '',
                'cmp_logo_name' => $cmp_logo_name,
                'tagline' => $tagline,
                'business_detail' => $business_detail,
                'm5_colors' => $m5_colors,
                'colors' => $colors,
                'm5_no_colors' => $m5_no_colors,
                'no_colors' => $no_colors,
                'idea_of_clint' => $idea_of_clint,
                'contact_details' => $contact_details,
                'web' => $web,
                'brouchure' => $brouchure,
                'options' => $options_price,
                'web_gold' => @$web_gold,
                'web_elite' => @$web_elite,
                'package' => $package,
                'dollar' => $dollar,
                'price' => $price,
                'files' => $file,
                'site_id' => $site_id,
                'submit_date' => $submit_date,
                'ip' => $ip,
                'service_type' => 'include 6 Hr',
                'browser_details' => $browser_details,
                'authentication_code' => $_SESSION['auth_code']
            );

            if (isset($_SESSION['reseller_id'])):
                $insert_array['reseller_id'] = $_SESSION['reseller_id'];
            endif;
            if (isset($_SESSION['payment_link'])):
                $insert_array['payment_link'] = $_SESSION['payment_link'];
            endif;

            // Insert/Update on logo web - updating logo web if modification made by back next on the order
            if (isset($_SESSION['logo_web_id']) && $_SESSION['logo_web_id'] != '') {
                $this->db->update('logo_web', $insert_array, array("logo_web_id" => $_SESSION['logo_web_id']));
            } else {
                $this->db->insert('logo_web', $insert_array);
                $_SESSION['logo_web_id'] = $this->db->insert_id();
            }
            // End Insert/Update on logo web
            // Start insert/update Extra1 option in order_extra table and total price calc
            $data1 = array(
                "email" => $email_id,
                "submit_date" => $submit_date,
                "ip" => $ip,
                "site_id" => SITE_ID,
                "payment" => '0',
                "status_insert" => '0',
                "logo_web_id" => $_SESSION['logo_web_id']
            );
            // Starts Adding total in logo_web_total table for logo order (Excluding web order)        
            $gross_total_price = $price; //price of logo package
            // Web package
            if (isset($_SESSION['web_package']))
                $gross_total_price += $web;
            // brochure package
            if (isset($_SESSION['brouchure_package']))
                $gross_total_price += $brouchure;
            // Option one
            // if (isset($_SESSION['options']) && $_SESSION['options'] != '') {
            if (isset($_SESSION['poptions_pack' . $_SESSION['p_index']])) {
                $data1["blackn24"] = $_SESSION['options'];
                $gross_total_price += $_SESSION['options_price'];
            } else {
                $data1["blackn24"] = '';
                //$_SESSION['options_price']='';
                // $gross_total_price += $_SESSION['options_price'];
            }


            // Extra 2 page variables
            if ((isset($_SESSION['options1']) && $_SESSION['options1'] != '')) {
                $data1["extra_logo"] = $_SESSION['options1'];
                $data1["price_extra_logo"] = $_SESSION['options1_price'];
                $gross_total_price += $_SESSION['options1_price'];
            } else {
                $data1["extra_logo"] = '';
                $data1["price_extra_logo"] = "";
            }
            if ((isset($_SESSION['options2']) && $_SESSION['options2'] != '')) {
                $data1["logoby_designer"] = $_SESSION['options2'];
                $data1["price_logoby_designer"] = $_SESSION['options2_price'];
                $gross_total_price += $_SESSION['options2_price'];
            } else {
                $data1["logoby_designer"] = '';
                $data1["price_logoby_designer"] = "";
            }
            if ((isset($_SESSION['options3']) && $_SESSION['options3'] != '')) {
                $data1["order_lifetime"] = $_SESSION['options3'];
                $data1["price_order_lifetime"] = $_SESSION['options3_price'];
                $gross_total_price += $_SESSION['options3_price'];
            } else {
                $data1["order_lifetime"] = '';
                $data1["price_order_lifetime"] = "";
            }
            if ((isset($_SESSION['options4']) && $_SESSION['options4'] != '')) {
                $data1["order_flas"] = $_SESSION['options4'];
                $data1["price_order_flas"] = $_SESSION['options4_price'];
                $gross_total_price += $_SESSION['options4_price'];
            } else {
                $data1["order_flas"] = '';
                $data1["price_order_flas"] = "";
            }
            if ((isset($_SESSION['options5']) && $_SESSION['options5'] != '')) {
                $data1["logo_24hr"] = $_SESSION['options5'];
                $data1["price_logo_24hr"] = $_SESSION['options5_price'];
                $gross_total_price += $_SESSION['options5_price'];
            } else {
                $data1["logo_24hr"] = '';
                $data1["price_logo_24hr"] = "";
            }
            if ((isset($_SESSION['options6']) && $_SESSION['options6'] != '')) {
                $data1["black_white"] = $_SESSION['options6'];
                $data1["price_black_white"] = $_SESSION['options6_price'];
                $gross_total_price += $_SESSION['options6_price'];
            } else {
                $data1["black_white"] = '';
                $data1["price_black_white"] = "";
            }
            if ((isset($_SESSION['options7']) && $_SESSION['options7'] != '')) {
                $data1["business_card"] = $_SESSION['options7'];
                $data1["price_business_card"] = $_SESSION['options7_price'];
                $gross_total_price += $_SESSION['options7_price'];
            } else {
                $data1["business_card"] = '';
                $data1["price_business_card"] = "";
            }
            if ((isset($_SESSION['options8']) && $_SESSION['options8'] != '')) {
                $data1["order_letter"] = $_SESSION['options8'];
                $data1["price_order_letter"] = $_SESSION['options8_price'];
                $gross_total_price += $_SESSION['options8_price'];
            } else {
                $data1["order_letter"] = '';
                $data1["price_order_letter"] = '';
            }
            if ((isset($_SESSION['options9']) && $_SESSION['options9'] != '')) {
                $data1["order_envelop"] = $_SESSION['options9'];
                $data1["price_order_envelop"] = $_SESSION['options9_price'];
                $gross_total_price += $_SESSION['options9_price'];
            } else {
                $data1["order_envelop"] = '';
                $data1["price_order_envelop"] = '';
            }
            if ((isset($_SESSION['options10']) && $_SESSION['options10'] != '')) {
                $data1["order_complement"] = $_SESSION['options10'];
                $data1["price_order_complement"] = $_SESSION['options10_price'];
                $gross_total_price += $_SESSION['options10_price'];
            } else {
                $data1["order_complement"] = '';
                $data1["price_order_complement"] = "";
            }
            if ((isset($_SESSION['options11']) && $_SESSION['options11'] != '')) {
                $data1["order_stationary"] = $_SESSION['options11'];
                $data1["price_order_stationary"] = $_SESSION['options11_price'];
                $gross_total_price += $_SESSION['options11_price'];
            } else {
                $data1["order_stationary"] = '';
                $data1["price_order_stationary"] = "";
            }
            if ((isset($_SESSION['options12']) && $_SESSION['options12'] != '')) {
                $data1["order_business"] = $_SESSION['options12'];
                $data1["price_order_business"] = $_SESSION['options12_price'];
                $gross_total_price += $_SESSION['options12_price'];
            } else {
                $data1["order_business"] = '';
                $data1["price_order_business"] = "";
            }
            if ((isset($_SESSION['options13']) && $_SESSION['options13'] != '')) {
                $data1["order_letter_print"] = $_SESSION['options13'];
                $data1["price_order_letter_print"] = $_SESSION['options13_price'];
                $gross_total_price += $_SESSION['options13_price'];
            } else {
                $data1["order_letter_print"] = '';
                $data1["price_order_letter_print"] = "";
            }
            if ((isset($_SESSION['options14']) && $_SESSION['options14'] != '')) {
                $data1["order_envelop_print"] = $_SESSION['options14'];
                $data1["price_order_envelop_print"] = $_SESSION['options14_price'];
                $gross_total_price += $_SESSION['options14_price'];
            } else {
                $data1["order_envelop_print"] = '';
                $data1["price_order_envelop_print"] = "";
            }
            if ((isset($_SESSION['options15']) && $_SESSION['options15'] != '')) {
                $data1["order_complement_print"] = $_SESSION['options15'];
                $data1["price_order_complement_print"] = $_SESSION['options15_price'];
                $gross_total_price += $_SESSION['options15_price'];
            } else {
                $data1["order_complement_print"] = '';
                $data1["price_order_complement_print"] = "";
            }
            if ((isset($_SESSION['options16']) && $_SESSION['options16'] != '')) {
                $data1["order_mouse"] = $_SESSION['options16'];
                $data1["price_order_mouse"] = $_SESSION['options16_price'];
                $gross_total_price += $_SESSION['options16_price'];
            } else {
                $data1["order_mouse"] = '';
                $data1["price_order_mouse"] = "";
            }
            if ((isset($_SESSION['options17']) && $_SESSION['options17'] != '')) {
                $data1["order_cap"] = $_SESSION['options17'];
                $data1["price_order_cap"] = $_SESSION['options17_price'];
                $gross_total_price += $_SESSION['options17_price'];
            } else {
                $data1["order_cap"] = '';
                $data1["price_order_cap"] = "";
            }
            if ((isset($_SESSION['options18']) && $_SESSION['options18'] != '')) {
                $data1["order_pens"] = $_SESSION['options18'];
                $data1["price_order_pens"] = $_SESSION['options18_price'];
                $gross_total_price += $_SESSION['options18_price'];
            } else {
                $data1["order_pens"] = '';
                $data1["price_order_pens"] = "";
            }
            if ((isset($_SESSION['options19']) && $_SESSION['options19'] != '')) {
                $data1["order_cotton"] = $_SESSION['options19'];
                $data1["price_order_cotton"] = $_SESSION['options19_price'];
                $gross_total_price += $_SESSION['options19_price'];
            } else {
                $data1["order_cotton"] = '';
                $data1["price_order_cotton"] = "";
            }
            if ((isset($_SESSION['options20']) && $_SESSION['options20'] != '')) {
                $data1["order_tshirt"] = $_SESSION['options20'];
                $data1["price_order_tshirt"] = $_SESSION['options20_price'];
                $gross_total_price += $_SESSION['options20_price'];
            } else {
                $data1["order_tshirt"] = '';
                $data1["price_order_tshirt"] = "";
            }


            if (isset($_SESSION['insert_extra'])) {
                $this->db->update('order_extra', $data1, array("extra_id" => $_SESSION['insert_extra']));
            } else {
                $this->db->insert('order_extra', $data1);
                $_SESSION['insert_extra'] = $this->db->insert_id();
            }
            // Ends insert/update Extra1 option             
            //getting purchase discount rate of all package including web package
            $purchase_dis_rate = $this->get_purchase_dis_rate($gross_total_price);

            $promo_logo = 0;
            $promo_web = 0;
            $pc_id = 0;
            if (isset($_SESSION['pcode'])):
                $p = $this->promo($_SESSION['pcode']);
                $pcode = json_decode($p);
                $promo_dis = $pcode->promo_dis;
                $promo_logo = number_format(($promo_dis / $gross_total_price) * ($gross_total_price - $web), 2, '.', '');
                $promo_web = number_format(($promo_dis / $gross_total_price) * ($web), 2, '.', '');
                $pc_id = $pcode->pc_id;
            endif;

            $gross_total_price -= $web;    // deducting web package to store price for logo        
            $purchase_discount = number_format(($gross_total_price * $purchase_dis_rate), 2, '.', '');
            $total_before_dis = number_format(($gross_total_price - $purchase_discount), 2, '.', '');


            $before_tax = $total_before_dis - $promo_logo;
            $tax = number_format($before_tax * $tax_rate, 2, ".", "");
            $net_total = $before_tax + $tax;


            $totalData = array(
                "submit_date" => $submit_date,
                "logo_web_id" => $_SESSION['logo_web_id'],
                "web_id" => 0,
                "site_id" => SITE_ID,
                "promotional_id" => $pc_id,
                "currency" => CURRENCY,
                "sub_total" => $gross_total_price,
                "purchase_discount" => $purchase_discount,
                "sub_total_before_discount" => $total_before_dis,
                "discount_amount" => $promo_logo,
                "sub_total_before_tax" => $before_tax,
                "tax_amount" => $tax,
                "net_total" => $net_total
            );
            if (isset($_SESSION['total_id_logo'])) {
                $this->db->update('logo_web_total', $totalData, array("id" => $_SESSION['total_id_logo']));
            } else {
                $this->db->insert('logo_web_total', $totalData);
                $_SESSION['total_id_logo'] = $this->db->insert_id();
            }

            // if web package selected
            if (isset($_SESSION['web_package'])):
                // inserting web package in web_order
                $search = array('6', '7');
                $replace = array('LDG.UK', 'LDG.COM');
                $site = str_replace($search, $replace, SITE_ID);

                if ($_SESSION['web_package'] == BUDGET_WP) {
                    $page_no = 1;
                } elseif ($_SESSION['web_package'] == GOLD_WP) {
                    $page_no = 6;
                } elseif ($_SESSION['web_package'] == ELITE_WP) {
                    $page_no = 12;
                } else {
                    $page_no = 0;
                }

                $priceInPound = round(($web * CONVERSION_MULTIPLYER), 2);
                $priceInDollar = round(($web * CONVERSION_MULTIPLYER2), 2);

                $web_data = array('company_name' => $company_name, 'contact_info' => ($fname . ' ' . $lname), 'email' => $email_id, 'contact_phone' => $phone_no, 'best_time' => '', 'domain_name' => '', 'web_idea' => '', 'comment' => '', 'site' => $site, 'pageno' => $page_no, 'ip' => $ip, 'logo_price' => $price, 'logo_package' => $package, 'priceInPound' => $priceInPound, 'priceInDollar' => $priceInDollar, 'order_date' => $submit_date, 'payment_status' => '0', 'submit_date' => $submit_date, 'web_package' => $_SESSION['web_package'], 'logo_web_id' => $_SESSION['logo_web_id'], 'authentication_code' => '', 'payment_link' => '');

                //update/insert into web_order table select form logo order
                if (isset($_SESSION['web_id'])) {
                    $this->db->update('web_order', $web_data, array('web_id' => $_SESSION['web_id']));
                } else {
                    $this->db->insert('web_order', $web_data);
                    $_SESSION['web_id'] = $this->db->insert_id();
                    $this->db->update('logo_web', array('web_id' => $_SESSION['web_id']), array('logo_web_id' => $_SESSION['logo_web_id']));
                }

                $gross_total_price = $web;
                $purchase_discount = number_format(($gross_total_price * $purchase_dis_rate), 2, '.', '');
                $total_before_dis = $gross_total_price - $purchase_discount;
                $before_tax = $total_before_dis - $promo_web;
                $tax = number_format($before_tax * $tax_rate, 2, ".", "");
                $net_total = $before_tax - $tax;


                $totalData = array(
                    "submit_date" => $submit_date,
                    "logo_web_id" => 0,
                    "web_id" => $_SESSION['web_id'],
                    "site_id" => SITE_ID,
                    "promotional_id" => '',
                    "currency" => CURRENCY,
                    "sub_total" => $gross_total_price,
                    "purchase_discount" => $purchase_discount,
                    "sub_total_before_discount" => $before_tax,
                    "discount_amount" => $promo_web,
                    "sub_total_before_tax" => $before_tax,
                    "tax_amount" => $tax,
                    "net_total" => $net_total
                );
                if (isset($_SESSION['total_id_web'])) {
                    $this->db->update('logo_web_total', $totalData, array("id" => $_SESSION['total_id_web']));
                } else {
                    $this->db->insert('logo_web_total', $totalData);
                    $_SESSION['total_id_web'] = $this->db->insert_id();
                }
            else:
                if (isset($_SESSION['web_id'])) {
                    $this->db->delete('web_order', array('web_id' => $_SESSION['web_id']));
                    $this->db->delete('logo_web_total', array('id' => $_SESSION['total_id_web']));
                    $this->db->update('logo_web', array('web_id' => 0), array('logo_web_id' => $_SESSION['logo_web_id']));
                    unset($_SESSION['web_id'], $_SESSION['total_id_web']);
                }
            endif;
        }
    }

    function get_purchase_dis_rate($gross_total_price) {
        if ($gross_total_price >= TOTAL_PURCHASE3):
            $purchase_dis_rate = PURCHASE_DIS_RATE3;
        elseif ($gross_total_price >= TOTAL_PURCHASE2):
            $purchase_dis_rate = PURCHASE_DIS_RATE2;
        elseif ($gross_total_price >= TOTAL_PURCHASE1):
            $purchase_dis_rate = PURCHASE_DIS_RATE1;
        else:
            $purchase_dis_rate = 0;
        endif;

        return($purchase_dis_rate);
    }

    function get_total_amount() {
        // Just Calculate Gross total to calculate
        $gross_total_price = $_SESSION['logo_price'];
        // web package
        if (isset($_SESSION['web_package'])):
            $gross_total_price += $_SESSION['web_price'];
        endif;
        // brochure package
        if (isset($_SESSION['brouchure_package'])):
            $gross_total_price += $_SESSION['brouchure'];
        endif;
        // Option one
        if (isset($_SESSION['options'])):
            $gross_total_price += $_SESSION['options_price'];
        endif;
        // option two (extra2 page)
        for ($i = 1; $i <= 20; $i++) {
            if (isset($_SESSION['options' . $i])):
                $gross_total_price += $_SESSION['options' . $i . '_price'];
            endif;
        }


        $data['gross_total'] = $gross_total_price;
        $data['purchase_dis'] = $purchase_dis = $this->get_purchase_dis_rate($gross_total_price) * $gross_total_price;
        $data['total_before_promo'] = $gross_total_price - $purchase_dis;
        return $data;
    }

    function get_auth_code() {
        $auth = substr(md5(mktime(date('His'))), 0, 15);
        return $auth;
    }

    function update($order_id = NULL) { // order id is for e payment 
        if (@$_SESSION['fname'] == '0' || @$_SESSION['company_name'] == '0') {
            die();
        } else {
            $tax_rate = $this->get_tax_rate(SITE_ID);
            $logo_web_id = @$_SESSION['logo_web_id'];
            if ($order_id) {
                $logo_web_id = $order_id;
            }
            $order_number = $logo_web_id;


            $q = "select `payment`,`web_id` from logo_web where logo_web_id=" . $logo_web_id;
            $query = $this->db->query($q);
            if (($query->num_rows()) > 0) {
                $row = $query->row();
                if ($row->payment == "1") {
                    //die('You Already Made a Payment with Us');# Do not Updaet Database and Pass Username and Password  
                } else {
                    $submit_date = date("Y-m-d H:i:s", mktime(gmdate("H") + 5, gmdate("i") + 45, gmdate("s"), gmdate("m"), gmdate("d"), gmdate("Y")));
                    $data = array('payment' => '1', 'submit_date' => $submit_date); // data for logo_web, auto_mail, order_extra table field
                    $data2 = array('payment_status' => '1', 'submit_date' => $submit_date); //data for logo_web_total table
                    $data3 = array('payment_status' => '1', 'submit_date' => $submit_date, 'order_date' => $submit_date); //data for web_order table if web selected form logo 

                    $this->db->update('logo_web', $data, array("logo_web_id" => $logo_web_id));

                    $this->db->update('order_extra', $data, array("logo_web_id" => $logo_web_id));
                    //updating logo_web_total                
                    $this->db->update('logo_web_total', $data2, array("logo_web_id" => $logo_web_id));
                    if ($row->web_id != '0') {
                        $this->db->update('logo_web_total', $data2, array("web_id" => ($row->web_id)));
                        $this->db->update('web_order', $data3, array("web_id" => ($row->web_id)));
                    }
                    $query = $this->db->query("select email_id,fname,lname,package,company_name from logo_web where logo_web_id=?", array($logo_web_id));
                    $r = $query->row();
                    $email = $r->email_id;
                    $fname = $r->fname;
                    $lname = $r->lname;
                    $package = $r->package;
                    $company = $r->company_name;
                    $customer_name = $fname . ' ' . $lname;
                    //added later
                    $uni_id = $this->generate_unquie_no();
                    $username = $email;
                    $password = $uni_id;
                    //till here	
                    $mailbody = "<br><br>Dear " . $fname . ",";
                    $mailbody = $mailbody . "<br><br>Thank you for your payment.";
                    $mailbody = $mailbody . "<br><br>We are now sending you a link by which you can login to your very own personal design account.";
                    $mailbody = $mailbody . "<br><br>This will allow you to view all your designs in one place making the design process convenient and simple for you.";
                    $mailbody = $mailbody . "<br><br>Please click the link below to login to your very own personal design account.";
                    $mailbody = $mailbody . "<br><br>We strongly recommend you save the username and password for future use.";
                    $mailbody = $mailbody . "<br><br><strong>Username</strong>: " . $username;
                    $mailbody = $mailbody . "<br><br><strong>Password</strong>: " . $password;
                     $mailbody = $mailbody . "<br><br><strong>Order Number</strong>: " . $order_number;
                    $mailbody = $mailbody . "<br><br>Link: <a href='" . base_url() . "client_panel'>" . base_url() . "client_panel</a>";
                    $mailbody = $mailbody . "<br><br>Thank You";
                    $mailbody = $mailbody . "<br><br>Best Wishes";
                    $mailbody = $mailbody . "<br><br>Admin Staff";
                    /// send mail here
                    // send message here
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
                    $this->email->from('<' . ORDER_MAIL . '>', 'Logo Admin');
                    $this->email->subject('Login details of your Personal Account');
                    $message = $mailbody;
                    $this->email->message($message);
                    $this->email->to($email);
                    $this->email->send();
                    $this->email->clear();

                    if (COUNTRY == 'USA') {
                        $jetpay_msg = 'The Client ' . $fname . ' has paid this payment form <strong>Jetpay</strong>.<br /><br />
                        <strong>Other Details:</strong> <br /><br />
                        Order NO. -> ' . $logo_web_id . '<br />
                        Package ->' . $package . '<br />
                        Company ->' . $company . '<br />
                        Email ->' . $email . '<br />
                        ';
                        $this->email->from($email, $customer_name);
                        $this->email->subject('LDG.COM JETPAY PAYMENT');
                        $this->email->message($jetpay_msg);
                        // $this->email->to('dinanewa@hotmail.com');
                        $this->email->send();
                        $this->email->clear();
                        $this->email->from($email, $customer_name);
                        $this->email->subject('LDG.COM JETPAY PAYMENT');
                        $this->email->message($jetpay_msg);
                        //$this->email->to('rashmi.1980@hotmail.com');
                        //$this->email->to('anitabade@outlook.com');
                        $this->email->to('paymentnotification@logodesignguarantee.co.uk');
                        $this->email->send();
                        $this->email->clear();
                    }

                    // 24 hour order checking
                    $query2 = $this->db->query("select logo_24hr,blackn24 from order_extra where logo_web_id=?", array($logo_web_id));
                    $res = $query2->row();
                    $logo_24 = $res->blackn24;
                    $logo_242 = $res->logo_24hr;
                    if ($logo_24 != '' && $logo_24 != 'Black and white additional logo design file') {
                        $logo_24 = $res->blackn24;
                    } else {
                        $logo_24 = '';
                    }
                    // sending 24 hour urgent email
                    if ($logo_24 != '' || $logo_242 != '') {
                        $message = 'The Client ' . $fname . ' has 24 hour Urgent Delivery order.<br /><br />
                        <strong>Other Details:</strong> <br /><br />
                        <table border="1" >
                            <tr>
                                <td>SITE</td>
                                <td>' . SITE_NAME . '</td>
                            </tr>
                             <tr>
                                <td>Order NO.</td>
                                <td>' . $logo_web_id . '</td>
                            </tr>
                             <tr>
                                <td>Package</td>
                                <td>' . $package . '</td>
                            </tr>
                             <tr>
                                <td>Company</td>
                                <td>' . $company . '</td>
                            </tr>
                             <tr>
                                <td>Email</td>
                                <td>' . $email . '</td>
                            </tr>
                        </table>                      
                          ';
                        $this->email->from($email, $customer_name);
                        $this->email->subject(SITE_NAME . ' 24 hour Delivery Payment Notification');
                        $this->email->message($message);
                        // $this->email->to('dilheartone@hotmail.com');
                        $this->email->to('paymentnotification@logodesignguarantee.co.uk');
                        $this->email->send();
                        $this->email->clear();
                    }
                    //add login info to client_info table
                    $data = array('username' => $username, 'password' => $password, 'logoWebId' => $logo_web_id, 'companyName' => $company);
                    $this->db->insert('client_info', $data);
                }
            } else {
                die("Sorry, Record Not Found!!");
            }
        }
    }

    function generate_unquie_no() {
        $pin_Length = 12;
        $pin_Range = 1;
        $acceptednumbers = '123456789';
        $max = strlen($acceptednumbers) - 1;
        $pin_num = null;
        for ($x = 0; $x < $pin_Range; $x++) {
            for ($i = 0; $i < $pin_Length; $i++) {
                $pin_num .= $acceptednumbers{rand(0, $max)};
            }
            $retrn_value = $pin_num;
            $pin_num = null;
        }
        return $retrn_value;
    }

    function getpackages($package_id) {
        $q = $this->db->query("SELECT * FROM `new_sub_packages` where `package_id`=$package_id");
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function get_num_rows($tablename, $condition = NULL) {
        if ($condition)
            $q = $this->db->get_where($tablename, $condition);
        else
            $q = $this->db->get($tablename);
        return $q->num_rows();
    }

    function get_row_obj($tablename, $condition = NULL) {
        if ($condition)
            $q = $this->db->get_where($tablename, $condition);
        else
            $q = $this->db->get($tablename);
        return $q->row();
    }

    function promo($pcode, $total_before_promotional = NULL, $order_id = NULL) {
        //return $pcode;
        $logo_web_id = $_SESSION['logo_web_id'];
        if ($order_id) {
            $logo_web_id = $order_id;  // logo web id for  email payment
        }

        $tax_rate = $this->get_tax_rate(SITE_ID);

        $cdate = date('Y-m-d');
        $site_id = SITE_ID;
        $retvalue = '';
        $q = "SELECT * FROM `promotional_codes` WHERE `pc_code` = '$pcode' AND `pc_status` = '1' AND ((`pc_expire_status` = '0' AND `pc_expiry_date` > '$cdate') OR (`pc_expire_status` = '1'))";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0) {
            $rs = $query->row();
            //print_r($rs);
            if ($rs->pc_discount_for == $site_id || $rs->pc_discount_for == 0) {
                //check if the promotional code is for the given domain or for all domains            
                if ($pcode == $rs->pc_code) {
                    $pc_id = $rs->pc_id;  // promotional code id
                    $dedtype = $rs->pc_type; // promitional discount type (amount or % )
                    $discount = $rs->pc_discount; // Discount (% or amount)
                    //get package price
                    $query = $this->db->query("SELECT * FROM `logo_web` WHERE `logo_web_id`  = '$logo_web_id'");


                    if ($query->num_rows() > 0) {

                        if ($total_before_promotional) {  // from epayment total
                            $total_before_promo = $total_before_promotional;
                        } else {
                            $prices = $this->get_total_amount();
                            //$gross_total        = $prices['gross_total'];
                            $total_before_promo = $prices['total_before_promo'];
                        }

                        if ($dedtype == 1) {
                            //percent
                            $discount = number_format(($total_before_promo * ($discount / 100)), 2, ".", "");
                        }

                        $price_befor_tax = number_format(($total_before_promo - $discount), 2, ".", "");
                        $tax = number_format(($price_befor_tax * $tax_rate), 2, ".", "");
                        $finalprice = $price_befor_tax + $tax;

                        $data['total_before_promo'] = $total_before_promo;
                        $data['promo_dis'] = $discount;
                        $data['price_befor_tax'] = $price_befor_tax;
                        $data['tax_amount'] = $tax;
                        $data['net_total'] = $price_befor_tax + $tax;
                        $data['tax_rate'] = $tax_rate;
                        $data['pc_id'] = $pc_id;
                        $_SESSION['pcode'] = $pcode;
                        $retvalue = json_encode($data);
                    } else {
                        unset($_SESSION['pcode']);
                        $retvalue = '';
                    }
                } else {
                    unset($_SESSION['pcode']);
                    $retvalue = '';
                }
            } else {
                unset($_SESSION['pcode']);
                $retvalue = '';
            }
        } else {
            unset($_SESSION['pcode']);
            $retvalue = '';
            //echo "Not a valid code.";
        }
        return $retvalue;
    }

    function get_tax_rate($site_id) {
        $this->db->where('site_id', $site_id);
        $query = $this->db->get('tbl_sites');
        $row = $query->num_rows();
        if ($row > 0) {
            $rate = $query->row();
            $return_value = $rate->tax_rate;
        } else {
            $return_value = 0;
        }
        return $return_value;
    }

    // added new for reseller
    function check_login() {
        $where = "(username='" . $this->input->post('username') . "' OR email_id='" . $this->input->post('username') . "') AND password='" . mysql_real_escape_string($this->input->post('password')) . "'";
        $this->db->where($where);
        $this->db->from('reseller');
        if ($this->db->count_all_results() > 0) {
            $this->db->where($where);
            $query = $this->db->get('reseller');
            $row = $query->row();
            $return_id = $row->reseller_id;
        } else {
            $return_id = '';
        }
        return $return_id;
    }

    // checking user for creating new user / reset Password 
    function checkuser() {
        //$where = "email_id='".$this->input->post('email_id')."'";
        $where = array('email_id' => $this->input->post('email_id'));
        $this->db->where($where);
        $this->db->from('reseller');
        if ($this->db->count_all_results() > 0) {
            $query = $this->db->get('reseller');
            $row = $query->row();
            $return_id = $row->reseller_id;
        } else {
            $return_id = '';
        }
        return $return_id;
    }

    function reseller_detail($reseller_id) {
        $this->db->where('reseller_id', $reseller_id);
        $query = $this->db->get('reseller');
        return $query->row();
    }

    function create_reseller() {
        if (@$_SESSION['fname'] == '0' || @$_SESSION['company_name'] == '0') {
            die();
        } else {
            $date = date("Y-m-d H:i:s", mktime(gmdate("H") + 5, gmdate("i") + 45, gmdate("s"), gmdate("m"), gmdate("d"), gmdate("Y")));
            $reseller_data = array(
                'fullname' => $_SESSION['fullname'],
                'company_name' => $_SESSION['company_name'],
                'site_id' => SITE_ID,
                'email_id' => $_SESSION['email_id'],
                'username' => $_SESSION['username'],
                'password' => mysql_real_escape_string($_SESSION['password']),
                'date' => $date);
            $this->db->insert('reseller', $reseller_data);
            $_SESSION['reseller_id'] = $this->db->insert_id();
            $name = explode(' ', $_SESSION['fullname']);
            $_SESSION['fname'] = $name[0];
        }
    }

    function reseller_update($update_data, $update_id) { // for forget my password function    
        if ($_SESSION['fname'] == '0' || $_SESSION['company_name'] == '0') {
            die();
        } else {
            $this->db->update('reseller', $update_data, array("reseller_id" => $update_id));
        }
    }

    /* function save_details($data,$tablename,$condition,$update_var=NULL){
      if(isset($update_var) && $update_var !=''){
      $this->db->update($tablename, $data,$condition);
      }
      else{
      $this->db->insert($tablename, $data);
      $_SESSION['total_id_logo']=$this->db->insert_id();
      }
      } */

    function get_more_services($cat_id = NULL) {
        $this->db->select('*');
        $this->db->from('new_sub_packages');

        $this->db->join('new_packages', 'new_packages.id = new_sub_packages.package_id');
        $this->db->join('new_category', 'new_category.id = new_packages.category_id');
        $this->db->group_by('package_id');
        if ($cat_id):
            //$where = "id <'45'";
            $where = array('category_id' => $cat_id);
            $this->db->where($where);
        endif;
        $this->db->order_by("package_name", "asc");
        return $this->db->get();
    }

    function send_mail_notification() {
        $this->save_logo_order();
        //sending email to order@ldg sites        
        $message = $this->load->view('email_templates/logo/order_details', '', true);

        //$message = 'sfdajfds';                   
        $this->email->from('<' . @$_SESSION['email_id'] . '>', 'New Customer');
        $this->email->subject('NEW LOGO/WEB ORDER ARRIVED');
        $this->email->message($message);
        $this->email->to(ORDER_MAIL);
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
    }

}

?>