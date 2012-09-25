$(function () {
	// dom is ready
	
	$(".nav-menu-item").hover(function () {
		$(this).find(".nav-menu-bkg").css({"opacity": "1"});
	}, function () {
		$(this).find(".nav-menu-bkg").css({"opacity": "0.6"});
	})
	.click(function () {
		var $a = $(this).find(".nav-menu-link a");
		window.location = $a.attr("href");
	});
	
	$(".show-details").click(function () {
		var $this = $(this),
			$target = $("#" + $this.attr("data-target"));
		$target.toggle();
		if ($target.is(":visible")) {
			$this.find("a").html("Hide Details");
		} else {
			$this.find("a").html("Show Details");
		}
	});
});