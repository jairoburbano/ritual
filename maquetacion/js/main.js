(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        body = $('body'),
        html = $('html');
    function headerFixed() {
        var header = $('.header'),
            banner = $('.banner'),
            scroll = $(window).scrollTop();
        if (scroll >= 60) {
            header.addClass('fill-header');
        } else {
            header.removeClass("fill-header");
        }
        if(windowSize < 1180) {
            if (scroll >= 80) {
                banner.addClass('banner--fixed');
            } else {
                banner.removeClass("banner--fixed");
            }
        }
    }
    function homeMenu() {
        var header = $('.header');
        if (body.hasClass('home')) {
            header.addClass('home-menu');
        }
    }
    function awards() {
        var text = $('.award__text'),
            maxHeight = -1;
        text.each(function() {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });
        text.height(maxHeight);
    }
    function mennuMobile() {
        if(windowSize < 740) {
            var slide = $('.slide-menu'),
                topBar = $('.line-top'),
                iconMobile = $('.icon-mobile'),
                header = $('.header');
            iconMobile.click(function() {
                slide.stop().slideToggle();
                topBar.toggleClass('active');
                header.toggleClass('home-menu');
            });
        }
    }
    function homeScroll() {
        var scrollButton = $('.js-banner__scroll'),
            scrollHere = $('.js-scroll__here');
        scrollButton.click(function() {
            $('html, body').animate({
                scrollTop: scrollHere.offset().top
            }, 700);
        });
    }
    function instagramTouch() {
        var instagramItem = $('.images--instagram__item');
        if(html.hasClass('touch')) {
            instagramItem.click(function() {
                $(this).find('.images--instagram__content').fadeToggle(300);
                $(this).siblings().find('.images--instagram__content').fadeOut(300);
            });
        }
    }
    function instagramHome() {
        if(windowSize > 730 && windowSize < 1180) {
            var firstItem = $('.images--instagram__item:nth-child(1)').width(),
                secondItem = $('.images--instagram__item:nth-child(2)'),
                secondItemWidth = $('.images--instagram__item:nth-child(2)').width(),
                secondItemPadding = firstItem - secondItemWidth;
            secondItem.css('margin-top', secondItemPadding);
        }
    }
    function searchBar() {
        if(windowSize > 740) {
            var search = $('.search'),
                iconSearch = $('.send-group svg');
            if(search.not('open')) {
                iconSearch.click(function() {
                    search.addClass('open');
                });
            }
        }
    }
    function logoPages() {
        var logo = $('.logo');
        if(body.hasClass('home')) {
            logo.removeClass('inside');
        }
    }
    /*Slider description single vino*/
    function sliderDescription() {
        if(windowSize < 740) {
            var $container = $('.js-description'), 
                $grid = $container.imagesLoaded(function() {
                    $container.flexslider({
                        animation: 'slide',
                        controlNav: false,
                        prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                        nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>'
                    });
                });
        }
    }
    /*Slider related single vino*/
    function sliderRelated() {
        if(windowSize < 740) {
            var $container = $('.js-related-slide'), 
                $grid = $container.imagesLoaded(function() {
                    $container.flexslider({
                        animation: 'slide',
                        prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                        nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>'
                    });
                });
        }
    }
    function sliderGallery() {
        var slide = $('.js-slider__gallery'),
            slideContent = $('.gallery'),
            fullscreen = $('.js-fullscreen'),
            altura = $window.height(),
            texto = $('.gallery__text p');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
        fullscreen.click(function() {
            if(fullscreen.hasClass('open-gallery')) {
                slideContent.removeClass('slider--fullscreen');
                fullscreen.removeClass('open-gallery');
                slide.find('ul li').css('height', 490);
            } else {
                slideContent.addClass('slider--fullscreen');
                fullscreen.addClass('open-gallery');
                slide.find('ul li').css('height', altura);
            }
            setTimeout(function(){ slide.resize(); }, 350);

        });
    }
    function serviceForm() {
        var trigger = $('.servicios--items--box'),
            items   = $('.servicios--items'),
            close   = $('.icon-slide-close'),
            slide   = $('.servicios--items--slide');

        trigger.on('click', function(){
            var $this   = $(this);

            items.stop(true, true).addClass('back-color');

            if ( $this.parent().hasClass('active') ) {
                $this.parent().siblings().removeClass('back-color');
                $this.parent().removeClass('back-color');
            }

            var target = $this.siblings('.servicios--items--slide');
            $this.parent().find('.servicios--items--slide').stop().slideToggle(300, function(){
                $('html, body').stop().animate({
                    'scrollTop': target.offset().top - 20
                }, 900, 'swing');
            });
            $this.parent().stop().toggleClass('active');
            $this.parent().siblings().find('.servicios--items--slide').slideUp(300);
            $this.parent().siblings().removeClass('active');


            // if ($('.servicios--items--box').length) {
            //     var scrollhere = $(this).parent().offset().top;
            //     console.log(scrollhere);
            //     $('html, body').animate({ scrollTop: scrollhere}, 300);
            // }

        });

        close.on('click', function(){
            slide.stop().slideUp();
            items.stop().removeClass('back-color');
        });
    }
    function imagesBanner() {
        $('#image').css("background-image", "url(img/random/" + Math.floor(Math.random()*4) + ".jpg)");
    }
    mennuMobile();
    homeMenu();
    homeScroll();
    instagramTouch();
    instagramHome();
    searchBar();
    logoPages();
    sliderDescription();
    sliderRelated();
    sliderGallery();
    serviceForm();
    headerFixed();
    imagesBanner();
    awards();
    $(window).scroll(function() {
        headerFixed();
    });
    $(window).resize(function() {
        instagramHome();
    });
})(jQuery);
