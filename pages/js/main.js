(function($) {

	"use strict";
	
	$('.flexslider').flexslider({
		animation: "fade",
        direction: "horizontal",
        easing: "swing",
        controlNav: false,
        directionNav: true,
        prevText: "",
        nextText: "",
        start: function(slider){
          $('body').removeClass('loading');
        }
    });



    $('#Grid').mixitup({
        effects: ['fade','grayscale'],
        easing: 'snap',
        transitionSpeed: 800
    });



    $(function(){
        $('[data-rel="lightbox"]').lightbox();
    });


})(jQuery);

$(document).ready(function(){
	resizer();

	$('.nav li a').addClass('selected');
	
	$('.nav .nav-sub-menu li a').removeClass('selected');
	
	$(window).resize(function(){
		resizer();
	});
	
	
	
});

function resizer(){
	var outerwid = $(window).outerWidth();
	var screenwid = 768;
	
	var off_tot = $('.max .nav-sub-menu').offset().top;

	if( screenwid <= outerwid ){
		//console.log('I am entered if');
	
		$('.site-header').css({'margin-right':'-190px', 'width':'265px' });
		
		$('.nav').mouseover(function(){
			$('.site-header').css({"margin-right": "0", 'width':'750px'});
		});
		
		$('.nav').mouseout(function(){
			$('.site-header').css({'margin-right': '-190px','width':'265px'});
		});
	
	}else{//console.log('I am entered else');
	}
	

}

