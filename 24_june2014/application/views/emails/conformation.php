<?php 
$order_id = '';
//echo '<pre>'; print_r($rows); die;

$order_id = $logo_id;
$order_type = 'Logo Order';

if($rows->site_id == '1')
$site_name = '50dollar.com';
elseif($rows->site_id == '4')
$site_name = '25pound.co.uk';
elseif($rows->site_id == '6')
$site_name = 'LDG.co.uk';
elseif($rows->site_id == '7')
$site_name = 'LDG.com';  
    echo 'The Client <strong>'.@$rows->fname.'</strong> Has Paid His/Her Order and His/Her Other Details Are Listed Below: <br /><br />
    
    <table width="400" border="1" cellpadding="5" >
    <tr>
    <td><strong>Name</strong></td>
    <td><strong>Discription</strong></td>
    </tr>
    <tr>
    <td style="color:green;">Order Type</td>
    <td style="color:green;">'.$order_type.'</td>
    </tr>
    <tr>
    <td>Order Id</td>
    <td>'.$order_id.'</td>
    </tr>
    <tr>
    <td>Order Site</td>
    <td>'.@$site_name.'</td>
    </tr>
    <tr>
    <td>IP</td>
    <td>'.$_SERVER['REMOTE_ADDR'].'</td>
    </tr>
    <tr>
    <td>Name</td>
    <td>'.@$rows->fname." ".@$rows->lname.'</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>'.@$rows->email_id.'</td>
    </tr>
    <tr>
    <td>Company Name</td>
    <td>'.@$rows->company_name.'</td>
    </tr>     
    </table>';	 

?>
