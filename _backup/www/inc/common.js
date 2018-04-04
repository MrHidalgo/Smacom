function OpenInNewTab(el) {
    var win = window.open(el.getAttribute("link"), '_blank');
    win.focus();
}


function isiPad() {
    return (navigator.platform.indexOf("iPad") != -1);
}


function windowscroll(yscroll, scrollspeed) {
    window.scrollBy(0, -9000);
    for (var iscroll = 0; iscroll < yscroll; iscroll++) {
        setTimeout('window.scrollBy(0,' + iscroll + ')', scrollspeed * iscroll);
    }
}

var VIDEO_TRIGGER = 0;
var TAB1_HEIGHT;
var TAB2_HEIGHT;

function playVideo() {
    if (VIDEO_TRIGGER == 0) {
        $('#video').bind('inview', function (event, visible) {
            if (visible == true)
                document._video = document.getElementById("video");
            document._video.play();
            VIDEO_TRIGGER = 1;
        });
    }
}

function getAnimation() {
    if ($('.overlay').length == 0) {
        $('.animationGroup').each(function () {
            $(this).bind('inview', function (event, visible) {
                if (visible == true) {
                    $(this).find('.object_left, .object_right, .subcat').each(function (i, el) {
                        setTimeout(function () {
                            $(el).addClass('roundAnimation').bind('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function (e) {

                            });
                        }, 200 + ( i * 200 ));
                    })
                }
            });
        })
    }
}


function isOnScreen(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemTop <= docViewTop + $(window).height() - $(window).height() * -0.02 - 200));
}

function getCurrentCat() {
    var currentElement;
    $('.cat').each(function () {
        if ($(window).scrollTop() >= $(this).offset().top - 78) {
            currentElement = this;
        } else if ($(window).scrollTop() == 0) {
            $("#nav li[rel^=" + $(currentElement).attr('id') + "]").removeClass('current');
        } else {
            return false;
        }
        $('#nav li').removeClass('current');
        $("#nav li[rel^=" + $(currentElement).attr('id') + "]").addClass('current');
    })
}


function moveAnimate(element, newPos) {
    element = $(element);
    newPos = $(newPos)[0];
    element.stop(true, false).animate({'top': newPos.offsetTop + 95, 'left': newPos.offsetLeft + 65}, 400);
}

function showHidden(element, id) {
    if ($(element).hasClass('open')) {
        if (!id) {
            $(element).parent().find('.hidden').each(function () {
                $(this).slideUp(500);
            })
        } else {
            $('#' + id).slideUp(500);
            $('.overlay').css('height', $('.popup').height() + 200).css('overflow', 'hidden').css('top', TOP);
        }
        if (lang == "ru") {
            $(element).text('подробнее').removeClass('open');
        } else if (lang == "ua") {
            $(element).text('докладніше').removeClass('open');
        } else {
            $(element).text('more').removeClass('open');
        }

    } else {
        if (!id) {
            $(element).parent().find('.hidden').each(function () {
                $(this).slideDown(500);
            })
        } else {
            $('#' + id).slideDown(500);
            $('.overlay').css('height', $('.popup').height() + 200).css('overflow', 'hidden').css('top', TOP);
        }
        if (lang == "ru") {
            $(element).text('свернуть').addClass('open');
        } else if (lang == "ua") {
            $(element).text('згорнути').addClass('open');
        } else {
            $(element).text('hide').addClass('open');
        }
    }
}

function displayHidden(element, id) {
    if ($(element).hasClass('open')) {
        if (!id) {
            $(element).parent().find('.hidden').each(function () {
                $(this).css('display', 'none');
                popupOffsetTop = 0;
                if ($(window).width() > 1234) {
                    popupOffsetTop = 200;
                }
                $('.overlay').css('height', $('.popup').height() + popupOffsetTop - 80).css('overflow', 'hidden').css('top', TOP);
            })
        } else {
            $('#' + id).css('display', 'none');
        }
        if (lang == "ru") {
            $(element).text('подробнее').removeClass('open');
        } else if (lang == "ua") {
            $(element).text('докладніше').addClass('open');
        } else {
            $(element).text('more').removeClass('open');
        }

    } else {
        if (!id) {
            $(element).parent().find('.hidden').each(function () {
                $(this).css('display', 'inline');
                popupOffsetTop = 0;
                if ($(window).width() > 1234) {
                    popupOffsetTop = 200;
                }
                $('.overlay').css('height', $('.popup').height() + popupOffsetTop - 80).css('overflow', 'hidden').css('top', TOP);
            })
        } else {
            $('#' + id).css('display', 'inline');
        }
        if (lang == "ru") {
            $(element).text('свернуть').addClass('open');
        } else if (lang == "ua") {
            $(element).text('згорнути').addClass('open');
        } else {
            $(element).text('hide').addClass('open');
        }

    }

}


function showConsist(element) {
    if ($(window).width() > 640) {
        popupOffsetTop = 0;
        if ($(window).width() > 1234) {
            popupOffsetTop = 200;
        }
        if ($(element).hasClass('active')) {
            $(element).removeClass('active');
            $(element).siblings('.consistInside').slideUp(function () {
                if ($('.popup').height() < $(window).height()) {
                    $('.overlay').addClass('fixed');
                } else {
                    $('.overlay').removeClass('fixed');
                }
            });
        } else {
            $(element).addClass('active');
            $(element).siblings('.consistInside').slideDown(function () {
                if ($('.popup').height() < $(window).height()) {
                    $('.overlay').addClass('fixed');
                } else {
                    $('.overlay').removeClass('fixed');
                }
            });
        }
    }

}

$(window).resize(function () {
    if ($(window).width() > 1023) {
        TAB1_HEIGHT = $('#subcat1').height();
        TAB2_HEIGHT = $('#subcat2').height();
        if ($('.popup').height() < $(window).height()) {
            $('.overlay').addClass('fixed');
        } else {
            $('.overlay').removeClass('fixed');
        }
    }
    playVideo();
    getAnimation();
    getCurrentCat();
    if ($('.menuSwitcher').hasClass('open')) {
        if ($(this).width() > 810) {
            $('.wrapper, .navSmall, .menuSwitcher').transition({x: '0'}, function () {
                $(this).attr('style', '');
                $('.menuSwitcher').removeClass('open');
            });
        }
    }
    if ($(this).width() > 810) {
        $('.bannerWrap').fadeIn(1);
    } else {
        $('.bannerWrap').fadeOut(1);
    }
});

$(document).ready(function () {
    playVideo();
    getAnimation();
    if (isiPad() || (navigator.userAgent.match(/AppleWebKit/) && !navigator.userAgent.match(/Chrome/))) {
        $('.banners').superslides({
            slide_easing: 'linear',
            animation: 'fade',
            pagination: true
        });
    } else {
        $('.banners').superslides({
            slide_easing: 'easeInOutCubic',
            slide_speed: 800,
            pagination: true,
            scrollable: true,
            play: 7000
        });
    }
    $('body').on('banners.initialized', '#slides', function () {
        console.log('Superslides initialized')
    })

    $('body').jpreLoader({loaderVPos: "50%", showPercentage: 1}, function () {
        $('.imageStack').remove();
    });
    setTimeout(function () {
        $('.arrowDynamic').addClass('fadein');
    }, 500)
    setTimeout(function () {
        $('.arrowStatic').addClass('fadein');
    }, 750)
    setTimeout(function () {
        $('.arrowBottom').addClass('fadein');
    }, 1000)
    setInterval(function () {
        $('.scrollDown div').removeClass('fadein');
        setTimeout(function () {
            $('.arrowDynamic').addClass('fadein');
        }, 500);
        setTimeout(function () {
            $('.arrowStatic').addClass('fadein');
        }, 750);
        setTimeout(function () {
            $('.arrowBottom').addClass('fadein');
        }, 1000);
    }, 3000)


});
$(window).scroll(function () {
    playVideo();
    getAnimation();
    getCurrentCat();
    scrollFlag = 0;
});

$(window).load(function () {
    TAB1_HEIGHT = $('#subcat1').height();
    TAB2_HEIGHT = $('#subcat2').height();

    getAnimation();
    playVideo();

    if ($(this).width() <= 810) {
        $('.bannerWrap').fadeOut(1);
    }
    deck = new $.scrolldeck({
        buttons: '#nav li.nav__item a',
        slides: '.cat',
        duration: 1000,
        easing: 'easeInOutExpo',
        offset: 0
    });
    deck = new $.scrolldeck({
        buttons: '#navSmall li a',
        slides: '.cat',
        duration: 1000,
        easing: 'easeInOutExpo',
        offset: 60
    });

    $('.navSmall li a').click(function () {
        $('.menuSwitcherWrapper').trigger('click');
    })

    function onAfter() {
        $('.dummy').css('marginTop', '0');
        $('.bannerWrap').addClass('loaded');
    }

    $('.menuSwitcherWrapper').click(function () {
        if ($(this).hasClass('open')) {
            $('.wrapper, .navSmall, .menuSwitcherWrapper').transition({x: '0'}, function () {
                $('.menuSwitcherWrapper').removeClass('open');
            });
        } else {
            $('.wrapper, .navSmall, .menuSwitcherWrapper').transition({x: '-195px'}, function () {
                $('.menuSwitcherWrapper').addClass('open');
            });
        }
    })

    $('#factsFeed').elastislide({imageW: 430});
    getCurrentCat();


    if (!isiPad()) {

        $('#bg1').parallax("50%", 0.1);
        $('#bg2').parallax("50%", 0.1)
    }

    var timer;

    $('.subnav--hover-js').mouseenter(function () {
        if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
            timer = setTimeout(function () {
                $('.subnav--hover-js').stop(true, true).animate({
                    top: '-20px'
                }, 400);
                $('.subnav--hover-js').find('.es-nav-prev').stop(true, true).animate({
                    top: '5px'
                }, 400);
                $('.subnav--hover-js').find('.es-nav-next').stop(true, true).animate({
                    top: '5px'
                }, 400);
            }, 200);
        }

    }).mouseleave(function () {
        clearTimeout(timer);
        $(this).stop(true, true).animate({
            top: '-115px'
        }, 400);
        $(this).find('.es-nav-prev').stop(true, true).animate({
            top: '55px'
        }, 400);
        $(this).find('.es-nav-next').stop(true, true).animate({
            top: '55px'
        }, 400);

    });

    $('.subnav--hover-js .es-carousel-wrapper').elastislide({imageW: 190});
    $('#liquid-slider1').liquidSlider({autoHeight: false, slideEaseDuration: 700, mobileNavigation: false});

    $('.logo a').click(function () {
        $(window).scrollTo(0, 500);
        return false;

    })
    $('.scrollDown').click(function () {
        $(window).scrollTo($('#block1'), 1000);

    })
    $('.filter').click(function () {
        tab = $(this).attr('href');
        if (tab == '#subcat2' && $(window).width() > 1023) {
            $('#subcat2').height(TAB1_HEIGHT);
        }
        $('.filter').removeClass('active');
        $(this).addClass('active');
        $('.subcats:not(' + tab + ')').fadeOut(500, function () {

            $(tab).fadeIn(500, function () {
                if ($(window).width() > 1023) {
                    if (tab == '#subcat2') {
                        $('#subcat2').animate({height: TAB2_HEIGHT + "px"}, 1500)
                    } else {
                        $('#subcat1').animate({height: TAB1_HEIGHT + "px"}, 1500)
                    }
                }
            });
            $(tab + ' .animationGroup').find(' .subcat').each(function (i, el) {
                setTimeout(function () {
                    $(el).addClass('roundAnimation').bind('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function (e) {
                    });
                }, 200 + ( i * 200 ));
            })
            $('.subcat:hidden').removeClass('roundAnimation');
        });
        return false;
    })
});