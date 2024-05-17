<?php 
	//ini_set('session.gc_probability','100'); 
	include_once("jetpay/gatewayapi/inc_gatewayapi.php");
    
    //echo "<pre>";	
//    print_r($_SESSION); die;
    $ip = $_SERVER['REMOTE_ADDR'];
	
	// random key generator for partial transaction id
	function getrand() {
	   	// random key paramters
   	   	$keyset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   		$length = 4;   // first 14 chars of transaction_id are date, last 4 random

	    // Random Key Generator
   		$randkey = "";
   		$max = strlen($keyset)-1;

   		for ($i=0; $i<$length; $i++) {
      		$randkey .= substr($keyset, rand(0,$max), 1);
   		}
   		return $randkey;
   }
   
	// end function getrand()

	// This section grabs all the information that was entered into the order form page and creates all the variables
	
	// Get values needed for xml string
	// get date for first part of transaction id and use getrand() for second part
	$date = date("YmdHis");   //puts in format YYYYMMDDhhmmss
	$rand_str = getrand();
	$transactionID = $date . $rand_str;
	$name = $_SESSION['name'];

	// get cardnum and expdate
	$cardnum = $_SESSION['cardnum'];
	$cvv2 = $_SESSION['CVV2'];

	// break down expiration date from MMYY to two variables
	$expmo = $_SESSION['exp_month'];
	$expyr = $_SESSION['exp_year'];

	$amount = $_SESSION['amount'];
	$amount = $amount * 100;

	// AVS Checking
	$address1 = $_SESSION['address1'];
	$address2 = $_SESSION['address2'];
	$city = $_SESSION['city'];
	$state = $_SESSION['state'];
	$zip = $_SESSION['zip'];
	$country = @$_SESSION['country'];

	// email
	$email = $_POST['email'];
		 
	// End of section for capturing data from order form page

	// Section where error checking occurs

	// Holds all the generated error messages
	$errorString = "";
	
    // Address field checking
	if ( $address1 == "" )
	{
		$errorString .= "We are Sorry, Please Enter the Billing Address For This Card.<br>";
	}
    // City field checking
	if ( $city == "" )
	{
		$errorString .= "We are Sorry, Please Enter the Billing City For This Card.<br>";
	}
    //State filed checking
	if( $state == "Select A State")
	{
		$errorString .= "We are Sorry, Please Enter the Billing State For This Card.<br>";
	}
    // Zip Code Checking
	if ( $zip == "" )
	{
		$errorString .= "We are Sorry, Please Enter the Billing Zip/Postal Code For This Card.<br>";
	}
	// Name field checking
	if ( $name == "" )
	{
		$errorString .= "We are Sorry, Please Enter Your Name As It Appers on Your Credit Card.<br>";
	}

	
	// Credit card number error checking
	$cardnum = StripNonNumeric ($cardnum);
	if ( $cardnum == "" )
	{
		$errorString .= "We are Sorry, Please Enter Your Credit Card Number.<br>";
	}
	else
	{
		if(!CheckLuhn10($cardnum))
		{
			$errorString .= "We are Sorry, The Credit Card Number Entered is Not Valid.<br>";
		}
		else
		{
			if (cardTypeAccepted($cardnum,$GatewaySettings))
			{
				//DONT DO ANYTHING
				//print "Credit Card Success.<br>";
			}
			else
			{
				$errorString .= "We are Sorry, We Cannot Accept This Type of Card. Please Use a Different One.<br>";
			}
		}
	}
	// End credit card error checking

	// Expiration date error checking
	if ( $expmo == "" )
	{
		$errorString .= "We are Sorry, Please Enter Credit Card Expiration Month.<br>";
	}

	if ( $expyr == "" )
	{
		$errorString .= "We are Sorry, Please Enter Credit Card Expiration Year.<br>";
	}

	if ( $expmo !== "" && $expyr !== "" )
	{
		if ( checkMonthIsNotPast ( $expmo, $expyr ) )
		{
			//DO NOTHING
			//print "Expiration Date Success.<br>";
		}
		else
		{
			$errorString .= "We are Sorry, The Credit Card has Expired.  Please Try Another Card or Enter Correct Expiration Date.<br>";
		}
	}
	// End expiration date error checking

	// CVV2/CVC2/CID Error Checking
	if ( $cvv2 == "" )
	{
		$errorString .= "We are sorry.  Please Enter Security Code Found on the Credit Card.<br>";
	}
	else
	{
		$type = getCardType($cardnum);
		$length = strlen($cvv2);
		if ( $type == "Amex" )
		{
			if ( $length !== 4 )
			{
				$errorString .= "We are Sorry.  Security Code for American Express Must be Four Digits Long.<br>";
			}
			else
			{
				//print "Security Code Success.<br>";
			}
		}
		else
		{
			if ( $length !== 3 )
			{
				$errorString .= "We are Sorry.  Security Code Must be Three Digits Long.<br>";
			}
			else
			{
				//print "Security Code Success.<br>";
			}
		}
	}
	// End Security Code Error Checking
	
	// Amount Checking
	if ( $amount < $minTransAmount )
	{
		$errorString .= "We are sorry.  The Amount is too Low.<br>";
	}
	elseif ( $amount > $maxTransAmount )
	{
		$errorString .= "We are sorry.  The Amount is too High.<br>";
	}
	// End Amount Error Checking
    	
	// E-mail Error Checking
	//if ( $email != "" )
//	{
//		if( !(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) )
//		{
//			$errorString .= "We are sorry.  The e-mail address you have entered is not valid.<br>";
//		}
//	}
//	else
//	{
//		$errorString .= "We are sorry.  Please enter a valid e-mail address.<br>";
//	}
	// End E-mail Error Checking

	//print "error string is >$errorString<";

	//-------------------------------------------------------------------------
	//End Error Checking Section

	//XML Section
	//--------------------------------------------------------------------------
 	     
     if ( $errorString == "" )
  	{
  		//Create XML String
     	$xmlString = "<JetPay>";
		$xmlString .= "<TransactionType>" . $transactionType . "</TransactionType>";
		$xmlString .= "<MerchantID>" . $tid . "</MerchantID>";
		$xmlString .= "<TransactionID>" . $transactionID . "</TransactionID>";
		$xmlString .= "<CardNum>" . $cardnum . "</CardNum>";
		$xmlString .= "<CVV2>" . $cvv2 . "</CVV2>";
		$xmlString .= "<CardExpMonth>" . $expmo . "</CardExpMonth>";
		$xmlString .= "<CardExpYear>" . $expyr . "</CardExpYear>";
		$xmlString .= "<CardName>" . $name . "</CardName>";
		$xmlString .= "<TotalAmount>" . $amount . "</TotalAmount>";
		$xmlString .= "<BillingAddress>" . $address1 . "</BillingAddress>";
		$xmlString .= "<BillingCity>" . $city . "</BillingCity>";
		$xmlString .= "<BillingStateProv>" . $state . "</BillingStateProv>";
		$xmlString .= "<BillingPostalCode>" . $zip . "</BillingPostalCode>";
		//$xmlString .= "<BillingCountry>" . $country . "</BillingCountry>";
		//$smlString .= "<BillingPhone>" . $phone . "</BillingPhone>";
		//$xmlString .= "<Email>" . $email . "</Email>";
		$xmlString .= "<Version><Subscriber>" . $verSub . "</Subscriber></Version>";
		
		// ***FUTURE DEVELOPMENT XML INFORMATION***
		//if (($transactionType == "FORCE") || ($transactionType == "CAPT") || ($transactionType == "VOID"))
		//{
 		//   $xmlString .= "<Approval>" . $approvalCode . "</Approval>";
		//}
		// ***END FUTURE DEVLOPMENT XML INFORMATION***
		
		$xmlString .= "</JetPay>";	
		//print "$xmlString.<br>";        
		//Send XML to JetPay
		$xmlResponse = sendXMLString($xmlString,$GatewaySettings);

		//Check for curl error
		if ( $xmlResponse == "" )
		{
			header("Location: " . $GatewaySettings['PaymentDeniedPage'] . "?gateway_error=" . rawurlencode("Transaction error.  Please try again."));
		
        }
		else
		{
			// Parse XML response
			$xml_parser = xml_parser_create();
			// set to not change to uppercase
			xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, 0);
			// ignore white space
			xml_parser_set_option($xml_parser, XML_OPTION_SKIP_WHITE, 1);
			// puts values in an array of xml tags (vals)
			xml_parse_into_struct($xml_parser, $xmlResponse, $vals, $index);
			xml_parser_free($xml_parser);
			
			$retTransID = "";
			$retActionCode = "";
			$retApproval = "";
			$retCVV2 = "";
			$retResponseText = "";
			$retAddressMatch = "";
			$retZipMatch ="";
			$retAVS = "";
			$retErrMsg = "";
			
			$numTags = $index[JetPayResponse][1];        // number of tags including JetPayResponse
			$numTags = 9;
		
			for ($x=0; $x<$numTags; $x++)
			{
				$key = $vals[$x][tag];
											 
				switch ($key) 
				{
				  case "TransactionID":        
					$retTransID = $vals[$x][value];
					break;
				  case "ActionCode":           
					$retActionCode = $vals[$x][value];
					break;
				  case "Approval":             
					$retApproval = $vals[$x][value];
					break;
				  case "CVV2":             
					$retCVV2 = $vals[$x][value];
					break;
				  case "ResponseText":         
					 $retResponseText = $vals[$x][value];
					break;
				  case "AddressMatch":             
					$retAddressMatch = $vals[$x][value];
					break;
				  case "ZipMatch":             
					$retZipMatch = $vals[$x][value];
					break;
				  case "AVS":             
					$retAVS = $vals[$x][value];
					break;
				  case "JetPayResponse":       
					// wrappers - can be ignored
					break;
				  case "ErrMsg":               
					$retErrMsg = $vals[$x][value];
					break;
				  default:                     
					// if other message could be error
					$retErrMsg = $vals[$x][value];
					break;
			   } // end switch
			} // end for loop
			
			$newAmount = number_format(($amount)/100, 2, '.', '');
			
			if ( $retActionCode == "000" )
			{
			 //$jetpayCode = "jetpay".$_SESSION['insert'];
             //$jetpayCode = base64_encode($jetpayCode);
			 
				header("Location: " . $GatewaySettings['PaymentApprovedPage'] . "?TransactionID=" . rawurlencode($retTransID) . "&ApprovalCode=" . rawurlencode($retApproval)
						. "&ip=".$ip."&web_id=".@$_SESSION['insert_id']."&logo_id=".@$_SESSION['insert_id2']."&price=".rawurlencode($newAmount).'&authentication_code='.$_SESSION['authentication_code']); //  currently authentication_code only used for logo purpose
			}
			else
			{
				//Function that takes retActionCode -> String based on code
				header("Location: " . $GatewaySettings['PaymentDeniedPage'] . "?gateway_error=" . rawurlencode($retActionCode));
			}
		}
	}
  	else 
	{
		 header("Location: " . $GatewaySettings['PaymentDeniedPage'] . "?gateway_error=" . rawurlencode($errorString));
	}
	
	//---------------------------------------------------------------------------
	//End XML Section

	//check to see if force transaction for authcode
	//if (($transactionType == "FORCE") || ($transactionType == "CAPT") || ($transactionType == "VOID"))
	// {
	//if (!empty($_POST['authcode'])) {
	//  $approvalCode = $_POST['authcode'];
	// } else {
	// this option should only be used for testing
	// an invalid approval code for a force or capture will return
	// a decline on a void or capture, and should never be used for a force.
	//     $approvalCode = "123456";
	//  }
	//}

	//if ($transactionType == "VOID")
	//{
	//$transactionID = $_POST['transactionid'];


?>
