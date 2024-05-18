$(document).ready(function(){

    $('.fa-bars').click(function(){
       $(this).toggleClass('fa-times');
       $('.navbar').toggleClass('nav-toggle');
   });

   $(window).on('load scroll',function(){
    //    $('.fa-bars').removeClass('fa-times');
    //    $('.navbar').removeClass('nav-toggle');

    //    if($(window).scrollTop()>35)
    //    {
    //        $('.header').css({'background':'#903EB4','box-shadow':'0 .2rem .5rem rgba(0,0,0,.4)'});
    //    }
    //    else
    //    {
    //        $('.header').css({'background':'none','box-shadow':'none'});
    //    }
   });

   const counters = document.querySelectorAll('.counter');
   const speed = 120;
   counters.forEach(counter => {
   const updateCount = () => {
       const target = +counter.getAttribute('data-target');
       const count = +counter.innerText;
       const inc = target / speed;
       if (count < target) {
           counter.innerText = count + inc;
           setTimeout(updateCount, 1);
       } else {
           counter.innerText = target;
       }
   };
     updateCount();
  });

  (function ($) {
   "use strict";

   $(".clients-carousel").owlCarousel({
       autoplay: true,
       dots: true,
       loop: true,
       responsive: { 0: {items: 2}, 768: {items: 4}, 900: {items: 6} }
   });

//    $(".testimonials-carousel").owlCarousel({
//        autoplay: true,
//        dots: true,
//        loop: true,
//        responsive: { 0: {items: 1}, 576: {items: 2}, 768: {items: 3}, 992: {items: 4} }
//    });

})(jQuery);

$(window).scroll(function () {
   if ($(this).scrollTop() > 100) {
       $('.back-to-top').fadeIn('slow');
   } else {
       $('.back-to-top').fadeOut('slow');
   }
});
$('.back-to-top').click(function () {
   $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
   return false;
});

$('.accordion-header').click(function(){
       $('.accordion .accordion-body').slideUp(500);
       $(this).next('.accordion-body').slideDown(500);
       $('.accordion .accordion-header span').text('+');
       $(this).children('span').text('-');
    });

});

// init Isotope
var $grid = $('.collection-list').isotope({
    // options
  });
  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    resetFilterBtns();
    $(this).addClass('active-filter-btn');
    $grid.isotope({ filter: filterValue });
  });

  var filterBtns = $('.filter-button-group').find('button');
  function resetFilterBtns(){
    filterBtns.each(function(){
      $(this).removeClass('active-filter-btn');
    });
  }


(function ($) {
    "use strict";
    // Page loading
    $(window).on('load', function() {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
        $("#onloadModal").modal('show');
    });

        /*-----Modal----*/

        $('.modal').on('shown.bs.modal', function (e) {
            $('.product-image-slider').slick('setPosition');
            $('.slider-nav-thumbnails').slick('setPosition');

            $('.product-image-slider .slick-active img').elevateZoom({
                zoomType: "inner",
                cursor: "crosshair",
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 750
            });
        })
})(jQuery);
