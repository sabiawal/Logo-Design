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
	$('#form5').submit();
});
</script>
<div id="container" class="ltr" style="display:none;">    
<?php 
$contacts = $_SESSION['contact_info']; 
$explode = explode(' ',$contacts);
?>    
    
<form id="form5" name="form5" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="https://ldg1.wufoo.com/forms/s11vyr7606b0ep7/#public">

<ul>

<li id="foli19" class="notranslate      ">
<label class="desc" id="title19" for="Field19">
Name
</label>
<span>
<input id="Field19" name="Field19" type="text" class="field text fn" value="<?php echo @$explode[0]; ?>" size="8" tabindex="1" />
<label for="Field19">First</label>
</span>
<span>
<input id="Field20" name="Field20" type="text" class="field text ln" value="<?php echo @$explode[1]; ?>" size="14" tabindex="2" />
<label for="Field20">Last</label>
</span>
</li>
<li id="foli3" class="notranslate      ">
<label class="desc" id="title3" for="Field3">
Email
<span id="req_3" class="req">*</span>
</label>
<div>
<input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="<?php echo @$_SESSION['email_id']; ?>" maxlength="255" tabindex="3" required /> 
</div>
</li>
<li id="foli4" class="notranslate      ">
<label class="desc" id="title4" for="Field4">
Phone Number
</label>
<div>
<input id="Field4" class="field text medium" name="Field4" tabindex="4" type="tel" maxlength="255" value="<?php echo @$_SESSION['contact_phone']; ?>" /> 
</div>
</li>

 <li class="buttons ">
<div>
<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="nwNNUV/0jKUhcNqGP3VWJL3QOgfuUdH+o8RlheBLCMw=" />
</li>
</ul>                        
</form> 
</div>
</body>
</html>