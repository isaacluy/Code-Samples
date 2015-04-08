var FGA = ( function (name) { return name; }( FGA || {} ));

FGA.Index = ( function ()
{
	var current = 0;
	var total = 0;
	
	var setTotal = function () {
		$("#carrousel > img").each(function(index){
			(total == 0) ? $("#image"+total).show("fast") : $("#image"+total).hide("fast");
			total++;
		});
	};
	
	var nextImage = function () {
		$("#image"+current).fadeOut("slow");
		current+=1;
		if(current >= total) {
			current = 0;
		}
		$("#image"+current).fadeIn("slow");
	};
	
	var init = function (){
		setTotal();
		window.setInterval(nextImage, 10000);
	};
	
	return {
		init : function() {
			init();
		}
	};	
})();

FGA.Noticias = ( function ()
{
	var startFeeds = function () {
		$('#feed0').rssfeed("http://feeds.feedburner.com/AgricultureMarketCommentary", {limit: 5, titleTag: 'h5', date: true, content: true});
		//$('#feed1').rssfeed("http://feeds.feedburner.com/MetalMarketCommentary", {limit: 5, titleTag: 'h5', date: true, content: true});
		//$('#feed2').rssfeed("http://feeds.feedburner.com/EnergyMarketCommentary", {limit: 5, titleTag: 'h5', date: true, content: true});
	};
	
	return {
		init : function() {
			startFeeds();
		}
	};
})();

FGA.Pedido = ( function ()
{	
	var categoryChanger = function () {
		var cat = $("#categoria").val();
		$("#producto_"+cat).removeClass("hide");
		
		$("#categoria").change(function(){
			var new_cat = $(this).val();
			$("#producto_"+cat).addClass("hide");
			$("#producto_"+new_cat).removeClass("hide");
			cat = new_cat;
		});
	};
	
	var formValidator = function (lang) {
		//console.log("PEDIDO: "+lang);
		var msg ={
			fname: {
				required: "Por favor, escriba su nombre"
			},
			lname: {
				required: "Por favor, escriba su apellido"
			},
			message: {
				required: "No es posible enviar un mensaje en blanco."
			},
			email: {
				required: "Necesitamos su email para poder contactarlo",
				email: "Por favor, escriba un email válido"
			},
			puerto_salida: {
				required: "Por favor, seleccione el puerto de embarque para el env&iacuteo del producto"
			},
			puerto_llegada: {
				required: "Por favor, seleccione el puerto de destino para el env&iacuteo del producto"
			}
		};
		
		if(lang == "en") {
			msg ={
				fname: {
					required: "Please, provide your name"
				},
				lname: {
					required: "Please, provide your last name"
				},
				message: {
					required: "It is not possible to send a blank message"
				},
				email: {
					required: "Please, provide an email so we can contact you",
					email: "Please, provide a valid email address"
				},
				puerto_salida: {
					required: "Please, select the boarding port for your product"
				},
				puerto_llegada: {
					required: "Please, select the destination port for your product"
				}
			};
		} else if (lang == "pt") {
			msg ={
				fname: {
					required: "PT:Por favor, escriba su nombre"
				},
				lname: {
					required: "PT:Por favor, escriba su apellido"
				},
				message: {
					required: "PT:No es posible enviar un mensaje en blanco."
				},
				email: {
					required: "PT:Necesitamos su email para poder contactarlo",
					email: "PT:Por favor, escriba un email válido"
				},
				puerto_salida: {
					required: "PT:Por favor, seleccione el puerto de embarque para el env&iacuteo del producto."
				},
				puerto_llegada: {
					required: "PT:Por favor, seleccione el puerto de destino para el env&iacuteo del producto."
				}
			};
		} else if (lang == "fr") {
			msg ={
				fname: {
					required: "FR:Por favor, escriba su nombre"
				},
				lname: {
					required: "FR:Por favor, escriba su apellido"
				},
				message: {
					required: "FR:No es posible enviar un mensaje en blanco."
				},
				email: {
					required: "FR:Necesitamos su email para poder contactarlo",
					email: "FR:Por favor, escriba un email válido"
				},
				puerto_salida: {
					required: "FR:Por favor, seleccione el puerto de embarque para el env&iacuteo del producto."
				},
				puerto_llegada: {
					required: "FR:Por favor, seleccione el puerto de destino para el env&iacuteo del producto."
				}
			};
		}
		
		$("#pedidoForm").validate({
			rules:{
				fname: {
					required: true
				},
				lname: {
					required: true
				},
				message: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				puerto_salida: {
					required: true
				},
				puerto_llegada: {
					required: true
				}
			},
			messages:msg,
			errorElement: "p"
		});
	};
	
	return {
		init : function(lang) {
			categoryChanger();
			formValidator(lang);
		}
	};
})();

FGA.Contacto = ( function ()
{
	var submenuPaises = function () {
		$(".contacto #submenu a").click(function(event){
			event.preventDefault();
			var current = $("#submenu .current").attr("rel");
			var clicked = $(this).attr("rel");

			if(current != clicked) {
				$("#photo").addClass(clicked);
				$("#photo").removeClass(current);
				$("#"+current).removeClass("show");
				$("#"+clicked).addClass("show");
				$("#submenu .current").removeClass("current");
				$(this).addClass("current");
				$("input#pais").attr("value", clicked);
				// window.location ="#"+clicked;
			}
		});
	};
	
	var formValidator = function (lang) {
		//console.log("CONTACTO: "+lang);
		var msg = {
			fname: {
				required: "Por favor, escriba su nombre"
			},
			lname: {
				required: "Por favor, escriba su apellido"
			},
			message: {
				required: "No es posible enviar un mensaje en blanco."
			},
			email: {
				required: "Necesitamos su email para poder contactarlo",
				email: "Por favor, escriba un email válido"
			}
		};
		
		if(lang == "en") {
			msg = {
				fname: {
					required: "Please, provide your name"
				},
				lname: {
					required: "Please, provide your last name"
				},
				message: {
					required: "It is not possible to send a blank message"
				},
				email: {
					required: "Please, provide an email so we can contact you",
					email: "Please, provide a valid email address"
				}
			};
		} else if (lang == "pt") {
			msg = {
				fname: {
					required: "PT:Por favor, escriba su nombre"
				},
				lname: {
					required: "PT:Por favor, escriba su apellido"
				},
				message: {
					required: "PT:No es posible enviar un mensaje en blanco."
				},
				email: {
					required: "PT:Necesitamos su email para poder contactarlo",
					email: "PT:Por favor, escriba un email válido"
				}
			};
		} else if (lang == "fr") {
			msg = {
				fname: {
					required: "FR:Por favor, escriba su nombre"
				},
				lname: {
					required: "FR:Por favor, escriba su apellido"
				},
				message: {
					required: "FR:No es posible enviar un mensaje en blanco."
				},
				email: {
					required: "FR:Necesitamos su email para poder contactarlo",
					email: "FR:Por favor, escriba un email válido"
				}
			};
		}
		
		$("#contactForm").validate({
			rules:{
				fname: {
					required: true
				},
				lname: {
					required: true
				},
				message: {
					required: true
				},
				email: {
					required: true,
					email: true
				}
			},
			messages:msg,
			errorElement: "p"
		});
	};
	
	return {
		init : function(lang) {
			submenuPaises();
			formValidator(lang);
		}
	};
})();

FGA.Core = ( function() {
	
	var getId = function() {
		return $("body").attr("id");
	};
	
	var getPageId = function() {
		return getId().slice(0,-3);
	};
	
	var getLang = function() {
		var id = getId();
		return id.slice(-2, id.length);
	};
	
	return {
		getId : function() {
			return getId();
		},
		getPageId : function() {
			return getPageId();
		},
		getLang : function() {
			return getLang();
		}
	};
})();

$(document).ready(function() {
	
	//console.log("1."+FGA.Core.getId()+" 2:"+FGA.Core.getPageId()+" 3:"+FGA.Core.getLang());
	
	if(FGA.Core.getPageId() == "index"){
		FGA.Index.init();
	} else if (FGA.Core.getPageId() == "noticias") {
		FGA.Noticias.init();
	} else if (FGA.Core.getPageId() == "pedido") {
		FGA.Pedido.init(FGA.Core.getLang());
	} else if (FGA.Core.getPageId() == "contacto") {
		FGA.Contacto.init(FGA.Core.getLang());
	}
});
