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




define('GOOGLE_CONVERSION_ID',1059042374); // Same in both
define('GOOGLE_CONVERSION_LABEL','gFpyCOikURDG6P74Aw');  // UK - bRCYCI6kURDG6P74Aw , USA - gFpyCOikURDG6P74Aw
define('GOOGLE_ANALYTICS','UA-23784014-1'); // For UK - UA-23651646-1 , For USA - UA-23784014-1

define('PATH_SAMPLE','http://50dollarlogo.com/admin_panel/sample/');
define('PATH_SAMPLE_THUMB','http://50dollarlogo.com/admin_panel/sample/thumb/');
define('PATH_SAMPLE_THUMB_DEFAULT','http://50dollarlogo.com/admin_panel/sample/thumb/default-thumb.jpg');

/*Dollar and Pound*/
define('CURRENCY','$');								# &pound; or $;
define('CONVERSION_MULTIPLYER', 0.686107);                         #1 for UK and  0.686107 for rest
define('CONVERSION_MULTIPLYER2', 1);                 #1 for USA and  1.457499 for     1.56769

define('SITE_NAME','LogoDesignGuarantee.com');            # Choose LogoDesignGuarantee.co.uk and LogoDesignGuarantee.com
define('COUNTRY','USA');                                     # Choose UK or USA only to change all related Images and word..

define('ORDERED_SITE', 'LDG.COM');                           # LDG.UK  or LDG.com
define('SITE_ID',7);                                        # 6 for UK 7 for USA 5 for CANADA

# Define Mail list
define('INFO_MAIL','info@logodesignguarantee.com');
define('ORDER_MAIL','order@logodesignguarantee.com');
define('RESELLER_MAIL','reseller@logodesignguarantee.com');

#Define Phone Numbers
define("PHONE_NO","1 (866) 598-6266"); # UK - 0 (800) 279 6215 USA - 1 (866) 598-6266
define("PHONE_NO_","(866) 598-6266"); # UK - (800) 279 6215 USA - (866) 598-6266



define('PHONE_CLIENT_PANEL','(866) 598-6266'); # UK - (800) 279 6215 USA - (866) 598-6266
define('PHONE_RESELLER_SALES','(866) 282-8561'); # UK - 0 (800) 756 9441 USA - (866) 282-8561
define('PHONE_RESELLER_SUPPORT','(866) 674-3335'); # UK - 0 (800) 756 9646 USA - (866) 674-3335

define('GUARANTEE_DAYS',365);
//define('OFFER_NAME','Super Winter Sale ');
define('OFFER_NAME','Super Summer Sale');
define('SHOW_OFFER_DATE',true);                          # to show/hide old price
define('SHOW_REGULAR_PRICE',true);                          # to show/hide old price

// Home Page Variables
define('LOGO_COPYRIGHT_P',100);  // 50 , 100
define('LOGO_ALTERNATION_P',100);    // 50 , 100

// All Logo Packages
define("START_LP","START LOGO PACKAGE"); // Package Name
define("START_LP_P",49); // Current Discounted Price        // 25 , 49
define("START_LP_P_R",99); // Old Regular Price             // 50 , 99

define("START_PLUS_LP","START PLUS BUSINESS CARD DESIGN");
define("START_PLUS_LP_P",79);                               // 39 , 79
define("START_PLUS_LP_P_R",159);                            // 80 , 159

define("SUPER_START_PLUS_LP","START PLUS FULL STATIONERY DESIGN");  // 
define("SUPER_START_PLUS_LP_P",99); // 50 , 99
define("SUPER_START_PLUS_LP_P_R",199);  // 100 , 199

define("SURGE_LP","SURGE LOGO PACKAGE");
define("SURGE_LP_P",69);    // 35 , 69
define("SURGE_LP_P_R",138); // 69 , 138

define("SURGE_PLUS_LP","SURGE PLUS BUSINESS CARD DESIGN");
define("SURGE_PLUS_LP_P",99);   // 50 , 99
define("SURGE_PLUS_LP_P_R",199);    // 100 , 199

define("SUPER_SURGE_PLUS_LP","SUPER SURGE PLUS LOGO PACKAGE");// removed package
define("SUPER_SURGE_PLUS_LP_P",125);    
define("SUPER_SURGE_PLUS_LP_P_R",250);

define("EXCEL_LP","EXCEL LOGO PACKAGE");
define("EXCEL_LP_P",125);   // 59 , 125
define("EXCEL_LP_P_R",250); // 125 , 250


// All WP Packages
define("BUDGET_WP","Budget Website 1 Page");
define("BUDGET_WP_P",299);  // 199 , 299 
define("BUDGET_WP_P_R",599); // 400 , 599

define("GOLD_WP","Gold Website up to 6 Pages");
define("GOLD_WP_P",499); // 349 , 499
define("GOLD_WP_P_R",999); // 700 , 999

define("ELITE_WP","Elite Website up to 12 Pages");
define("ELITE_WP_P",899); // 599 , 899
define("ELITE_WP_P_R",1799); // 1200 , 1799

// All Brochure Package
define("TRI_FOLD_BP","Tri-fold Double-Sided");
define("TRI_FOLD_BP_P",399); // 249 , 399
define("TRI_FOLD_BP_P_R",799); // 500 , 799

define("FOUR_PAGE_EXEC_BP","4 Page Exec");
define("FOUR_PAGE_EXEC_BP_P",499); // 299 , 499
define("FOUR_PAGE_EXEC_BP_P_R",999); // 600 , 999

define("EIGHT_PAGE_EXEC_BP","8 Page Exec");
define("EIGHT_PAGE_EXEC_BP_P",699); // 399 , 699
define("EIGHT_PAGE_EXEC_BP_P_R",1399); // 800 , 1399

// option 1 packages
define("EXPRESS_DELIVERY","24 hours delivery");
define("EXPRESS_DELIVERY_P",39);    // 19 , 39
define("EXPRESS_DELIVERY_P_R",80); // 40 , 80

define("BLACK_N_WHITE","Black and white additional logo design file");
define("BLACK_N_WHITE_P",29); // 15 , 29
define("BLACK_N_WHITE_P_R",60); // 30 , 60

define("BOTH_SERVICES","24 Hour Delivery and Black and White file");
define("BOTH_SERVICES_P",59); //29 , 59
define("SAVE_ADDITIONAL",10); //5 , 10


/*ordertwo page packages Name*/
define('SIX_LOGO_CONCEPT', 'Extra 6 Logo Concept');
define('LOGO_BY_DIFFERENT_DESIGNER', 'Get logos created a by a different designer');
define('LIFE_TIME_FILE_STORAGE', 'Life time file storage');
define('ANIMATED_FLASH', 'Order an animated FLASH logo version');
define('LOGO_WITHIN_24_HOUR', 'Get your logos within 24 hrs');
define('BLACK_N_WHITE_FILE_LOGO', 'Order black and white file logo version');
define('IMPRESS_WITH_BUSINESS_CARD', 'Impress with business cards');
define('LETTER_HEAD', 'Order letterhead designs');
define('ENVELOPE_DESIGN', 'Order envelope designs');
define('COMPLIMENT_SLIP', 'Order compliment slip designs');
define('STATIONARY_DESIGN_BUNDLE', 'Order stationary design bundle');
define('BUSINESS_CARD_PRINT_250', '250 business cards (matt) including free delivery');
define('BUSINESS_CARD_PRINT_500', '500 business cards (matt) including free delivery');
define('LETTER_HEAD_PRINT_25', '25 letterheads including free delivery');
define('LETTER_HEAD_PRINT_250', '250 letterheads including free delivery');
define('LETTER_HEAD_PRINT_1000', '1000 letterheads including free delivery');
define('ENVELOPE_DESIGN_PRINT_100', '100 envelopes including free delivery');
define('ENVELOPE_DESIGN_PRINT_250', '250  envelopes including free delivery');
define('ENVELOPE_DESIGN_PRINT_1000', '1000 envelopes including free delivery');
define('COMPLIMENT_SLIP_PRINT_100', '100 compliment slips including free delivery');
define('COMPLIMENT_SLIP_PRINT_250', '250 compliment slips including free delivery');
define('COMPLIMENT_SLIP_PRINT_1000', '1000 compliment slips including free delivery');
define('MOUSE_MAT_WITH_LOGO', 'Order a Mouse Mat with your personal logo on (free delivery)!');
define('CAP_WITH_LOGO', 'Order a <u>custom CAP</u> with your personal logo on (free delivery)!');
define('PEN_WITH_LOGO', 'Order <u>pens </u>with  your personal logo on (free delivery)!');
define('BAG_WITH_LOGO', 'Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!');
define('TSHIRT_WITH_LOGO', 'Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!');

/*ordertwo page packages Price*/
define('SIX_LOGO_CONCEPT_P', 35);		            #19  35
define('LOGO_BY_DIFFERENT_DESIGNER_P', 35);		#19  35
define('LIFE_TIME_FILE_STORAGE_P', 25);		    #15  25
define('ANIMATED_FLASH_P', 69);	              	#39  69
define('LOGO_WITHIN_24_HOUR_P', 39);	         	#19  39
define('BLACK_N_WHITE_FILE_LOGO_P', 29);	     	#15  29
define('IMPRESS_WITH_BUSINESS_CARD_P', 25);		#15  25
define('LETTER_HEAD_P', 25);           	      	#15  25
define('ENVELOPE_DESIGN_P', 25);		            #15  25
define('COMPLIMENT_SLIP_P', 25);		            #15  25
define('STATIONARY_DESIGN_BUNDLE_P', 69);	     	#39  69
define('BUSINESS_CARD_PRINT_250_P', 79);	     	#49  79
define('BUSINESS_CARD_PRINT_500_P', 99);	     	#59  99
define('LETTER_HEAD_PRINT_25_P', 49);	        	#29  49
define('LETTER_HEAD_PRINT_250_P', 110);	       	#69  110
define('LETTER_HEAD_PRINT_1000_P', 199);	     	#119  199
define('ENVELOPE_DESIGN_PRINT_100_P', 69);		#45  69
define('ENVELOPE_DESIGN_PRINT_250_P', 110);		#75  110
define('ENVELOPE_DESIGN_PRINT_1000_P', 199);		#129  199
define('COMPLIMENT_SLIP_PRINT_100_P', 69);		#45  69
define('COMPLIMENT_SLIP_PRINT_250_P', 99);		#65  99
define('COMPLIMENT_SLIP_PRINT_1000_P', 199);		#129  199
define('MOUSE_MAT_WITH_LOGO_P', 25);		        #15  25
define('CAP_WITH_LOGO_P', 35);		            #19  35
define('PEN_WITH_LOGO_P', 35);		            #19  35
define('BAG_WITH_LOGO_P', 35);		            #19  35
define('TSHIRT_WITH_LOGO_P', 35);	            	#19  35

define('SIX_LOGO_CONCEPT_P_R', 70);		            #38  70
define('LOGO_BY_DIFFERENT_DESIGNER_P_R', 70);		#38  70
define('LIFE_TIME_FILE_STORAGE_P_R', 50);		    #30  50
define('ANIMATED_FLASH_P_R', 172.5);	              	#97.5  172.5
define('LOGO_WITHIN_24_HOUR_P_R', 78);	         	#38  78
define('BLACK_N_WHITE_FILE_LOGO_P_R', 58);	     	#30  58
define('IMPRESS_WITH_BUSINESS_CARD_P_R', 50);		#30  50
define('LETTER_HEAD_P_R', 62.5);           	      	#37.5  62.5
define('ENVELOPE_DESIGN_P_R', 50);		            #30  50
define('COMPLIMENT_SLIP_P_R', 50);		            #30  50
define('STATIONARY_DESIGN_BUNDLE_P_R', 172.5);	     	#97.5  172.5
define('BUSINESS_CARD_PRINT_250_P_R', 158);	     	#98  158
define('BUSINESS_CARD_PRINT_500_P_R', 198);	     	#118  198
define('LETTER_HEAD_PRINT_25_P_R', 98);	        	#58  98
define('LETTER_HEAD_PRINT_250_P_R', 220);	       	#138  220
define('LETTER_HEAD_PRINT_1000_P_R', 398);	     	#238  398
define('ENVELOPE_DESIGN_PRINT_100_P_R', 138);		#90  138
define('ENVELOPE_DESIGN_PRINT_250_P_R', 220);		#150  220
define('ENVELOPE_DESIGN_PRINT_1000_P_R', 398);		#258  398
define('COMPLIMENT_SLIP_PRINT_100_P_R', 138);		#90  138
define('COMPLIMENT_SLIP_PRINT_250_P_R', 198);		#130  198
define('COMPLIMENT_SLIP_PRINT_1000_P_R', 398);		#258  398
define('MOUSE_MAT_WITH_LOGO_P_R', 50);		        #30  50
define('CAP_WITH_LOGO_P_R', 70);		            #38  70
define('PEN_WITH_LOGO_P_R', 70);		            #38  70
define('BAG_WITH_LOGO_P_R', 70);		            #38  70
define('TSHIRT_WITH_LOGO_P_R', 70);	            	#38  70


/*ABOUT US PAGE*/
define('LOGO_PLUS', 200);                               #150 200

/*Webdesign part*/
/*  home page  */
define('WEB_BUDGECT_OTHERS_PRICE', 599);				 #299 599
define('WEB_GOLD_OTHERS_PRICE', 999);					 #699  999
define('WEB_ELITE_OTHERS_PRICE', 1799);				 	 #1099  1799

define('WEB_EXTRA_PER_PAGE_PRICE', 95);                  #65 95
define('HOSTING_PER_YEAR_PRICE', 4.99);                       #1 4.99

/*home page package hover prices */
define('REVISION_PRICE_0THER_R1', 99);					#50 OR 99
define('REVISION_PRICE_0THER_R2', 199);					#100 OR 199
define('HOSTING_PRICE_0THER_R1', 19);					#10 OR 19
define('HOSTING_PRICE_0THER_R2', 59);					#30 OR 59
define('MOUSE_HOVER_PRICE_0THER_R1', 10);					#5 OR 10
define('MOUSE_HOVER_PRICE_0THER_R2', 20);					#10 OR 20
define('CONTACT_US_PRICE_0THER_R1', 199);					#100 OR 199
define('CONTACT_US_PRICE_0THER_R2', 299);					#150 OR 299
define('LINKS_PRICE_0THER_R1', 10);					#5 OR 10
define('LINKS_PRICE_0THER_R2', 20);					#10 OR 20
define('SEO_PRICE_0THER', 200);					#100 OR 200
define('EXTRA_PAGE_PRICE_0THER', 200);					#100 OR 200
define('MONTHLY_FEE_PRICE_0THER_R1', 19);					#10 OR 19
define('MONTHLY_FEE_PRICE_0THER_R2', 99);					#50 OR 99
/*cart page and home page package hover prices */
define('CMS_OTHER_PRICE', 300);                         #200 OR 300
define('CMS_OTHER_MONTHLY_PRICE', 30);                  #15 OR 30
define('FLASH_BANNER_OTHER_PRICE', 200);                #100 OR 200		
define('WEB_QUALITY_PRICE', 2000);                         #1000 OR 2000

define('HOSTING_RANGE1',19);                            #10 or 19
define('HOSTING_RANGE2',59);                            #30 or 59

define('LOGO_WORTH',500);                               #250 or 500

// Buy More Save More
if(@$_SESSION['logo_package'] == START_PLUS_LP):
    define('TOTAL_PURCHASE1',130); # 60 or 130
    define('TOTAL_PURCHASE2',180); # 90 or 180
    define('TOTAL_PURCHASE3',230); # 120 or 230
elseif(@$_SESSION['logo_package'] == SUPER_START_PLUS_LP || @$_SESSION['logo_package'] == SURGE_PLUS_LP):
    define('TOTAL_PURCHASE1',150); # 75 or 150
    define('TOTAL_PURCHASE2',200); # 100 or 200
    define('TOTAL_PURCHASE3',250); # 130 or 250
elseif(@$_SESSION['logo_package'] == SURGE_LP):
    define('TOTAL_PURCHASE1',120); # 60 or 120
    define('TOTAL_PURCHASE2',170); # 90 or 170
    define('TOTAL_PURCHASE3',220); # 120 or 220
elseif(@$_SESSION['logo_package'] == EXCEL_LP):
    define('TOTAL_PURCHASE1',170); # 85 or 170
    define('TOTAL_PURCHASE2',220); # 110 or 220
    define('TOTAL_PURCHASE3',270); # 140 or 270

else:   // Default or START Logo Package
    define('TOTAL_PURCHASE1',100);   # 50  or 100
    define('TOTAL_PURCHASE2',150);   # 75 or 150
    define('TOTAL_PURCHASE3',200);  # 100 or 200
endif;


define('PURCHASE_DIS_RATE1',0.05);
define('PURCHASE_DIS_RATE2',0.1);
define('PURCHASE_DIS_RATE3',0.15);




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