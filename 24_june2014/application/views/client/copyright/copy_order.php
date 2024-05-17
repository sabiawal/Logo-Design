<?php
//echo "<pre>";
//print_r($_SESSION);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.hovercard.min.js"></script>

<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->

<script language="javascript" type="text/javascript">
function submitPackage(Pack,Price)
{
    document.getElementById('copyright_package').value=Pack;
    document.getElementById('copyright_price').value=Price;
    document.forms.packageFrm.submit();
}


$(document).ready(function()
{
    var error = "";
    $('.fields').bind('keyup blur', function()
    {
        var tagID = $(this).attr('id');
        var tagVal= $(this).val();
        
        if((tagID == "fullName" || tagID == "orgName"))
        {
            
            if($('#fullName').val() != "" || $('#orgName').val() != "")
            {                
                $('#fullName').removeClass('error');
                $('#orgName').removeClass('error');
            }
            else
            {
                $('#fullName').addClass('error');
                $('#orgName').addClass('error');
            }
        }
        else if(tagID == "citizenship" || tagID == "domicile")
        {
            if($('#citizenship').val() != "" || $('#domicile').val() != "")
            {                
                $('#citizenship').removeClass('error');
                $('#domicile').removeClass('error');
            }
            else
            {
                $('#citizenship').addClass('error');
                $('#domicile').addClass('error');
            }                        
        }
        else if(tagID == "emailAddress")
        {            
            var emailAddress = $('#emailAddress').val();            
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;            
            if(reg.test(emailAddress) == true) 
            {
                $(this).removeClass('error');
            }
            else
            {
                $(this).addClass('error');
            }                   
        }
        
        else if(tagID == "titleOfWork")
        {
            if(tagVal != "")
            {
            $(this).removeClass('error'); 
            }
            else
            {
                $(this).addClass('error');
            }                 
        }
       
        else
        {
        $(this).removeClass('error');
        }
        
   
        
    });
    
     // Autosaving field data
    $('.fields').focusout(function()
    { 
        var name  = this.name;
        var value = this.value;
        //alert(name);
        $.post("<?php echo site_url('autosave') ?>",name+'='+value);
    });
    
    $('#setFile').change(function()
    {        
        var ext = $(this).val().split('.').pop().toLowerCase();
        
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
        {            
            error+='Invalid Email Format !!!\n';
            $(this).addClass('error');
        }
        else        
        $(this).removeClass('error');
    });
    
    $("#submit").click(function()
    {   
        // Getting values of input by their ID
        var fullName    = $('#fullName').val();
        var orgName     = $('#orgName').val();
        
        var citizenship = $('#citizenship').val();        
        var domicile    = $('#domicile').val();
        
        var emailAddress= $('#emailAddress').val();
        var titleOfWork= $('#titleOfWork').val(); 
        var setFile= $('#setFile').val();               
        
        
        // Checking Full Name or Organization Name Validation 
        if(fullName == '' && orgName == '')
        {            
            error+='Please enter full name or orgnization name\n';
            $('#fullName').addClass('error');
            $('#orgName').addClass('error');            
        }
        
        
        // Checking Citizenship or Domicile Validation 
        if(citizenship =='' && domicile == '')
        {
            error+='Please enter citizenship info or domicile info\n';
            $('#citizenship').addClass('error');
            $('#domicile').addClass('error');                          
        }
        
        
        // Checking Email Validation
        if(emailAddress == '')
        {
          error+='Email Address is Required !!!\n';
          $('#emailAddress').addClass('error');
        }
        else
        {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;            
            if(reg.test(emailAddress) == false) 
            {
            error+='Invalid Email Format !!!\n';
            $('#emailAddress').addClass('error');
            }
        }
        
        // Checking titleOfWork Validation
        if(titleOfWork == '')
        {
          error+='Please Enter Title of Work\n';
          $('#titleOfWork').addClass('error');
        }
        
        // Checking setFile Validation
        if(setFile == '')
        {
          error+='Please Select Upload File';
          $('#setFile').addClass('error');
        }
        else
        {
            var ext = $('#setFile').val().split('.').pop().toLowerCase();
            if($.inArray(ext, ['gif','png','jpg','jpeg','doc','docx','psd','ai']) == -1) 
            {
                error+='Unsupported File Format';
                $('#setFile').addClass('error');
            }
        }
                
        if(error != "")
        {
            //alert(error);
            error = "";
            $('.error:first').focus();
            return false;
        }        
    })  
    
    //Radio Button Checked value on click 
    
    $('.aboutYourWork').click(function()
    {
        $('.aboutYourWork').prev().attr({'checked':false});
        $(this).prev().attr({'checked':true});
    }); 
    
    
    
    //tooltip script start here    

    var domicile    = '<p>A domicile is the place where an individual has his/her permanent home.</p>';
    var titleofwork = '<p>This is the name of the logo that you want to be copyrighted.</p>';
    var file        = '<p>Browse and select the file of your logo.</p>';
    
    $(".hover_domicile").hovercard({
    detailsHTML: domicile,
    width: 350,        
    openOnTop:true
    });
    
    $(".hover_title").hovercard({
    detailsHTML: titleofwork,
    width: 350,
    openOnTop:true
    });
    
    $(".hover_file").hovercard({
    detailsHTML: file,
    width: 350,
    openOnTop:true
    });     
});
</script>
</head>
<body>
<div class="wrapper">
    <?php include_once("includes/client/header.php"); ?>
    <?php include_once("includes/client/top_container_copyright.php"); ?>
    
    <div class="main-container">
        <div class="main col2-right-layout">
            <div class="col-main copyright">
                <div class="order">
                    <h1>Check Out </h1><br />
                    <h2>Congratulations on your first step to full protection!<br /><span>You have chosen the <span><?= @$_SESSION['copyright_package']; ?> Package</span></span></h2><br />
                    <p>It only takes <strong>60 seconds</strong> to place your order online. Please fill out the brief form below to <strong>start using your copyright symbol today.</strong> Fields marked <span class="text-red">*</span> are required.</p><br />
                    
                    <h1>About You</h1><br />
                    <div class="order-form">
                        <form action="<?php if(COUNTRY == "UK"){echo site_url('client_panel/copy_paybankmid');} else{echo site_url('client_panel/copy_jetpaymid');} ?>" method="post" id="copyright_order" enctype="multipart/form-data" >
                            <p><label><span class="text-red">*</span>Full Name</label><input type="text" class="fields" name="fullName" id="fullName" value="<?= @$_SESSION['fullName']; ?>" /></p>
                            <p><label>OR</label></p>
                            <p><label><span class="text-red">*</span>Organization Name</label><input type="text" class="fields" name="orgName" id='orgName' value="<?= @$_SESSION['orgName']; ?>" /></p>
                            <p><label><span class="text-red">*</span>Mailing Address</label></p>
                            <p><label>Street</label><input type="text" class="fields street" name="street" value="<?= @$_SESSION['street']; ?>" /></p>
                            <p><label>City</label><input type="text" class="fields" name="city" value="<?= @$_SESSION['city']; ?>"  /><label class="state">State</label><input type="text" class="fields" name="state" value="<?= @$_SESSION['state']; ?>" /></p>
                            <p><label>Zip</label><input type="text" class="fields" name="zipOrPostCode" value="<?= @$_SESSION['zipOrPostCode']; ?>" /></p>
                            <p><label>Country</label><input type="text" class="fields" name="country" value="<?= @$_SESSION['country']; ?>" /></p>
                            <p><label><span class="text-red">*</span>citizenship</label><input type="text" class="fields" name="citizenship" id="citizenship" value="<?= @$_SESSION['citizenship']; ?>" /></p>
                            <p><label>OR</label></p>
                            <p class="hv_card"><label><span class="hover_domicile"><span class="text-red" >*</span>domicile<span class="text-red"> ?</span></span></label><input type="text" class="fields" name="domicile" id="domicile" value="<?= @$_SESSION['domicile']; ?>" /><span style="clear: both; display: block;"></span></p>
                            <p><label><span class="text-red">*</span>Email Address</label><input type="text" class="fields" name="emailAddress" id="emailAddress" value="<?= @$_SESSION['emailAddress']; ?>" /></p>
                            
                            <h1>About Your Work</h1>
                            <h2>Select the category that best describes the work being registered:</h2><br />
                            
                            <p class="radio">                            
                            <span><input type="radio" class="fields"  name="aboutYourWork" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Website and Online Works") echo 'checked="checked"'; ?> value="Website and Online Works" /><label for="aboutYourWork" class="aboutYourWork" >Website &amp; Online Works</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Photography, Photo Collections" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Photography, Photo Collections") echo 'checked="checked"'; ?> /><label for="aboutYourWork"  class="aboutYourWork" >Photography, Photo Collections</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Computer Programs, Software" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Computer Programs, Software") echo 'checked="checked"'; ?> /><label for="aboutYourWork"  class="aboutYourWork" >Computer Programs, Software</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Visual Arts, Logos, Artwork, Designs" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Visual Arts, Logos, Artwork, Designs") echo 'checked="checked"'; ?> /><label for="aboutYourWork" class="aboutYourWork" >Visual Arts, Logos, Artwork, Designs</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Written Work, Books, Poetry, Advertising Copy" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Written Work, Books, Poetry, Advertising Copy") echo 'checked="checked"'; ?> /><label for="aboutYourWork" class="aboutYourWork" >Written Work, Books, Poetry, Advertising Copy</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Performing Arts, Screenplays, Scripts, Audio Visual Works" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Performing Arts, Screenplays, Scripts, Audio Visual Works") echo 'checked="checked"'; ?> /><label for="aboutYourWork" class="aboutYourWork" >Performing Arts, Screenplays, Scripts, Audio Visual Works</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Sound Recordings" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Sound Recordings") echo 'checked="checked"'; ?> /><label for="aboutYourWork" class="aboutYourWork" >Sound Recordings</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Technical Works" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Technical Works") echo 'checked="checked"'; ?> /><label for="aboutYourWork" class="aboutYourWork" >Technical Works</label></span>
                            <span><input type="radio" class="fields" name="aboutYourWork" value="Musical Compositions (music and/or lyrics - without sound recording)" <?php if(isset($_SESSION['aboutYourWork']) && $_SESSION['aboutYourWork'] == "Musical Compositions (music and/or lyrics - without sound recording)") echo 'checked="checked"'; ?> /><label for="aboutYourWork" class="aboutYourWork">Musical Compositions (music and/or lyrics -
      <strong>without</strong> sound recording) </label></span>
                            </p>
                            <br />
                            <p><label>Nature of work:</label><textarea cols="34" rows="6" name="natureOfWork"><?= @$_SESSION['natureOfWork']; ?></textarea></p>
                            <p class="hv_card"><label><span class="hover_title"><span class="text-red">*</span>Title of work:<span class="text-red"> ?</span></span></label><input type="text" class="fields" name="titleOfWork" id="titleOfWork" value="<?= @$_SESSION['titleOfWork']; ?>" /><span style="clear: both; display: block;"></span></p>
                            <p class="hv_card"><label><span class="hover_file"> <span class="text-red">*</span>Upload Your File:<span class="text-red"> ?</span></span></label><input type="file" class="fields file" name="setFile" id="setFile" /><span style="clear: both; display: block;"></span></p>
                            <br />
                            <p style="text-align: center;"><strong>Note:</strong> If you are registering a copyright for a logo we designed for you,
                                                              this step is not required. </p>
                            
                            <p><label>If you have any special requirements such as anonymity, or further information you would like to provide for your copyright registration, please state them in the box below.</label><textarea cols="34" rows="10" name="specialReq"><?= @$_SESSION['specialReq']; ?></textarea></p> 
                            <input type="hidden" name="amount" value="<?= $_SESSION['copyright_price']; ?>" />
                            <input type="hidden" name="authentication_code" value="<?php echo md5(rand()); ?>" />
                            <p class="submit"><input type="submit" value="Continue" name="submit" id="submit"/></p>        
                            
                        </form>
                    </div>
                </div>
            
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