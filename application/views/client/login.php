<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>:: Client Panel ::</title>
        <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
        <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
        
        <link href="<?php echo base_url()?>assets/css_client/login.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]>
        <script src="<?php echo base_url()?>js/IE8.js"></script>
        <![endif]-->
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#focus').focus();
            
            $('.rem_class').keyup(function(){	
                //alert("success");
                $(this).removeClass("error");
                $('.errortext').css('visibility','hidden');
        	});
         });
        </script>
        <!--<script>
        function myFunction(x)
        {
        x.style.border="1px solid #ccc";
        }
        </script>-->
    </head>
<body>


<style type="text/css">
    body
    {background: none !important;}
    .bg {
         background-attachment: fixed;
    background: #fff url(http://www.websamplenow.com/30/login/demo.jpg) no-repeat center center  !important;
  
    width: 100% !important ;
    overflow: hidden;
    background-size: cover !important;
    -webkit-background-size: cover!important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
/*    font-size: 12px;
    color: #000000;*/
    /* background-position: 0px -81px; */
/*  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;*/    /*height: 100%;*/



}

.mid-login {

  margin: 14px auto ;
  width: 462px;
}


@media(max-width: 831px)
{.new-top-inner1 {

  width: 100% !important;
}}

@media(max-width: 993px)
{
    .new-top-inner {

  width: 100%;
}

.phone-right {
 padding-right: 20px;
 text-align: center;
}

}
@media(max-width: 1300px)
{.bg
    {background-size: contain !important;}

}
@media(max-width: 1366px)
{

    .new-top-inner1 h1 {
 
  font-size: 40px;

}
}
@media(max-width: 484px)
{

 .mid-login {
  margin:14px auto;
  width: 85%;
} 

.bg {
    
    min-height: auto;
    background-size: cover !important;

  
}

.rem_class {
  font-size: 17px;
  height: 41px;
  padding: 3px 3px 3px 5px;
  width: 100% !important;
}

.new-top-inner1 h1 {
  
  font-size: 30px;

}



} 


 @media(min-width: 1600px)
 {
.mid-login
{margin-top: 75px;
}
.bg
{  min-height: 505px;}

 }
</style>
<div class="new-top">
    <div class="new-top-inner">
        <div class="logo-left">
            <img src="<?php echo base_url();?>assets/images/client/logo.jpg" alt="Logo Design Guarantee" height="91" width="337" />
        </div>
        <div class="phone-right">
            <p><span class="green">24/7 Sales/Support:</span> <span class="phone"><?php echo PHONE_CLIENT_PANEL; ?> <!--(866) 598-6266--></span></p>
        </div>
    
    </div>
    
    <div class="new-top-inner1">
    
    <h1>Your Home for Logos, Web Design &amp; <span class="more">More!</span></h1>
    </div>
</div>
<div class="bg">
<div class="mid-login" >
    <div class="mid-login-inner">
        <h1>Welcome </h1>
        <span class="errortext">
            <?php if(isset($_SESSION['error_message'])) { ?>
            <?php echo $_SESSION['error_message'];
                unset($_SESSION['error_message']);
            ?>
            <?php } ?>
        </span>
        <form action="<?php echo base_url()?>client_panel/checkuser" method="post">    
            <p class="password_entry">
                <label>User Name&nbsp;</label>            
                <input id="focus" type="text" name='username' value="<?php if(isset($_POST['username'])){echo @$_POST['username'];} ?>"  class="rem_class "  />
            </p>
            <p class="password_entry">
                <label>Password&nbsp;</label>
                
                <input type="password" name="password" value="<?php if(isset($_POST['password'])){echo @$_POST['password'];} ?>" class="rem_class" />
            </p>
            <!--    <div style="clear:both"></div>  -->  
            <div class="checkbox_and_submit">
                <!--<p>
                    <label>
                        <input type="checkbox" value="1" class="remember" /> 
                        <span style="font-size:12px; color:#000 !important; "> Remember me on this computer</span>
                    </label>
                </p>-->
                
                <div style="margin-top:10px;">
                    <input type="submit" value="Log in" name="submit" class="buttom" /><!--<input type="reset" value="Reset" name="reset" class="reset" style="margin-left:10px;">-->
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!--  </div>-->
<div class="button"  style="background-color:#fff;">
    <h1> <span style="color:#F00">New!</span> We now offer over 50 design services.</h1>
</div>
</body>
</html>