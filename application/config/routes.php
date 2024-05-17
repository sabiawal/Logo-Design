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

$route['default_controller'] = "logo";
$route['orders(.*)'] = 'logo_order$1';
$route['industry(.*)'] = 'logo_portfolio$1';
$route['reseller/industry(.*)'] = 'reseller_logo_portfolio$1';

$route['web-site-design/webdesigner-limited-sale/orders(.*)'] = 'web_order$1';
$route['web-site-design/webdesigner-limited-sale(.*)'] = 'web$1';

$route['reseller_web_orders(.*)'] = 'reseller_web_order$1';
$route['reseller_web(.*)'] = 'reseller_web$1';

$route['reseller_orders(.*)'] = 'reseller_order$1';
$route['reseller(.*)'] = 'reseller$1';

$route['client_panel(.*)'] = 'client_panel$1';
$route['new44(.*)'] = 'new44$1';
$route['ldg_co_uk_test(.*)'] = 'ldg_co_uk_test$1';
$route['ldg_co_uk(.*)'] = 'ldg_co_uk$1';

$route['(.*)'] = "logo/$1";

/* for reseller*/
$route['reseller']  = "reseller/login";

$route['404_override'] = 'error/nopage';  


/* End of file routes.php */
/* Location: ./application/config/routes.php */