var scrollItems = [],
    navigation = $('#top-menu'),
    scrolled;

$(window).on('load', function () {
    /*Preloader*/
    setTimeout(function () {
        $('#preloader').fadeOut('slow', function () {
        });
        $('body').removeClass('overflow');
    }, 200);

    /*animate elements*/
    /*animate elements*/
    if ($(window).outerWidth() >= 1024) {
        $('.anUpIcon').addClass('hidden');
        /*svg icon animation*/
        $('.icoAnimate').viewportChecker({
            offset: 100,
            callbackFunction: function (elem, action) {

                setTimeout(function () {
                    var ico1 = new Vivus('ico1',
                        {
                            type: 'sync',
                            duration: 80,
                            forceRender: false,
                            onReady: function () {
                                $('#ico1').css('visibility', 'visible');
                            }
                        })
                }, 500);
                setTimeout(function () {
                    var ico2 = new Vivus('ico2',
                        {
                            type: 'sync',
                            duration: 200,
                            forceRender: false,
                            onReady: function () {
                                $('#ico2').css('visibility', 'visible');
                            }
                        })
                }, 700);
                setTimeout(function () {
                    var ico3 = new Vivus('ico3',
                        {
                            type: 'sync',
                            duration: 200,
                            forceRender: false,
                            onReady: function () {
                                $('#ico3').css('visibility', 'visible');
                            }
                        })
                }, 900);

            }
        });

        $('.icoAnimate1').viewportChecker({
            offset: 100,
            callbackFunction: function (elem, action) {

                setTimeout(function () {
                    var ico1_social = new Vivus('ico1_social',
                        {
                            type: 'sync',
                            duration: 80,
                            forceRender: false,
                            onReady: function () {
                                $('#ico1_social').css('visibility', 'visible');
                            }
                        })
                }, 400);
                setTimeout(function () {
                    var ico2_social = new Vivus('ico2_social',
                        {
                            type: 'sync',
                            duration: 100,
                            forceRender: false,
                            onReady: function () {
                                $('#ico2_social').css('visibility', 'visible');
                            }
                        })
                }, 600);
                setTimeout(function () {
                    var ico3_social = new Vivus('ico3_social',
                        {
                            type: 'oneByOne',
                            duration: 100,
                            forceRender: false,
                            onReady: function () {
                                $('#ico3_social').css('visibility', 'visible');
                            }
                        })
                }, 800);

            }
        });

        /*animate*/
        $('.anFadeIn').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeIn',
            offset: 80
        });
        $('.anZoom').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated zoomIn',
            offset: 80
        });
        $('.anZoom2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated delay-1 zoomIn',
            offset: 100
        });
        $('.anZoom3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated delay-2 zoomIn',
            offset: 100
        });
        $('.textSlideAnFirst').viewportChecker({
            classToAdd: 'active animated',
            offset: 50
        });
        $('.textSlideAn').viewportChecker({
            classToAdd: 'active animated',
            offset: 100
        });
        $('.anLeft').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInLeftBig',
            offset: 100
        });
        $('.anLeft-2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 fadeInLeftBig',
            offset: 100
        });
        $('.anLeft-3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-3 fadeInLeftBig',
            offset: 100
        });
        $('.anLeft-4').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-4 fadeInLeftBig',
            offset: 100
        });
        $('.anRight').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInRightBig',
            offset: 100
        });
        $('.anRight-2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInRightBig sec-2',
            offset: 100
        });
        $('.anRight-3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInRightBig sec-3',
            offset: 100
        });
        $('.anRight-4').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInRightBig sec-4',
            offset: 100
        });
        $('.anUp').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInUp',
            offset: 100
        });
        $('.anUp1').viewportChecker({
            classToAdd: 'visible animated sec-1 fadeInUp',
            offset: 100
        });
        $('.anUp2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 fadeInUp',
            offset: 100
        });
        $('.anUp3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-3 fadeInUp',
            offset: 100
        });
        $('.anUp4').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-4 fadeInUp',
            offset: 100
        });
        $('.flipInX').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated flipInX',
            offset: 300
        });
        $('.anRight2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated fadeInRightBig',
            offset: 500
        });
        $('.bounceIn').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated bounceIn',
            offset: 200
        });
        $('.anLeftImg').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 bounceInMobileLeft',
            offset: 100
        });
        $('.anRightImg').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 bounceInMobileRight',
            offset: 100
        });
        $('.BallAnimate').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated BallAnimate',
            offset: 100
        });
        $('.Img1').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-1 fadeInLeftBig',
            offset: 100
        });
        $('.Img2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 fadeInLeftBig',
            offset: 100
        });
        $('.Img3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-3 fadeInLeftBig',
            offset: 100
        });
        $('.Img4').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-4 fadeInLeftBig',
            offset: 100
        });
        $('.bounceInItem1').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-1 fadeIn',
            offset: 200
        });
        $('.bounceInItem2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 fadeIn',
            offset: 200
        });
        $('.bounceInItem3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-3 fadeIn',
            offset: 200
        });
        $('.ImgRight1').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-1 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight3').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-3 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight4').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-4 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight5').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-5 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight6').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-6 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight7').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-7 fadeInRightBig',
            offset: 300
        });
        $('.ImgRight8').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-8 fadeInRightBig',
            offset: 300
        });
        $('.animationThreeSec1').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 animSlide1',
            offset: 400
        });
        $('.animationThreeSec2').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 animSlide2',
            offset: 400
        });
        $('.anLeftImgSlide').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 bounceInMobileLeft',
            offset: 0
        });
        $('.anRightImgSlide').addClass('hidden').viewportChecker({
            classToAdd: 'visible animated sec-2 bounceInMobileRight',
            offset: 0
        });

        /**/

        /*animate*/
    }
    /*animate elements END*/


});


jQuery(document).ready(function ($) {

    //SCROLL-SPY
    scrollSpy();

    $(window).scroll(function () {
        scrollSpy();
        if (scrolled >= scrollItems[2][0] - 350 && scrolled <= scrollItems[2][0]) {
            skillBarLaunch();
        }
    });

    $('.StartArrow').on('click', function (e) {
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top - 80
        }, 400);
    });

    $('.scroll').on('click', function (e) {
        e.preventDefault();
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top - 80
        }, 400);

        $(this).closest('.nav').find('li').removeClass('active');
        $(this).parent('li').addClass('active');
    });

    var typed = new Typed("#typed", {
        strings: ['<div class="h2">Hello! I\'m </div>\n<div class="h1">Eugen Radchenko</div>\n<div class="h3">Front end developer</div>'],
        typeSpeed: 50,
        backSpeed: 100,
        showCursor: false,
        smartBackspace: true,
        loop: false,
        fadeOut: true
    });

    /*btns*/

    /*menu-mobile-btn*/

    var mobile_btn = $('.c-hamburger'),
        header = $('.header-main'),
        menuList = $('.nav-holder');
    mobile_btn.on('click', function () {
        mobile_btn.toggleClass('is-active');
        header.toggleClass('open');
        menuList.slideToggle();
        $('body').toggleClass('nonScroll');
    });
    function mobileBtn() {
        if ($(window).outerWidth() >= 1025) {
            mobile_btn.removeClass('is-active');
            header.removeClass('open');
            menuList.show();
            $('body').removeClass('nonScroll');
        } else {
            menuList.hide();
            if (header.hasClass('open')) {
                menuList.show();
            }
        }
    }

    mobileBtn();

    $(window).resize(function () {
        mobileBtn();
        windowHeight();
        scrollSpy();
        if ($(window).outerWidth() <= 1024) {
            skillBarLaunch();
        }
    });

    menuList.find('.scroll').on('click', function () {
        if ($('.header-main').hasClass('open')) {
            mobile_btn.toggleClass('is-active');
            header.toggleClass('open');
            menuList.slideToggle();
            $('body').toggleClass('nonScroll');
        }
    });

    /*btns END*/

    /*match-height*/
    $('.matchHeight').matchHeight();


});

var skillBarLaunch = function () {
    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 3000);
    });
};

var windowHeight = function () {
    if ($(window).outerHeight() <= 359) {
        $('header').addClass('small-height');
    } else {
        $('header').removeClass('small-height');
    }
};

var scrollSpy = function () {

    navigation.find('li a').each(function () {
        scrollItems.push([$($(this).attr('href')).offset().top - parseInt($('body').css("padding-top")), $(this).attr('href')]);
    });
    scrolled = $(this).scrollTop();
    for (var i = 0; i < scrollItems.length; i++) {
        if (scrolled >= scrollItems[i][0]) {
            navigation.find('.scroll').each(function () {
                if ($(this).attr('href') === scrollItems[i][1]) {
                    $(this).closest('.nav').find('.scroll').removeClass('active');
                    $(this).addClass('active');
                }
            });
        }
    }

};
