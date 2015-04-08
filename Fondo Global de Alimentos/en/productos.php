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
			<h2>Our most popular products</h2>
			<p>To contact us and learn more about our most popular products select one from the list below. The FGA works with thousands of products in over 100 countries and we are willing to work with our clients to meet their needs. If the product you are looking for is not in the list, fill out our <a class="formulario_link" href="pedido.php?c=granos">orders form</a> and we'll gladly help you.</p>
			<div id="granos" class="grid_5">
				<div id="granos_photo" class="photo">
					<a href="pedido.php?c=granos">
						<img src="../images/grain.jpg" width="280" height="140" />
					</a>
				</div>
				<div id="granos_content" class="content<?php if($categoria == "granos") echo " current";?>">
					<h3><a href="pedido.php?c=granos"><?php echo $pageDescriptions["granos"];?></a></h3>
					<ul>
						<li><a href="pedido.php?c=granos&p=maiz">Corn</a></li>
						<li><a href="pedido.php?c=granos&p=trigo">Wheat</a></li>
						<li><a href="pedido.php?c=granos&p=cebada">Barley</a></li>
						<li><a href="pedido.php?c=granos&p=sorgo">Sorghum</a></li>
						<li><a href="pedido.php?c=granos&p=cafe">Coffee</a></li>
						<li><a href="pedido.php?c=granos&p=cafe_organico">Organic Coffee</a></li>
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
					<h3><a href="pedido.php?c=animales"><?php echo $pageDescriptions["animales"];?></a></h3>
					<ul>
						<li><a href="pedido.php?c=animales&p=aves">Poultry</a></li>
						<li><a href="pedido.php?c=animales&p=bovino">Bovine</a></li>
						<li><a href="pedido.php?c=animales&p=porcino">Porcine</a></li>
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
					<h3><a href="pedido.php?c=aceites"><?php echo $pageDescriptions["aceites"];?></a></h3>
					<ul>
						<li><a href="pedido.php?c=aceites&p=aceite_maiz">Corn oil</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_girasol">Sunflower oil</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_oliva">Olive oil</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_soya">Soy oil</a></li>
						<li><a href="pedido.php?c=aceites&p=aceite_pescado">Fish oil</a></li>
						<li><a href="pedido.php?c=aceites&p=azucar">Sugar</a></li>
						<li><a href="pedido.php?c=aceites&p=azucar_organica">Organic Sugar</a></li>
					</ul>
				</div>
			</div>
			<p id="tag" class="grid_16 bebas">Fill out the <a class="formulario_link" href="pedido.php?c=granos">orders form</a> Even if the product you are looking for is not on the list above.</p>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>