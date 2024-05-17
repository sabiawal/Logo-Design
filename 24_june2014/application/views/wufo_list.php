<!DOCTYPE html>
<html>
<head>

<title>Logo Design Guarantee</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- JavaScript -->
<script src="<?=base_url();?>js/wufoo.js"></script>
<script src="<?=base_url();?>js/jquery.js"></script>
<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">
<script type="text/javascript">
$(function(){
	$('#form4').submit();
});
</script>
<div id="container" class="ltr" style="display:none;">

<form id="form4" name="form4" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="https://ldg1.wufoo.com/forms/r1cindgr0nydk20/#public">
    
<ul>

<li id="foli10" class="notranslate      ">
<label class="desc" id="title10" for="Field10">
Name
</label>
<span>
<input id="Field10" name="Field10" type="text" class="field text fn" value="<?php echo @$_SESSION['fname']; ?>" size="8" tabindex="1" />
<label for="Field10">First</label>
</span>
<span>
<input id="Field11" name="Field11" type="text" class="field text ln" value="<?php echo @$_SESSION['lname']; ?>" size="14" tabindex="2" />
<label for="Field11">Last</label>
</span>
</li>
<li id="foli5" class="notranslate      ">
<label class="desc" id="title5" for="Field5">
Email
<span id="req_5" class="req">*</span>
</label>
<div>
<input id="Field5" name="Field5" type="email" spellcheck="false" class="field text medium" value="<?php echo @$_SESSION['email_id']; ?>" maxlength="255" tabindex="3" required /> 
</div>
</li>
<li id="foli6" class="notranslate      ">
<label class="desc" id="title6" for="Field6">
Phone Number
</label>
<div>
<input id="Field6" class="field text medium" name="Field6" tabindex="4" type="tel" maxlength="255" value="<?php echo @$_SESSION['phone_no']; ?>" /> 
</div>
</li>

 <li class="buttons ">
<div>
<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="KFpbQ1TNX9wz4l8Gd559hki206dylLTdUuqtsP3OkD8=" />
</li>
</ul>    
</form> 
</div>
</body>
</html>