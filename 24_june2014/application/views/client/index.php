<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.rem_class').keyup(function(){	
    //alert("success");
   $(this).removeClass("error");
   $('.errortext').css('visibility','hidden');
	});
 });
</script>
<style type="text/css">
body{
	background:#BABCBD url(<?= base_url(); ?>images/client/bg-body.gif) repeat-x;	
	}
	.client-login{
        background: #0492BA;
        -webkit-border-radius: 15px;   
        -moz-border-radius: 15px;    
        border-radius: 15px;    
        -webkit-border-radius: 15px;   
        -moz-border-radius: 15px;    
        border-radius: 15px;    
        -moz-box-shadow:    1px 3px 5px 0px #555;
        -webkit-box-shadow: 1px 3px 5px 0px #555;
        box-shadow:         1px 3px 5px 0px #555;
		
		height:140px;
		width:280px;
		position:absolute;
		top:50%;
		left:50%;
		margin:-75px 0 0 -150px;
        padding: 10px;
		}
		
		.client-login h1{
			color:#F87D13;
			font:bold 24px/32px "Times New Roman", Times, serif, Helvetica, sans-serif;
			}
		
		.client-login p label{
			color:#F87D13;
			float:left;
			font:bold 14px/18px "Times New Roman", Times, serif, Helvetica, sans-serif;
			margin:0 0 5px 0;
			
			text-align:right;
			width:75px;
			}
			.client-login p input{
			
			float:right;
			margin:0 50px 5px 0;
			}
			.buttom{
				background:url(<?= base_url(); ?>images/client/log_in.png) no-repeat;
				border:none;
				cursor:pointer;
				margin:0 50px 0 0;
				padding:10px 25px;
                width: 70px;
				
				}
                input.buttom:hover{
				background:url(<?= base_url(); ?>images/client/log_in.png) 0 -36px no-repeat;
				border:none;
				cursor:pointer;
				margin:0 50px 0 0;
				padding:10px 25px;
                width: 70px;
				}
                .error{
                    background: #f00;
                    color: #000;
                }
                .errortext{
                    color:#eb0000; 
                    display: block; 
                    font: normal 14px/10px arial; 
                    height: 20px; 
                    letter-spacing: 1px;
                }
</style>

</head>
<body>
  <div class="client-login" align="center">
  <h1>Welcome To Client Panel</h1>
  <span class="errortext" ><?php if(isset($_POST['submit'])){echo "Username or Password Incorrect!";} ?></span>
  <form action="<?= site_url('client_panel/check_login'); ?>" method="post">
<p><label>User Name</label><input type="text" name='username' value="<?php if(isset($_POST['username'])){echo @$_POST['username'];} ?>"  class="rem_class <?php if(form_error('username')){echo 'error';} //echo set_value('username');  ?>"  /></p>
<p><label>Password</label><input type="password" name="password" value="<?php if(isset($_POST['password'])){echo @$_POST['password'];} ?>" class="rem_class <?php if(form_error('password')){echo 'error';} ?>" /></p>
<div style="clear:both"></div>
<input type="submit" value="" name="submit" class="buttom" />
</form>
</div>
</body>
</html>