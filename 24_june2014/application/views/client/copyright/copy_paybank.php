<?php
    $order_discription = $_SESSION['copyright_package']." Copyright Package worth ".CURRENCY.$_SESSION['copyright_price'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>

</head>

<body>
    <p>Please Wait...</p>
    <!--Start Nochex payment Start-->	
    <!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
    <form name="checkoutform" action="https://secure.nochex.com" method="post">
    <input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
    <input type="hidden" name="logo" value="https://logodesignguarantee.com/images/logo.jpg" />
    <input type="hidden" name="returnurl" value="<?php echo base_url(); ?>client_panel/thankyou.php?ip=<?= $_SERVER['REMOTE_ADDR']; ?>&copyright_id=<?php echo @$_SESSION['copyright_id']; ?>&price=<?=@$_SESSION['amount'].'&payment_method= Nochex&order_type=copyright&authentication_code='.@$_SESSION['authentication_code'].'&ApprovalCode=nochex-'.mktime();?>" />
    <input type="hidden" name="description" value="<?= $order_discription; ?>" />
    <input type="hidden" name="amount" value="<?= $_SESSION['amount']; ?>" />
    </form>
    <script language="javascript">
    document.checkoutform.submit();
    </script>
    <!--End Nochex payment End-->
</body>
</html>