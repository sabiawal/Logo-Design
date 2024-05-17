<?php

	/************************************************/
	/* JetPay Merchant Transaction Payment Pages    */
	/*              Version 1.09.01                 */
	/* For questions or assistance with this or any */
	/* pages in this package, please contact JetPay */
	/* Customer Service at 800-834-4405 option 2    */
	/* or email to assist@jetpay.com                */
	/* Development Team:                            */
	/* Dave Lantz - Lead Devlopment and Design      */
	/* Shez Virani - Technical Code Review          */
	/* David Wright - Email and Code Review         */
	/* These pages may not be reproduced or 		*/
	/* distributed with out the concent of JetPayLLC*/
	/* All Rights Reserved                          */
	/* Copyright 2006                               */
	/************************************************/

	// Transaction Type Setting
		$transactionType = "SALE";
		
	// Enter the Terminal ID or "TID" as for this merchnat
	// NOTE: TID is case sensitive
		if($_SERVER['REMOTE_ADDR'] == '202.166.221.121' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1')
        {
        $tid = "TESTTERMINAL";
        }
        else
        {
		$tid = "HANDPERFE001";
        }
	
	// Version and Subscriber information **DO NOT EDIT**
		$verSub = "Jp API 1.0";
				
	//Minium transaction amount ***this amount must reflect the amount *100 i.e 1.00 = 100, 10.00 = 1000 etc.***
		$minTransAmount = "100";
		$maxTransAmount = "1500000";
	
	// This is the merchant information that will apper on the thankyou.php when a transaction has been approved. 
	// **Note** change only the information in single quotes exp. $mer_domain = 'CHANGETHIS';
	// **Note** $mer_name will also populate the page header for each web page.
	
		$mer_domain = 'jetpay.com';
		$mer_name = 'Logo Design Guarantee';
		$mer_address1 = '3361 Boyington Dr';
		$mer_address2 = 'Suite 180';
		$mer_city = 'Carrollton';
		$mer_state = 'Texas';
		$mer_zip = '75006';
		$mer_phone = '972-503-8900';
		$mer_fax = '972-503-9100';
		$mer_tag = '"Thanks For Shopping With Us!"';
		
	
?>
