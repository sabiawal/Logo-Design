<!DOCTYPE html>
<html>
<head>

<title>
LDG US reseller
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<script src="<?=base_url();?>assets/js/wufoo/wufoo.js"></script>
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">
<script type="text/javascript">
$(function(){
	$('#form8').submit();
});
</script>
<div id="container" class="ltr" style="display:none;">
<?php 
$contacts = $_SESSION['fullname']; 
$explode = explode(' ',$contacts);
?>
<form id="form8" name="form8" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://ldg1.wufoo.com/forms/xq21gh31a8kjqk/#public">

<ul>

<li id="foli14" class="notranslate      ">
<label class="desc" id="title14" for="Field14">
Name
</label>
<span>
<input id="Field14" name="Field14" type="text" class="field text fn" value="<?php echo @$explode[0]; ?>" size="8" tabindex="1" />
<label for="Field14">First</label>
</span>
<span>
<input id="Field15" name="Field15" type="text" class="field text ln" value="<?php echo @$explode[1]; ?>" size="14" tabindex="2" />
<label for="Field15">Last</label>
</span>
</li>
<li id="foli7" class="notranslate      ">
<label class="desc" id="title7" for="Field7">
Company Name
</label>
<div>
<input id="Field7" name="Field7" type="text" class="field text medium" value="<?php echo @$_SESSION['company_name']; ?>" maxlength="255" tabindex="3" onkeyup="" />
</div>
</li><li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Email
<span id="req_4" class="req">*</span>
</label>
<div>
<input id="Field4" name="Field4" type="email" spellcheck="false" class="field text medium" value="<?php echo @$_SESSION['email_id']; ?>" maxlength="255" tabindex="4" required /> 
</div>
</li> <li class="buttons ">
<div>
<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="9EjKQZjUWXlSSTGANfNTunmtG2Ykx6PyPtr3bmqY044=" />
</li>
</ul>                     
</form> 
</div>
</body>
</html>