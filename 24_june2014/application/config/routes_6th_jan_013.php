<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "logodesign";

$route['packages']    = "logodesign/packages";
$route['index']       = "logodesign/index";
$route['process']     = "logodesign/process";
$route['compare']     = "logodesign/compare";
$route['portfolio']   = "logodesign/portfolio";
/*$route['portfolio2']  = "logodesign/portfolio2";
$route['portfolio3']  = "logodesign/portfolio3";
$route['portfolio4']  = "logodesign/portfolio4";
$route['portfolio5']  = "logodesign/portfolio5";
$route['portfolio6']  = "logodesign/portfolio6";
$route['portfolio7']  = "logodesign/portfolio7";
$route['portfolio8']  = "logodesign/portfolio8";
$route['portfolio9']  = "logodesign/portfolio9";
$route['portfolio10'] = "logodesign/portfolio10";
$route['portfolio11'] = "logodesign/portfolio11";*/

$route['testimonials'] = "logodesign/portfolio2";
$route['testimonials2'] = "logodesign/portfolio3";
$route['testimonials3'] = "logodesign/portfolio4";
$route['testimonials4'] = "logodesign/portfolio5";
$route['testimonials5'] = "logodesign/portfolio6";
$route['testimonials6'] = "logodesign/portfolio7";
$route['testimonials7'] = "logodesign/portfolio8";
$route['testimonials8'] = "logodesign/portfolio9";
$route['testimonials9'] = "logodesign/portfolio10";
$route['testimonials10'] = "logodesign/portfolio11";

$route['guarantee']   = "logodesign/guarantee";
$route['about']       = "logodesign/about";
$route['ourmgmt']     = "logodesign/ourmgmt";
$route['qualitycontrol'] = "logodesign/qualitycontrol";
$route['partnership']    = "logodesign/partnership";
$route['terms']          = "logodesign/terms";
$route['privacypolicy']  = "logodesign/privacypolicy";
$route['casestudy']      = "logodesign/casestudy";
$route['faq']            = "logodesign/faq";
$route['contact']        = "logodesign/contact";
$route['charity']        = "logodesign/charity";
$route['adaward']   = "logodesign/adaward";
$route['saward']    = "logodesign/saward";
$route['rdaward']   = "logodesign/rdaward";
$route['livehelp']  = "logodesign/livehelp";
$route['freesms']   = "logodesign/freesms";
$route['payment']   = "logodesign/payment";
$route['order']     = "logodesign/order";
$route['orderone']  = "logodesign/orderone";
$route['ordertwo']  = "logodesign/ordertwo";
$route['cart']      = "logodesign/cart";
$route['paybank']   = "logodesign/paybank";
$route['thankyou']  = "logodesign/thankyou"; 
$route['autosave']  = "logodesign/autosave"; 

$route['jetpaymid']  = "logodesign/jetpaymid";
$route['jetpay']  = "logodesign/jetpay";
$route['process_transactionmid']  = "logodesign/process_transactionmid";
$route['process_transaction']  = "logodesign/process_transaction";

$route['jetpaymidpayment']  = "logodesign/jetpaymidpayment";
$route['jetpaypayment']    = "logodesign/jetpaypayment";
$route['process_transaction_payment']  = "logodesign/process_transaction_payment";
$route['failed']  = "logodesign/failed";
$route['cvv']  = "logodesign/cvv";

// new order process starts
$route['orderstart']  = "logodesign/orderstart";
// new order process ends

$route['packages2']    = "logodesign/packages";
$route['index2']       = "logodesign/index";
$route['process2']     = "logodesign/process";
$route['compare2']     = "logodesign/compare";
/*$route['portfolio22']  = "logodesign/portfolio2";
$route['portfolio32']  = "logodesign/portfolio3";
$route['portfolio42']  = "logodesign/portfolio4";
$route['portfolio52']  = "logodesign/portfolio5";
$route['portfolio62']  = "logodesign/portfolio6";
$route['portfolio72']  = "logodesign/portfolio7";
$route['portfolio82']  = "logodesign/portfolio8";
$route['portfolio92']  = "logodesign/portfolio9";
$route['portfolio102'] = "logodesign/portfolio10";*/
$route['guarantee2']   = "logodesign/guarantee";
$route['about2']       = "logodesign/about";
$route['ourmgmt2']     = "logodesign/ourmgmt";
$route['qualitycontrol2'] = "logodesign/qualitycontrol";
$route['partnership2']    = "logodesign/partnership";
$route['terms2']          = "logodesign/terms";
$route['privacypolicy2']  = "logodesign/privacypolicy";
$route['casestudy2']      = "logodesign/casestudy";
$route['faq2']            = "logodesign/faq";
$route['contact2']        = "logodesign/contact";
$route['charity2']        = "logodesign/charity";
$route['adaward2']   = "logodesign/adaward";
$route['saward2']    = "logodesign/saward";
$route['rdaward2']   = "logodesign/rdaward";
$route['livehelp2']  = "logodesign/livehelp";
$route['freesms2']   = "logodesign/freesms";
$route['payment2']   = "logodesign/payment";
$route['order2']     = "logodesign/order";
$route['orderone2']  = "logodesign/orderone";
$route['ordertwo2']  = "logodesign/ordertwo";
$route['cart2']      = "logodesign/cart";
$route['paybank2']   = "logodesign/paybank";
$route['thankyou2']  = "logodesign/thankyou"; 

//new portfolio routes
$route['industry/Accounting-Logo-Design']  = "logodesign/industry/Accounting-Logo-Design";
$route['industry/Attorney-and-Legal-Logo-Design']  = "logodesign/industry/Attorney-and-Legal-Logo-Design";
$route['industry/Automotive-Logo-Design']  = "logodesign/industry/Automotive-Logo-Design";
$route['industry/Biotechnology-and-Pharmaceutical-Logo-Design']  = "logodesign/industry/Biotechnology-and-Pharmaceutical-Logo-Design";
$route['industry/Church-and-Religious-Logo-Design']  = "logodesign/industry/Church-and-Religious-Logo-Design";
$route['industry/Construction-Logo-Design']  = "logodesign/industry/Construction-Logo-Design";
$route['industry/Consulting-Logo-Design']  = "logodesign/industry/Consulting-Logo-Design";
$route['industry/Dental-Logo-Design']  = "logodesign/industry/Dental-Logo-Design";
$route['industry/Education-Logo-Design']  = "logodesign/industry/Education-Logo-Design";
$route['industry/Entertainment-Logo-Design']  = "logodesign/industry/Entertainment-Logo-Design";
$route['industry/Event-Logo-Design']  = "logodesign/industry/Event-Logo-Design";
$route['industry/Financial-Services-Logo-Design']  = "logodesign/industry/Financial-Services-Logo-Design";
$route['industry/Golf-Courses-Logo-Design']  = "logodesign/industry/Golf-Courses-Logo-Design";
$route['industry/High-Tech-Logo-Design']  = "logodesign/industry/High-Tech-Logo-Design";
$route['industry/Illustrative-Logo-Design']  = "logodesign/industry/Illustrative-Logo-Design";
$route['industry/International-Logo-Design']  = "logodesign/industry/International-Logo-Design";
$route['industry/Internet-Logo-Design']  = "logodesign/industry/Internet-Logo-Design";
$route['industry/Landscaping-Logo-Design']  = "logodesign/industry/Landscaping-Logo-Design";
$route['industry/Medical-Logo-Design']  = "logodesign/industry/Medical-Logo-Design";
$route['industry/Networking-Logo-Design']  = "logodesign/industry/Networking-Logo-Design";
$route['industry/Pool-and-Spa-Logo-Design']  = "logodesign/industry/Pool-and-Spa-Logo-Design";
$route['industry/Real-Estate-Development-Logo-Design']  = "logodesign/industry/Real-Estate-Development-Logo-Design";
$route['industry/Realtor-Logo-Design']  = "logodesign/industry/Realtor-Logo-Design";
$route['industry/Restaurant-Logo-Design']  = "logodesign/industry/Restaurant-Logo-Design";
$route['industry/Retail-Logo-Design']  = "logodesign/industry/Retail-Logo-Design";
$route['industry/Salon-Day-Spa-Logo-Design']  = "logodesign/industry/Salon-Day-Spa-Logo-Design";
$route['industry/Service-Industries-Logo-Design']  = "logodesign/industry/Service-Industries-Logo-Design";
$route['industry/Travel-Logo-Design']  = "logodesign/industry/Travel-Logo-Design";
$route['industry/Off-The-Wall-Logo-Design']  = "logodesign/industry/Off-The-Wall-Logo-Design";

/* New Package Redirect to old package link
$route['packages']    = "logodesign2/packages2";
$route['index']       = "logodesign2/index";
$route['process']     = "logodesign2/process";
$route['compare']     = "logodesign2/compare";
$route['portfolio']   = "logodesign2/portfolio";
$route['portfolio2']  = "logodesign2/portfolio2";
$route['portfolio3']  = "logodesign2/portfolio3";
$route['portfolio4']  = "logodesign2/portfolio4";
$route['portfolio5']  = "logodesign2/portfolio5";
$route['portfolio6']  = "logodesign2/portfolio6";
$route['portfolio7']  = "logodesign2/portfolio7";
$route['portfolio8']  = "logodesign2/portfolio8";
$route['portfolio9']  = "logodesign2/portfolio9";
$route['portfolio10'] = "logodesign2/portfolio10";
$route['guarantee']   = "logodesign2/guarantee";
$route['about']       = "logodesign2/about";
$route['ourmgmt']     = "logodesign2/ourmgmt";
$route['qualitycontrol'] = "logodesign2/qualitycontrol";
$route['partnership']    = "logodesign2/partnership";
$route['terms']          = "logodesign2/terms";
$route['privacypolicy']  = "logodesign2/privacypolicy";
$route['casestudy']      = "logodesign2/casestudy";
$route['faq']            = "logodesign2/faq";
$route['contact']        = "logodesign2/contact";
$route['charity']        = "logodesign2/charity";
$route['adaward']   = "logodesign2/adaward";
$route['saward']    = "logodesign2/saward";
$route['rdaward']   = "logodesign2/rdaward";
$route['livehelp']  = "logodesign2/livehelp";
$route['freesms']   = "logodesign2/freesms";
$route['payment']   = "logodesign2/payment";
$route['order']     = "logodesign2/order";
$route['orderone']  = "logodesign2/orderone";
$route['ordertwo']  = "logodesign2/ordertwo";
$route['cart']      = "logodesign2/cart";
$route['paybank']   = "logodesign2/paybank";
$route['thankyou']  = "logodesign2/thankyou";*/

/* Logodesign2 Routes 
$route['packages2']    = "logodesign2/packages2";
$route['index2']       = "logodesign2/index";
$route['process2']     = "logodesign2/process";
$route['compare2']     = "logodesign2/compare";
$route['portfolio2']   = "logodesign2/portfolio";
$route['portfolio22']  = "logodesign2/portfolio2";
$route['portfolio32']  = "logodesign2/portfolio3";
$route['portfolio42']  = "logodesign2/portfolio4";
$route['portfolio52']  = "logodesign2/portfolio5";
$route['portfolio62']  = "logodesign2/portfolio6";
$route['portfolio72']  = "logodesign2/portfolio7";
$route['portfolio82']  = "logodesign2/portfolio8";
$route['portfolio92']  = "logodesign2/portfolio9";
$route['portfolio102'] = "logodesign2/portfolio10";
$route['guarantee2']   = "logodesign2/guarantee";
$route['about2']       = "logodesign2/about";
$route['ourmgmt2']     = "logodesign2/ourmgmt";
$route['qualitycontrol2'] = "logodesign2/qualitycontrol";
$route['partnership2']    = "logodesign2/partnership";
$route['terms2']          = "logodesign2/terms";
$route['privacypolicy2']  = "logodesign2/privacypolicy";
$route['casestudy2']      = "logodesign2/casestudy";
$route['faq2']            = "logodesign2/faq";
$route['contact2']        = "logodesign2/contact";
$route['charity2']        = "logodesign2/charity";
$route['adaward2']   = "logodesign2/adaward";
$route['saward2']    = "logodesign2/saward";
$route['rdaward2']   = "logodesign2/rdaward";
$route['livehelp2']  = "logodesign2/livehelp";
$route['freesms2']   = "logodesign2/freesms";
$route['payment2']   = "logodesign2/payment";
$route['order2']     = "logodesign2/order";
$route['orderone2']  = "logodesign2/orderone";
$route['ordertwo2']  = "logodesign2/ordertwo";
$route['cart2']      = "logodesign2/cart";
$route['paybank2']   = "logodesign2/paybank";
$route['thankyou2']  = "logodesign2/thankyou";
$route['jetpaymid2']  = "logodesign2/jetpaymid";
$route['jetpay2']  = "logodesign2/jetpay";
$route['process_transactionmid2']  = "logodesign2/process_transactionmid";
$route['process_transaction2']  = "logodesign2/process_transaction";
$route['failed2']  = "logodesign2/failed";
$route['cvv2']  = "logodesign2/cvv";*/



$route['web-site-design/webdesigner-limited-sale']                 = "webdesign/index";	
$route['web-site-design/webdesigner-limited-sale/index']           = "webdesign/index";	
$route['web-site-design/webdesigner-limited-sale/order']  		   = "webdesign/order";
$route['web-site-design/webdesigner-limited-sale/cart']  		   = "webdesign/cart";
$route['web-site-design/webdesigner-limited-sale/paybank']  	   = "webdesign/paybank";
$route['web-site-design/webdesigner-limited-sale/payment']  	   = "webdesign/payment";
$route['web-site-design/webdesigner-limited-sale/portfolio'] 	   = "webdesign/portfolio";
$route['web-site-design/webdesigner-limited-sale/howworks'] 	   = "webdesign/howworks";
$route['web-site-design/webdesigner-limited-sale/whyus']  		   = "webdesign/whyus";
$route['web-site-design/webdesigner-limited-sale/about']   		   = "webdesign/about";
$route['web-site-design/webdesigner-limited-sale/ourmgmt'] 		   = "webdesign/ourmgmt";
$route['web-site-design/webdesigner-limited-sale/qualitycontrol']  = "webdesign/qualitycontrol";
$route['web-site-design/webdesigner-limited-sale/partnership']     = "webdesign/partnership";
$route['web-site-design/webdesigner-limited-sale/terms']  		   = "webdesign/terms";
$route['web-site-design/webdesigner-limited-sale/guarantee']       = "webdesign/guarantee";
$route['web-site-design/webdesigner-limited-sale/hosting']         = "webdesign/hosting";
$route['web-site-design/webdesigner-limited-sale/seo']   		   = "webdesign/seo";
$route['web-site-design/webdesigner-limited-sale/privacypolicy']   = "webdesign/privacypolicy";
$route['web-site-design/webdesigner-limited-sale/faq'] 			   = "webdesign/faq";
$route['web-site-design/webdesigner-limited-sale/contact']  	   = "webdesign/contact";
$route['web-site-design/webdesigner-limited-sale/charity'] 		   = "webdesign/charity";
$route['web-site-design/webdesigner-limited-sale/adaward'] 		   = "webdesign/adaward";
$route['web-site-design/webdesigner-limited-sale/rdaward'] 		   = "webdesign/rdaward";
$route['web-site-design/webdesigner-limited-sale/saward'] 		   = "webdesign/saward";
$route['web-site-design/webdesigner-limited-sale/story'] 		   = "webdesign/story";
$route['web-site-design/webdesigner-limited-sale/successstory']    = "webdesign/successstory";
$route['web-site-design/webdesigner-limited-sale/thankyou'] 	   = "webdesign/thankyou";
	
/*client panel route
$route['client_panel'] 		        = "client";
$route['client_panel/index'] 		= "client/";
$route['client_panel/check_login']  = "client/check_login";
$route['client_panel/index'] 		= "client/index";
$route['client_panel/home'] 		= "client/home";
$route['client_panel/logosample'] 	= "client/logosample";
$route['client_panel/bcard'] 		= "client/bcard";
$route['client_panel/letterhead']   = "client/letterhead";
$route['client_panel/compliment']   = "client/compliment";
$route['client_panel/finallogo'] 	= "client/finallogo";
$route['client_panel/howworks'] 	= "client/howworks";
$route['client_panel/whyus'] 		= "client/whyus";
$route['client_panel/logout']       = "client/logout";
$route['client_panel/adaward']      = "client/adaward";
$route['client_panel/saward']       = "client/saward";
$route['client_panel/rdaward'] 	    = "client/rdaward";
$route['client_panel/ordermid']     = "client/ordermid";
$route['client_panel/order'] 		= "client/order";
$route['client_panel/cartmid'] 	    = "client/cartmid";
$route['client_panel/cart'] 		= "client/cart";
$route['client_panel/cartmid'] 	    = "client/cartmid";
$route['client_panel/paybank'] 	    = "client/paybank";*/

$route['404_override'] = '';
/* End of file routes.php */
/* Location: ./application/config/routes.php */