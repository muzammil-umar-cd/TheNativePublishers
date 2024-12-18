$(document).ready(function () {
    //responsive menu
    $(".menu-bottom").on("click", function () {
        $("html").toggleClass("menu-open")
    });
    $(".menu-bottom").click(function () {
        $(this).toggleClass("click")
    });

    //Lazy Load
    $('.lazy').lazy();

    //AOS
    AOS.init({ disable: 'mobile' });

    //Form Validate
    $(".validate-popupform").validate();
    $(".banner-form").validate();
    $(".footer-form").validate();
    $(".app_contact_form").validate();

    //Owl Carousel
    $('.owl-testimonial').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 25,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplaySpeed: 900,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            360: {
                items: 1
            }
        }
    });

    $('.owl-site-logo').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 30,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 800,
        navText: [""],
        responsive: {
            0: {
                items: 6,
            },
            600: {
                items: 6,
            },
            1000: {
                items: 6,
            },
            360: {
                items: 2,
            }
        }
    });


    $('#owljourney').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 0,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 300,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            360: {
                items: 1
            }
        }
    });
    $('.owl-owner').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplaySpeed: 900,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
            360: {
                items: 1
            }
        }
    });
    $('.owl-portfolio').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplaySpeed: 900,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 7,
            },
            360: {
                items: 3
            }
        }
    });
    $('.owl-service').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplaySpeed: 900,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 3,
            },
            360: {
                items: 1
            }
        }
    });
    $('.owl-choose').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 25,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 9000,
        autoplaySpeed: 900,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 4,
            },
            360: {
                items: 1
            }
        }
    });

    $("#toggle").click(function () {
        $(".ftr-link").toggleClass("hide")
    });

});



$('.chat').click(function () {
    $zopim.livechat.window.toggle();
});


function setButtonURL() {
    $zopim.livechat.window.toggle();
}
