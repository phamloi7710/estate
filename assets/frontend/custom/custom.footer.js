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
        /*desktop*/
        if ($(window).width() > 1336 && $(this).scrollTop() > 480) {
          tab.addClass("scrollq-desktop");
          tab.removeClass("scrollq-ipad");
          tab.removeClass("scrollq-tablet");
          tab.removeClass("scrollq-mobile");
        }else /*Ipad*/
        if ($(window).width() >= 1024 && $(window).width() < 1336 && $(this).scrollTop() > 480) {
          tab.addClass("scrollq-ipad");
          tab.removeClass("scrollq-desktop");
          tab.removeClass("scrollq-tablet");
          tab.removeClass("scrollq-mobile");
        }
        /*Tablet*/
        else if ($(window).width() >= 992 && $(window).width() < 1024 && $(this).scrollTop() > 465) {
          tab.removeClass("scrollq-desktop");
          tab.removeClass("scrollq-mobile");
          tab.removeClass("scrollq-ipad");
          tab.addClass("scrollq-tablet");
        }
        /*Mobile*/
        else if ($(window).width() < 992 && $(this).scrollTop() > 465) {
          tab.addClass("scrollq-mobile");
          tab.removeClass("scrollq-desktop");
          tab.removeClass("scrollq-tablet");
          tab.removeClass("scrollq-ipad");
        }
        else{
          tab.removeClass("scrollq-desktop");
          tab.removeClass("scrollq-tablet");
          tab.removeClass("scrollq-mobile");
          tab.removeClass("scrollq-ipad");
        }
    });
});

