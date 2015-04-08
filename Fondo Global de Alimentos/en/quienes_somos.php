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
				<h4>Current Mission</h4>
				<p>Providing high quality food supplies that meet the comprehensive needs of our customers.</p>
				<h4>Short-term Mission</h4>
				<p>Establish ourselves as the leader in efficient transformation of primary food resources into finished products through the combination of timely agricultural production and marketing.</p>
			</div>
			<div id="vision" class="hide prefix_3 grid_13 last <?php if($subPageId == "vision") echo "show";?>">
				<h3><?php echo $pageDescriptions["vision"];?></h3>
				<p>Consolidate as a commodity food trading company worldwide, with a processing line of primary products to be sold as finished products to add value in the production chain.</p>
			</div>
			<!-- <div id="objetivos" class="hide prefix_3 grid_13 last <?php if($subPageId == "objetivos") echo "show";?>">
				<h3><?php echo $pageDescriptions["objetivos"];?></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div> -->
			<div id="presencia" class="hide prefix_3 grid_13 last <?php if($subPageId == "presencia") echo "show";?>">
				<h3><?php echo $pageDescriptions["presencia"];?></h3>
				<p>The FGA has established its main offices in the following countries:</p>
				<ul>
					<li>United States</li>
					<li><?php echo $pageDescriptions["venezuela"];?></li>
					<li><?php echo $pageDescriptions["brasil"];?></li>
					<li><?php echo $pageDescriptions["argentina"];?></li>
					<li><?php echo $pageDescriptions["uruguay"];?></li>
				</ul>
				<img id="presencia_img" src="../images/world_presence.jpg" width="750" alt="Presencia Internacional"/>
				<p>In the near future we hope to expand our presence by opening new offices in:</p>
				<ul>
					<li>China</li>
					<li>India</li>
					<li>South Africa</li>
					<li>Peru</li>
					<li>Finlandia</li>
				</ul>
				<h4>International Trade Scheme</h4>
				<p>Our international trading scheme consist of, supplying countries:</p>
				<ul>
					<li>United States</li>
					<li><?php echo $pageDescriptions["brasil"];?></li>
					<li><?php echo $pageDescriptions["argentina"];?></li>
					<li>Canada</li>
				</ul>
				<p>and buying countries:</p>
				<ul>
					<li><?php echo $pageDescriptions["venezuela"];?></li>
					<li>Colombia</li>
					<li>Ecuador</li>
					<li>Peru</li>
					<li>China</li>
					<li>Mexico</li>
				</ul>
				<p>amongst others...</p>
				<img id="esquema_img" src="../images/esquema_en.jpg" width="750" alt="Esquema de Comercio Internacional"/>
			</div>	
			<div id="valores" class="hide prefix_3 grid_13 last <?php if($subPageId == "valores") echo "show";?>">
				<h3><?php echo $pageDescriptions["valores"];?></h3>
				<p>These are the core values that build our business:</p>
				<ul>
					<li><a href="#liderazgo">Leadership</a></li>
					<li><a href="#trabajo_inteligente">Work Smart</a></li>
					<li><a href="#disciplina_estrategica">Strategic Discipline</a></li>
				</ul>
				<h4 id="liderazgo">Leadership</h4>
				<p>Our people work at their best. They not only take on big challenges, they are committed to inspiring others.</p>
				<h4 id="trabajo_inteligente">Work Smart</h4>
				<p>We collaborate, build partnerships, increase productivity and deliver quality products.</p>
				<h4 id="disciplina_estrategica">Strategic Discipline</h4>
				<p>Our people are committed to inspiring others with discipline because we believe that strong challenge is commonly connected with strong results.</p>
			</div>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>