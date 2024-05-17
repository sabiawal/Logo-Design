//for window resize check for design process
$(window).resize(function(){
	var w = $(this).width();
	
	if(w <= 750){
		$(".sief-design-desktop").show();
		$(".sief-design-device").show();
	}
	else{
		$(".sief-design-device").show();
		$(".sief-design-desktop").show();
	}
});

//for static window check for design process
function staticTurnOver(){
	var w = $(window).width();
	if(w <= 750){
		$(".sief-design-desktop").show();
		$(".sief-design-device").show();
	}
	else{
		$(".sief-design-device").show();
		$(".sief-design-desktop").show();
	}
}
staticTurnOver();

//for pop out chat window on clicking on [Live Chat "HI"] and [Live Support "HI"]
var winW1 = $(window).width();
var hiIcon = $(".live-support-cover").find("i");
var liveSupportTxt = $(".live-support-cover").find("a");
var liveChat = $(".live-chat");
var packageChat = $(".chat-service");
var actionPop = (function(){
	window.open("http://messenger.providesupport.com/messenger/pradyumna.html", "_blank", "width=600,height=650");
});
hiIcon.on("click", actionPop);
liveSupportTxt.on("click", actionPop);
liveChat.on("click", actionPop);
packageChat.on("click", actionPop);



//for active turnover effect for the tab === "Websites" in home page
$("#all-package-pic").find(".stack").each(function(){
	var who = $(this);
	var whoPos = $(this).index();
	var effectArea = $("#package-body").find("tr");
	
	if(who.hasClass("active")){
		effectArea.each(function(){
			$(this).find("td").eq(whoPos + 1).addClass("active");
		});
	}
	
	who.on("click", function(){
		$("#all-package-pic").find(".stack").removeClass("active");
		effectArea.find("td").removeClass("active");
		who.addClass("active");
		effectArea.each(function(){
			$(this).find("td").eq(whoPos + 1).addClass("active");
		});
	});
});

//for right align caption in the inner page banner
if($(".right-align-ban-caption").hasClass("banner-caption")){
	$("#inner-cont-banner").find(".banner-caption").css({ left: "" });
	$(".right-align-ban-caption").css({ right: "0" });
}

//for packages item info box at right side
var holder = $("#package-body").find("tr")
holder.each(function(){
	var target = $(this).find("td:eq(0)").find("a");
	var targetH = $(this).find("th:eq(0)").find("a");
	function action(itemData){
			itemData.mouseenter(function(){
			var who = $(this).attr("data");
			if($(this).attr("data") == who){
				var targetContent = $("#package-item-info").find("[data='" + who + "']").html();
				$(".package-info-box").html(targetContent);
			}
			var winH = $(window).height();
			var targetH = $(".package-info-box").innerHeight();
			var nutralPoint = ((winH - targetH) / 2);
			if(targetH < winH){
				$(".package-info-box").css('top', nutralPoint + "px");
			}
			$(".package-info-box").show();
		}).mouseleave(function(){
			$(".package-info-box").hide();
			$(".package-info-box").html('');
		});
	}
	action(target);
	action(targetH);
});

//for packages item info box at right side of Added Packages
var holder = $("#package-body2").find("tr")
holder.each(function(){
	var target = $(this).find("td:eq(0)").find("a");
	var targetH = $(this).find("th:eq(0)").find("a");
	function action(itemData){
			itemData.mouseenter(function(){
			var who = $(this).attr("data");
			if($(this).attr("data") == who){
				var targetContent = $("#package-item-info2").find("[data='" + who + "']").html();
				$(".package-info-box").html(targetContent);
			}
			var winH = $(window).height();
			var targetH = $(".package-info-box").innerHeight();
			var nutralPoint = ((winH - targetH) / 2);
			if(targetH < winH){
				$(".package-info-box").css('top', nutralPoint + "px");
			}
			$(".package-info-box").show();
		}).mouseleave(function(){
			$(".package-info-box").hide();
			$(".package-info-box").html('');
		});
	}
	action(target);
	action(targetH);
});

$(function(){
	//alert ('ok');
	$(".package-info-box,#package-item-info .package-info-box").css({"text-align": "justify"});
	$("#package-item-info h4,#package-item-info2 h4").css({"margin-bottom": "25px"});
});


