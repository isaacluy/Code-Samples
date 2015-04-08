<?php
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	
	// GET COUNTRY
	if(isset($_GET["c"])) $categoria = $_GET["c"];
	
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="content" class="container_16">
			<h2>Nuestros productos m&aacute;s populares</h2>
			<p>Para ponerse en contacto con nosotros y obtener m&aacute;s informaci&oacute;n sobre nuestros productos m&aacute;s populares seleccione uno de la lista. El Fondo Global de Alimentos trabaja con miles de productos en m&aacute;s de 100 pa&iacute;ses y estamos dispuestos a trabajar con usted para cubrir sus necesidades; si el producto que usted necesita no se encuentra en estas listas p&oacute;ngase en contacto con nosotros a trav&eacute;s del <a class="formulario_link" href="pedido.php?c=granos">formulario de pedidos</a> y con gusto le atenderemos.</p>
			<div id="granos" class="grid_5">
				<div id="granos_photo" class="photo">
					<a href="pedido.php?c=granos">
						<img src="../images/grain.jpg" width="280" height="140" />
					</a>
				</div>
				<div id="granos_content" class="content<?php if($categoria == "granos") echo " current";?>">
					<h3><a href="pedido.php?c=granos">Granos</a></h3>
					<ul>
						<li><a href="pedido.php?c=granos&p=maiz">Ma&iacute;z</a></li>
						<li><a href="pedido.php?c=granos&p=trigo">Trigo</a></li>
						<li><a href="pedido.php?c=granos&p=cebada">Cebada</a></li>
						<li><a href="pedido.php?c=granos&p=sorgo">Sorgo</a></li>
						<li><a href="pedido.php?c=granos&p=cafe">Caf&eacute;</a></li>
						<li><a href="pedido.php?c=granos&p=cafe_organico">Caf&eacute; Org&aacute;nico</a></li>
					</ul>
				</div>
			</div>
			<div id="animales" class="grid_5">
				<div id="animales_photo" class="photo">
					<a href="pedido.php?c=animales">
						<img src="../images/animals.jpg" width="280" height="140" />
					</a>
				</div>
				<div id="animales_content" class="content<?php if($categoria == "animales") echo " current";?>">
					<h3><a href="pedido.php?c=animales">Animales</a></h3>
					<ul>
						<li><a href="pedido.php?c=animales&p=aves">Aves de corral</a></li>
						<li><a href="pedido.php?c=animales&p=bovino">Ganado bovino</a></li>
						<li><a href="pedido.php?c=animales&p=porcino">Ganado porcino</a></li>
					</ul>
				</div>
			</div>
			<div id="aceites" class="grid_5">
				<div id="aceites_photo" class="photo">
					<a href="pedido.php?c=aceites">
						<img src="../images/oil.jpg" width="280" height="140" />
					</a>
				</div>
				<div id="aceites_content" class="content<?php if($categoria == "aceites") echo " current";?>">
					<h3><a href="pedido.php?c=aceites">Aceites y Otros</a></h3>
					<ul>
						<li><a href="pedido.php?c=aceites&p=aceite_maiz">Aceite de ma&iacute;z</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_girasol">Aceite de girasol</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_oliva">Aceite de oliva</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_soya">Aceite de soya</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_pescado">Aceite de pescado</a></li>
						<li><a href="pedido.php?c=aceites&p=azucar">Az&uacute;car</a></li>
						<li><a href="pedido.php?c=aceites&p=azucar_organica">Az&uacute;car Org&aacute;nica</a></li>
					</ul>
				</div>
			</div>
			<p id="tag" class="grid_16 bebas">Complete el <a class="formulario_link" href="pedido.php?c=granos">formulario de pedidos</a> a&uacute;n si el producto que usted busca no aparece en las listas.</p>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>