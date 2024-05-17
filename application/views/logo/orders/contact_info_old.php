<?php 
    if(isset($logo_package) && $logo_package !=''):
        $_SESSION['logo_package']   = $logo_package;
        $_SESSION['logo_price']     = $logo_price;
		$_SESSION['p_index']     = $p_index;
		 
    endif;
	//$_SESSION['logo_price']     = $p_index; 
	/*echo"<pre>"; print_r($_SESSION);
	die;*/
?>
<?php $this->load->view('includes/header-common-order'); ?>
<style>
label.error{
	padding-left:10px !important;
	color:#F00 !important;
	font-weight:bold !important;
	}
	.presentbks{
	border:1px solid green !important;
	}
</style>

<script type="text/javascript">
$(function(){
var ss=$.browser;
		console.log(ss);
		if(ss.safari){
			console.log("safari");
			}
			else{

var mq = window.matchMedia( "(min-width: 768px)" );
if (mq.matches) {
	   jQuery(document).ready(function($) {
if (window.history && window.history.pushState) {
	
    window.history.pushState("forward", null, "orders/index/<?php echo $_SESSION['p_index']?>");
    $(window).on('popstate', function() {
		
	  window.location="<?php echo base_url()?>packages";
	  return false;
    });

  }
});
	
	// window width is at least 768px
}
else {
	// window width is less than 500px
}

}
});

</script>
        <section id="order-process" class="content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 ">
          <div class="clearfix order-stack">
            <h3 class="order-blue">
								You have chosen our 
								<br />
								<?php echo $_SESSION['logo_package']." ".CURRENCY.$_SESSION['logo_price']; ?>
                               
								<?php  if(isset($_SESSION['poptions_pack'.$p_index])){echo '<br />'.$_SESSION['poptions_pack'.$p_index]." ".CURRENCY.$_SESSION['poptions_price'.$p_index];} ?>
                                
                                <br />Total: 
								<?php  if(isset($_SESSION['poptions_pack'.$p_index])){echo CURRENCY.($_SESSION['poptions_price'.$p_index]+$_SESSION['logo_price']);}
						else{
							echo CURRENCY.$_SESSION['logo_price'];
							}
							?>
							</h3>
          </div>
          <form action="orders/logobrief" method="post" name="order_detail" id="order_detail">
            <input type="hidden" name="pack_id" value="7"/>
            <div class="clearfix order-stack modifi">
              <h4 class="gray-bg-title">Contact Information</h4>
              <ul class="form2">
                <label> Name:<span class="required theme-red">*</span></label>
                
                <li>
                  <input type="text" name="fname" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];}?>" id="focusing"  class="required modifiedinput fname presentbks" placeholder="First Name" />
                  <input type="text" name="lname" value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];}?>"   class="required modifiedinput l_name <?php if(isset($_SESSION['lname'])){echo 'valid';}?>"  placeholder="Last Name"   /><br/>
                 
                </li>
                <label>Company:<span class="required theme-red">*</span></label>
                <li>
                  <input type="text" name="company_name" value="<?php if(isset($_SESSION['company_name'])){echo $_SESSION['company_name'];}?>"   class="required modifiedcom company_name <?php if(isset($_SESSION['company_name'])){echo 'valid';}?>"  placeholder="Name Of Company	" />
                </li>
                <label>Phone:</label>
                <li> 
                  
                  
                  <input id="mobile-number" type="tel" class="modifiedphone phone_no <?php if(isset($_SESSION['phone_no'])){echo 'valid';}?>" name="phone_no" value="<?php if(isset($_SESSION['phone_no'])){echo $_SESSION['phone_no'];}?>">
                  <p>Phone numbers are used only to contact you about updates on your order.</p>
                </li>
                <label>Email:<span class="required theme-red">*</span></label>
                <li>
                  <input type="text" name="email_id" value="<?php if(isset($_SESSION['email_id'])){echo $_SESSION['email_id'];}?>"  placeholder="business@business.com"  class="email_id required modifiedcom <?php if(isset($_SESSION['email_id'])){echo 'valid';}?>" />
                  
                  <p>We’ll send your Order Confirmation here.</p>
                </li>
                <p class="note">NOTE: Fields with an asterisk (<span class="theme-red"> * </span>) are required.</p>
              </ul>
            </div>
            <div class="normal-desc-box text-center"> <a class="green-btn order-back-btn" href="<?php echo base_url()?>packages"> <span data-hover="Back">Back</span> </a> 
              <!--<a class="green-btn order-submit-btn" href="javascript:void(0)">
            					<span data-hover="Continue">Continue</span>
            				</a>-->
              <button class="green-btn order-submit-btn" type="submit"> <span data-hover="Continue">Continue</span> </button>
            </div>
          </form>
        </div>
        <div class=" col-xs-12 col-md-3 col-sm-3">
        
          <?php include('floated.php');?>
          
        </div>
      </div>
    </div>
  </section>
        
     
        <link rel="stylesheet" href="<?php echo base_url()?>build/css/intlTelInput.css" type="text/css">
            <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>

    <script src="<?php echo base_url()?>build/js/intlTelInput.js" type="text/javascript"></script>
    <script>
      $("#mobile-number").intlTelInput({
      
        //utilsScript: "<?php echo base_url()?>lib/libphonenumber/build/utils.js"
      });
    </script>   
    
    
        <script type="text/javascript">
            $('#order_detail').validate(
            {
                rules:
                {
                    fname:{ // fname is the name of input field not an ID 
                		required: true,
                		minlength: 2,
                		maxlength: 25
            		},
                    lname:{
                		required: true,
                		minlength: 2,
                		maxlength: 25
            		},
                    company_name: "required",
                    email_id: {
        				required: true,
        				email: true
        			},
                    cmp_logo_name:"required",
                    business_detail:"required"
                    
                },
                messages:
                {
                    fname:{
        				required: "Enter first name",
        				minlength: "",
        				maxlength: ""
        			},
                    lname:{
        				required: "Enter last name",
        				minlength: "",
        				maxlength: ""
        			},
                    company_name: "Enter Company name",
                    email_id: "Pls give us a valid email address.",
                    cmp_logo_name:"",
                    business_detail:""
                                      
                }
                
            });
			
		$(function(){
		
			
			$('.phone_no, .company_name,.email_id,.l_name').focus(function(){
				$(this).addClass('presentjj');
				});
			
		$('input, textarea').focus(function() {
		$(this).addClass('presentbks');
		$(this).removeClass('presentjj');
		$(this).removeClass('valid');
	});
	$('input, textarea').blur(function() {
		$(this).removeClass('presentbks');
		});

			

			})		
        </script>
        <!-- /Form Validation -->
      <script>
	

    $(function(){
		
		$('ul.form2 li input').on('input propertychange change', function(){
			var name=$(this).attr('name');
			var value=$(this).val();
			 $.post("<?php echo base_url()?>orders/autosave.php",name+'='+value);
			});
		})
    </script>
       
<?php 
//echo "<pre>"; print_r($_SESSION);
$this->load->view('includes/footer-common'); ?>
<?php
//echo"<pre>";
//echo $_SERVER['HTTP_USER_AGENT'];
//$browser = get_browser();
//print_r($_SERVER);
?>