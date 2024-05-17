$(document).ready(function(){ 
$('#send_btn').click(function(){
var values = CKEDITOR.instances['contents'].getData();

var replaced_values=values.replace(/\s+/g, ' ');
var business_aim1 = CKEDITOR.instances['business_aim'].getData();
var replaced_business=business_aim1.replace(/\s+/g, ' ');
$(".check_this2").append('<textarea cols="20" id="conts" name="text-message" rows="20" style="display:none;">'+replaced_values+'</textarea>');
$(".check_this2").append('<textarea cols="20" id="business_content" name="business_content" rows="20" style="display:none;">'+replaced_business+'</textarea>');
});

function countChecked() {
	var items = [];
	$("input[name='checked_all[]']:checked").each(function(){items.push($(this).val());
	});
	$("#add_details").append('<input type="hidden" name="logo-names" value='+items+'>');
}
countChecked();
$(".checked_box:checkbox").click(countChecked);
});

$(function(){   
	$('.save-message').click(function(){
            var logo_web_id = $('#logoWedId').val();
		var values = CKEDITOR.instances['contents'].getData();
                var replaced_values=values.replace(/\s+/g, ' ');
                var business_aim1 = CKEDITOR.instances['business_aim'].getData();
                var replaced_business=business_aim1.replace(/\s+/g, ' ');
                $.post("client_panel/SaveMessage", {message1: replaced_values , message2: replaced_business, LogoWebId: logo_web_id } ).done(function() { 
                    $('.success-message').html('Your message has been saved.');
                    $('.success-message').css('background-color','#92E781');
                    $('.success-message').css('border','1px solid #449933');
                    $('.success-message').fadeOut(5000);
		});
	});       
});

var count = 1;
	$(document).ready(function() {
    $("body").on("click",".add-more",function(){
        count++;    
		$('.clonnings').append('<li style="width:300px !important;"><input name="addemail[]" id="addemail'+count+'" class="add_email" placeholder="Add Receiver Email Address" type="text" value="" style="margin:5px 9px 5px 35px; height:22px;"><img src="assets/images/social_icons/delete.png" class="remove-img" height="10" style=" float:right; cursor: pointer; margin-top:14px !important;"></li>');	
        });
	$("body").on("click",".remove-img",function(){
		$(this).parent(".clonnings li").remove();
	});
});

$(function() {
$('.chk').attr('checked', 'checked');
$("#form1").validate();
$('.checked_box').attr('checked', 'checked');
});

function dublicate_email_check()
{
	var count_imports = $('p#stores li').length;
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	for (var i=1; i<200; i++)
	{
		for (var j=1; j<200; j++)
		{
			if (i!=j)
			{ 
				if (document.getElementById('addemail'+i).value==document.getElementById('addemail'+j).value)
				{
					alert("Sorry, you have entered the same address in both field "+i+" and field "+j+",\nPlease change one of them...");
					document.getElementById('addemail'+j).select();
					return false;
				}
			}
			if(document.getElementById('sender_email').value=='')
			{
				alert("You must enter the email address!!!");
				document.getElementById("sender_email").focus();
				return false;	
			}
			if(!emailReg.test($('#sender_email').val()))
			{
				alert('You have entered invalid sender email address!!!');
				document.getElementById("sender_email").focus();
				return false;
			}
			if(count_imports==0)
			{
				if(count>0 && $('#addemail'+count+'').val()==''){
				alert("Receiver email address should not be emptied!!!");
				$('#addemail'+count+'').focus();
				return false;
			}
			}
			if((emailReg.test(document.getElementById('addemail'+i).value) == false) || (emailReg.test(document.getElementById('addemail'+j).value) == false))
			{
				alert("Receiver's email is incorrect format");
				document.getElementById('addemail'+j).focus();
				return false;
			}
			if (document.getElementById('addemail'+i).value!='' && document.getElementById('addemail'+j).value!='' && document.getElementById('sender_email').value==document.getElementById('addemail'+i).value)
			{
				alert("Sender's email is same with receiver's email!!!");
				document.getElementById('addemail'+i).select();
				return false;
			}
			if (document.getElementById('addemail'+i).value!='' && document.getElementById('addemail'+j).value!='' && document.getElementById('sender_email').value==document.getElementById('addemail'+j).value)
			{
				alert("Sender's email is same with receiver's email!!!");
				document.getElementById('addemail'+j).select();
				return false;
			}
		}
	}
}

function merge() {
        $check_this4 = $(".check_this4");
        $(".check_this1 :checkbox:checked, .check_this2 input:text, .check_this2 textarea#conts, .check_this2 textarea#business_content, .ajax_call input:text, .check_this3 input:text, .check_this3 input:hidden").each(function() {
            $check_this4.append("<input type='hidden' name='"+$(this).attr('name')+"' value='"+$(this).val()+"'   />");
        });		
    }
	
	
