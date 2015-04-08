<?php
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="content" class="container_16">
			<div id="submenu" class="grid_3">
				<a href="#maiz">Ma&iacute;z</a>
				<a href="#feed0_title">Agricultura</a>
				<!-- <a href="#feed1_title">Metals</a> -->
				<a class="last" href="#fga">Fondo Global</a>
			</div>
			<div id="photo" class="grid_13 <?php echo $pageId;?>"></div>
			<h2 class="prefix_3 grid_13"><?php echo $pageDescriptions[$pageId];?></h2>
			<h3 id="maiz" class="prefix_3 grid_13">CME Group - Ma&iacute;z</h3>
			<a href="http://www.cmegroup.com/trading/agricultural/grain-and-oilseed/corn.html" target="_blank">
				<img alt="CME Group" id="cme" class="prefix_3 grid_13" src="../images/cbotcis.png"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 id="feed0_title" class="prefix_3 grid_13">CME Group - Agricultura</h3>
			<div id="feed0" class="prefix_3 grid_13"></div>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<!-- <h3 id="feed1_title" class="prefix_3 grid_13">CME Group - Metals</h3>
			<div id="feed1" class="prefix_3 grid_13"></div>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a> -->
			<h2 id="fga" class="prefix_3 grid_13">&Uacute;ltimas Noticias del Fondo Global de Alimentos</h2>
			<h3 class="prefix_3 grid_13">Octubre</h3>
			<h4 class="prefix_3 grid_13">21 de Octubre al 25 de Octubre de 2012</h4>
			<p class="prefix_3 grid_7 justify">El Fondo Global de Alimentos form&oacute; parte de la exhibici&oacute;n SIAL 2012 sobre el mercado global de alimentos que tuvo lugar en Paris. SIAL es considerada por muchos como la exhibici&oacute;n n&uacute;mero uno de alimentos a nivel mundial. Las dos principales razones de nuestra presencia en este evento fue el descubrir nuevos e innovadores productos en las tendencias del mercado de alimentos, as&iacute; como tambi&eacute;n actualizar nuestras bases sobre como afrontar los retos que presenta la industria global de alimentos.</p>
			<a href="http://www.sialparis.com/" target="_blank">
				<img alt="Sial Logo" src="../images/sial-logo.png" class="grid_6"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 class="prefix_3 grid_13">Agosto</h3>
			<h4 class="prefix_3 grid_13">25 de Agosto al 2 de Septiembre de 2012</h4>
			<p class="prefix_3 grid_7 justify">La exposici&oacute;n Expointer tuvo lugar en el Parque de Exposiciones Assis Brasil. Esta es una de las m&aacute;s grandes y m&aacute;s importantes ferias del mundo, en donde Rio Grande do Sul le muestra al mundo sus principales riquezas, fruto del trabajo de su gente. La feria lleva la marca de sustentabilidad e irrigaci&oacute;n como factores que impulsan la economia de la zona. En la feria est&aacute;n en exposici&oacute;n las tecnolog&iacute;as y maquinarias m&aacute;s modernas y el Fondo Global de Alimentos estuvo ah&iacute; presente para enriquecer sus conocimientos en la materia.</p>
			<a href="http://www.expointer.rs.gov.br/site2012/" target="_blank">
				<img alt="Expointer Logo" src="../images/expointer-logo.jpg" class="grid_6"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 class="prefix_3 grid_13">Junio</h3>
			<h4 class="prefix_3 grid_13">05 de Junio al 07 de Junio de 2012</h4>
			<p class="prefix_3 grid_7 justify">El Fondo Global de Alimentos estuvo presente en la feria de alimentos y bevidas m&aacute;s importante en M&eacute;xico, &quot;M&eacute;xico Alimentaria&quot; que tuvo lugar en Cuidad de M&eacute;xico a mediados del a&ntilde;o 2012. Esta exposici&oacute;n representa el foro de negocios m&aacute;s importante de M&eacute;xico con el que llegar a la industria de la distribuci&oacute;n comercial y al sector de la restauraci&oacute;n:  grandes cadenas de distribuci&oacute;n, centrales de abasto, hoteles, restaurantes, bares, comedores industriales y hospitales.</p>
			<a href="http://www.alimentaria-mexico.com/es/" target="_blank">
				<img alt="Alimentaria Logo" src="../images/alim-mex-logo.jpg" class="grid_6"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 class="prefix_3 grid_13">Enero</h3>
			<h4 class="prefix_3 grid_13">24 de Enero al 26 de Enero de 2012</h4>
			<p class="prefix_3 grid_11 justify">El Fondo Global de Alimentos form&oacute; parte del &quot;International Poultry Expo 2012&quot; (Exposici&oacute;n Internacional de Aves de Corral 2012). La associaci&oacute;n de Aves de Corral y Huevos de los Estados Unidos es la organizaci&oacute;n que se encarga de representar hoy en d&iacute;a el espectro completo de la industria de las aves de corral, con un foco especial en servir a las compa&ntilde;&iacute;as miembro a trav&eacute;s de financiamientos para la investigaci&oacute;n, educaci&oacute;n, comunicaci&oacute;n y asistencia t&eacute;cnica.</p>
			<a href="http://www.ipe13.org/" target="_blank">
				<img alt="IPE Logo" src="../images/ipe-logo.gif" class="grid_2"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>