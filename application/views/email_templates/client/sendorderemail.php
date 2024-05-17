<?php
      
    $brouchure_package = '';
	$web_package = '';
	$option_package = '';
   
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
	
	$row='23';
	$printing = array();
	for($i=1;$i<$row-2;$i++)
	{		
    	$opt='opt'.$i;
    	$extraopt='extraopt'.$i;
    	if(@$_SESSION[$opt]!="0.00" && @$_SESSION[$extraopt]!="")
    	{
    	$printing[] = @$_SESSION[$extraopt];	
    	
    	}	
	}
    
    $printing_services = implode(',',$printing);
		
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
	
	
	
			//web packages
	if(@$_SESSION['web']==Budget_Website_Price)
		{
		$web_package = "Budget website 1 page.";
		$web_pound = Budget_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$multi = Budget_Website_Price;
		$pound = "GBP";
		}
	if(@$_SESSION['web']==Gold_Website_Price)
		{
		$web_package = "Gold website up to 5 pages.";
		$web_pound = Gold_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$multi = Gold_Website_Price;
		$pound = "GBP";
		}
	if(@$_SESSION['web']==Elite_Website_Price)
		{
		$web_package = "Elite website  up to 12 pages.";
		$web_pound = Elite_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$multi = Elite_Website_Price;
		$pound = "GBP";
		}
		//packages brouchure
	if(@$_SESSION['brouchure']==Brochure_Tri_Fold_Price)
		{
		$brouchure_package = "Tri-fold double-sided.";
		$brouchure_pound = Brochure_Tri_Fold_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$multi = Brochure_Tri_Fold_Price;
		$gdp = "GBP";
		}
		if(@$_SESSION['brouchure']==Brochure_4_Page_Price)
		{
		$brouchure_package = "4 Page exec.";
		$brouchure_pound = Brochure_4_Page_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$multi = Brochure_4_Page_Price;
		$gdp = "GBP";
		}
		if(@$_SESSION['brouchure']==Brochure_8_Page_Price)
		{
		$brouchure_package = "Brochure up to 8 pages..";
		$brouchure_pound = Brochure_8_Page_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$multi = Brochure_8_Page_Price;
		$gdp = "GBP";
		}
	/*	//Packages web_gold
		if(@$_SESSION['web_gold']==Gold_Website_Price)
		{
		$g2s_web_gold_package = "Start_Up_Gold_Package";
		$g2s_web_gold_price = Gold_Website_Price;
		$web_gold_package = "Start-up Gold Package";
		$web_gold_pound = Gold_Website_Price;
		$web_gold_brac_start = "(";
		$web_gold_brac_close = ")";
		$multi = Gold_Website_Price;
		$bgp = "GBP";
		}
		//Packages web_elite
		if(@$_SESSION['web_elite']==Elite_Website_Price)
		{
		$g2s_web_elite_package = "Start_Up_Elite_Package";
		$g2s_web_elite_price = Elite_Website_Price;
		$web_elite_package = "Start-up Elite Package.";
		$web_elite_pound = Elite_Website_Price;
		$web_elite_brac_start = "(";
		$web_elite_brac_close = ")";
		$multi = Elite_Website_Price;
		$gbp = "GBP";
		}*/
		//packages option
        
		if(@$_SESSION['option']==EXPRESS_DELIVERY)
		{
			$option_package = "24 hours delivery";
			$option_pound = EXPRESS_DELIVERY;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$gbp = "GBP";
		}

		if(@$_SESSION['option']==BLACK_N_WHITE)
		{
			$option_package = "Black/White logo design";	
			$option_pound = BLACK_N_WHITE;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$multi = BLACK_N_WHITE;
			$gbp = "GBP";
		}

		if(@$_SESSION['option']==BOTH_SERVICES)
		{
			$option_package = "Both order service";	
			$option_pound = BOTH_SERVICES;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$multi = BOTH_SERVICES;
			$gbp = "GBP";
		}



						 
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
        <td>Brochure</td>
        <td>".$brouchure_package."</td>
      </tr>
      <tr>
        <td>Web Design </td>
        <td>".$web_package."</td>
      </tr>
      <tr>
        <td>Logo Package </td>
        <td>".$package."</td>
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

echo $mailbody;
					 

?>
