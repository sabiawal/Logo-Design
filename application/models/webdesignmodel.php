<?php
class Webdesignmodel extends CI_Model 
{

    function __construct()
    {        
        parent::__construct();        
    }

    function save_web_order()
    {
        if(@$_SESSION['contact_info'] == '0' || @$_SESSION['company_name'] == '0')       
            die();
        
        $tax_rate       = $this->get_tax_rate(SITE_ID);
        $_SESSION['auth_code'] = $this->get_auth_code();
        
        if($_SESSION['web_package'] == BUDGET_WP){$page_no = 1;}
        elseif($_SESSION['web_package'] == GOLD_WP){$page_no = 6;}
        elseif($_SESSION['web_package'] == ELITE_WP){$page_no = 12;}
		
		elseif($_SESSION['web_package'] == ELITE_ECOMMERCE_WP){$page_no = 20;}
        elseif($_SESSION['web_package'] == ELITE_EXTENDED_ECOMMERCE_WP){$page_no = 30;}
		
		 elseif($_SESSION['web_package'] == BASIC_COMMERCE_WP){$page_no = 26;}
        elseif($_SESSION['web_package'] == ADVANCED_COMMERCE_WP){$page_no = 40;}
        else{$page_no = 0;}
        
        $company_name   = str_replace("'", " ", stripslashes(@$_SESSION['company_name'])); if(isset($_SESSION['reseller_id'])){$company_name .= ' - (R)'; }   
        $contact_info   = str_replace("'", " ", stripslashes(@$_SESSION['contact_info']));            
        $email          = str_replace("'", " ", stripslashes(@$_SESSION['email']));
        $contact_phone  = str_replace("'", " ", stripslashes(@$_SESSION['contact_phone']));
        $best_time      = str_replace("'", " ", stripslashes(@$_SESSION['best_time']));            
        $domain_name    = str_replace("'", " ", stripslashes(@$_SESSION['domain_name'])); 
        $web_idea       = str_replace("'", " ", stripslashes(@$_SESSION['web_idea'])); 
        $comment        = str_replace("'", " ", stripslashes(@$_SESSION['comment']));
         $m5_colors = str_replace("'", " ", stripslashes(@$_SESSION['m5_colors']));
        $colors = str_replace("'", " ", stripslashes(@$_SESSION['colors']));
        $link = str_replace("'", " ", stripslashes(@$_SESSION['link']));
        $menu_tabs = str_replace("'", " ", stripslashes(@$_SESSION['menu_tabs']));
        $deadline = str_replace("'", " ", stripslashes(@$_SESSION['deadline']));

        //$site           = ORDERED_SITE; 
        $pageno         = $page_no;
        //$ip             = $_SERVER['REMOTE_ADDR']; 
        $logo_price     = (isset($_SESSION['logo_price'])?$_SESSION['logo_price']:0);
        $logo_package   = (isset($_SESSION['logo_package'])?$_SESSION['logo_package']:0);
        $priceInPound   = round(($_SESSION['web_price']*CONVERSION_MULTIPLYER),2);
        $priceInDollar  = round(($_SESSION['web_price']*CONVERSION_MULTIPLYER2),2);
         if(isset($_SESSION['fileList'])){$image =$_SESSION['fileList'];}else{ $image ='';}
        $order_date     = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
        $web_package    = $_SESSION['web_package'];
        
        if($_SESSION['contact_info'] == '0' || $_SESSION['company_name'] == '0')die();
        else
        {
            $insert_array = array(            
            'company_name'=>$company_name,
            'contact_info'=>$contact_info,
            'email'=>$email,
            'contact_phone'=>$contact_phone,            
            'best_time'=>$best_time,
            'domain_name'=>$domain_name,
            'web_idea'=>$web_idea,
            'comment'=>$comment,
            'site'=>ORDERED_SITE,
            'pageno'=>$pageno,
            'ip'=>$_SERVER['REMOTE_ADDR'],
            'logo_price'=>$logo_price,
            'logo_package'=>$logo_package,
            'priceInPound'=>$priceInPound,
            'priceInDollar'=>$priceInDollar,
            'image'=>$image,
            'order_date'=>$order_date,
            'web_package'=>$web_package,
            'submit_date'=>$order_date,
            'm5_colors' => $m5_colors,
                'colors' => $colors,
                'link' => $link,
                'menu_tabs' => $menu_tabs,
                'deadline' => $deadline,
            'authentication_code'=>$_SESSION['auth_code']             
            );
            
            if(isset($_SESSION['reseller_id'])):
                $insert_array['reseller_id'] = $_SESSION['reseller_id'];
            endif;
            
            // Insert/Update on web_order table
            if(isset($_SESSION['web_id']) && $_SESSION['web_id'] != '')
            {         //die(1);   
                $this->db->update('web_order', $insert_array,array("web_id" => $_SESSION['web_id']));    
            }
            
            else
            {//die(2);
                $this->db->insert('web_order', $insert_array);   
                $_SESSION['web_id']=$this->db->insert_id();
            }
            // End Insert/Update on  web order 
            

            // Starts Adding total in logo_web_total table for web order   
            $gross_total_price    = $_SESSION['web_price']; //price of logo package
            // logo package
            if(isset($_SESSION['logo_price']))$gross_total_price += $_SESSION['logo_price'];         
            
            
            //getting purchase discount rate of all package including web package
            //$purchase_dis_rate  = $this->get_purchase_dis_rate($gross_total_price); 
            $purchase_dis_rate  = 0; 
            
            $promo_logo =0;
            $promo_web =0;
            $pc_id =0;
            if(isset($_SESSION['pcode'])):
                $p = $this->promo($_SESSION['pcode']);
                $pcode = json_decode($p);
                $promo_dis  = $pcode->promo_dis;
                $promo_web  = number_format(($promo_dis/$gross_total_price)*($gross_total_price-$logo_price),2,'.','');
                $promo_logo = number_format(($promo_dis/$gross_total_price)*($logo_price),2,'.','');
                $pc_id = $pcode->pc_id;
            endif;
            
            $gross_total_price      -= $logo_price;    // deducting logo price to store price for web only        
            $purchase_discount      = number_format(($gross_total_price*$purchase_dis_rate),2,'.','');
            $total_before_dis       = number_format(($gross_total_price-$purchase_discount),2,'.','');
            
            
            $before_tax             = $total_before_dis-$promo_logo;            
            $tax                    = number_format($before_tax * $tax_rate,2,".","");
            $net_total              = $before_tax-$tax;
            
            $totalData = array(                
                    "submit_date"   => $order_date,
                    "logo_web_id"   => 0,
                    "web_id"        =>$_SESSION['web_id'],                
                    "site_id"       => SITE_ID,                
                    "promotional_id"=> $pc_id,                
                    "currency"      =>CURRENCY,                
                    "sub_total"     => $gross_total_price,
                    "purchase_discount" => $purchase_discount,
                    "sub_total_before_discount" => $total_before_dis,
                    "discount_amount" => $promo_web,  
                    "sub_total_before_tax" => $before_tax,              
                    "tax_amount" => $tax,
                    "net_total" => $net_total
                    );
            if(isset($_SESSION['total_id_web']))
            {
                $this->db->update('logo_web_total', $totalData,array("id" => $_SESSION['total_id_web']));   
            }
            else
            {
                $this->db->insert('logo_web_total', $totalData);
                $_SESSION['total_id_web']=$this->db->insert_id(); 
            }
            
            
            
            
            // if logo package selected
            if(isset($_SESSION['logo_package'])):                
                           
                //update/insert into logo_web table select form web order
                
                $logo_data = array('fname' => $contact_info,'lname' => '','company_name' => $company_name,'phone_no' => $contact_phone,'email_id' => $email,'se_email_id' => '','cmp_logo_name'=> '','tagline'=>'','business_detail' =>$web_idea.'<br />'.$comment,
                'm5_colors'=>$m5_colors,
                'colors'=>$colors,
                'm5_no_colors'=>'',
                'no_colors'=>'',
                'idea_of_clint'=>'',
                'contact_details'=>'',            
                'web' => $_SESSION['web_price'], 
                'brouchure'=>'',
                'options'=>'',
                'web_gold' => $web_package,
                'web_elite'=>'',
                'package' => $logo_package,
                'dollar'=>'0',
                'price' => $logo_price,
                'files'=>'',
                'site_id' => SITE_ID, 
                'authentication_code' => '',
                'submit_date' => $order_date,
                'ip' => $_SERVER['REMOTE_ADDR']);
                if(isset($_SESSION['reseller_id']))
                {
                    $logo_data['reseller_id'] = $_SESSION['reseller_id'];                
                }
                if(isset($_SESSION['logo_web_id']))
                {
                    $this->db->update('logo_web',$logo_data,array('logo_web_id'=>$_SESSION['logo_web_id']));
                }
                else
                {
                    $this->db->insert('logo_web',$logo_data);
                    $_SESSION['logo_web_id'] = $this->db->insert_id();
                    $this->db->update('web_order',array('logo_web_id'=>$_SESSION['logo_web_id']),array('web_id'=>$_SESSION['web_id']));
                }
                
                
                $gross_total_price  = $_SESSION['logo_price'];
                $purchase_discount  = number_format(($gross_total_price*$purchase_dis_rate),2,'.','');
                $total_before_dis   = $gross_total_price-$purchase_discount; 
                $before_tax         = $total_before_dis-$promo_web;            
                $tax                = number_format($before_tax * $tax_rate,2,".","");
                $net_total          = $before_tax-$tax;
                
                $totalData = array(                
                "submit_date"   => $order_date,
                "logo_web_id"   => $_SESSION['logo_web_id'],
                "web_id"        =>0,                
                "site_id"       => SITE_ID,                
                "promotional_id"=> $pc_id,                
                "currency"      =>CURRENCY,                
                "sub_total"     => $gross_total_price,
                "purchase_discount" => $purchase_discount,
                "sub_total_before_discount" => $total_before_dis, 
                "discount_amount" => $promo_logo, 
                "sub_total_before_tax" => $before_tax,              
                "tax_amount" => $tax,
                "net_total" => $net_total
                );
                if(isset($_SESSION['total_id_logo'])){
                    $this->db->update('logo_web_total', $totalData,array("id" => $_SESSION['total_id_logo']));   
                }
                else{
                    $this->db->insert('logo_web_total', $totalData);
                    $_SESSION['total_id_logo']=$this->db->insert_id(); 
                } 
                
                
                
            else:
                if(isset($_SESSION['logo_web_id'])){
                    $this->db->delete('logo_web',array('logo_web_id'=>$_SESSION['logo_web_id']));
                    $this->db->delete('logo_web_total',array('id'=>$_SESSION['total_id_logo']));
                    $this->db->update('web_order',array('logo_web_id'=>0),array('web_id'=>$_SESSION['web_id']));
                    unset($_SESSION['logo_web_id'],$_SESSION['total_id_logo']);
                }             
            endif;
        }
    }
    
    function get_purchase_dis_rate($gross_total_price){
         if($gross_total_price >= TOTAL_PURCHASE3):
            $purchase_dis_rate = PURCHASE_DIS_RATE3;
        elseif($gross_total_price >= TOTAL_PURCHASE2):
            $purchase_dis_rate = PURCHASE_DIS_RATE2;
        elseif($gross_total_price >= TOTAL_PURCHASE1):
            $purchase_dis_rate = PURCHASE_DIS_RATE1;
        else:
            $purchase_dis_rate = 0;
        endif;
        
        return($purchase_dis_rate);
    }
    function get_total_amount(){
        // Just Calculate Gross total to calculate
         $gross_total_price    = $_SESSION['web_price'];
        // web package
        if(isset($_SESSION['logo_package'])):            
            $gross_total_price    += $_SESSION['logo_price'];
        endif;
        
        $data['gross_total']    = $gross_total_price;
        //$data['purchase_dis']   = $purchase_dis = $this->get_purchase_dis_rate($gross_total_price)*$gross_total_price;
        $data['purchase_dis']   = $purchase_dis = 0;
        $data['total_before_promo'] = $gross_total_price-$purchase_dis;
        return $data;
    }
    function get_auth_code(){
        $auth = substr(md5(mktime(date('His'))),0,15);
        return $auth;
    }
    function update($order_id = NULL) // order id is for e payment 
    {
        if(@$_SESSION['fname'] == '0' || @$_SESSION['company_name'] == '0')
        {
            die();
        }
        else
        {
            $tax_rate   = $this->get_tax_rate(SITE_ID);
            $web_id= @$_SESSION['web_id'];
            if($order_id){
                $web_id=$order_id;
            }
            
            
            $q="select `payment_status`,`web_id`,`logo_web_id`,`contact_info`,`email` from web_order where web_id=".$web_id; 
            $query = $this->db->query($q);        
            if(($query->num_rows())>0)
            {
                $row = $query->row();
                if($row->payment_status == "1")
                {
                    //die('You Already Made a Payment with Us');# Do not Updaet Database and Pass Username and Password  
                }
                else
                {
                    $contact_info   = $row->contact_info;
                    $email          = $row->email;
                    $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
                    $data = array('payment'=>'1','submit_date'=>$submit_date); // data for logo_web, auto_mail, order_extra table field
                    $data2 = array('payment_status'=>'1','submit_date'=>$submit_date); //data for logo_web_total table
                    $data3 = array('payment_status'=>'1','submit_date'=>$submit_date,'order_date'=>$submit_date); //data for web_order table if web selected form logo 
                    
                    $this->db->update('web_order', $data3,array("web_id" => $web_id));
                                    
                    
                    //updating logo_web_total for web record               
                    $this->db->update('logo_web_total', $data2,array("web_id" => $web_id));
                    
                    $mailbody="<br><br>Dear ".$contact_info.",<br><br>Thank you for your payment.<br><br>Thank You<br><br>Best Wishes<br><br>Admin Staff";
           
                    // send message here
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
                    
                    $this->email->from(ORDER_MAIL,'Web Admin');
                    $this->email->subject('Thank you for your payment');
                    $message = $mailbody;        
                    $this->email->message($message);      
                    $this->email->to($email);
                    $this->email->send();
                    $this->email->clear();
                            
                    // logo record if selected
                    if($row->logo_web_id != '0')
                    {
                        $this->db->update('logo_web_total', $data2,array("logo_web_id" => ($row->logo_web_id)));
                        $this->db->update('logo_web', $data,array("logo_web_id" => ($row->logo_web_id)));
                    
                        $query = $this->db->query("select email,contact_info,web_package,company_name from web_order where web_id=?",array($web_id));
                        $r      = $query->row();            
                        $email  = $r->email;
                        $package= $r->web_package;
                        $company= $r->company_name;
                        $customer_name = $r->contact_info;
                        //added later
                        $uni_id =$this->generate_unquie_no();
                        $username=$email;
                        $password=$uni_id;
                        //till here	
                        $mailbody="<br><br>Dear ".$customer_name.",";
                        $mailbody=$mailbody."<br><br>Thank you for your payment.";
                        $mailbody=$mailbody."<br><br>We are now sending you a link by which you can login to your very own personal design account.";
                        $mailbody=$mailbody."<br><br>This will allow you to view all your designs in one place making the design process convenient and simple for you.";
                        $mailbody=$mailbody."<br><br>Please click the link below to login to your very own personal design account.";
                        $mailbody=$mailbody."<br><br>We strongly recommend you save the username and password for future use.";
                        $mailbody=$mailbody."<br><br><strong>Username</strong>: ".$username;
                        $mailbody=$mailbody."<br><br><strong>Password</strong>: ".$password;
                        $mailbody=$mailbody."<br><br>Link: <a href='".base_url()."client_panel'>".base_url()."client_panel</a>";
                        $mailbody=$mailbody."<br><br>Thank You";
                        $mailbody=$mailbody."<br><br>Best Wishes";
                        $mailbody=$mailbody."<br><br>Admin Staff";
                        /// send mail here
                        // send message here
                        
                        $this->email->from('<'.ORDER_MAIL.'>','Logo Admin');
                        $this->email->subject('Login details of your Personal Account');
                        $message = $mailbody;    	
                        $this->email->message($message);
                        $this->email->to($email);
                        $this->email->send();
                        $this->email->clear();
                    }
                    /*if(COUNTRY == 'USA')
                    {
                        $jetpay_msg = 'The Client '.$customer_name.' has paid this payment form <strong>Jetpay</strong>.<br /><br />
                        <strong>Other Details:</strong> <br /><br />
                        Order NO. -> '.$logo_web_id.'<br />
                        Package ->'.$package.'<br />
                        Company ->'.$company.'<br />
                        Email ->'.$email.'<br />
                        ';
                        $this->email->from($email,$customer_name);
                		$this->email->subject('LDG.COM JETPAY PAYMENT');
                		$this->email->message($jetpay_msg);
                		$this->email->to('jagdesh010@gmail.com');
                		$this->email->send();
                        $this->email->clear(); 
                        
                        $this->email->from($email,$customer_name);
                		$this->email->subject('LDG.COM JETPAY PAYMENT');
                		$this->email->message($jetpay_msg);
                		$this->email->to('dinanewa@hotmail.com');
                		$this->email->send();
                        $this->email->clear(); 
                        $this->email->from($email,$customer_name);
                		$this->email->subject('LDG.COM JETPAY PAYMENT');
                		$this->email->message($jetpay_msg);
                		//$this->email->to('rashmi.1980@hotmail.com');
                        $this->email->to('anitabade@outlook.com');
                		$this->email->send(); 
                        $this->email->clear();                        
                    }*/
                }
            }
            else
            {
                die("Sorry, Record Not Found!!");
            }
        }        
    }    
    function generate_unquie_no()
    {    
        $pin_Length =12;    
        $pin_Range = 1;    
        $acceptednumbers= '123456789';    
        $max = strlen($acceptednumbers)-1;    
        $pin_num = null;    
        for($x=0; $x <$pin_Range; $x++)
        {    
        	for($i=0; $i < $pin_Length; $i++)
            {    
        		$pin_num .= $acceptednumbers{rand(0, $max)};    
       		}    
        	$retrn_value=$pin_num;    
        	$pin_num = null;    
        }    
        return $retrn_value;    
    }
    
    
    function getpackages($package_id)
    {
        $q = $this->db->query("SELECT * FROM `new_sub_packages` where `package_id`=$package_id");
        if($q->num_rows() > 0)
        { 
            foreach($q->result() as $row)
            {
                $data[] = $row;
            }
            return $data;         
        }
    }
    function get_num_rows($tablename,$condition=NULL){
        if($condition)
            $q = $this->db->get_where($tablename,$condition);        
        else
            $q = $this->db->get($tablename);        
        return $q->num_rows();
    }
    function get_row_obj($tablename,$condition=NULL){
        if($condition)
            $q = $this->db->get_where($tablename,$condition);        
        else
            $q = $this->db->get($tablename);        
        return $q->row();
    }
    function promo($pcode,$total_before_promotional=NULL,$order_id = NULL)
    {
        //return $pcode;
        $web_id = $_SESSION['web_id'];
        if($order_id){
            $web_id = $order_id;  // logo web id for  email payment
        }
        
        $tax_rate = $this->get_tax_rate(SITE_ID);
        
        $cdate = date('Y-m-d');
        $site_id = SITE_ID;
        $retvalue = '';
        $q = "SELECT * FROM `promotional_codes` WHERE `pc_code` = '$pcode' AND `pc_status` = '1' AND ((`pc_expire_status` = '0' AND `pc_expiry_date` > '$cdate') OR (`pc_expire_status` = '1'))";
        $query = $this->db->query($q);
        if($query->num_rows() > 0) 
        {            
            $rs = $query->row();
            //print_r($rs);
            if($rs->pc_discount_for == $site_id || $rs->pc_discount_for == 0) 
            { 
                //check if the promotional code is for the given domain or for all domains            
                if($pcode == $rs->pc_code) 
                {                
                    $pc_id = $rs->pc_id;  // promotional code id
                    $dedtype = $rs->pc_type; // promitional discount type (amount or % )
                    $discount = $rs->pc_discount; // Discount (% or amount)
                    //get package price
                    $query = $this->db->query("SELECT * FROM `web_order` WHERE `web_id`  = '$web_id'");
                    
                    
                    if($query->num_rows() > 0){
                        
                        if($total_before_promotional){  // from epayment total
                            $total_before_promo = $total_before_promotional;
                        }
                        else{
                           $prices = $this->get_total_amount();
                            //$gross_total        = $prices['gross_total'];
                            $total_before_promo = $prices['total_before_promo']; 
                        }
                        						
                        if($dedtype == 1){   
                            //percent
                            $discount = number_format(($total_before_promo * ($discount/100)), 2,".","");                            
                        } 
                        
                        $price_befor_tax = number_format(($total_before_promo - $discount), 2,".","");
                        $tax = number_format(($price_befor_tax * $tax_rate), 2,".","");                            
                        $finalprice = $price_befor_tax + $tax;
                        $data['gross_total'] = $total_before_promo;
                        $data['promo_dis'] = $discount;
                        $data['price_befor_tax'] = $price_befor_tax;
                        $data['pc_id'] = $pc_id;
                        $data['tax_amount'] = $tax;
                        $data['net_total'] = $finalprice;
                        $_SESSION['pcode'] = $pcode;
                        $retvalue = json_encode($data);
                                            
                    } 
                    else{
                        unset($_SESSION['pcode']);
                        $retvalue = '';
                    }
                } 
                else{
                    unset($_SESSION['pcode']);
                    $retvalue = '';
                }
            } 
            else {
                unset($_SESSION['pcode']);
                $retvalue = '';
            }
        } 
        else 
        {
            unset($_SESSION['pcode']);
            $retvalue = '';
            //echo "Not a valid code.";
        }
        return $retvalue;     
    }
        
    function get_tax_rate($site_id)
    {        
        $this->db->where('site_id', $site_id);
        $query = $this->db->get('tbl_sites');            
        $row = $query->num_rows();
        if($row > 0)
        {
            $rate = $query->row();
            $return_value = $rate->tax_rate;
        } 
        else
        {
            $return_value = 0;
        }
        return $return_value;
    }

}
?>