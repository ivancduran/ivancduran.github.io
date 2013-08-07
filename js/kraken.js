// Kraken Framework 0.6
var Kraken = function(_options){
$(document).ready(function(){

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

var kraken = $.extend(true, _default, _options);
///////////////////////
// Page Width size
if(kraken.pagesize.state) $('.grids').css({'max-width' : kraken.pagesize.width}), $('.wrap').css({'max-width' : kraken.pagesize.width});
// Overflow in Short pages
if(kraken.overflow.state){
	if(kraken.overflow.x) $('html').css('overflow-x','scroll');	
	if(kraken.overflow.y) $('html').css('overflow-y','scroll');
}
// Background Image in directory img/bg/
if(kraken.bgimg.state) $('html').css({'background' : 'url("./img/bg/'+kraken.bgimg.img+'.png")' , 'background-size' : kraken.bgimg.size });
// Background Color
if(kraken.bgcolor.state) $('html').css('background-color','#'+kraken.bgcolor.color+'');
// Wrap height of the screen
if(kraken.largewrap.state){
	var RestWarp = ( kraken.largewrap.rest == 'default' ) ? '20' : kraken.largewrap.rest;
	setTimeout(function(){
		$('.wrap').css('min-height',$(document).height() - RestWarp);
	},350);
}
// BorderShadow on Wrap shadow="on"
if(kraken.wrapshadow.state) $('.wrap').addClass('shadowWrap');
// Slider
if(kraken.slider.state){
$("#slider").responsiveSlides({
	auto: kraken.slider.auto,
	pager: kraken.slider.pager,
	nav: kraken.slider.nav,
	speed: kraken.slider.speed,
	namespace: "callbacks",
	before: function () {

	},
	after: function () {

	}
});
}
//SubMenu
if(kraken.menu.state){
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

		if($(document).width() > kraken.hide.size){
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
}
// Span example in html: <div class="span" value="2.5"></div>
if(kraken.span.state){
	$('.span').each(function(){
		var spanValue = $(this).attr('value');
		sumValue = spanValue * kraken.span.multiply;
		$(this).css('margin-bottom',sumValue);
	});
}
// Set interval to responsive js
if(kraken.interval.state){
	setInterval(function () {
		// Functions here:
		console.log('start');
		// End Functions
	}, kraken.interval.timer);
}

if(kraken.hide.state){
	if($(document).width() < kraken.hide.size){
		$('.hide').each(function(){
			$(this).hide();
		});

		MenuBack();
	}
	if(kraken.hide.resize){
		$(window).resize(function(){
			if($(document).width() < kraken.hide.size){
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

function MenuBack(){
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
}

$('.cta').on('click',function(){
	$('.cta').removeClass('ActiveScrollTo');
	$('.cta').removeClass('W');
	$(this).addClass('ActiveScrollTo');
	$(this).addClass('W');

	setTimeout(function(){
		$.scrollTo('.ActiveScrollTo',500);
	}, 500);
	
});

console.timeEnd("Kraken Load Time");

});
}