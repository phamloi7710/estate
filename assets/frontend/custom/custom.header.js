$(document).ready(function(){
    $('#demo1').skdslider({
        slideSelector: '.slide',
        delay:5000,
        animationSpeed:2000,
        showNextPrev:true,
        showPlayButton:true,
        autoSlide:true,
        animationType:'fading'
    });
    $('#demo2').skdslider({
        slideSelector: '.slide',
        delay:5000, 
        animationSpeed: 1000,
        showNextPrev:true,
        showPlayButton:false,
        autoSlide:true,
        animationType:'sliding'
    });
});