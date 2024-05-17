
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Client Panel ::</title>
<base href="<?php echo base_url()?>clientpanel/"></base>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<!--<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="<?php echo base_url()?>assets/uploadify_old/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
<link href="<?php echo base_url()?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/layout.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/style.css" />

<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>-->
<!--jquery slider-->
<link rel="stylesheet" href='<?php echo base_url()?>assets/css/newmodify.css' type="text/css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />


<script type="text/javascript" src="<?php echo base_url()?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/uploadify_old/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
<link href="<?php echo base_url()?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href='<?php echo base_url()?>assets/css/bootstrap.min.css' type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/newclientpanel.css">
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
    $('.image-upload label p').remove();
    $('.image').val('');
     $('.fancybox-close').trigger('click');
  //$('#submittt').submit();
  });
  
  $('#attachment_image').click(function(){
    $('#file-input').trigger('click');
  });
$('#file-input').change(function(){
   $('.image-upload label p').remove();
     var files=$("#file-input")[0].files;
       for (i = 0; i < files.length; i++){
    console.log(files[i].name);
       $('.image-upload label img').after('<p>'+files[i].name+'</p>');
  }

 
    })

  
  })
</script>

<style type="text/css">
    .col2-right-layout .col-main {
    float: left;
    margin: 0 0 20px 0;
    width: 705px;
}</style>
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
 /* padding:10px;
  background:#00b050;
  border:1px solid #239123;
  color:#fff;
  font-weight:bold !important;
  margin:10px 0;
  width:210px;
  cursor:pointer !important;
  clear:both;
  display:block;*/
  }

.quo_submit:hover
{/*background-color:#0f8946;
text-decoration:none;*/
}
.fancybox-close, .fancybox-item{
  display:none;
  }
</style>
  <style>
 .currentTextHolder {
  font-size: 24px;
} 
 .pp_nav {
  display: table !important;
  margin: 0 auto !important;
} 
</style>


<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>

  <link rel="stylesheet" href='<?php echo base_url()?>assets/css_client/slideshow.css' type="text/css" />



<?php include 'menu.php' ; ?>




      <div class="container border-new">
    <div class="row">
    
    
    
 


<div class="col-main col-md-9 col-sm-8   ">
<div class="price-quotation  ">

<h2>Contact our technical team</h2>
<p>Report any encountered website errors to our technical team</p>
<!-- <form method="post" id="data" action="" enctype="multipart/form-data">
<label>Subject</label><input type="text" class="subject" name="subject" value=""/ required>



<br /><br />



<textarea class="client_message form-control" name="textarea" placeholder="Message"></textarea>


<a class="fancybox btn btn-success mbottom submitstyle quo_submit" href="#show_div" >Submit your report now</a>

<div style="display:none;" id="show_div" >
<p style="text-align:center !important;">Your report has been sent.  <br/> A representative will contact you <br/>within 24 hours. Thank you.
</p>


    <input type="submit" name="ok" class="ok btn btn-success" value="OK"  style="display: block;
    margin: 0 auto;" / >
</div>
</form>
 -->
 <form method="post" id="data" action="" enctype="multipart/form-data">
<label>Subject</label><input type="text" class="subject" name="subject" value=""/ required>



<br /><br />



<textarea class="client_message form-control" name="textarea" placeholder="Message"></textarea>
<br />
<style type="text/css">
  #file-input
{
    display: none;
}
.image-upload p {
  margin: 0;
  padding: 2px;
}
</style>
<div class="image-upload">
    <label for="file-input" style="cursor: pointer;">
        <img id="attachment_image" src="<?php echo base_url()?>assets/uploadify_old/attachment_image.gif"/>
    </label>

    <input id="file-input" type="file"name="image[]" multiple="miltiple"/>
</div>
<a class="fancybox btn btn-success mbottom submitstyle quo_submit" href="#show_div" >Submit your report now</a>

<div style="display:none;" id="show_div" >
<p style="text-align:center !important;">Your report has been sent.  <br/> A representative will contact you <br/>within 24 hours. Thank you.
</p>


    <input type="reset" name="ok" class="ok btn btn-success" value="OK"  style="display: block; margin: 0 auto;" / >
</div>
</form>

   
    
</div>

    

</div>




      <div class="side-bar col-md-3 col-sm-4 ">
        <div class="best-value">
  <div class="best-value-text">
    <div align="center"><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" target="_blank"><img src="<?php echo base_url()?>assets/images/webdesign/best-value.jpg" alt="Best Value" class="img-responsive" title="Best Value"></a></div>
  </div>
</div>

<div class="awards">
      
      <div class="awards-text">
        <h1>Awards</h1>
        <h2 class="text-red text-bold">UK Design Awards</h2>
        <p><span class="text-red">The UK Design Awards was founded in the year 2000 rewarding <span class="text-bold">excellence in design</span> and business.</span></p>
        <h2 class="text-blue text-bold">Summit International Awards</h2>
        <p><span class="text-blue">Throughout its 13 year history, the Summit organization has established itself as one of the premier arbiters of <span class="text-bold"> communication excellence.</span></span></p>
        <h2 class="text-dark-red">Red Dot Awards</h2>
        <p><span class="text-dark-red">This award ranks among the largest and <span class="text-bold">most renowned design competitions</span> in the world. The red dot design award attracted almost 6,000 submissions from 52 countries in 2006 alone. Since then, the award body has grown x10 in submissions.</span><!-- <span class="text-bold"><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/rdaward.php">Read more.</a></span> --> </p>
      </div>
      
    </div>
       <!--  <div class="security" align="center">
                  
          <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
         
                  </div>
        <div class="guarantee" align="center">
<img src="<?php //echo base_url()?>assets/images/webdesign/guarantee.jpg" alt="Guarantee" title="Guarantee">

</div>
 -->
<div class="sidebar-support" align="center">
<span class="images">
<img src="<?php echo base_url()?>assets/images/webdesign/lst-UK.gif " alt="UK Live Support" title="UK Live Support">
</span>
<p>0800 279 6215</p>

</div>
    
          </div>
      
      <div class="clear"></div>
    </div>
  </div>
  


</div>
<?php include 'footer.php'; ?>
</body>
</html>