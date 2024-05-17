<?php 
     // echo"<pre>"; print_r($_SESSION);
    if(isset($logo_package) && $logo_package !=''):
        $_SESSION['logo_package']   = $logo_package;
        $_SESSION['logo_price']     = $logo_price;
        $_SESSION['logo_price_cut']     = $logo_price_cut;
    $_SESSION['p_index'] = $p_index;
     
    endif;
   if($p_index == 11 || $p_index == 16){ $_SESSION['web_package'] = BUDGET_WP; $_SESSION['web_price'] = 299;}
      else if($p_index == 12 || $p_index == 15 || $p_index == 17){$_SESSION['web_package'] = GOLD_WP;$_SESSION['web_price'] = 499;}
        else if($p_index == 13 || $p_index == 14 || $p_index == 18){$_SESSION['web_package'] = ELITE_WP;$_SESSION['web_price'] = 899;}
         // else{$_SESSION['web_package'] = ''; $_SESSION['web_price'] = '';}
  //$_SESSION['logo_price']     = $p_index; 
    // die;
?>
<?php $this->load->view('includes/header-common-order_sunil'); ?>
<style>
    label.error{
        padding-left:10px !important;
        color:#F00 !important;
        font-weight:bold !important;
    }
    .presentbks{
        border:1px solid green !important;
    }
    .confix
    {margin-left:38px}

    @media(max-width: 415px)
    {.confix
    {margin-left:0px}
}
</style>

<script type="text/javascript">
   
// $(function () {
  
//         var ss = $.browser;
// console.log(ss);
//         if (ss.safari) {
//             console.log("safari");
//         }
//         else if (ss.chrome) {
//             console.log("crome");

//         }
//         else {

//             var mq = window.matchMedia("(min-width: 768px)");
//             if (mq.matches) {
//                 jQuery(document).ready(function ($) {
//                     if (window.history && window.history.pushState) {

//                         window.history.pushState("forward", null, "orders/index/4");
//                         $(window).on('popstate', function () {

//                             window.location = "<?php echo base_url()?>packages";

                      

//                         });

//                     }
//                 });

//                 // window width is at least 768px
//             }
//             else {
//                 // window width is less than 500px
//             }

//         }
//     });

</script>
<section id="order-process" class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 ">
                
                <form action="orders/logobrief?uk=logobrief" method="post" name="order_detail" id="order_detail">
                    <input type="hidden" name="pack_id" value="7"/>
                    
                    <div class="clearfix order-stack logobrief modifi">
                        <h4 class="gray-bg-title confix" ><span style="font-weight:normal !important;font-size:16px !important;" >Contact Information</span></h4>
                       
                        <ul class="form1  label-big">
                               

                            <li><label> Name:<span class="required theme-red">*</span></label>
                                <input type="text" name="fname" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];}?>" id="focusing"  class="required modifiedinput fname presentbks" placeholder="First name" / style="width:195px !important;">
                                <input type="text" name="lname" value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];}?>"   class="required modifiedinput l_name <?php if(isset($_SESSION['lname'])){echo 'valid';}?>"  placeholder="Last name" style="width:195px !important;"   /><br/>

                            </li>
                            
                              <li><label>Company:<span class="required theme-red">*</span></label>
                                <input type="text" name="company_name" value="<?php if(isset($_SESSION['company_name'])){echo $_SESSION['company_name'];}?>"   class="required modifiedcom company_name <?php if(isset($_SESSION['company_name'])){echo 'valid';}?>"  placeholder="Name of company  " />
                            </li>

                            <li > 
 <label>Phone:</label>

                                <input id="mobile-number" type="tel" class="modifiedphone phone_no <?php if(isset($_SESSION['phone_no'])){echo 'valid';}?>" name="phone_no" value="<?php if(isset($_SESSION['phone_no'])){echo $_SESSION['phone_no'];}?>">
                                  <a data-toggle="tooltip" title="Phone numbers are used only to contact you about updates on your order."  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                
                            </li>

<li> <label>Email:<span class="required theme-red">*</span></label>
                                <input type="text" name="email_id" value="<?php if(isset($_SESSION['email_id'])){echo $_SESSION['email_id'];}?>"  placeholder="business@business.com"  class="email_id required modifiedcom <?php if(isset($_SESSION['email_id'])){echo 'valid';}?>" />
 <a data-toggle="tooltip" title=" We’ll send your order confirmation here."  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                              
                            </li>

                                 <li>
                                 <label>&nbsp;</label>
                                 <p class="note "  style="display:inline;"> Fields with an asterisk (<span class="theme-red"> * </span>) are required.</p>
                                 </li>
                            
                        
                            
                            
                                        
                                        </ul>
                                    </div>
                    <div class="normal-desc-box1 text-right1 ">
<div style="float:left;">
                                          <a href="<?php echo base_url()?>packages" style="color:#666666;font-size:18px;"><i class="fa fa-chevron-left" aria-hidden="true"></i><span style="padding-left:17px;">Back </span></a></div>
                                            <!-- <a class="green-btn order-back-btn" href="<?php echo base_url()?>orders/index/4">
                                                <span data-hover="Back">Back</span>
                                            </a> -->


                                            <!--<a class="green-btn order-submit-btn" href="javascript:void(0)">
                                                                <span data-hover="Continue">Continue</span>
                                                        </a>-->
                                           <div style="float:right;padding-right:86px;">
                                            <button class="green-btn order-submit-btn " type="submit">
                                                <span data-hover="Continue">Continue <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                            </button>
                                            </div>
                                        </div>
                </form>
            </div>
            <div class=" col-xs-12 col-md-3 col-sm-3">
 <?php include('floated_sunil.php');?>




            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="<?php echo base_url()?>build/css/intlTelInput.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>

<script src="<?php echo base_url()?>build/js/intlTelInput.js" type="text/javascript"></script>
<script>
    $("#mobile-number").intlTelInput({
        utilsScript: "lib/libphonenumber/build/utils.js"
    });
</script>   


<script type="text/javascript">
    $('#order_detail').validate(
            {
                rules:
                        {
                            fname: {// fname is the name of input field not an ID 
                                required: true,
                                minlength: 2,
                                maxlength: 25
                            },
                            lname: {
                                required: true,
                                minlength: 2,
                                maxlength: 25
                            },
                            company_name: "required",
                            email_id: {
                                required: true,
                                email: true
                            },
                            cmp_logo_name: "required",
                            business_detail: "required"

                        },
                messages:
                        {
                            fname: {
                                required: "Enter first name",
                                minlength: "",
                                maxlength: ""
                            },
                            lname: {
                                required: "Enter last name",
                                minlength: "",
                                maxlength: ""
                            },
                            company_name: "Enter Company name",
                            email_id: "Pls give us a valid email address.",
                            cmp_logo_name: "",
                            business_detail: ""

                        }

            });

    $(function () {


        $('.phone_no, .company_name,.email_id,.l_name').focus(function () {
            $(this).addClass('presentjj');
        });

        $('input, textarea').focus(function () {

            $(this).addClass('presentbks');
            $(this).removeClass('presentjj');
            $(this).removeClass('valid');
        });
        $('input, textarea').blur(function () {
            $(this).removeClass('presentbks');
        });



    })
</script>
<!-- /Form Validation -->
<script>


    $(function () {

        $('ul.form1 li input').on('input propertychange change', function () {
            var name = $(this).attr('name');
            var value = $(this).val();
            $.post("<?php echo base_url()?>orders/autosave.php", name + '=' + value);
        });
    })
</script>
<br/>
<br/>

<?php $this->load->view('includes/footer-common'); ?>       
<style type="text/css">

.svgbig{
    enable-background:new 0 0 469.184 469.185;position: relative;
    top: 1px;
    display: inline-block;
    line-height: 1;padding-left: 8px !important;
    padding-top: 10px !important;    height: 32px;
    width: 36px;
    -webkit-font-smoothing: antialiased;}


    .svgsmall
    {    

    margin-left: 3px !important;
    margin-top: 2px !important;
    height: 16px;
    width: 15px;enable-background:new 0 0 469.184 469.185;position: relative;
    top: 1px;
    display: inline-block;
    line-height: 1;-webkit-font-smoothing: antialiased;
   }

   .smpl-step > .smpl-step-step .smpl-step-num
   {}

   

span.round-tabs.five.activesmall {
   height: 25px;
   width: 25px;
   top: 53px;
}

.text-center.smpl-step-num > a {
    font-weight: 400;
    font-size: 15px;
}
.fontsz
   { font-size: 17px !important;
    margin-left:15px;}

   .smpl-step > .smpl-step-step .smpl-step-num
   {margin-left: 0px;}

   @media only screen and (max-width: 695px){
.text-center.smpl-step-num > a {
    color: #999999;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: normal;
    font-size: 12px !important;
}}

@media (max-width: 425px){
.smpl-step > .smpl-step-step .smpl-step-num {
    width: 113px;
    height: 68px;
}

span.round-tabs{top:81px !important;}

span.round-tabs.five.activesmall {
    
    top: 98px !important;
}
}



</style>
<style type="text/css">
    .uploadify-button {
        background-color: transparent;
        border: none;
        padding: 0;
        background: none;
        border: 1px solid grey;
        border-radius: 5px;
        color:grey;
     
    }
    .uploadify:hover .uploadify-button {
        background-color: transparent;
        background: none;
        border: 1px solid #7DB701;
    }

</style>
             
             <style>
.tooltip {
    
    font-size: 15px;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-weight: 400;
   
 
}

.tooltip-inner {
    max-width: 400px;
    /* If max-width does not work, try using width instead */
}
    .inner-filelist {
        width: 207px;
        float: left;
        height: 200px;
        position: relative;
        float: left;
        overflow: hidden !important;
        text-overflow: ellipsis;

        white-space: nowrap;
    }
    label.error{
        padding-left:10px !important;
        color:#F00 !important;
        font-weight:bold !important;
        float:right;
        padding-right:25px !important;
    }

    .file-choose img
    {margin:5px;
    }

    .thremove {
        position: absolute;
        right: 40px;
       /* display:none;*/
        cursor:pointer;
    }
    .fileList
    {
        position:relative ;   }

    .inner-filelist
    { width:210px; position:relative; clear: both !important; margin-bottom: 10px;padding-right: 66px;height: auto !important; }

    #header-top
    {border-bottom:1px solid #e8e8e8 !important;}

    .text-center.smpl-step-num > a {
        font-weight: 400;
    }
    .gray-bg-title {
    background: none repeat scroll 0 0 #f8f8f8 !important;
}

.modifi input[type="password"], input[type="text"], input[type="tel"], textarea
{font-size: 15px !important;}

::-webkit-input-placeholder {
  font-size: 14px !important;
}

 :-moz-placeholder { /* Firefox 18- */
    font-size: 14px !important;  
}

 ::-moz-placeholder {  /* Firefox 19+ */
  font-size: 14px !important; 
}

:-ms-input-placeholder {  
  font-size: 14px !important; 
}

.text-right
{text-align: right;padding-right:79px;}

i.fa.fa-question-circle-o
{color:grey !important;
font-size: 16px;
padding-left:2px;}

.order-details
{border:1px solid #e8e8e8 ;
text-align: left !important;}

#order-process h3
{font-weight: 400 !important;}

.main_price_green
{color:#7DB53E;}
#order-process h3 {
   
    margin: 0 0 4px !important;
}


    .order-list ul li {
    border-bottom: 1px solid #e8e8e8;

}
/*#order-process .form1 input[type="password"], #order-process .form1 input[type="text"], textarea ,.phone_no {
    width: 395px !important;
}*/
</style>
<script type="text/javascript">
    $('[data-toggle="tooltip"]').tooltip();
</script>
<style type="text/css">
     @media screen and (-webkit-min-device-pixel-ratio:0) { 
    /* Safari and Chrome */
   

    /* Safari only override */
    ::i-block-chrome,.svgbig{
   
       height: 32px;
    width: 36px;
    -webkit-font-smoothing: antialiased;
padding-top: 5px !important;
padding-left:2px !important;
    }

    } 
  </style>
</body>


</html>