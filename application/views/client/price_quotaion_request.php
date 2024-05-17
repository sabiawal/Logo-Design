<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<!--<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>assets/uploadify_old/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
<link href="<?php echo base_url();?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />-->

<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>-->
<!--jquery slider-->
<link rel="stylesheet" href='<?php echo base_url();?>assets/css/newmodify.css' type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />


<script type="text/javascript" src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/uploadify_old/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
<link href="<?php echo base_url();?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />

<script>
$(function(){
	$('.quo_submit').click(function(){
	var subject= $('.subject').val();
		var client_message= $('.client_message').val();
		
		if(subject == ""){
			$('.subject').css('border-color','#FF0000').focus();
			$('.subject').keypress(function(){
				$('.subject').css('border-color','#D2D2D2');
				});
			return false;
			}
		if(client_message == ""){
			$('.client_message').css('border-color','#FF0000').focus();
			$('.client_message').keypress(function(){
				$('.client_message').css('border-color','#D2D2D2');
				});
			return false;
			}

    var formData = new FormData($("form#data")[0]);

    $.ajax({
        url: '<?php echo base_url()?>client_panel/price_quotaion_sendmail',
        type: 'POST',
        data: formData,
        success: function (data) {
          //alert(data)
        },
        contentType: false,
        processData: false
    });
$('.fancybox').fancybox();
});

	
	$('.ok').click(function(){
		var subject= $('.subject').val('');
		var client_message= $('.client_message').val('');
		$('.attached_files').val('');
		 $('.fancybox-close').trigger('click');
	//$('#submittt').submit();
	});
	

	
	})
</script>




<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>

<div class="wrapper">
  <?php $this->load->view("includes/client/header.php"); ?>
  <?php $this->load->view("includes/client/top_container.php"); ?>
  <div class="main-container">
    <div class="main col2-right-layout">
    
    
 <style>

.price-quotation h2
{
	background:#c2d69b;
	padding:10px;
	color:#636228;
	font-size:16px !important;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold !important;
	text-align:center;
	margin-bottom:20px;
	}

.price-quotation label
{
	font-size:14px;
	font-weight:bold;
	padding-right:10px;

	
}
.price-quotation  input[type="text"]
{
	border:2px solid #d2d2d2;
	padding:5px;
}

.attach
{color:#ad2d43 !important;
line-height:30px;	
}

.price-quotation textarea
{width:100%;
border:2px solid #d2d2d2;
min-height:150px;
margin-bottom:10px;
padding:5px;	
}

.quo_submit
{
	padding:10px;
	background:#00b050;
	border:1px solid #239123;
	color:#fff;
	font-weight:bold !important;
	margin:10px 0;
	width:210px;
	cursor:pointer !important;
	clear:both;
	display:block;
	}

.quo_submit:hover
{background-color:#0f8946;
text-decoration:none;
}
.fancybox-close, .fancybox-item{
	display:none;
	}
</style>



<div class="col-main">
<div class="price-quotation ">

<h2>Contact A Sales Representative</h2>
<form method="post" id="data" action="" enctype="multipart/form-data">
<label>Subject</label><input type="text" class="subject" name="subject" value=""/>
<p class="attach">"Attact any documents if desired(optional)"</p>
<p>Request a 	Price Quotation for additional/new services. Please type the service/s you wish to be quoted, in the box below. You may type in any other details you would like to be included in the quotation.</p>




<textarea class="client_message" name="textarea"></textarea>
<label>Attach Files</label>
<input type="file" id="attached_files" class="attached_files" name="image[]" multiple="multiple"/><br />




<a class="quo_submit fancybox" href="#show_div">Submit your Request Now</a>



<div style="display:none;" id="show_div" >
<p style="text-align:center !important;">Your Price Quotation Request has been <br/>sent.  A representative will contact you <br/> within 24 hours, either by email or phone.<br/> Thank you.
</p>
<input type="submit" name="ok" class="ok" value="OK" style=" background-color: #00B050;
    color: #FFFFFF;
    display: block;
    margin: 0 auto;
    padding: 8px;"/>
</div>

</form>

   
    
</div>

    

</div>




      <div class="side-bar">
        <?php $this->load->view("includes/client/sidebar-1.php"); ?>
        <div class="security" align="center">
          <?php if(COUNTRY == 'UK' ){ ?>
          <!-- START SCANALERT CODE FOR LDG.CO.UK --> 
          <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
          <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
          <?php } elseif( COUNTRY == 'USA') { ?>
          <!-- START SCANALERT CODE FOR LDG.COM --> 
          <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
          <!-- END SCANALERT CODE LDG.COM  -->
          <?php } ?>
        </div>
        <?php $this->load->view("includes/client/sidebar-2.php"); ?>
      </div>
      
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer-container">
    <div class="footer">
      <?php 
      $this->load->view('includes/client/footer.php');
      $this->load->view('includes/client/seal-top.php');
      $this->load->view('includes/client/footer-menu.php');
    ?>
    </div>
  </div>
</div>
</body>
</html>