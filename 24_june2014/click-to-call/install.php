<?php
if(!empty($_COOKIE['lang']))$lang=$_COOKIE['lang'];
if(!empty($_GET['lang']))$lang=$_GET['lang'];
if(!empty($lang) && ($lang=='en' || $lang=='fr')){
  include('lang_'.$lang.'.php');
  setcookie('lang',$lang,time()+3600*25*365,'/');
}else include('lang_fr.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo "$title";?></title>
		<link rel="shortcut icon" href="img/favicon.png"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.9.custom.css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>
	</head>
	<body>
		<div id="content">
			<div id="step_1">
				<ul id="flag">
					<li><a href="?lang=fr"><img src="img/france.png"></a></li>
					<li><a href="?lang=en"><img src="img/uk.png"></a></li>
				</ul>
				<img id="logo" src="img/logo.png" alt="THECALLR"/>
				<p><?php echo "$text_page1";?></p>
				<button class="bouton" ><?php echo "$button_page1";?></button>
			</div>

			<div id="step_2">
				<img id="logo" src="img/logo.png" alt="THECALLR"/>
				<p><?php echo "$text_page2"; ?></p>
				<?php
				$json = 'JSON_RPC_Client.php';
				$clicktocall='clicktocall.php';
				if (file_exists($json)) {
				    echo "<ul><div class='indicator_green'></div><li>$json_page2_on</li>";
				} else {
				    echo "<ul><div class='indicator_red'></div><li>$json_page2_off</li>";
				}
				if (file_exists($clicktocall)) {
				    echo "<div class='indicator_green'></div><li>$file_page2_on</li>";
				} else {
				    echo "<div class='indicator_red'></div><li>$file_page2_off</li>";
				}
				if (function_exists('curl_init')) {
				    echo "<div class='indicator_green'></div><li>$function_page2_on</li></ul>\n";
				} else {
				    echo "<div class='indicator_red'></div><li>$function_page2_off</li></ul>\n";
				}?>
				<button class="bouton" ><?php echo "$button_page2";?></button>
			</div>

			<div id="step_3">
				<div id="form">
					<img id="logo" src="img/logo.png" alt="THECALLR"/>
					<p><?php echo "$text_page3";?></p>
					<form id="connect" method="GET" action="<?php echo "$link_form"?>">
						<label for="login" ><?php echo "$login_page3";?></label>
						<input type="text" name="login" id="login"/>
						<br/>
						<label for="password"><?php echo "$pass_page3";?></label>
						<input type="password" name="password" id="password" />
						<br/>
						<label for="id_app"><?php echo "$id_page3";?></label>
						<input type="text" name="id_app" id="id_app" /><a id="id_modal" href="#modal"><small><?php echo "$link_help_page3";?></small></a><br/>
						<br/><small class="error"></small>
						<button class="bouton" onclick="$('#connect').submit()"><?php echo "$button_page3";?></button>
					</form>
				</div>	
			</div>
		</div>
		<div style="display: none;">
			<div id="modal" style="width:605px;height:150px;overflow:auto;">
				<small><?php echo "$text_help_page3";?></small><br/>
				<br/>
				<img src="img/id_app.png" alt=""/>
			</div>
	</body>
</html>


<script type="text/javascript">


$(document).ready(function(){

	

	if ($('#step_2 div').is('.indicator_red')) {
		$('#step_2 .bouton').hide();
	};

	$("#id_modal").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});

	$('#step_2').hide();
	$('#step_3').hide();

	$('#step_1 button.bouton').click(function() {
		$('#step_1').hide();
		$('#step_2').show();
		return false;
	});

	$('#step_2 button.bouton').click(function() {
		$('#step_2').hide();
		$('#step_3').show();
		$('#login').focus();
		return false;
	});


	$('#connect').submit(function(){
		if (!$('input[name=login]').val().match(/^[a-zA-Z\.-]+$/)) {
				$('.error').show();
				$('.error').html('<?php echo "$login_error"?>');
				$('input[name=login]').focus();
				return false;
			}

			if ($('input[name=password]').val().length==0) {
				$('.error').show();
				$('.error').html('<?php echo "$pass_error"?>');
				$('input[name=password]').focus();
				return false;
			}

			if (!$('input[name=id_app]').val().toUpperCase().match(/^[A-Z0-9 -]+$/)) {
				$('.error').show();
				$('.error').html('<?php echo "$id_error"?>');
				$('input[name=id_app]').focus();
				return false;
			}

	});

});

</script>

