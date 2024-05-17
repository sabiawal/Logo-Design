<?php
require_once("includes/db_connect.php");
require dirname(__FILE__).'/lib/Yahoo.inc';
// debug settings
//error_reporting(E_ALL | E_NOTICE); # do not show notices as library is php4 compatable
//ini_set('display_errors', true);
YahooLogger::setDebug(true);
YahooLogger::setDebugDestination('LOG');
// use memcache to store oauth credentials via php native sessions
//session_start();

define('OAUTH_CONSUMER_KEY', 'dj0yJmk9MW1WdEtsWG14VVpyJmQ9WVdrOVUwNUxUazlqTkhFbWNHbzlNVGsxTURRNU5ESTJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD01MQ--'); //Consumer Key
define('OAUTH_CONSUMER_SECRET', '3a86511407672a02dcf0dc7ffd33e871a6847109'); //Consumer Secret
define('OAUTH_DOMAIN', '1logo.biz'); //App Domain
define('OAUTH_APP_ID', 'SNKNOc4q');
if(array_key_exists("logout", $_GET)) {
  // if a session exists and the logout flag is detected
  // clear the session tokens and reload the page.
  YahooSession::clearSession();
  //unset($_SESSION['contact_yahoo']);
  header("Location: iframe_load.php");
}
if(array_key_exists("cancel", $_GET)) {
    //echo 'suman';
    //print_r($_GET); die;
  // if a session exists and the logout flag is detected
  // clear the session tokens and reload the page.
  YahooSession::clearSession();
  //unset($_SESSION['contact_yahoo']);
  //header("Location: http://www.1logo.biz/ldg_new/client_panel/send_to_friends.php");
  header("Location: iframe_load.php");
}
// check for the existance of a session.
// this will determine if we need to show a pop-up and fetch the auth url,
// or fetch the user's social data.
$hasSession = YahooSession::hasSession(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, OAUTH_APP_ID);
if($hasSession == FALSE) {
  // create the callback url,
  $callback = YahooUtil::current_url()."?in_popup";
//$sessionStore = new NativeSessionStore();
  // pass the credentials to get an auth url.
  // this URL will be used for the pop-up.
  $auth_url = YahooSession::createAuthorizationUrl(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, $callback);
 
}
else {
  // pass the credentials to initiate a session
  $session = YahooSession::requireSession(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, OAUTH_APP_ID);
  // if the in_popup flag is detected,
  // the pop-up has loaded the callback_url and we can close this window.
  if(array_key_exists("in_popup", $_GET)) {
    close_popup();
    exit;
  }
  // if a session is initialized, fetch the user's profile information
  if($session) {
    // Get the currently sessioned user.
    $users = $session->getSessionedUser();
    // Load the profile for the current user.
    $profile = $users->getProfile();
	
 
  }
}
/**
 * Helper method to close the pop-up window via javascript.
 */
function close_popup() {

echo '<script type="text/javascript">
		window.close();
	 </script>';

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href="css/my_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jscript/address_books.js"></script>
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
var emails = '<?php echo $_GET['user_email'];?>';
var logowebid = '<?php echo $_GET['logoWebId'];?>';
//alert(emails);
window.location='http://www.1logo.biz/ldg_new/contact_import/import.php?importype=import&gmail=import&sender_email='+emails+'&logoWebId='+logowebid+'';
clearInterval(detailsWindowTimer); //stop the timer
}
}
function OpenDetailsWindow()
{
var url='https://accounts.google.com/o/oauth2/auth?client_id=365554168779-0vnaml3bc6vsl9aapveucgfbkmd4su8f.apps.googleusercontent.com&redirect_uri=http://www.1logo.biz/ldg_new/contact_import/oauth.php&scope=https://www.google.com/m8/feeds/ https://www.googleapis.com/auth/userinfo.profile&response_type=code&max_auth_age=0';
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
<?php 
//echo $_GET['user_email'].'<br>'; 
//echo $_GET['logoWebId'];
//die;
?>
<script language="javascript">
var detailsWindowTimer2;
var detailsWindow2;

function WatchDetailsWindowForClose2()
{
if (!detailsWindow2 || detailsWindow2.closed)
{
window.location='http://www.1logo.biz/ldg_new/contact_import/import.php?importype=import&hotmail=import&sender_email=<?php echo $_GET['user_email'];?>&logoWebId=<?php echo $_GET['logoWebId'];?>';
clearInterval(detailsWindowTimer2); //stop the timer
}
}
function OpenDetailsWindow2()
{
var url='https://login.live.com/oauth20_authorize.srf?client_id=00000000400F490D&scope=wl.basic,wl.contacts_emails&response_type=code&redirect_uri=http://www.1logo.biz/ldg_new/contact_import/hotmailoauth.php';

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


<!--------Tooltip Showing Script------------>
<script>
    $(function(){
$('.tooltip_display').click(function() {
    var $this = $(this);
    $("#background").css({
        "opacity": "0",
        "hook": "topleft"
    }).fadeIn("slow");
    $("#large").html(function() {
        $('.ttip').css({
            left: $this.position() + '20px',
            top: $this.position() + '50px'
        }).show(500)
    }).fadeIn("slow");
});
$('.close-btn').on('click', function() {
    $('.ttip').hide(500);
    $("#background").fadeOut("slow");
    $("#large").fadeOut("slow");
});
$('.ttip').on('click', function() {
    $('.ttip').hide(500);
    $("#background").fadeOut("slow");
    $("#large").fadeOut("slow");
});
$("#large").click(function() {
    $(this).fadeOut();  
});
$('.tooltip_display_bottom').click(function() {
			
			var $this = $(this);
			$("#background").css({
				"opacity": "0",
				"hook": "topleft"
			}).fadeIn("slow");
			$("#large_bottom").html(function() {
				$('.ttip_bottom').css({
					left: $this.position() + '20px',
					top: $this.position() + '50px'
				}).show(500)
			}).fadeIn("slow");
		});
		$('.close-btn').on('click', function() {
			$('.ttip_bottom').hide(500);
			$("#background").fadeOut("slow");
			$("#large_bottom").fadeOut("slow");
		});
		$('.ttip_bottom').on('click', function() {
			$('.ttip_bottom').hide(500);
			$("#background").fadeOut("slow");
			$("#large_bottom").fadeOut("slow");
		});
		$("#large_bottom").click(function() {
			$(this).fadeOut();  
		});
});
</script>

<!--------ON Hover Change opacity Script------------>
<script>
$(function(){
$('.selct-deselect').click(function(){
		var i;
		var count = $('.count_checkbox').attr('id');
		for( i=0;i<count;i++){
			if ($('#checked_all').is(":checked"))
			{
				$('#hide'+i).show();
			}else{
				$('#hide'+i).hide();
			}
		}
	});
        
$('.imp_photo_w').click(function(){
    names = $(this).attr('name');
    if ($('#'+names).is(":checked"))
        {
            $('#hide'+names).show();
            $('.show-text').hide();
            $(this).append('<label class="show-text1" for='+names+'>Click to deselect</label>');
        }else{
            $('#hide'+names).hide();
            $('.show-text1').hide();
            $(this).append('<label class="show-text" for='+names+'>Click to select</label>');            
        }
});

$('.imp_photo_w').mouseenter(function(){
    names = $(this).attr('name');
    if ($('#'+names).is(":checked"))
        {
            $(this).append('<label class="show-text" for='+names+'>Click to deselect</label>');
        }else
        {
            $(this).append('<label class="show-text1" for='+names+'>click to select</label>');
        }
	});
	$('.imp_photo_w').mouseleave(function() {
		$('.show-text').remove();
                $('.show-text1').remove();
    });
    $('.imp_photo_w1').mouseenter(function(){
                $('.show-text').remove();
		$('.show-text1').remove();
    });
    $('.imp_photo_w1').mouseleave(function() {
		$('.show-text').remove();
                $('.show-text1').remove();
    });
});
</script>

<!--------Limiting contacts show opacity Script------------>
<script type="text/javascript">
$(function(){
var currentshow = 11;
$('.photo_show').each(function(){
                $('.photo_show').eq(currentshow).hide();
                currentshow++;
});
var showcurrent1=1;
$('#show_all').click(function(){
   $('.photo_show_').hide();
   $('.photo_show_next').show();
   $('.imp_photo_h').hide();
   $('.contact-name1').hide();
   $('.photo_show').each(function(){
        $('.photo_show').eq(showcurrent1).slideDown(300);
        $('p.imp_photo_h').css('display','block');
        showcurrent1++;
   }); 
});
});
</script>

<script type="text/javascript">
$(function(){
});
$('.photo_show').each(function(){
                $('.photo_show').eq(currentshow).hide();
                currentshow++;
});
</script>

<?php
include 'db_connect.php';
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

<?php  if($hasSession && $profile) {
    foreach($profile->emails as $emails) 
		{ 
			if(array_key_exists('handle',$emails)){
				$loginemail = $emails->handle;
			}
			else{
				 $loginemail= '';
			}; 
		}     
?>
<?php
//echo "<pre>"; print_r($profile);
        if($profile->status->message != "") {
          $statusDate = date('F j, y, g:i a', strtotime($profile->status->lastStatusModified));
          //echo sprintf("<p><strong>&#8220;</strong>%s<strong>&#8221;</strong> on %s</p>", $profile->status->message, $statusDate);
        }

        echo "<p><a href=\"?logout\">Logout</a></p>"; ?>
        
<!--        <ul  class="yh_frnds">-->
<?php	
$users = $session->getSessionedUser();
  $contacts = $users->getContacts(0,400);
  $i = 0;
  $first_name = array();
  $yahooid = array();
  $profile_image = array();
          if($contacts->contacts->total != 0){			 			 				
                  foreach ($contacts->contacts->contact as $contact)
                  {			
                          foreach ($contact->fields as $field)
                          {	
                          if (isset($field->profile))
                                {
                              foreach($field->profile as $flds){ 
                                        $sumanss = $flds->imageUrl; 
                                        $profile_image[$i] = $sumanss;                                       
                                    }                                   
                                }
                                  if ($field->type == 'yahooid')
                                  {
                                          $email  = $field->value;
                                          $domain = strstr($email, '@');
                                          if($domain==''){
                                                  $email = $email.'@yahoo.com';
                                          } 
                                          $yahooid[$i] = $email;                                      
                                  }
                                  
                                if ($field->type == 'name')
                                {							
                                        $first_name[$i] = $field->value->givenName.' '.$field->value->familyName;							
                                }   
                                if(array_key_exists('profile',$field)){
							$img_arr[$i] = $field->profile->image->imageUrl;
							$img_height[$i] = $field->profile->image->height;
						}
                          }$i++; 
                  }	
                          foreach($yahooid as $k=>$v){
                              for($i=0;$i<count($v);$i++){
                                        //mysql_query('INSERT INTO contact_import (email) VALUES ("'.$v.'")');
                                        }
                                  if( !array_key_exists($k,$first_name)){

                                          $first_name[$k] = 'No Name';
                                  }
                          }				
                          foreach($first_name as $ky=>$vy){
                                  if( !array_key_exists($ky,$yahooid)){

                                          unset($first_name[$ky]);
                                  }
                          }
                          foreach($first_name as $imgkey=>$imgval){
                                  if(!array_key_exists($imgkey,$img_arr)){
                                            $img_arr[$imgkey] = 'Image Unavailable';
                                  }
                          }
                   ksort($first_name);
                   $imported_email = array_values($yahooid);
                   $imported_name = array_values($first_name);	
                   //$arr = array_combine($imported_email,$imported_name);
                  ?>
<form name="all_checkbox" id="check__" method="post">
<div class="contact-import">
<div class="sss">     
<span class="connect_btn">Invite!</span> 
<div class="how-work">
<a href="#" class="tooltip_display" style=" border-bottom: 1px dotted; font-family: Tahoma,Verdana,Tahoma,Arial; text-decoration: none; font-size: 13px;">How does it work?</a>
</div>
<div id="background"></div>
</div>
<style>
.error{
    background-color: #FAFDDF;
    border: 1px solid #339933;
    color: #F03838;
    display: inline;
    font-family: times new roman;
    font-size: 15px;
    font-style: italic;
    margin-left: 5px;
    padding: 5px;
    text-align: center;
    }    
</style>    
    <div style="margin:2px;" align="center" id="import-error"></div>
<div id="large">
<div class="ttip">
    <div class="contents"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. 
This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 
</div>
</div>
</div>
<div class="selection" style="font-size: 13px; margin-top: 10px; padding-left: 15px;"> 
    <label class="selct-deselect"> 
            <input type="checkbox" name="checked_" id="checked_all" checked="checked" style="display: none;" onclick='checkedAll(check__);'/>
            <span style="cursor:pointer;text-decoration: underline; font-family: Tahoma,Verdana,Tahoma,Arial;color: #9E9E9E;">Select All / None</span> 
    </label> 
</div>
    <input type="hidden" name="sender_email" id="sumans" value="<?php echo $_GET['user_email'];?>"/>
    <input type="hidden" name="logo_web_id" id="logoWedId" value="<?php echo $_GET['logoWebId'];?>"/>
    <?php for($i=0;$i<count($row_data);$i++){?>
    <input type="hidden" name="all_logos[]" id="all_logos" class="all_l" value="<?php echo $row_data[$i];?>"/>
    <?php } ?>
 
<!--<div class="show-contact">-->
<!--    <div class="all-contact">-->
<?php
$i = 0;
foreach($imported_email as $key=>$ymail){
    
        if(array_key_exists($key,$imported_name)){
                $yname = $imported_name[$key];
        }
        if(array_key_exists($key,$img_arr)){
                $imgname = $img_arr[$key];
        }
        //echo count($imported_email);
if($i<11){        
?>        
<div class="photo_show">
    <div class="imp_photo_w" id="<?php echo ucwords($yname).'<br>'.$ymail;?>" desc="<?php echo $ymail;?>" name="<?php echo $i;?>">
<?php 
if($imgname == 'Image Unavailable' || $imgname == ''){ ?>
    <input type="checkbox" name="checked[]" class="chked" value="<?php echo $ymail;?>" id="<?php echo $i;?>" value="<?php echo ucwords($yname).'<br>'.$ymail;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
    <a>
        <label for="<?php echo $i;?>">
            <img width="72" id="hide_" class="all_imgs" height="72" border="0" src="avatar-pic.gif" alt=""/>
        </label></a>
    <a>
        <label for="<?php echo $i;?>">
            <img width="72" id="hide<?php echo $i?>" class="all_imgs_" height="72" name="<?php echo ucwords($yname).'<br>'.$ymail;?>" style="margin-top:-77px; z-index:2; margin-top: -76px\9; position: relative;" border="0" src="imp_photo.png" alt=""/>
        </label></a>
<?php }else{?>
    <input type="checkbox" name="checked[]" class="chked" value="<?php echo $ymail;?>" value="<?php echo $ymail;?>" id="<?php echo $i;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
<a>
    <label for="<?php echo $i;?>">
<img width="72" id="hide_1" height="72" name="<?php echo ucwords($yname).'<br>'.$ymail;?>" border="0" src="<?php echo $imgname;?>" alt=""/>
    </label></a>
<a>
    <label for="<?php echo $i;?>">
        <img width="72" id="hide<?php echo $i?>" height="72" name="<?php echo ucwords($yname).'<br>'.$ymail;?>"  style="margin-top:-77px; z-index:2; margin-top: -76px\9; position: relative;" border="0" src="imp_photo.png" alt=""/></label>
</a>

<?php }?> 
</div>    
<div id="show-email">
<div class="tooltip_">
<div class="contents_"><?php echo $ymail;?></div>
</div>
</div>    
    <div class="contact-name" style="margin-bottom: 5px;line-height: 26px;"> 
<p class="imp_photo_h" style="font-size: 11px; font-family: Tahoma,Verdana,Tahoma,Arial; color: #848484; margin:0px; padding:0px;line-height: 26px; width: 72px;"><?php echo substr(ucwords($yname),0,12);?>...</p>    
</div> 
</div>
        
        <?php
        }
        else if($i==11){
            ?>         
<div class="photo_show_">
<div class="imp_photo_w1">
<a href="#" class="tooltip" name="Click to view further contacts">
    <img width="72" id="show_all" name="Click to Show Further Contacts" height="72" border="0" src="all_users1.jpg" alt=""/>
    </a> 
</div>
<div class="contact-name1"> 
<p class="imp_photo_h" style="font-size: 11px; font-family: Tahoma,Verdana,Tahoma,Arial; color: #848484; margin:0px; padding:0px;line-height: 26px; width: 72px;">Others</p>    
</div>    
</div>        
        <?php
        }
        else{
?>
        <div class="photo_show_next" desc="<?php echo ucwords($yname).'<br>'.$ymail;?>" style="display: none;">
            <div class="imp_photo_w" id="<?php echo ucwords($yname).'<br>'.$ymail;?>" desc="<?php echo $ymail;?>" name="<?php echo $i;?>">
<?php 
if($imgname == 'Image Unavailable' || $imgname == ''){ ?>
    <input type="checkbox" name="checked[]" class="chked" value="<?php echo $ymail;?>" id="<?php echo $i;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
    <a>
        <label for="<?php echo $i;?>">
            <img width="72" id="hide_" class="all_imgs" height="72" border="0" src="avatar-pic.gif" alt=""/>
        </label></a>
    <a>
        <label for="<?php echo $i;?>">
            <img width="72" id="hide<?php echo $i?>" class="all_imgs_" height="72" name="<?php echo ucwords($yname).'<br>'.$ymail;?>" style="margin-top:-77px; z-index:2; margin-top: -76px\9; position: relative;" border="0" src="imp_photo.png" alt=""/>
        </label></a>
<?php }else{?>
<input type="checkbox" name="checked[]" class="chked" value="<?php echo $ymail;?>" id="<?php echo $i;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
<a>
    <label for="<?php echo $i;?>">
<img width="72" id="hide_1" height="72" name="<?php //echo ucwords($yname).'<br>'.$ymail;?>" border="0" src="<?php echo $imgname;?>" alt=""/>
    </label></a>
<a>
    <label for="<?php echo $i;?>">
        <img width="72" id="hide<?php echo $i?>" height="72" name="<?php echo ucwords($yname).'<br>'.$ymail;?>"  style="z-index:2;margin-top:-77px; margin-top: -76px\9; position: relative;" border="0" src="imp_photo.png" alt=""/></label>
</a>

<?php }?> 
</div>    
<div id="show-email">
<div class="tooltip_">
<div class="contents_"><?php echo $ymail;?></div>
</div>
</div>    
    <div class="contact-name" style="margin-bottom: 5px;"> 
<p class="imp_photo_h" style="font-size: 11px; font-family: Tahoma,Verdana,Tahoma,Arial; color: #848484; margin:0px; padding:0px;line-height: 26px; width: 72px;"><?php echo substr(ucwords($yname),0,12);?>...</p>    
</div> 
</div>        
<?php        
        }$i++;} ?> 
        <input type="text" id="<?php echo $i;?>"  class="count_checkbox" style="display:none;"/> 
<!--    </div>    -->
<!--</div>-->

<div class="selection" style="font-size: 13px; margin-top: 15px; margin-bottom: 10px; padding-left: 15px; padding-top: 10px; clear: left;"> 
    <label class="selct-deselect"> 
            <input type="checkbox" name="checked_" id="checked_all" checked="checked" style="display: none;" onclick='checkedAll(check__);'/>
            <span style="cursor:pointer;text-decoration: underline;color: #9E9E9E; font-family: Tahoma,Verdana,Tahoma,Arial;">Select All / None</span> 
    </label> 
</div>
<div class="sss1"> 
<span class="connect_btn">Invite!</span> 
<div class="how-work">
<a href="#" class="tooltip_display_bottom" style=" border-bottom: 1px dotted; font-family: Tahoma,Verdana,Tahoma,Arial; text-decoration: none; font-size: 13px;">How does it work?</a>
</div>
<div id="background"></div>
</div>
<div id="large_bottom">
<div class="ttip_bottom">
    <div class="contents1"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. 
This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 
</div>
</div>
</div>
<div id="account-type">  
    <div class="account-name"> 
        <span class="account-img"><i><?php echo $loginemail;?></i></span> 
         
    </div>   
</div>
</div>
</form>
<!--</form>-->
<?php } ?>
 <?php  } else{   ?>
<div class="adds"></div>
<div class="import-email">
<div class="error-mess" style="text-align:center; background-color: #FEFFD5; color: #FF0000; margin-left: 75px; text-align: center; width: 420px;"></div>
<a href="<?php echo $auth_url; ?>" id="yloginLink" title="Yahoo"><img class="cs_import1" src="images/social_icons/yahoo1.png" height="100" /><p class="seal-image">Yahoo</p></a>
<!--<a id="" href="javascript:void(0);" onClick="return YahooPopUpWindow();" title="Yahoo"><img class="cs_import1" src="images/social_icons/yahoo1.png" height="100" /><p class="seal-image">Yahoo</p></a>-->
<a href="javascript:void(0);" id="gloginLink2" onClick="return OpenDetailsWindow();" title="Gmail"><img class="cs_import1" src="images/social_icons/gmail1.png" height="100" /><p class="seal-image">Gmail</p></a>
<a href="javascript:void(0);" id="hloginLink2" onClick="return OpenDetailsWindow2();" title="Hotmail"><img class="cs_import1" src="images/social_icons/hotmail1.png" height="100" /><p class="seal-image">Hotmail</p></a>
<a class="aol" id="source-aol" href="aol.php?email=<?php echo $_GET['user_email'];?>&logoWebId=<?php echo $_GET['logoWebId'];?>" title="Aol"><img class="cs_import" src="images/social_icons/aol_icon1.png" height="100" />
  <p class="seal-image">Aol</p>
  </a><a id="source-outlook" href="javascript:void(0);" onClick="return cloudsponge.launch('outlook');" title="Outlook"><img class="cs_import" src="images/social_icons/outlook1.png" height="100" />
  <p class="seal-image">Outlook</p>
  </a><a id="source-plaxo" href="javascript:void(0);" onClick="return cloudsponge.launch('plaxo');" title="Plaxo"><img class="cs_import" src="images/social_icons/plaxo.png" height="100" />
  <p class="seal-image">Plaxo</p>
  </a>
<a id="" href="javascript:void(0);" onClick="return FacebookInviteFriends();" title="Facebook"><img class="cs_import" id="facebook" src="images/social_icons/facebook1.png" height="100" style="padding: 2px; cursor:pointer;" />
<p class="seal-image">Facebook</p></a>
</div>
<?php } ?>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
    <script>
     FB.init({ 
       appId:'589074007771406', cookie:true,
	   <!--username:'<?php //echo $_GET['email'];?>',-->
       status:true, xfbml:true 
     });
	function FacebookInviteFriends()
	{ 
		FB.ui({ method: 'apprequests', 
   		message: 'Please invite your friends to use logo vote system.'});
		$.post("ajax.php",
		{
			name:"<?php echo $_GET['email']?>"
		},
		function(data){
			//alert("Data: " + data + "\nStatus: " + status);
		});
	}
   </script>
   <script type="text/javascript">
      var Event = YAHOO.util.Event;
      var _gel = function(el) {return document.getElementById(el)};

      function handleDOMReady() {
        if(_gel("yloginLink")) {
          Event.addListener("yloginLink", "click", handleLoginClick);
        }
      }

      function handleLoginClick(event) {
        // block the url from opening like normal
        Event.preventDefault(event);

        // open pop-up using the auth_url
        var auth_url = _gel("yloginLink").href;
        PopupManager.open(auth_url,600,435);
      }

      Event.onDOMReady(handleDOMReady);
    </script>
  </head>
  </html>