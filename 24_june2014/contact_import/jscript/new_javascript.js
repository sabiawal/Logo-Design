// JavaScript Document
$(document).ready(function(e) {
	var base_url = $('#base_url').val();
	
    $('#imported_send').click(function(){
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
			
			$("#imported_send_div").after('<p class="error"><img src="http://websamplenow.com/126/hot/assets/images/ajax-loader.gif" /></p>');
				$.post("../../invite/sendMail", {to: container } ).done(function() {
					$.post("../../invite/insertInvite", {email_list: container } ).done(function() {
						window.top.location.href="http://websamplenow.com/126/hot/invite";
					});
			});
		}
		
	});
	
	
	$('#imported_cancel').click(function(){
		window.top.location.href="http://websamplenow.com/126/hot/invite";
	});
	
	
	
	//for yahoo
	  $('#imported_yahoo_send').click(function(){
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
			$("#imported_send_div").after('<p style="text-align:center;"  class="error">No Contacts Selected!</p>');
		}else{
			$('.error').remove();
			$("#imported_send_div").after('<p class="error" style="text-align:center;"><img src="http://websamplenow.com/126/hot/assets/images/ajax-loader.gif" /></p>');
				$.post(base_url+"invite/sendMail", {to: container } ).done(function() {
					$.post(base_url+"invite/insertInvite", {email_list: container } ).done(function() {
						window.top.location.href="http://websamplenow.com/126/hot/assets/yahoo_logout.php";
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
			
			$("#imported_send_div").after('<p class="error"><img src="http://websamplenow.com/126/hot/assets/images/ajax-loader.gif" /></p>');
				$.post("../../invite/sendMail", {to: container } ).done(function() {
					$.post("../../invite/insertInvite", {email_list: container } ).done(function() {
						window.close();
					});
			});
		}
		
	});
	
	
	$('#aol_cancel').click(function(){
		
		window.close();
	});
	
	
	
	//contact selection
	$('.select_all').click(function(){
		var j;
		var count = $('.hidden_count').attr('id');
		for( j=0;j<count;j++){
			if ($('#allbox2').is(":checked"))
			{
				$('.img'+j).show();
			}else{
				$('.img'+j).hide();
			}
		}
	});
	
	$('.img_div').click(function(){
				
		myid = $(this).attr('name');
		
		if ($('#'+myid).is(":checked"))
		{
  			$('.img'+myid).hide();
			$('.hover_select').hide();
			$(this).append('<label class="hover_select1" for='+myid+'>click to select</label>');
		}else{
			$('.img'+myid).show();
			$('.hover_select1').hide();
			$(this).append('<label class="hover_select" for='+myid+'>click to deselect</label>');
			
		}
		
	});
	
	//for design of contact list as badoo
	$('.img_div').mouseenter(function(){
		myid = $(this).attr('name');
		mytitle = $(this).attr('title');
	
		if ($('#'+myid).is(":checked"))
		{
  			$(this).append('<label class="hover_select" for='+myid+'>click to deselect</label>');
		}else{
			
			$(this).append('<label for='+myid+' class="hover_select1">click to select</label>');
		}		
	});
	
	$('.img_div').mouseleave(function() {
     
		$('.hover_select').remove();
		$('.hover_select1').remove();
					
    });
	
	//other image box
	$('#others').click(function(){
		$('.img_content2').hide();
		$('.img_content1').show();
		
	});
	
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
    
   
