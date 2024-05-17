<?php
include("../../includes/connection_inc.php");
include("../../includes/config.php");
include("../../includes/constant.php");
include("../../includes/common.php");
include("clientlogin.php");
include("designlogin.php");
include("includes/misc.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href="css/my_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.7.0/build/yahoo-dom-event/yahoo-dom-event.js" ></script>
<script src="jscript/popupmanager.js" type="text/javascript"></script>

<script language="javascript" src="jscript/jquery.min.js"></script>
<script language="javascript" src="jscript/contact_import.js"></script>
<script type="text/javascript" src="jscript/main.js"></script>

<!--gmail api code -->
 
<script language="javascript">
var detailsWindowTimer;
var detailsWindow;

function WatchDetailsWindowForClose()
{
if (!detailsWindow || detailsWindow.closed)
{
window.location='http://mycustomlogo.com/myaccount/contact_import/import.php?importype=import&gmail=import';
clearInterval(detailsWindowTimer); //stop the timer
}
}
function OpenDetailsWindow()
{
var url='https://accounts.google.com/o/oauth2/auth?client_id=365554168779-omd5kn47kvs8gmacpu669f3p1ghh1qqf.apps.googleusercontent.com&redirect_uri=http://mycustomlogo.com/myaccount/contact_import/oauth.php&scope=https://www.google.com/m8/feeds/ https://www.googleapis.com/auth/userinfo.profile&response_type=code&max_auth_age=0';
detailsWindow = window.open(url,'Gmail','height=560,width=560',true);
var ie=false;
if (navigator.appVersion.indexOf("MSIE") != -1)
{
	ie=true;
}

if(ie==false)
{

setTimeout(function()
{
	   var l=(screen.width - 500)/2;
       var t=(screen.height - 500)/2;
       detailsWindow.moveTo(l,t);
},50);
}
detailsWindow.focus();
detailsWindowTimer = setInterval("WatchDetailsWindowForClose()",500); 
}
</script>
<!--end gmail api code -->

<!--hotmail API code -->

<script language="javascript">
var detailsWindowTimer2;
var detailsWindow2;

function WatchDetailsWindowForClose2()
{
if (!detailsWindow2 || detailsWindow2.closed)
{
window.location='http://mycustomlogo.com/myaccount/contact_import/import.php?importype=import&hotmail=import';
clearInterval(detailsWindowTimer2); //stop the timer
}
}
function OpenDetailsWindow2()
{
var url='https://login.live.com/oauth20_authorize.srf?client_id=000000004C0F8E23&scope=wl.basic,wl.contacts_emails&response_type=code&redirect_uri=http://mycustomlogo.com/myaccount/contact_import/hotmailoauth.php';

detailsWindow2 = window.open(url,'Gmail','height=560,width=560',true);
var ie=false;
if (navigator.appVersion.indexOf("MSIE") != -1)
{
	ie=true;
}

if(ie==false)
{

setTimeout(function()
{
	   var l=(screen.width - 500)/2;
       var t=(screen.height - 500)/2;
       detailsWindow2.moveTo(l,t);
},50);
}
detailsWindow2.focus();
detailsWindowTimer2 = setInterval("WatchDetailsWindowForClose2()",500); 
}
</script>
<!--end hotmail API code --->

<?php
//print_r($_GET['array']);

//$row_data = array();
$select1 = mysql_query("SELECT * FROM tbl_samples WHERE `sample_order_id` = ".$_GET['logoWebId']." ANd `sample_latest` = '1'  ANd `sample_status` != '0' ANd `sample_status` != '2' ANd `sample_status` != '4'");
// WHERE `sample_order_id` = '6834' ANd `sample_latest` = '1'  ANd `sample_status` != '0' ANd `sample_status` != '2' ANd `sample_status` != '4'
while($sels = mysql_fetch_object($select1)){
    if(!empty($sels->sample_file1)){
    $row_data[] = $sels->sample_file1;
    }
    if(!empty($sels->sample_file2)){
    $row_data[] = $sels->sample_file2;
    }
    if(!empty($sels->sample_file3)){
    $row_data[] = $sels->sample_file3; 
    }
    if(!empty($sels->sample_file4)){
    $row_data[] = $sels->sample_file4;
    }
}
?>

<input type="hidden" name="sender_email" id="sumans" value="<?php echo $_GET['user_email'];?>"/>
<input type="hidden" name="logo_web_id" id="logoWedId" value="<?php echo $_GET['logoWebId'];?>"/>
<?php for($i=0;$i<count($_GET['array']);$i++){?>
<input type="hidden" name="all_logos[]" id="all_logos" class="all_l" value="<?php echo $_GET['array'][$i];?>"/>
<?php } ?>
<div class="adds"></div>
<div class="import-email">
<div class="error-mess" style="text-align:center; background-color: #FEFFD5; color: #FF0000; margin-left: 75px; text-align: center; width: 420px;"></div>
<a href="import_yahoo.php" id="yloginLink1" title="Yahoo"><img class="cs_import1" src="images/social_icons/yahoo1.png" height="100" /><p class="seal-image">Yahoo</p></a>
<a href="javascript:void(0);" id="gloginLink2" onClick="return OpenDetailsWindow();" title="Gmail"><img class="cs_import1" src="images/social_icons/gmail1.png" height="100" /><p class="seal-image">Gmail</p></a>
<a href="javascript:void(0);" id="hloginLink2" onClick="return OpenDetailsWindow2();" title="Hotmail"><img class="cs_import1" src="images/social_icons/hotmail1.png" height="100" /><p class="seal-image">Hotmail</p></a>
<a class="aol" id="source-aol" href="aol.php?email=<?php echo $_GET['user_email'];?>&logoWebId=<?php echo $_GET['logoWebId'];?>&all_logos=<?php print_r($_GET['array'])?>" title="Aol"><img class="cs_import" src="images/social_icons/aol_icon1.png" height="100" />
  <p class="seal-image">Aol</p>
<!--<a id="" href="javascript:void(0);" onClick="return FacebookInviteFriends();" title="Facebook"><img class="cs_import" id="facebook" src="images/social_icons/facebook1.png" height="100" style="padding: 2px; cursor:pointer;" />
<p class="seal-image">Facebook</p></a>-->
</div>

<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
    <script  type="text/javascript"> 
     FB.init({ 
       appId:'187873794706872', cookie:false, 
       status:true, xfbml:true 
     });
	function FacebookInviteFriends()
	{
		
		FB.ui({ method: 'apprequests',
   		message: 'Please invite your friends to use logo vote system.',
		title:'Logo vote system',
		},callback);	
	}
	
	function callback(response) {
        if (response.request && response.to) {
		alert('Thank you, your invitation has been successfully sent!!!');
            } else {
                alert('Sorry, you have cancelled your request!!!');
            }
			return false;
      }
</script>
  </head>
  </html>