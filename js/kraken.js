$(document).ready(function(){

	var color = $('html').attr('color');
	var imgBG = $('html').attr('img');

	$('html').css('background','url("./img/bg/'+imgBG+'.png")');
	$('html').css('background-color','#'+color+'');
	$('h2').css('color','#'+color+'');

	$('#menu .has-sub ul li a').css('background','#'+color);

	var shadowWrap = $('.wrap').attr('shadow');
	if(shadowWrap=='on'){
		$('.wrap').addClass('shadowWrap');
	}

$("#slider").responsiveSlides({
	auto: true,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {

	},
	after: function () {

	}
});

$('.span').each(function(){
	var spanValue = $(this).attr('value');
	sumValue = spanValue * 10;
	$(this).css('margin-bottom',sumValue);
});


$('.cta').on('click',function(){
	$('.cta').removeClass('ActiveScrollTo');
	$('.cta').removeClass('W');
	$(this).addClass('ActiveScrollTo');
	$(this).addClass('W');

	setTimeout(function(){
		$.scrollTo('.ActiveScrollTo',500);
	}, 500);
	
});



});