
function getClientWidth() {
	return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
}

var MOVE_TRIGGER = 0;
var LOOP_TRIGGER = 0;

jQuery.fn.threesixty = function(options){
	options = options || {};
	options.images = options.images || [];
	options.method = options.method || "click" //can be click, mouse move or auto
	options.cycle = options.cycle || 1;
	options.resetMargin = options.resetMargin || 0;
	options.direction = options.direction || "forward";
	options.sensibility = options.sensibility || options.cycle * 0.35;
	options.autoscrollspeed = options.autoscrollspeed || 500;


	if (options.direction == "backward")
		options.images.reverse();

    return this.each(function(){
		var imgArr = [];
		var pic = $(this);

	$(function() {
		var cache = [];
		var parent = $("<div>");
		parent.css({height:pic.height(), width:pic.width(), overflow:"hidden", position:"relative"});
		//pic.wrap(parent).css({position:"relative",top:0,left:0});
		//parent = pic.parent();
		//Binding the progress bar
		//var progressBg = $("<div></div>").css({width:"100%", height:1, backgroundColor:"#e0e0e0", position:"absolute","top":"153px",left:"0px" }).addClass("progressBg");
		var progressBar = $("<div></div>").css({width:0, height:1, backgroundColor:"#4BB6DC", position:"absolute","top":"153px",left:"0px" }).data("progress",0).addClass("progressBar");
		var overlay;
		try {
		 overlay = $("<div></div>").css({cursor:"default", width:pic.width(), background:"RGBA(0,0,0,0.0)", height:pic.height(),  position:"absolute","top":0,left:0 }).addClass("overlay");
		}
		catch (e)
		{
		 overlay = $("<div></div>").css({cursor:"wait", width:pic.width(), height:pic.height(), backgroundColor:"black", filter:"alpha(opacity=70)",  position:"absolute","top":0,left:0 }).addClass("overlay");		
		}

		//Nasty overlay capturing all the events :P
		//overlay.click(function(e) { e.preventDefault(); e.stopPropagation(); });
		//overlay.mousedown(function(e) { e.preventDefault(); e.stopPropagation(); });
		//parent.appendTo();
		//$('.mid').append(overlay).append(progressBar);
		//$('.mid').append(overlay).append(progressBar);


		var totalProgress = 0;
		var loaded=false;
		//ask browser to load all images.. I know this could be better but is just a POC

		$.each(options.images, function(index, record) {
			var o =$("<img>").attr("src",record).load(function() {
				if (index>pic.data("tempIndex"))
				{
					//pic.data("tempIndex", index)
					//pic.attr("src", $(this).attr("src"))
				}	

				var progress = pic.parent().find(".progressBar");
				totalProgress++;
				var maxsize = pic.parent().find(".progressBg").width();
				var newWidth = (totalProgress/options.images.length)*maxsize;
				progress.stop(true,true).animate({width:newWidth},250);
				if (totalProgress == options.images.length-1)
				{	loaded=true;
					pic.parent().find(".overlay, .progressBar, .progressBg").remove();
				}
			});
			cache.push(o); 
		});

	})


		for (var x=1; x<=options.cycle; x++)
			for (var y=0; y<options.images.length; y++)
				imgArr.push(options.images[y]);

		pic.data("currentIndex",0).data("tempIndex",0);
		pic.data("scaled",false);
		pic.data("touchCount",0);
		var originalHeight = pic.height();
		var originalWidth = pic.width();

		function determineIndex(e)	//e represent the event for newIndex
		{
			return Math.floor((e.pageX - pic.offset().left) / (pic.width()/imgArr.length))
		}

		function moveInViewport(e) //e represents the finger in question
		{		$("#debug").text("left:" + e.pageX);
				var newTop = pic.data("refLocY") - pic.data("refTouchY") + e.pageY;
				var newLeft = pic.data("refLocX") - pic.data("refTouchX") + e.pageX;
				if (newLeft>0) newLeft=0;
				if (pic.parent().width() + Math.abs(newLeft) > pic.width())
					newLeft = -1*pic.width()+pic.parent().width();
				if (newTop>0) newTop=0;
				if (pic.parent().height() + Math.abs(newTop) > pic.height())
					newTop = -1*pic.height()+pic.parent().height();
	
				pic.css({left:newLeft, top:newTop});
		}

		pic.parent().mousemove(function(evt) {
			if(LOOP_TRIGGER == 1) 
				return
			if (!!pic.data("refTouchX") === false)
			{
				pic.data("refTouchX",evt.pageX);
				pic.data("refTouchY",evt.pageY);
				pic.data("refLocX",parseInt(pic.css("left")));
				pic.data("refLocY",parseInt(pic.css("top")));
			
			}

 			//evt.preventDefault();
 			if (pic.data("enabled")=="1" || options.method == "mousemove")
			{	
				if (evt.preventDefault) //evt.preventDefault();
				var e = evt;
				if (pic.data("scaled") == false)
				{
					var distance = e.pageX ; //distance hold the distance traveled with the finger so far..;
					stripeSize = Math.floor(getClientWidth() / imgArr.length);
					var newIndex = pic.data("currentIndex") + Math.floor(distance*options.sensibility/stripeSize)
					if (newIndex < 0) 
					{
						newIndex = imgArr.length-1;
						pic.data("currentIndex",newIndex);
					}
					newIndex = newIndex % imgArr.length;
					if (newIndex == pic.data("currentIndex"))
						return;

					if(Math.abs(pic.data("tempIndex")-newIndex) > 1 && MOVE_TRIGGER == 0) {
						MOVE_TRIGGER = 1;
						if(pic.data("tempIndex") > newIndex) {
							LOOP_TRIGGER = 1
							for (var i = pic.data("tempIndex"); i > newIndex; i--) {
								dif = pic.data("tempIndex") - newIndex;
							    (function(i){
							        setTimeout(function(){
							        	pic.attr("src",imgArr[(dif-i)]);
							        	pic.data("tempIndex",(dif-i));
							        	if((i-1) == newIndex) LOOP_TRIGGER = 0	
							        }, 50 * i);
							    }(i));
							} 	
						} else {
							LOOP_TRIGGER = 1
							for (var i = pic.data("tempIndex"); i < newIndex; i++) {
							    (function(i){
							        setTimeout(function(){
							        	pic.attr("src",imgArr[i]);
							        	pic.data("tempIndex",i);	
							        	if((i+1) == newIndex) LOOP_TRIGGER = 0	
							        }, 50 * i);
							    }(i));
							    						
							}

						}
					} else {
						//console.log(pic.data("tempIndex")+'   '+newIndex)
						pic.attr("src",imgArr[newIndex]);
						pic.data("tempIndex",newIndex);		
					}
				}
				else {	//The image needs to be moved in its viewport..
					moveInViewport(e);
				} 
				return;
			}	
		}).mouseleave(function(){
			MOVE_TRIGGER = 0;
			LOOP_TRIGGER = 0;
		})
		
		if (options.method == "click")
		{  //Certain binding will be done if and only if the method is "click" instead of "mousemove"
			pic.mousedown(function(e) {
				//e.preventDefault(); 
				pic.data("enabled","1"); 	
			});	
	
			$("body").mouseup(function(e) {
	 			//e.preventDefault();
	 			pic.data("enabled","0");
				pic.data("currentIndex",pic.data("tempIndex"));
			});
		}
		
		// control operation
		if (options.method == "controls")
		{
			pic.css({cursor:"default"});
			var allIndex = imgArr.length-1,
				newIndex = 0, // index current photo
				rotating = false, // flag najatali knoka dlya vrasheniya
				directRot = "left"; // storona vrasheniya
				
			jQuery("#rotateF").mousedown(
			function() {
				directRot = "left";
				rotating = true;
			});
			jQuery("#rotateF").mouseup(
			function() {
				rotating = false;
			});
			jQuery("#rotateB").mousedown(
			function() {
				directRot = "right";
				rotating = true;
			});
			jQuery("#rotateB").mouseup(
			function() {
				rotating = false;
			});
			
			function rotate(direct)
			{
				if(!rotating) return;
				if(directRot == "left") newIndex--;
				else newIndex++;
				if(newIndex < 0) newIndex = allIndex;
				if(newIndex > allIndex) newIndex = 0;
				pic.attr("src",imgArr[newIndex]);
			}
			setInterval(rotate,100);
		}
			
		
	});			
};
