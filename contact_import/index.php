<?php include("top.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $websiteurl_gen; ?></title>
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $htmlcharset ?>"/>
<link href="stylesheets/font_styles_<?php echo $scriptskin ?>.css" rel="stylesheet" type="text/css"></link>
<link href="stylesheets/font_styles.css" rel="stylesheet" type="text/css"></link>
<script language="JavaScript">
function changesecuritycode()
{
	var antifloodcode = document.getElementById('antifloodcode');
	
	if (antifloodcode)
	{
		antifloodcode.src +='?'+ Math.round(Math.random()*100000);
	}
    document.getElementById('error').style.visibility='hidden';
	return false;
}
function submitenter_captcha(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   document.forms[0].submit();
   return false;
   }
else
   return true;
}

function upperCase(x)
{
   var y=document.getElementById(x).value;
   document.getElementById(x).value=y.toUpperCase();
}
</script>
<style type="text/css">
img, div { behavior:  url(/stylesheets/pngfix/iepngfix.htc) }
</style> 
</head>
<body>	
<noscript>
<!--<div class="warning">
<font style="font-family:Tahoma; size:15px; font-weight:bold; color:#CC3300 ">You must enable javascript to be able to run this application!</font>
</div>-->
</noscript>
<?php if($enablecaptcha=="1")  //begin captcha
{
unset($_SESSION['captchaok']);
//code ok
if(isset($_POST['send_code']))
{ 
if(strtoupper($_POST['code'])==strtoupper($_SESSION['verificationcode_public'])) // code ok
		{
		$_SESSION['captchaok']="yes";
		unset($_SESSION['verificationcode_public']);
		unset($_SESSION['error']);
		///redirection
		
			if($showaddressimport) //importer enabled
			{echo("<script>window.location='import.php'</script>");}
			else
			{
				if($showmanualimport) //manual
				{
				echo("<script>window.location='import.php?importype=manual'</script>");
				
				}
				else //file
				{
				echo("<script>window.location='import.php?importype=csvimport'</script>");
				}
			
			}
		}
}
?>
<div align="center">
<div class="topnavigation" style="padding-top:20px;font-size:13px;font-family:Tahoma;color:#CC0000; width:650px;" align="left"> 
</div>
<form name="submitcaptcha" method="post" action="index.php">
<table width="680" align="center" cellpadding="0" cellspacing="0" >
<tr>
<td></td>
<td height="50" colspan="2" align="left" class="texttop">
<b><?php echo $captcha_text ?></b>
</td>
</tr>

<tr>
<td width="17" height="60">&nbsp; </td>
<td width="649" align="left" class="importsucess_manual">
<?php echo $captcha_text2 ?>
</td>
<td width="12"></td>
</tr>
<tr>
<td height="50"></td>
<td align="left">
<input name="code" id="code" onkeyup="upperCase(this.id)" style="width:115px" type="text" class="inputbox" onFocus="style.borderColor='#FFEB70';" onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter_captcha(this,event)" maxlength="5">
<img src="includes/antiflood/imagine.php" alt="Security code" hspace="1"  vspace="2" align="absmiddle" id="antifloodcode" style="border:1px #444557 solid">
<img src="images/refreshcode.png" border="0" align="absmiddle" alt="Refresh the code" title="Reload security code" onClick="changesecuritycode();" style="cursor:pointer ">
</td>
<td></td>
</tr>
<tr>
<td height="20"></td>
<td align="left">
<span id="error" style="visibility:hidden" class="message_error_captcha">Sorry, the code was incorrect. Please try again.</span></td>
<td></td>
</tr>
<tr>
<td height="28"></td>
<td align="left">
<input value="1" name="send_code" type="hidden">
<input value="<?php echo $captcha_button ?>" type="submit" name="captcha_button"  class="submit" style="MIN-WIDTH:120px; padding-bottom:3px; padding-top:3px" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'"></td>
<td></td>
</tr>
<tr>
<td></td>
<td height="20" class="topnavigation">&nbsp;</td>
<td></td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_POST['send_code']))
{ 
	if(trim($_POST['code'])=="") //incorrect code
	{
	echo("<script>document.getElementById('error').style.visibility='visible';document.getElementById('error').innerHTML='".$captcha_error."';document.forms[0].elements[0].focus();</script>");
	unset($_SESSION['error']);
	}

	if(strtoupper($_POST['code'])!=strtoupper($_SESSION['verificationcode_public'])) //incorrect code
	{
	echo("<script>document.getElementById('error').style.visibility='visible';document.getElementById('error').innerHTML='".$captcha_error."';document.forms[0].elements[0].focus();</script>");
	unset($_SESSION['error']);
	}
	
} //end captcha
}
else 
{
if($showaddressimport) //importer enabled
			/*{echo("<script>window.location='import.php?c_id=".$_GET['c_id']."'</script>");}*/
			{echo("<script>window.location='import.php'</script>");}
			else
			{
				if($showmanualimport) //manual
				{
				echo("<script>window.location='import.php?importype=manual'</script>");
				
				}
				else //csv
				{
				echo("<script>window.location='import.php?importype=csvimport'</script>");
				}
			
			}
}
?>
</body>
</html>
