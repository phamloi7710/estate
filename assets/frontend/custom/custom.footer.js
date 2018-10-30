$(document).ready(function(){
	var nav = $('#header');
		$(window).scroll(function () {
  		if ($(this).scrollTop() > 0) {
   			nav.addClass("scrollq");
  		} else {
   			nav.removeClass("scrollq");
  		}
 	});
	var tab = $('#tab');
        $(window).scroll(function () {
        if ($(window).width() > 992 && $(this).scrollTop() > 480) {
            tab.addClass("scrollq1");
            tab.removeClass("scrollq3");
        }else if ($(window).width() < 992 && $(this).scrollTop() > 300) {
          tab.removeClass("scrollq1");
          tab.addClass("scrollq3");
        } else {
            tab.removeClass("scrollq1");
            tab.removeClass("scrollq3");
        }
    });
});

