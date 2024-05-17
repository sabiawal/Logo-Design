// JavaScript Document
$(document).ready(function(e) {

//Mail Sending Ajax module for Hotmail, Gmail and Aol

        $('.imported_send').click(function(){
                var $this = $(this).attr('class');
                
                var sender_email = $('#sumans').val(); 
                var logo_web_id = $('#logoWedId').val();
                var all_logos = [];
               $('.all_l').each(function(){
                   all_logos.push($(this).val());
               });
		var checked_emails = new Array();
		var inputElements = document.getElementsByTagName('input');
		for(var i=0; inputElements[i]; ++i){           
      		if(inputElements[i].checked){
          		 checkedValue = inputElements[i].value;
          		 checked_emails.push(checkedValue);
      		}
		}
                
		if(checked_emails.length==0){
                        $(this).after('<div style="display:inline;" class="error">No Contacts Selected!</div>');
                        return false;
		}else{
                        $('.error').remove();
			$(this).after('<img src="http://www.logodesignguarantee.co.uk/contact_import/images/processing_new.gif" style="float: left; margin: 3px 0 0 10px; width: 200px;" class="show-img" />');
                        //$('.imported_send').after('<span style="background-color: #FAFDDF; border: 1px solid #339933; color: #F03838; font-size: 13px; font-weight: bold; margin-left: 10px; padding: 5px 10px;">Sending mail Please be patient!...</span>');
                         $.post("../client_panel/send_Mail", {Emails: checked_emails, Sender_email: sender_email, LogoWebId: logo_web_id, All_Logo: all_logos} ).done(function(data) {
                            alert('Congratulations. Your message has been successfully sent.');
                            window.top.location.href="http://www.logodesignguarantee.co.uk/contact_import/clear_database.php";
			});
		}          		
	});	
$('.select_all').click(function(){
		var j;
		var count = $('.hidden_count').attr('id');
		for( j=0;j<count;j++){
			if ($('#allbox2').is(":checked"))
			{
				$('.img'+j).show();
                                $('.img_3').show();
			}else{
				$('.img'+j).hide();
                                $('.img_3').hide();
			}
		}
	});
	
	$('.img_div').click(function(){
				
		myid = $(this).attr('name');
		
		if ($('#'+myid).is(":checked"))
		{
  			$('.img'+myid).hide();
			$('.hover_select').hide();
			$(this).append('<label class="hover_select1" for='+myid+'>Click to select</label>');
		}else{
			$('.img'+myid).show();
			$('.hover_select1').hide();
			$(this).append('<label class="hover_select" for='+myid+'>Click to deselect</label>');
			
		}
		
	});
	
	$('.img_div').mouseenter(function(){
		myid = $(this).attr('name');
		//mydesc = $(this).attr('desc');
	
		if ($('#'+myid).is(":checked"))
		{
  			$(this).append('<label class="hover_select" for='+myid+'>Click to deselect</label>');
		}else{
			
			$(this).append('<label for='+myid+' class="hover_select1">Click to select</label>');
		}		
	});
	
	$('.img_div').mouseleave(function() {
     
		$('.hover_select').remove();
		$('.hover_select1').remove();
					
    });
	
	
	$('.img_div1').click(function(){
				
		myid = $(this).attr('name');
		
		if ($('#'+myid).is(":checked"))
		{
  			$('.img'+myid).hide();
			$('.hover_select2').hide();
			$(this).append('<label class="hover_select3" for='+myid+'>Click to select</label>');
		}else{
			$('.img'+myid).show();
			$('.hover_select3').hide();
			$(this).append('<label class="hover_select2" for='+myid+'>Click to deselect</label>');
			
		}
		
	});
	
	
	$('.img_div1').mouseenter(function(){
		myid = $(this).attr('name');
		//mydesc = $(this).attr('desc');
                if(myid == 5){
                    $('#tooltip').css();
                }
		if ($('#'+myid).is(":checked"))
		{
  			$(this).append('<label class="hover_select2" for='+myid+'>Click to deselect</label>');
		}else{
			
			$(this).append('<label for='+myid+' class="hover_select3">Click to select</label>');
		}		
	});
	
	$('.img_div1').mouseleave(function() {
     
		$('.hover_select2').remove();
		$('.hover_select3').remove();
					
    });

	$('#others').click(function(){
		$('.img_content2').hide();
		$('.img_content1').show();
				
	});                
});	

checked=false;
function togglecheckbox (check__) {
	var aa= document.getElementById('sendemailsform');
	 if (checked == false)
          {
           checked = true;
          }
        else
          {
          checked = false;
          }
	for (var i =0; i < aa.elements.length; i++) 
	{
	 aa.elements[i].checked = checked;
	}
      }
function unchecktop1(unchecked)
	{
		if(unchecked==false)
		{
		document.all_checkbox.allbox2.checked=false;
		}
                else{
                document.all_checkbox.allbox2.checked=true;    
                }
	}
   
