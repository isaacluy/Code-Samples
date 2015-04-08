<?php
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="content" class="container_16">
			<div id="submenu" class="grid_3">
				<a href="#maiz">Corn</a>
				<a href="#feed0_title">Agriculture</a>
				<!-- <a href="#feed1_title">Metals</a> -->
				<a class="last" href="#fga">FGA</a>
			</div>
			<div id="photo" class="grid_13 <?php echo $pageId;?>"></div>
			<h2 class="prefix_3 grid_13"><?php echo $pageDescriptions[$pageId];?></h2>
			<h3 id="maiz" class="prefix_3 grid_13">CME Group - Corn</h3>
			<a href="http://www.cmegroup.com/trading/agricultural/grain-and-oilseed/corn.html" target="_blank">
				<img alt="CME Group" id="cme" class="prefix_3 grid_13" src="../images/cbotcis.png"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 id="feed0_title" class="prefix_3 grid_13">CME Group - Agriculture</h3>
			<div id="feed0" class="prefix_3 grid_13"></div>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<!-- <h3 id="feed1_title" class="prefix_3 grid_13">CME Group - Metals</h3>
			<div id="feed1" class="prefix_3 grid_13"></div>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a> -->
			<h2 id="fga" class="prefix_3 grid_13">Lastest News from the FGA</h2>
			<h3 class="prefix_3 grid_13">October</h3>
			<h4 class="prefix_3 grid_13">October 21th to October 25th, 2012</h4>
			<p class="prefix_3 grid_7 justify">The FGA was part of the 2012 SIAL - Global Food Marketplace that took place in Paris. SIAL is considered by many the world&#x27;s number one food exhibition. The two main objectives of our visit were to discover new products from the food market trends and innovations as well as to update our knowledge on how to face the major challenges faced by the global food industry.</p>
			<a href="http://www.sialparis.com/" target="_blank">
				<img alt="Sial Logo" src="../images/sial-logo.png" class="grid_6"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 class="prefix_3 grid_13">August</h3>
			<h4 class="prefix_3 grid_13">August 25th to September 2nd, 2012</h4>
			<p class="prefix_3 grid_7 justify">The Expointer fair took place in the Assis Brasil Expo Park. This is one of the biggest and most important world expos, in which Rio Grande do Sul shows the world it's main treasures fruit of the labor of its people. The fair has sustainability and irrigation as the main factors that push the economy of the area, in the expo's floor you can see the most advanced technologies and machineries, and the FGA was there front row to enhance their knowledge in this field.</p>
			<a href="http://www.expointer.rs.gov.br/site2012/" target="_blank">
				<img alt="Expointer Logo" src="../images/expointer-logo.jpg" class="grid_6"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 class="prefix_3 grid_13">June</h3>
			<h4 class="prefix_3 grid_13">Junio 5th to June 7th, 2012</h4>
			<p class="prefix_3 grid_7 justify">The FGA was also present in the most important food and beverage event in Mexico, "Mexico Alimentaria", which took place in Mexico City in mid-2012. This event represents Mexico's most important business forum, encompassing the commercial distribution and food and hospitality industries – large distribution chains, supply networks, hotels, restaurants, bars and industrial and hospital canteens.</p>
			<a href="http://www.alimentaria-mexico.com/en/" target="_blank">
				<img alt="Alimentaria Logo" src="../images/alim-mex-logo.jpg" class="grid_6"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
			<h3 class="prefix_3 grid_13">January</h3>
			<h4 class="prefix_3 grid_13">January 24th to January 26th, 2012</h4>
			<p class="prefix_3 grid_11 justify">FGA took part of the International Poultry Expo 2012 held in Atlanta, GA. U.S. Poultry &amp; Egg Association is an all-feather organization representing the complete spectrum of today&rsquo;s poultry industry, with a focus on serving member companies through research funding, education, communication, and technical assistance.</p>
			<a href="http://www.ipe13.org/" target="_blank">
				<img alt="IPE Logo" src="../images/ipe-logo.gif" class="grid_2"/>
			</a>
			<a href="#top" class="back_to_top"><?php echo $formTitles["volver_arriba"];?></a>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>