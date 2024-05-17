<?php 
	/*$site = ORDERED_SITE;
	$ip = $_SERVER['REMOTE_ADDR'];
	$company_name = @$_SESSION['company_name'];
	$contact_info = @$_SESSION['contact_info'];
	$email = @$_SESSION['email']=$_POST['email'];
	$contact_phone = @$_SESSION['contact_phone'];
    $best_time = @$_SESSION['best_time'];
    $files = @$_SESSION['file'];
	$domain_name = @$_SESSION['domain_name'];
	$web_idea = @$_SESSION['web_idea'];
    $comment = @$_SESSION['comment'];
    $pageno=@$_SESSION['pageno'];
    */
	$ip = $_SERVER['REMOTE_ADDR'];
	$web_package = @$_SESSION['web_package'];
	$logo_package = @$_SESSION['logo_package'];	
	$web_price = @$_SESSION['web_price'];
	$logo_price = @$_SESSION['logo_price'];
    $gbp = "GBP";
    $total_real_price = $web_price + $logo_price;
    //Nochex Properties
    //$web_price_dollar = $web_price;
//    $logo_price_dollar = $logo_price;
//	$web_price_pound = ceil($web_price * CONVERSION_MULTIPLYER);
//    $logo_price_pound = ceil($logo_price * CONVERSION_MULTIPLYER);
//	$total = $web_price_pound + $logo_price_pound;
    $order_discription = $web_package.' '.$web_price.$gbp.' ';
    if($logo_price > 0)
    {        
        $order_discription .= $logo_package.' '.$logo_price.$gbp;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Payment</title>
<?php $this->load->view('blocks/analytics'); ?>
</head>
<body>        
		<?php echo "Please Wait...";?>        
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
		<input type="hidden" name="email" value="fiftydollarlogo@gmail.com"/>
		<input type="hidden" name="logo" value="http://<?php echo SITE_NAME; ?>/images/logo.jpg"/>
		<input type="hidden" name="returnurl" value="<?= base_url(); ?>web-site-design/webdesigner-limited-sale/thankyou.php?&ip=<?= $ip; ?>&web_id=<?= @$_SESSION['insert_id'];?>&logo_id=<?= @$_SESSION['insert_id2'];?>&price=<?=@$total_real_price;?>&authentication_code=<?= @$_SESSION['authentication_code']; ?>" />
		<input type="hidden" name="description" value="<?= $order_discription; ?>"/>
		<input type="hidden" name="amount" value="<?=$total_real_price;?>"/>
		</form>
        <?php #session_destroy();?>
		<script language="javascript">
			document.checkoutform.submit();
		</script>
</body>
</html>