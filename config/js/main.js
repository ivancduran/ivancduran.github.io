$(document).ready(function(){


function rgb2hex(rgb) {
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

	$("select, .bgimg").change( function() {
		bgimg = $("select").val();
		bgcolor = $('html').css("background-color");
			$('html').css({'background' : 'url("./img/bg/'+bgimg+'.png")'});
			$('html').css('background-color',rgb2hex(bgcolor));

	});


	$('.font_[value=1]').css({'font-family':'UbuntuL'});
	$('.font_[value=2]').css({'font-family':'Lato'});
	$('.font_[value=3]').css({'font-family':'OpenSans'});
	$('.font_[value=4]').css({'font-family':'Satellite'});

	$('.font_').hide();
	$('.font_[value=1]').show();

	$('.c_font').on('click',function(){
		var val = $(this).attr('value');
		$('.font_').hide();
		$('.font_[value='+val+']').show();
	});
});