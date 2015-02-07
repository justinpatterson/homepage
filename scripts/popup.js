$(document).ready(function(){

	$('#image-set>li>img').click(function(){
		var source = $(this).attr('src');
		
		var len = source.length;
    	var extensionLen = "../images/thumb_".length;
    	var newSource = "../images/" + source.substring(extensionLen, len);
    	var description = $(this).attr('data-desc');

    	$('#image-popup>img').attr('src', newSource);
    	$('#image-popup>h1').text(description);
    	$('#image-popup').css('top', "0%");
		
		
	});
	$('#image-popup').click(function(){
		$('#image-popup').css('top', "100%");	
	});

	$("nav>ul>li").click(function() {
		var clicked_index = $(this).index() + 2;
		$('html, body').animate({
			scrollTop:$('section').slice((clicked_index + 1),(clicked_index + 2)).offset().top-40
		}, 500);
	});
});

