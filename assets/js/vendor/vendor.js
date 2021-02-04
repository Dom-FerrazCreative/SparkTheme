jQuery(document).ready(function($) {
    $('.post-type-offset-slider .slider').slick({
        dots: true,
        infinite: false,
        variableWidth: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    draggable: true,
                    variableWidth: true,
                    infinite: true
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    variableWidth: false,
                    infinite: true
                }
            }
        ]
    });

    $('.left').click(function() {
        $('.post-type-offset-slider .slider').slick('slickPrev');
    });
    $('.right').click(function() {
        if ($(window).width() > 768) {
            if ($(".post-type-offset-slider .slider").css("marginLeft") !== '10px') {
                $(".post-type-offset-slider .slider").css('marginLeft', '10px');
                $(".slick-track").css('width', '3000px');
            } else {
                $('.post-type-offset-slider .slider').slick('slickNext');
            }
        } else {
            $('.post-type-offset-slider .slider').slick('slickNext');
        }
    });
    $('.slider').on('afterChange', function(event, slick, currentSlide) {
        if (slick.currentSlide >= slick.slideCount - slick.options.slidesToShow) {
            console.log('last slide')
        }
    });
});