/*
 * Tooltip script 
 * powered by jQuery (http://www.jquery.com)
 * 
 * written by Alen Grakalic (http://cssglobe.com)
 * 
 * for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
 *
 */
 


this.tooltip = function(){	
	/* CONFIG */		
		xOffset = 10;
		yOffset = 20;		
		// these 2 variable determine popup's distance from the cursor
		// you might want to adjust to get the right result		
	/* END CONFIG */		
	$(".imp_photo_w").hover(function(e){											  
		this.t = this.id;									  
		$("body").append("<p id='tooltip'>"+ this.t +"</p>");
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.fadeIn("fast");		
    },
	function(){
		this.name = this.t;		
		$("#tooltip").remove();
    });	
	$(".imp_photo_w").mousemove(function(e){
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	});
        
        $(".show-text1").hover(function(e){											  
		this.t = this.name;									  
		$("body").append("<p id='tooltip'>"+ this.t +"</p>");
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.fadeIn("fast");		
    },
	function(){
		this.name = this.t;		
		$("#tooltip").remove();
    });	
	$(".show-text1").mousemove(function(e){
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px");
	});
	
//for hotmail,gmail and aol
	$(".img_div1").hover(function(e){											  
		this.t = this.id;
		val = $(this).attr('name');
		$("body").append("<p id='tooltip'>"+ this.t +"</p>");
				
		if(val%6 == 0 && val >11 || val == 5 || val == 12){
			$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX - yOffset-150) + "px")
				.fadeIn("fast");	
		}else{
			$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX + yOffset) + "px")
				.fadeIn("fast");
		}		
			
    },
	function(){
		this.id = this.t;		
		$("#tooltip").remove();
    });	
	$(".img_div1").mousemove(function(e){
		val = $(this).attr('name');
		if(val%6 == 0 && val >11 || val == 5 || val == 12){
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX - yOffset-150) + "px");
		}else{
			$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX + yOffset) + "px");
		}
	});
 
        //for Yahoo Contacts
        $(".imp_photo_w").hover(function(e){											  
		this.t = this.id;
		val = $(this).attr('name');
		$("body").append("<p id='tooltip'>"+ this.t +"</p>");
				
		if(val%6 == 0 && val >11 || val == 5 || val == 12){
			$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX - yOffset-150) + "px")
				.fadeIn("fast");	
		}else{
			$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX + yOffset) + "px")
				.fadeIn("fast");
		}		
			
    },
	function(){
		this.id = this.t;		
		$("#tooltip").remove();
    });	
	$(".imp_photo_w").mousemove(function(e){
		val = $(this).attr('name');
		if(val%6 == 0 && val >11 || val == 5 || val == 12){
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX - yOffset-150) + "px");
		}else{
			$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX + yOffset) + "px");
		}
	});
        
	$("a.tooltip").hover(function(e){											  
		this.t = this.name;
									  
		$("body").append("<p id='tooltip'>"+ this.t +"</p>");
				
		$("#tooltip")
				.css("top",(e.pageY - xOffset) + "px")
				.css("left",(e.pageX - yOffset) + "px")
				.fadeIn("fast");	
		
    },
	function(){
		this.name = this.t;		
		$("#tooltip").remove();
    });	
	$("a.tooltip").mousemove(function(e){
		$("#tooltip")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX - yOffset) + "px");
	});	
	
};

// starting the script on page load
$(document).ready(function(){
	tooltip();
});