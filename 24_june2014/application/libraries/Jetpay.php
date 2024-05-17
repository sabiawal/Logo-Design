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
            'US' => 'United States of America',
            'AF' => 'Afghanistan',
            'AL' => 'Albania, People\'s Socialist Republic of',
            'DZ' => 'Algeria, People\'s Democratic Republic of',
            'AS' => 'American Samoa',
            'AD' => 'Andorra, Principality of',
            'AO' => 'Angola, Republic of',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica (the territory South of 60 deg S)',
            'AG' => 'Antigua and Barbuda',
            'AR' => 'Argentina, Argentine Republic',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia, Commonwealth of',
            'AT' => 'Austria, Republic of',
            'AZ' => 'Azerbaijan, Republic of',
            'BS' => 'Bahamas, Commonwealth of the',
            'BH' => 'Bahrain, Kingdom of',
            'BD' => 'Bangladesh, People\'s Republic of',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium, Kingdom of',
            'BZ' => 'Belize',
            'BJ' => 'Benin, People\'s Republic of',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan, Kingdom of',
            'BO' => 'Bolivia, Republic of',
            'BA' => 'Bosnia and Herzegovina',
            'BW' => 'Botswana, Republic of',
            'BV' => 'Bouvet Island (Bouvetoya)',
            'BR' => 'Brazil, Federative Republic of',
            'IO' => 'British Indian Ocean Territory (Chagos Archipelago)',
            'VG' => 'British Virgin Islands',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria, People\'s Republic of',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi, Republic of',
            'KH' => 'Cambodia, Kingdom of',
            'CM' => 'Cameroon, United Republic of',
            'CA' => 'Canada',
            'CV' => 'Cape Verde, Republic of',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad, Republic of',
            'CL' => 'Chile, Republic of',
            'CN' => 'China, People\'s Republic of',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia, Republic of',
            'KM' => 'Comoros, Federal and Islamic Republic of',
            'CD' => 'Congo, Democratic Republic of',
            'CG' => 'Congo, People\'s Republic of',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica, Republic of',
            'CI' => 'Cote D\'Ivoire, Ivory Coast, Republic of the',
            'CU' => 'Cuba, Republic of',
            'CY' => 'Cyprus, Republic of',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark, Kingdom of',
            'DJ' => 'Djibouti, Republic of',
            'DM' => 'Dominica, Commonwealth of',
            'DO' => 'Dominican Republic',
            'TL' => 'Timor-Leste',
            'EC' => 'Ecuador, Republic of',
            'EG' => 'Egypt, Arab Republic of',
            'SV' => 'El Salvador, Republic of',
            'GQ' => 'Equatorial Guinea, Republic of',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FO' => 'Faeroe Islands',
            'FK' => 'Falkland Islands (Malvinas)',
            'FJ' => 'Fiji, Republic of the Fiji Islands',
            'FI' => 'Finland, Republic of',
            'FR' => 'France, French Republic',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon, Gabonese Republic',
            'GM' => 'Gambia, Republic of the',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana, Republic of',
            'GI' => 'Gibraltar',
            'GR' => 'Greece, Hellenic Republic',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadaloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala, Republic of',
            'GN' => 'Guinea, Revolutionary People\'s Rep\'c of',
            'GW' => 'Guinea-Bissau, Republic of',
            'GY' => 'Guyana, Republic of',
            'HT' => 'Haiti, Republic of',
            'HM' => 'Heard and McDonald Islands',
            'VA' => 'Holy See (Vatican City State)',
            'HN' => 'Honduras, Republic of',
            'HK' => 'Hong Kong, Special Administrative Region of China',
            'HR' => 'Hrvatska (Croatia)',
            'HU' => 'Hungary, Hungarian People\'s Republic',
            'IS' => 'Iceland, Republic of',
            'IN' => 'India, Republic of',
            'ID' => 'Indonesia, Republic of',
            'IR' => 'Iran, Islamic Republic of',
            'IQ' => 'Iraq, Republic of',
            'IE' => 'Ireland',
            'IL' => 'Israel, State of',
            'IT' => 'Italy, Italian Republic',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JO' => 'Jordan, Hashemite Kingdom of',
            'KZ' => 'Kazakhstan, Republic of',
            'KE' => 'Kenya, Republic of',
            'KI' => 'Kiribati, Republic of',
            'KP' => 'Korea, Democratic People\'s Republic of',
            'KR' => 'Korea, Republic of',
            'KW' => 'Kuwait, State of',
            'KG' => 'Kyrgyz Republic',
            'LA' => 'Lao People\'s Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon, Lebanese Republic',
            'LS' => 'Lesotho, Kingdom of',
            'LR' => 'Liberia, Republic of',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein, Principality of',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg, Grand Duchy of',
            'MO' => 'Macao, Special Administrative Region of China',
            'MK' => 'Macedonia, the former Yugoslav Republic of',
            'MG' => 'Madagascar, Republic of',
            'MW' => 'Malawi, Republic of',
            'MY' => 'Malaysia',
            'MV' => 'Maldives, Republic of',
            'ML' => 'Mali, Republic of',
            'MT' => 'Malta, Republic of',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania, Islamic Republic of',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico, United Mexican States',
            'FM' => 'Micronesia, Federated States of',
            'MD' => 'Moldova, Republic of',
            'MC' => 'Monaco, Principality of',
            'MN' => 'Mongolia, Mongolian People\'s Republic',
            'MS' => 'Montserrat',
            'MA' => 'Morocco, Kingdom of',
            'MZ' => 'Mozambique, People\'s Republic of',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru, Republic of',
            'NP' => 'Nepal, Kingdom of',
            'AN' => 'Netherlands Antilles',
            'NL' => 'Netherlands, Kingdom of the',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua, Republic of',
            'NE' => 'Niger, Republic of the',
            'NG' => 'Nigeria, Federal Republic of',
            'NU' => 'Niue, Republic of',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands',
            'NO' => 'Norway, Kingdom of',
            'OM' => 'Oman, Sultanate of',
            'PK' => 'Pakistan, Islamic Republic of',
            'PW' => 'Palau',
            'PS' => 'Palestinian Territory, Occupied',
            'PA' => 'Panama, Republic of',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay, Republic of',
            'PE' => 'Peru, Republic of',
            'PH' => 'Philippines, Republic of the',
            'PN' => 'Pitcairn Island',
            'PL' => 'Poland, Polish People\'s Republic',
            'PT' => 'Portugal, Portuguese Republic',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar, State of',
            'RE' => 'Reunion',
            'RO' => 'Romania, Socialist Republic of',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda, Rwandese Republic',
            'SH' => 'St. Helena',
            'KN' => 'St. Kitts and Nevis',
            'LC' => 'St. Lucia',
            'PM' => 'St. Pierre and Miquelon',
            'VC' => 'St. Vincent and the Grenadines',
            'WS' => 'Samoa, Independent State of',
            'SM' => 'San Marino, Republic of',
            'ST' => 'Sao Tome and Principe, Democratic Republic of',
            'SA' => 'Saudi Arabia, Kingdom of',
            'SN' => 'Senegal, Republic of',
            'SC' => 'Seychelles, Republic of',
            'SL' => 'Sierra Leone, Republic of',
            'SG' => 'Singapore, Republic of',
            'SK' => 'Slovakia (Slovak Republic)',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia, Somali Republic',
            'ZA' => 'South Africa, Republic of',
            'GS' => 'South Georgia and the South Sandwich Islands',
            'ES' => 'Spain, Spanish State',
            'LK' => 'Sri Lanka, Democratic Socialist Republic of',
            'SD' => 'Sudan, Democratic Republic of the',
            'SR' => 'Suriname, Republic of',
            'SJ' => 'Svalbard & Jan Mayen Islands',
            'SZ' => 'Swaziland, Kingdom of',
            'SE' => 'Sweden, Kingdom of',
            'CH' => 'Switzerland, Swiss Confederation',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan, Province of China',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania, United Republic of',
            'TH' => 'Thailand, Kingdom of',
            'TG' => 'Togo, Togolese Republic',
            'TK' => 'Tokelau (Tokelau Islands)',
            'TO' => 'Tonga, Kingdom of',
            'TT' => 'Trinidad and Tobago, Republic of',
            'TN' => 'Tunisia, Republic of',
            'TR' => 'Turkey, Republic of',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks and Caicos Islands',
            'TV' => 'Tuvalu',
            'VI' => 'US Virgin Islands',
            'UG' => 'Uganda, Republic of',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'UM' => 'United States Minor Outlying Islands',
            'UY' => 'Uruguay, Eastern Republic of',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela, Bolivarian Republic of',
            'VN' => 'Viet Nam, Socialist Republic of',
            'WF' => 'Wallis and Futuna Islands',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'YU' => 'Yugoslavia, Socialist Federal Republic of',
            'ZM' => 'Zambia, Republic of',
            'ZW' => 'Zimbabwe'
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
        $test_cards = array('4111111111111111');
        $xml_obj = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOWARNING); 
        if(in_array($xml_obj->CardNum,$test_cards)):
            $url            = $this->url;
        else:
            $url            = $this->url2;
        endif;
        
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