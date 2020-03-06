$(function(){
	// alert($(window).scrollTop());
	// var mudaCor = $('#servicos').offset().top;
	// alert(mudaCor);



	if($(window).scrollTop() > ($('#servicos').offset().top - 50)){
			$('#menu-superior').addClass('fixed-menu-style');
		}else{
			$('#menu-superior').removeClass('fixed-menu-style');
		}

	$(window).scroll(function(){
		if($(this).scrollTop() > ($('#servicos').offset().top - 120)){
			$('#menu-superior').addClass('fixed-menu-style');
		}else{
			$('#menu-superior').removeClass('fixed-menu-style');
		}
	});
});

