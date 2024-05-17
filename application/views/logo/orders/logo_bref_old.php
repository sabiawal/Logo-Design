<?php $this->load->view('includes/header-common-order'); ?>

<style>
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
  display:none;
  cursor:pointer;
}
		.fileList
		{
			position:relative ;   }
			
			.inner-filelist
			{ width:200px; float:left;position:relative; float:left;}
</style>
		<section id="order-process" class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9 ">
						<div class="clearfix order-stack">
							<h3 class="order-blue">
								You have chosen our 
								<br />
								<?php echo $_SESSION['logo_package']." ".CURRENCY.$_SESSION['logo_price']; ?>
                               
								<?php  if(isset($_SESSION['poptions_pack'.$_SESSION['p_index']])){echo '<br />'.$_SESSION['poptions_pack'.$_SESSION['p_index']]." ".CURRENCY.$_SESSION['poptions_price'.$_SESSION['p_index']];} ?>
                                
                                <br />Total: 
								<?php  if(isset($_SESSION['poptions_pack'.$_SESSION['p_index']])){echo CURRENCY.($_SESSION['poptions_price'.$_SESSION['p_index']]+$_SESSION['logo_price']);}
						else{
							echo CURRENCY.$_SESSION['logo_price'];
							}
							?>
							</h3>
							
						</div>
						
						<form action="orders/special/" method="post" name="order_detail" id="order_detail">
                        
						
						
						
						<div class="clearfix order-stack logobrief">
							<h4 class="gray-bg-title">Requirements</h4>
                            <h4 class="order-blue">You can write as briefly or as detailed as you choose</h4>
							<ul class="form1  label-big">
								<li>
									<label>Exact name to be used in your logo:<span class="required theme-red">*</span></label>
									<input type="text" name="cmp_logo_name" value="<?php if(isset($_SESSION['cmp_logo_name'])){echo $_SESSION['cmp_logo_name'];}?>"   class="required <?php if(isset($_SESSION['cmp_logo_name'])){echo 'valid';}?>" placeholder="Your Logo Name" style="border:1px solid green;"/>
                          <a data-toggle="tooltip" title="Exact name of your logo"  data-placement='top'> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></a>

								</li>
								<li>
									<label>Tagline to be used in your logo (if any):</label>
									<input type="text" name="tagline" value="<?php if(isset($_SESSION['tagline'])){echo $_SESSION['tagline'];}?>" placeholder="Tagline for you logo" class="<?php if(isset($_SESSION['tagline'])){echo 'valid';}?>"/>
  <a data-toggle="tooltip" title="This is a catchphrase or a slogan you like to include in your Logo."  data-placement='top'> <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></a>

								</li>
								<li>
									<label>
										Describe your business or organization.<span class="required theme-red">*</span>
										<br />
										What is your primary activity, philosophy, style
										<br />
										(conservative, funky, modern, traditional etc.), goals, and 
										<br />
										anything else we should know:
									</label>
									<textarea name="business_detail"  placeholder="Your Business Description"  class="required <?php if(isset($_SESSION['business_detail'])){echo 'valid';}?>"><?php if(isset($_SESSION['business_detail'])){echo $_SESSION['business_detail'];}?></textarea>   
                                    <a data-toggle="tooltip" title="What is your primary activity, philosophy, style (conservative, funky, modern, and traditional, etc.), goals, and anything else we should know"  data-placement='top'  style="vertical-align:bottom !important;"> <span class="glyphicon glyphicon-question-sign" style="vertical-align:bottom !important;"></span></a>
                                    
								</li>
								<li>
									<label >
										The colors you would like to see in your logo (select 
										<br />
										from predefined colors or enter your own if you don't 
										<br />
										see them here):
									</label>
									<div class="multi-items">
										<div>
    										<div class="clearfix">
                                                <span class="color_picker" title="CC0000" >dark red</span>
                                                <span class="color_picker" title="FF0000" >red</span>
                                                <span class="color_picker" title="FF6600" >dark orange</span>
                                                <span class="color_picker" title="FF9900" >orange</span>
                                                <span class="color_picker" title="FFCC00" >yellow</span>
                                                <span class="color_picker" title="FFFF00" >lemon yellow</span>
                                                <span class="color_picker" title="CCFF00" >alien green</span>
                                                <span class="color_picker" title="00FF00" >lime green</span>
                                                <span class="color_picker" title="1CB900" >green</span>
                                                <span class="color_picker" title="1F8F24" >dark green</span>
                                                <span class="color_picker" title="00FF99" >aquamarine</span>
                                                <span class="color_picker" title="00CC99" >dark aquamarine</span>
                                                <span class="color_picker" title="00FFFF" >cyan blue</span>
                                                <span class="color_picker" title="0099FF" >baby blue</span>
                                                <span class="color_picker" title="0066CC" >royal blue</span>
                                                <span class="color_picker" title="0005D9" >blue</span><br />    											
    										
                                                <span class="color_picker" title="000000" >black</span>
                                                <span class="color_picker" title="333333" >dark gray</span>
                                                <span class="color_picker" title="666666" >gray</span>
                                                <span class="color_picker" title="999999" >silver gray</span>
                                                <span class="color_picker" title="CCCCCC" >light gray</span>
                                                <span class="color_picker" title="FFFFFF" >white</span>
                                                <span class="color_picker" title="996600" >brown</span>
                                                <span class="color_picker" title="CC9900" >golden brown</span>
                                                <span class="color_picker" title="993333" >maroon</span>
                                                <span class="color_picker" title="CC3366" >violet red</span>
                                                <span class="color_picker" title="FF3399" >fuschia</span>
                                                <span class="color_picker" title="CC66CC" >violet</span>
                                                <span class="color_picker" title="9933FF" >purple</span>
                                                <span class="color_picker" title="6633CC" >violet blue</span>
                                                <span class="color_picker" title="6666CC" >slate blue</span>
                                                <span class="color_picker" title="003399" >navy blue</span>    											
    										</div>
    										<span class="selected_color">Click on the color to choose it!</span>
                                            <input type="hidden" name="m5_colors"  value="<?php if(isset($_SESSION['m5_colors'])){echo $_SESSION['m5_colors'];}?>" />
                                        </div>
										
										<br />
										<div>
											<span>Other Colors:</span>
											<br />
<input type="text" name="colors" value="<?php if(isset($_SESSION['colors'])){echo $_SESSION['colors'];}?>" placeholder="Enter your own color if you don't 
see them here" /><a data-toggle="tooltip" title="You may select from the given predefined colors, or enter your own if you don’t see them here."  data-placement='top'> <span class="glyphicon glyphicon-question-sign"></span></a>
										</div>
										<div>
											<input type="checkbox"/><span> I leave this to designer</span>
										</div>
									</div>
									
								</li>
								<li>
									<label>
										Are there any colors you hate so much that you do not 
										<br />
										want to see them in your logo?
									</label>
									<div class="multi-items">                                    
                                        <div>
    										<div class="clearfix">
                                                <span class="color_picker" title="CC0000" >dark red</span>
                                                <span class="color_picker" title="FF0000" >red</span>
                                                <span class="color_picker" title="FF6600" >dark orange</span>
                                                <span class="color_picker" title="FF9900" >orange</span>
                                                <span class="color_picker" title="FFCC00" >yellow</span>
                                                <span class="color_picker" title="FFFF00" >lemon yellow</span>
                                                <span class="color_picker" title="CCFF00" >alien green</span>
                                                <span class="color_picker" title="00FF00" >lime green</span>
                                                <span class="color_picker" title="1CB900" >green</span>
                                                <span class="color_picker" title="1F8F24" >dark green</span>
                                                <span class="color_picker" title="00FF99" >aquamarine</span>
                                                <span class="color_picker" title="00CC99" >dark aquamarine</span>
                                                <span class="color_picker" title="00FFFF" >cyan blue</span>
                                                <span class="color_picker" title="0099FF" >baby blue</span>
                                                <span class="color_picker" title="0066CC" >royal blue</span>
                                                <span class="color_picker" title="0005D9" >blue</span><br />    											
    										
                                            
                                                <span class="color_picker" title="000000" >black</span>
                                                <span class="color_picker" title="333333" >dark gray</span>
                                                <span class="color_picker" title="666666" >gray</span>
                                                <span class="color_picker" title="999999" >silver gray</span>
                                                <span class="color_picker" title="CCCCCC" >light gray</span>
                                                <span class="color_picker" title="FFFFFF" >white</span>
                                                <span class="color_picker" title="996600" >brown</span>
                                                <span class="color_picker" title="CC9900" >golden brown</span>
                                                <span class="color_picker" title="993333" >maroon</span>
                                                <span class="color_picker" title="CC3366" >violet red</span>
                                                <span class="color_picker" title="FF3399" >fuschia</span>
                                                <span class="color_picker" title="CC66CC" >violet</span>
                                                <span class="color_picker" title="9933FF" >purple</span>
                                                <span class="color_picker" title="6633CC" >violet blue</span>
                                                <span class="color_picker" title="6666CC" >slate blue</span>
                                                <span class="color_picker" title="003399" >navy blue</span>    											
    										</div>
    										<span class="selected_color">Click on the color to choose it!</span>
                                            <input type="hidden" name="m5_no_colors"  value="<?php if(isset($_SESSION['m5_no_colors'])){echo $_SESSION['m5_no_colors'];}?>" />
                                        </div>
										<br />
										<div>
											<span>Other Colors:</span>
											<br />
										<input type="text" name="no_colors" value="<?php if(isset($_SESSION['no_colors'])){echo $_SESSION['no_colors'];}?>" placeholder="Enter your own color if you don't 
see them here" />
<a data-toggle="tooltip" title="Are there colors you don’t like so much that you do NOT want to see them in your logo? If so, select from the given predefined colors, or enter your own if you don’t see them here."  data-placement='top'> <span class="glyphicon glyphicon-question-sign"></span></a>
					
										</div>
									</div>
								</li>
								<li>
									<label>
										Describe some ideas you might have in mind for your <br />
										logo design, examples of logos you like/dislike, etc.
									</label>
									<textarea name="idea_of_clint"  placeholder="Your Business Description" ><?php if(isset($_SESSION['idea_of_clint'])){echo $_SESSION['idea_of_clint'];}?></textarea>   
                                    <a data-toggle="tooltip" title="Describe some ideas you might have in mind for your Logo design, examples of logos you like/dislike, etc."  data-placement='top' style="vertical-align:bottom !important;"> <span class="glyphicon glyphicon-question-sign" style="vertical-align:bottom !important;"  ></span></a>
                                    
								</li>
								<li>
									<label>
										If you have images of logos you like or other files you'd 
										<br />
										like to send, please attach them here:
									</label>
                                    <?php //unset($_SESSION['fileList'])?>
									<div class="multi-items">
										<div class="file-choose">
                                     
											<!--<span>No file chosen!</span>-->
											<input type="file" name="attachment" id="attachment" class="attachment"/>
                                            <input type="hidden" name="fileList" value="<?php if(isset($_SESSION['fileList'])){echo $_SESSION['fileList'];}else{}?>" id="fileList" />
                                            <div class="fileList" >
                                               
                                       
                                         
                                            
                                            <?php if(isset($_SESSION['fileList'])){
												
												$filess=explode(":",$_SESSION['fileList']);
												//$no_file= count($filess);
												foreach($filess as $f){
												$ext = pathinfo($f, PATHINFO_EXTENSION);
												if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'JPEG' || $ext == 'gif' || $ext == 'png'){
												echo '<div class="inner-filelist" ><img src="'.base_url().'web_images/'.$f.'" height="150" width="150" class="remove_attach" title="'.$f.'"/><a class="thremove"><img src="assets/images/delete1.png"></a>	</div>';
												}
									else{
										
										
		  $b = substr($f, 11);
										echo '<div class="inner-filelist" ><a href="'.$_SESSION['fileList'].'" download="download">'.$b.'</a><a class="thremove"><img src="assets/images/delete1.png"></a></div>';
										}
										
										}
												}?>
										
                                        
                                        
                                        
                                     </div>
                                     <div class="clearfix"></div>
                                        <a data-toggle="tooltip" title="If you have images of logos you like or other files you’d like to send, please attach them here. Note: Maximum file size is 500kb."  data-placement='top' class="pull-right"> <span class="glyphicon glyphicon-question-sign" ></span></a>
										<span>
											Note: File format should be ZIP, RAR, TAR JPG, GIF, PDF, ODT, PNG, PPT, PPTX, DOC, DOCX, PSD, AI or EPS. 
											<br />
											Maximum file size is 500KB.
										</span>
									
								</li>
								<li>
									<label>
										Contact Details (Mandatory for orders including business card design)
									</label>
									<textarea name="contact_details" placeholder="Enter your contact details"><?php if(isset($_SESSION['contact_details'])){echo $_SESSION['contact_details'];}?></textarea>		 	
                       
								</li>
							</ul>
						</div>
                        
                         <div class="row">
                	
						<div class="clearfix yellow-info-box">
							<h3 class="order-blue">Frequently Bought Together with Web Design and Brochures</h3>
                            
                            <h4> Promote your business to its <u>FULL Potential!</u></h4>
							
							<h4>Use one in-house design team for all your design needs!</h4>
						</div>

						<div class="clearfix order-stack">
							<h4 style="text-decoration: underline;" class="gray-bg-title">Web Design</h4>
							<ul class="form1 modifiedbrief label-big">
								<li class="pull-left">
									<label>
									                                    
										Special Promotion:
										<br />
										Half-Price on all web packages.
										<br />
										Valid to <span class="theme-red"><?php echo $today; ?></span>									
                                                                        </label>
									<div class="multi-items">
										<span style="font-size: 16px;">Select package: </span>
										<select class="select1" name="web_package">
                                        <option value="">See package options</option>
                                        <option value="<?php echo BUDGET_WP ?>" <?php echo (@$_SESSION['web'] == BUDGET_WP_P) ? 'selected="selected"' : '' ?>><?php echo BUDGET_WP ?> - Now <?php echo CURRENCY . BUDGET_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . BUDGET_WP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo GOLD_WP ?>" <?php echo (@$_SESSION['web'] == GOLD_WP_P) ? 'selected="selected"' : '' ?>><?php echo GOLD_WP ?> - Now <?php echo CURRENCY . GOLD_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . GOLD_WP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo ELITE_WP ?>" <?php echo (@$_SESSION['web'] == ELITE_WP_P) ? 'selected="selected"' : '' ?>><?php echo ELITE_WP ?> - Now <?php echo CURRENCY . ELITE_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . ELITE_WP_P_R ?><?php endif; ?></option>
                                    </select>
									</div>
                                    
                                    <img src="images/web.jpg"  >
								</li>
                                							</ul>
							<div class="small-txt-note">
								<p class="text-center">
									For more information on the web design packages we offer, click <a class="theme-blue" href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale">here</a>. 
									<br />
									Your order details entered above will be saved. To return to this page, click "back" on your browser.
								</p>
							</div>
						</div>
						
						<div class="clearfix order-stack">
							<h4 style="text-decoration: underline;" class="gray-bg-title">Brochure</h4>
							<ul class="form1 modifiedbrief label-big">
								<li>
                                    <label>
									                                    
										Special Promotion:
										<br />
										Half-Price on all brochure packages.
										<br />
										Valid to <span class="theme-red"><?php echo $today;?></span>									
                                                                        </label>
									<div class="multi-items">
										<span style="font-size: 16px;">Select package: </span>
										<select class="select1" name="brouchure_package">
                                        <option value="">See package options</option>
                                        <option value="<?php echo TRI_FOLD_BP ?>" <?php echo (@$_SESSION['brouchure'] == TRI_FOLD_BP_P) ? 'selected="selected"' : '' ?> ><?php echo TRI_FOLD_BP; ?> - Now <?php echo CURRENCY . TRI_FOLD_BP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . TRI_FOLD_BP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo FOUR_PAGE_EXEC_BP ?>" <?php echo (@$_SESSION['brouchure'] == FOUR_PAGE_EXEC_BP_P) ? 'selected="selected"' : '' ?> ><?php echo FOUR_PAGE_EXEC_BP; ?> - Now <?php echo CURRENCY . FOUR_PAGE_EXEC_BP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . FOUR_PAGE_EXEC_BP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo EIGHT_PAGE_EXEC_BP ?>" <?php echo (@$_SESSION['brouchure'] == EIGHT_PAGE_EXEC_BP_P) ? 'selected="selected"' : '' ?> ><?php echo EIGHT_PAGE_EXEC_BP; ?> - Now <?php echo CURRENCY . EIGHT_PAGE_EXEC_BP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . EIGHT_PAGE_EXEC_BP_P_R ?><?php endif; ?></option>
                                    </select>
									</div>
                                     <img src="images/brochure.jpg"  >
								</li>
							</ul>
						</div>
						<div class="normal-desc-box text-center">
							<a class="green-btn order-back-btn" href="<?php echo base_url()?>orders/index/<?php echo $_SESSION['p_index']?>">
								<span data-hover="Back">Back</span>
							</a>
                            <!--<a class="green-btn order-submit-btn" href="javascript:void(0)">
            					<span data-hover="Continue">Continue</span>
            				</a>-->
							<button class="green-btn order-submit-btn" type="submit">
								<span data-hover="Continue">Continue</span>
							</button>
						</div>
                   </div>     
						</form>
                
					
					</div>
                    <div class="col-xs-12 col-md-3 col-sm-3">
              <?php include('floated.php');?>
                   
                    </div>
                </div>
               
                    
				</div>
			</div>
		</section>
        
        <script>
            $(document).ready(function()
            {    
                $('textarea, input').on('input propertychange change',function()
                {                    
                    var name  = this.name;
                    var value = this.value;
                   $.post("<?php echo base_url()?>orders/autosave.php",name+'='+value);
					
                
                }); 
                $('select').change(function()
                {                    
                    var name  = this.name;
                    var value = this.value;
                    $.post("<?php echo base_url()?>orders/autosave.php",name+'='+value,function(){
						
						 
					$.post("<?php echo base_url()?>orders/update_floated/",{'name':name,'value':value}, function(msg){
						if(name == 'web_package'){
							$('#web_package').html(msg);
							}
							else if(name == 'brouchure_package'){
								$('#bro_package').html(msg);
								}
					
						});  	});             
                });                
                
                // custom color picker
                // for background 
                $('.color_picker').each(function(){
                    var color = $(this).attr('title');
                    //alert(color);
                    $(this).css('background','#'+color);
                });
                
                $('.color_picker').click(function(){
                    var color_pick = $(this).parent().children();
                    
                    if($(this).hasClass('checked')){
                        $(this).removeClass('checked');
                    }
                    else{
                        $(this).addClass('checked');
                    }
                    var colors_name = '';
                    var colors_code = '';                    
                    
                    
                    $(color_pick).each(function(){                        
                        if($(this).hasClass('checked')){
                            colors_code += "#"+$(this).attr('title')+ ", ";
                            colors_name += $(this).html()+ ", ";
                        }
                    });
                    colors_code = colors_code.substring(0, colors_code.length - 2);
                    colors_name = colors_name.substring(0, colors_name.length - 2);
                    $(this).parent().parent().children().next('span').html(colors_name);
                    if($(this).parent().parent().children().next('span').html() == "")
                    {
                        $(this).parent().parent().children().next('span').html("Click on the color to choose it!");
                    }
                    $(this).parent().parent().children().next().next('input').val(colors_code);
                    //alert(colors_code + " " + colors_name);
                });
                 
            });
        </script>
        <!-- Form Validation -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#order_detail').validate(
            {
                rules:
                {
                   
                    cmp_logo_name:"required",
                    business_detail:"required"
                    
                },
                messages:
                {
                   
                    cmp_logo_name:"Please Enter Exact name to be used in your logo",
                    business_detail:"Please Describe your business or organization"
                                      
                }
                
            });
			
        </script>
        <!-- /Form Validation -->
        
        
        
        <!--  Uplodify  -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.uploadify.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/uploadify.css">
        <script type="text/javascript">
    		<?php  $timestamp =time();?>
    		$(function() {
				
				$('.remove_attach').hover(function(){
					$(this).next('a.thremove').show();
					});
				
				$('.fileList').delegate('.thremove', 'click', function () {
            var thisss = $(this);
            var number = $(this).parent().prevAll('div.inner-filelist').length;
            var next_number = $(this).parent().nextAll('div.inner-filelist').length;
            var file_name = $(this).prev('img').attr('title');
            $.post('<?php echo base_url() ?>orders/remove_attach', {'file_name': file_name, 'number': number, 'next_number': next_number}, function (msg) {
                $(thisss).parent().remove();
                $('#fileList').val(msg);
            });
        });
				
				
			$('#attachment').uploadify({
					
    				'formData'     : {
    					'timestamp' : '<?php echo time();?>',
    					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
                        'targetFolder':''
    				},
					
					
                    height        	: 20,
                    swf           	: '<?php echo base_url() ?>assets/uploadify/uploadify.swf',
                    uploader      	: '<?php echo base_url() ?>assets/uploadify/uploadify.php',
					script			: '<?php echo base_url() ?>assets/uploadify/uploadify.ashx',
                    width         	: 120,
                    cancelImg 	  	: '<?php echo base_url() ?>assets/uploadify/cancel.png',
                    buttonText 		: 'Attach Files',
                    buttonCursor 	: 'hand',
                    multi			: true,
					auto			: true,
                    fileTypeDesc 	: 'Custom',
                    fileSizeLimit 	: '307200KB',
                    queueSizeLimit 	: 30,
                    fileTypeExts 	: '*.zip; *.rar; *.tar; *.jpg; *.gif; *.pdf; *.odt; *.png; *.ppt; *.pptx; *.doc; *.docx; *.psd; *.ai; *.eps', 
                    checkExisting 	: '<?php echo base_url() ?>assets/uploadify/check-exists.php',
					
					
					
                    onSelect		: function(file){
                       
                        $('.order-submit-btn span').html('Please wait while uploading...');
                        $('.order-submit-btn').attr('disabled','disabled');
                    },
                 
                    onUploadSuccess : function(file, data, response) {
					
					//var prev_file=$('#fileList').val();
					
					/*if(prev_file != ''){
						$.post('<?php //echo base_url() ?>orders/prev_file/',{'prev_file':prev_file},function(msg){
							//alert(msg);
							});
					}*/
					//alert(data);
						$.post('<?php echo base_url() ?>orders/prev_file/',{'fileList':data}, function(ms){
						$('#fileList').val(ms);
						
						});
						
						//	return false;
                        $('#fileList').val('<?php echo base_url() ?>web_images/'+data);
						var ext = data.split('.').pop();
						if(ext == 'jpg' || ext == 'png' || ext == 'gif'){
							$('.fileList').append('<div class="inner-filelist"><img src="<?php echo base_url() ?>web_images/'+data+'" height="150" width="150" title="'+data+'" class="remove_attach"/><a class="thremove" style="display: inline;"><img src="assets/images/delete1.png"></a></div>');
							}
						else{
							$('.fileList').append('<div class="inner-filelist"><a href="<?php echo base_url() ?>web_images/'+data+'" download="download" title="'+data+'" class="remove_attach">'+data.slice(11)+'</a><a class="thremove" style="display: inline;"><img src="assets/images/delete1.png"></a>');
							}
							
						
                        $('.order-submit-btn span').html('Continue');
                        $('.order-submit-btn').removeAttr('disabled');
						
						
						

                        
                    }
    			});
    		});
			
			
    	</script>
        
        <!--  /Uplodify  -->
      <?php /*?>     <footer id="footer">
			<section id="blue-bar-footer">
				<div class="container">
					<div class="row">
                     
						<div class="lag col-xs-3">
							<span class="small">We've got your back</span>
							<span class="big">24x7x365</span>
						</div>
						<div class="lag-icon col-xs-3">
							<i class="mobile-icon"></i><span style="width: 120px;">Sales &amp; Support (866) 598-6266</span>
						</div>
						<div class="live-support-cover lag-icon col-xs-3">
							<i class="live-support"></i><span><a href="javascript:void(0);">Live Support</a></span>
						</div>                        
						<div style="margin: 5px 0 0;" class="lag-icon col-xs-3">
							<i class="mail-icon"></i><span><a href="<?php echo base_url()?>contact.php">Email Us</a></span>
						</div>
					</div>
				</div>
			</section>
			
			<section id="black-bar-footer">
				<div class="container">
					<div class="row">
                    
						<ul class="col-xs-3">
							<li><a data-hover="Management team" href="<?php echo base_url()?>management.php">Management team</a></li>
							<li><a data-hover="Quality control" href="<?php echo base_url()?>quality.php">Quality control</a></li>
							<li><a data-hover="Partnership programs" href="<?php echo base_url()?>partnership.php">Partnership programs</a></li>
							<li><a data-hover="Terms and conditions" href="<?php echo base_url()?>terms.php">Terms and conditions</a></li>
							<li><a data-hover="View our portfolio" href="<?php echo base_url()?>portfolio.php">View our portfolio</a></li>
							<li><a data-hover="Start my logo" href="<?php echo base_url()?>packages.php">Start my logo</a></li>
						</ul>
						<ul class="col-xs-3">
							<li><a data-hover="Guarantee" href="<?php echo base_url()?>guarantee.php">Guarantee</a></li>
							<li><a data-hover="Privacy policy" href="<?php echo base_url()?>privacy.php">Privacy policy</a></li>
							<li><a data-hover="Sample project" href="<?php echo base_url()?>sampleproject.php">Sample project</a></li>
							<li><a data-hover="FAQ" href="<?php echo base_url()?>faq.php">FAQ</a></li>
							<li><a data-hover="See our packages" href="<?php echo base_url()?>packages.php">See our packages</a></li>
							<li><a data-hover="Our charitable work" href="<?php echo base_url()?>charity.php">Our charitable work</a></li>
						</ul>
						<ul class="col-xs-3">
							<li><a data-hover="Contact Us" href="<?php echo base_url()?>contact.php">Contact us</a></li>
							<li><a data-hover="Compare prices" href="<?php echo base_url()?>compare.php">Compare prices</a></li>
							<li><a data-hover="Case study" href="<?php echo base_url()?>casestudy.php">Case study</a></li>
							<li><a data-hover="More Services" href="<?php echo base_url()?>new44/more_services.php">More Services</a></li>
						</ul>
						<div class="pic col-xs-2">
							<img class="img-responsive" src="<?php echo base_url()?>assets/images/devoted-support-pic.png" alt="devoted support" width="165" height="137" />
						</div>
					</div>
				</div>
			</section>
			
			<section id="light-gray-bar-footer">
				<div class="container">
					<div class="privacy">
							<p><strong>Privacy Policy:</strong> We will never share, sell, or rent individual personal information with anyone without your advance permission or unless ordered by a court of law. Information submitted to us is only available to employees managing this information for purposes of contacting you or sending you emails based on your request for information and to contracted service providers for purposes of providing services relating to our communications with you.</p>
							<br />
							<br />
							<p>Copyright 2003-2015. Designated trademarks and brands are the property of their respective owners. The content on the Logo Design Guarantee website is protected under copyright, trademark, patent and other intellectual property rights belonging to Logo Design Guarantee and any unauthorized use of such content may violate such laws.
							<br />
		LogoDesignGuarantee.com is Committed to Producing Award-Winning Logos!</p>
						</div>
                					
                                        <div class="godaddy">
						<ul>
							<li>
                                <!--<a target="_blank" href="http://certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb&pop=true"><img src="<?php echo base_url()?>assets/images/godaddy.png" alt="go daddy" width="146" height="31" /></a>-->
                                <span id="siteseal" style="display: inline-block;"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=qHwD7KdZ2yocqsiUmu3U0vMD7qlfms8eOr01fHGM4RGqcjqakuedi"></script></span>
                                <script type="text/JavaScript">
                                //<![CDATA[
                                <!--var sealServer=document.location.protocol+"//seals.websiteprotection.com/sealws/503846bb-7bc4-4d46-ab46-09bccbdd56cb.gif";var certServer=document.location.protocol+"//certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb";var hostName="logodesignguarantee.com";document.write(unescape('<div style="text-align:center;margin:0 auto;"><a target="_blank" href="'+certServer+'&pop=true" style="display:inline-block;"><img src="'+sealServer+'"  alt="Website Protection&#153; Site Scanner protects this website from security threats." title="This Website Protection site seal is issued to '+ hostName +'. Copyright &copy; 2014, all rights reserved."oncontextmenu="alert(\'Copying Prohibited by Law\'); return false;" border="0" width="146" height="31" /></a></div>'));-->
                                //]]>
                                </script>
                            </li>
							<li>
                                <!--<a target="_blank" href="https://smarticon.geotrust.com/smarticonprofile?Referer=http://www.logodesignguarantee.co.uk"><img src="<?php echo base_url()?>assets/images/smarticon.gif" alt="smarticon" width="115" height="55" /></a>-->
                                <!-- GeoTrust QuickSSL [tm] Smart Icon tag. Do not edit. -->
                                <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"
                                 SRC="//smarticon.geotrust.com/si.js"></SCRIPT>         
                                 <!-- end GeoTrust Smart Icon tag --></li>
                            </li>
						</ul>
					</div>
                                    					<div class="payment-gateway-icons">
						<ul>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/american-express.gif" alt="american express" width="63" height="34" /></a></li>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/visa.gif" alt="visa" width="63" height="34" /></a></li>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/mastercard.gif" alt="mastercard" width="63" height="34" /></a></li>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/discover.gif" alt="discover" width="63" height="34" /></a></li>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/paypal.gif" alt="paypal" width="63" height="34" /></a></li>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/verified-visa.gif" alt="verified visa" width="70" height="34" /></a></li>
							<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/mastercard-secure.gif" alt="mastercard secure" width="100" height="34" /></a></li>
						</ul>
					</div>
				</div>
			</section>
			
			<section id="brand-logo2">
				<div class="container">
					<div class="row">
						<div class="round-box col-xs-10 col-xs-offset-1">
							<ul>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/business.jpg" alt="business"  width="180" height="80" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/microsoft.jpg" alt="microsoft"  width="287" height="80" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/paypal.jpg" alt="paypal"   width="99" height="80"/></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/tech.jpg" alt="tech"   width="175" height="80"/></a></li>
							</ul>
							<ul>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/fsb.jpg" alt="fsb"  width="49" height="60" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/cardsave.jpg" alt="cardsave"  width="122" height="60" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/dNb.jpg" alt="dNb"  width="84" height="60" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/iso.jpg" alt="iso"  width="94" height="60" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/nasscom.jpg" alt="nasscom"  width="101" height="60" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/worldpay.jpg" alt="worldpay"  width="106" height="60" /></a></li>
							</ul>
							<ul>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/google.jpg" alt=""  width="93" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/yahoo.jpg" alt=""  width="103" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/ukwda.jpg" alt=""  width="101" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/amazon.jpg" alt=""   width="73" height="45"/></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/paypal2.jpg" alt=""  width="81" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/microsoft_net.jpg" alt=""  width="64" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/bing.jpg" alt=""  width="87" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/ebay.jpg" alt=""  width="61" height="45" /></a></li>
								<li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/sage_pay.jpg" alt=""  width="79" height="45" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</footer><?php */?>
     <?php $this->load->view('includes/footer-common'); ?>
	</section>
	<div class="package-info-box"></div>    
    
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        
	    <script src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script>
	   <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
       <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    <div id="toTop"><img src="<?php echo base_url()?>assets/images/scroll_top.png" width="30" height="30" class="img-responsive" /></div>	    
  </body>
  
  <script type="text/javascript">
	 $(document).ready(function(){
		$("input[name='cmp_logo_name']").focus();
		 
		 $('li .required').focus(function(){
				$(this).addClass('presentbks');
				});
 $('[data-toggle="tooltip"]').tooltip();
 
 
 
});

    </script>

    
   <?php //unset($_SESSION['fileList']); 	

	//echo"<pre>";print_r($_SESSION);?>
    
<script type="text/javascript">
$(function(){
var ss=$.browser;
		//console.log(ss);
		if(ss.safari){
			//console.log("safari");
			}
			else{
var mq = window.matchMedia( "(min-width: 768px)" );
if (mq.matches) {
   jQuery(document).ready(function($) {
if (window.history && window.history.pushState) {
    window.history.pushState('forward', null, 'orders/logobrief');
    $(window).on('popstate', function() {
	  window.location="<?php echo base_url()?>orders/index/<?php echo $_SESSION['p_index']?>";
	  return false;
    });

  }
});
}
else{}
			}
});
</script>
</html>