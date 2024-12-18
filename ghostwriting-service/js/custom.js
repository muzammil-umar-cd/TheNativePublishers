// logo start
$(".logo-box_wrppr").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: true,
    // speed: 300,
    slidesToShow: 12,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 3000,
    // arrows: false,
    // dots: false,
    pauseOnHover: true,
    cssEase: 'linear',


    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 7,
                slidesToScroll: 1,
                infinite: false,
                dots: false,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
    ],
});

// logo end

// logo start
$(".client-logo-slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 4000,
    // arrows: false,
    // dots: false,
    pauseOnHover: true,
    cssEase: 'linear',
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: false,
                dots: false,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
    ],
});

// logo end

// genre-slider start
$(".genre-slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: true,
    autoplay: false,
    autoplaySpeed: 0,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: false,
                dots: false,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// genre-slider end

// package_slider start

$(".package_slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: false,
    autoplay: false,
    autoplaySpeed: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                dots: false,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// package_slider end

// client-slider start

$(".client-slider").slick({
    dots: false,
    arrows: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fas fa-long-arrow-left"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fas fa-long-arrow-right"></i></button>',
    infinite: false,
    autoplay: false,
    autoplaySpeed: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                dots: false,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

// client-slider end

// wow animation js

// $(function () {
//     new WOW().init();
// });


// responsive menu js

// $(function () {
//     $('#menu').slicknav();
// });

// slick slider in tabs js end


$('.read_more_btnn').click(function(e) {
    e.preventDefault();
    $('.paragraph_boxx').toggleClass('h-auto')
    if ($('.paragraph_boxx').hasClass('h-auto')) {
        $(this).html('Read Less')
    } else {
        $(this).html('Read More')
    }
});



$('.readmore_btnn').click(function(e) {
    e.preventDefault();
    $('.paragraph_box_two').toggleClass('h-auto')
    if ($('.paragraph_box_two').hasClass('h-auto')) {
        $(this).html('Read Less');
        $(this).addClass('move_left');
    } else {
        $(this).html('Read More');
        $(this).removeClass('move_left');
    }
});