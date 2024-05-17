(function(){
	var totalH = $(".devoted-support").closest(".row").innerHeight();
	var minH = $(".devoted-support").innerHeight();
	var reqH = totalH - minH;
	$(".devoted-support").css({ position: "relative", bottom: -reqH + "px" });
})();