<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="<?php echo base_url();?>lib/jquery.1.3.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<!--<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>js/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="<?= base_url(); ?>js/fancybox/jquery.fancybox-1.2.6.pack.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$("a.zoom").fancybox();

		$("a.zoom1").fancybox({
			'overlayOpacity'	:	0.7,
			'overlayColor'		:	'#FFF'
		});

		$("a.zoom2").fancybox({
			'zoomSpeedIn'		:	500,
			'zoomSpeedOut'		:	500
		});
	});
</script>

<!--<script type="text/javascript" src="<?php //echo base_url();?>web/uploadify/jquery-1.4.2.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>uploadify/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<link href="<?php echo base_url();?>uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
  $('#attachment').uploadify({
    'uploader'  : '<?php echo base_url();?>uploadify/uploadify.swf',
    'script'    : '<?php echo base_url();?>uploadify/uploadify.php',
    'cancelImg' : '<?php echo base_url();?>uploadify/cancel.png',	
    'folder'    : '../admin_panel/upload/',
    'auto'      : true,
	'multi'       : true,	
	'hideButton': false,
	'buttonImg' :  "<?php echo base_url();?>images/client/attachment_image.gif",	
	'width'     : 132,
	'height'	: 25,
	'removeCompleted' : false,
	'onSelect' : function(file) {			
            $('#submit_revision').attr('disabled','disabled');			
    },
  	'onComplete'  : function(event, ID, fileObj, response, data) {
		
		if(response=='error')
		{
			$('#attachment'+ID).prepend('<div style="float:left;margin-right:10px;font-weight:bold;">Invalid file type!</div>');
			
		}
		else
		{
			//$('#attachment'+ID).prepend('<div style="float:left;margin-right:10px;"><img src="../uploads/Banners/thumbs/'+response+'"></div>');
			if($('#fileList').val()!='')	
				$('#fileList').val($('#fileList').val()+','+response);						
			else
				$('#fileList').val(response);
				
		}	
		$('#submit_revision').removeAttr('disabled');
    }
  });
  $('#attachment1').uploadify({
    'uploader'  : '<?php echo base_url();?>uploadify/uploadify.swf',
    'script'    : '<?php echo base_url();?>uploadify/uploadify.php',
    'cancelImg' : '<?php echo base_url();?>uploadify/cancel.png',	
    'folder'    : '../admin_panel/upload/',
    'auto'      : true,
	'multi'       : true,	
	'hideButton': false,
	'buttonImg' :  "<?php echo base_url();?>images/client/attachment_image.gif",	
	'width'     : 132,
	'height'	: 25,
	'removeCompleted' : false,
	'onSelect' : function(file) {			
            $('#submit_question').attr('disabled','disabled');			
    },
  	'onComplete'  : function(event, ID, fileObj, response, data) {
		
		if(response=='error')
		{
			$('#attachment1'+ID).prepend('<div style="float:left;margin-right:10px;font-weight:bold;">Invalid file type!</div>');
			
		}
		else
		{
			//$('#attachment'+ID).prepend('<div style="float:left;margin-right:10px;"><img src="../uploads/Banners/thumbs/'+response+'"></div>');
			if($('#fileList1').val()!='')	
				$('#fileList1').val($('#fileList1').val()+','+response);						
			else
				$('#fileList1').val(response);
				
		}	
		$('#submit_question').removeAttr('disabled');
    }
  });
});

function delete_image(name){
	var filelist = $('#fileList').val();
	var filenames = filelist.split(',');
	$('#fileList').val('');
	for(var i=0;i<filenames.length;i++)
	{
		var names = filenames[i].split('_');		
		if(names[1] != name)
		{	
			//returnText.replace(/^\s+|\s+/,"")	
			if($('#fileList').val()=='')
				$('#fileList').val(filenames[i]);
			else		
				$('#fileList').val($('#fileList').val()+','+filenames[i]);
		}		
	}
	// Forquestions
	var filelist = $('#fileList1').val();
	var filenames = filelist.split(',');
	$('#fileList1').val('');
	for(var i=0;i<filenames.length;i++)
	{
		var names = filenames[i].split('_');		
		if(names[1] != name)
		{	
			//returnText.replace(/^\s+|\s+/,"")	
			if($('#fileList1').val()=='')
				$('#fileList1').val(filenames[i]);
			else		
				$('#fileList1').val($('#fileList1').val()+','+filenames[i]);
		}		
	}
}
$(function(){
	$('#imp-submit').live('click',function(){		
		$('#feedback-containner').slideDown();
		$('#question-containner').slideUp();
		
	});
	$('#question-submit').live('click',function(){		
		$('#feedback-containner').slideUp();
		$('#question-containner').slideDown();
		
	});
});
$(document).ready(function(){
	$('.rate').click(function(){
		var rate=$(this).attr('id');
		$('#rate-error').html('');
		$('.raitng li').removeClass('rated');
		$('.raitng li').addClass("rate");
		for(var i=1;i<=rate;i++){
			$('#'+i).removeClass("rate");
			$('#'+i).addClass("rated");
		};
		$('#rated-value').val(rate);
	})
	$('#submit_revision').click(function(){				 
		var $this = $(this);
			var	rate=$('#rated-value').val();
			if(rate=='' && $this.attr("id")=="submit_revision"){			
				$('#rate-error').html('Select Rate for this design.');
				confirm('Please can you click on one of the stars to score your initial samples from 1 to 10. We appreciate your feedback. Design support team.');
				return false;
			}
	})
	
})

function checkForm(){
	
		var text=$('#msgcustomer').val(); 		
		var file=$('#fileList').val(); 
		if(text=='' && file==""){
			confirm('Please provide us feedback or have an attachment.');				
			return false;
		}
		else
		{
			return true;
		}
		
}
function checkForm1(){
	
		var text=$('#msgcustomer1').val(); 		
		var file=$('#fileList1').val(); 
		if(text=='' && file==""){
			confirm('Please provide us question or have an attachment.');				
			return false;
		}
		else
		{
			return true;
		}
		
}
</script>
<style>
.feedback-containner div{
	margin-top:10px;
}
#rate-error{
	color:red;
}
.raitng li p {
	font-weight: bold;
	margin-top: 18px;
	text-align: center;
}
.raitng li{
	background:url(../images/sav/rate.png) no-repeat;
	height:50px;
	width:50px;
	cursor:pointer;
}
li.rated{
	background:url(../images/sav/rated.png) no-repeat;
}

#submit_revision, #submit_revision_rate
{
	background: none repeat scroll 0 0 #339933;
    border: 0 none;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    padding: 10px;
}

#submit_question
{
	background: none repeat scroll 0 0 #339933;
    border: 0 none;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    padding: 10px;
}
</style>

<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
<div><noscript style="background: #900; color: #fff; display: block; padding: 20px 10px;">Please Enable your Browser Javascript Settings, Before Proceed!</noscript> </div>
</head>
<body>

<div class="wrapper">
  <?php include_once("includes/client/header.php"); ?>
  <?php include_once("includes/client/top_container.php"); ?>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main client-panel">
        <?php if($_SESSION['success_message']) { ?>
        <div style="color:#f00;border:1px solid #f00;background-color:#FF6;padding:10px;margin-bottom:20px;"><?php echo $_SESSION['success_message'];unset($_SESSION['success_message']) ?></div>
<?php } ?>
		<?php
		
if(!empty($samples))
{
		?>
        
                
        
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="10"><h1>Your logo samples </h1></td>
            </tr>
            <?php        
           foreach($samples as $row) {                
                ?>
            <tr>
              <td><?php
			  
                    if($row['file_one']!="")
					{					
						//if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
						if (@fopen(PATH_SAMPLE.'thumb_'.$row['file_one'], "r")) {	 											
                            $path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_one'], "latin1", "ISO-8859-1");
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_one'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}
                        else { 
							$path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_one'], "latin1", "ISO-8859-1");                    
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_one'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}                 
                   
                    }
                    
                    if($row['file_two']!="")
                    {                        
                       //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
						if (@fopen(PATH_SAMPLE.'thumb_'.$row['file_two'], "r")) {	 											
                            $path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_two'], "latin1", "ISO-8859-1"); 
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_two'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}
                        else { 
							$path_thumb = mb_convert_encoding(PATH_SAMPLE.$row['file_two'], "latin1", "ISO-8859-1");                         
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_two'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}      
                    }
                    
                    if($row['file_three']!="")
                    {                        
                        //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
						if (@fopen(PATH_SAMPLE.'thumb_'.$row['file_three'], "r")) {	 											
                            $path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_three'], "latin1","ISO-8859-1"); 
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_three'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}
                        else { 
							$path_thumb = mb_convert_encoding(PATH_SAMPLE.$row['file_three'], "latin1","ISO-8859-1");                         
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_three'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}      
                    }
                    
                    if($row['file_four']!="")
                    {                        
                        //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
						if (@fopen(PATH_SAMPLE.'thumb_'.$row['file_four'], "r")) {	 											
                            $path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_four'], "latin1","ISO-8859-1"); 
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_four'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}
                        else { 
							$path_thumb = mb_convert_encoding(PATH_SAMPLE.$row['file_four'], "latin1","ISO-8859-1");                         
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_four'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}      
                    }     
					if($row['file_14']!="")
                    {                        
                        //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
						if (@fopen(PATH_SAMPLE.'thumb_'.$row['file_14'], "r")) {	 											
                            $path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_14'], "latin1","ISO-8859-1"); 
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_14'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}
                        else { 
							$path_thumb = mb_convert_encoding(PATH_SAMPLE.$row['file_14'], "latin1","ISO-8859-1");                         
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_14'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}      
                    }     
					if($row['file_15']!="")
                    {                        
                        //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
						if (@fopen(PATH_SAMPLE.'thumb_'.$row['file_15'], "r")) {	 											
                            $path_thumb = mb_convert_encoding(PATH_SAMPLE.'thumb_'.$row['file_15'], "latin1","ISO-8859-1"); 
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_15'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}
                        else { 
							$path_thumb = mb_convert_encoding(PATH_SAMPLE.$row['file_15'], "latin1","ISO-8859-1");                         
							?>
                            <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE.$row['file_15'], "latin1","ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                            <?php
						}      
                    }                    
                    ?></td>
            </tr>
            <?php               
        }
		
        ?>
          </table>
        
        <?php
}
else
{
    ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><strong>Sorry no samples for your order till now.<br />
              <br />
              We will be in touch shortly if you have ordered this particular design service. <br />
              <br />
              Thank you !!!</strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>         
        </table>
        
        <?php
}

//if(!empty($samples) or isset($_GET['fortest'])) {	?>
	
        <span class="style1">Click to Enlarge any image</span>
        <br /><br /><br /><br />
        
        <img src="../images/submit.png" id="imp-submit" style="display:inline-block"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/submit_questions.png" id="question-submit" style="display:inline-block"/>
        <br />
        <div style="width:350px; color:#990000; font-size:12px; ">"Attach any documents if desired (optional)"</div><br />
        <div class="feedback-containner" style="margin:10px 0;display:none;" id="feedback-containner">
        <form method="post" name="form1" action="<?php echo base_url()?>client_panel/revision" class="sample" id="rate-designeer" onsubmit="return checkForm()">
            <?php if(!empty($samples)) {?>
            <div><b>Free Revision Requests!</b></div>
            <br />
            <div>Make your free revision requests now.  </div>
        	<div><h2>Please provide feedback so we can undergo high quality revisions for you!</h2></div>
            
            <input type="hidden" id="rated-value" name="rated-value" />	
             <div id="rate-section">   
                <b>Score your designs!</b>
                <br />
                <br />
                Please score your initial designs out of 10 (click to score):
                <br />
                <ul class="raitng">
                    <li class="rate" id="1"><p>1</p></li>
                    <li class="rate" id="2"><p>2</p></li>
                    <li class="rate" id="3"><p>3</p></li>
                    <li class="rate" id="4"><p>4</p></li>
                    <li class="rate" id="5"><p>5</p></li>
                    <li class="rate" id="6"><p>6</p></li>
                    <li class="rate" id="7"><p>7</p></li>
                    <li class="rate" id="8"><p>8</p></li>
                    <li class="rate" id="9"><p>9</p></li>
                    <li class="rate" id="10"><p>10</p></li>                    
                </ul>
                <span id="rate-error"></span>
                <div>Note:  With score 1 meaning the lowest score, and score 10 being the highest score. </div>
            </div><br />
            <?php } ?>
            
            <div><b>Provide us any feedback to help our designers revise your designs: </b> <br><textarea name="msgcustomer" rows="8" cols="60" id="msgcustomer"></textarea></div>            
            <div><input type="file" name="attachment" id="attachment" /></div>
            <input type="hidden" id="fileList" name="fileList" />
            <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly">
            <input type="hidden" name="redirect" value="<?php echo $this->uri->segment(2); ?>"> 
            <div><input type="submit" name="submit_revision" id="submit_revision" value="Submit Your Score and Revision Request Now!" /></div>          <!-- <div><input type="submit" name="submit_revision_rate" id="submit_revision_rate" value="submit free revision request" /></div>-->
                
        </form></div>
        <div class="feedback-containner" style="margin:10px 0;display:none;" id="question-containner">
        <form method="post" name="form1" action="<?php echo base_url()?>client_panel/questions" class="sample" id="send-question"  onsubmit="return checkForm1()">
                          	
            <div>If you have any questions regarding your designs, or about any other design services, <br />provide them in the box below and we'll get back to you immediately.<br><textarea name="msgcustomer1" rows="8" cols="60" id="msgcustomer1"></textarea></div>            
            <div><input type="file" name="attachment1" id="attachment1" /></div>
            <input type="hidden" id="fileList1" name="fileList1" />   
            <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly">         
            <div><input type="submit" name="submit_question" id="submit_question" value="Submit Your Questions Now!" /></div>        
        </form>
        </div>


<script language="javascript">
	document.title=":: Client Panel"
	document.bgColor="#99FFCC"
	function logo(a)
		{
			window.open(a, "myWindow", "status = 1,resizable = 1,scrollbars=yes, width=400" )
		}
</script>
        <div style="clear: left;"></div>
        <?php include_once('includes/client/copyright.php'); ?>
      </div>
      <div class="side-bar">
        <?php include_once("includes/client/sidebar-1.php"); ?>
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
        <?php include_once("includes/client/sidebar-2.php"); ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer-container">
    <div class="footer">
      <?php 
      include_once('includes/client/footer.php');
      include_once('includes/client/seal-top.php');
      include_once('includes/client/footer-menu.php');
    ?>
    </div>
  </div>
</div>
</body>
</html>