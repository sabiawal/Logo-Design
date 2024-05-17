<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('PATH_SAMPLE','https://50dollarlogo.com/admin_panel/sample/');
define('PATH_SAMPLE_THUMB','https://50dollarlogo.com/admin_panel/sample/thumb/');
define('PATH_SAMPLE_THUMB_DEFAULT','https://50dollarlogo.com/admin_panel/sample/thumb/default-thumb.jpg');

/*Dollar and Pound*/
define('CURRENCY','&pound;');					    # &pound; or $dollar;
define('CONVERSION_MULTIPLYER', 1);                 #1 for UK and  0.686107 for rest
define('CONVERSION_MULTIPLYER2', 1.457499);          #1 for USA and  1.457499 for     1.56769
/*Dollar and Pound Ends*/

define('SITE_NAME','logodesignguarantee.co.uk');   	# Choose LogoDesignGuarantee.co.uk and LogoDesignGuarantee.com
define('SITE_NAME2','LogoDesignGuarantee.co.uk');   	# Choose LogoDesignGuarantee.co.uk and LogoDesignGuarantee.com
define('COUNTRY','UK');  							# Choose UK or USA only to change all related Images and word..
define('ISM' , 'UK');   							# USA UK Canadian
define('ORDERED_SITE', 'LDG.UK');  											# LDGUK  or LDG.com
define('SITE_ID',6);                										# 6 for UK 7 for USA 5 for CANADA

# Define Mail list
define('INFO_MAIL','info@logodesignguarantee.co.uk');
define('ORDER_MAIL','order@logodesignguarantee.co.uk');

#Define Phone Numbers
define('PHONE_NO','0800 756 9910');

/*price and package name of logo*/

    /*On packages page*/
	define('Silver_Logo_Package', 'Silver Logo Package');
	define('Silver_Logo_Package_Price', 25);    					 			# value 25 for UK and 49 for USA
	define('Super_Silver_Logo_Package', 'Silver Plus Logo Package');
	define('Super_Silver_Logo_Package_Price', 39);    							#value 39 for UK and 79 for USA
	define('Super_Silver_Plus_Logo_Package', 'Super Silver Plus Logo Package');
	define('Super_Silver_Plus_Logo_Package_Price', 49); 					    # value 49 for UK and 99 for USA
	define('Elite_Logo_Package','Elite Logo Package');
	define('Elite_Logo_Package_Price', 35);  									# value 35 for UK and 69 for USA
	define('Super_Elite_Logo_Package','Elite Plus Logo Package');
	define('Super_Elite_Logo_Package_Price', 49);  							    # value 49 for UK and 99 for USA
	define('Super_Elite_Plus_Logo_Package','Super Elite Plus Logo Package');
	define('Super_Elite_Plus_Logo_Package_Price', 59);						    # value 59 for UK and 125 for USA

	/*On order page*/

		/*Webdesign option*/
		define('Budget_Website','Budget Website 1 page');
		define('Budget_Website_Price', 199); 								    # value 199 for UK and 299 for USA
		define('Budget_Website_Price_Other', 400); 							    # value 400 for UK and 599 for USA
		define('Gold_Website','Gold Website up to 6 pages');
		define('Gold_Website_Price', 349); 									    # value 349 for UK and 499 for USA
		define('Gold_Website_Price_Other', 700); 							    # value 700 for UK and 999 for USA
		define('Elite_Website','Elite Website  up to 12 Pages');
		define('Elite_Website_Price', 599);  									# value 599 for UK and 899 for USA
		define('Elite_Website_Price_Other', 1200); 							    # value 1200 for UK and 1799 for USA

		/*Brochure design option*/
		define('Brochure_Tri_Fold','Tri-fold Double-Sided');
		define('Brochure_Tri_Fold_Price', 249);								    # value 249 for UK and 399 for USA
		define('Brochure_Tri_Fold_Price_Other', 500);						    # value 500 for UK and 799 for USA
		define('Brochure_4_Page','4 Page Exec');
		define('Brochure_4_Page_Price', 299); 								    # value 299 for UK and 499 for USA
		define('Brochure_4_Page_Price_Other', 600); 						    # value 600 for UK and 999 for USA
		define('Brochure_8_Page','8 Page Exec');
		define('Brochure_8_Page_Price', 399);  									# value 399 for UK and 699 for USA
		define('Brochure_8_Page_Price_Other', 800);  							# value 800 for UK and 1399 for USA

	/*On orderone page*/
        define('EXPRESS_DELIVERY', 19);                  #19  39
        define('BLACK_N_WHITE', 15);                       #15  29
        define('BOTH_SERVICES', 29);                     #29  59
 		define('Save_Additional', 5);											#value 5 for UK and 10 for USA

    /*ordertwo page*/
        define('SIX_LOGO_CONCEPT', 19);		            #19  35
        define('LOGO_BY_DIFFERENT_DESIGNER', 19);		#19  35
        define('LIFE_TIME_FILE_STORAGE', 15);		    #15  25
        define('ANIMATED_FLASH', 39);	              	#39  69
        define('LOGO_WITHIN_24_HOUR', 19);	         	#19  39
        define('BLACK_N_WHITE_FILE_LOGO', 15);	     	#15  29
        define('IMPRESS_WITH_BUSINESS_CARD', 15);		#15  25
        define('LETTER_HEAD', 15);           	      	#15  25
        define('ENVELOPE_DESIGN', 15);		            #15  25
        define('COMPLIMENT_SLIP', 15);		            #15  25
        define('STATIONARY_DESIGN_BUNDLE', 39);	     	#39  69
        define('BUSINESS_CARD_PRINT_250', 49);	     	#49  79
        define('BUSINESS_CARD_PRINT_500', 59);	     	#59  99
        define('LETTER_HEAD_PRINT_25', 29);	        	#29  49
        define('LETTER_HEAD_PRINT_250', 69);	       	#69  110
        define('LETTER_HEAD_PRINT_1000', 119);	     	#119  199
        define('ENVELOPE_DESIGN_PRINT_100', 45);		#45  69
        define('ENVELOPE_DESIGN_PRINT_250', 75);		#75  110
        define('ENVELOPE_DESIGN_PRINT_1000', 129);		#129  199
        define('COMPLIMENT_SLIP_PRINT_100', 45);		#45  69
        define('COMPLIMENT_SLIP_PRINT_250', 65);		#65  99
        define('COMPLIMENT_SLIP_PRINT_1000', 129);		#129  199
        define('MOUSE_MAT_WITH_LOGO', 15);		        #15  25
        define('CAP_WITH_LOGO', 19);		            #19  35
        define('PEN_WITH_LOGO', 19);		            #19  35
        define('BAG_WITH_LOGO', 19);		            #19  35
        define('TSHIRT_WITH_LOGO', 19);	            	#19  35
/*ABOUT US PAGE*/
define('LOGO_PLUS', 150);                               #150 200

/*Webdesign part*/

    /*  home page  */
		define('WEB_BUDGECT_OTHERS_PRICE', 399);				 #299 599
		define('WEB_GOLD_OTHERS_PRICE', 699);					 #699  999
		define('WEB_ELITE_OTHERS_PRICE', 1199);				 	 #1099  1799
		define('WEB_EXTRA_PER_PAGE_PRICE', 65);                  #65 95
		define('HOSTING_PER_YEAR_PRICE', 1);                       #1 4.99

		/*home page package hover prices */
		define('REVISION_PRICE_0THER_R1', 50);					#50 OR 99
		define('REVISION_PRICE_0THER_R2', 100);					#100 OR 199
    	define('HOSTING_PRICE_0THER_R1', 10);					#10 OR 19

		define('HOSTING_PRICE_0THER_R2', 30);					#30 OR 59

		

		define('MOUSE_HOVER_PRICE_0THER_R1', 5);					#5 OR 10

		define('MOUSE_HOVER_PRICE_0THER_R2', 10);					#10 OR 20

		

		define('CONTACT_US_PRICE_0THER_R1', 100);					#100 OR 199

		define('CONTACT_US_PRICE_0THER_R2', 150);					#150 OR 299

		

		define('LINKS_PRICE_0THER_R1', 5);					#5 OR 10

		define('LINKS_PRICE_0THER_R2', 10);					#10 OR 20

		

		define('SEO_PRICE_0THER', 100);					#100 OR 200

		

		define('EXTRA_PAGE_PRICE_0THER', 100);					#100 OR 200

		

		define('MONTHLY_FEE_PRICE_0THER_R1', 10);					#10 OR 19

		define('MONTHLY_FEE_PRICE_0THER_R2', 50);					#50 OR 99

		

		/*cart page and home page package hover prices */

		define('CMS_OTHER_PRICE', 200);                         #200 OR 300

		define('CMS_OTHER_MONTHLY_PRICE', 15);                  #15 OR 30

		

		define('FLASH_BANNER_OTHER_PRICE', 100);                #100 OR 200

		

		define('WEB_QUALITY_PRICE', 1000);                         #1000 OR 2000

		

		

		define('GUARANTEE_DAY',365);

/*

|--------------------------------------------------------------------------

| File Stream Modes

|--------------------------------------------------------------------------

|

| These modes are used when working with fopen()/popen()

|

*/



define('FOPEN_READ',							'rb');

define('FOPEN_READ_WRITE',						'r+b');

define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care

define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care

define('FOPEN_WRITE_CREATE',					'ab');

define('FOPEN_READ_WRITE_CREATE',				'a+b');

define('FOPEN_WRITE_CREATE_STRICT',				'xb');

define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');





/* End of file constants.php */

/* Location: ./application/config/constants.php */