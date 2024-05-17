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
window.location='http://www.logodesignguarantee.com/contact_import/import.php?importype=import&gmail=import';
clearInterval(detailsWindowTimer); //stop the timer
}
}
function OpenDetailsWindow()
{
var url='https://accounts.google.com/o/oauth2/auth?client_id=365554168779-343uq9ltkvl2up9aa3324fjcill1dsqk.apps.googleusercontent.com&redirect_uri=http://www.logodesignguarantee.com/contact_import/oauth.php&scope=https://www.google.com/m8/feeds/ https://www.googleapis.com/auth/userinfo.profile&response_type=code&max_auth_age=0';
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
window.location='http://www.logodesignguarantee.com/contact_import/import.php?importype=import&hotmail=import';
clearInterval(detailsWindowTimer2); //stop the timer
}
}
function OpenDetailsWindow2()
{
var url='https://login.live.com/oauth20_authorize.srf?client_id=00000000440F6BCF&scope=wl.basic,wl.contacts_emails&response_type=code&redirect_uri=http://www.logodesignguarantee.com/contact_import/hotmailoauth.php';

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

<!--------All Checkbox Checked and Unchecked Script------------>
<script>
checked=false;
function checkedAll (check__) {
	var aa= document.getElementById('check__');
	 if (checked == false)
          { //alert('1');
           checked = true;
          }
        else
          {//alert('2');
          checked = false;
          }
	for (var i =0; i < aa.elements.length; i++) 
	{
	 aa.elements[i].checked = checked;
	}
      }
function uncheckAll(unchecked)
	{
		if(unchecked==false)
		{ //alert('3');
		document.all_checkbox.checked_.checked=false;
		}
                else{ //alert('4');
                document.all_checkbox.checked_.checked=true;    
                }
	}      
</script>

<?php
include 'db_connect.php';

//echo '<pre>';print_r($_GET['all_logos']);
$select1 = mysql_query("select * from tbl_designers_post_orders where logo_web_id='".$_GET['logoWebId']."' order by submit_date desc");
$logo_samples = mysql_query("SELECT * from tbl_logo_samples where logo_web_id = ".$_GET['logoWebId']."");

$row_data = array();
while($row = mysql_fetch_array($select1)){
    if(!empty($row['file_one'])){
    $row_data[] = $row['file_one'];
    }
    if(!empty($row['file_two'])){
    $row_data[] = $row['file_two'];
    }
    if(!empty($row['file_three'])){
    $row_data[] = $row['file_three'];
    }
    if(!empty($row['file_four'])){
    $row_data[] = $row['file_four'];
    }
    if(!empty($row['file_five'])){
    $row_data[] = $row['file_five'];
    }
    if(!empty($row['file_six'])){
    $row_data[] = $row['file_six'];
    }
    if(!empty($row['file_seven'])){
    $row_data[] = $row['file_seven'];
    }
    if(!empty($row['file_eight'])){
    $row_data[] = $row['file_eight'];
    }
    if(!empty($row['file_nine'])){
    $row_data[] = $row['file_nine'];
    }
    if(!empty($row['file_ten'])){
    $row_data[] = $row['file_ten'];
    }
    if(!empty($row['file_eleven'])){
    $row_data[] = $row['file_eleven'];
    }
    if(!empty($row['file_twelve'])){
    $row_data[] = $row['file_twelve'];
    }
    if(!empty($row['file_thirteen'])){
    $row_data[] = $row['file_thirteen'];
    }
    if(!empty($row['file_14'])){
    $row_data[] = $row['file_14'];
    }
    if(!empty($row['file_15'])){
    $row_data[] = $row['file_15'];
    }
}
if(!empty($logo_samples)){
while($row1 = mysql_fetch_array($logo_samples)){
    if(!empty($row1['sample_name']))
    $row_data[] = $row1['sample_name'];
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
<a class="aol" id="source-aol" href="aol.php" title="Aol"><img class="cs_import" src="images/social_icons/aol_icon1.png" height="100" />
    <p class="seal-image">Aol</p></a>
</div>

  </head>
  </html>