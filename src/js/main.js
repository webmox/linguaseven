$(document).ready(function(){

    var  bg_header = $('.main_header_info');
    var  bg_section = $('.section-reviews');

    $(window).on('scroll', function(){
        var scroll_top = $(this).scrollTop();
        var move_top = -scroll_top/2;

        bg_header.css({'background-position':'center '+move_top+'px'});
    });

	 $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
	    $(this)
	      .addClass('active').siblings().removeClass('active')
	      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
	  });


    $('.wrap-reviews-carousel .owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        smartSpeed: 1800,
        items:1,
    })

    $('.carousel_review').owlCarousel({
        loop:false,
        nav:false,
        smartSpeed: 1200,
        items:1,
    })


     $('.slider-lang').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        speed:700,
        autoplaySpeed: 2000,
        centerPadding: '60px',
        centerMode: true,
    });


    $('.slider-teacher').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        speed:700,
        autoplaySpeed: 2000,
    });

    $('.carousel_sert').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        speed:700,
        autoplaySpeed: 2000,
    });

    
});