///////// GLOBAL SCRIPTS //////////



///////// STICKY FOOTER /////////////////////////////////////////////////////////////////
///////// forces #footer to the bottom of the page /////////////////////////////////////

jQuery(function($){
	$(window).bind("load", function() {
var footer = $("#footer");
var pos = footer.position();
var height = $(window).outerHeight();
height = height - pos.top;
height = height - footer.outerHeight();
    if (height > 0) {
  footer.css({'margin-top' : height+'px'});
  }
});

	$(window).resize(function(){
		var footer = $("#footer");
		var pos= footer.position();
		var height= $(window).outerHeight();
		height = height - pos.top;
		height = height - footer.outerHeight();
		if (height > 0){
			footer.css({'margin-top' : height+'px'});
		}
	});
});



///////// CSS3 ANIMATED & RESPONSIVE DROPDOWN MENU //////////////////////////////////////
///////// http://www.red-team-design.com/css3-animated-dropdown-menu ///////////////////


jQuery(function($){
		/* Mobile */
$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');
$("#menu-trigger").on("click", function(){
$("#menu").slideToggle();
});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) !== null;
		if (isiPad) $('#menu ul').addClass('no-transition');
});