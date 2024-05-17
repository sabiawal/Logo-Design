<?php  
///STATIC VARIABLES///

//YAHOO API - please see "readme.html file for details and change these values with yours

//define('OAUTH_CONSUMER_KEY', 'dj0yJmk9MW1WdEtsWG14VVpyJmQ9WVdrOVUwNUxUazlqTkhFbWNHbzlNVGsxTURRNU5ESTJNZy0tJnM9Y29uc3VtZXJzZWNyZXQmeD01MQ--'); //Consumer Key
//define('OAUTH_CONSUMER_SECRET', '3a86511407672a02dcf0dc7ffd33e871a6847109'); //Consumer Secret
//define('OAUTH_DOMAIN', '1logo.biz'); //App Domain
//define('OAUTH_APP_ID', 'SNKNOc4q');

define('OAUTH_CONSUMER_KEY', 'dj0yJmk9MnpVNU1KMFhLM3Y0JmQ9WVdrOVN6QkZSMkpsTjJrbWNHbzlOVE13T0RnNE56WXkmcz1jb25zdW1lcnNlY3JldCZ4PTZm'); //Consumer Key
define('OAUTH_CONSUMER_SECRET', 'b7b9d1934125a9ffead8150a355b2a2cb3eb5dba'); //Consumer Secret
define('OAUTH_DOMAIN', 'http://www.logodesignguarantee.com/client_panel/send_to_friends.php'); //App Domain
define('OAUTH_APP_ID', 'K0EGbe7i ');

//GMAIL API - please see "readme.html file for details and change these values with yours
$client_id='365554168779-343uq9ltkvl2up9aa3324fjcill1dsqk.apps.googleusercontent.com'; //Client ID
$client_secret='u9W4nzL323iub5U3on74NCL3'; //Client secret
$redirect_uri='http://www.logodesignguarantee.com/contact_import/oauth.php'; //Redirect URIs

///HOTMAIL API - please see "readme.html file for details and change these values with yours
//$hotmail_client_id='00000000400F2251';
//$hotmail_client_secret='PNF8Z0165C1ZBDDfyYd-B--2FFwzhwAC';
//$hotmail_redirect_uri='http://50dollarlogo.com/contact_import/hotmailoauth.php';

$hotmail_client_id='00000000440F6BCF';
$hotmail_client_secret='bRqz8AWHuLnpK2NVI0pFxyvDnPoibKuQ';
$hotmail_redirect_uri='http://www.logodesignguarantee.com/contact_import/hotmailoauth.php';


//unlock content section
$cookie_time_hours=24; // unlock content cookie duration in hours


/*temp directory path */
$tempdirpath="temp/"; //temp directory path - unix server - if you have windows server please modify the path to "temp" folder conforming to your install directory.
//Example for windows server :
//$tempdirpath="D\\domain\\invite\\temp\\"; 

///Variables only for CRON JOBS
//delay between sending emails
$email_delay_cron=0.1; //0.1 seconds



///end variables///

//fastmail array //do not delete. Only comment the services you want to disable
$fm_array=array();
$fm_array[0] = "fastmail.fm";
$fm_array[1]="fastmail.cn";
$fm_array[2]="fastmail.co.uk";
$fm_array[3]="fastmail.com.au";
$fm_array[4]="fastmail.es";
$fm_array[5]="fastmail.in";
$fm_array[6]="fastmail.jp";
$fm_array[7]="fastmail.net";
$fm_array[8]="fastmail.to";
$fm_array[9]="fastmail.us";
$fm_array[10]="123mail.org";
$fm_array[11]="airpost.net";
$fm_array[12]="eml.cc";
$fm_array[13]="fmail.co.uk";
$fm_array[14]="fmgirl.com";
$fm_array[15]="fmguy.com";
$fm_array[16]="mailbolt.com";
$fm_array[17]="mailcan.com";
$fm_array[18]="mailhaven.com";
$fm_array[19]="mailmight.com";
$fm_array[20]="ml1.net";
$fm_array[21]="mm.st";
$fm_array[22]="myfastmail.com";
$fm_array[23]="proinbox.com";
$fm_array[24]="promessage.com";
$fm_array[25]="rushpost.com";
$fm_array[26]="sent.as";
$fm_array[27]="sent.at";
$fm_array[28]="sent.com";
$fm_array[29]="speedymail.org";
$fm_array[30]="warpmail.net";
$fm_array[31]="xsmail.com";
$fm_array[32]="150mail.com";
$fm_array[33]="150ml.com";
$fm_array[34]="16mail.com";
$fm_array[35]="2-mail.com";
$fm_array[36]="4email.net";
$fm_array[37]="50mail.com";
$fm_array[38]="allmail.net";
$fm_array[39]="bestmail.us";
$fm_array[40]="cluemail.com";
$fm_array[41]="elitemail.org";
$fm_array[42]="emailcorner.net";
$fm_array[43]="emailengine.net";
$fm_array[44]="emailengine.org";
$fm_array[45]="emailgroups.net";
$fm_array[46]="emailplus.org";
$fm_array[47]="emailuser.net";
$fm_array[48]="f-m.fm";
$fm_array[49]="fast-email.com";
$fm_array[50]="fast-mail.org";
$fm_array[51]="fastem.com";
$fm_array[52]="fastemail.us";
$fm_array[53]="fastemailer.com";
$fm_array[54]="fastest.cc";
$fm_array[55]="fastimap.com";
$fm_array[56]="fastmailbox.net";
$fm_array[57]="fastmessaging.com";
$fm_array[58]="fea.st";
$fm_array[59]="fmailbox.com";
$fm_array[60]="ftml.net";
$fm_array[61]="h-mail.us";
$fm_array[62]="hailmail.net";
$fm_array[63]="imap-mail.com";
$fm_array[64]="imap.cc";
$fm_array[65]="imapmail.org";
$fm_array[66]="inoutbox.com";
$fm_array[67]="internet-e-mail.com";
$fm_array[68]="internet-mail.org";
$fm_array[69]="internetemails.net";
$fm_array[70]="internetmailing.net";
$fm_array[71]="jetemail.net";
$fm_array[72]="justemail.net";
$fm_array[73]="letterboxes.org";
$fm_array[74]="mail-central.com";
$fm_array[75]="mail-page.com";
$fm_array[76]="mailandftp.com";
$fm_array[77]="mailas.com";
$fm_array[78]="mailc.net";
$fm_array[79]="mailforce.net";
$fm_array[80]="mailftp.com";
$fm_array[81]="mailingaddress.org";
$fm_array[82]="mailite.com";
$fm_array[83]="mailnew.com";
$fm_array[84]="mailsent.net";
$fm_array[85]="mailservice.ms";
$fm_array[86]="mailup.net";
$fm_array[87]="mailworks.org";
$fm_array[88]="mymacmail.com";
$fm_array[89]="nospammail.net";
$fm_array[90]="ownmail.net";
$fm_array[91]="petml.com";
$fm_array[92]="postinbox.com";
$fm_array[93]="postpro.net";
$fm_array[94]="realemail.net";
$fm_array[95]="reallyfast.biz";
$fm_array[96]="reallyfast.info";
$fm_array[97]="speedpost.net";
$fm_array[98]="ssl-mail.com";
$fm_array[99]="swift-mail.com";
$fm_array[100]="the-fastest.net";
$fm_array[101]="the-quickest.com";
$fm_array[102]="theinternetemail.com";
$fm_array[103]="veryfast.biz";
$fm_array[104]="veryspeedy.net";
$fm_array[105]="yepmail.net";
$fm_array[106]="your-mail.com";
?>
