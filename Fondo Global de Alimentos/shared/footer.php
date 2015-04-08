
	<div id="footer">
		<div class="container_16">
			<div id="language">
				<!-- <a href="/fr/" id="french" <?php if( $lang == "fr" ) echo 'class="hide"'; ?>>Fran&ccedil;ais</a>
				<a href="/pt/" id="portuguese" <?php if( $lang == "pt" ) echo 'class="hide"'; ?>>Portugu&ecirc;s</a> -->
				<a href="/fga/es/" id="spanish" <?php if( $lang == "es" ) echo 'class="hide"'; ?>>Espa&ntilde;ol</a>
				<a href="/fga/en/" id="english" <?php if( $lang == "en" ) echo 'class="hide"'; ?>>English</a>
			</div>
			<div id="site_map">
				<div id="sm_inicio" class="grid_3">
					<a href="index.php"><?php echo $pageDescriptions["index"];?></a>
				</div>
				<div id="sm_quienes_somos" class="grid_3">
					<a href="quienes_somos.php"><?php echo $pageDescriptions["quienes_somos"];?></a>
					<ul>
						<li>
							<a href="quienes_somos.php"><?php echo $pageDescriptions["mision"];?></a>
						</li>
						<li>
							<a href="quienes_somos.php?s=vision"><?php echo $pageDescriptions["vision"];?></a>
						</li>
						<!-- <li>
							<a href="quienes_somos.php?s=objetivos"><?php echo $pageDescriptions["objetivos"];?></a>
						</li> -->
						<li>
							<a href="quienes_somos.php?s=presencia"><?php echo $pageDescriptions["presencia"];?></a>
						</li>
						<li>
							<a href="quienes_somos.php?s=valores"><?php echo $pageDescriptions["valores"];?></a>
						</li>
					</ul>
				</div>
				<div id="sm_productos" class="grid_3">
					<a href="productos.php"><?php echo $pageDescriptions["productos"];?></a>
					<ul>
						<li>
							<a href="productos.php?c=granos"><?php echo $pageDescriptions["granos"];?></a>
						</li>
						<li>
							<a href="productos.php?c=animales"><?php echo $pageDescriptions["animales"];?></a>
						</li>
						<li>
							<a href="productos.php?c=aceites"><?php echo $pageDescriptions["aceites"];?></a>
						</li>
						<li>
							<a href="pedido.php?c=granos"><?php echo $pageDescriptions["pedido"];?></a>
						</li>
					</ul>
				</div>
				<div id="sm_noticias" class="grid_3">
					<a href="noticias.php"><?php echo $pageDescriptions["noticias"];?></a>
					<ul>
						<li>
							<a href="noticias.php#maiz"><?php echo $pageDescriptions["cme_maiz"];?></a>
						</li>
						<li>
							<a href="noticias.php#feed0_title"><?php echo $pageDescriptions["cme_agricultura"];?></a>
						</li>
						<li>
							<a href="noticias.php#fga"><?php echo $pageDescriptions["fga"];?></a>
						</li>
					</ul>
				</div>
				<div id="sm_contacto" class="grid_3">
					<a href="contacto.php"><?php echo $pageDescriptions["contacto"];?></a>
					<ul>
						<li>
							<a href="contacto.php?p=usa"><?php echo $pageDescriptions["usa"];?></a>
						</li>
						<li>
							<a href="contacto.php?p=venezuela"><?php echo $pageDescriptions["venezuela"];?></a>
						</li>
						<li>
							<a href="contacto.php?p=brasil"><?php echo $pageDescriptions["brasil"];?></a>
						</li>
						<li>
							<a href="contacto.php?p=argentina"><?php echo $pageDescriptions["argentina"];?></a>
						</li>
						<li>
							<a href="contacto.php?p=uruguay"><?php echo $pageDescriptions["uruguay"];?></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- <p id="copyright" style="text-align:center;margin:40px 0px;font-size:14px;"><?php echo $copyright;?></p> -->
		</div>
	</div>
		<p id="copyright" style="text-align:center;margin:40px 0px;font-size:14px;"><?php echo $copyright;?></p>
</body>
</html>
