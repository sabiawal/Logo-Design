-- --------------------------------------------------------

-- 
-- Table structure for table `staf_additional_email_services`
-- 

CREATE TABLE `staf_additional_email_services` (
  `id` int(150) unsigned NOT NULL auto_increment,
  `service` varchar(250) NOT NULL,
  `extension` varchar(250) NOT NULL,
  `visible` int(5) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `staf_additional_email_services`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_blocked_domains`
-- 

CREATE TABLE `staf_blocked_domains` (
  `domainid` int(150) unsigned NOT NULL auto_increment,
  `domainname` varchar(250) NOT NULL,
  PRIMARY KEY  (`domainid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `staf_blocked_domains`
-- 

INSERT INTO `staf_blocked_domains` VALUES (9, 'hostgator.com');
INSERT INTO `staf_blocked_domains` VALUES (8, 'paypal.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_blocked_ips`
-- 

CREATE TABLE `staf_blocked_ips` (
  `id` int(40) unsigned NOT NULL auto_increment,
  `ip` varchar(250) NOT NULL,
  `blockedon` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `staf_blocked_ips`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_email_settings`
-- 

CREATE TABLE `staf_email_settings` (
  `settingid` int(150) unsigned NOT NULL auto_increment,
  `reciever_email_subject` varchar(150) NOT NULL default '',
  `reciever_email_from_name` varchar(150) NOT NULL default '',
  `reciever_email_from_address` varchar(150) NOT NULL default '',
  `reciever_email_content` text NOT NULL,
  `enablethankyouemail` int(1) unsigned NOT NULL default '0',
  `sender_email_subject` varchar(150) NOT NULL default '',
  `sender_email_from_name` varchar(150) NOT NULL default '',
  `sender_email_from_address` varchar(150) NOT NULL default '',
  `sender_email_content` text NOT NULL,
  `reciever_unsubscribelink` varchar(250) NOT NULL default '',
  `reciever_unsubscribelinktext` varchar(250) NOT NULL default '',
  `visitor_websitelink` text NOT NULL,
  `visitor_websitelinktext` varchar(250) NOT NULL default '',
  `showemailbody` int(1) NOT NULL default '1',
  `totalemailsperhour` int(150) unsigned NOT NULL default '0',
  `totalemailsperday` int(150) unsigned NOT NULL default '0',
  `allowduplicateemails` int(1) unsigned NOT NULL default '0',
  `allowcustommessage` int(1) unsigned NOT NULL default '0',
  `sendersmessage` text NOT NULL,
  `sendersmessage_default` varchar(255) NOT NULL,
  `sendersmessage_max` int(100) NOT NULL default '100',
  `removecustommessagelinks` int(5) unsigned NOT NULL default '0',
  `redirecttype` int(1) unsigned NOT NULL default '1',
  `affiliatevarname` varchar(255) NOT NULL,
  `show_maxemailnr` text NOT NULL,
  `maxemailnr_text` text NOT NULL,
  `allowusertocheck` text NOT NULL,
  `allowtoimportunsubscribed` int(5) unsigned NOT NULL default '0',
  `importalreadyinvited` int(5) unsigned NOT NULL default '0',
  `enableoptin` int(5) unsigned NOT NULL default '1',
  `enableoptin_text` text NOT NULL,
  `enableaffiliatevar` int(5) unsigned NOT NULL default '0',
  `enableaffiliatevar_text` text NOT NULL,
  `handlecontacts` int(5) unsigned NOT NULL default '0',
  `send_emails_as_cron` int(5) unsigned NOT NULL default '0',
  `mailmethod_smtp` int(1) unsigned NOT NULL default '0',
  `mailmethod_smtp_host` varchar(255) NOT NULL,
  `mailmethod_smtp_host_secure` varchar(255) NOT NULL,
  `mailmethod_smtp_host_port` varchar(255) NOT NULL default '25',
  `mailmethod_smtp_username` varchar(255) NOT NULL,
  `mailmethod_smtp_password` varchar(255) NOT NULL,
  `reply_all_email` varchar(255) NOT NULL,
  `enablecaptcha` int(5) unsigned NOT NULL default '0',
  `enablebuzz` int(5) unsigned NOT NULL default '0',
  `scroll_contacts` int(5) unsigned NOT NULL default '0',
  `default_selected_contacts` int(5) unsigned NOT NULL default '1',
  `enablecheckstatusmodulelink` int(5) unsigned NOT NULL default '1',
  `checkstatusmodulelink_text` varchar(250) NOT NULL,
  `enablerankingsmodulelink` int(5) unsigned NOT NULL default '1',
  `rankingsmodule_text` varchar(250) NOT NULL,
  `rankingsmodule_nrusers` int(5) unsigned NOT NULL default '15',
  `submit_form_after_import` int(1) unsigned NOT NULL default '1',
  `email_hourlimit_cron_batch` varchar(250) NOT NULL default '200',
  `max_allowed_contacts_to_import` varchar(250) NOT NULL,
  PRIMARY KEY  (`settingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `staf_email_settings`
-- 

INSERT INTO `staf_email_settings` VALUES (1, '%%%recipientname%%%, %%%sendername%%% has sent you an invitation', '%%%sendername%%%', 'email@your-domain.com', '<div style="text-align: left;"><span style="font-size: 13px; font-family: arial,helvetica,sans-serif;"> Hi %%%recipientname%%%, <br /><br /> This is %%%sendername%%% and I just found this great tool that you can use to bring more visitors to your website. <br /> This is one of the best ways to promote your websites for FREE!<br /> I hope you will enjoy it and I am sure this will help you to promote your websites.<br /><br /> <strong>%%%usercustommessage%%%</strong><br /><br /> <strong>%%%visitorslink%%%</strong><br /><br /> Best regards, <br />%%%sendername%%% <br /><br /> ------------------------------------------------------------------------------------------------------------------------------- <br />This is a demo invitation sent by Super-Tell-A-Friend script with these details : <br />Sender : %%%senderemail%%% (%%%sendername%%%) <br />Recipient : %%%recipientemail%%% (%%%recipientname%%%)  <br /><br /> </span> <span style="font-size: 11px;">%%%unsubscribelink%%% </span></div>', 1, '%%%sendername%%%, thank you for inviting your friends!', 'Super Tell A Friend Demo', 'email@your-domain.com', '<span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;"> %%%sendername%%%, thank you for sharing our website to your friends!<br /> This time, you invited  %%%nrofemailssent%%% contact(s).<br /><br /> <strong>If  %%%visitorstocome%%% friend(s) will visit our website, you will get a reward!<br /> <br />Also, if  %%%visitorstocome_timed%%% friend(s) will visit our website next hour, you will get our special prize!<br /></strong> <br /> Keep inviting your friends, and you can win our rewards.<br /> You can always see your progress here :&nbsp; <a href="http://www.super-tell-a-friend.com/super-tell-a-friend-demo/userdetails.php">http://www.super-tell-a-friend.com/super-tell-a-friend-demo/userdetails.php</a> <br />Good Luck! <br /><br />www.super-tell-a-friend.com  <br /><br /> ------------------------------------------------------------------------------------------------------------------------------- <br />This is a demo confirmation email sent by Super-Tell-A-Friend script </span>', 'http://localhost/importer/importertopromote/sell_zip_all/STAF_LAST_RELEASE_TRACKING_YAHOO_GMAIL_HOTMAIL_API/test/s-t-a-f_pro/unsubscribe.php', 'Click here if you do not wish to receive any further invitations from our website.', 'http://localhost/importer/importertopromote/sell_zip_all/STAF_LAST_RELEASE_TRACKING_YAHOO_GMAIL_HOTMAIL_API/test/s-t-a-f_pro/visitor.php', 'Click here if you are looking for HIGH QUALITY TRAFFIC on your websites!', 1, 1000, 5000, 1, 1, 'You can add a message to your friends in the box below :', '', 100, 1, 1, 'affiliateid', '0', 'Please note : this time, you can invite maximum %%%maxemailnr%%% friend(s).', '1', 1, 1, 1, 'I want to join your mailing list and I AGREE to receive emails from www.super-tell-a-friend.com', 1, 'Your affiliate link will be emailed to your friends. Please insert your affiliate ID :', 2, 0, 0, '', '', '', '', '', 'noreply@your-domain.com', 0, 1, 1, 1, 1, 'Check your progress', 1, 'Monthly Rankings', 10, 0, '250', '1000');

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_general_settings`
-- 

CREATE TABLE `staf_general_settings` (
  `settingid` int(150) unsigned NOT NULL auto_increment,
  `websiteurl` varchar(150) NOT NULL default '',
  `websiteurl_gen` varchar(150) NOT NULL default '',
  `redirection_page` varchar(150) NOT NULL default '',
  `importtexttop` text NOT NULL,
  `manualinvitetexttop` text NOT NULL,
  `mymtexttop` text NOT NULL,
  `manual_ym_text` text NOT NULL,
  `warningtext` varchar(255) NOT NULL default '',
  `warningtext2` varchar(255) NOT NULL default '',
  `scriptskin` varchar(255) NOT NULL default '',
  `htmlcharset` varchar(255) NOT NULL default 'iso-8859-1',
  `emailcharset` varchar(255) NOT NULL default 'iso-8859-1',
  `showaddressimport` int(1) unsigned NOT NULL default '1',
  `showmanualimport` int(1) unsigned NOT NULL default '1',
  `showsocialsharer` int(1) NOT NULL default '1',
  `showyminvite` int(1) unsigned NOT NULL default '1',
  `showservicesicons` int(1) unsigned NOT NULL default '1',
  `showcsvimport` int(1) unsigned NOT NULL default '1',
  `csvimporttexttop` text NOT NULL,
  `csvwarningtext` varchar(255) NOT NULL default '',
  `contactimporter_service1` int(1) unsigned NOT NULL default '1',
  `contactimporter_service2` int(1) unsigned NOT NULL default '1',
  `contactimporter_service3` int(1) unsigned NOT NULL default '1',
  `contactimporter_service4` int(1) unsigned NOT NULL default '1',
  `contactimporter_service5` int(1) unsigned NOT NULL default '1',
  `contactimporter_service6` int(1) unsigned NOT NULL default '1',
  `contactimporter_service7` int(1) unsigned NOT NULL default '1',
  `contactimporter_service8` int(1) unsigned NOT NULL default '1',
  `contactimporter_service9` int(1) unsigned NOT NULL default '1',
  `contactimporter_service10` int(1) unsigned NOT NULL default '1',
  `contactimporter_service11` int(1) unsigned NOT NULL default '1',
  `contactimporter_service12` int(1) unsigned NOT NULL default '1',
  `contactimporter_service13` int(1) unsigned NOT NULL default '1',
  `contactimporter_service14` int(1) unsigned NOT NULL default '1',
  `contactimporter_service15` int(1) unsigned NOT NULL default '1',
  `contactimporter_service16` int(1) unsigned NOT NULL default '1',
  `contactimporter_service17` int(1) unsigned NOT NULL default '0',
  `contactimporter_service18` int(1) unsigned NOT NULL default '0',
  `networksharertexttop` text NOT NULL,
  `sharer_link_to_promote` text NOT NULL,
  `sharer_subject` varchar(250) NOT NULL,
  `sharer_message` text NOT NULL,
  `sharer_readonly` int(1) NOT NULL default '1',
  PRIMARY KEY  (`settingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `staf_general_settings`
-- 

INSERT INTO `staf_general_settings` VALUES (1, 'http://www.super-tell-a-friend.com/index.html', 'Invite your friends to join our website!', 'http://www.super-tell-a-friend.com/invitethankyoupage.html', '<div style="text-align: left;"><span style="font-family: arial,helvetica,sans-serif;"><strong><span style="font-size: medium;">Import and invite your friends from your address book</span></strong> <br /></span><br /><span style="font-family: arial,helvetica,sans-serif;">Please select your email provider, insert the requested information and click on <strong>''Import Contacts''</strong>.  <br /> Choose <strong>''Regional domains''</strong> if your email address is other than ''.com'' (.co.uk, .de, .fr, .it, .es , etc.)<br />In this case you have to fill in your full email address.<strong></strong><br /><br /></span></div>', '<div style="text-align: left;"><span style="font-family: arial,helvetica,sans-serif;"><strong><span style="font-size: medium;">Manually add emails and invite your friends </span></strong></span><br /><br /><span style="font-family: arial,helvetica,sans-serif;"><strong> </strong>You can also add unlimited recipients one by one.</span><span style="font-family: arial,helvetica,sans-serif;"> <br />For each one, input friend''s details and then click on ''<strong>Add Email</strong>''.</span><br /><span style="font-family: arial,helvetica,sans-serif;"> Finally, insert your name, your email address, scroll down and click on ''<strong>Invite Friends</strong>''.</span><br /><br /></div>', '<div style="text-align: left;"><strong><span style="font-size: medium;"><span style="font-family: arial,helvetica,sans-serif;">Invite Yahoo Messenger contacts</span></span></strong><br /><br /><span style="font-family: arial,helvetica,sans-serif;"><strong>To be able to use this tool, please be sure you are online and your status is NOT "invisible".<br /></strong></span><span style="font-family: arial,helvetica,sans-serif;"><strong><strong><br /></strong></strong></span><span style="font-family: arial,helvetica,sans-serif;">First, insert your id and check your status. If you are online, click on ''<strong>Send Message</strong>'',</span><br /><span style="font-family: arial,helvetica,sans-serif;">then the application will ask you &nbsp;to select your contacts.</span><span style="font-family: arial,helvetica,sans-serif;"><br /><br /></span></div>', 'Check this website : http://www.super-tell-a-friend.com  I''m sure it will help you to promote your website!', 'You are safe! We don''t store your personal information.', 'You are safe! We don''t store your personal information.', 'blue2', 'UTF-8', 'UTF-8', 1, 1, 1, 1, 1, 1, '<div style="text-align: left;"><span style="font-family: arial,helvetica,sans-serif;"><strong><span style="font-size: medium;">Import your contacts from a file</span></strong><br /><br />Our file importer allows you to import your contacts stored on you PC. Accepted file types:<br />- contact list exported from Outlook, Outlook Express or Thunderbird. <br />- contact list exported </span><span style="font-family: arial,helvetica,sans-serif;">from your email address book (yahoo, gmail, hotmail, aol, etc) <br />- generic CSV files with two columns(</span><span style="font-family: arial,helvetica,sans-serif;">names and emails</span><span style="font-family: arial,helvetica,sans-serif;">) <strong><a href="forcedownload.php?filetype=1">[Download a sample file].</a></strong></span><br /><span style="font-family: arial,helvetica,sans-serif;">- text file - comma delimited</span><span style="font-family: arial,helvetica,sans-serif;"> <strong><a href="forcedownload.php?filetype=2">[Download a sample file].</a><br /></strong></span><span style="font-family: arial,helvetica,sans-serif;">- text file - tab delimited</span><span style="font-family: arial,helvetica,sans-serif;"> <strong><a href="forcedownload.php?filetype=3">[Download a sample file].</a></strong></span><br /><br /></div>', 'You are safe! We don''t store your personal information.', 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, '<div style="text-align: left;"><span style="font-family: arial,helvetica,sans-serif;"><strong><span style="font-size: medium;">Share or bookmark our website </span></strong></span><br /><span style="font-family: arial,helvetica,sans-serif;"><br />It is easy to share or bookmark our website on your preferred website or social network. <br />Please choose the service from our list, then click on ''<strong>Share</strong>'' button.</span></div>', 'http://www.super-tell-a-friend.com', 'The ultimate viral marketing tool', 'Do you want to promote your websites for free? Check this software!', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_newsletters_campaigns`
-- 

CREATE TABLE `staf_newsletters_campaigns` (
  `campaignid` int(100) unsigned NOT NULL auto_increment,
  `campaign_name` varchar(255) NOT NULL,
  `campaign_description` varchar(250) NOT NULL,
  `campaign_run` int(5) unsigned NOT NULL default '0',
  `campaign_run_after_days` int(5) unsigned NOT NULL default '5',
  `campaign_run_specific_day` date NOT NULL,
  `campaign_run_day` int(5) unsigned NOT NULL default '1',
  `campaign_run_month_day` int(5) unsigned NOT NULL default '1',
  `campaign_recipients1` int(5) unsigned NOT NULL default '1',
  `campaign_recipients2` int(5) unsigned NOT NULL default '0',
  `campaign_recipients3` int(5) unsigned NOT NULL default '0',
  `campaign_sender_email_from_name` varchar(255) NOT NULL,
  `campaign_sender_email_from_address` varchar(255) NOT NULL,
  `campaign_sender_email_subject` varchar(255) NOT NULL,
  `campaign_sender_email_content` text NOT NULL,
  `campaign_enabled` int(5) unsigned NOT NULL default '1',
  `campaign_loop` int(5) unsigned NOT NULL default '0',
  `campaign_repeat_type` int(5) unsigned NOT NULL default '0',
  `campaign_started_on` date NOT NULL,
  `campaign_paused_on` date NOT NULL,
  `campaign_total_recipients` int(100) NOT NULL default '0',
  `campaign_total_visitors` int(100) NOT NULL default '0',
  `campaign_total_unsubscribers` int(100) NOT NULL default '0',
  `campaign_total_emails_sent` int(100) NOT NULL default '0',
  `campaign_visitor_websitelinktext` varchar(250) NOT NULL,
  `campaign_websiteurl` varchar(250) NOT NULL,
  `campaign_last_time_run` date NOT NULL,
  PRIMARY KEY  (`campaignid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `staf_newsletters_campaigns`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_newsletters_campaigns_recipients`
-- 

CREATE TABLE `staf_newsletters_campaigns_recipients` (
  `recipientid` int(100) unsigned NOT NULL auto_increment,
  `campaignid` int(100) unsigned NOT NULL,
  `recipientname` varchar(250) NOT NULL,
  `recipientemail` varchar(250) NOT NULL,
  `branch_dateandtime` datetime NOT NULL,
  `campaign_repeat_type` int(5) unsigned NOT NULL default '0',
  `emails_sent_till_now` int(100) unsigned NOT NULL default '0',
  `visitor` int(5) unsigned NOT NULL default '0',
  `unsubscribed` int(5) unsigned NOT NULL default '0',
  `usercode` varchar(250) NOT NULL,
  `usertype` int(5) NOT NULL default '1',
  PRIMARY KEY  (`recipientid`),
  UNIQUE KEY `usercode` (`usercode`),
  KEY `recipientid` (`recipientid`),
  KEY `recipientemail` (`recipientemail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `staf_newsletters_campaigns_recipients`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_recievers`
-- 

CREATE TABLE `staf_recievers` (
  `recieverid` int(150) unsigned NOT NULL auto_increment,
  `sender_id` varchar(255) NOT NULL default '',
  `branch_id` int(150) unsigned NOT NULL default '0',
  `reciever_email` varchar(255) NOT NULL default '',
  `reciever_name` varchar(255) NOT NULL default '',
  `unsubscribecode` varchar(255) NOT NULL default '',
  `unsubscribed` int(1) unsigned NOT NULL default '0',
  `visitedcode` varchar(255) NOT NULL default '',
  `visited` int(1) unsigned NOT NULL default '0',
  `visit_datetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `reminders_sent` int(5) unsigned NOT NULL default '0',
  `invitation_sent` int(5) unsigned NOT NULL default '0',
  `registered` int(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`recieverid`),
  KEY `recieverid` (`recieverid`),
  KEY `reciever_email` (`reciever_email`),
  KEY `sender_id` (`sender_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `staf_recievers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_reminders_settings`
-- 

CREATE TABLE `staf_reminders_settings` (
  `settingid` int(150) unsigned NOT NULL auto_increment,
  `enable_reminder` int(5) unsigned NOT NULL default '1',
  `reminder_invitations_sent` int(150) unsigned NOT NULL default '0',
  `reminder_from_name` text NOT NULL,
  `reminder_email_from_address` text NOT NULL,
  `reminder_emailsubject` varchar(250) NOT NULL default '',
  `reminder_emailbody` text NOT NULL,
  `reminder_invitations_often` int(5) unsigned NOT NULL default '24',
  PRIMARY KEY  (`settingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `staf_reminders_settings`
-- 

INSERT INTO `staf_reminders_settings` VALUES (1, 1, 1, 'Super Tell A Friend Reminder Demo', 'email@your-domain.com', '%%%recipientname%%%, this is a reminder from %%%sendername%%%', '<span style="font-size: 13px;"> Hi %%%recipientname%%%, <br /><br /> This is %%%sendername%%% and I want to remind you about this great application I found a few days ago.<br /> This is one of the best ways to promote your websites for FREE!<br /><br /> I am sure this will help you to promote your websites.  <br />%%%visitorslink%%% <br /><br />Best regards, <br />%%%sendername%%% <br />------------------------------------------------------------------------------------------------------------------------------<br /> This is a demo reminder sent by Super-Tell-A-Friend script with these details : <br />Sender : %%%senderemail%%% (%%%sendername%%%) <br />Recipient : %%%recipientemail%%% (%%%recipientname%%%) </span><br /> <span style="font-size: 11px;">%%%unsubscribelink%%%</span>', 24);

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_reminders_settings_users`
-- 

CREATE TABLE `staf_reminders_settings_users` (
  `settingid` int(150) unsigned NOT NULL auto_increment,
  `send_reminders_to_1` int(5) NOT NULL default '1',
  `send_reminders_to_1_value` varchar(255) NOT NULL default '50',
  `send_reminders_to_2` int(5) NOT NULL default '1',
  `send_reminders_to_3` int(5) NOT NULL default '1',
  `send_reminders_to_4` int(5) NOT NULL default '1',
  `enable_reminder_users` int(5) unsigned NOT NULL default '1',
  `reminder_invitations_sent_users` int(150) unsigned NOT NULL default '0',
  `reminder_from_name_users` text NOT NULL,
  `reminder_email_from_address_users` text NOT NULL,
  `reminder_emailsubject_users` varchar(250) NOT NULL,
  `reminder_emailbody_users` text NOT NULL,
  `reminder_invitations_often_users` int(5) unsigned NOT NULL default '24',
  PRIMARY KEY  (`settingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `staf_reminders_settings_users`
-- 

INSERT INTO `staf_reminders_settings_users` VALUES (1, 1, '200', 1, 1, 1, 1, 2, 'Super-Tell-A-Friend User Reminder Demo', 'email@your-domain.com', 'Reminder for %%%sendername%%%', '<span style="font-size: 13px;"> <span style="font-size: 12px;"> <span style="font-size: 12px;"> </span></span><span style="font-size: 12px;"> <span style="font-size: 12px;"> </span></span>Hi <span style="font-size: 12px;"> %%%sendername%%%</span>, <br /><br />Till now, you sent <span style="font-size: 12px;">%%%nrofemailssent%%% </span>invitations and <span style="font-size: 12px;"> %%%visitorstillnow%%% </span>friend(s) visited our website. <br /></span><span style="font-size: 13px;"><span style="font-size: 12px;">%%%sendername%%%, </span></span><span style="font-size: 13px;">you are very close to win our rewards!<br /><br />Invite more&nbsp;<span style="font-size: 12px;"> %%%emailstobesent%%% </span>friend(s) now and we will send you a nice gift!<br />Also, if <span style="font-size: 12px;">%%%visitorstocome%%% </span>friend(s) will visit our website, the 2nd reward is yours!<br /><br />Today''s special offer : if <span style="font-size: 12px;"> %%%visitorstocome_timed%%% </span>friend(s) will visit our website this hour you will win an extra bonus!<br /><br />You can check anytime your status here :<br /><a href="http://www.super-tell-a-friend.com/super-tell-a-friend-demo/userdetails.php">http://www.super-tell-a-friend.com/super-tell-a-friend-demo/userdetails.php</a><br /><br />Best regards, <br />Super-Tell-A-Friend.com<br /></span><span style="font-size: 13px;">------------------------------------------------------------------------------------------------------------------------------<br /> This is a demo reminder sent by Super-Tell-A-Friend script </span><span style="font-size: 13px;"><br /></span><span style="font-size: 11px;">%%%unsubscribelink%%%</span>', 24);

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_reward_settings`
-- 

CREATE TABLE `staf_reward_settings` (
  `settingid` int(150) unsigned NOT NULL auto_increment,
  `enable_reward1` int(5) unsigned NOT NULL default '1',
  `reward1_invitations_sent` int(150) unsigned NOT NULL default '0',
  `reward1_email_from_name` text NOT NULL,
  `reward1_email_from_address` text NOT NULL,
  `reward1_emailsubject` text NOT NULL,
  `reward1_emailbody` text NOT NULL,
  `enable_reward2` int(5) unsigned NOT NULL default '1',
  `reward2_invitations_sent` int(150) NOT NULL default '0',
  `reward2_email_from_name` text NOT NULL,
  `reward2_email_from_address` text NOT NULL,
  `reward2_emailsubject` text NOT NULL,
  `reward2_emailbody` text NOT NULL,
  `reward1_afterimporting` int(1) unsigned NOT NULL default '1',
  `reward1_afterimporting_text` text NOT NULL,
  `reward2_afterimporting` int(1) unsigned NOT NULL default '1',
  `reward2_afterimporting_text` text NOT NULL,
  `enable_reward3` int(5) unsigned NOT NULL default '1',
  `reward3_valability` text NOT NULL,
  `reward3_invitations_sent` varchar(150) NOT NULL default '',
  `resetcounter_reward3` int(5) NOT NULL default '0',
  `reward3_email_from_name` text NOT NULL,
  `reward3_email_from_address` text NOT NULL,
  `reward3_emailsubject` text NOT NULL,
  `reward3_emailbody` text NOT NULL,
  `enable_reward4` int(5) unsigned NOT NULL default '0',
  `reward4_invitations_sent` int(150) unsigned NOT NULL default '50',
  `reward4_email_from_name` varchar(250) NOT NULL,
  `reward4_email_from_address` varchar(250) NOT NULL,
  `reward4_emailsubject` varchar(250) NOT NULL,
  `reward4_emailbody` text NOT NULL,
  PRIMARY KEY  (`settingid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `staf_reward_settings`
-- 

INSERT INTO `staf_reward_settings` VALUES (1, 1, 3, 'Super-Tell-A-Friend Rewards', 'email@your-domain.com', 'Congratulations %%%sendername%%%! This is your first reward.', '<span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;">%%%sendername%%%, thank you for inviting your friends! <br /><br /> <strong>As we promised, this is your reward. Follow the link below to download your free bonus :</strong> <br /><strong> <a href="http://www.super-tell-a-friend.com">http://www.super-tell-a-friend.com</a></strong> <br /> <br /> Keep inviting your friends and you have the chance to win another reward!<br /> Also, you can always check your progress here : <br /> <a href="http://www.super-tell-a-friend.com/super-tell-a-friend-demo/userdetails.php">http://www.super-tell-a-friend.com/super-tell-a-friend-demo/userdetails.php </a><br /><br /> Good luck!<br /> www.super-tell-a-friend.com<br /></span><span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;">--------------------------------------------------------------------------------------------------------------<br />This is a demo reward email sent by Super-Tell-A-Friend script </span>', 1, 2, 'Super-Tell-A-Friend Rewards', 'email@your-domain.com', '%%%sendername%%%, this is your second reward', '<span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;"> %%%sendername%%%,<br /> Your friends have visited our website through your invitations.<br /> As we promised, this is your reward :<br /><br /> <a href="http://www.super-tell-a-friend.com"> <strong>Click here to download your reward - demo reward link!</strong></a> <br /><br /><br />Best regards,<br /> www.super-tell-a-friend.com<br /></span><span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;">--------------------------------------------------------------------------------------------------------------<br />This is a demo reward email sent by Super-Tell-A-Friend script </span>', 1, '%%%sendername%%%, invite %%%emailstobesent%%% friends NOW and you will receive our first reward.', 0, 'If %%%visitorstocome%%% friend(s) will visit our website, you will receive another BONUS!', 1, '1', '1', 1, 'Super-Tell-A-Friend Rewards', 'email@your-domain.com', '%%%sendername%%%, this is your reward for timed visitors!', '<span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;"> %%%sendername%%%,<br /> Today, your friends have visited our website through your invitations.<br /> As we promised, this is your reward for timed visitors :<br /><br /> <a href="http://www.super-tell-a-friend.com"> <strong>Click here to download your reward - demo reward link!</strong></a> <br /></span><span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;"><br />Best regards,<br /> www.super-tell-a-friend.com<br /></span><span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;">--------------------------------------------------------------------------------------------------------------<br />This is a demo reward email sent by Super-Tell-A-Friend script</span>', 1, 50, 'Super-Tell-A-Friend Rewards', 'email@your-domain.com', '%%%sendername%%%, this is your reward for registrants', '<span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;"> %%%sendername%%%,<br /><br /> 50 invited friends have registered to our website!<br /> As we promised, this is your reward for total registrants:<br /><br /> <a href="http://www.super-tell-a-friend.com"> <strong>Click here to download your reward - demo reward link!</strong></a> <br /><br /><br /><br />Best regards,<br /> www.super-tell-a-friend.com<br /></span><span style="font-size: 13px; font-family: tahoma,arial,helvetica,sans-serif;">--------------------------------------------------------------------------------------------------------------<br />This is a demo reward email sent by Super-Tell-A-Friend script </span>');

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_senders`
-- 

CREATE TABLE `staf_senders` (
  `senderid` int(255) unsigned NOT NULL auto_increment,
  `sender_email` varchar(255) NOT NULL default '',
  `sender_name` varchar(255) NOT NULL default '',
  `reward1_sent` int(1) unsigned NOT NULL default '0',
  `reward2_sent` int(1) unsigned NOT NULL default '0',
  `reward3_sent` int(1) unsigned NOT NULL default '0',
  `reward4_sent` int(1) unsigned NOT NULL default '0',
  `total_imported` int(150) NOT NULL default '0',
  `total_sent` int(150) NOT NULL default '0',
  `total_visited` int(150) NOT NULL default '0',
  `total_registered` int(150) unsigned NOT NULL default '0',
  `optintomailinglist` int(5) unsigned NOT NULL default '0',
  `reminders_sent` int(5) unsigned NOT NULL default '0',
  `user_ip` varchar(250) NOT NULL default '86.133.254.7',
  `banned` int(5) unsigned NOT NULL default '0',
  `useraffiliateid` varchar(255) NOT NULL,
  PRIMARY KEY  (`senderid`),
  KEY `senderid` (`senderid`),
  KEY `sender_email` (`sender_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `staf_senders`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_senders_branches`
-- 

CREATE TABLE `staf_senders_branches` (
  `branch_id` int(150) unsigned NOT NULL auto_increment,
  `senderid` int(150) unsigned NOT NULL default '0',
  `branch_imported` int(150) NOT NULL default '0',
  `branch_sent` int(150) NOT NULL default '0',
  `branch_visited` int(150) NOT NULL default '0',
  `branch_registered` int(150) unsigned NOT NULL default '0',
  `branch_dateandtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `branch_emailcode` varchar(255) NOT NULL default '',
  `branch_type` varchar(255) NOT NULL default '',
  `sender_custom_message` text NOT NULL,
  `sender_reff` text NOT NULL,
  PRIMARY KEY  (`branch_id`),
  KEY `branch_id` (`branch_id`),
  KEY `senderid` (`senderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `staf_senders_branches`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_smtp_servers`
-- 

CREATE TABLE `staf_smtp_servers` (
  `id` int(150) unsigned NOT NULL auto_increment,
  `mailmethod_smtp_host` varchar(250) NOT NULL,
  `mailmethod_smtp_host_port` varchar(250) NOT NULL default '25',
  `mailmethod_smtp_host_secure` varchar(250) NOT NULL,
  `mailmethod_smtp_username` varchar(250) NOT NULL,
  `mailmethod_smtp_password` varchar(250) NOT NULL,
  `used` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `staf_smtp_servers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `staf_translations`
-- 

CREATE TABLE `staf_translations` (
  `translationind` int(255) unsigned NOT NULL auto_increment,
  `toplink1` text NOT NULL,
  `toplink2` text NOT NULL,
  `toplink3` text NOT NULL,
  `toplink4` text NOT NULL,
  `toplink5` text NOT NULL,
  `importerformcontrol1` text NOT NULL,
  `importerformcontrol2` text NOT NULL,
  `importerformcontrol3` text NOT NULL,
  `lastoptionservicecombo` text NOT NULL,
  `importerformcontrol4` text NOT NULL,
  `importerformcontrol5` text NOT NULL,
  `importerjserror1` text NOT NULL,
  `importerjserror2` text NOT NULL,
  `importerjserror3` text NOT NULL,
  `importerjserror4` text NOT NULL,
  `importerjserror5` text NOT NULL,
  `importerheader1` text NOT NULL,
  `importerheader2` text NOT NULL,
  `importertextpreviewemail` text NOT NULL,
  `importerformcontrol1_ai` text NOT NULL,
  `importerformcontrol2_ai` text NOT NULL,
  `importermessage1` text NOT NULL,
  `importermessage2` text NOT NULL,
  `importermessage3` text NOT NULL,
  `importermessage4` text NOT NULL,
  `csvimporterformcontrol1` text NOT NULL,
  `csvimporterformcontrol2` text NOT NULL,
  `csvimporterformcontrol3` text NOT NULL,
  `csvimporterformcontrol4` text NOT NULL,
  `fileimporteroption1` text NOT NULL,
  `fileimporteroption2` text NOT NULL,
  `fileimporteroption3` text NOT NULL,
  `fileimporteroption4` text NOT NULL,
  `fileimporteroption5` text NOT NULL,
  `fileimporteroption6` text NOT NULL,
  `fileimporteroption7` text NOT NULL,
  `fileimporteroption8` text NOT NULL,
  `fileimporteroption9` text NOT NULL,
  `fileimporteroption10` text NOT NULL,
  `csvimporterformcontrol5` text NOT NULL,
  `csvimporterformcontrol6` text NOT NULL,
  `csvimporterjserror1` text NOT NULL,
  `csvimporterjserror2` text NOT NULL,
  `csvimporterjserror3` text NOT NULL,
  `csvimporterjserror4` text NOT NULL,
  `csvimporterjserror5` text NOT NULL,
  `csvimporterjserror6` text NOT NULL,
  `csvimporterheader1` text NOT NULL,
  `csvimporterheader2` text NOT NULL,
  `csvimportertextpreviewemail` text NOT NULL,
  `csvimporterformcontrol1_ai` text NOT NULL,
  `csvimporterformcontrol2_ai` text NOT NULL,
  `csvimportermessage1` text NOT NULL,
  `csvimportermessage2` text NOT NULL,
  `csvimportermessage3` text NOT NULL,
  `csvimportermessage4` text NOT NULL,
  `previewemail_tag1` text NOT NULL,
  `previewemail_tag2` text NOT NULL,
  `previewemail_tag3` text NOT NULL,
  `previewemail_tag4` text NOT NULL,
  `previewemail_tag5` text NOT NULL,
  `manualformcontrol1` text NOT NULL,
  `manualformcontrol2` text NOT NULL,
  `manualformcontrol3` text NOT NULL,
  `manualformcontrol4` text NOT NULL,
  `manualformcontrol5` text NOT NULL,
  `manualformcontrol6` text NOT NULL,
  `manualformcontrol7` text NOT NULL,
  `manualformcontrol8` text NOT NULL,
  `manualformcontrol9` text NOT NULL,
  `manualformcontrol10` text NOT NULL,
  `manualjserror1` text NOT NULL,
  `manualjserror2` text NOT NULL,
  `manualjserror3` text NOT NULL,
  `manualjserror4` text NOT NULL,
  `manualjserror5` text NOT NULL,
  `ymcontrol` text NOT NULL,
  `ym_message1` text NOT NULL,
  `ym_message2` text NOT NULL,
  `ym_message3` text NOT NULL,
  `captcha_text` text NOT NULL,
  `captcha_text2` text NOT NULL,
  `captcha_button` varchar(255) NOT NULL,
  `captcha_error` varchar(255) NOT NULL,
  `characters_limitation` varchar(250) NOT NULL,
  `sharercontrol1` varchar(250) NOT NULL,
  `sharercontrol2` varchar(250) NOT NULL,
  `sharercontrol3` varchar(250) NOT NULL,
  `sharercontrol4` varchar(250) NOT NULL,
  `sharercontrol5` varchar(250) NOT NULL,
  `sharercontrol6` varchar(250) NOT NULL,
  `sharercontrol7` text NOT NULL,
  PRIMARY KEY  (`translationind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `staf_translations`
-- 

INSERT INTO `staf_translations` VALUES (1, 'Import address book', 'Import from file', 'Manually add emails', 'Invite YM! contacts', 'Share our website', 'Email Address:', 'Password:', 'Your Name:', 'Regional domains', 'Import Contacts', 'Please wait...', 'Please complete your email address.', 'Please insert a valid email address.', 'For .com accounts insert only your account name.', 'Please insert your password.', 'Please complete your name.', 'Name', 'Email Address', '', 'Invite Selected Friends', 'Cancel', 'Invalid login or no contacts found.', 'contact(s) found in your address book.', 'Please select at least one contact to invite.', 'Email provider not supported.', 'Your Name:', 'Your Email Address:', 'File Format:', 'File To Import:', 'CSV - Outlook contacts', 'CSV - Thunderbird contacts', 'CSV - generic file', 'Text file - comma delimited', 'Text file - tab delimited', 'CSV - Yahoo addressbook', 'CSV - Gmail addressbook', 'CSV - Hotmail addressbook', 'CSV - Aol addressbook', '', 'Import Contacts', 'Please wait...', 'Incorrect file format.', 'Please complete your name.', 'Please complete your email address.', 'Please insert a valid email address.', 'Please browse and choose the file.', 'Incorrect file format.', 'Name', 'Email Address', '', 'Invite Selected Friends', 'Cancel', 'No contacts found in your file.', 'Error uploading file.', 'contact(s) found in your file.', 'Please select at least one contact to invite.', '[Your Name]', '[Your friend''s name]', '[Your Email]', '[Your friend''s email]', '[Your custom message]', 'Your Name:', 'Your Email Address:', 'Friend''s Name:', 'Friend''s Email Address:', 'Add Email', 'Invite Friends', 'Friend list to invite:', '', '[Remove this email]', 'Sending emails...Please wait...', 'Your name and email address are required. Please fill in.', 'Please insert a valid email address.', 'Please add at least one email address.', 'Friend name is required.', 'Please insert a valid email address.', 'Check your status', 'Checking your status...', 'You are online! Preview your message and click on ''Send Message''', 'You are offline. You must be logged into Yahoo Messenger to use this tool!', 'Are you human? Sorry to ask, but we need to keep spam bots out.', 'Please enter the security code as shown in the image below, then press on ''Continue''.', 'Continue', 'Sorry, the code was incorrect. Please try again.', '', 'Selected service:', 'Link to promote:', 'Subject:', 'Message:', 'Share!', 'Share more', 'Thank you for sharing our website!');

-- --------------------------------------------------------

-- 
-- Table structure for table `staf_users`
-- 

CREATE TABLE `staf_users` (
  `userid` int(40) unsigned NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `userpassword` varchar(80) NOT NULL default '',
  `useremailaddress` varchar(150) NOT NULL default '',
  `userfullname` varchar(150) NOT NULL default '',
  `usertype` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=10001 ;

-- 
-- Dumping data for table `staf_users`
-- 

INSERT INTO `staf_users` VALUES (10000, 'admin', '25e4ee4e9229397b6b17776bfceaf8e7', 'email@your-domain.com', 'Admin', 0);
