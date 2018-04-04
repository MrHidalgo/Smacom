function windowscroll(yscroll,scrollspeed){
  window.scrollBy(0,-9000);
  for (var iscroll=0;iscroll<yscroll;iscroll++){
    setTimeout('window.scrollBy(0,' + iscroll + ')',scrollspeed*iscroll);
  }
}

var DELTA = 0;
var DELTA_MIN = 0;
var DELTA_MAX = 0;  
var VIDEO_TRIGGER = 0;

function playVideo(){
		if(VIDEO_TRIGGER == 0) {
			$('#video').bind('inview', function (event, visible) {	
				if(visible == true)		
		   		document._video = document.getElementById("video");
		   		document._video.play();
		   		VIDEO_TRIGGER = 1;				
			});	
		}	
}

function getAnimation(){
	if($('.overlay').length == 0) {
		$('.animationGroup').each(function(){
			$(this).bind('inview', function (event, visible) {
			    if (visible == true ) {
					$(this).find('.object_left, .object_right, .subcat').each(function(i, el){
						setTimeout(function(){
							$(el).addClass('roundAnimation').bind('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function(e){
						});
						},200 + ( i * 200 ));	
				})	
			    }
			});
		})
	}
}


function isOnScreen(elem)	{
	    var docViewTop = $(window).scrollTop();
	    var docViewBottom = docViewTop + $(window).height();
	    var elemTop = $(elem).offset().top;
	    var elemBottom = elemTop + $(elem).height();
	    return ((elemTop <= docViewTop+$(window).height()-$(window).height()*-0.02-200));
	}

function getCurrentCat(){
	var currentElement;
	$('.cat').each(function(){
		if($(window).scrollTop() >= $(this).offset().top-78) {
			currentElement = this;
		} else {
			return false;
		}
		$('#nav li').removeClass('current');
		$("#nav li[rel^="+$(currentElement).attr('id')+"]").addClass('current');
	})
}


function moveAnimate(element, newPos){
        element = $(element);
        newPos= $(newPos)[0]; 
        element.stop(true,false).animate( {'top': newPos.offsetTop+95, 'left':newPos.offsetLeft+65}, 400);
    }

function showHidden(element, id) {
	if( $(element).hasClass('open') ){
		if( !id){
			$(element).parent().find('.hidden').each(function(){
				$(this).slideUp(500);
			})
		} else {
			$('#'+id).slideUp(500);
			$('.overlay').css('height',$('.popup').height()+200).css('overflow','hidden').css('top',TOP);
		}
		$(element).text('подробнее').removeClass('open');			
		
	} else {
		if( !id){
			$(element).parent().find('.hidden').each(function(){
				$(this).slideDown(500);
			})
		} else {
			$('#'+id).slideDown(500);
			$('.overlay').css('height',$('.popup').height()+200).css('overflow','hidden').css('top',TOP);
		}
		$(element).text('свернуть').addClass('open');	
	}
}

function displayHidden(element, id) {
	if( $(element).hasClass('open') ){
		if( !id){
			$(element).parent().find('.hidden').each(function(){
				$(this).css('display','none');
				popupOffsetTop = 0;
				if($(window).width() > 1234) {
					popupOffsetTop = 200;
				}			
				$('.overlay').css('height',$('.popup').height()+popupOffsetTop-80).css('overflow','hidden').css('top',TOP);
			})
		} else {
			$('#'+id).css('display','none');
		}
		$(element).text('подробнее').removeClass('open');		
	} else {
		if( !id){
			$(element).parent().find('.hidden').each(function(){
				$(this).css('display','inline');
				popupOffsetTop = 0;
				if($(window).width() > 1234) {
					popupOffsetTop = 200;
				}			
				$('.overlay').css('height',$('.popup').height()+popupOffsetTop-80).css('overflow','hidden').css('top',TOP);
			})
		} else {
			$('#'+id).css('display','inline');
		}
		$(element).text('свернуть').addClass('open');	
	}

}


function showConsist(element){
	popupOffsetTop = 0;
	if($(window).width() > 1234) {
		popupOffsetTop = 200;
	}	
	if($(element).hasClass('active')){
		$(element).removeClass('active');
		$(element).siblings('.consistInside').slideUp(function(){
			if($('.popup').height() < $(window).height() ) {
				$('.overlay').addClass('fixed');
			} else {
				$('.overlay').removeClass('fixed');
			}			
		});		
	} else {
		$(element).addClass('active');
		$(element).siblings('.consistInside').slideDown(function(){		
				if($('.popup').height() < $(window).height() ) {
					$('.overlay').addClass('fixed');
				} else {
					$('.overlay').removeClass('fixed');
				}			
		});	
	}

}

$(window).resize(function(){

	if($('.popup').height() < $(window).height() ) {
		$('.overlay').addClass('fixed');
	} else {
		$('.overlay').removeClass('fixed');
	}	
	playVideo();
	getAnimation();
	getCurrentCat();
	console.log($(window).width())
	if($('.menuSwitcher').hasClass('open')){
		if($(this).width() > 810) {
			$('.wrapper, .navSmall, .menuSwitcher').transition({ x: '0' },function(){
				$(this).attr('style','');
				$('.menuSwitcher').removeClass('open');	
			});			
		} 
	}
	if($(this).width() > 810) {
		$('.bannerWrap').fadeIn(1);	
	} else {
		$('.bannerWrap').fadeOut(1);
	}
});


function transform(now){
	return {
		'WebkitTransform' : 'translate3d(0, '+(now)+'px, 0)',
		'MozTransform'		:	'translate3d(0, '+(now)+'px, 0)',
		'OTransform'			:	'translate(0, '+(now)+'px)',
		'msTransform' 		: 'translate3d(0, '+(now)+'px, 0)',
		'transform'         : 'translate3d(0, '+(now)+'px, 0)',
		}
}

var delta ;


function move(delta) {
	$('.wrapper').stop(false,false).animate({
		myTransform: delta
	},{ 
	            	duration: 500,
				    easing: "swing",
		            step : function(now, fx){
			            $(this).css(transform(now));
		           }
	           })

}

function c(t) {
	console.log(t)
}





$(document).ready(function(){ 
	playVideo();
	getAnimation();
	  $('.banners').superslides({
	    slide_easing: 'easeInOutCubic',
	    slide_speed: 800,
	    pagination: true,
	    scrollable: true
	  });
	 $('body').jpreLoader({loaderVPos:"50%", showPercentage : 0}, function(){
	 	$('.imageStack').remove();
	 });

});	


$(window).scroll(function() {
	
	$('.wrapper').bind('mousewheel', function(event, delta, deltaX, deltaY) {
		event.preventDefault();
   		event.returnValue=false;
		DELTA += deltaY*50
	    	move(DELTA);  
	});
 
	playVideo();
	getAnimation();
	getCurrentCat();
	scrollFlag = 0;
	if($(window).scrollTop() > 0 && !$('#subnav').hasClass('closed') && scrollFlag == 0 && $('.overlay').length == 0){
		scrollFlag = 1;
			$('#subnav').stop(true,true).animate({
				 top: '-115px'
			  }, 400);
			$('#subnav').find('.es-nav-prev').stop(true,true).animate({
				 top: '55px'
			  }, 400);
			$('#subnav').find('.es-nav-next').stop(true,true).animate({
				 top: '55px'
			  }, 400);
	} else {
		scrollFlag = 0;
			$('#subnav').stop(true,true).animate({
				 top: '-20px'
			  }, 400);
			$('#subnav').find('.es-nav-prev').stop(true,true).animate({
				 top: '5px'
			  }, 400);
			$('#subnav').find('.es-nav-next').stop(true,true).animate({
				 top: '5px'
			  }, 400);		
	}

});

$(window).load(function() {

	getAnimation();
	playVideo();
			
if($(this).width() <= 810 ){
	$('.bannerWrap').fadeOut(1);		
}
    deck = new $.scrolldeck({
        buttons: '#nav li a',
        slides: '.cat',
        duration: 1000,
        easing: 'easeInOutExpo',
    	offset: 70
    });    
    deck = new $.scrolldeck({
        buttons: '#navSmall li a',
        slides: '.cat',
        duration: 1000,
        easing: 'easeInOutExpo',
    	offset: 50
    });

    $('.navSmall li a').click(function(){
		console.log($('.menuSwitcherWrapper').hasClass('open'));
		if($('.menuSwitcherWrapper').hasClass('open')) {
			$('.wrapper, .navSmall, .menuSwitcherWrapper').transition({ x: '0' },function(){
				$('.menuSwitcherWrapper').removeClass('open');
			});
		} else {
			$('.wrapper, .navSmall, .menuSwitcherWrapper').transition({ x: '-195px' }, function(){
				$('.menuSwitcherWrapper').addClass('open');
			});
		}
    })
  
	function onAfter(){
		$('.dummy').css('marginTop','0');
		$('.bannerWrap').addClass('loaded');
	}

	$('.menuSwitcherWrapper').click(function(){
		if($(this).hasClass('open')) {
			$('.wrapper, .navSmall, .menuSwitcherWrapper').transition({ x: '0' },function(){
				$('.menuSwitcherWrapper').removeClass('open');	
			});		
		} else {
			$('.wrapper, .navSmall, .menuSwitcherWrapper').transition({ x: '-195px' }, function(){
				$('.menuSwitcherWrapper').addClass('open');
			});					
		}
	})

    $('#factsFeed').elastislide({imageW:430});	
    getCurrentCat();

	$('#bg1').parallax("50%", 0.1);


	$('#subnav').mouseenter(function(){
		if($(window).scrollTop() > 0) {
			$(this).stop(true,true).animate({
				 top: '-20px'
			  }, 400);
			$(this).find('.es-nav-prev').stop(true,true).animate({
				 top: '5px'
			  }, 400);
			$(this).find('.es-nav-next').stop(true,true).animate({
				 top: '5px'
			  }, 400); 
		}
	}).mouseleave(function(){
		if($(window).scrollTop() > 0) {
			$(this).stop(true,true).animate({
				 top: '-115px'
			  }, 400);
			$(this).find('.es-nav-prev').stop(true,true).animate({
				 top: '55px'
			  }, 400);
			$(this).find('.es-nav-next').stop(true,true).animate({
				 top: '55px'
			  }, 400);
		}	     
	});

	$('#subnav').elastislide({imageW:220});	
	$('#liquid-slider1').liquidSlider({  animateIn:'lightSpeedIn',animateOut:'lightSpeedIn', mobileNavigation:false});
	var arr = [], x;
	arr.length = 0;
	for (x=2; x<= 18; x++)
		arr.push("img/rotate/1/" +x + ".jpg");
	$('#rotate1').threesixty({images:arr, method:'mousemove', 'cycle':1, direction:"forward", sensibility:1});
		arr2 = [];
	for (x=2; x<= 9; x++)
		arr2.push("img/rotate/2/" +x + ".jpg");
	$('#rotate2').threesixty({images:arr2, method:'mousemove', 'cycle':1, direction:"forward", sensibility:1});	


	$('.logo a').click(function(){
		$(window).scrollTo(0,500);
		return false;

	})
	$('.filter').click(function(){
		$('.filter').removeClass('active');
		$(this).addClass('active');
		tab = $(this).attr('href');
		$('.subcats').fadeOut(500,function(){
			
			$(tab).fadeIn();
			$(tab+' .animationGroup').find(' .subcat').each(function(i, el){
				setTimeout(function(){
					$(el).addClass('roundAnimation').bind('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function(e){
					//DO WHATEV
					//$(el).css('opacity',1);
				});
				},200 + ( i * 200 ));	
			})
			$('.subcat:hidden').removeClass('roundAnimation');				
		});
		return false;
	})
});	


