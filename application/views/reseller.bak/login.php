<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reseller | Sign in</title>
<style>
body{background-color: #E5E5E5;text-align: center;}
.login {padding: 25px 28px;background: white;text-align: left;width: 410px;margin: 125px auto 10px ;font-family: lucida grande,verdana;font-size: 12px;-webkit-border-radius: 10px;-moz-border-radius: 10px;-o-border-radius: 10px;border-radius: 10px;-moz-box-shadow: 0 0 6px #999;-webkit-box-shadow: 0 0 6px #999; -o-box-shadow: 0 0 6px #999;box-shadow: 0 0 6px #999;border: 1px solid #AAA;}
h1{color: black;font-size: 16px;margin: 0 0 20px 0;padding: 0;font-family: "Lucida Grande",arial,sans-serif;border-bottom: 0;font-weight: bold;display: block;}
h2 {color: black;font-size: 14px;margin: 0 0 2px 0;padding: 0;font-family: "Lucida Grande",arial,sans-serif;display: block;font-weight: bold;}
input[type="password"], input[type="text"]{width: 275px;font-size: 14px;padding: 3px;margin:3px 0px 15px 0px;background-color:#fff;border:1px solid #999999;cursor: auto;}
label input {margin-bottom:12px;}
.error{color: #f00;}
</style>
</head>
<body>
<div class="login">
<h1>Log In</h1>&nbsp;<br />
<div id="login_dialog" class="login_dialog">
  <form accept-charset="UTF-8" action="<?=site_url('reseller/check_login');?>" method="post">
  <div style="margin:0;padding:0;display:inline">
  <span class="error" style="margin-bottom: 5px;"><?php if(isset($_SESSION['error_msg'])){echo $_SESSION['error_msg']; unset($_SESSION['error_msg']);} ?></span>
    <div id="user_name_login">
      <h2>Username or email</h2>
      <input autocapitalize="off" autocorrect="off" id="username" name="username" type="text" /><br />
      <h2>Password</h2>
      <input id="password" name="password" type="password" /><br />
        <label>
        <input class="auto" id="remember_me" name="remember_me" type="checkbox" value="1" /> Remember me on this computer
        <!--</label><a href="<?= site_url('reseller/forget');?>">Forget Password?</a>--><br />
      <input class="button" name="commit" type="submit" value="Sign in" />
    </div>
</div>
</form>
</div>
</body>
</html>