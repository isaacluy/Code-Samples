<?php
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	if(isset($_GET["s"])) $subPageId = $_GET["s"];
	if($subPageId != "mision" && $subPageId != "vision" && $subPageId != "objetivos" && $subPageId != "valores" && $subPageId != "presencia") $subPageId = "mision";
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="content" class="container_16">
			<div id="submenu" class="grid_3">
				<a <?php if($subPageId == "mision") echo 'class="current" ';?>href="quienes_somos.php"><?php echo $pageDescriptions["mision"];?></a>
				<a <?php if($subPageId == "vision") echo 'class="current" ';?>href="quienes_somos.php?s=vision"><?php echo $pageDescriptions["vision"];?></a>
				<!-- <a <?php if($subPageId == "objetivos") echo 'class="current" ';?>href="quienes_somos.php?s=objetivos"><?php echo $pageDescriptions["objetivos"];?></a> -->
				<a <?php if($subPageId == "presencia") echo 'class="current" ';?>href="quienes_somos.php?s=presencia"><?php echo $pageDescriptions["presencia"];?></a>
				<a <?php if($subPageId == "valores") echo 'class="current" ';?>class="last" href="quienes_somos.php?s=valores"><?php echo $pageDescriptions["valores"];?></a>
			</div>
			<div id="photo" class="grid_13 <?php echo $subPageId;?>"></div>
			<h2 class="prefix_3 grid_13"><?php echo $pageDescriptions[$pageId];?></h2>
			<div id="mision" class="hide prefix_3 grid_13 last <?php if($subPageId == "mision") echo "show";?>">
				<h3><?php echo $pageDescriptions["mision"];?></h3>
				<h4>Misi&oacute;n Actual</h4>
				<p>Proveer de insumos alimenticios de excelente calidad, que satisfagan las necesidades integrales de nuestros clientes.</p>
				<h4>Misión a Corto Plazo</h4>
				<p>Constituirnos como la principal empresa en transformación eficiente de recursos alimenticios primarios, en productos terminados a través de la combinación entre producción agrícola y comercialización oportuna.</p>
			</div>
			<div id="vision" class="hide prefix_3 grid_13 last <?php if($subPageId == "vision") echo "show";?>">
				<h3><?php echo $pageDescriptions["vision"];?></h3>
				<p>Consolidarnos como empresa comercializadora de comoditéis alimenticios a nivel mundial, con una línea de transformación de alimentos primarios a ser comercializados como productos terminados agregando así valor en la cadena productiva.</p>
			</div>
			<!-- <div id="objetivos" class="hide prefix_3 grid_13 last <?php if($subPageId == "objetivos") echo "show";?>">
				<h3><?php echo $pageDescriptions["objetivos"];?></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div> -->
			<div id="presencia" class="hide prefix_3 grid_13 last <?php if($subPageId == "presencia") echo "show";?>">
				<h3><?php echo $pageDescriptions["presencia"];?></h3>
				<p>El fondo global de alimentos tiene establecidas sus principales sedes en los siguientes pa&iacute;ses:</p>
				<ul>
					<li>Estados Unidos</li>
					<li><?php echo $pageDescriptions["venezuela"];?></li>
					<li><?php echo $pageDescriptions["brasil"];?></li>
					<li><?php echo $pageDescriptions["argentina"];?></li>
					<li><?php echo $pageDescriptions["uruguay"];?></li>
				</ul>
				<img id="presencia_img" src="../images/world_presence.jpg" width="750" alt="Presencia Internacional"/>
				<p>En el futuro cercano esperamos expandir nuestra presencia abriendo nuevas oficinas en:</p>
				<ul>
					<li>China</li>
					<li>India</li>
					<li>Sud&aacute;frica</li>
					<li>Per&uacute;</li>
					<li>Finlandia</li>
				</ul>
				<h4>Esquema de Comercio Internacional</h4>
				<p>Nuestro esquema de comercio internacional esta compuesto de pa&iacute;ses proveedores:</p>
				<ul>
					<li>Estados Unidos</li>
					<li><?php echo $pageDescriptions["brasil"];?></li>
					<li><?php echo $pageDescriptions["argentina"];?></li>
					<li>Canad&aacute;</li>
				</ul>
				<p>y pa&iacute;ses compradores:</p>
				<ul>
					<li><?php echo $pageDescriptions["venezuela"];?></li>
					<li>Colombia</li>
					<li>Ecuador</li>
					<li>Per&uacute;</li>
					<li>China</li>
					<li>M&eacute;xico</li>
				</ul>
				<p>entre otros...</p>
				<img id="esquema_img" src="../images/esquema_es.jpg" width="750" alt="Esquema de Comercio Internacional"/>
			</div>	
			<div id="valores" class="hide prefix_3 grid_13 last <?php if($subPageId == "valores") echo "show";?>">
				<h3><?php echo $pageDescriptions["valores"];?></h3>
				<p>Estos son los valores fundamentales que construyen nuestro negocio:</p>
				<ul>
					<li><a href="#liderazgo">Liderazgo</a></li>
					<li><a href="#trabajo_inteligente">Trabajo inteligente</a></li>
					<li><a href="#disciplina_estrategica">Disciplina estratégica</a></li>
				</ul>
				<h4 id="liderazgo">Liderazgo</h4>
				<p>Nuestra gente trabaja al máximo de su potencial. Ellos no sólo asumen grandes retos, están comprometidos a inspirar a los demás.</p>
				<h4 id="trabajo_inteligente">Trabajo inteligente</h4>
				<p>Colaboramos, construimos alianzas, aumentamos la productividad y ofrecemos productos de calidad.</p>
				<h4 id="disciplina_estrategica">Disciplina estratégica</h4>
				<p>Producimos resultados excepcionales. Nuestra gente está comprometida a inspirar a los demás con disciplina porque creemos que grandes retos están comúnmente relacionados con buenos resultados.</p>
			</div>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>