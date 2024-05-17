<?php
	
$fullName       = stripslashes(@$_SESSION['fullName']);
$fullName       = str_replace("'", " ", $fullName);

$orgName        = stripslashes(@$_SESSION['orgName']);
$orgName        = str_replace("'", " ", $orgName);

$street         = stripslashes(@$_SESSION['street']);
$street         = str_replace("'", " ", $street);

$city           = stripslashes(@$_SESSION['city']);
$city           = str_replace("'", " ", $city);

$state          = stripslashes(@$_SESSION['state']);
$state          = str_replace("'", " ", $state);

$zipOrPostCode  = stripslashes(@$_SESSION['zipOrPostCode']);
$zipOrPostCode  = str_replace("'", " ", $zipOrPostCode);

$country        = stripslashes(@$_SESSION['country']);
$country        = str_replace("'", " ", $country);

$citizenship    = stripslashes(@$_SESSION['citizenship']);
$citizenship    = str_replace("'", " ", $citizenship);

$domicile       = stripslashes(@$_SESSION['domicile']);
$domicile       = str_replace("'", " ", $domicile);

$emailAddress   = stripslashes(@$_SESSION['emailAddress']);
$emailAddress   = str_replace("'", " ", $emailAddress);

$aboutYourWork  = stripslashes(@$_SESSION['aboutYourWork']);
$aboutYourWork  = str_replace("'", " ", $aboutYourWork);

$natureOfWork   = stripslashes(@$_SESSION['natureOfWork']);
$natureOfWork   = str_replace("'", " ", $natureOfWork);

$titleOfWork    = stripslashes(@$_SESSION['titleOfWork']);
$titleOfWork    = str_replace("'", " ", $titleOfWork);

$setFile        = stripslashes(@$_SESSION['setFile']);
$setFile        = str_replace("'", " ", $setFile);

$specialReq     = stripslashes(@$_SESSION['specialReq']);
$specialReq     = str_replace("'", " ", $specialReq);

$packageName    = @$_SESSION['copyright_package']; 
    					 
$mailbody="<table width=\"590\" border=\"1\"  align=\"center\" >
      <tr>
        <td width=\"301\" colspan=\"2\">
        <table width=300 border=\"1\" align=\"center\" >
          <tr>
            <td width=112>From</td>
            <td width=178>".ORDERED_SITE."</td>
          </tr>
		  <tr>
            <td>IP</td>
            <td>".$_SERVER['REMOTE_ADDR']."</td>
          </tr>
		  <tr>
            <td>Full Name</td>
            <td>".$fullName."</td>
          </tr>
          
		  <tr>
        <td>Organization Name</td>
        <td>".$orgName."</td>
      </tr>
      <tr>
        <td>Copyright Package</td>
        <td>".$packageName."</td>
      </tr>
          <tr>
            <td>Street </td>
            <td>".$street."</td>
          </tr>
          <tr>
            <td>City</td>
            <td>".$city."</td>
          </tr>
          <tr>
            <td>State</td>
            <td>".$state."</td>
          </tr>
          
          <tr>
        <td>Zip / Postal</td>
        <td>".$zipOrPostCode."</td>
      </tr>
      <tr>
        <td>Country </td>
        <td>".$country."</td>
      </tr>
      <tr>
        <td>Citizenship </td>
        <td>".$citizenship."</td>
  </tr>
	  <tr>
        <td>Domicile </td>
        <td>".$domicile."</td>
	  </tr>
	  <tr>
        <td>Email</td>
        <td>".$emailAddress."</td>
	  </tr>
      <tr>
        <td>About Your Work</td>
        <td>".$aboutYourWork."</td>
      </tr>
      <tr>
        <td>Nature of Work</td>
        <td>".$natureOfWork."</td>
      </tr>
      <tr>
        <td>Title of Work</td>
        <td>".$titleOfWork."</td>
      </tr>       
      <tr>
        <td>Attachment</td>
        <td>".$setFile."</td>
      </tr>
	  <tr>
        <td>Special req </td>
        <td>".$specialReq."</td>
      </tr>
        </table></td>
      </tr>
      
        
</table>" ;

echo $mailbody;
					 

?>
