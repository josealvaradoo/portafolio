$(document).ready(function(){
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.15);
		
		$('header, .portfolio-template').css({
			'background-position': '0 -' + posicion + 'px'
		});
	});
});