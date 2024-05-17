// JavaScript Document
$(document).ready(function(e) {
    $('.connect_btn').click(function(){
		//var checkedValue = $('td .showcontacts input:checked').val();
		//alert('suman'); return false;
		var checked_emails = new Array();
		var inputElements = document.getElementsByTagName('input');
                //alert(inputElements); return false;
		for(var i=0; inputElements[i]; ++i){
                    //alert(inputElements[i].value);              
      		if(inputElements[i].checked){
          		 checkedValue = inputElements[i].value;
          		 checked_emails.push(checkedValue);
      		}
		}
		//alert(checked_emails.length); return false;
		if(checked_emails.length==0){
			$('.error').remove();			
			$("#import-error").html('<div style="display:inline;" class="error">No Contacts Selected!</div>');
                        return false;
		}else{
			$('.error').remove();
			
			$("#imported_send_div").after('<div class="error" style="display:inline;vertical-align:top"><img src="http://www.1logo.biz/ldg_new/contact_import/images/ajax-loader.gif" /></div>');
				$.post("../../invite/sendMail", {to: checked_emails } ).done(function() {
					$.post("../../invite/insertInvite", {email_list: checked_emails } ).done(function() {
						window.top.location.href="http://www.1logo.biz/ldg_new/client_panel/send_to_friends.php";
					});
			});
		}
		
	});
	
	
	$('#imported_cancel').click(function(){
		window.top.location.href="http://www.1logo.biz/ldg_new/client_panel/send_to_friends.php";
	});
	
	
	
	//for yahoo
	  $('.imported_yahoo_send').click(function(){
		//var checkedValue = $('td .showcontacts input:checked').val();
		
		var container = new Array();
		var inputElements = document.getElementsByTagName('input');
		for(var i=0; inputElements[i]; ++i){
      		if(	 inputElements[i].checked && inputElements[i].parentNode.className=='span_check'){
          		 checkedValue = inputElements[i].value;
          		 container.push(checkedValue);
      		}
		}
		if(container.length==0){
			$('.error').remove();
			$("#imported_send_div").after('<div style="display:inline;"  class="error">No Contacts Selected!</div>');
		}else{
			$('.error').remove();
			$("#imported_send_div").after('<div class="error" style="display:inline;vertical-align:top"><img src="http://www.1logo.biz/ldg_new/contact_import/images/ajax-loader.gif" /></div>');
				$.post(base_url+"invite/sendMail", {to: container } ).done(function() {
					$.post(base_url+"invite/insertInvite", {email_list: container } ).done(function() {
						window.top.location.href="http://www.1logo.biz/ldg_new/contact_import/yahoo_logout.php";
					});
				
			});
		}
		
	});
	
	
	//Aol
	 $('#aol_send').click(function(){
		//var checkedValue = $('td .showcontacts input:checked').val();
		
		var container = new Array();
		var inputElements = document.getElementsByTagName('input');
		for(var i=0; inputElements[i]; ++i){
      		if(	 inputElements[i].checked && inputElements[i].parentNode.className=='showcontacts'){
          		 checkedValue = inputElements[i].value;
          		 container.push(checkedValue);
      		}
		}
		
		if(container.length==0){
			$('.error').remove();
			
			$("#imported_send_div").after('<p class="error">No Contacts Selected!</p>');
		}else{
			$('.error').remove();
			
			$("#imported_send_div").after('<p class="error"><img src="http://www.1logo.biz/ldg_new/client_panel/images/ajax-loader.gif" /></p>');
				$.post("../../invite/sendMail", {to: container } ).done(function() {
					$.post("../../invite/insertInvite", {email_list: container } ).done(function() {
						//window.close();
						window.top.location.href="http://www.1logo.biz/ldg_new/client_panel/send_to_friends.php";
					});
			});
		}
		
	});
	
	
	$('#aol_cancel').click(function(){
		
		window.top.location.href="http://www.1logo.biz/ldg_new/client_panel/send_to_friends.php";
	});
        
        //toggle check checkbox
	
    function togglecheckbox(){ 
	   var ch;
		if(document.sendemailsform.elements[0].checked==false) {ch=false;}
		if(document.sendemailsform.elements[0].checked==true) {ch=true;}
      for (var i = 1; i < document.sendemailsform.elements.length; i++) 
	  {
        var e = document.sendemailsform.elements[i];

			if (e.type == 'checkbox' && e.id!='optintomailinglist')
			 {
				e.checked = ch;
			 }
			
      }
    }
	
	function unchecktop(ischecked,id)
	{
		if(ischecked==false)
		{
		document.sendemailsform.allbox2.checked=false;
		}
	}
	
});
   
