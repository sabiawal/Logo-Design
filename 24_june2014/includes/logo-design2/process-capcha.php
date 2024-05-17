<?php
// Begin the session
session_start();
$captcha = str_replace(" ","", $_GET['verificationcode']);
// To avoid case conflicts, make the input uppercase and check against the session value
// If it's correct, echo '1' as a string
if(strtoupper($captcha) == $_SESSION['code']){
	echo 'true';
    }
// Else echo '0' as a string

else{    
    /*$subject = '';
        if($_SESSION['code'] != strtoupper($_GET['verificationcode'])){    
        $subject = 'Wrong Captcha Entered';
        }
        
        else{
        $subject = 'Right Captcha';  
        } 
        
         $message = '
        <table width="400" border="1">
        <tr>
        <th><strong>Name</strong></th>
        <th><strong>Discription</strong></th>
        </tr>
        <tr>
        <td><strong>Package</strong></td>
        <td>'.@$_SESSION['package'].'</td>
        </tr>
        <tr>
        <td><strong>Price</strong></td>
        <td>'.@$_SESSION['price'].'</td>
        </tr>
        <tr>
        <td><strong>IP</strong></td>
        <td>'.@$_SERVER['REMOTE_ADDR'].'</td>
        </tr>
        <tr>
        <td><strong>Customer Name</strong></td>
        <td>'.@$_GET['fname'].' '.@$_GET['lname'].'</td>
        </tr>
        <tr>
        <td><strong>Company Name</strong></td>
        <td>'.@$_GET['company_name'].'</td>
        </tr>
        <tr>
        <td><strong>Phone</strong> </td>
        <td>'.@$_GET['phone_no'].'</td>
        </tr>
        <tr>
        <td><strong>Email</strong></td>
        <td>'.@$_GET['email_id'].'</td>
        </tr>
        <tr>
        <td><strong>Logo Name</strong></td>
        <td>'.@$_GET['cmp_logo_name'].'</td>
        </tr>
        <tr>
        <td><strong>Tagline</strong></td>
        <td>'.@$_GET['tagline'].'</td>
        </tr>
        <tr>
        <td><strong>Business Discription</strong></td>
        <td>'.@$_GET['business_detail'].'</td>
        </tr>
        <tr>
        <td><strong>Entered Captcha</strong></td>
        <td>'.@$_GET['verificationcode'].'</td>
        </tr>
        <tr>
        <td><strong>Right Captcha</strong></td>
        <td>'.@$_SESSION['code'].'</td>
        </tr>
        </table>
        
        ';  
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= @$_SESSION['fname'].' '.@$_GET['lname'].'<'.@$_GET['email_id'].'>' . "\r\n";
            
    mail('testlogodesignorder@gmail.com',$subject,$message,$headers);*/    
	echo 'true';
    
        
}
?>