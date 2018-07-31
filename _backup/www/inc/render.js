var lastHomeCat;
var TOP;

function mobileDetection() {
    if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
        return true;
    } else {
        return false;
    }
}

function elementTranslate(element, pixels, duration) {
    $(element).css({
        'transition': 'transform ' + duration + ' linear',
        '-ms-transition': '-ms-transform ' + duration + ' linear',
        '-o-transition': '-o-transform ' + duration + ' linear',
        '-webkit-transition': '-webkit-transform ' + duration + ' linear',
        '-moz-transition': '-moz-transform ' + duration + ' linear',
        '-webkit-transform': 'translate3d(' + pixels + ')',
        '-moz-transform': 'translate3d(' + pixels + ')',
        '-o-transform': 'translate3d(' + pixels + ')',
        '-ms-transform': 'translate3d(' + pixels + ')',
        'transform': 'translate3d(' + pixels + ')'
    });
}


function renderInnerPage(element, url, id, slideBack) {
    if (element && !$('.home').hasClass('hidden')) {
        lastHomeCat = $(element).closest('.cat');
    }

    var filter;

    if (id >= 0 && id <= 6)
        filter = 1;
    else if (id >= 7 && id <= 14)
        filter = 2;
    else if (id >= 15 && id <= 20)
        filter = 3;
    else if (id >= 21 && id <= 23 || id === 37)
        filter = 4;
    else if (id >= 24 && id <= 28 || id === 39)
        filter = 5;
    else if (id >= 29)
        filter = 6;

    var moveSide;

    if (slideBack) {
        $('body').append('<div class="ajaxed slideBack"></div>');
        moveSide = '';
    } else {
        $('body').append('<div class="ajaxed"></div>');
        moveSide = '-';
    }

    if (url != 'home') {
        $.ajax({
            type: 'GET',
            url: 'templates/' + lang + '/' + url + id + '.html',
            beforeSend: function () {},
            success: function (data) {
                window.location.hash = url + id;
                $('.wrapper.home').hide().addClass('hidden');
                $('#header').hide();
                $('.ajaxed').not('.finished').html(data).transition({x: moveSide + '100%'}, 500, 'ease', function () {
                    $('.subnav').addClass('closed');
                    $('.ajaxed.finished').remove();
                    $(this).attr('style', '').addClass('finished');
                    $.scrollTo(0, 0);
                    $('#subnav' + filter).transition({y: 0}, 500).removeClass('closed');
                    $('.wrapper.home .scrollDown').hide();
                    if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
                        $('.ajaxed .scrollDown').remove();
                    } else {
                        $('.ajaxed .scrollDown').hide().fadeIn();
                    }
                    $('.subnavHeader, #subNavSmall' + filter).addClass('open');
                    $('.back').transition({x: 0}, 500);
                    $('#subnav' + filter + ' ul li a').removeClass('active');
                    $('#subnav' + filter + ' ul li a#cat_link_' + id).addClass('active');

                    getAnimation();
                    $('.back').show();

                    if (!slideBack)
                        pageHistory.push({template: url, id: id})
                });
            }
        });
    } else {
        $('.ajaxed').hide();
        window.location.hash = '';
        $('.subnavHeader, .subNavSmall').removeClass('open');
        $('.subnav').transition({y: -300}, 500).addClass('closed');
        $('.back').transition({x: -300}, 500, function () {
            offsetTop = 0;

            $('.wrapper.home.hidden').transition({x: '100%'}, function () {
                $('.wrapper.home .scrollDown').show();
                $('.wrapper.home').show().removeClass('hidden').attr('style', '');
                $('#header').show();
                $('.ajaxed').remove();
            });
        });
    }
    return false;
}


function getPopup(link, without_hash) {
    if (!without_hash) {
        window.location.hash += '_' + link
    }

    TOP = $(window).scrollTop();
    var popupOffsetTop = 0;
    $.ajax({
        url: 'templates/' + lang + '/' + link + '.html',
    }).done(function (data) {
        $('body').addClass('overlayed');

        var popup = '<div class="overlay" ><div class="overlayCell"><div class="popup" >' + data + '</div></div></div>';

        $('body').prepend(popup);

        if ($(window).width() > 1234) {
            popupOffsetTop = 200;
        }
        $('.popup img').one('load', function () {
            $('.wrapper').css('marginTop', '-' + TOP + 'px').css('height', $('.popup').height() + parseInt($('.overlayCell').css('padding-top')) * 2 + TOP).css('position', 'fixed');
            $(window).scrollTo(0);
            $('.overlay').transition({opacity: 1});
        }).each(function () {
            if (this.complete) $(this).load();
        });
        $('#ls3').liquidSlider({slideEaseDuration: 700, mobileNavigation: false, swipe: false});

        if ($('.overlay').height() < $(window).height()) {
            $('.overlay').addClass('fixed');
        }
    });
}

function popupRemove() {
    cat = window.location.hash.split("_");
    window.location.hash = cat[0];
    $('.overlay').transition({opacity: 0}, function () {
        $('.overlay').remove();
    });
    $('.wrapper').attr('style', '');
    $(window).scrollTo(TOP);
}

function exportlink() {
    $('#subnav4 li a.link-export').click( function(e) {
            pageHistory.back('home');
        }
    );
}