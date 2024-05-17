<?php 
class Paymentmodel extends CI_Model {
        var $fname=''; // please read the below note
        var $lname='';
        var $company_name='';
        var $phone_no=''; // please read the below note
        var $email_id='';
        var $se_email_id='';
        var $cmp_logo_name=''; // please read the below note
        var $tagline='';
        var $business_detail='';
        var $m5_colors=''; // please read the below note
        var $colors='';
        var $m5_no_colors='';
        var $no_colors=''; // please read the below note
        var $idea_of_clint='';
        var $contact_details='';
        var $web=''; // please read the below note
        var $brouchure='';
        var $options='';
        var $web_gold=''; // please read the below note
        var $web_elite='';
        var $package='';
        var $dollar=''; // please read the below note
        var $price='';
        var $files='';
        var $site_id=''; // please read the below note
        var $submit_date='';
        var $ip='';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    /*function get_last_ten_entries()
    {
        $query = $this->db->get('admin', 10);
        return $query->result();
    }*/
    function insert()
    {
        /* 
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
        $this->site_id   = 6; // please read the below note
        $this->submit_date = $submit_date;
        $this->ip    = $ip;
        $this->db->insert('logo_web', $this);
        $_SESSION['insert']=$this->db->insert_id();
        $query = $this->db->query("select max(logo_web_id)order_id from logo_web");
        $row = $query->result();
        $maxId = $row[0]->order_id;
        $data = array('order_id' => $maxId, 'client_name' => $fname, 'site' => 'logodesignguarantee.co.uk','status' => 0,'date' => $submit_date);
        $this->db->insert('tbl_client', $data);*/
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
	$printing_services=@$_SESSION['extraopt1'].", ".@$_SESSION['extraopt2'].", ".@$_SESSION['extraopt3'].", ".@$_SESSION['extraopt4'].", ".@$_SESSION['extraopt5'].", ".@$_SESSION['extraopt6'].", ".@$_SESSION['extraopt7'].", ".@$_SESSION['extraopt8'].", ".@$_SESSION['extraopt9'].", ".@$_SESSION['extraopt10'].", ".@$_SESSION['extraopt11'].", ".@$_SESSION['extraopt12'].", ".@$_SESSION['extraopt13'].", ".@$_SESSION['extraopt14'].", ".@$_SESSION['extraopt15'].", ".@$_SESSION['extraopt16'].", ".@$_SESSION['extraopt17'].", ".@$_SESSION['extraopt18'].", ".@$_SESSION['extraopt19'].", ".@$_SESSION['extraopt20'];
	$site = "LDGUK";	
	$web= @$_SESSION['web'];
	$brouchure= @$_SESSION['brouchure'];
	$option= @$_SESSION['option'];
	$web_gold= @$_SESSION['web_gold'];
	$web_elite= @$_SESSION['web_elite'];
	$package= @$_SESSION['package'];
	$price= @$_SESSION['price'];
	$file = @$_SESSION['file'];
	$grand_total = "Grand Total";
	$colour_yes = @$_SESSION['m5_colors'];
	$colour_no = @$_SESSION['m5_no_colors'];
	$color=explode(",",$colour_yes);
	$colorno=explode(",",$colour_no);
		//web packages
	if(@$_SESSION['web']==199)
		{
		$g2s_web_package = "_And_Budget_Website_One_page";
		$g2s_web_price = 199;
		$web_package = "Budget website 1 page.";
		$web_pound = 199;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$multi = 199;
		$pound = "GBP";
		}
	if(@$_SESSION['web']==349)
		{
		$g2s_web_package = "_And_Gold_Websiteup_Up-To_Five_Pages";
		$g2s_web_price = 349;
		$web_package = "Gold website up to 5 pages.";
		$web_pound = 349;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$multi = 349;
		$pound = "GBP";
		}
	if(@$_SESSION['web']==599)
		{
		$g2s_web_package = "_And_Elite_Website_Up_To_Twelve_Pages";
		$g2s_web_price = 599;
		$web_package = "Elite website  up to 12 pages.";
		$web_pound = 599;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$multi = 599;
		$pound = "GBP";
		}
		//packages brouchure
	if(@$_SESSION['brouchure']==249)
		{
		$g2s_brouchure_package = "_And_Tri_Fold_Double_Sided";
		$g2s_brouchure_price = 249;
		$brouchure_package = "Tri-fold double-sided.";
		$brouchure_pound = 249;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$multi = 249;
		$gdp = "GBP";
		}
		if(@$_SESSION['brouchure']==299)
		{
		$g2s_brouchure_package = "_And_Four_Page_Exec";
		$g2s_brouchure_price = 299;
		$brouchure_package = "4 Page exec.";
		$brouchure_pound = 299;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$multi = 299;
		$gdp = "GBP";
		}
		if(@$_SESSION['brouchure']==399)
		{
		$g2s_brouchure_package = "_And_Brochure_Up_To_Eight_Pages";
		$g2s_brouchure_price = 399;
		$brouchure_package = "Brochure up to 8 pages..";
		$brouchure_pound = 399;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$multi = 399;
		$gdp = "GBP";
		}
		//Packages web_gold
		if(@$_SESSION['web_gold']==920)
		{
		$g2s_web_gold_package = "Start_Up_Gold_Package";
		$g2s_web_gold_price = 920;
		$web_gold_package = "Start-up Gold Package.";
		$web_gold_pound = 920;
		$web_gold_brac_start = "(";
		$web_gold_brac_close = ")";
		$multi = 920;
		$bgp = "GBP";
		}
		//Packages web_elite
		if(@$_SESSION['web_elite']==1455)
		{
		$g2s_web_elite_package = "Start_Up_Elite_Package";
		$g2s_web_elite_price = 1455;
		$web_elite_package = "Start-up Elite Package.";
		$web_elite_pound = 1445;
		$web_elite_brac_start = "(";
		$web_elite_brac_close = ")";
		$multi = 1455;
		$gbp = "GBP";
		}
		//packages option
		if(@$_SESSION['option']=="19")
		{
			$g2s_option_package = "_And_Twentyfour_Hours_Delivery";
			$g2s_option_price = 19;
			$option_package = "24 hours delivery";
			$option_pound = 19;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$gbp = "GBP";
		}
		if(@$_SESSION['option']=="15")
		{
			$g2s_option_package = "_And_Black_And_White_Logo_Design";
			$g2s_option_price = 15;
			$option_package = "Black/White logo design";	
			$option_pound = 15;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$multi = 15;
			$gbp = "GBP";
		}
		if(@$_SESSION['option']=="29")
		{
			$g2s_option_package = "_And_Both_Order_Service";
			$g2s_option_price = 29;
			$option_package = "Both order service";	
			$option_pound = 29;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$multi = 29;
			$gbp = "GBP";
		}
		//Nochex Price	
		$row='23';
	$total=0;	
	$total1=0;
	for($i=1;$i<$row-2;$i++)
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
    if(($total + $amount + $price + $option + $web + $brouchure)<='700')
	{                                    
	$total=$total + $amount;
	}
	else
	{
	$total1=$total1 + $amount;
	}
	}
		$total_price=$total;
			$g2s_option_package1 = "Total_Selected_Service";
			$g2s_option_price1 = $total_price;
			$option_package1 = "Total Selected Service";	
			$option_pound1 = $total_price;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$multi = $total_price;
			$gbp = "GBP";
	}
	$total_nochex_pound =$total + $price + $option + $brouchure + $web;
	$total_g2s_price=$total + $price + $option + $total1 + $brouchure + $web;
	if(($total_g2s_price)>700)
	{
		$g2s_all_service_package = $package."_And_"."Total_Selected_Service";
		$g2s_all_service_price = $total_g2s_price;
		$all_service_package = $package."And"."Total Selected Service";
		$all_service_pound = $total_g2s_price;
		$all_brac_start = "(";
		$all_brac_close = ")";
		$multi = $total_g2s_price;
		$pound = "GBP";
	}
		//G2s Perporties
		$site_id = '3807007046092011579';
		$qty = '1';
		$date = date('yy-M-d.H:m:s');
		//logo when all servieces becomes greater than pound 700
		$g2s_all_package = $g2s_all_service_package;
		$g2s_all_price = $g2s_all_service_price;
		$md_logo = md5(Q2xe6UPhAAZnns1Jp0wwGxDRYoIIFx9n3cVAg6F5qRA84GLlQOB4nsjpg0woyCgn.$site_id.GBP.$g2s_all_price.$g2s_all_package.  $g2s_all_price.$qty.$date);	
		//Web Gold Package 
		$g2s_gold_package = $g2s_web_gold_package;
		$g2s_gold_price = $g2s_web_gold_price;
		$md_gold = md5(Q2xe6UPhAAZnns1Jp0wwGxDRYoIIFx9n3cVAg6F5qRA84GLlQOB4nsjpg0woyCgn.$site_id.GBP.$g2s_gold_price.$g2s_gold_package.$g2s_gold_price.$qty.$date);
		//Web Elite Package
		$g2s_elite_price = $g2s_web_elite_price;	
		$g2s_elite_package= $g2s_web_elite_package;
		$md_elit = md5(Q2xe6UPhAAZnns1Jp0wwGxDRYoIIFx9n3cVAg6F5qRA84GLlQOB4nsjpg0woyCgn.$site_id.GBP.$g2s_elite_price.$g2s_elite_package.$g2s_elite_price.$qty.$date);
		//Web Gold And Web Elite Package
		$g2s_both_package = $g2s_web_gold_package."_And_".$g2s_elite_package;		
		$g2s_both_price = $g2s_web_gold_price + $g2s_elite_price;
		$md_both= md5(Q2xe6UPhAAZnns1Jp0wwGxDRYoIIFx9n3cVAg6F5qRA84GLlQOB4nsjpg0woyCgn.$site_id.GBP.$g2s_both_price.$g2s_both_package.$g2s_both_price.$qty.$date);
		//Web Design And Brochure
		$g2s_web_brochure_price = $price + $option + $web + $brouchure + $total + $total1;
		$g2s_web_brochure_package = $package.$g2s_option_package.$g2s_web_package.$g2s_brouchure_package.$g2s_option_package1;
$md_web_brouchure= md5(Q2xe6UPhAAZnns1Jp0wwGxDRYoIIFx9n3cVAg6F5qRA84GLlQOB4nsjpg0woyCgn.$site_id.GBP.$g2s_web_brochure_price.$g2s_web_brochure_package.$g2s_web_brochure_price.$qty.$date);
$subject=" NEW LOGO/WEB ORDER ARRIVED ";
$subject1=" Your Logo Order Received ";
// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: New Customer<'.$email_id.'>' . "\r\n";
$headers .= 'From: Logo Admin<info@logodesignguarantee.com>' . "\r\n";
$headers1  = 'MIME-Version: 1.0' . "\r\n";
$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers1 .= 'From: LogoDesignGuarantee<enquiries@logodesignguarantee.co.uk>' . "\r\n";	
$headers1 .= 'From: Logo Admin<info@logodesignguarantee.com>' . "\r\n";
$mailbody1="<table width=\"100%\" border=\"0\">
  <tr>
    <td><p>Dear ".@$_SESSION['fname']."</p>
	<p>Thank you for your order with Logo Design Guarantee.</p>
          <p align=\"justify\">Before we can actually begin work on your design requirements we stress  that we require payment before we can start. This email is just a reminder for  payment.</p>
          <p align=\"justify\">Payment can be made via this secure link:</p>
		  <p align=\"justify\"><a href=\"http://logodesignguarantee.co.uk/payment.html?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;web_gold=$web_gold&amp;web_elite=$web_elite\">http://logodesignguarantee.co.uk/payment.php</a></p>
		  <p align=\"justify\">If you have made payment already then please feel free to ignore this  email. We would have successfully received your payment. We would have already  been notified via our internal system.</p>
		  <p align=\"justify\">Our designers will get straight to work on your requests. There is no  need to do anything further.</p>
		  <p align=\"justify\">However, if you have yet to make payment, please do so by paying on the  given payment link. </p>
		  <p align=\"justify\">We wish to reassure you that your designs will be fully custom-made, and,  unlike most firms, you are entitled to a <strong>100%  money back-guarantee</strong>. You can only win.</p>
		  <p align=\"justify\">Further, we have a team of professional &ldquo;in-house&rdquo; designers and all  orders are entitled to unlimited redraws and revisions.</p>
		  <p align=\"justify\">Here is the payment link again for you.</p>
		  <p align=\"justify\">
		  <a href=\"http://logodesignguarantee.co.uk/payment.html?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;web_gold=$web_gold&amp;web_elite=$web_elite\">http://logodesignguarantee.co.uk/payment.php</a>
		  </p>
		  <p>Remember we would have received your logo order specification, and this  would have been automatically saved in our system. There is no need to place an  order again. Once payment is made, then our staff will automatically be  notified and allocate your order to our designers.</p>
		  <p align=\"justify\">If you wish to ask any questions, you can do so by replying to this  email.</p>
		  <p align=\"justify\">With every business success.</p><br/>
		  <p align=\"justify\">		  Customer Services<br/>
		 Logo Design Guarantee<br/>
		  We Guarantee the Lowest Prices and the Best Money back Guarantee<br/>
		  Info@logodesignguarantee.co.uk</p>
		  <p align=\"justify\">P.S.  We also offer additional design services such as web site design, brochure  design and company start-up design packages. </p>
		  <p align=\"justify\">For  more information click here:&nbsp;&nbsp;&nbsp; <a href=\"http://logodesignguarantee.co.uk/web_index.html\">http://logodesignguarantee.co.uk/web_index.html</a>. </p></td>
  </tr>
</table>";
//-------------------------------second mail from here --------------------------
$mailbody="<table width=\"590\" border=\"1\"  align=\"center\" >
      <tr>
        <td width=\"301\" colspan=\"2\"><table width=300 border=\"1\" align=\"center\" >
          <tr>
            <td width=112>From</td>
            <td width=178>".$site."</td>
          </tr>
		  <tr>
            <td>IP</td>
            <td>".$_SERVER['REMOTE_ADDR']."</td>
          </tr>
		  <tr>
            <td>First Name</td>
            <td>".stripslashes($fname)."</td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td>".stripslashes($lname)."</td>
          </tr>
		  <tr>
        <td>Company Name</td>
        <td>".stripslashes($company_name)."</td>
      </tr>
          <tr>
            <td>Email </td>
            <td>".stripslashes($email_id)."</td>
          </tr>
          <tr>
            <td>Secondary Email</td>
            <td>".stripslashes($se_email_id)."</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>".stripslashes($phone_no)."</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>Web Gold Package </td>
        <td width=\"451\">".$web_gold_package."</td>
      </tr>
      <tr>
        <td>Web Elite Package </td>
        <td>".$web_elite_package."</td>
      </tr>
      <tr>
        <td>Brochure</td>
        <td>".$brouchure_package."</td>
      </tr>
      <tr>
        <td>Web Design </td>
        <td>".$web_package."</td>
      </tr>
      <tr>
        <td>Logo Package </td>
        <td>".@$_SESSION['package']."</td>
  </tr>
	  <tr>
        <td>Extra Type </td>
        <td>".$option_package."</td>
	  </tr>
	  <tr>
        <td>Printing Services</td>
        <td>".$printing_services."</td>
	  </tr>
      <tr>
        <td>Logo Name</td>
        <td>".stripslashes($cmp_logo_name)."</td>
      </tr>
      <tr>
        <td>Tagline</td>
        <td>".stripslashes($tagline)."</td>
      </tr>
      <tr>
        <td>Business Description </td>
        <td>".stripslashes($business_detail)."</td>
      </tr>
      <tr>
        <td>Color Yes </td>
        <td>".stripslashes($colors)."</td>
      </tr>
	  <tr>
        <td>Color No </td>
        <td>".stripslashes($no_colors)."</td>
      </tr>
	  <tr>
        <td>Image</td>
        <td><a href=$file>
<img src='".$file."' height=30 width=30></a></td>
      </tr>
      <tr>
        <td>Ideas</td>
        <td>".stripslashes($idea_of_clint)."</td>
      </tr>
      <tr>
        <td>Contact</td>
        <td>".stripslashes($contact_details)."</td>
      </tr>
	  <tr>
        <td>colours to see </td>";
        $mailbody.="<td><table> <strong></strong> </table>";
for($i=0;$i<sizeof($color);$i++)
	{
	 $mailbody.=" <table width=\"8%\"> <tr> <td height=\"15\" width=\"3%\" bgcolor=\"$color[$i]\"></td></tr></table> ";
 	};
		$mailbody.="<tr>
        <td>colours not to see </td>";
        $mailbody.="<td><table> <strong></strong> </table>";
for($i=0;$i<sizeof($colorno);$i++)
	{
	 $mailbody.=" <table width=\"8%\"> <tr> <td height=\"15\" width=\"3%\" bgcolor=\"$colorno[$i]\"></td></tr></table> ";
 	};
	$mailbody.="</td>
      </tr>
</table>" ;

mail('info@logodesignguarantee.com',$subject,$mailbody,$headers);
mail($email,$subject1,$mailbody1,$headers1);
	if(@$_SESSION['web_gold']==920 && @$_SESSION['web_elite']=="")
		{
		header("Location:https://secure.gate2shop.com/ppp/purchase.do?merchant_site_id=32138&merchantIp=&merchant_id=3807007046092011579&time_stamp=$date&total_amount=$g2s_gold_price&currency=GBP&checksum=$md_gold&item_name_1=$g2s_gold_package&item_amount_1=$g2s_gold_price&quantity_1=1");
		exit;
		}
	if(@$_SESSION['web_elite']==1455 && @$_SESSION['web_gold']=="")
		{
		header("Location:https://secure.gate2shop.com/ppp/purchase.do?merchant_site_id=32138&merchantIp=&merchant_id=3807007046092011579&time_stamp=$date&total_amount=$g2s_elite_price&currency=GBP&checksum=$md_elit&item_name_1=$g2s_elite_package&item_amount_1=$g2s_elite_price&quantity_1=1");
		exit;
		}
	if(@$_SESSION['web_elite']!=="" && @$_SESSION['web_gold']!=="")
		{
		header("Location:https://secure.gate2shop.com/ppp/purchase.do?merchant_site_id=32138&merchantIp=&merchant_id=3807007046092011579&time_stamp=$date&total_amount=$g2s_both_price&currency=GBP&checksum=$md_both&item_name_1=$g2s_both_package&item_amount_1=$g2s_both_price&quantity_1=1");
		exit;
		}
		if(@$_SESSION['web_elite']=="" && @$_SESSION['web_gold']=="" && $total_g2s_price >'700')
			{
			header("Location:https://secure.gate2shop.com/ppp/purchase.do?merchant_site_id=32138&merchantIp=&merchant_id=3807007046092011579&time_stamp=$date&total_amount=$g2s_web_brochure_price&currency=GBP&checksum=$md_web_brouchure&item_name_1=$g2s_web_brochure_package&item_amount_1=$g2s_web_brochure_price&quantity_1=1");
			exit;
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
<script language="javascript">
function doPost()
{
	document.checkoutform.submit();
}
</script>
</head>
<body>
<!--Start Nochex payment Start-->
<?php if(@$_SESSION['dollar']!=="" && @$_SESSION['option']!=="" && @$_SESSION['web_elite']=="" && @$_SESSION['web_gold']=="" && $total_g2s_price <='700')
	{
?>	

<form name="checkoutform" action="https://secure.nochex.com" method="post">
<input type="hidden" name="email" value="fiftydollarlogo@gmail.com">
<input type="hidden" name="logo" value="http://logodesignguarantee.co.uk/images/logo.jpg">
<input type="hidden" name="returnurl" value="http://www.logodesignguarantee.co.uk/thankyou.php?ip=<?php echo $ip; ?>">
<input type="hidden" name="description" value="<?=$package;?>(<?=$price;?>GBP)  <?=$option_package;?><?=$option_brac_start;?><?=@$_SESSION['option'];?><?=$gbp;?><?=$option_brac_close;?>  <?=$option_package1;?><?=$option_brac_start;?><?=$total_price;?><?=$gbp;?><?=$option_brac_close;?><?php if(@$_SESSION['web']!=""){?>  <?=$web_package;?><?=$option_brac_start;?><?=@$_SESSION['web'];?><?=$gbp;?><?=$option_brac_close;?><?php }if(@$_SESSION['brouchure']!=""){?>   <?=$brouchure_package;?><?=$option_brac_start;?><?=@$_SESSION['brouchure'];?><?=$gbp;?><?=$option_brac_close;?><?php }?>" >
<input type="hidden" name="amount" value="<?=$total_nochex_pound;?>">
<input type="text" name="none" value="none" />
</form>
<script language="javascript">
	document.checkoutform.submit();
</script>
<?php 
	}
	else
{
 if(@$_SESSION['dollar']!=="" && @$_SESSION['option']=="" && @$_SESSION['web_elite']=="" && @$_SESSION['web_gold']=="" && $total_g2s_price<='700')
	{
	?>	
<form name="checkoutform" action="https://secure.nochex.com" method="post">
<input type="hidden" name="email" value="fiftydollarlogo@gmail.com">
<input type="hidden" name="logo" value="http://logodesignguarantee.co.uk/images/logo.jpg">
<input type="hidden" name="returnurl" value="http://www.logodesignguarantee.co.uk/thankyou.php?ip=<?php echo $ip; ?>">
<input type="hidden" name="description" value="<?=$package;?>(<?=$price;?>GBP)  <?=$option_package1;?><?=$option_brac_start;?><?=$total_price;?><?=$gbp;?><?=$option_brac_close;?><?php if(@$_SESSION['web']!=""){?>  <?=$web_package;?><?=$option_brac_start;?><?=@$_SESSION['web'];?><?=$gbp;?><?=$option_brac_close;?><?php }if(@$_SESSION['brouchure']!=""){?>    <?=$brouchure_package;?><?=$option_brac_start;?><?=@$_SESSION['brouchure'];?><?=$gbp;?><?=$option_brac_close;?><?php }?>">
<input type="hidden" name="amount" value="<?=$total_nochex_pound;?>">
<input type="text" name="none" value="none" />
</form>
<script language="javascript">
	document.checkoutform.submit();
</script>
<?php 
}	
	}
?>
<!--End Nochex payment End-->
</body>
</html>
<?php       
    }

}
?>