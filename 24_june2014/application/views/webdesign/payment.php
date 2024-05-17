<?php
    $web_price = 0;
    $logo_price = 0;
    $gbp ='&pound;';
    // $ Price for USA sites and pound price for UK sites  
    $query = $this->db->query("SELECT `ip`,`company_name` FROM `web_order` where web_id='".$_GET['web_id']."'");        
    $row            = $query->row();    
    $ip             = $row->ip;
    $company_name   = $row->company_name;    
    if($ip == $_GET['ip'])
    {
        $logo_id = $_GET['logo_id'];
        $web_id  = $_GET['web_id'];
        $authentication_code = $_GET['authentication_code'];  //using only for logo purpose now
        $web_package  = @$_GET['web_package'];
        $web_price    = @$_GET['web_price'];
        $logo_package = @$_GET['logo_package'];
        $logo_price   = $_GET['logo_price'];
		$total = $web_price + $logo_price;
		if(isset($_GET['vat'])){
			$vat=number_format($_GET['vat'],2,'.','');
			$total = $total+$vat;
			$_SESSION['tax_amount'] =$vat;
		}
        else{$_SESSION['tax_amount'] = 0;}
        if(isset($_GET['dis'])){
			$dis=number_format($_GET['dis'],2,'.','');
			$total=$total-$dis;
		}
    }
    else
    {
        die('Invalid Payment Link or Expired!');
    }
    ////////////////////////////////////////////////////
    if(COUNTRY == "UK")
    {
        $discription = $web_package." " .htmlspecialchars($gbp).$web_price;
        if($logo_package != '')
        {
            $discription .= ", ".$logo_package." ".htmlspecialchars($gbp).$logo_price;
        }
		if(isset($dis)) $discription.=", Promotional Discount: ".htmlspecialchars($gbp).$dis;
		if(isset($vat)) $discription.=", V.A.T: ".htmlspecialchars($gbp).$vat;
    }
    else
    {
        $discription = $web_package." " .$web_price."USD ";
        if($logo_package != '')
        {
            $discription .= $logo_package." ".$logo_price."USD ";
        }
        if(isset($dis)) $discription.=" Discount:".$dis."USD";		
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Payment</title>
</head>
<body>
<?php 
if(COUNTRY == "UK")
{
    ?>
    	Please Wait...        
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
		<input type="hidden" name="email" value="fiftydollarlogo@gmail.com"/>
		<input type="hidden" name="logo" value="<?= base_url(); ?>images/logo.jpg"/>
		<input type="hidden" name="returnurl" value="<?= base_url(); ?>web-site-design/webdesigner-limited-sale/thankyou.php?&ip=<?= $ip; ?>&web_id=<?= @$web_id;?>&logo_id=<?= @$logo_id;?>&price=<?=@$total;?>&authentication_code=<?= @$authentication_code; ?>" />
		<input type="hidden" name="description" value="<?= $discription; ?>"/>
		<input type="hidden" name="amount" value="<?=$total;?>"/>
		</form>
        <?php #session_destroy();?>
		<script language="javascript">
			document.checkoutform.submit();
		</script>
    <?php
}
else
{   $_SESSION['order_description'] = $discription;
    $_SESSION['web_package']  = $web_package;
    $_SESSION['web_price']    = $web_price;
    $_SESSION['logo_package'] = $logo_package;
    $_SESSION['logo_price']   = $logo_price;
    //company name to dispaly this name in jetpay page
    $_SESSION['company_name'] = $company_name; 
    // value for return url section
    $_SESSION['insert_id']  = $web_id;
    $_SESSION['insert_id2'] = $logo_id;
    $_SESSION['authentication_code'] = $authentication_code;
    $_SESSION['dis'] = @$dis;
    redirect('web-site-design/webdesigner-limited-sale/jetpay');
}
?>
</body>
</html>