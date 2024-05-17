<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url(); ?>css/import.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.forget-pw{padding: 30px;}
.forget-pw label{display: inline-block; width: 100px; padding-right: 10px; text-align: right;}
p.button{margin-left: 110px;}
</style>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
<script language="javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript">
//$(document).ready(function()
//{
//    $('#showpassword').click(function()
//    {        
//        if($('#showpassword').is(':checked'))
//        {
//            alert('test');
//            $('#new_password').attr('type','text');
//        }
//        else
//        {
//            $('#new_password').attr('type','password');
//        }
//    });
//});
</script>
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php $this->load->view('blocks/header/header');  ?>
  </div>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main">
        <div class="forget-pw">
            <h1>Please Enter Your New Password Below:</h1><br />
            <form method="post" action="#">
                <p><label>Password</label><input id="new_password" type="text" name="new_password" /><!--<label>show Password <input type="checkbox" name="showpassword" id="showpassword" /></label>--></p>               
                <p class="button"><input type="submit" name="submit" value="Reset" /></p>
            </form>
        </div>
      </div>
    </div>
  </div>
<div class="footer-container">
    <div class="footer">
        <?php $this->load->view('blocks/footer/footer-links'); ?>
        <?php $this->load->view('blocks/footer/footer-text'); ?>
        <?php $this->load->view('blocks/footer/footer-seals'); ?>
    </div>
</div>
</div>
</body>
</html>