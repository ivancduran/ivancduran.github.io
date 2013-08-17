// Kraken Framework 0.6
var Kraken = function(_options){

console.time("Kraken Load Time");

var _default = {
	pagesize : { state : true, width: 1024, },
	overflow : { state : true, x : false, y : true },
	bgimg : { state : true, img : '004', size : 'default'},
	bgcolor : { state : true, color : '0fa1e0' },
	largewrap : { state : true, rest : 'default' },
	wrapshadow : { state : true, intense : 'default', size : 'default'},
	slider : { state : true, auto : true, pager : false, nav : true, speed : 500},
	menu : { state : true, submenu: true, },
	span : { state : true, multiply : '10' },
	interval : { state : false, timer : '2000'},
	hide : { state : true, resize : true, size : 700 },
	fonts : {},
}

var Plugin = function(_options){
	var kraken = $.extend(true, _default, _options);
	//If state = true
	this.init();
	if(kraken.pagesize.state) 		this.pagesize(kraken.pagesize);
	if(kraken.overflow.state) 		this.overflow(kraken.overflow);
	if(kraken.bgimg.state) 			this.bgimg(kraken.bgimg);
	if(kraken.bgcolor.state) 		this.bgcolor(kraken.bgcolor);
	if(kraken.largewrap.state) 		this.largewrap(kraken.largewrap);
	if(kraken.wrapshadow.state) 	this.wrapshadow(kraken.wrapshadow);
	if(kraken.slider.state) 		this.slider(kraken.slider);
	// if(kraken.menu.state) 			this.menu(kraken.hide);
	if(kraken.span.state) 			this.menu(kraken.span);
	if(kraken.hide.state) 			this.menu(kraken.hide);
}

Plugin.prototype = {
		init: function () {
			function MenuBack(options){
				if(options){
					$(".nav a").on('click',function(event) {
						if(!$('.menuBack').is(":visible")){
						var altura = $('body').height();
						   	event.preventDefault();
							// $('.nav ul li').addClass('click');
							$('.nav ul li').css({'display' : 'block', 'margin' : '0 0 5px', 'z-index' : '999'});
							$('.menuBack').css({'height' : altura }).animate({ opacity: .8 }).fadeIn();
						}
					});
					$('.menuBack').on('click',function(){
						$('.menuBack').animate({ opacity: 0}).fadeOut();
						$('.nav ul li').removeAttr('style');
					});
				}else{
						$('.menuBack').animate({ opacity: 0}).fadeOut();
						$('.nav ul li').removeAttr('style');
				}
			}

			$('.MenuClose').on('click',function(){
				MenuBack(0);
			});
		},
		pagesize: function(kraken){
			// Page Width size
			$('.grids').css({'max-width' : kraken.width}), $('.wrap').css({'max-width' : kraken.width});
		},
		overflow: function(kraken){
			// Overflow in Short pages
			if(kraken.x) $('html').css('overflow-x','scroll');
			if(kraken.y) $('html').css('overflow-y','scroll');
		},
		bgimg: function(kraken){
			// Background Image in directory img/bg/
			$('html').css({'background' : 'url("./img/bg/'+kraken.img+'.png")' , 'background-size' : kraken.size });
		},
		bgcolor: function(kraken){
			// Background Color
			$('html').css('background-color','#'+kraken.color+'');
		},
		largewrap: function(kraken){
			// Wrap height of the screen
			var RestWarp = ( kraken.rest == 'default' ) ? '20' : kraken.rest;
			setTimeout(function(){
				$('.wrap').css('min-height',$(document).height() - RestWarp);
			},350);
		},
		wrapshadow: function(kraken){
			// BorderShadow on Wrap shadow="on"
			if(kraken.state) $('.wrap').addClass('shadowWrap');
		},
		slider: function(kraken){
			// Slider
			$("#slider").responsiveSlides({
				auto: kraken.auto,
				pager: kraken.pager,
				nav: kraken.nav,
				speed: kraken.speed,
				namespace: "callbacks",
				before: function () {

				},
				after: function () {

				}
			});
		},
		menu: function(kraken){
			//SubMenu
			$('.grids > #menu').css({'position':'relative', 'width':'auto', 'z-index':'8'});
			$('.subMenu').hide();
			var togglesub = true;
			$('#soluciones').on('click',function(event){
				event.preventDefault();
				
				if(togglesub){
					$('.subMenu').show().effect("slide", { direction:'up', times: 5 }, 450);
					$('.subMenu').show().effect("highlight", { color: "#fff", times: 5 }, 450);
					togglesub = false;
				}else{
					$('.subMenu').hide('slow');
					togglesub = true;
				}

			});
			if($(document).width() > kraken.size){
				function openSubMenu() {
					// $(this).find('ul').css({opacity: 0, visibility: "visible"}).animate({opacity: 1, top: 32}, 400);
					 $(this).find('ul').css('visibility', 'visible');
				};
				function closeSubMenu() {
					// $(this).find('ul').css({opacity: 1.0, visibility: "hidden"}).animate({opacity: 0}, 400);
					$(this).find('ul').css('visibility', 'hidden');
				};
				$('.nav > ul > li,a').bind('mouseover', openSubMenu);
				$('.nav > ul > li').bind('mouseout', closeSubMenu);
			}else{
				$(this).find('ul').css('visibility', 'visible');
			}
		},
		span: function(kraken){
			// Span example in html: <div class="span" value="2.5"></div>
			$('.span').each(function(){
				var spanValue = $(this).attr('value');
				sumValue = spanValue * kraken.span.multiply;
				$(this).css('margin-bottom',sumValue);
			});
		},
		interval: function(kraken){
			// Set interval to responsive js
			setInterval(function () {
				// Functions here:
				console.log('start');
				// End Functions
			}, kraken.interval.timer);
		},
		hide: function(kraken){
			if($(document).width() < kraken.size){
				$('.hide').each(function(){
					$(this).hide();
				});

				MenuBack(1);
			}
			if(kraken.resize){
				$(window).resize(function(){
					if($(document).width() < kraken.size){
						$('.hide').each(function(){
							$(this).hide();
						});

						// MenuBack();
					}else{
						$('.hide').each(function(){
							$(this).show();
						});
					}
				});
			}
		}
};

var Start = new Plugin(_options);


// Kraken.progress = function(options){
// 	if(!isNaN(options.progress)){
// 		$(options.obj).children().css('width',''+options.progress+'%').html('<span>'+options.progress+'%</span>');
// 	}else{
// 		console.log('Not Num');
// 	}
// }

// // var count = 100;
// // var timerbar = setInterval(function(){
// //   if(count>=50){
// //     progress({
// //       obj: ".Barra",
// //       progress: count
// //     });
// //     count = count - 2;
// //   }else{
// //     clearInterval(timerbar);
// //   }
// // },300);

// // var Plugin = function(option){
// // 	this.init();
// // 	if(option=='hola'){
// // 		this.test();
// // 	}
// // }
// // Plugin.prototype = {
// // 		init: function () {
// // 				console.log("xD");
// // 		},
// // 		test: function () {
// // 				console.log("test");
// // 		}
// // };
// // var tester = Plugin;
// // new tester('hola');

console.timeEnd("Kraken Load Time");


}
