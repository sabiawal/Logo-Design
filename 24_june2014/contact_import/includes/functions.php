<?php function date_str_to_db($string)
{
$datetoconvert=$string;
$vars = explode("-", $datetoconvert);
$datetodb=$vars[2]."-".$vars[1]."-".$vars[0];
return $datetodb;
}
function RemoveDir($dir, $DeleteMe) {
    if(!$dh = @opendir($dir)) return;
    while (false !== ($obj = readdir($dh))) {
        if($obj=='.' || $obj=='..' || $obj=='cookie.txt' || $obj=='yahoocontacts.txt'  || $obj=='gmailcontacts.txt' || $obj=='livecontacts.txt' ) continue;
        if (!@unlink($dir.'/'.$obj)) RemoveDir($dir.'/'.$obj, true);
    }

    closedir($dh);
    if ($DeleteMe){
        @rmdir($dir);
    }
}
 function check_email_address($email) 
{
  $email=trim($email);
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { 
    $domain_array = explode(".", $email_array[1]);
	 if (strlen($domain_array[0]) < 3) 
	 {
        return false; // short domain
     }
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])| ([A-Za-z0-9]+))$",$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

function makelink($string)
{

/*** make sure there is an http:// on all URLs ***/
$string = preg_replace("/([^\w\/])(www\.[a-z0-9\-]+\.[a-z0-9\-]+)/i", "$1http://$2",$string);
/*** make all URLs links ***/
$string = preg_replace("/([\w]+:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/i","<a target=\"_blank\" href=\"$1\">$1</A>",$string);
/*** make all emails hot links ***/
$string = preg_replace("/([\w-?&;#~=\.\/]+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?))/i","<A HREF=\"mailto:$1\">$1</A>",$string);

return $string;
}

function remove_link($string)
{

$string = preg_replace("/([^\w\/])(www\.[a-z0-9\-]+\.[a-z0-9\-]+)/i", " ",$string);

$string = preg_replace("/([\w]+:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/i"," ",$string);

$string = preg_replace("/(www\.[a-z0-9\-]+\.[a-z0-9\-]+)/i", " ",$string);

$string = preg_replace("/(.[a-z0-9\-]+\.[a-z0-9\-]+)/i", " ",$string);

$string = preg_replace("/([\w-?&;#~=\.\/]+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?))/i","",$string);

return $string;
}

function get_time_difference( $start, $end ) 
{
    $uts['start']      =    strtotime( $start );
    $uts['end']        =    strtotime( $end );
    if( $uts['start']!==-1 && $uts['end']!==-1 )
    {
        if( $uts['end'] >= $uts['start'])
        {
            $diff    =    $uts['end'] - $uts['start'];
            if( $days=intval((floor($diff/86400))) )
                $diff = $diff % 86400;
            if( $hours=intval((floor($diff/3600))) )
                $diff = $diff % 3600;
            if( $minutes=intval((floor($diff/60))) )
                $diff = $diff % 60;
            $diff    =    intval( $diff );            
            return( array('days'=>$days, 'hours'=>$hours, 'minutes'=>$minutes, 'seconds'=>$diff) );
        }
        else
        {
            return( array('days'=>'0', 'hours'=>'0', 'minutes'=>'0', 'seconds'=>'0') );
        }
    }
    else
    {
        trigger_error( "Invalid date/time data detected", E_USER_WARNING );
    }
    return( false );
}
function is_banned_email($email)
{
$result_email=mysql_query('SELECT * FROM  staf_senders WHERE banned="1" AND sender_email="'.trim($email).'"');

$isbanned=mysql_num_rows($result_email);
	if($isbanned!="0")
	{
		echo("<div style=\"padding-bottom:8px; padding-top:8px;background:#FEFFD5; border:1px solid #FFEB70; color:#B90101;width=100%;text-align:center;\"><font style=\"font-family:Tahoma; size:15px; font-weight:bold; color:#CC3300 \">");
			echo("Your email address is blocked!</font></div>");
	exit();	
	}

}

function is_banned_ip($ip)
{
$resul_bt=mysql_query('SELECT * FROM staf_blocked_ips WHERE ip="'.trim($ip).'"');
$isbanned=mysql_num_rows($resul_bt);
	if($isbanned==1)
	{
		echo("<div style=\"padding-bottom:8px; padding-top:8px;background:#FEFFD5; border:1px solid #FFEB70; color:#B90101;width=100%;text-align:center;\"><font style=\"font-family:Tahoma; size:15px; font-weight:bold; color:#CC3300 \">");
			echo("Your IP address is blocked!</font></div>");
	exit();	
	}

}

function is_banned_domain($emailtocheck)
{
$email  = $emailtocheck;
$domain = strstr($email, '@');
$domain=str_replace("@","",$domain);

$resdomain=mysql_query("SELECT * FROM staf_blocked_domains WHERE domainname='".trim($domain)."' ");
$exists=mysql_num_rows($resdomain);
if($exists>0) {return true; }
if($exists==0) {return false;}
}


function ahref2text($string) {
    return ereg_replace('<a .*href=("|\')?([^ "\']*)("|\')?.*>([^<]*)</a>', '[\\4] (link: \\2)', $string);
}

function html_mail_to_txt($email)
{
$patern ='#<a\s[^>]*href\="([^"]*[^"]*)"[^>]*>.*?</a>#';
$newemail=preg_replace($patern, '<br>[$1]', $email);
$newemail=str_replace("<br />","<br>",$newemail);
$newemail=str_replace("<br/>","<br>",$newemail);
//$newemail=str_replace("<br>","\n",$newemail);
$newemail=str_replace("<br>","\r\n",$newemail);

$newemail = str_replace ( '&amp;', '&', $newemail );
$newemail = str_replace ( "'", "\'", $newemail );
$newemail = str_replace ( '&quot;', '"', $newemail );
$newemail = str_replace ( '&lt;', '<', $newemail );
$newemail = str_replace ( '&gt;', '>', $newemail );
$newemail = str_replace ( '&uuml;', 'ü', $newemail );
$newemail = str_replace ( '&Uuml;', 'Ü', $newemail );
$newemail = str_replace ( '&auml;', 'ä', $newemail );
$newemail = str_replace ( '&Auml;', 'Ä', $newemail );
$newemail = str_replace ( '&ouml;', 'ö', $newemail );
$newemail = str_replace ( '&Ouml;', 'Ö', $newemail );
$newemail=strip_tags($newemail);	
return 	$newemail;
}

function email_html2txt($html) {
	
$html=str_replace("<br />","<br>",$html);
$html=str_replace("<br/>","<br>",$html);
//$newemail=str_replace("<br>","\n",$newemail);
$html=str_replace("<br>","\r\n",$html);

if (trim($html)=='') { return $html; }
$text = htmlspecialchars_decode($html);
$text = str_replace("</table>", "</TABLE>", $text);
do { if (strpos($text," </TABLE>")) { $text = str_replace(" </TABLE>", "</TABLE>", $text); } else { break; } } while (0);
do { if (strpos($text,">\n\n")) { $text = str_replace(">\n\n", ">\n", $text); } else { break; } } while (0);
$text = str_replace(">\n", ">", $text);
$text = str_replace("</tr>", "</TR>", $text);
$text = str_replace("</td>", "</TD>", $text);
$text = str_replace("</th>", "</TH>", $text);
$text = str_replace("</TD></TR>", "\n", $text);
$text = str_replace("</TH></TR>", "\n", $text);
$text = str_replace("</TD>", ": ", $text);
$text = str_replace("</TH>", ": ", $text);
$text = str_replace("</TR>", "\n", $text);
$text = strip_tags($text);
return $text;
}



?>