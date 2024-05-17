<?php
if(!empty($_COOKIE['lang']))$lang=$_COOKIE['lang'];
if(!empty($_GET['lang']))$lang=$_GET['lang'];
if(!empty($lang) && ($lang=='en' || $lang=='fr')){
  include('lang_'.$lang.'.php');
}else include('lang_fr.php');
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo "$title";?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	</head>
	<body>
		<div id="content">
			<div id="step_4">
					<img id="logo" src="img/logo.png" alt="THECALLR"/>
					<p><?php echo "$text_page4"?></p>
					<form method="POST">
							<strong><?php echo "$phone_page4";?></strong><br/>
							<input type="text" name="number" />
							<input type="submit" /><br/>
							<small><?php echo "$phone_small";?></small>
					</form><br/>

					<small class="code"><?php echo "$html_code";?></small>
					<pre>&lt;form method="POST"&gt;
	&lt;strong&gt;Numéro de téléphone&lt;/strong&gt;&lt;br/&gt;
	&lt;input type="text" name="number" /&gt;
	&lt;input type="submit" /&gt;&lt;br/&gt;
	&lt;small&gt;merci de renseigner votre numéro au format international&lt;/small&gt;
&lt;/form&gt;

</pre>
					<small class="code"><?php echo "$php_code";?></small>
					<pre>
&lt;?php
	if (($_POST["number"])) { 
		require 'JSON_RPC_Client.php';
		$api = new JSON_RPC_Client('https://api.thecallr.com');
		$api->set_auth_credentials('<?php echo $_GET['login']?>' , '<?php echo $_GET['password'] ?>');
		$r = $api->call('clicktocall.call', '<?php echo $_GET['id_app']?>' , $_POST['number'] , '+{E.164}', 20, '<?php echo date('Y-m-d H:m:s', time()-10);?>', '', 'BLOCKED');
	} 
?&gt;</pre>
				
							
			</div></div>
	</body>
</html>
<?php

	if (($_POST["number"])) { 
	require 'JSON_RPC_Client.php';

	$api = new JSON_RPC_Client('https://api.thecallr.com');
	$api->set_auth_credentials($_GET['login'] , $_GET['password']);


	$r = $api->call('clicktocall.call', $_GET['id_app'] , $_POST['number'], '+{E.164}', 60, '2012-04-03 00:00:00', '', 'BLOCKED');

} 
?> 