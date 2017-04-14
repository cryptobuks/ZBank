$( document ).ready(function() {

    $(".tada-hover").hover(
    		function(){$(this).addClass('animated tada');},
    		function(){$(this).removeClass('animated tada');}
    	);
    $(".pulse-hover").hover(
    		function(){$(this).addClass('animated pulse');},
    		function(){$(this).removeClass('animated pulse');}
    	);
    $(".rubber-hover").hover(
    	function(){$(this).addClass('animated rubberBand');},
    	function(){$(this).removeClass('animated rubberBand');}
    );
});