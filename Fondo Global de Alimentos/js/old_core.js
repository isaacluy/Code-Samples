$(document).ready(function() {
	Funcionalidad de pase de diapositivas en la sección de Inicio
	var current = 0;
	var total = 0;
	
	$("#carrousel > img").each(function(index){
		(total == 0) ? $("#image"+total).show("fast") : $("#image"+total).hide("fast");
		total++;
	});
	function nextImage() {
		$("#image"+current).fadeOut("slow");
		current+=1;
		if(current >= total) {
			current = 0;
		}
		$("#image"+current).fadeIn("slow");
	};
	window.setInterval(nextImage, 10000);
	end
	
	Funcionalidad de lectura de RSS Feeds para la sección de Noticias
	$('#feed0').rssfeed("http://feeds.feedburner.com/AgricultureMarketCommentary", {limit: 5, titleTag: 'h5', date: true, content: true});
	$('#feed1').rssfeed("http://feeds.feedburner.com/MetalMarketCommentary", {limit: 5, titleTag: 'h5', date: true, content: true});
	$('#feed2').rssfeed("http://feeds.feedburner.com/EnergyMarketCommentary", {limit: 5, titleTag: 'h5', date: true, content: true});
	end
	
	Funcionalidad para selección de categoría y producto del formulario de Pedidos
	var cat = $("#categoria").val();
	$("#categoria").change(function(){
		var new_cat = $(this).val();
		$("#producto_"+cat).addClass("hide");
		$("#producto_"+new_cat).removeClass("hide");
		cat = new_cat;
	});
	end
	
	Funcionalidad para validar el formulario de Pedidos
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
			messages:{
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
					required: "Por favor, seleccione el puerto de embarque para el env&iacuteo del producto."
				},
				puerto_llegada: {
					required: "Por favor, seleccione el puerto de destino para el env&iacuteo del producto."
				}
			},
			errorElement: "p"
		});
	end
	Funcionalidad para el submenu de países en la sección de Contacto
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
	end
	
	Funcionalidad para validar el formulario de la sección de Contacto
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
		messages:{
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
		},
		errorElement: "p"
	});
	end
	
});