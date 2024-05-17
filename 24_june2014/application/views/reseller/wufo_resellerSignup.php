<!DOCTYPE html>
<html>
<head>

<title>Logo Design Guarantee</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<script src="<?=base_url();?>js/wufoo.js"></script>
<script src="<?=base_url();?>js/jquery.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">
<script type="text/javascript">
$(function(){
	$('#form7').submit();
});
</script>
<div id="container" class="ltr" style="display:none;">
<?php 
$contacts = $_SESSION['fullname']; 
$explode = explode(' ',$contacts);
?>
<form id="form7" name="form7" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="https://ldg1.wufoo.com/forms/p1h0g7n9163cysm/#public">

<ul>

<li id="foli15" class="notranslate      ">
<label class="desc" id="title15" for="Field15">
Name
</label>
<span>
<input id="Field15" name="Field15" type="text" class="field text fn" value="<?php echo @$explode[0]; ?>" size="8" tabindex="1" />
<label for="Field15">First</label>
</span>
<span>
<input id="Field16" name="Field16" type="text" class="field text ln" value="<?php echo @$explode[1]; ?>" size="14" tabindex="2" />
<label for="Field16">Last</label>
</span>
</li>
<li id="foli8" class="notranslate      ">
<label class="desc" id="title8" for="Field8">
Company Name
</label>
<div>
<input id="Field8" name="Field8" type="text" class="field text medium" value="<?php echo @$_SESSION['company_name']; ?>" maxlength="255" tabindex="3" onkeyup="" />
</div>
</li><li id="foli3" class="notranslate      ">
<label class="desc" id="title3" for="Field3">
Email
<span id="req_3" class="req">*</span>
</label>
<div>
<input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="<?php echo @$_SESSION['email_id']; ?>" maxlength="255" tabindex="4" required /> 
</div>
</li> <li class="buttons ">
<div>
<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="0KuOyK28L3R4FUIS4/hRimaSzH4WRIqRHJ+D07exlRU=" />
</li>
</ul>              
</form> 
</div>
</body>
</html>