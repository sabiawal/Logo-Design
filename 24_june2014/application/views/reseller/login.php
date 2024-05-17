<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reseller | Sign in</title>
<link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="login">
<h1>Log In</h1>&nbsp;<br />
<div id="login_dialog" class="login_dialog">
  <form accept-charset="UTF-8" action="<?=site_url('reseller/check_login');?>" method="post">
  <div style="margin:0;padding:0;display:inline">
  <span class="error" style="margin-bottom: 5px;"><?php if(isset($_SESSION['error_msg'])){echo $_SESSION['error_msg'];} ?></span>
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