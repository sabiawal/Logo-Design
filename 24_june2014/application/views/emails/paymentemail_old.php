<?php
      
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
    
    $mainLogoWebId = @$_SESSION['insert'];
	
		
	$site = ORDERED_SITE;	
	
	$web= @$_SESSION['web'];
	$brouchure= @$_SESSION['brouchure'];
	$option= @$_SESSION['option'];

	$package= @$_SESSION['package'];
	
	
	
	$price= @$_SESSION['price'];
		
	$file = @$_SESSION['file'];
	$grand_total = "Grand Total";
	$colour_yes = @$_SESSION['m5_colors'];
	$colour_no = @$_SESSION['m5_no_colors'];
	$color=explode(",",$colour_yes);
	$colorno=explode(",",$colour_no);
	
    $extPrice=0;	
	
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
	}
	

						 
echo "<table width=\"100%\" border=\"0\">
  <tr>
    <td><p>Dear ".$first_name."</p>
	<p>Thank you for your order with Logo Design Guarantee.</p>

          <p align=\"justify\">Before we can actually begin work on your design requirements we stress  that we require payment before we can start. This email is just a reminder for  payment.</p>
          <p align=\"justify\">Payment can be made via this secure link:</p>
		  <p align=\"justify\"><a href=\"http://".SITE_NAME."/payment.php?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;extprice=$extPrice&amp;mainlogowebid=$mainLogoWebId\">http://".SITE_NAME."/payment.php</a></p>
		  <p align=\"justify\">If you have made payment already then please feel free to ignore this  email. We would have successfully received your payment. We would have already  been notified via our internal system.</p>
		  <p align=\"justify\">Our designers will get straight to work on your requests. There is no  need to do anything further.</p>
		  <p align=\"justify\">However, if you have yet to make payment, please do so by paying on the  given payment link. </p>
		  <p align=\"justify\">We wish to reassure you that your designs will be fully custom-made, and,  unlike most firms, you are entitled to a <strong>100%  money back-guarantee</strong>. You can only win.</p>
		  <p align=\"justify\">Further, we have a team of professional &ldquo;in-house&rdquo; designers and all  orders are entitled to unlimited redraws and revisions.</p>
		  <p align=\"justify\">Here is the payment link again for you.</p>
		  <p align=\"justify\">
		  <a href=\"http://".SITE_NAME."/payment.php?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;extprice=$extPrice&amp;mainlogowebid=$mainLogoWebId\">http://".SITE_NAME."/payment.php</a>
		  </p>
		  <p>Remember we would have received your logo order specification, and this  would have been automatically saved in our system. There is no need to place an  order again. Once payment is made, then our staff will automatically be  notified and allocate your order to our designers.</p>
		  <p align=\"justify\">If you wish to ask any questions, you can do so by replying to this  email.</p>
		  <p align=\"justify\">With every business success.</p><br/>
		  <p align=\"justify\">		  Customer Services<br/>
		 Logo Design Guarantee<br/>
		  We Guarantee the Lowest Prices and the Best Money back Guarantee<br/>
		  Info@".SITE_NAME."</p>
		  <p align=\"justify\">P.S.  We also offer additional design services such as web site design, brochure  design and company start-up design packages. </p>
		  <p align=\"justify\">For  more information click here:&nbsp;&nbsp;&nbsp; <a href=\"http://".SITE_NAME."\">http://".SITE_NAME."/web-site-design/webdesigner-limited-sale/index.php</a>. </p></td>
  </tr>
</table>";
					 

?>
