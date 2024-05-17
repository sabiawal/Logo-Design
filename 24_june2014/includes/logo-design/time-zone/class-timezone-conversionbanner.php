<?php

  /**
   * Timezone Conversion
   *
   * This library provides generic timezone conversion functionlity in an uniform way.
   *
   * @package     Timezone Conversion
   * @category    Library
   * @author      Utsav Handa < handautsav at hotmail dot com >
   * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
   *
   *
   * @changelog 
   * -- 2009-03-13 Initial Implementation 
   *
   *
   * @contributor(s) -
   * -- Sheeju Alex < sheeju dot alex at gmail dot com
   *
   */


  /** License
   *
   * Copyright (c) 2009 Utsav Handa <handautsav at hotmail dot com>
   *
   * Permission is hereby granted, free of charge, to any person obtaining a copy of this
   * software and associated documentation files (the "Software"), to deal in the Software 
   * without restriction, including without limitation the rights to use, copy, modify, 
   * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
   * permit persons to whom the Software is furnished to do so, subject to the following
   * conditions:
   *
   * The above copyright notice and this permission notice shall be included in all copies
   * or substantial portions of the Software.
   *
   * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
   * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
   * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
   * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR 
   * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
   * IN THE SOFTWARE.
   */


  /**
   * Usage Example ::
   *
   ***************** Simple Example ********************
   * Convert local datetime to IST (Indian Standard Time) 
   * require_once('class-timezone-conversion.php');   //Include class                   //
   * $tz = new TimezoneConversion();                  //Create TimezoneConversion Object//
   * $tz->setProperty('DateTime', 'now');             //Set local 'DateTime' to convert //
   * $tz->setProperty('Timezone', 'IST');             //Get IST                         //
   * print "\n IST ::" . $tz->convertDateTime();
   *
   *
   *
   ***************** Advanced Example *******************
   * Convert local 'DateTime' to ISt (Indian Standard Time) and then convert IST to PDT (Pacific Daylight Time)
   * require_once('class-timezone-conversion.php');   // Include class                  //
   * $tz = new TimezoneConversion();                  //Create TimezoneConversion Object//
   * $tz->setProperty('DateTime', 'now');             //Set local 'DateTime' to convert //
   * $tz->setProperty('Timezone', 'IST');             // Get IST                        //
   * $ist_datetime = $tz->convertDateTime(); 
   * print "\n IST ::" . $ist_datetime;
   * ** IST => PDT **
   * $tz->setProperty('DateTime', $ist_datetime);     //Set IST to convert to PDT       //
   * $tz->setProperty('Timezone', 'PDT');             // Get PDT                        //
   * print "\n PDT ::" . $tz->convertDateTime();                      
   *
   *
   *
   **/



  /** Class to deal with Timezone Conversion */
class TimezoneConversionban {

  /** TimeZone 'default' Property */
  private $_timezone = array (
                              'Datetime'      => 'now',
                              'Return_Format' => 'D M d Y',
                              'Timezone'      => 'GMT',
                              );
  
  /** Constructor */
  public function __construct() {

    return true;
  }

  /** Function to 'SET' property */
  public function setProperty($key ='', $value ='') {

    return ( array_key_exists($key, $this->_timezone) ? ($this->_timezone[$key] = $value) : false );
  }

  /** Function to 'GET' property */
  public function getProperty($key = '') {

    return ( array_key_exists($key, $this->_timezone) ? $this->_timezone[$key] : false );
  }

  /** Function to localtime */
  public function getLocalDateTime() {

    return date($this->_timezone['Return_Format']);
  }


  /** Function to convert */
  public function convertDateTime() {

    return $this -> converttimezone($this->_timezone['Datetime'], $this->getTimeZoneOffset($this->_timezone['Timezone']), 
                                    $this->_timezone['Return_Format']);
  }



  /*********************************************************************************************************/
  /*************************************** HELPER FUNCTIONS ***********************************************/
  /*********************************************************************************************************/


  /** Function to convert datetime to another timezone */
  private function converttimezone($datetime_str = 'now', $timezone_offset = 0, $return_format = 'Y-m-d H:i:s') {

    return gmdate($return_format, ( $this -> convertDateTimeToGMT($datetime_str) + ($timezone_offset*3600) ) );
  }
  
  
  /** Function to convert 'datetime_str into GMT timestamp */
  private function convertDateTimeToGMT($datetime_str = 'now', $return_format = 'U') {
    
    return gmdate($return_format, strtotime($datetime_str));
  }


  /** Function to get 'Timezone Offset' from Timezone name*/
  private function getTimeZoneOffset($timezone = 'GMT') {

    /** TimeZone Information */
    $_WorldTimeZoneInformation = array (

                                        'Australian Central Daylight Time' => array (
                                                                                     'offset' => '+10.30', 
                                                                                     'timezone' => 'ACDT',
                                                                                     'enabled' => true,
                                                                                     ),
                                        'Ashmore and Cartier Islands Time' => array (
                                                                                     'offset' => '+8.00', 
                                                                                     'timezone' => 'ACIT',
                                                                                     'enabled' => true,
                                                                                     ),
                                        'Australian Central Standard Time' => array (
                                                                                     'offset' => '+9.30', 
                                                                                     'timezone' => 'ACST',
                                                                                     'enabled' => true,
                                                                                     ),
                                        'Acre Time' => array (
                                                              'offset' => '-5', 
                                                              'timezone' => 'ACT',
                                                              'enabled' => true,
                                                              ),
                                        'Australian Central Western Daylight Time' => array (
                                                                                             'offset' => '+9.45', 
                                                                                             'timezone' => 'ACWDT',
                                                                                             'enabled' => true,
                                                                                             ),
                                        'Australian Central Western Standard Time' => array (
                                                                                             'offset' => '+8.45', 
                                                                                             'timezone' => 'ACWST',
                                                                                             'enabled' => true,
                                                                                             ),
                                        'Arabia Daylight Time' => array (
                                                                         'offset' => '+4', 
                                                                         'timezone' => 'ADT',
                                                                         'enabled' => true,
                                                                         ),
                                        'Atlantic Daylight Time' => array (
                                                                           'offset' => '-3', 
                                                                           'timezone' => 'ADT',
                                                                           'enabled' => true,
                                                                           ),
                                        'Australian Eastern Daylight Time' => array (
                                                                                     'offset' => '+11', 
                                                                                     'timezone' => 'AEDT',
                                                                                     'enabled' => false,
                                                                                     ),
                                        'Australian Eastern Standard Time' => array (
                                                                                     'offset' => '+10', 
                                                                                     'timezone' => 'AEST',
                                                                                     'enabled' => true,
                                                                                     ),
                                        'Afghanistan Time' => array (
                                                                     'offset' => '+4.30', 
                                                                     'timezone' => 'AFT',
                                                                     'enabled' => true,
                                                                     ),
                                        'Alaska Daylight Time' => array (
                                                                         'offset' => '-8', 
                                                                         'timezone' => 'AKDT',
                                                                         'enabled' => true,
                                                                         ),
                                        'Alaska Standard Time' => array (
                                                                         'offset' => '-9', 
                                                                         'timezone' => 'AKST',
                                                                         'enabled' => true,
                                                                         ),
                                        'Armenia Daylight Time' => array (
                                                                          'offset' => '+5', 
                                                                          'timezone' => 'AMDT',
                                                                          'enabled' => true,
                                                                          ),
                                        'Armenia Standard Time' => array (
                                                                          'offset' => '+4', 
                                                                          'timezone' => 'AMST',
                                                                          'enabled' => true,
                                                                          ),
                                        'Anadyr’ Summer Time' => array (
                                                                        'offset' => '+13', 
                                                                        'timezone' => 'ANAST',
                                                                        'enabled' => true,
                                                                        ),
                                        'Anadyr’ Time' => array (
                                                                 'offset' => '+12', 
                                                                 'timezone' => 'ANAT',
                                                                 'enabled' => true,
                                                                 ),
                                        'Apo Island Time' => array (
                                                                    'offset' => '+8.15', 
                                                                    'timezone' => 'APO',
                                                                    'enabled' => true,
                                                                    ),
                                        'Argentina Daylight Time' => array (
                                                                            'offset' => '-2', 
                                                                            'timezone' => 'ARDT',
                                                                            'enabled' => true,
                                                                            ),
                                        'Argentina Time' => array (
                                                                   'offset' => '-3', 
                                                                   'timezone' => 'ART',
                                                                   'enabled' => true,
                                                                   ),
                                        'Al Manamah Standard Time' => array (
                                                                             'offset' => '+3', 
                                                                             'timezone' => 'AST',
                                                                             'enabled' => false,
                                                                             ),
                                        'Arabia Standard Time' => array (
                                                                         'offset' => '+3', 
                                                                         'timezone' => 'AST',
                                                                         'enabled' => false,
                                                                         ),
                                        'Arabic Standard Time' => array (
                                                                         'offset' => '+3', 
                                                                         'timezone' => 'AST',
                                                                         'enabled' => false,
                                                                         ),
                                        'Atlantic Standard Time' => array (
                                                                           'offset' => '-4', 
                                                                           'timezone' => 'AST',
                                                                           'enabled' => true,
                                                                           ),
                                        'Australian Western Daylight Time' => array (
                                                                                     'offset' => '+9', 
                                                                                     'timezone' => 'AWDT',
                                                                                     'enabled' => true,
                                                                                     ),
                                        'Australian Western Standard Time' => array (
                                                                                     'offset' => '+8', 
                                                                                     'timezone' => 'AWST',
                                                                                     'enabled' => true,
                                                                                     ),
                                        'Azores Daylight Time' => array (
                                                                         'offset' => '0', 
                                                                         'timezone' => 'AZODT',
                                                                         'enabled' => true,
                                                                         ),
                                        'Azores Standard Time' => array (
                                                                         'offset' => '-1', 
                                                                         'timezone' => 'AZOST',
                                                                         'enabled' => true,
                                                                         ),
                                        'Azerbaijan Summer Time' => array (
                                                                           'offset' => '+5', 
                                                                           'timezone' => 'AZST',
                                                                           'enabled' => true,
                                                                           ),
                                        'Azerbaijan Time' => array (
                                                                    'offset' => '+4', 
                                                                    'timezone' => 'AZT',
                                                                    'enabled' => true,
                                                                    ),
                                        'Baker Island Time' => array (
                                                                      'offset' => '-12', 
                                                                      'timezone' => 'BIT',
                                                                      'enabled' => true,
                                                                      ),
                                        'Bangladesh Time' => array (
                                                                    'offset' => '+6', 
                                                                    'timezone' => 'BDT',
                                                                    'enabled' => true,
                                                                    ),
                                        'Brazil Eastern Standard Time' => array (
                                                                                 'offset' => '-2', 
                                                                                 'timezone' => 'BEST',
                                                                                 'enabled' => true,
                                                                                 ),
                                        'Brunei Time' => array (
                                                                'offset' => '+8', 
                                                                'timezone' => 'BDT',
                                                                'enabled' => false,
                                                                ),
                                        'British Indian Ocean Time' => array (
                                                                              'offset' => '+6', 
                                                                              'timezone' => 'BIOT',
                                                                              'enabled' => true,
                                                                              ),
                                        'Bolivia Time' => array (
                                                                 'offset' => '-4', 
                                                                 'timezone' => 'BOT',
                                                                 'enabled' => true,
                                                                 ),
                                        'Brazilia Summer Time' => array (
                                                                         'offset' => '-2', 
                                                                         'timezone' => 'BRST',
                                                                         'enabled' => true,
                                                                         ),
                                        'Brazilia Time' => array (
                                                                  'offset' => '-3', 
                                                                  'timezone' => 'BRT',
                                                                  'enabled' => true,
                                                                  ),
                                        'British Summer Time' => array (
                                                                        'offset' => '+1', 
                                                                        'timezone' => 'BST',
                                                                        'enabled' => true,
                                                                        ),
                                        'Bhutan Time' => array (
                                                                'offset' => '+6', 
                                                                'timezone' => 'BTT',
                                                                'enabled' => true,
                                                                ),
                                        'Brazil Western Daylight Time' => array (
                                                                                 'offset' => '-3', 
                                                                                 'timezone' => 'BWDT',
                                                                                 'enabled' => true,
                                                                                 ),
                                        'Brazil Western Standard Time' => array (
                                                                                 'offset' => '-4', 
                                                                                 'timezone' => 'BWST',
                                                                                 'enabled' => true,
                                                                                 ),
                                        'Chinese Antarctic Standard Time' => array (
                                                                                    'offset' => '+5', 
                                                                                    'timezone' => 'CAST',
                                                                                    'enabled' => true,
                                                                                    ),
                                       
                                        'Central Europe Summer Time' => array (
                                                                               'offset' => '+2', 
                                                                               'timezone' => 'CEST',
                                                                               'enabled' => true,
                                                                               ),
                                        'Central Europe Time' => array (
                                                                        'offset' => '+1', 
                                                                        'timezone' => 'CET',
                                                                        'enabled' => true,
                                                                        ),
                                        'Central Greenland Summer Time' => array (
                                                                                  'offset' => '-2', 
                                                                                  'timezone' => 'CGST',
                                                                                  'enabled' => true,
                                                                                  ),
                                        'Central Greenland Time' => array (
                                                                           'offset' => '-3', 
                                                                           'timezone' => 'CGT',
                                                                           'enabled' => true,
                                                                           ),
                                        'Chatham Island Daylight Time' => array (
                                                                                 'offset' => '+13.45', 
                                                                                 'timezone' => 'CHADT',
                                                                                 'enabled' => true,
                                                                                 ),
                                        'Chatham Island Standard Time' => array (
                                                                                 'offset' => '+12.45', 
                                                                                 'timezone' => 'CHAST',
                                                                                 'enabled' => true,
                                                                                 ),
                                        'Chamorro Standard Time' => array (
                                                                           'offset' => '+10', 
                                                                           'timezone' => 'ChST',
                                                                           'enabled' => true,
                                                                           ),
                                        'Clipperton Island Standard Time' => array (
                                                                                    'offset' => '-8', 
                                                                                    'timezone' => 'CIST',
                                                                                    'enabled' => true,
                                                                                    ),
                                        'Cook Island Time' => array (
                                                                     'offset' => '-10', 
                                                                     'timezone' => 'CKT',
                                                                     'enabled' => true,
                                                                     ),
                                        'Chile Daylight Time' => array (
                                                                        'offset' => '-3', 
                                                                        'timezone' => 'CLDT',
                                                                        'enabled' => true,
                                                                        ),
                                        'Chile Standard Time' => array (
                                                                        'offset' => '-4', 
                                                                        'timezone' => 'CLST',
                                                                        'enabled' => true,
                                                                        ),
                                        'Colombia Time' => array (
                                                                  'offset' => '-5', 
                                                                  'timezone' => 'COT',
                                                                  'enabled' => true,
                                                                  ),
                                        'Central Standard Time' => array (
                                                                          'offset' => '-6', 
                                                                          'timezone' => 'CST',
                                                                          'enabled' => true,
                                                                          ),
                                        'China Standard Time' => array (
                                                                        'offset' => '+8', 
                                                                        'timezone' => 'CST',
                                                                        'enabled' => true,
                                                                        ),
                                        'Cape Verde Time' => array (
                                                                    'offset' => '-1', 
                                                                    'timezone' => 'CVT',
                                                                    'enabled' => true,
                                                                    ),
                                        'Christmas Island Time' => array (
                                                                          'offset' => '+7', 
                                                                          'timezone' => 'CXT',
                                                                          'enabled' => true,
                                                                          ),
                                        'Davis Time' => array (
                                                               'offset' => '+7', 
                                                               'timezone' => 'DAVT',
                                                               'enabled' => true,
                                                               ),
                                        'District de Terre Adélie Time' => array (
                                                                                  'offset' => '+10', 
                                                                                  'timezone' => 'DTAT',
                                                                                  'enabled' => true,
                                                                                  ),
                                        'Easter Island Daylight Time' => array (
                                                                                'offset' => '-5', 
                                                                                'timezone' => 'EADT',
                                                                                'enabled' => true,
                                                                                ),
                                        'Easter Island Standard Time' => array (
                                                                                'offset' => '-6', 
                                                                                'timezone' => 'EAST',
                                                                                'enabled' => true,
                                                                                ),
                                        'East Africa Time' => array (
                                                                     'offset' => '+3', 
                                                                     'timezone' => 'EAT',
                                                                     'enabled' => true,
                                                                     ),
                                        'Ecuador Time' => array (
                                                                 'offset' => '-5', 
                                                                 'timezone' => 'ECT',
                                                                 'enabled' => true,
                                                                 ),
                                        'Eastern Daylight Time' => array (
                                                                          'offset' => '-4', 
                                                                          'timezone' => 'EDT',
                                                                          'enabled' => true,
                                                                          ),
                                        'Eastern Europe Summer Time' => array (
                                                                               'offset' => '+3', 
                                                                               'timezone' => 'EEST',
                                                                               'enabled' => true,
                                                                               ),
                                        'Eastern Europe Time' => array (
                                                                        'offset' => '+2', 
                                                                        'timezone' => 'EET',
                                                                        'enabled' => true,
                                                                        ),
                                        'Eastern Greenland Time' => array (
                                                                           'offset' => '-1', 
                                                                           'timezone' => 'EGT',
                                                                           'enabled' => true,
                                                                           ),
                                        'Eastern Greenland Summer Time' => array (
                                                                                  'offset' => '0', 
                                                                                  'timezone' => 'EGST',
                                                                                  'enabled' => true,
                                                                                  ),
                                        'East Kazakhstan Standard Time' => array (
                                                                                  'offset' => '+6', 
                                                                                  'timezone' => 'EKST',
                                                                                  'enabled' => true,
                                                                                  ),
                                        'Eastern Standard Time' => array (
                                                                          'offset' => '-5', 
                                                                          'timezone' => 'EST',
                                                                          'enabled' => true,
                                                                          ),
                                      
                                        'Georgia Standard Time' => array (
                                                                          'offset' => '+4', 
                                                                          'timezone' => 'GET',
                                                                          'enabled' => true,
                                                                          ),
                                        'French Guiana Time' => array (
                                                                       'offset' => '-3', 
                                                                       'timezone' => 'GFT',
                                                                       'enabled' => true,
                                                                       ),
                                      
                                        'Greenwich Meantime' => array (
                                                                       'offset' => '0', 
                                                                       'timezone' => 'GMT',
                                                                       'enabled' => true,
                                                                       ),
                                        'Gulf Standard Time' => array (
                                                                       'offset' => '+4', 
                                                                       'timezone' => 'GST',
                                                                       'enabled' => true,
                                                                       ),
                                     
                                        'Hawaii - Aleutian Daylight Time' => array (
                                                                                    'offset' => '-9', 
                                                                                    'timezone' => 'HADT',
                                                                                    'enabled' => true,
                                                                                    ),
                                        'Hawaii - Aleutian Standard Time' => array (
                                                                                    'offset' => '-10', 
                                                                                    'timezone' => 'HAST',
                                                                                    'enabled' => true,
                                                                                    ),
                                        'Hong Kong Standard Time' => array (
                                                                            'offset' => '+8', 
                                                                            'timezone' => 'HKST',
                                                                            'enabled' => true,
                                                                            ),
                                   
                                        'Indochina Time' => array (
                                                                   'offset' => '+7', 
                                                                   'timezone' => 'ICT',
                                                                   'enabled' => true,
                                                                   ),
                                        'Ireland Daylight Time' => array (
                                                                          'offset' => '+1', 
                                                                          'timezone' => 'IDT',
                                                                          'enabled' => true,
                                                                          ),
                                        'Israel Daylight Time' => array (
                                                                         'offset' => '+3', 
                                                                         'timezone' => 'IDT',
                                                                         'enabled' => true,
                                                                         ),
                                     
                                      
                                      
                                        'Indian Standard Time' => array (
                                                                         'offset' => '+5.30', 
                                                                         'timezone' => 'IST',
                                                                         'enabled' => true,
                                                                         ),
                                        'Ireland Standard Time' => array (
                                                                          'offset' => '0', 
                                                                          'timezone' => 'IST',
                                                                          'enabled' => false,
                                                                          ),
                                        'Israel Standard Time' => array (
                                                                         'offset' => '+2', 
                                                                         'timezone' => 'IST',
                                                                         'enabled' => false,
                                                                         ),
                                        'Juan Fernandez Islands Daylight Time' => array (
                                                                                         'offset' => '-3', 
                                                                                         'timezone' => 'JFDT',
                                                                                         'enabled' => true,
                                                                                         ),
                                        'Juan Fernandez Islands Standard Time' => array (
                                                                                         'offset' => '-4', 
                                                                                         'timezone' => 'JFST',
                                                                                         'enabled' => true,
                                                                                         ),
                                        'Japan Standard Time' => array (
                                                                        'offset' => '+9', 
                                                                        'timezone' => 'JST',
                                                                        'enabled' => true,
                                                                        ),
                                                                          
                                 
                                        'Korea Standard Time' => array (
                                                                        'offset' => '+9', 
                                                                        'timezone' => 'KST',
                                                                        'enabled' => true,
                                                                        ),
                                    
                                        'Line Island Time' => array (
                                                                     'offset' => '+14', 
                                                                     'timezone' => 'LINT',
                                                                     'enabled' => true,
                                                                     ),
                                      
                             
                                   
                                        'Mongolia Summer Time' => array (
                                                                         'offset' => '+9', 
                                                                         'timezone' => 'MNST',
                                                                         'enabled' => true,
                                                                         ),
                                        'Moscow Summer Time' => array (
                                                                       'offset' => '+4', 
                                                                       'timezone' => 'MSD',
                                                                       'enabled' => true,
                                                                       ),
                                        'Moscow Standard Time' => array (
                                                                         'offset' => '+3', 
                                                                         'timezone' => 'MSK',
                                                                         'enabled' => true,
                                                                         ),
                                        'Mountain Standard Time' => array (
                                                                           'offset' => '-7', 
                                                                           'timezone' => 'MST',
                                                                           'enabled' => true,
                                                                           ),
                                        'Mauritius Summer Time' => array (
                                                                          'offset' => '+5', 
                                                                          'timezone' => 'MUST',
                                                                          'enabled' => true,
                                                                          ),
                                        'Mauritius Time' => array (
                                                                   'offset' => '+4', 
                                                                   'timezone' => 'MUT',
                                                                   'enabled' => true,
                                                                   ),
                                        'Maldives Time' => array (
                                                                  'offset' => '+5', 
                                                                  'timezone' => 'MVT',
                                                                  'enabled' => true,
                                                                  ),
                                        'Malaysia Time' => array (
                                                                  'offset' => '+8', 
                                                                  'timezone' => 'MYT',
                                                                  'enabled' => true,
                                                                  ),
                                      
                                        'Nepal Time' => array (
                                                               'offset' => '+5.45', 
                                                               'timezone' => 'NPT',
                                                               'enabled' => true,
                                                               ),
                                      
                                        'Novosibirsk Time' => array (
                                                                     'offset' => '+6', 
                                                                     'timezone' => 'NOVT',
                                                                     'enabled' => true,
                                                                     ),
                                      
                                        'New Zealand Daylight Time' => array (
                                                                              'offset' => '+13', 
                                                                              'timezone' => 'NZDT',
                                                                              'enabled' => true,
                                                                              ),
                                        'New Zealand Standard Time' => array (
                                                                              'offset' => '+12', 
                                                                              'timezone' => 'NZST',
                                                                              'enabled' => true,
                                                                              ),
                                        
                                        'Omsk Standard Time' => array (
                                                                       'offset' => '+6', 
                                                                       'timezone' => 'OMST',
                                                                       'enabled' => true,
                                                                       ),
                                        'Pacific Daylight Time' => array (
                                                                          'offset' => '-7', 
                                                                          'timezone' => 'PDT',
                                                                          'enabled' => true,
                                                                          ),
                                      
                                   
                                        'Papua New Guinea Time' => array (
                                                                          'offset' => '+10', 
                                                                          'timezone' => 'PGT',
                                                                          'enabled' => true,
                                                                          ),
                                       
                                   
                                        'Pratas Islands' => array (
                                                                   'offset' => '+8', 
                                                                   'timezone' => 'PIT',
                                                                   'enabled' => true,
                                                                   ),
                                        'Pakistan Time' => array (
                                                                  'offset' => '+5', 
                                                                  'timezone' => 'PKT',
                                                                  'enabled' => true,
                                                                  ),
                                        'Pakistan Summer Time' => array (
                                                                         'offset' => '+6', 
                                                                         'timezone' => 'PKST',
                                                                         'enabled' => true,
                                                                         ),
                                       
                                    
                                        'Pacific Standard Time' => array (
                                                                          'offset' => '-8', 
                                                                          'timezone' => 'PST',
                                                                          'enabled' => true,
                                                                          ),
                                     
                                        'Paraguay Summer Time' => array (
                                                                         'offset' => '-3', 
                                                                         'timezone' => 'PYST',
                                                                         'enabled' => true,
                                                                         ),
                                        'Paraguay Time' => array (
                                                                  'offset' => '-4', 
                                                                  'timezone' => 'PYT',
                                                                  'enabled' => true,
                                                                  ),
                                     
                                     
                                        'South Africa Standard Time' => array (
                                                                               'offset' => '+2', 
                                                                               'timezone' => 'SAST',
                                                                               'enabled' => true,
                                                                               ),
                                       
                                        'Santa Claus Delivery Time' => array (
                                                                              'offset' => '+13', 
                                                                              'timezone' => 'SCDT',
                                                                              'enabled' => true,
                                                                              ),
                                     
                                        'Singapore Time' => array (
                                                                   'offset' => '+8', 
                                                                   'timezone' => 'SGT',
                                                                   'enabled' => true,
                                                                   ),
                                     
                                     
                                      
                                     
                                       
                                        'East Timor Time' => array (
                                                                    'offset' => '+9', 
                                                                    'timezone' => 'TPT',
                                                                    'enabled' => true,
                                                                    ),
                                       
                                     
                                        'Universal Coordinated Time' => array (
                                                                               'offset' => '0', 
                                                                               'timezone' => 'UTC',
                                                                               'enabled' => true,
                                                                               ),
                                     
                                      
                                       
                                     
                                        'Western Africa Summer Time' => array (
                                                                               'offset' => '+2', 
                                                                               'timezone' => 'WAST',
                                                                               'enabled' => true,
                                                                               ),
                                        'Western Africa Time' => array (
                                                                        'offset' => '+1', 
                                                                        'timezone' => 'WAT',
                                                                        'enabled' => true,
                                                                        ),
                                        'Western Europe Summer Time' => array (
                                                                               'offset' => '+1', 
                                                                               'timezone' => 'WEST',
                                                                               'enabled' => true,
                                                                               ),
                                        'Western Europe Time' => array (
                                                                        'offset' => '0', 
                                                                        'timezone' => 'WET',
                                                                        'enabled' => true,
                                                                        ),
                                      
                                      
                                        );
    

    /** Find Timezone Offset */
    foreach ($_WorldTimeZoneInformation as $timezone_name => $timezone_info) {
      if ($timezone_info['enabled']) {
        if ($timezone_info['timezone'] == strtoupper($timezone)) {
          return $timezone_info['offset'];
        }
      }
    }

    return 0;
  }



  /** class ends */
  }


?>