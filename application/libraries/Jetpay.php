<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jetpay{

    //var $tid        = 'TESTTERMINAL';
    //var $tid        = "HANDPERFE001";
    var $tid        = "EIM2FU9E4R5D";
    var $url        = 'https://test1.jetpay.com/jetpay';
    var $url2       = 'https://gateway17.jetpay.com/jetpay';
    
    
    var $trans_type = 'SALE';
    
    
    public function get_state($code=NULL,$country=NULL){ 
        $ISO3166TwoToName = array(
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
   'OT' => 'Other'
	);
        
        $output =  "<option value=''>Select A State</option>";
        while(list($abbreviation, $name) = each($ISO3166TwoToName)){
            $output .= "<option value='". $abbreviation ."'".($country ==$abbreviation?' selected':'').
            ">". $name ."</option>";
        }
        reset($ISO3166TwoToName);        
        return($output);        
    }
    
    function sendXMLString ( &$xmlString ){
        // To add test card number for test url
        $test_cards = array('4111111111111111','4012888818888','4007000000027');
        $xml_obj = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOWARNING); 
        if(in_array($xml_obj->CardNum,$test_cards)):
            $url            = $this->url;
        else:
            $url            = $this->url2;
        endif;
        // End To add test card number for test url
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);                 // url to connect with
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);         // return data as string
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);          // force new connection (not cached)
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);               // max # secs allowed to execute
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);         // allow connection to jetpay w/o verify
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POST, 1);                   // set method type to post
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlString);    // set string of data to post
        
        $response = curl_exec($ch);   // connect, send, and receive
        if (curl_errno($ch))
        {
            return ("no responce from gateway");
        }
        else
        {
            curl_close($ch);
            return $this->parse_api_response($response);
        }
    }
    
    function parse_api_response($content) {
        $parsedresponse = simplexml_load_string($content, "SimpleXMLElement", LIBXML_NOWARNING);        
        return $parsedresponse;
    }
    // To get Transaction ID
    function get_transactionID(){
        // Get values needed for xml string
        // get date for first part of transaction id and use getrand() for second part
        $date = date("YmdHis");   //puts in format YYYYMMDDhhmmss
        $rand_str = $this->getrand();
        return $transactionID = $date . $rand_str;
    }
    
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
    // To get Transaction ID End
}
?>