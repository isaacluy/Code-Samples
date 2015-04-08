<?php
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="carrousel">
			<img id="image0" alt="Imagen 08" src="../images/image08a.png"/>
			<img id="image1" alt="Imagen 09" src="../images/image09a.png"/>
			<img id="image2" alt="Imagen 06" src="../images/image06a.png"/>
			<img id="image3" alt="Imagen 02" src="../images/image02a.png"/>
			<img id="image4" alt="Imagen 05" src="../images/image05a.png"/>
			<!-- <img id="image4" alt="Imagen 07" src="../images/image07a.png"/> -->
			<!-- <img id="image2" alt="Image 03" src="../images/image03a.png"/> -->
			<!-- <img id="image1" alt="Image 04" src="../images/image04a.png"/> -->
			<!-- <img id="image0" alt="Image 01" src="../images/image01a.png"/> -->
		</div>
		<div id="content" class="container_16">
			<h2 class="grey_line">Fondo Global de Alimentos</h2>
			<p id="slogan">FGA operates on an integrated global basis to source, process, transport and distribute grain and oilseeds around the world.</p>
			<div id="button01" class="grid_4 button">
				<h3><a href="quienes_somos.php?s=presencia"><?php echo $pageDescriptions["presencia"];?></a></h3>
			</div>
			<div id="button02" class="grid_4 button">
				<h3><a href="pedido.php?c=granos"><?php echo $pageDescriptions["pedido"];?></a></h3>
			</div>
			<div id="button03" class="grid_4 button">
				<h3><a href="noticias.php#fga"><?php echo $pageDescriptions["fga"];?></a></h3>
			</div>
			<div id="button04" class="grid_4 button">
				<h3><a href="contacto.php"><?php echo $pageDescriptions["contacto"];?></a></h3>
			</div>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>
