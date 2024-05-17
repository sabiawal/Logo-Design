<?php
class Mydata{
    function getcountry(){
          $StateProvinceTwoToFull = array(
       'AA' => 'Armed Forces Americas - AA',
       'AE' => 'Armed Forces Europe - AE',
       'AP' => 'Armed Forces Pacific - AP',
       'AL' => 'Alabama',
       'AK' => 'Alaska',
       'AS' => 'American Samoa',
       'AZ' => 'Arizona',
       'AR' => 'Arkansas',
       'CA' => 'California',
       'CO' => 'Colorado',
       'CT' => 'Connecticut',
       'DE' => 'Delaware',
       'DC' => 'District of Columbia',
       'FM' => 'Federated States of Micronesia',
       'FL' => 'Florida',
       'GA' => 'Georgia',
       'GU' => 'Guam',
       'HI' => 'Hawaii',
       'ID' => 'Idaho',
       'IL' => 'Illinois',
       'IN' => 'Indiana',
       'IA' => 'Iowa',
       'KS' => 'Kansas',
       'KY' => 'Kentucky',
       'LA' => 'Louisiana',
       'ME' => 'Maine',
       'MH' => 'Marshall Islands',
       'MD' => 'Maryland',
       'MA' => 'Massachusetts',
       'MI' => 'Michigan',
       'MN' => 'Minnesota',
       'MS' => 'Mississippi',
       'MO' => 'Missouri',
       'MT' => 'Montana',
       'NE' => 'Nebraska',
       'NV' => 'Nevada',
       'NH' => 'New Hampshire',
       'NJ' => 'New Jersey',
       'NM' => 'New Mexico',
       'NY' => 'New York',
       'NC' => 'North Carolina',
       'ND' => 'North Dakota',
       'MP' => 'Northern Mariana Islands',
       'OH' => 'Ohio',
       'OK' => 'Oklahoma',
       'OR' => 'Oregon',
       'PW' => 'Palau',
       'PA' => 'Pennsylvania',
       'PR' => 'Puerto Rico',
       'RI' => 'Rhode Island',
       'SC' => 'South Carolina',
       'SD' => 'South Dakota',
       'TN' => 'Tennessee',
       'TX' => 'Texas',
       'UT' => 'Utah',
       'VT' => 'Vermont',
       'VI' => 'Virgin Islands',
       'VA' => 'Virginia',
       'WA' => 'Washington',
       'WV' => 'West Virginia',
       'WI' => 'Wisconsin',
       'WY' => 'Wyoming',
       'AB' => 'Alberta',
       'BC' => 'British Columbia',
       'MB' => 'Manitoba',
       'NB' => 'New Brunswick',
       'NF' => 'Newfoundland',
       'NW' => 'Northwest Territory',
       'NS' => 'Nova Scotia',
       'ON' => 'Ontario',
       'PE' => 'Prince Edward Island',
       'QU' => 'Quebec',
       'SK' => 'Saskatchewan',
       'YT' => 'Yukon Territory',
    	);
        return $StateProvinceTwoToFull;
    }
    function gatewaysetting(){
        
    // Gateway Settings	
	// Card Acceptance - true if the merchant takes the card type | false if the mrechant does not take the card type.
		$GatewaySettings['AllowMC']				    = true;
		$GatewaySettings['AllowVisa']				= true;
		$GatewaySettings['AllowAmex']				= false;
		$GatewaySettings['AllowDiscover']			= false;
		$GatewaySettings['AllowJCB']				= false;
		$GatewaySettings['AllowDiners']				= false;
		$GatewaySettings['AllowCarteBlanche']		= false;
		$GatewaySettings['AllowEnRoute']			= false;

	// ACH (E_Checks) Acceptans - "true" if the merchant takes the ACH | "false" if the mrechant does not take ACH.
	// (Future Implementation)
	//  $GatewaySettings['AllowEChecks']			= true;
	
	// Merchant to accept international transactions true if the merchant does international | false if the mrechant does not accept international.
		$GatewaySettings['AllowInternational']			= false;	
				
			
	// Email Settings
		$GatewaySettings['email_customer']			= "FALSE";		// "TRUE"/"FALSE"
		$GatewaySettings['merchant_email']			= "dlantz@jetpay.com";			// Your Email address to send copy of receipts to, if you want them.
		$GatewaySettings['header_email_receipt']		= "Thanks for your purchase!";
		$GatewaySettings['footer_email_receipt']		= "Please come again!";

	// Environment Configuration
	if($_SERVER['REMOTE_ADDR'] == '202.166.221.121'){
        $GatewaySettings['url']				= "https://test1.jetpay.com/jetpay"; // Test url (Post XML)
        }
        else{
		$GatewaySettings['url']				= "https://gateway17.jetpay.com/jetpay"; //Production url (Post XML)
	   }
	
	//------DO NOT EDIT BELOW THIS LINE-----------
	// If the curl extension is not loaded in your php setup, you can use the curl command line tool.
	// If you do not have the curl command line tool and you want to use it instead of adding the curl
	// 	PHP extension, you can download it from: http://curl.haxx.se/download.html
		$GatewaySettings['curl_location']			= "/usr/bin/curl";

	// If transaction approved send to Approval Page
		$GatewaySettings['PaymentApprovedPage']			= "thankyou2.php"; 	// Approval Page
	
	// If transaction not approved send to Decline page
		$GatewaySettings['PaymentDeniedPage']			= "failed2.php";     // Failure Page

	// If wrong MathLab answer entered send to 404 page
		$GatewaySettings['404MathLab']				= "404.php";		//404 Error Page
        
        return  $GatewaySettings;

    }    
}
?>