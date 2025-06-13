/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/
checkScrollToTop = () => {};
$(document).ready(function () {
	$('.bx_filter_search_button_mobileclose').on('click', function () {
		if (window.matchMedia("(max-width: 950px)").matches) {
			$(".bx_filter_vertical").closest("div[id^=bx_incl]").show();
			$(".bx_filter_vertical, .bx_filter").slideToggle(333);
		}
	});
});
