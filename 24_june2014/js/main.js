$(function(){
 
	var changeTooltipPosition = function(event) {
	  var tooltipX = event.pageX - 100;
	  var tooltipY = event.pageY + 8;
	  $('div.tooltip').css({top: tooltipY, left: tooltipX});
	  $('div.tooltip').css('font-size','13px');
	};
 
	var showTooltip = function(event) {
	  $('div.tooltip').remove();
	  $('<div class="tooltip">If you want to use your own message then please click on Save Message button.</div>')
            .appendTo('body');
	  changeTooltipPosition(event);
	};
 
	var hideTooltip = function() {
	   $('div.tooltip').remove();
	};
 
	$(".save-message").bind({
	   mousemove : changeTooltipPosition,
	   mouseenter : showTooltip,
	   mouseleave: hideTooltip
	});
});