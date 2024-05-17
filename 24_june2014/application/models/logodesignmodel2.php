<?php 
class Logodesignmodel2 extends CI_Model {
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
        
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }    
    
    /*function get_last_ten_entries(){
        
        $query = $this->db->get('admin', 10);
        return $query->result();
    }*/

    function insert(){
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
        
        $this->fname   = $fname; // please read the below note
        $this->lname = $lname;
        $this->company_name    = $company_name;
        $this->phone_no   = $phone_no; // please read the below note
        $this->email_id = $email_id;
        $this->se_email_id    = $se_email_id;
        $this->cmp_logo_name   = $cmp_logo_name; // please read the below note
        $this->tagline = $tagline;
        $this->business_detail    = $business_detail;
        $this->m5_colors   = $m5_colors; // please read the below note
        $this->colors = $colors;
        $this->m5_no_colors    = $m5_no_colors;
        $this->no_colors   = $no_colors; // please read the below note
        $this->idea_of_clint = $idea_of_clint;
        $this->contact_details    = $contact_details;
        $this->web   = $web; // please read the below note
        $this->brouchure = $brouchure;
        $this->options    = $option;
        $this->web_gold   = $web_gold; // please read the below note
        $this->web_elite = $web_elite;
        $this->package    = $package;
        $this->dollar   = 0; // please read the below note
        $this->price    = $price;
        $this->files    = $file;
        $this->site_id   = SITE_ID; // please read the below note
        $this->submit_date = $submit_date;
        $this->ip    = $ip;
        
        if(isset($_SESSION['insert']) && $_SESSION['insert'] != '')
        {
            $this->db->update('logo_web', $this,array("logo_web_id" => $_SESSION['insert']));    
        }
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
                
                $this->db->insert('order_extra', $data1);   
            }
        }
    }

   /* function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }*/
    function insertAutoMail(){
        $package = @$_SESSION['package']; 
        $tax_in_total = @$_SESSION['tax_in_total'];       
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
    	for($i=1;$i<21;$i++){		
    		$opt='opt'.$i;
    		$extraopt='extraopt'.$i;
        	if(@$_SESSION[$opt]!="0.00" && @$_SESSION[$extraopt]!=""){
        	$amount=@$_SESSION[$opt];
            	
        	if($i=='16'){
        		$amount=$amount * @$_SESSION['select'];
        	}
            
        	if($i=='17'){
        		$amount=$amount * @$_SESSION['select2'];
        	}
            
        	if($i=='20'){
        		$cost=$amount;
        		$amount=($cost * @$_SESSION['select4']) + ($cost * @$_SESSION['select5']) + ($cost * @$_SESSION['select6']) + ($cost * @$_SESSION['select7']) + ($cost * @$_SESSION['select8']);
        	}        	
           	$extPrice=$extPrice + $amount;        
        	}
    	}
                
        $mailBody = "<table width=\"100%\" border=\"0\">
  <tr>
    <td><p>Dear ".$first_name."</p>
	<p>Thank you for your order with Logo Design Guarantee.</p>

          <p align=\"justify\">Before we can actually begin work on your design requirements we stress  that we require payment before we can start. This email is just a reminder for  payment.</p>
          <p align=\"justify\">Payment can be made via this secure link:</p>
		  <p align=\"justify\"><a href=\"http://".SITE_NAME."/payment2.php?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;extprice=$extPrice&amp;mainlogowebid=$mainLogoWebId&amp;tax_in_total=$tax_in_total\">http://".SITE_NAME."/payment.php</a></p>
		  <p align=\"justify\">If you have made payment already then please feel free to ignore this  email. We would have successfully received your payment. We would have already  been notified via our internal system.</p>
		  <p align=\"justify\">Our designers will get straight to work on your requests. There is no  need to do anything further.</p>
		  <p align=\"justify\">However, if you have yet to make payment, please do so by paying on the  given payment link. </p>
		  <p align=\"justify\">We wish to reassure you that your designs will be fully custom-made, and,  unlike most firms, you are entitled to a <strong>100%  money back-guarantee</strong>. You can only win.</p>
		  <p align=\"justify\">Further, we have a team of professional &ldquo;in-house&rdquo; designers and all  orders are entitled to unlimited redraws and revisions.</p>
		  <p align=\"justify\">Here is the payment link again for you.</p>
		  <p align=\"justify\">
		  <a href=\"http://".SITE_NAME."/payment2.php?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;extprice=$extPrice&amp;mainlogowebid=$mainLogoWebId&amp;tax_in_total=$tax_in_total\">http://".SITE_NAME."/payment.php</a>
		  </p>
		  <p>Remember we would have received your logo order specification, and this  would have been automatically saved in our system. There is no need to place an  order again. Once payment is made, then our staff will automatically be  notified and allocate your order to our designers.</p>
		  <p align=\"justify\">If you wish to ask any questions, you can do so by replying to this  email.</p>
		  <p align=\"justify\">With every business success.</p><br/>
		  <p align=\"justify\">		  Customer Services<br/>
		 Logo Design Guarantee<br/>
		  We Guarantee the Lowest Prices and the Best Money back Guarantee<br/>
		  ".ORDER_MAIL."</p>
		  <p align=\"justify\">P.S.  We also offer additional design services such as web site design, brochure  design and company start-up design packages. </p>
		  <p align=\"justify\">For  more information click here:&nbsp;&nbsp;&nbsp; <a href=\"http://".SITE_NAME."\">http://".SITE_NAME."/web-site-design/webdesigner-limited-sale/index.php</a>. </p></td>
  </tr>
</table>";
        
        
        $data = array('email' => $email, 'submit_date' => $submit_date, 'mail_body' => $mailBody,'ip' => $ip,'site_id' => SITE_ID,'logo_web_id' => @$_SESSION['insert']);
        $this->db->insert('auto_mail', $data);        
        
        if(isset($_SESSION['insert_extra'])){
            $dataExt = array(
            "extra_logo"            => @$_SESSION['extraopt1'],
            "logoby_designer"       => @$_SESSION['extraopt2'],
            "order_lifetime"        => @$_SESSION['extraopt3'],
            "order_flas"            => @$_SESSION['extraopt4'],
            "logo_24hr"             => @$_SESSION['extraopt5'],
            "black_white"           => @$_SESSION['extraopt6'],
            "business_card"         => @$_SESSION['extraopt7'],
            "order_letter"          => @$_SESSION['extraopt8'],
            "order_envelop"         => @$_SESSION['extraopt9'],
            "order_complement"      => @$_SESSION['extraopt10'],
            "order_stationary"      => @$_SESSION['extraopt11'],
            "order_business"        => @$_SESSION['extraopt12'],
            "order_letter_print"    => @$_SESSION['extraopt13'],
            "order_envelop_print"   => @$_SESSION['extraopt14'],
            "order_complement_print" => @$_SESSION['extraopt15'],
            "order_mouse"           => @$_SESSION['extraopt16'],
            "order_cap"             => @$_SESSION['extraopt17'],
            "order_pens"            => @$_SESSION['extraopt18'],
            "order_cotton"          => @$_SESSION['extraopt19'],
            "order_tshirt"          => @$_SESSION['extraopt20'],
            "email"         => $email,
            "submit_date"   => $submit_date,
            "ip"            => $ip,
            "site_id"       => SITE_ID,
            "payment"       => 0,
            "blackn24"      => @$_SESSION['blackn24'],
            "price_extra_logo"            => @$_SESSION['opt1'],
            "price_logoby_designer"       => @$_SESSION['opt2'],
            "price_order_lifetime"        => @$_SESSION['opt3'],
            "price_order_flas"            => @$_SESSION['opt4'],
            "price_logo_24hr"             => @$_SESSION['opt5'],
            "price_black_white"           => @$_SESSION['opt6'],
            "price_business_card"         => @$_SESSION['opt7'],
            "price_order_letter"          => @$_SESSION['opt8'],
            "price_order_envelop"         => @$_SESSION['opt9'],
            "price_order_complement"      => @$_SESSION['opt10'],
            "price_order_stationary"      => @$_SESSION['opt11'],
            "price_order_business"        => @$_SESSION['opt12'],
            "price_order_letter_print"    => @$_SESSION['opt13'],
            "price_order_envelop_print"   => @$_SESSION['opt14'],
            "price_order_complement_print" => @$_SESSION['opt15'],
            "price_order_mouse"           => @$_SESSION['opt16'],
            "price_order_cap"             => @$_SESSION['opt17'],
            "price_order_pens"            => @$_SESSION['opt18'],
            "price_order_cotton"          => @$_SESSION['opt19'],
            "price_order_tshirt"          => @$_SESSION['opt20']
            );
            
            $this->db->update('order_extra', $dataExt,array("logo_web_id" => $mainLogoWebId));  
            
            //$tax = array(       
//            "tax_amount"    => @$_SESSION['tax_in_total']
//            );
//            
//            $this->db->update('tbl_tax', $tax,array("logo_web_id" => $mainLogoWebId));      
        }
        else{
        $dataExt = array(
        "extra_logo"            => @$_SESSION['extraopt1'],
        "logoby_designer"       => @$_SESSION['extraopt2'],
        "order_lifetime"        => @$_SESSION['extraopt3'],
        "order_flas"            => @$_SESSION['extraopt4'],
        "logo_24hr"             => @$_SESSION['extraopt5'],
        "black_white"           => @$_SESSION['extraopt6'],
        "business_card"         => @$_SESSION['extraopt7'],
        "order_letter"          => @$_SESSION['extraopt8'],
        "order_envelop"         => @$_SESSION['extraopt9'],
        "order_complement"      => @$_SESSION['extraopt10'],
        "order_stationary"      => @$_SESSION['extraopt11'],
        "order_business"        => @$_SESSION['extraopt12'],
        "order_letter_print"    => @$_SESSION['extraopt13'],
        "order_envelop_print"   => @$_SESSION['extraopt14'],
        "order_complement_print" => @$_SESSION['extraopt15'],
        "order_mouse"           => @$_SESSION['extraopt16'],
        "order_cap"             => @$_SESSION['extraopt17'],
        "order_pens"            => @$_SESSION['extraopt18'],
        "order_cotton"          => @$_SESSION['extraopt19'],
        "order_tshirt"          => @$_SESSION['extraopt20'],
        "email"         => $email,
        "submit_date"   => $submit_date,
        "ip"            => $ip,
        "site_id"       => SITE_ID,
        "payment"       => 0,
        "logo_web_id"   => $mainLogoWebId,
        "blackn24"      => @$_SESSION['blackn24'],
        "price_extra_logo"            => @$_SESSION['opt1'],
        "price_logoby_designer"       => @$_SESSION['opt2'],
        "price_order_lifetime"        => @$_SESSION['opt3'],
        "price_order_flas"            => @$_SESSION['opt4'],
        "price_logo_24hr"             => @$_SESSION['opt5'],
        "price_black_white"           => @$_SESSION['opt6'],
        "price_business_card"         => @$_SESSION['opt7'],
        "price_order_letter"          => @$_SESSION['opt8'],
        "price_order_envelop"         => @$_SESSION['opt9'],
        "price_order_complement"      => @$_SESSION['opt10'],
        "price_order_stationary"      => @$_SESSION['opt11'],
        "price_order_business"        => @$_SESSION['opt12'],
        "price_order_letter_print"    => @$_SESSION['opt13'],
        "price_order_envelop_print"   => @$_SESSION['opt14'],
        "price_order_complement_print" => @$_SESSION['opt15'],
        "price_order_mouse"           => @$_SESSION['opt16'],
        "price_order_cap"             => @$_SESSION['opt17'],
        "price_order_pens"            => @$_SESSION['opt18'],
        "price_order_cotton"          => @$_SESSION['opt19'],
        "price_order_tshirt"          => @$_SESSION['opt20']
        );
        
        $this->db->insert('order_extra', $dataExt);
        $_SESSION['insert_extra']=$this->db->insert_id();
        }
        
        if(COUNTRY == "UK")        
        {
            if(isset($_SESSION['insert_id_tax']) && $_SESSION['insert_id_tax'] !="")
            {
                $dataTax = array(               
                "tax_amount"            => @$_SESSION['tax_in_total']       
                );
              $this->db->update('tbl_tax', $dataTax,array("logo_web_id" => @$_SESSION['insert']));      
            }
            else
            {
                $dataTax = array(
                "logo_web_id"            => @$_SESSION['insert'],
                "tax_amount"            => @$_SESSION['tax_in_total']       
                );
                $this->db->insert('tbl_tax', $dataTax);
                $_SESSION['insert_id_tax']=$this->db->insert_id();
            }
        }        
    }
    
    function update()
    {        
            
        $q="select `payment` from logo_web where logo_web_id=".@$_GET['mainlogowebid']; 
        $query = $this->db->query($q);        
        //foreach($r -> $r() as $row)
//        {
//            $payment[] = $row->payment;
//        }
        if(($query->num_rows())>0)
        {
            $row = $query->row();
            if($row->payment == "1")
            {
                # Do not Updaet Database and Pass Username and Password  
            }
            else
            {
            $data = array('payment'=>'1');
            $this->db->update('logo_web', $data,array("logo_web_id" => @$_GET['mainlogowebid']));
            $this->db->update('auto_mail', $data,array("logo_web_id" => @$_GET['mainlogowebid']));
            #$this->db->query($sql);
            #$this->db->where('logo_web_id', @$_GET['mainlogowebid']);
            $this->db->update('order_extra', $data,array("logo_web_id" => @$_GET['mainlogowebid']));
            #$this->db->query($sql);	    
            
            $query = $this->db->query("select email_id,fname,lname,company_name from logo_web where logo_web_id=?",array(@$_GET['mainlogowebid']));
            $r = $query->result();            
            $email=$r[0]->email_id;        
            $fname=$r[0]->fname;
            //added later
            $uni_id =$this->generate_unquie_no();
            $username=$email;
            $password=$r[0]->lname."_".$uni_id;
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
    
    function generate_unquie_no(){    
    $pin_Length =12;    
    $pin_Range = 1;    
    $acceptednumbers= '123456789';    
    $max = strlen($acceptednumbers)-1;    
    $pin_num = null;    
    for($x=0; $x <$pin_Range; $x++){    
    	for($i=0; $i < $pin_Length; $i++){    
    		$pin_num .= $acceptednumbers{rand(0, $max)};    
    		}    
    	$retrn_value=$pin_num;    
    	$pin_num = null;    
    }    
    return $retrn_value;    
    }
    
    function captchamail(){
        if($_SERVER['REMOTE_ADDR'] != "161.69.170.84" ){
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
        if(@$_SESSION['code'] != strtoupper(str_replace(" ","", @$_SESSION['verificationcode']))){    
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
    
    function getpackages($package_id){
        $q = $this->db->query("SELECT * FROM `new_sub_packages` where `package_id`=$package_id");
       
        if($q->num_rows() > 0){ 
                foreach($q->result() as $row){
                $data[] = $row;
            }
            return $data;         
        }

        //$this->db->select('new_packages.package_name, new_sub_packages.*');
//        $this->db->where('new_sub_packages.package_id', $package_id);
//        $this->db->from('new_packages');
//        $this->db->join('new_sub_packages', 'new_sub_packages.package_id = new_packages.id', 'left');
//        return $this->db->get()->result_array();
       
    }
    
   // function getwebpackages(){
//        $q = $this->db->query("SELECT * FROM `new_sub_packages` where `package_id`=46");
//       
//        if($q->num_rows() > 0){ 
//                foreach($q->result() as $row){
//                $data[] = $row;
//            }
//            return $data;         
//        }
//       
//    }
}
?>