$(document).ready(function(){;
	setHeight();
});

function setHeight() {
	var pagetop = $('#page-top').height() + 20;
	$('body').css('padding-top', pagetop);
	
	if($(window).width() < 992) {
		var pagebottom = $('#navigation').height();
		$('body').css('padding-bottom', pagebottom);
		$('ul#nav-list li.more ul').css('bottom', pagebottom);
	}
}

$("li.more").click(function() {
  $("li.more ul").toggleClass("display");
});

function calcWidth() {

	var navwidth = 0;
	var morewidth = $('#nav-list .more').outerWidth(true);
	$('#nav-list > li:not(.more)').each(function() {
		navwidth += $(this).outerWidth( true );
	});
	var availablespace = $('nav').outerWidth() - morewidth;
			  
	if (navwidth > availablespace) {
		var lastItem = $('#nav-list > li:not(.more)').last();
		console.log('Nav Width > Available Space');
		console.log(lastItem);
		lastItem.attr('data-width', lastItem.outerWidth(true));
		lastItem.children('ul').remove();
		lastItem.prependTo($('#nav-list .more ul'));
		console.log("Appending Item to .more ul");
		calcWidth();
	} else {
		var firstMoreElement = $('#nav-list li.more li').first();
		console.log('Available Space > Nav Width');
		console.log(firstMoreElement);
		if (navwidth + firstMoreElement.data('width') < availablespace) {
			console.log("Inserting Element before .more");
			firstMoreElement.insertBefore($('#nav-list .more'));
		}
	}
			  
	if ($('.more li').length > 0) {
		$('.more').css('display','inline-block');
	} else {
		$('.more').css('display','none');
	}
}
			
$(window).on('resize load',function(){
	setHeight();
	calcWidth();
});