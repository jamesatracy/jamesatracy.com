$(function () {
	var wHeight = $(window).height();
	var $sections = $(".top-level");
	var $arrowtop = $("#arrow-top");
	
	// scroll handler
	$(window).scroll(function () {
		// window scroll top position
		var wScrollTop = $(window).scrollTop();
		// are we at the bottom of the page?
		var bottom = (wScrollTop == ($(document).height() - wHeight));
		
		// loop over each section
		$sections.each(function () {
			// offset of the header
			var offset = $(this).offset();
			var threshold = wScrollTop + (wHeight / 3);
			
			if (offset.top < threshold || bottom) {
				$(this).find(".header").addClass("blue");
				$(this).css("opacity", 1);
			} else {
				$(this).find(".header").removeClass("blue");
				$(this).css("opacity", 0.5);
			}
		});
		
		// arrow top
		if (wScrollTop > (wHeight / 2)) {
			$arrowtop.fadeIn("slow");
		} else {
			$arrowtop.fadeOut("slow");
		}
	});
	
	// resize handler
	$(window).resize(function () {
		wHeight = $(window).height();
	});
	
	$(".top-level").css("opacity", 0.5);
	
	//console.log(wHeight);
});
