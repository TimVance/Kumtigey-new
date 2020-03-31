/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/
$(document).ready(function() {
	$(window).scroll(function() {
		if ($(window).width() > 1280) {
			if ($(window).scrollTop() > 200) {
				$(".fixedheader, .iblock-search").addClass("active");
			}
			else {
				$(".fixedheader, .iblock-search").removeClass("active");
			}
		}
	});
});