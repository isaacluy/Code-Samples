var MT = ( function (name) { return name; }( MT || {} ));

MT.Index = ( function ()
{
	// var current = 0;
	// var total = 0;
	// var firstImage = "../images/image08a.png";
	// var allImages = ["../images/image09a.png", "../images/image06a.png", "../images/image02a.png", "../images/image05a.png"];
	// var interval = 10000;

	// var setLoaderBar = function () {
	// 	var xPos = Math.round(screen.width/2) - 110; //loader.gif width = 220
	// 	$("#loader").css("left", xPos+"px");
	// 	$("#loader").removeClass("hide");
	// };
	
	// var hideAllImages = function() {
	// 	$("#carrousel > img").each(function(index){
	// 		$(this).hide("fast");
	// 	});
	// };

	// var loadFirstImage = function() {
	// 	var fI = new Image();
	// 	fI.addEventListener("load", setTotal, false);
	// 	fI.src = firstImage;
	// };

	// var loadAllImages = function() {
	// 	for (var i = 0; i < allImages.length; i++) {
	// 		MT.Core.loadImage(allImages[i]);
	// 	};
	// };

	// var setTotal = function () {
	// 	$("#loader").addClass("hide");
	// 	//loadAllImages();
	// 	$("#carrousel > img").each(function(index){
	// 		(total == 0) ? $("#image"+total).fadeIn("slow") : $("#image"+total).hide("fast");
	// 		total++;
	// 	});
	// 	window.setInterval(nextImage, interval);
	// };
	
	// var nextImage = function () {
	// 	$("#image"+current).fadeOut("slow");
	// 	current+=1;
	// 	if(current >= total) {
	// 		current = 0;
	// 	}
	// 	$("#image"+current).fadeIn("slow");
	// };
	
	// var init = function (){
	// 	setLoaderBar();
	// 	hideAllImages();
	// 	loadFirstImage();
	// };
	
	// return {
	// 	init : function() {
	// 		init();
	// 	}
	// };	
})();



MT.Core = ( function() {
	
	// var getId = function() {
	// 	return $("body").attr("id");
	// };
	
	// var getPageId = function() {
	// 	return getId().slice(0,-3);
	// };
	
	// var getLang = function() {
	// 	var id = getId();
	// 	return id.slice(-2, id.length);
	// };
	
	// var loadImage = function(url, listener) {
	// 	listener = (typeof listener === "undefined") ? false : listener;
	// 	var image = new Image();
	// 	if(listener){image.addEventListener("load", imageLoaded, false);}
	// 	image.src = url;
	// 	return image;
	// };

	// var imageLoaded = function() {
	// 	console.log("GENERIC EVENT: imageLoaded = "+$(this).attr("src"));
	// };

	// var hrefHandler = function() {
	// 	// TODO: Solución para la sección de Contacto. No funciona como se espera. Será mejor usar PHP para esto?
	// 	$("#language > a").live("click", function(event){
	// 		event.preventDefault();
	// 		var targetLang = $(this).attr("ref");
	// 		// console.log(window.location.href + " " +targetLang);
	// 		var url = window.location.href;
	// 		url = url.replace("/"+getLang(), "/"+targetLang);
	// 		// console.log(url);
	// 		window.location = url;
	// 	});
	// };
	
	// return {
	// 	getId : function() {
	// 		return getId();
	// 	},
	// 	getPageId : function() {
	// 		return getPageId();
	// 	},
	// 	getLang : function() {
	// 		return getLang();
	// 	},
	// 	loadImage : function(url, listener) {
	// 		var i = loadImage(url, listener);
	// 	},
	// 	preloadAllImages : function () {
	// 		// TODO: Selección de las imágenes más importantes.
	// 		loadImage("../images/mision.png");
	// 		loadImage("../images/vision.png");
	// 		loadImage("../images/presencia.png");
	// 		loadImage("../images/valores.png");
	// 		loadImage("../images/usa.png");
	// 		loadImage("../images/brasil.png");
	// 		loadImage("../images/venezuela.png");
	// 		loadImage("../images/uruguay.png");
	// 		loadImage("../images/argentina.png");
	// 	},
	// 	hrefHandler : function() {
	// 		hrefHandler();
	// 	}
	// };
})();

$(document).ready(function() {
	// console.log("works!");
	
	//var intervals = [15000, 30000, 60000, 120000];
	var intervals = [1000, 2000, 3000, 4000];
	var sides = ["Experience", "Innocence"];
	
	var getNextMask = function () {
		 var side = sides[Math.round(Math.random())];
		 var mask = Math.round(Math.random() * 5) + 1;
		 console.log(mask+" "+side);
		 return mask+" "+side;
	};

	var getNextInterval = function () {
		var r = Math.round(Math.random() * 3);
		console.log(intervals[r]);
		return r;
	};

	var getRandomColor = function () {
    	var letters = '0123456789ABCDEF'.split('');
    	var color = '#';
    	for (var i = 0; i < 6; i++ ) {
    	    color += letters[Math.round(Math.random() * 15)];
    	}
    	console.log(color);
    	return color;
	};

	var nextMask = function () {
		$("body").css("background-color", getRandomColor());
		$("h1").text(getNextMask());
	};

	//window.setInterval(nextMask, intervals[getNextInterval()]);
});
