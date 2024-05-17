(function($) {
	$.fn.resSlider = function(option) {
		var $this = $(this);
		var $holder = $(this).children("ul").first();
		var originalImgWidth = $("img", $holder).width();
		var imgWidth = $("img", $holder).width();
		
		var a = {
			index: 0,
			currentIndex: 0,
			status: "play",
			timerWidth: 0,
			iniAnimation: new Date().getTime(), //time when animation was start
			stopAnimation: new Date().getTime(), //time when animation was stop
			htmlString: "",
			item: [],
			slideNext: function() {
				if ($holder.is(":animated")) return;
				
				if (a.status == "stop") {
					$(".timer", $this).clearQueue();
					$(".timer", $this).stop();
				}
				
				a.item.push(a.item[2]);
				a.item.splice(0, 1);
				
				$holder.clearQueue();
				var duration = a.index > 0 && Math.abs(a.index - a.currentIndex) > 1 ? 80 : option.duration;
				$holder.stop().animate({ marginLeft: -(3 * imgWidth) + "px" }, duration, function(){
					$holder.html(a.item.join(''));
					$holder.css("marginLeft", -(2 * imgWidth) + "px");
					
					if (a.index > 0 && parseInt($("img", $holder.children("li").eq(2)).attr("data-index")) != a.index) {
						a.slideNext();
					}
					else {
						a.setActivePagination();
						a.index = 0;
					}
					a.lock = false;
				});
				
				$(".timer", $this).css({width: 0, opacity:1, display: "block"});
			},
			slidePrev: function() {
				if ($holder.is(":animated")) return;
			
				if (a.status == "stop") {
					$(".timer", $this).clearQueue();
					$(".timer", $this).stop();
				}
				
				a.item.splice(0, 0, a.item[a.item.length - 3]);
				a.item.pop();
				
				$holder.clearQueue();
				var duration = a.index > 0 && Math.abs(a.index - a.currentIndex) > 1 ? 80 : option.duration;
				$holder.stop().animate({ marginLeft: -(imgWidth) + "px" }, duration, function() {
					$holder.html(a.item.join(''));
					$holder.css("marginLeft", -(2 * imgWidth) + "px");
					
					if (a.index > 0 && parseInt($("img", $holder.children("li").eq(2)).attr("data-index")) != a.index) {
						a.slidePrev();
					}
					else {
						a.setActivePagination();
						a.index = 0;
					}
				});
				
				$(".timer", $this).css({width: 0, opacity:1, display: "block"});
			},
			slideFromPagination: function (index) {
				if (option.stopOnCustomNavigation) {
					a.status = "stop";
					$("#loop-control").removeClass("pause");
					$("#loop-control").addClass("play");
				}
				
				a.status = a.status != "stop" ? "pause" : a.status;
				//get current index
				var currentIndex = parseInt($("img", $holder.children("li").eq(2)).attr("data-index"));
				if (currentIndex == index) return;
				
				this.index = index;
				this.currentIndex = currentIndex;
				
				if (a.status != "stop") {
					$(".timer", $this).stop().fadeOut('fast', function() {
						$(this).css({ width: 0 }).show();
						if (currentIndex > index) {
							a.slidePrev();
						}
						else {
							a.slideNext();
						}
						
						if (a.status != "stop") {
							a.status = "play";
							a.loop();
						}
					});
				}
				else {
					if (currentIndex > index) {
						a.slidePrev();
					}
					else {
						a.slideNext();
					}
				}
				
				a.iniAnimation = 0;
				a.stopAnimation = 0;
			},
			setActivePagination: function() {
				$(".pagination li.active", $this).removeClass("active");
				$(".pagination li[data-index='" + $("img", $holder.children("li").eq(2)).attr("data-index") + "']").addClass("active");
			},
			addPrevNextButton: function() {
				var $next = $("<a href='javascript:void(0);' class='next'>Next</a>");
				var $prev = $("<a href='javascript:void(0);' class='prev'>Prev</a>");
				$this.append($next);
				$this.append($prev);
				
				$next.on("click", function() {
					if ($holder.is(":animated")) return false;
					if (option.stopOnCustomNavigation) {
						a.status = "stop";
						$("#loop-control").removeClass("pause");
						$("#loop-control").addClass("play");
					}
					
					a.status = a.status != "stop" ? "pause" : a.status;
					
					if (a.status != "stop") {
						$(".timer", $this).clearQueue();
						$(".timer", $this).stop().fadeOut('fast', function() {
							$(this).css({ width: 0, opacity: 1 }).show();
							a.slideNext();
							
							window.setTimeout(function() {
								a.status = "play";
								a.loop();
							}, option.duration);
						});
					}
					else {
						a.slideNext();
					}
					a.iniAnimation = 0;
					a.stopAnimation = 0;
				});
				$prev.on("click", function() {
					if (option.stopOnCustomNavigation) {
						a.status = "stop";
						$("#loop-control").removeClass("pause");
						$("#loop-control").addClass("play");
					}
					
					a.status = a.status != "stop" ? "pause" : a.status;
					$(".timer", $this).stop().fadeOut('fast', function() {
						$(this).css({ width: 0, opacity: 1 }).show();
						a.slidePrev();
						
						window.setTimeout(function() {
							if (a.status != "stop") {
								a.status = "play";
								a.loop();
							}
						}, option.duration);
					});
					a.iniAnimation = 0;
					a.stopAnimation = 0;
				});
			},
			addPagination: function() {
				var $pagination = $("<div class='pagination' />")
				var $ol = $("<ol />");
				$pagination.append($ol);
				
				$.each($("img", $holder.children("li")), function(index, elem) {
					$ol.append("<li data-index='" + (index + 1) + "'>" + (index + 1) + "</li>");
					$(elem).attr("data-index", (index + 1));
				});
				
				$ol.children().eq(0).addClass("active");
				$ol.children().on("click", function() {
					a.slideFromPagination(parseInt($(this).text()));
				});
				
				$this.append($pagination);
			},
			addTimer: function() {
				var $timer = $("<div class='timer' />");
				$(".ctrl-wrap", $this).append($timer);
				a.timerWidth = $timer.width();
				$timer.css({ width: 0 });
			},
			addPlayButton: function() {
				var $btn = $("<div id='loop-control' class='" + (option.loop ? "pause" : "play") + "' />");
				$(".ctrl-wrap", $this).append($btn);
				$btn.on("click", function() {
					$(".timer", $this).show();
					if ($(this).hasClass("play")) {
						$(this).removeClass("play");
						$(this).addClass("pause");
						a.status = "playFromPause";
						a.loop();
					}
					else {
						$(this).removeClass("pause");
						$(this).addClass("play");
						
						a.status = "stop";
						$(".timer", $this).clearQueue();
						$(".timer", $this).stop();
						
						$holder.clearQueue();
						$holder.stop(true, true);
						a.stopAnimation = new Date().getTime(); //tracking pause time of animation
					}
				});
			},
			loop: function() {
				if (a.status == "playFromPause") {
					var remainDuration = option.loopInterval - (a.stopAnimation - a.iniAnimation);
					if (remainDuration > 0) {
						$(".timer", $this).animate({ width: a.timerWidth }, remainDuration, function() {
							$(this).fadeOut('fast', function() {
								$(this).css({ width: 0, opacity: 1 });
								a.slideNext();
								setTimeout(a.loop, option.duration + 10);
							});
							a.status = "play";
						});
						a.iniAnimation = new Date().getTime(); //tracking starttime of animation
					}
					else {
						a.status = "play";
						a.loop();
					}
				}
				else {
					$(".timer", $this).stop(true, true).animate({ width: a.timerWidth }, option.loopInterval, function() {
						$(this).fadeOut('fast', function() {
							$(this).css({ width: 0, opacity: 1 }).show();
							a.slideNext();
							setTimeout(a.loop, option.duration + 10);
						});
					});
					a.iniAnimation = new Date().getTime(); //tracking starttime of animation
				}
			},
			makeResizable : function() {
				$(window).on("resize", function(e) {
					var width = $(this).width();
					if (width <= originalImgWidth) {
						if ($this.css("overflow") != "hidden"){
							$this.css({ overflow: "hidden" });
						}
						
						$("img", $holder).css({ width: width });
						$holder.css({ marginLeft : -(2 * width) + "px" });
						imgWidth = width;
					}
					else {
						$("img", $holder).css({ width: originalImgWidth });
						$holder.css({ marginLeft : -(2 * originalImgWidth) + "px" });
						$this.css({ overflow: "visible" });
						imgWidth = originalImgWidth;
					}
					
					a.addToCache();
					$holder.css({ width: (imgWidth * $holder.children("li").length + 1) + "px" });
				});
			},
			staticResize : function() {
				var width = $(window).width();
				if (width <= originalImgWidth) {
					$("img", $holder).css({ width: width });
					$holder.css({ marginLeft : -(2 * width) + "px" });
					imgWidth = width;
				}
				else {
					$("img", $holder).css({ width: originalImgWidth });
					$holder.css({ marginLeft : -(2 * originalImgWidth) + "px" });
					imgWidth = originalImgWidth;
				}
				
				$holder.css({ width: (imgWidth * $holder.children("li").length + 1) + "px" });
			},
			addOverlay: function() {
				var html = "<div class='left-overlay' />";
				html += "<div class='right-overlay' />";
				$this.append(html);
			},
			positionOverlay: function() {
				var $leftOverlay = $(".left-overlay", $this);
				var $rightOverlay = $(".right-overlay", $this);
				var imgHeight = $("img", $holder).first().height();
				
				var pos = $holder.position();
				$leftOverlay.css({ position: "absolute", top: pos.top, left: -imgWidth, width: imgWidth, height: imgHeight });
				$leftOverlay.on("click", function() {
					$(".prev", $this).click();
				});
				
				$rightOverlay.css({ position: "absolute", top: pos.top, left: imgWidth, width: imgWidth, height: imgHeight });
				$rightOverlay.on("click", function() {
					$(".next", $this).click();
				});
			},
			addToCache: function() {
				a.item = [];
				a.htmlString = $holder.html();
				
				$holder.children().each(function() {
					a.item.push($("<ul />").append($(this).clone()).html());
				});
			},
			bindOtherEvent: function() {
				$this.on("mouseover", function() {
					if ($holder.is(":animated")) return;
					a.status = "stop";
					$(".timer", $this).clearQueue();
					$(".timer", $this).stop();
					
					$holder.clearQueue();
					$holder.stop(true, true);
					a.stopAnimation = new Date().getTime(); //tracking pause time of animation
				}).on("mouseout", function() {
					if ($("#loop-control").hasClass("pause") && a.status == "stop") {
						a.status = "playFromPause";
						a.loop();
					}
				});
			},
			init : function() {
				$holder.css({ position: "relative" });
				a.addPrevNextButton();
				a.addPagination();
				a.addOverlay();
				a.positionOverlay();
				//create a wrapper for play btn and progress bar
				$this.append("<div class='ctrl-wrap' />");
				a.addTimer();
				a.addPlayButton();
				
				$holder.prepend($holder.children("li").last().prev().andSelf().clone());
				
				$holder.css("marginLeft", -(2 * imgWidth) + "px");
				
				a.staticResize();
				a.makeResizable();
				a.bindOtherEvent();
				a.addToCache();
				
				if (option.loop)
					a.loop();
			}
		};
		
		a.init();
	}
})(jQuery);