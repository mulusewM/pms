$(function(){

	var menu = $('#block-tb-megamenu-main-menu'),
		pos = menu.offset();

		$(window).scroll(function(){
			if($(this).scrollTop() > pos.top+menu.height() && menu.hasClass('block block-tb-megamenu first last odd')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('block block-tb-megamenu first last odd').addClass('fixed-header').fadeIn('fast');
				});
			} else if($(this).scrollTop() <= pos.top && menu.hasClass('fixed-header')){
				menu.fadeOut('fast', function(){
					$(this).removeClass('fixed-header').addClass('block block-tb-megamenu first last odd').fadeIn('fast');
				});
			}
		});

});