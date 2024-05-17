<?php
      
    $fname          = str_replace("'", " ", stripslashes(@$_SESSION['fname']));            
    $lname          = str_replace("'", " ", stripslashes(@$_SESSION['lname']));
    $company_name   = str_replace("'", " ", stripslashes(@$_SESSION['company_name'])); if(isset($_SESSION['reseller_id'])){$company_name .= ' - (R)'; }                      
    $phone_no       = str_replace("'", " ", stripslashes(@$_SESSION['phone_no']));            
    $email_id       = str_replace("'", " ", stripslashes(@$_SESSION['email_id']));
    $cmp_logo_name  = stripslashes(@$_SESSION['cmp_logo_name']);            
    $tagline        = stripslashes(@$_SESSION['tagline']);
    $business_detail= str_replace("'", " ", stripslashes(@$_SESSION['business_detail'])); 
    
    $m5_colors      = @$_SESSION['m5_colors'];
    $colors         = str_replace("'", " ", stripslashes(@$_SESSION['colors']));
    $m5_no_colors   = @$_SESSION['m5_no_colors'];
    $no_colors      = str_replace("'", " ", stripslashes(@$_SESSION['no_colors']));
               
    $idea_of_clint  = str_replace("'", " ", stripslashes(@$_SESSION['idea_of_clint']));            
    $contact_details= str_replace("'", " ", stripslashes(@$_SESSION['contact_details']));    
            
    $web            = (isset($_SESSION['web']))?$_SESSION['web']:"0";// This Session Contain the amount value of Web Package From Logo Order 
    $brouchure      = (isset($_SESSION['brouchure']))?$_SESSION['brouchure']:"0";// This Session Contain the amount value of Brouchure Package From Logo Order            
    $options_price  = (isset($_SESSION['options_price']))?$_SESSION['options_price']:"0";// First 3 option value(amount) in orderone page this value is not from order page
    
    $web_gold       = (isset($_SESSION['web_package']))?$_SESSION['web_package']:"";             
    $web_elite      = (isset($_SESSION['brouchure_package']))?$_SESSION['brouchure_package']:""; // this is not a web package, this is brouchure package and naming is also same in database i.e. web_elite field is used in database too            
    $package        = @$_SESSION['logo_package'];
    $dollar         = 0;   // currently not using in ldg sites but this is the logo package price converted into dollar amount of UK site 
    $price          = $_SESSION['logo_price'];  
    $file           = @$_SESSION['file'];                  
    
    $submit_date    = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
    $ip             = $_SERVER['REMOTE_ADDR'];
    
    $printing_services = '';
    
    for($i=1; $i<=20; $i++){
        if(isset($_SESSION['options'.$i])){
            $printing_services .= $_SESSION['options'.$i.'_price'].", ";
        }
    }
    
    $color=explode(",",$m5_colors);
	$colorno=explode(",",$m5_no_colors);


						 
$mailbody="<table width=\"590\" border=\"1\"  align=\"center\" >
      <tr>
        <td width=\"301\" colspan=\"2\"><table width=300 border=\"1\" align=\"center\" >
          <tr>
            <td width=112>From</td>
            <td width=178>".ORDERED_SITE."</td>
          </tr>
		  <tr>
            <td>IP</td>
            <td>".$ip."</td>
          </tr>
		  <tr>
            <td>First Name</td>
            <td>".$fname."</td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td>".$lname."</td>
          </tr>
		  <tr>
        <td>Company Name</td>
        <td>".$company_name."</td>
      </tr>
          <tr>
            <td>Email </td>
            <td>".$email_id."</td>
          </tr>
          <tr>
            <td>Secondary Email</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>".$phone_no."</td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td>Brochure</td>
        <td>".$web_elite."</td>
      </tr>
      <tr>
        <td>Web Design </td>
        <td>".$web_gold."</td>
      </tr>
      <tr>
        <td>Logo Package </td>
        <td>".$package."</td>
  </tr>
	  <tr>
        <td>Extra Type </td>
        <td>".@$_SESSION['options']."</td>
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
