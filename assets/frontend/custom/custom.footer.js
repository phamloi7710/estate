$(document).ready(function(){
	var nav = $('#header');
		$(window).scroll(function () {
  		if ($(this).scrollTop() > 100) {
   			nav.addClass("scrollq");
  		} else {
   			nav.removeClass("scrollq");
  		}
 	});
	var tab = $('#tab');
        $(window).scroll(function () {
        if ($(this).scrollTop() > 710) {
            tab.addClass("scrollq1");
        } else {
            tab.removeClass("scrollq1");
        }
    });
});
