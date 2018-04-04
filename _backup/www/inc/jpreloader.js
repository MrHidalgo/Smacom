/*
 * jPreLoader - jQuery plugin
 * Create a Loading Screen to preload images and content for you website
 *
 * Name:			jPreLoader.js
 * Author:		Kenny Ooi - http://www.inwebson.com
 * Date:			July 11, 2012		
 * Version:		2.1
 * Example:		http://www.inwebson.com/demo/jpreloader-v2/
 *	
 */

function getRandomNumberFromRange(min, max, widthout_this) {
    for (var i = min, ar = []; i <= max; i++) {
        ar[i - 1] = i;
    }
    if (widthout_this != undefined) {
        ar.splice(widthout_this, 1);
    }
    return ar[Math.floor(Math.random() * ar.length)]

}

(function ($) {
    var items = new Array(),
        errors = new Array(),
        onComplete = function () {
        },
        current = 0;

    var jpreOptions = {
        splashVPos: '35%',
        loaderVPos: '75%',
        splashID: '#jpreContent',
        showSplash: true,
        showPercentage: true,
        autoClose: true,
        closeBtnText: 'Start!',
        onetimeLoad: false,
        debugMode: false,
        splashFunction: function () {
        }
    }

    //cookie
    var getCookie = function () {
        if (jpreOptions.onetimeLoad) {
            var cookies = document.cookie.split('; ');
            for (var i = 0, parts; (parts = cookies[i] && cookies[i].split('=')); i++) {
                if ((parts.shift()) === "jpreLoader") {
                    return (parts.join('='));
                }
            }
            return false;
        } else {
            return false;
        }

    }
    var setCookie = function (expires) {
        if (jpreOptions.onetimeLoad) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + expires);
            var c_value = ((expires == null) ? "" : "expires=" + exdate.toUTCString());
            document.cookie = "jpreLoader=loaded; " + c_value;
        }
    }

    //create jpreLoader UI
    var createContainer = function () {

        jOverlay = $('<div></div>')
            .attr('id', 'jpreOverlay')
            .css({
                position: "fixed",
                top: 0,
                left: 0,
                width: '100%',
                height: '100%',
                zIndex: 9999999
            })
            .appendTo('body');

        if (jpreOptions.showSplash) {
            if (lang == "ru") {
                jContent = $('<div>\
								<div id="jpreSlideCell">\
									<img src="img/preloader/Logo.png" />\
									<div id="desc">\
										<div id="text1">Производство высококачественного продукта быстрого приготовления.</div>\
										<div id="text2">Ваш личный шеф-повар</div>\
										<div id="text3">Инновационное производство, не имеющее аналогов в Украине</div>\
									</div>\
								</div>\
							</div>')
                    .attr('id', 'jpreSlide')
                    .appendTo(jOverlay);
            } else if (lang == "ua") {
                jContent = $('<div>\
								<div id="jpreSlideCell">\
									<img src="img/preloader/Logo.png" />\
									<div id="desc">\
										<div id="text1">Ваш власний шеф​​-кухар</div>\
										<div id="text2">Ваш власний шеф​​-кухар</div>\
										<div id="text3">Ваш власний шеф​​-кухар</div>\
									</div>\
								</div>\
							</div>')
                    .attr('id', 'jpreSlide')
                    .appendTo(jOverlay);
            } else {
                jContent = $('<div>\
								<div id="jpreSlideCell">\
									<img src="img/preloader/Logo.png" />\
									<div id="desc">\
										<div id="text1">Your personal chef!</div>\
										<div id="text2">Your personal chef!</div>\
										<div id="text3">Your personal chef!</div>\
									</div>\
								</div>\
							</div>')
                    .attr('id', 'jpreSlide')
                    .appendTo(jOverlay);
            }
            var text_id = getRandomNumberFromRange(1, 3);
            var buff;
            $('#text' + text_id).fadeIn();

            var conWidth = $(window).width() - $(jContent).width();

            $(jContent).html($(jpreOptions.splashID).wrap('<div/>').parent().html());
            $(jpreOptions.splashID).remove();
            jpreOptions.splashFunction()
        }
        if (jpreOptions.showPercentage) {
            jPer = $('<div></div>')
                .attr('id', 'jprePercentage')
                .appendTo($('#jpreSlideCell'))
                .html('Loading...');
        }

        jLoader = $('<div></div>')
            .attr('id', 'jpreLoader')
            .appendTo(jOverlay);

        var posWidth = $(window).width() - $(jLoader).width();
        $(jLoader).css({
            position: 'absolute',
            top: jpreOptions.loaderVPos,
            left: Math.round((50 / $(window).width()) * posWidth) + '%'
        });

        jBar = $('<div>\
				<div id="per2"><span  style="background-image:url(img/preloader/3.png)" alt="" ></span></div>\
				<div id="per4"><span  style="background-image:url(img/preloader/1.png)" alt="" ></span></div>\
				<div id="per6"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per8"><span  style="background-image:url(img/preloader/5.png)" alt="" ></span></div>\
				<div id="per10"><span  style="background-image:url(img/preloader/2.png)" alt="" ></span></div>\
				<div id="per12"><span  style="background-image:url(img/preloader/7.png)" alt="" ></span></div>\
				<div id="per14"><span  style="background-image:url(img/preloader/6.png)" alt="" ></span></div>\
				<div id="per16"><span  style="background-image:url(img/preloader/8.png)" alt="" ></span></div>\
				<div id="per18"><span  style="background-image:url(img/preloader/4.png)" alt="" ></span></div>\
				<div id="per20"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per22"><span  style="background-image:url(img/preloader/1.png)" alt="" ></span></div>\
				<div id="per24"><span  style="background-image:url(img/preloader/7.png)" alt="" ></span></div>\
				<div id="per26"><span  style="background-image:url(img/preloader/3.png)" alt="" ></span></div>\
				<div id="per28"><span  style="background-image:url(img/preloader/8.png)" alt="" ></span></div>\
				<div id="per30"><span  style="background-image:url(img/preloader/2.png)" alt="" ></span></div>\
				<div id="per32"><span  style="background-image:url(img/preloader/5.png)" alt="" ></span></div>\
				<div id="per34"><span  style="background-image:url(img/preloader/4.png)" alt="" ></span></div>\
				<div id="per36"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per40"><span  style="background-image:url(img/preloader/1.png)" alt="" ></span></div>\
				<div id="per42"><span  style="background-image:url(img/preloader/8.png)" alt="" ></span></div>\
				<div id="per44"><span  style="background-image:url(img/preloader/6.png)" alt="" ></span></div>\
				<div id="per46"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per48"><span  style="background-image:url(img/preloader/4.png)" alt="" ></span></div>\
				<div id="per50"><span  style="background-image:url(img/preloader/3.png)" alt="" ></span></div>\
				<div id="per51"><span  style="background-image:url(img/preloader/2.png)" alt="" ></span></div>\
				<div id="per54"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per56"><span  style="background-image:url(img/preloader/7.png)" alt="" ></span></div>\
				<div id="per58"><span  style="background-image:url(img/preloader/8.png)" alt="" ></span></div>\
				<div id="per60"><span  style="background-image:url(img/preloader/5.png)" alt="" ></span></div>\
				<div id="per62"><span  style="background-image:url(img/preloader/3.png)" alt="" ></span></div>\
				<div id="per64"><span  style="background-image:url(img/preloader/6.png)" alt="" ></span></div>\
				<div id="per66"><span  style="background-image:url(img/preloader/4.png)" alt="" ></span></div>\
				<div id="per68"><span  style="background-image:url(img/preloader/8.png)" alt="" ></span></div>\
				<div id="per70"><span  style="background-image:url(img/preloader/1.png)" alt="" ></span></div>\
				<div id="per72"><span  style="background-image:url(img/preloader/2.png)" alt="" ></span></div>\
				<div id="per74"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per76"><span  style="background-image:url(img/preloader/5.png)" alt="" ></span></div>\
				<div id="per78"><span  style="background-image:url(img/preloader/8.png)" alt="" ></span></div>\
				<div id="per80"><span  style="background-image:url(img/preloader/4.png)" alt="" ></span></div>\
				<div id="per82"><span  style="background-image:url(img/preloader/5.png)" alt="" ></span></div>\
				<div id="per84"><span  style="background-image:url(img/preloader/2.png)" alt="" ></span></div>\
				<div id="per86"><span  style="background-image:url(img/preloader/7.png)" alt="" ></span></div>\
				<div id="per88"><span  style="background-image:url(img/preloader/6.png)" alt="" ></span></div>\
				<div id="per90"><span  style="background-image:url(img/preloader/4.png)" alt="" ></span></div>\
				<div id="per92"><span  style="background-image:url(img/preloader/3.png)" alt="" ></span></div>\
				<div id="per94"><span  style="background-image:url(img/preloader/9.png)" alt="" ></span></div>\
				<div id="per96"><span  style="background-image:url(img/preloader/2.png)" alt="" ></span></div>\
				<div id="per98"><span  style="background-image:url(img/preloader/1.png)" alt="" ></span></div>\
				<div id="per100"><span  style="background-image:url(img/preloader/5.png)" alt="" ></span></div>\
			</div>')
            .attr('id', 'jpreBar')
            .css({
                width: '0%',
                height: '100%'
            })
            .appendTo(jLoader);


        if (!jpreOptions.autoclose) {
            jButton = $('<div></div>')
                .attr('id', 'jpreButton')
                .on('click', function () {
                    loadComplete();
                })
                .appendTo(jLoader)
                .text(jpreOptions.closeBtnText)
                .hide();
        }
    }

    //get all images from css and <img> tag
    var getImages = function (element) {
        $(element).find('*:not(script)').each(function () {
            var url = "";

            if ($(this).css('background-image').indexOf('none') == -1 && $(this).css('background-image').indexOf('-gradient') == -1) {
                url = $(this).css('background-image');
                if (url.indexOf('url') != -1) {
                    var temp = url.match(/url\((.*?)\)/);
                    url = temp[1].replace(/\"/g, '');
                }
            } else if ($(this).get(0).nodeName.toLowerCase() == 'img' && typeof($(this).attr('src')) != 'undefined') {
                url = $(this).attr('src');
            }

            if (url.length > 0) {
                items.push(url);
            }
        });
    }

    //create preloaded image
    var preloading = function () {
        for (var i = 0; i < items.length; i++) {
            if (loadImg(items[i]));
        }
    }
    var loadImg = function (url) {
        var imgLoad = new Image();
        $(imgLoad)
            .load(function () {

                completeLoading();
            })
            .error(function () {
                errors.push($(this).attr('src'));
                completeLoading();
            })
            .attr('src', url);
    }

    //update progress bar once image loaded
    var completeLoading = function () {
        current++;

        var per = Math.round((current / items.length) * 100);
        if (per % 2 == 0) {
            $('#per' + per).fadeIn();
        }
        $(jBar).stop().animate({
            width: per + '%'
        }, 500, 'linear');

        if (jpreOptions.showPercentage) {
            $(jPer).text(per + "%");
        }

        //if all images loaded
        if (current >= items.length) {
            current = items.length;
            setCookie();	//create cookie

            if (jpreOptions.showPercentage) {
                $(jPer).text("100%");
            }

            //fire debug mode
            if (jpreOptions.debugMode) {
                var error = debug();
            }


            //max progress bar
            $(jBar).stop().animate({
                width: '100%'
            }, 500, 'linear', function () {
                //autoclose on
                if (jpreOptions.autoClose)
                    loadComplete();
                else
                    $(jButton).fadeIn(1000);
            });
        }
    }

    //triggered when all images are loaded
    var loadComplete = function () {
        if (window.location.hash.length > 1) {
            hash_splitted = window.location.hash.split('_');
            id = parseInt(hash_splitted[0].substring(4));
            url = 'cat';

            var filter;

            if (id >= 0 && id <= 6)
                filter = 1;
            else if (id >= 7 && id <= 14)
                filter = 2;
            else if (id >= 15 && id <= 20)
                filter = 3;
            else if (id >= 21 && id <= 23 || id === 37)
                filter = 4;
            else if (id >= 24 && id <= 28)
                filter = 5;
            else if (id >= 29)
                filter = 6;


            $('.wrapper.home').hide().addClass('hidden');
            $('body').append('<div class="ajaxed finished"></div>');
            $('.imageStack').remove();
            $('#subnav' + filter).transition({y: 0}, 0).removeClass('closed');
            $('.wrapper.home .scrollDown').hide();
            if (navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
                $('.ajaxed .scrollDown').remove();
            } else {
                $('.ajaxed .scrollDown').hide().fadeIn();
            }
            $('.subnavHeader, #subNavSmall' + filter).addClass('open');
            $('.back').transition({x: 0}, 0);
            $('#subnav' + filter + ' ul li a').removeClass('active');
            $('#subnav' + filter + ' ul li a#cat_link_' + id).addClass('active');
            getAnimation();
            $('.back').show();
            pageHistory.push({template: url, id: id});
            $.ajax({
                type: 'GET',
                url: 'templates/' + lang + '/' + url + id + '.html',
                beforeSend: function () {
                },
                success: function (data) {
                    $(jOverlay).remove();
                    $('.ajaxed').html(data);
                    $(jOverlay).animate({opacity: 0}, 500, function () {
                        $('body').css('overflow', 'visible').css('position', 'relative');
                        if (hash_splitted[1]) {
                            getPopup(hash_splitted[1], 1)
                        }
                    });
                }
            });
        } else {
            $(jOverlay).animate({opacity: 0}, 500, function () {
                $(jOverlay).remove();
                $('body').css('overflow', 'visible').css('position', 'relative');
                getAnimation();
                onComplete();	//callback function
            });
        }
    };

    //debug mode
    var debug = function () {
        if (errors.length > 0) {
            var str = 'ERROR - IMAGE FILES MISSING!!!\n\r'
            str += errors.length + ' image files cound not be found. \n\r';
            str += 'Please check your image paths and filenames:\n\r';
            for (var i = 0; i < errors.length; i++) {
                str += '- ' + errors[i] + '\n\r';
            }
            return true;
        } else {
            return false;
        }
    }

    $.fn.jpreLoader = function (options, callback) {
        if (options) {
            $.extend(jpreOptions, options);
        }
        if (typeof callback == 'function') {
            onComplete = callback;
        }

        //show preloader once JS loaded
        $('body').css({
            'display': 'block'
        });

        return this.each(function () {
            if (!(getCookie())) {
                createContainer();
                getImages(this);
                preloading();
            }
            else {	//onetime load / cookie is set
                $(jpreOptions.splashID).remove();
                onComplete();
            }
        });
    };

})(jQuery);