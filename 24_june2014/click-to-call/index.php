<title>Click-to-call</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script><div id="content">
        <div id="step_4">
					<img alt="THECALLR" src="img/logo.png" id="logo">

			
<form method="POST">
	<strong>Phone number</strong><br/>
	<input type="text" name="number" value="+" />
	<input type="submit" /><br/>
	<small>Number in international format.</small>
</form>
</div>
</div><?php
	if (isset($_POST["number"])) { 
		require 'JSON_RPC_Client.php';
		$api = new JSON_RPC_Client('https://api.thecallr.com');
		$api->set_auth_credentials('americanmarketingcorp' , 'SBdMDHLLLXLV5Pa');
		$r = $api->call('clicktocall.call', 'F28C3E00' , $_POST['number'] , '+{E.164}', 60, '2012-04-03 09:03:46', '', 'BLOCKED');
	} 
?>