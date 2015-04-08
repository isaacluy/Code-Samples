var GCC = ( function (name) { return name; }( GCC || {} ));

GCC.Home = ( function ()
{	
	var exitLinkURL = "http://guayoyo.ca/exit/";
	var aboutLinkURL = "http://guayoyo.ca/about/";
	var crossingsLinkURL = "http://guayoyo.ca/clown-crossings/";
	var improvLinkURL = "http://guayoyo.ca/improvables/";

	var startCarrousel = function (){
		$("#carrousel").slidesjs({
    		width: 901,
    		height: 442,
    		navigation: {
      			active: true,
    			effect: "slide"
			},
			pagination: {
      			active: false,
      			effect: "slide"
    		},
    		play: {
    			active: false,
    			effect: "slide",
    			interval: 5000,
    			auto: true,
    			swap: false,
    			pauseOnHover: true,
    			restartDelay: 2500
    		},
    		callback: {
    			complete: function(number) {
    			  $('.carrousel_item.current').removeClass('current');
    			  $( "#carrousel_stepper ul li:nth-child("+number+")" ).addClass("current");
    			}
    		}
    	});
	};

	var homeLinks = function (){
		$(".exit_link").click(function(event) {
			window.location = exitLinkURL;
		});
		$(".about_link").click(function(event) {
			window.location = aboutLinkURL;
		});
		$(".crossings_link").click(function(event) {
			window.location = crossingsLinkURL;
		});
		$(".improv_link").click(function(event) {
			window.location = improvLinkURL;
		});
	};

	var init = function (){
		startCarrousel();
		homeLinks();
	};
	
	return {
		init : function() {
			init();
		}
	};	
})();


$(document).ready(function () {
	var bc = $('body').attr('class');
	if(bc.indexOf("home") >= 0) {
		GCC.Home.init();
	}
});