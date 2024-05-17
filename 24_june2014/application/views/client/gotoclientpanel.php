<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign in to client panel</title>
</head>

<body>
<div>Please wait while sign in...</div>
<div style="display:none">
<form action="<?php echo base_url()?>client_panel/checkuser" method="post" id="dosubmit" name="dosubmit">    
    			<input type="text" name="username" value="<?php echo $username?>"  />
				<input type="password" name="password" value="<?php echo $password?>">
    			<input type="submit" value="Login" name="submit" class="buttom" id="clicksubmit" />
  			</form>
            </div>
		<script>document.getElementById('clicksubmit').click();</script>
</body>
</html>