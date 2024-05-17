<?php if (!($conect = @mysql_connect($host,$user,$password)))
	{
		print "<h3 align=\"center\" style=\"color:#2A91CC\">Could not connect to server !!!</h3>";
		echo "<hr align=\"center\" width=\"90%\">";
		echo "<h4 align=\"center\" style=\"color:#A7A7A7\">";
		echo mysql_error();
		echo "<h4>";
		exit();
	}
/* Selecting datbase */
if (!@mysql_select_db($database))
	{
		print "<h3 align=\"center\" style=\"color:#2A91CC\">Coulod not connect to database !!!</h3>";
		echo "<hr align=\"center\" width=\"90%\">";
		echo "<h4 align=\"center\" style=\"color:#A7A7A7\">";
		echo mysql_error();
		echo "<h4>";
		exit();
	}
//email settings
$result=mysql_query('SELECT * FROM staf_email_settings');
$emailsettings=mysql_fetch_array($result);
$reciever_email_subject=trim($emailsettings['reciever_email_subject']); 
$reciever_email_from_name=$emailsettings['reciever_email_from_name']; 
$reciever_email_from_address=$emailsettings['reciever_email_from_address']; 
$reciever_email_content=$emailsettings['reciever_email_content'];  
$sender_email_subject=trim($emailsettings['sender_email_subject']); 
$enablethankyouemail=trim($emailsettings['enablethankyouemail']); 
$sender_email_from_name=$emailsettings['sender_email_from_name']; 
$sender_email_from_address=$emailsettings['sender_email_from_address']; 
$sender_email_content=$emailsettings['sender_email_content']; 
$reciever_unsubscribelink=trim($emailsettings['reciever_unsubscribelink']); 
$reciever_unsubscribelinktext=trim($emailsettings['reciever_unsubscribelinktext']); 
$visitor_websitelink=trim($emailsettings['visitor_websitelink']); 
$visitor_websitelinktext=trim($emailsettings['visitor_websitelinktext']); 
$showemailbody=$emailsettings['showemailbody'];  
$totalemailsperhour=$emailsettings['totalemailsperhour']; 
$totalemailsperday=$emailsettings['totalemailsperday']; 
$allowduplicateemails=$emailsettings['allowduplicateemails']; 
$sendersmessage=$emailsettings['sendersmessage'];
$sendersmessage_max=$emailsettings['sendersmessage_max'];
$removecustommessagelinks=$emailsettings['removecustommessagelinks'];

$sendersmessage_default=$emailsettings['sendersmessage_default'];
$allowcustommessage=$emailsettings['allowcustommessage'];
$redirecttype=$emailsettings['redirecttype'];
$affiliatevarname=$emailsettings['affiliatevarname'];

$show_maxemailnr=$emailsettings['show_maxemailnr'];
$maxemailnr_text=$emailsettings['maxemailnr_text'];
$allowusertocheck=$emailsettings['allowusertocheck'];
$maxemailnr=0;
$allowtoimportunsubscribed=$emailsettings['allowtoimportunsubscribed'];
$importalreadyinvited=$emailsettings['importalreadyinvited'];
$enableoptin=$emailsettings['enableoptin'];
$enableoptin_text=$emailsettings['enableoptin_text'];

$enableaffiliatevar=$emailsettings['enableaffiliatevar'];
$enableaffiliatevar_text=$emailsettings['enableaffiliatevar_text'];
///status links
$enablecheckstatusmodulelink=$emailsettings['enablecheckstatusmodulelink'];
$checkstatusmodulelink_text=$emailsettings['checkstatusmodulelink_text'];
$enablerankingsmodulelink=$emailsettings['enablerankingsmodulelink'];
$rankingsmodule_text=$emailsettings['rankingsmodule_text'];
$rankingsmodule_nrusers=$emailsettings['rankingsmodule_nrusers'];

///email method
$send_emails_as_cron=$emailsettings['send_emails_as_cron'];
$email_hourlimit_cron_batch=$emailsettings['email_hourlimit_cron_batch'];
////smtp
$mailmethod_smtp=$emailsettings['mailmethod_smtp'];

//new smtp
//$mailmethod_smtp_host=$emailsettings['mailmethod_smtp_host'];
//$mailmethod_smtp_username=$emailsettings['mailmethod_smtp_username'];
//$mailmethod_smtp_password=$emailsettings['mailmethod_smtp_password'];
//$mailmethod_smtp_host_secure=$emailsettings['mailmethod_smtp_host_secure'];
//$mailmethod_smtp_host_port=$emailsettings['mailmethod_smtp_host_port'];
//reply to
$reply_all_email=$emailsettings['reply_all_email'];
///
$enablecaptcha=$emailsettings['enablecaptcha'];
$enablebuzz=$emailsettings['enablebuzz'];
$scroll_contacts=$emailsettings['scroll_contacts'];
$default_selected_contacts=$emailsettings['default_selected_contacts'];
$submit_form_after_import=$emailsettings['submit_form_after_import'];
global $handlecontacts;
$handlecontacts=$emailsettings['handlecontacts'];
global $max_allowed_contacts_to_import;
$max_allowed_contacts_to_import=$emailsettings['max_allowed_contacts_to_import'];
///text settings
$result=mysql_query('SELECT * FROM staf_general_settings');
$generalsettings=mysql_fetch_array($result);
$scriptskin=$generalsettings['scriptskin'];
$htmlcharset=$generalsettings['htmlcharset'];
$emailcharset=$generalsettings['emailcharset'];
$websiteurl=$generalsettings['websiteurl'];
$websiteurl_gen=trim($generalsettings['websiteurl_gen']);
$redirection=trim($generalsettings['redirection_page']);
$importtexttop=$generalsettings['importtexttop']; 
$manualinvitetexttop=$generalsettings['manualinvitetexttop'];
$warningtext=$generalsettings['warningtext'];
$warningtext2=$generalsettings['warningtext2'];
$mymtexttop=$generalsettings['mymtexttop'];
$manual_ym_text=$generalsettings['manual_ym_text'];
$showaddressimport=$generalsettings['showaddressimport'];
$showyminvite=$generalsettings['showyminvite'];
$showmanualimport=$generalsettings['showmanualimport'];
$showservicesicons=$generalsettings['showservicesicons'];

//sharere
$showsocialsharer=$generalsettings['showsocialsharer'];
$networksharertexttop=$generalsettings['networksharertexttop'];
$sharer_link_to_promote=$generalsettings['sharer_link_to_promote'];
$sharer_subject=$generalsettings['sharer_subject'];
$sharer_message=$generalsettings['sharer_message'];
$sharer_readonly=$generalsettings['sharer_readonly'];

//available services
$contactimporter_service1=$generalsettings['contactimporter_service1'];
$contactimporter_service2=$generalsettings['contactimporter_service2'];
$contactimporter_service3=$generalsettings['contactimporter_service3'];
$contactimporter_service4=$generalsettings['contactimporter_service4'];
$contactimporter_service5=$generalsettings['contactimporter_service5'];
$contactimporter_service6=$generalsettings['contactimporter_service6'];
$contactimporter_service7=$generalsettings['contactimporter_service7'];
$contactimporter_service8=$generalsettings['contactimporter_service8'];
$contactimporter_service9=$generalsettings['contactimporter_service9'];
$contactimporter_service10=$generalsettings['contactimporter_service10'];
$contactimporter_service11=$generalsettings['contactimporter_service11'];
$contactimporter_service12=$generalsettings['contactimporter_service12'];
$contactimporter_service13=$generalsettings['contactimporter_service13'];
$contactimporter_service14=$generalsettings['contactimporter_service14'];
$contactimporter_service15=$generalsettings['contactimporter_service15'];
$contactimporter_service16=$generalsettings['contactimporter_service16'];
$contactimporter_service17=$generalsettings['contactimporter_service17'];
$contactimporter_service18=$generalsettings['contactimporter_service18'];
///csv import
$showcsvimport=$generalsettings['showcsvimport'];
$csvimporttexttop=$generalsettings['csvimporttexttop'];
$csvwarningtext=$generalsettings['csvwarningtext'];
//reward settings
$result=mysql_query('SELECT * FROM staf_reward_settings');
$rewardsettings=mysql_fetch_array($result);

$enable_reward1=$rewardsettings['enable_reward1']; 
$reward1_invitations_sent=$rewardsettings['reward1_invitations_sent'];  
$reward1_email_from_name= trim($rewardsettings['reward1_email_from_name']);
$reward1_email_from_address= trim($rewardsettings['reward1_email_from_address']);
$reward1_emailsubject=trim($rewardsettings['reward1_emailsubject']);  
$reward1_emailbody=$rewardsettings['reward1_emailbody'];  
///
$enable_reward2=$rewardsettings['enable_reward2']; 
$reward2_invitations_sent=$rewardsettings['reward2_invitations_sent']; 
$reward2_email_from_name= trim($rewardsettings['reward2_email_from_name']);
$reward2_email_from_address= trim($rewardsettings['reward2_email_from_address']);
$reward2_emailsubject=trim($rewardsettings['reward2_emailsubject']); 
$reward2_emailbody=$rewardsettings['reward2_emailbody']; 
///
$reward1_afterimporting=$rewardsettings['reward1_afterimporting']; 
$reward1_afterimporting_text=$rewardsettings['reward1_afterimporting_text']; 
$reward2_afterimporting=$rewardsettings['reward2_afterimporting']; 
$reward2_afterimporting_text=$rewardsettings['reward2_afterimporting_text']; 
///reward3
$enable_reward3= $rewardsettings['enable_reward3'];
$reward3_valability= $rewardsettings['reward3_valability'];
$reward3_invitations_sent= $rewardsettings['reward3_invitations_sent'];
$resetcounter_reward3= $rewardsettings['resetcounter_reward3'];
$reward3_email_from_name= $rewardsettings['reward3_email_from_name'];
$reward3_email_from_address= $rewardsettings['reward3_email_from_address'];
$reward3_emailsubject= $rewardsettings['reward3_emailsubject'];
$reward3_emailbody= $rewardsettings['reward3_emailbody'];

///reward 4
$enable_reward4= $rewardsettings['enable_reward4'];
$reward4_invitations_sent= $rewardsettings['reward4_invitations_sent'];
$reward4_email_from_name= $rewardsettings['reward4_email_from_name'];
$reward4_email_from_address= $rewardsettings['reward4_email_from_address'];
$reward4_emailsubject= $rewardsettings['reward4_emailsubject'];
$reward4_emailbody= $rewardsettings['reward4_emailbody'];

//admin settings
$result=mysql_query('SELECT * FROM staf_users');
$adminsettings=mysql_fetch_array($result);
$admin_email=trim($adminsettings['useremailaddress']);
$admin_name=trim($adminsettings['userfullname']);

//translations
$result=$result=mysql_query('SELECT * FROM staf_translations');
$translations=mysql_fetch_array($result);
$toplink1=$translations['toplink1'];
$toplink2=$translations['toplink2'];
$toplink3=$translations['toplink3'];
$toplink4=$translations['toplink4'];
$toplink5=$translations['toplink5'];
//captcha
$captcha_text=$translations['captcha_text'];
$captcha_text2=$translations['captcha_text2'];
$captcha_button=$translations['captcha_button'];
$captcha_error=$translations['captcha_error'];
//char limit
$characters_limitation=$translations['characters_limitation'];

//cimporter
$importerformcontrol1=$translations['importerformcontrol1'];
$importerformcontrol2=$translations['importerformcontrol2'];
$importerformcontrol3=$translations['importerformcontrol3'];
$lastoptionservicecombo=$translations['lastoptionservicecombo'];
$importerformcontrol4=$translations['importerformcontrol4'];
$importerformcontrol5=$translations['importerformcontrol5'];


$importerjserror1=str_replace("'","`",$translations['importerjserror1']);
$importerjserror2=str_replace("'","`",$translations['importerjserror2']);
$importerjserror3=str_replace("'","`",$translations['importerjserror3']);
$importerjserror4=str_replace("'","`",$translations['importerjserror4']);
$importerjserror5=str_replace("'","`",$translations['importerjserror5']);

$importerheader1=$translations['importerheader1'];
$importerheader2=$translations['importerheader2'];

$importertextpreviewemail=$translations['importertextpreviewemail'];
$importerformcontrol1_ai=$translations['importerformcontrol1_ai'];
$importerformcontrol2_ai=$translations['importerformcontrol2_ai'];

$importermessage1=$translations['importermessage1'];
$importermessage2=$translations['importermessage2'];
$importermessage3=str_replace("'","`",$translations['importermessage3']);
$importermessage4=$translations['importermessage4'];
//csv importer
$csvimporterformcontrol1=$translations['csvimporterformcontrol1'];
$csvimporterformcontrol2=$translations['csvimporterformcontrol2'];
$csvimporterformcontrol3=$translations['csvimporterformcontrol3'];
$csvimporterformcontrol4=$translations['csvimporterformcontrol4'];
$fileimporteroption1=$translations['fileimporteroption1'];
$fileimporteroption2=$translations['fileimporteroption2'];
$fileimporteroption3=$translations['fileimporteroption3'];
$fileimporteroption4=$translations['fileimporteroption4'];
$fileimporteroption5=$translations['fileimporteroption5'];
$fileimporteroption6=$translations['fileimporteroption6'];
$fileimporteroption7=$translations['fileimporteroption7'];
$fileimporteroption8=$translations['fileimporteroption8'];
$fileimporteroption9=$translations['fileimporteroption9'];
$fileimporteroption10=$translations['fileimporteroption10'];


$csvimporterformcontrol5=$translations['csvimporterformcontrol5'];
$csvimporterformcontrol6=$translations['csvimporterformcontrol6'];

$csvimporterjserror1=str_replace("'","`",$translations['csvimporterjserror1']);
$csvimporterjserror2=str_replace("'","`",$translations['csvimporterjserror2']);
$csvimporterjserror3=str_replace("'","`",$translations['csvimporterjserror3']);
$csvimporterjserror4=str_replace("'","`",$translations['csvimporterjserror4']);
$csvimporterjserror5=str_replace("'","`",$translations['csvimporterjserror5']);
$csvimporterjserror6=str_replace("'","`",$translations['csvimporterjserror6']);

$csvimporterheader1=$translations['csvimporterheader1'];
$csvimporterheader2=$translations['csvimporterheader2'];
$csvimportertextpreviewemail=$translations['csvimportertextpreviewemail'];
$csvimporterformcontrol1_ai=$translations['csvimporterformcontrol1_ai'];
$csvimporterformcontrol2_ai=$translations['csvimporterformcontrol2_ai'];

$csvimportermessage1=$translations['csvimportermessage1'];
$csvimportermessage2=$translations['csvimportermessage2'];
$csvimportermessage3=$translations['csvimportermessage3'];
$csvimportermessage4=str_replace("'","`",$translations['csvimportermessage4']);

//manual invite
$manualformcontrol1=$translations['manualformcontrol1'];
$manualformcontrol2=$translations['manualformcontrol2'];
$manualformcontrol3=$translations['manualformcontrol3'];
$manualformcontrol4=$translations['manualformcontrol4'];
$manualformcontrol5=$translations['manualformcontrol5'];
$manualformcontrol6=$translations['manualformcontrol6'];
$manualformcontrol7=$translations['manualformcontrol7'];
$manualformcontrol8=$translations['manualformcontrol8'];
$manualformcontrol9=$translations['manualformcontrol9'];
$manualformcontrol10=$translations['manualformcontrol10'];
$manualjserror1=str_replace("'","`",$translations['manualjserror1']);
$manualjserror2=str_replace("'","`",$translations['manualjserror2']);
$manualjserror3=str_replace("'","`",$translations['manualjserror3']);
$manualjserror4=str_replace("'","`",$translations['manualjserror4']);
$manualjserror5=str_replace("'","`",$translations['manualjserror5']);

///preview emails tags
$previewemail_tag1=$translations['previewemail_tag1'];
$previewemail_tag2=$translations['previewemail_tag2'];
$previewemail_tag3=$translations['previewemail_tag3'];
$previewemail_tag4=$translations['previewemail_tag4'];
$previewemail_tag5=$translations['previewemail_tag5'];

///ym
$ymcontrol=str_replace("'","`",$translations['ymcontrol']);
$ym_message1=str_replace("'","`",$translations['ym_message1']);
$ym_message2=str_replace("'","`",$translations['ym_message2']);
$ym_message3=str_replace("'","`",$translations['ym_message3']);

//sharer
$sharercontrol1=$translations['sharercontrol1'];
$sharercontrol2=$translations['sharercontrol2'];
$sharercontrol3=$translations['sharercontrol3'];
$sharercontrol4=$translations['sharercontrol4'];
$sharercontrol5=$translations['sharercontrol5'];
$sharercontrol6=$translations['sharercontrol6'];
$sharercontrol7=$translations['sharercontrol7'];

//reminder settings
$result=mysql_query('SELECT * FROM staf_reminders_settings');
$remindersettings=mysql_fetch_array($result);
$enable_reminder=$remindersettings['enable_reminder'];  
$reminder_invitations_sent=trim($remindersettings['reminder_invitations_sent']);  
$reminder_from_name=trim($remindersettings['reminder_from_name']);  
$reminder_email_from_address=trim($remindersettings['reminder_email_from_address']);  
$reminder_emailsubject=trim($remindersettings['reminder_emailsubject']);  
$reminder_emailbody=$remindersettings['reminder_emailbody']; 
$reminder_invitations_often=$remindersettings['reminder_invitations_often']; 

//
//reminder settings users
$result=mysql_query('SELECT * FROM staf_reminders_settings_users');
$remindersettings_users=mysql_fetch_array($result);
$enable_reminder_users=$remindersettings_users['enable_reminder_users'];  
$reminder_invitations_sent_users=trim($remindersettings_users['reminder_invitations_sent_users']);  
$reminder_from_name_users=trim($remindersettings_users['reminder_from_name_users']);  
$reminder_email_from_address_users=trim($remindersettings_users['reminder_email_from_address_users']);  
$reminder_emailsubject_users=trim($remindersettings_users['reminder_emailsubject_users']);  
$reminder_emailbody_users=$remindersettings_users['reminder_emailbody_users']; 
$reminder_invitations_often_users=$remindersettings_users['reminder_invitations_often_users']; 
$send_reminders_to_1=$remindersettings_users['send_reminders_to_1']; 
$send_reminders_to_1_value=$remindersettings_users['send_reminders_to_1_value']; 
$send_reminders_to_2=$remindersettings_users['send_reminders_to_2']; 
$send_reminders_to_3=$remindersettings_users['send_reminders_to_3']; 
$send_reminders_to_4=$remindersettings_users['send_reminders_to_4']; 

//charset and global
mysql_query("SET NAMES '".$htmlcharset."'");
mysql_query("SET CHARACTER NAMES '".$htmlcharset."'");
mysql_query("SET GLOBAL sql_mode = ''");
mysql_query("SET sql_mode = ''");
?>