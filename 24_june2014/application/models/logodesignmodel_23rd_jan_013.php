<?php
class Logodesignmodel extends CI_Model 
{
    var $fname=''; 
    var $lname='';
    var $company_name='';
    var $phone_no=''; 
    var $email_id='';
    var $se_email_id='';
    var $cmp_logo_name='';
    var $tagline='';
    var $business_detail='';
    var $m5_colors=''; 
    var $colors='';
    var $m5_no_colors='';
    var $no_colors=''; 
    var $idea_of_clint='';
    var $contact_details='';
    var $web=''; 
    var $brouchure='';
    var $options='';
    var $web_gold=''; 
    var $web_elite='';
    var $package='';
    var $dollar='';
    var $price='';
    var $files='';
    var $site_id='';
    var $submit_date='';
    var $ip='';
    function __construct()
    {        
        parent::__construct();        
        
    }
    /*function get_last_ten_entries(){
        $query = $this->db->get('admin', 10);
        return $query->result();
    }*/
    /* function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/
    function insert()
    {
        $tax_rate = $this->get_tax_rate(SITE_ID);
        $package = @$_SESSION['package'];        
        $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
        $ip = $_SERVER['REMOTE_ADDR'];
        $m5_colors = @$_SESSION['m5_colors'];
        $m5_no_colors = @$_SESSION['m5_no_colors'];
        $first_name= stripslashes(@$_SESSION['fname']);
        $fname= str_replace("'", " ", $first_name);
        $last_name= stripslashes(@$_SESSION['lname']);
        $lname = str_replace("'", " ", $last_name);
        $phone= stripslashes(@$_SESSION['phone_no']);
        $phone_no = str_replace("'", " ", $phone);
        $email= stripslashes(@$_SESSION['email_id']);
        $email_id = str_replace("'", " ", $email);
        $se_email= stripslashes(@$_SESSION['se_email_id']);
        $se_email_id = str_replace("'", " ", $se_email);
        $business = stripslashes(@$_SESSION['business_detail']);
        $business_detail = str_replace("'", " ", $business);
        $company = stripslashes(@$_SESSION['company_name']);
        $company_name = str_replace("'", " ", $company);
        $cmp_logo_name = stripslashes(@$_SESSION['cmp_logo_name']);
        $tagline = stripslashes(@$_SESSION['tagline']);
        $idea= stripslashes(@$_SESSION['idea_of_clint']);
        $idea_of_clint = str_replace("'", " ", $idea);
        $contact= stripslashes(@$_SESSION['contact_details']);
        $contact_details = str_replace("'", " ", $contact);
        $yes_kalar= stripslashes(@$_SESSION['colors']);
        $colors = str_replace("'", " ", $yes_kalar);
        $no_kalar= stripslashes(@$_SESSION['no_colors']);
        $no_colors = str_replace("'", " ", $no_kalar);
        $brouchure=stripslashes(@$_SESSION['brouchure']);  // This Session Contain the amount value of Brouchure Package From Logo Order
        $brouchure=str_replace("'", " ", $brouchure);
        $web=stripslashes(@$_SESSION['web']);      // This Session Contain the amount value of Web Package From Logo Order
        $web=str_replace("'", " ", $web);
        $option=stripslashes(@$_SESSION['option']);   // First 3 option value(amount) in orderone page this value is not from order page
        $option=str_replace("'", " ", $option);
        $dollar=stripslashes(@$_SESSION['dollar']);   // currently not using in ldg sites but this is the logo package price converted into dollar amount of UK site 
        $dollar=str_replace("'", " ", $dollar);
        $price=stripslashes(@$_SESSION['price']);   //
        $price=str_replace("'", " ", $price);
        $web_gold=stripslashes(@$_SESSION['webpackage']); //This is web package form logo order
        $web_gold=str_replace("'", " ", $web_gold);
        $web_elite=stripslashes(@$_SESSION['bhaucharpackage']); // this is not a web package, this is brouchure package and naming is also same in database i.e. web_elite field is used in database too
        $web_elite=str_replace("'", " ", $web_elite);
        $file=stripslashes(@$_SESSION['file']);
        $file=str_replace("'", " ", $file);        
        $this->fname   = $fname; 
        $this->lname = $lname;
        $this->company_name    = $company_name;
        $this->phone_no   = $phone_no; 
        $this->email_id = $email_id;
        $this->se_email_id    = $se_email_id;
        $this->cmp_logo_name   = $cmp_logo_name; 
        $this->tagline = $tagline;
        $this->business_detail    = $business_detail;
        $this->m5_colors   = $m5_colors; 
        $this->colors = $colors;
        $this->m5_no_colors    = $m5_no_colors;
        $this->no_colors   = $no_colors; 
        $this->idea_of_clint = $idea_of_clint;
        $this->contact_details    = $contact_details;
        $this->web   = $web; 
        $this->brouchure = $brouchure;
        $this->options    = $option;
        $this->web_gold   = $web_gold; 
        $this->web_elite = $web_elite;
        $this->package    = $package;
        $this->dollar   = 0; 
        $this->price    = $price;
        $this->files    = $file;
        $this->site_id   = SITE_ID; 
        $this->submit_date = $submit_date;
        $this->ip    = $ip;
        if(isset($_SESSION['reseller_id']))
        {
            $this->reseller_id = $_SESSION['reseller_id'];
        }
        // updating logo web if modification made by back next on the order
        if(isset($_SESSION['insert']) && $_SESSION['insert'] != '')
        {            
            $this->db->update('logo_web', $this,array("logo_web_id" => $_SESSION['insert']));    
        }
        //inserting logo_web if new order with no modification made
        else
        {
            $this->db->insert('logo_web', $this);    // Insearted all value into logo_web table except ordertwo page value and only amount from orderone page i.e. this is extra order so we need to insert this into extra_order table too
            $_SESSION['insert']=$this->db->insert_id();
            #$query = $this->db->query("select max(logo_web_id)order_id from logo_web");
            #$row = $query->result();
            #$maxId = $row[0]->order_id;
            $maxId  = $_SESSION['insert'];
            $data = array('order_id' => $maxId, 'client_name' => $fname, 'site' => SITE_NAME,'status' => 0,'date' => $submit_date);
            $this->db->insert('tbl_client', $data);  // why this values are insearted because here is no other data updated after payment made i.e. the fields uname and pword field are totally empty here
            if(isset($_SESSION['blackn24']) && $_SESSION['blackn24'] != '')
            {            
                $data1 = array(
                "logo_web_id" => $maxId,
                "submit_date" => $submit_date,
                "ip" => $ip,
                "site_id" => SITE_ID,
                "blackn24" => @$_SESSION['blackn24']
                );
                if(isset($_SESSION['insert_extra']))
                {
                    $this->db->update('order_extra', $data1,array("extra_id" => $_SESSION['insert_extra']));                     
                }
                else
                {
                    $this->db->insert('order_extra', $data1);
                    $_SESSION['insert_extra']=$this->db->insert_id(); 
                }   
            }
        }
        
        // insert / update logo_web_total for logo order table(logo_web) 
        $sub_total = $option+$brouchure+$price;  
        $purchase_discount = number_format((($sub_total * $_SESSION['purchase_discount_rate'])/100),2,'.','');
        $total_price = $sub_total-$purchase_discount;  
        $tax_amount  = $total_price * $tax_rate;
        $net_total   = $total_price + $tax_amount; 
             
        $dataTotal = array('logo_web_id'=>$_SESSION['insert'],'submit_date'=>$submit_date,'site_id'=>SITE_ID,'currency'=>CURRENCY,'sub_total'=>$sub_total,'purchase_discount'=>$purchase_discount,'sub_total_before_discount'=>$total_price,'sub_total_before_tax'=>$total_price,'tax_amount'=>$tax_amount,'net_total'=>$net_total);
        if(isset($_SESSION['total_id_logo']))
        {           
            $this->db->update('logo_web_total', $dataTotal,array("id" => @$_SESSION['total_id_logo']));       
        }
        else
        {           
            $this->db->insert('logo_web_total', $dataTotal);
            $_SESSION['total_id_logo']=$this->db->insert_id();      
        }
        
        
        
        //insert/update into web_order table if web order selected form logo order
        if(isset($_SESSION['webpackage']) && $_SESSION['webpackage'] != '')
        {
            if($_SESSION['webpackage'] == 'Budget website 1 page'){$page_no = 1;}
            elseif($_SESSION['webpackage'] == 'Gold website up to 5 pages'){$page_no = 5;}
            elseif($_SESSION['webpackage'] == 'Elite website  up to 12 pages'){$page_no = 12;}
            else{$page_no = 0;}
            $search = array('6','7');
            $replace= array('LDG.UK','LDG.COM');
            $site=str_replace($search,$replace,SITE_ID);
            $priceInPound = round(($web*CONVERSION_MULTIPLYER),2);
            $priceInDollar= round(($web*CONVERSION_MULTIPLYER2),2);
            //die($_SESSION['webpackage'].$_SESSION['web'].$site.$_SESSION['web_id'].$priceInPound.$priceInDollar);
            $web_data = array('company_name'=>$company_name,'contact_info'=>($fname.' '.$lname),'email'=>$email_id,'contact_phone'=>$phone_no,'best_time'=>'','domain_name'=>'','web_idea'=>'','comment'=>'','site'=>$site,'pageno'=>$page_no,'ip'=>$ip,'logo_price'=>$price,'logo_package'=>$package,'priceInPound'=>$priceInPound,'priceInDollar'=>$priceInDollar,'order_date'=>$submit_date,'payment_status'=>'0','submit_date'=>$submit_date,'web_package'=>$_SESSION['webpackage'],'logo_web_id'=>$_SESSION['insert']);
            //if this user is form reseller then reseller id is entered into web_order table
            if(isset($_SESSION['reseller_id']))
            {
                $web_data['reseller_id'] = $_SESSION['reseller_id'];                
            }
            //update/insert into web order table select form logo order
            if(isset($_SESSION['web_id']))
            {
                $this->db->update('web_order',$web_data,array('web_id'=>$_SESSION['web_id']));
            }
            else
            {
                $this->db->insert('web_order',$web_data);
                $_SESSION['web_id'] = $this->db->insert_id();
            }
            
            // Insearting/Updating values in logo_web_total table of web data
            // I am assuming purchase discount for this is 15% because the web amount meets 15% discounts
            $sub_total = $web;
            $purchase_discount = round(($web *0.15),2);
            $sub_total_before_discount = round($sub_total-$purchase_discount,2);
            $discount_amount = 0; //this is promotional Discount
            $sub_total_before_tax = $sub_total_before_discount - $discount_amount;
            $tax_amount = round(($sub_total_before_tax*$tax_rate),2);
            $net_total= $sub_total_before_tax + $tax_amount;
            $logo_web_total = array('web_id'=>$_SESSION['web_id'],'submit_date'=>$submit_date,'site_id'=>SITE_ID,'currency'=>CURRENCY,'sub_total'=>$sub_total,'purchase_discount'=>$purchase_discount,'sub_total_before_discount'=>$sub_total_before_discount,'discount_amount'=>$discount_amount,'sub_total_before_tax'=>$sub_total_before_tax,'tax_amount'=>$tax_amount,'net_total'=>$net_total);
        
            if(isset($_SESSION['total_id_web']) && $_SESSION['total_id_web'] != '')
            {  
                
                $this->db->update('logo_web_total', $logo_web_total,array("id" => $_SESSION['total_id_web']));
            }
            else
            {
                
                $this->db->insert('logo_web_total',$logo_web_total);
                $_SESSION['total_id_web'] = $this->db->insert_id();
            }
            // updating logo_web table for web_id if web order select form logo order
            $logo_update = array('web_id'=>$_SESSION['web_id']);
            $this->db->update('logo_web', $logo_update,array("logo_web_id" => $_SESSION['insert']));
        }
        else
        {
            if(isset($_SESSION['web_id']) && $_SESSION['web_id'] != '')
            {
                $this->db->delete('web_order', array('web_id' => $_SESSION['web_id']));
                $this->db->delete('logo_web_total', array('web_id' => $_SESSION['web_id']));
                
                $logo_web = array('web_id'=>'0');                
                $this->db->update('logo_web',$logo_web,array('logo_web_id'=>$_SESSION['insert']));
                unset($_SESSION['web_id']);
            }
        }
        
    }
    function insertAutoMail($message)
    {
        $tax_rate = $this->get_tax_rate(SITE_ID);
        $package = @$_SESSION['package'];                        
        $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
        $ip = $_SERVER['REMOTE_ADDR'];
        $m5_colors = @$_SESSION['m5_colors'];
        $m5_no_colors = @$_SESSION['m5_no_colors'];
        $first_name= stripslashes(@$_SESSION['fname']);
        $fname= str_replace("'", " ", $first_name);
        $last_name= stripslashes(@$_SESSION['lname']);
        $lname = str_replace("'", " ", $last_name);
        $phone= stripslashes(@$_SESSION['phone_no']);
        $phone_no = str_replace("'", " ", $phone);
        $email= stripslashes(@$_SESSION['email_id']);
        $email_id = str_replace("'", " ", $email);
        $se_email= stripslashes(@$_SESSION['se_email_id']);
        $se_email_id = str_replace("'", " ", $se_email);
        $business = stripslashes(@$_SESSION['business_detail']);
        $business_detail = str_replace("'", " ", $business);
        $company = stripslashes(@$_SESSION['company_name']);
        $company_name = str_replace("'", " ", $company);
        $cmp_logo = stripslashes(@$_SESSION['cmp_logo_name']);
        $cmp_logo_name = str_replace("'", " ", $cmp_logo);
        $tag = stripslashes(@$_SESSION['tagline']);
        $tagline = str_replace("'", " ", $tag);
        $idea= stripslashes(@$_SESSION['idea_of_clint']);
        $idea_of_clint = str_replace("'", " ", $idea);
        $contact= stripslashes(@$_SESSION['contact_details']);
        $contact_details = str_replace("'", " ", $contact);
        $yes_kalar= stripslashes(@$_SESSION['colors']);
        $colors = str_replace("'", " ", $yes_kalar);
        $no_kalar= stripslashes(@$_SESSION['no_colors']);
        $no_colors = str_replace("'", " ", $no_kalar);
        $brouchure=stripslashes(@$_SESSION['brouchure']);
        $brouchure=str_replace("'", " ", $brouchure);
        $web=stripslashes(@$_SESSION['web']);
        $web=str_replace("'", " ", $web);
        $option=stripslashes(@$_SESSION['option']);
        $option=str_replace("'", " ", $option);
        $dollar=stripslashes(@$_SESSION['dollar']);
        $dollar=str_replace("'", " ", $dollar);
        $price=stripslashes(@$_SESSION['price']);
        $price=str_replace("'", " ", $price);
        $web_gold=stripslashes(@$_SESSION['webpackage']);
        $web_gold=str_replace("'", " ", $web_gold);
        $web_elite=stripslashes(@$_SESSION['bhaucharpackage']);
        $web_elite=str_replace("'", " ", $web_elite);
        $mainLogoWebId = @$_SESSION['insert'];
        $extPrice=0;	
		$extraArray = array();
		$extraPrice = array();
    	for($i=1;$i<21;$i++)
        {		
    		$opt='opt'.$i;
    		$extraopt='extraopt'.$i;
        	if(@$_SESSION[$opt]!="0.00" && @$_SESSION[$extraopt]!="")
            {
            	$amount=@$_SESSION[$opt];
            	if($i=='16')
                {
            		$amount=$amount * @$_SESSION['select'];
            	}
            	if($i=='17')
                {
            		$amount=$amount * @$_SESSION['select2'];
            	}
            	if($i=='20')
                {
            		$cost=$amount;
            		$amount=($cost * @$_SESSION['select4']) + ($cost * @$_SESSION['select5']) + ($cost * @$_SESSION['select6']) + ($cost * @$_SESSION['select7']) + ($cost * @$_SESSION['select8']);
            	}        	
               	$extPrice=$extPrice + $amount;        
        	}
			if(isset($_SESSION[$extraopt]))
				$extraArray[$extraopt] = $_SESSION[$extraopt];
			else
				$extraArray[$extraopt] = '';
			if(isset($_SESSION[$opt]))
				$extraPrice[$opt] = $_SESSION[$opt];
			else
				$extraPrice[$opt] = 0;
    	}
		if(isset($_SESSION['blackn24']))
			$blackn24 = $_SESSION['blackn24'];
		else
			$blackn24 = '';
            $mailBody = $message; // message passed form logodesign controllar
            $data = array('email' => $email, 'submit_date' => $submit_date, 'mail_body' => $mailBody,'ip' => $ip,'site_id' => SITE_ID,'logo_web_id' => @$_SESSION['insert']);
            $this->db->insert('auto_mail', $data); 
        if(isset($_SESSION['insert_extra']))
        {
            $dataExt = array(
            "extra_logo"            => @$extraArray['extraopt1'],
            "logoby_designer"       => @$extraArray['extraopt2'],
            "order_lifetime"        => @$extraArray['extraopt3'],
            "order_flas"            => @$extraArray['extraopt4'],
            "logo_24hr"             => @$extraArray['extraopt5'],
            "black_white"           => @$extraArray['extraopt6'],
            "business_card"         => @$extraArray['extraopt7'],
            "order_letter"          => @$extraArray['extraopt8'],
            "order_envelop"         => @$extraArray['extraopt9'],
            "order_complement"      => @$extraArray['extraopt10'],
            "order_stationary"      => @$extraArray['extraopt11'],
            "order_business"        => @$extraArray['extraopt12'],
            "order_letter_print"    => @$extraArray['extraopt13'],
            "order_envelop_print"   => @$extraArray['extraopt14'],
            "order_complement_print" => @$extraArray['extraopt15'],
            "order_mouse"           => @$extraArray['extraopt16'],
            "order_cap"             => @$extraArray['extraopt17'],
            "order_pens"            => @$extraArray['extraopt18'],
            "order_cotton"          => @$extraArray['extraopt19'],
            "order_tshirt"          => @$extraArray['extraopt20'],
            "email"         => $email,
            "submit_date"   => $submit_date,
            "ip"            => $ip,
            "site_id"       => SITE_ID,
            "payment"       => 0,
            "blackn24"      => $blackn24,
            "price_extra_logo"            => @$extraPrice['opt1'],
            "price_logoby_designer"       => @$extraPrice['opt2'],
            "price_order_lifetime"        => @$extraPrice['opt3'],
            "price_order_flas"            => @$extraPrice['opt4'],
            "price_logo_24hr"             => @$extraPrice['opt5'],
            "price_black_white"           => @$extraPrice['opt6'],
            "price_business_card"         => @$extraPrice['opt7'],
            "price_order_letter"          => @$extraPrice['opt8'],
            "price_order_envelop"         => @$extraPrice['opt9'],
            "price_order_complement"      => @$extraPrice['opt10'],
            "price_order_stationary"      => @$extraPrice['opt11'],
            "price_order_business"        => @$extraPrice['opt12'],
            "price_order_letter_print"    => @$extraPrice['opt13'],
            "price_order_envelop_print"   => @$extraPrice['opt14'],
            "price_order_complement_print" => @$extraPrice['opt15'],
            "price_order_mouse"           => (@$extraPrice['opt16'] * @$_SESSION['select']),
            "price_order_cap"             => (@$extraPrice['opt17'] * @$_SESSION['select2']),
            "price_order_pens"            => @$extraPrice['opt18'],
            "price_order_cotton"          => @$extraPrice['opt19'],
            "price_order_tshirt"          => @$extraPrice['opt20']*(@$_SESSION['select4'] + @$_SESSION['select5'] + @$_SESSION['select6'] + @$_SESSION['select7'] + @$_SESSION['select8'])
            );
            $this->db->update('order_extra', $dataExt,array("logo_web_id" => $mainLogoWebId));        
        }
        else
        {
            $dataExt = array(
            "extra_logo"            => @$extraArray['extraopt1'],
            "logoby_designer"       => @$extraArray['extraopt2'],
            "order_lifetime"        => @$extraArray['extraopt3'],
            "order_flas"            => @$extraArray['extraopt4'],
            "logo_24hr"             => @$extraArray['extraopt5'],
            "black_white"           => @$extraArray['extraopt6'],
            "business_card"         => @$extraArray['extraopt7'],
            "order_letter"          => @$extraArray['extraopt8'],
            "order_envelop"         => @$extraArray['extraopt9'],
            "order_complement"      => @$extraArray['extraopt10'],
            "order_stationary"      => @$extraArray['extraopt11'],
            "order_business"        => @$extraArray['extraopt12'],
            "order_letter_print"    => @$extraArray['extraopt13'],
            "order_envelop_print"   => @$extraArray['extraopt14'],
            "order_complement_print" => @$extraArray['extraopt15'],
            "order_mouse"           => @$extraArray['extraopt16'],
            "order_cap"             => @$extraArray['extraopt17'],
            "order_pens"            => @$extraArray['extraopt18'],
            "order_cotton"          => @$extraArray['extraopt19'],
            "order_tshirt"          => @$extraArray['extraopt20'],
            "email"         => $email,
            "submit_date"   => $submit_date,
            "ip"            => $ip,
            "site_id"       => SITE_ID,
            "payment"       => 0,
            "logo_web_id"   => $mainLogoWebId,
            "blackn24"      => @$blackn24,
            "price_extra_logo"            => @$extraPrice['opt1'],
            "price_logoby_designer"       => @$extraPrice['opt2'],
            "price_order_lifetime"        => @$extraPrice['opt3'],
            "price_order_flas"            => @$extraPrice['opt4'],
            "price_logo_24hr"             => @$extraPrice['opt5'],
            "price_black_white"           => @$extraPrice['opt6'],
            "price_business_card"         => @$extraPrice['opt7'],
            "price_order_letter"          => @$extraPrice['opt8'],
            "price_order_envelop"         => @$extraPrice['opt9'],
            "price_order_complement"      => @$extraPrice['opt10'],
            "price_order_stationary"      => @$extraPrice['opt11'],
            "price_order_business"        => @$extraPrice['opt12'],
            "price_order_letter_print"    => @$extraPrice['opt13'],
            "price_order_envelop_print"   => @$extraPrice['opt14'],
            "price_order_complement_print" => @$extraPrice['opt15'],
            "price_order_mouse"           => (@$extraPrice['opt16'] * @$_SESSION['select']),
            "price_order_cap"             => (@$extraPrice['opt17'] * @$_SESSION['select2']),
            "price_order_pens"            => @$extraPrice['opt18'],
            "price_order_cotton"          => @$extraPrice['opt19'],
            "price_order_tshirt"          => @$extraPrice['opt20']*(@$_SESSION['select4'] + @$_SESSION['select5'] + @$_SESSION['select6'] + @$_SESSION['select7'] + @$_SESSION['select8'])
            );
            $this->db->insert('order_extra', $dataExt);
            $_SESSION['insert_extra']=$this->db->insert_id();        
        }
        
        
        
        
        
        if(isset($_SESSION['p_discount']) && $_SESSION['p_discount'] != '')
        {
            $promo_discount_rate = $_SESSION['p_discount']/$_SESSION['sub_total']; // eg 30% = 0.3
        }
        else
        {
            $promo_discount_rate = 0;
        }
        if(isset($_SESSION['web']) && $_SESSION['web'] != '')
        {
            // NOTE : not inserting web data to total and web table too. because already inserted and no change made
            $sub_total_before_discount  = ($_SESSION['web']* 0.85);
            $promotional_discount       = round(($sub_total_before_discount * $promo_discount_rate),2);
            $sub_total_before_tax       = $sub_total_before_discount - $promotional_discount;
            $tax_amount                 = round(($sub_total_before_tax * $tax_rate),2);
            $net_total                  = $sub_total_before_tax +  $tax_amount;
            $dataTotal = array(
                "submit_date"               => $submit_date,
                "web_id"                    => @$_SESSION['web_id'],
                "site_id"                   => SITE_ID,  
                "promotional_id"            => @$_SESSION['pcid'], 
                "currency"                  => CURRENCY,
                "sub_total_before_discount" => $sub_total_before_discount, 
                "discount_amount"           => $promotional_discount, 
                "sub_total_before_tax"      => $sub_total_before_tax, 
                "tax_amount"                => $tax_amount, 
                "net_total"                 => $net_total
                );
            if(isset($_SESSION['total_id_web']))
            {           
                $this->db->update('logo_web_total', $dataTotal,array("id" => @$_SESSION['total_id_web']));       
            }
            else
            {           
                $this->db->insert('logo_web_total', $dataTotal);
                $_SESSION['total_id_web']=$this->db->insert_id();      
            }
            
        }
        else
        {
            if(isset($_SESSION['web_id']) && $_SESSION['web_id'] != '')
            {
                //delete that row and unset web_id
                
                $this->db->delete('web_order', array('web_id' => $_SESSION['web_id']));
                $this->db->delete('logo_web_total', array('web_id' => $_SESSION['web_id']));                
                $logo_web = array('web_id'=>'0');                
                $this->db->update('logo_web',$logo_web,array('logo_web_id'=>$_SESSION['insert']));
                unset($_SESSION['web_id']);
            }
        }
        // updating payment link and client email status in logo_web
        $email_status = array('client_email_status'=>'1','payment_link'=>$_SESSION['payment_link']); // $_SESSION['payment_link'] is from paymentemal.php
        $this->db->update('logo_web', $email_status,array("logo_web_id" => @$_SESSION['insert']));
        
        // Inserting total amount to logo_web_total table for logo
        
        
        $amount = (@$_SESSION['sub_total']-(@$_SESSION['web']*0.85));
        
        $amount = ($amount/(100-@$_SESSION['purchase_discount_rate'])*100);
        
        $purchase_discount = round((($amount* @$_SESSION['purchase_discount_rate'])/100),2);
        
        $sub_total = round($amount,2);       
        $sub_total_before_discount = $sub_total - $purchase_discount;
        $promotional_discount = round(($sub_total_before_discount * $promo_discount_rate),2);
        $sub_total_before_tax = $sub_total_before_discount - $promotional_discount;
        $tax_amount = round(($sub_total_before_tax * $tax_rate),2);
        $net_total = $sub_total_before_tax + $tax_amount;
        
        $dataTotal = array(
                "submit_date"               => $submit_date,
                "logo_web_id"               => @$_SESSION['insert'],
                "site_id"                   => SITE_ID,  
                "promotional_id"            => @$_SESSION['pcid'], 
                "currency"                  => CURRENCY,
                "sub_total"                 => $sub_total, 
                "purchase_discount"         => $purchase_discount,  
                "sub_total_before_discount" => $sub_total_before_discount, 
                "discount_amount"           => $promotional_discount, 
                "sub_total_before_tax"      => $sub_total_before_tax, 
                "tax_amount"                => $tax_amount, 
                "net_total"                 => $net_total
                );
        if(isset($_SESSION['total_id_logo']))
        {           
            $this->db->update('logo_web_total', $dataTotal,array("id" => @$_SESSION['total_id_logo']));       
        }
        else
        {           
            $this->db->insert('logo_web_total', $dataTotal);
            $_SESSION['total_id_logo']=$this->db->insert_id();      
        }
         
    }
    function update()
    {
        $tax_rate = $this->get_tax_rate(SITE_ID);
        $q="select `payment`,`web_id` from logo_web where logo_web_id=".@$_GET['mainlogowebid']; 
        $query = $this->db->query($q);        
        if(($query->num_rows())>0)
        {
            $row = $query->row();
            if($row->payment == "1")
            {
                die('You Already Made a Payment with Us');# Do not Updaet Database and Pass Username and Password  
            }
            else
            {
                $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
                $data = array('payment'=>'1','submit_date'=>$submit_date); // data for logo_web, auto_mail, order_extra table field
                $data2 = array('payment_status'=>'1','submit_date'=>$submit_date); //data for logo_web_total table
                $data3 = array('payment_status'=>'1','submit_date'=>$submit_date,'order_date'=>$submit_date); //data for web_order table if web selected form logo 
                $this->db->update('logo_web', $data,array("logo_web_id" => @$_GET['mainlogowebid']));
                $this->db->update('auto_mail', $data,array("logo_web_id" => @$_GET['mainlogowebid']));                
                $this->db->update('order_extra', $data,array("logo_web_id" => @$_GET['mainlogowebid']));
                //updating logo_web_total                
                $this->db->update('logo_web_total', $data2,array("logo_web_id" => @$_GET['mainlogowebid']));
                if($row->web_id != '0')
                {
                    $this->db->update('logo_web_total', $data2,array("web_id" => ($row->web_id)));
                    $this->db->update('web_order', $data3,array("web_id" => ($row->web_id)));
                }
                $query = $this->db->query("select email_id,fname,lname,package,company_name from logo_web where logo_web_id=?",array(@$_GET['mainlogowebid']));
                $r      = $query->result();            
                $email  = $r[0]->email_id;        
                $fname  = $r[0]->fname;
                $lname  = $r[0]->lname;
                $package= $r[0]->package;
                $company= $r[0]->company_name;
                //added later
                $uni_id =$this->generate_unquie_no();
                $username=$email;
                $password=$uni_id;
                //till here	
                $mailbody="<br><br>Dear ".$fname.",";
                $mailbody=$mailbody."<br><br>Thank you for your payment.";
                $mailbody=$mailbody."<br><br>We are now sending you a link by which you can login to your very own personal design account.";
                $mailbody=$mailbody."<br><br>This will allow you to view all your designs in one place making the design process convenient and simple for you.";
                $mailbody=$mailbody."<br><br>Please click the link below to login to your very own personal design account.";
                $mailbody=$mailbody."<br><br>We strongly recommend you save the username and password for future use.";
                $mailbody=$mailbody."<br><br><strong>Username</strong>: ".$username;
                $mailbody=$mailbody."<br><br><strong>Password</strong>: ".$password;
                $mailbody=$mailbody."<br><br>Link: <a href='http://".SITE_NAME."/client_panel'>http://".SITE_NAME."/client_panel</a>";
                $mailbody=$mailbody."<br><br>Thank You";
                $mailbody=$mailbody."<br><br>Best Wishes";
                $mailbody=$mailbody."<br><br>Admin Staff";
                /// send mail here
                // send message here
                $this->load->library('email');
                $this->email->set_newline("\r\n");
                $config['protocol'] = 'sendmail';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html'; 
                $this->email->initialize($config);
                $this->email->from('<'.ORDER_MAIL.'>','Logo Admin');
                $this->email->subject('Login details of your Personal Account');
                $message = $mailbody;    	
                $this->email->message($message);
                $this->email->to($email);
                $this->email->send();
                $this->email->clear();
                //if(isset($_GET['authentication_code']) && $_GET['authentication_code'] != "")
                //{ 
                    if(COUNTRY == 'USA')
                    {
                        $jetpay_msg = 'The Client '.$fname.' has paid this payment form <strong>Jetpay</strong>.<br /><br />
                        <strong>Other Details:</strong> <br /><br />
                        Order NO. -> '.@$_GET['mainlogowebid'].'<br />
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
                		$this->email->to('rashmi.1980@hotmail.com');
                		$this->email->send(); 
                        $this->email->clear();                        
                    }
                //}
                 // 24 hour order checking
                $query2 = $this->db->query("select logo_24hr,blackn24 from order_extra where logo_web_id=?",array(@$_GET['mainlogowebid']));
                $res   = $query2->result();	
                $logo_24 = $res[0]->blackn24; 
                $logo_242  = $res[0]->logo_24hr; 
                if($logo_24 !='' && $logo_24 != 'Black and white additional logo design file')
                {
                    $logo_24 = $res[0]->blackn24;
                }
                else
                {
                    $logo_24 = '';
                }
                // sending 24 hour urgent email
                if($logo_24 !='' || $logo_242 != '')
                {
                    $message = 'The Client '.$fname.' has 24 hour Urgent Delivery order.<br /><br />
                    <strong>Other Details:</strong> <br /><br />
                    <table border="1" >
                        <tr>
                            <td>SITE</td>
                            <td>'.SITE_NAME.'</td>
                        </tr>
                         <tr>
                            <td>Order NO.</td>
                            <td>'.@$_GET['mainlogowebid'].'</td>
                        </tr>
                         <tr>
                            <td>Package</td>
                            <td>'.$package.'</td>
                        </tr>
                         <tr>
                            <td>Company</td>
                            <td>'.$company.'</td>
                        </tr>
                         <tr>
                            <td>Email</td>
                            <td>'.$email.'</td>
                        </tr>
                    </table>                      
                      ';
                    $this->email->from($email,'New Customer');
            		$this->email->subject(SITE_NAME.' 24 hour Delivery Payment Notification');
            		$this->email->message($message);
            		//$this->email->to('dilheartone@hotmail.com');
                    $this->email->to('jagdesh010@gmail.com');
            		$this->email->send();
                    $this->email->clear(); 
                    $this->email->from($email,'New Customer');
            		$this->email->subject(SITE_NAME.' 24 hour Delivery Payment Notification');
            		$this->email->message($message);
            		$this->email->to('dilheartone@gmail.com');
            		$this->email->send();
                }
                //add login info to client_info table
                $data = array('username' => $username, 'password' => $password, 'logoWebId' => @$_GET['mainlogowebid'],'companyName' => $r[0]->company_name);
                $this->db->insert('client_info', $data);
            }
        }
        else
        {
            die("Sorry, Record Not Found!!");
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
    function captchamail()
    {
        if($_SERVER['REMOTE_ADDR'] != "161.69.170.84" )
        {
            $message = '
            <table width="400" border="1">
            <tr>
            <th><strong>Name</strong></th>
            <th><strong>Discription</strong></th>
            </tr>
            <tr>
            <td><strong>Package</strong></td>
            <td>'.@$_SESSION['package'].'</td>
            </tr>
            <tr>
            <td><strong>Price</strong></td>
            <td>'.CURRENCY.@$_SESSION['price'].'</td>
            </tr>
            <tr>
            <td><strong>IP</strong></td>
            <td>'.@$_SERVER['REMOTE_ADDR'].'</td>
            </tr>
            <tr>
            <td><strong>Customer Name</strong></td>
            <td>'.@$_SESSION['fname'].' '.@$_SESSION['lname'].'</td>
            </tr>
            <tr>
            <td><strong>Company Name</strong></td>
            <td>'.@$_SESSION['company_name'].'</td>
            </tr>
            <tr>
            <td><strong>Phone</strong> </td>
            <td>'.@$_SESSION['phone_no'].'</td>
            </tr>
            <tr>
            <td><strong>Email</strong></td>
            <td>'.@$_SESSION['email_id'].'</td>
            </tr>
            <tr>
            <td><strong>Logo Name</strong></td>
            <td>'.@$_SESSION['cmp_logo_name'].'</td>
            </tr>
            <tr>
            <td><strong>Tagline</strong></td>
            <td>'.@$_SESSION['tagline'].'</td>
            </tr>
            <tr>
            <td><strong>Business Discription</strong></td>
            <td>'.@$_SESSION['business_detail'].'</td>
            </tr>
            <tr>
            <td><strong>Entered Captcha</strong></td>
            <td>'.@$_SESSION['verificationcode'].'</td>
            </tr>
            <tr>
            <td><strong>Right Captcha</strong></td>
            <td>'.@$_SESSION['code'].'</td>
            </tr>
            <tr>
            <td><strong>Browser Detail/Platform</strong></td>
            <td>'.@$_SESSION['agent'].' / '.$_SESSION['platform'].'</td>
            </tr>
            </table>
            ';
            $subject = '';
            if(@$_SESSION['code'] != strtoupper(str_replace(" ","", @$_SESSION['verificationcode'])))
            {    
                $subject = 'Wrong Captcha Entered';
            }
            else
            {
                $subject = 'Right Captcha';  
            }        
            $this->load->library('email');
    		$this->email->set_newline("\r\n");
    		$config['protocol'] = 'sendmail';
    		$config['mailpath'] = '/usr/sbin/sendmail';
    		$config['charset'] = 'utf-8';
    		$config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html'; 
    		$this->email->initialize($config);
    		$this->email->from('<'.@$_SESSION['email_id'].'>',@$_SESSION['fname'].' '.@$_SESSION['lname']);
    		$this->email->subject($subject.' '.SITE_NAME);
    		$this->email->message($message);
    		$this->email->to('testlogodesignorder@gmail.com');
    		$this->email->send();
        }
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
    function get_rows($tablename)
    {
        $sql = "select * from $tablename";
        $q = $this->db->query($sql);
        $row = $q->num_rows();
        return $row;
    }
    function pcode($pcode,$logowebid)
    {
        $tax_rate = $this->get_tax_rate(SITE_ID);
         //$pcode = mysql_real_escape_string(@$_POST['code']);        
        //$logowebid = @$_POST['logowebid'];
        $cdate = date('Y-m-d');
        $site_id = SITE_ID;
        $retvalue = '';
        $qry = "SELECT * FROM `promotional_codes` WHERE `pc_code` = '$pcode' AND `pc_status` = '1' AND ((`pc_expire_status` = '0' AND `pc_expiry_date` > '$cdate') OR (`pc_expire_status` = '1'))";
        $sqr = mysql_query($qry);
        if(mysql_num_rows($sqr) > 0) 
        {
            $rs = mysql_fetch_array($sqr);
            if($rs['pc_discount_for'] == $site_id || $rs['pc_discount_for'] == 0) 
            { 
                //check if the promotional code is for the given domain or for all domains            
                if($pcode == $rs['pc_code']) 
                {                
                    $pcid = $rs['pc_id'];  // promotional code id
                    $dedtype = $rs['pc_type']; // promitional discount type (amount or % )
                    $discount = $rs['pc_discount']; // Discount (% or amount)
                    //get package price
                    $sql = mysql_query("SELECT * FROM `logo_web` WHERE `logo_web_id`  = '$logowebid'");
                    $row = mysql_fetch_array($sql);
                    if(mysql_num_rows($sql) > 0) 
                    {                                            
                        //$aprice = $_SESSION['subtotal'];
						$aprice = $_POST['netprice'];
                        if($dedtype == 1) 
                        {   
                            //percent
                            $discount = number_format(($aprice * ($discount/100)), 2,".","");
                            if(COUNTRY == "UK")
                            {
                                $finalprice_befor_tax = number_format(($aprice - $discount), 2,".","");
                                $tax = number_format(($finalprice_befor_tax * $tax_rate), 2,".","");                            
                                $finalprice = $finalprice_befor_tax + $tax;
                            }
                            else
                            {
                                $finalprice = number_format(($aprice - $discount), 2,".","");
                            }
                        } 
                        elseif($dedtype == 2) 
                        {   
                            //number value
                            if(COUNTRY == "UK")
                            {
                                $finalprice_befor_tax = number_format(($aprice - $discount), 2,".","");
                                $tax = number_format(($finalprice_befor_tax * $tax_rate), 2,".","");                            
                                $finalprice = $finalprice_befor_tax + $tax;
                            }
                            else
                            {
                                $finalprice = number_format(($aprice - $discount), 2,".","");
                            }
                        }
                        $prices = array();
                        $prices["subtotaldisc"]     = '<td  class="basketdesc" align="left" valign="top" style="padding-left:10px;"><strong>Sub Total</strong></td>
                                                    <td class="basketdesc" align="right" valign="top" ></td>
                                                    <td colspan="2" class="basketdesc" align="right" valign="top" style="color:#f00;padding-right:10px;"  ><strong>'.CURRENCY.'<span id="subtotalamount">'.$aprice.'</span></strong></td>';
                        $prices["subtotalamount"]   = $aprice;
                        $prices['discountdisc']     = '<td  class="basketdesc" align="left" valign="top" style="color:#009d0b;padding-left:10px;">Discount From Code</td>
                                                    <td class="basketdesc" align="right" valign="top" ></td>
                                                    <td colspan="2" class="basketdesc" align="right" valign="top" style="color:#009d0b;padding-right:10px;" >('.CURRENCY.$discount.')</td>';
                        $prices["discountamount"]   = $discount;
                        if(COUNTRY == 'UK')
                        {
                            $prices["totalBeforeTaxDisc"] = '<td  class="basketdesc" align="left" valign="top" style="padding-left:10px;"><strong> Total Before Tax</strong></td>
                                                        <td class="basketdesc" align="right" valign="top" ></td>
                                                        <td  colspan="2" class="basketdesc" align="right" valign="top" style="color:#f00;padding-right:10px;"  ><strong>'.CURRENCY.number_format(($aprice-$discount),2,".","").'</strong></td>';
                            $prices["totalBeforeTax"]   = $aprice-$discount;
                            $prices["taxamount"]        = $tax;
                        }                     
                        $prices["newtotal"]         = number_format($finalprice,2,".","");
                        $prices["pcid"]         = $pcid;
                        $prices["main_price"]   = $_POST['netprice'];
                        $retvalue = json_encode($prices);
                    } 
                    else 
                    {
                        $retvalue = '';
                    }
                } 
                else {
                $retvalue = '';
                }
            } else {
            $retvalue = '';
            }
        } 
        else 
        {
            $retvalue = '';
            //echo "Not a valid code.";
        }
        echo $retvalue;     
    }
    // added new for reseller
    function check_login()
    {	
        $where = "(username='".$this->input->post('username')."' OR email_id='".$this->input->post('username')."') AND password='".mysql_real_escape_string($this->input->post('password'))."'";
		$this->db->where($where);
		$this->db->from('reseller');
        if($this->db->count_all_results() > 0)
        { 
            $this->db->where($where);
            $query = $this->db->get('reseller');
            $row = $query->row();
            $return_id = $row->reseller_id;
        }
        else
        {
            $return_id = '';
        }        
		return $return_id;
	}
    // checking user for creating new user / reset Password 
    function checkuser()
    {	
        //$where = "email_id='".$this->input->post('email_id')."'";
        $where = array('email_id'=>$this->input->post('email_id'));
		$this->db->where($where);
		$this->db->from('reseller');
        if($this->db->count_all_results() > 0)
        { 
            $query = $this->db->get('reseller');
            $row = $query->row();
            $return_id = $row->reseller_id;
        }
        else
        {
            $return_id = '';
        }        
		return $return_id;
	}
    function reseller_detail($reseller_id)
    {
        $this->db->where('reseller_id', $reseller_id);
        $query = $this->db->get('reseller');            
        return $query->row();
    }
    function create_reseller()
    {
        $date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
        $reseller_data = array('fullname'=>$_SESSION['fullname'],'company_name'=>$_SESSION['company_name'],'site_id'=>SITE_ID, 'email_id'=>$_SESSION['email_id'],'username'=>$_SESSION['username'],'password'=>mysql_real_escape_string($_SESSION['password']),'date'=>$date);
        $this->db->insert('reseller',$reseller_data);
        $_SESSION['reseller_id'] = $this->db->insert_id();
    }
    function reseller_update($update_data,$update_id)// for forget my password function
    {
        $this->db->update('reseller', $update_data,array("reseller_id" => $update_id));        
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
	
	function promo_codes($pcode,$logowebid)
    {
        //$this->db->where('reseller_id', $reseller_id);
        $cdate = date('Y-m-d');
        $site_id = SITE_ID;
        $retvalue = '';
        $qry = "SELECT * FROM `promotional_codes` WHERE `pc_code` = '$pcode' AND `pc_status` = '1' AND ((`pc_expire_status` = '0' AND `pc_expiry_date` > '$cdate') OR (`pc_expire_status` = '1'))";
		
        $sqr = mysql_query($qry);
        if(mysql_num_rows($sqr) > 0) 
        {
			  $rss = mysql_fetch_array($sqr);
				if($rss['pc_discount_for'] == $site_id || $rss['pc_discount_for'] == 0) 
				{ 
					//check if the promotional code is for the given domain or for all domains            
					if($pcode == $rss['pc_code']) 
					{                
						return $rss;
					}
				}
				
		}
    }
	
	function promo_codes_webtotal_update($data,$id,$type){
		if($type=='web') $this->db->where('web_id',$id);
		if($type=='logo') $this->db->where('logo_web_id',$id);
		$this->db->update('logo_web_total', $data); 
	}

}
?>