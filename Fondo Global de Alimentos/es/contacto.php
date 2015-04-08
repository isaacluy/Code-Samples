<?php
	//GET PAGE ID
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	
	// GET COUNTRY
	if(isset($_GET["p"])) $subPageId = $_GET["p"];
	if($subPageId != "argentina" && $subPageId != "brasil" && $subPageId != "uruguay" && $subPageId != "usa" && $subPageId != "venezuela") $subPageId = "usa";
	
	//GET FORM POST VARIABLES
	if(isset($_POST["fname"])) $fname = $_POST["fname"];
	if(isset($_POST["lname"])) $lname = $_POST["lname"];
	if(isset($_POST["email"])) $email = $_POST["email"];
	if(isset($_POST["phone"])) $phone = $_POST["phone"];
	if(isset($_POST["message"])) $message = $_POST["message"];
	
	// INCLUDE HEADER 
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="content" class="container_16">
			<div id="submenu" class="grid_3">
				<a href="contacto.php?p=usa" rel="usa"<?php if($subPageId == "usa") echo ' class=current';?>><?php echo $pageDescriptions["usa"];?></a>
				<a href="contacto.php?p=venezuela" rel="venezuela"<?php if($subPageId == "venezuela") echo ' class=current';?>><?php echo $pageDescriptions["venezuela"];?></a>
				<a href="contacto.php?p=brasil" rel="brasil"<?php if($subPageId == "brasil") echo ' class=current';?>><?php echo $pageDescriptions["brasil"];?></a>
				<a href="contacto.php?p=argentina" rel="argentina"<?php if($subPageId == "argentina") echo ' class=current';?>><?php echo $pageDescriptions["argentina"];?></a>
				<a href="contacto.php?p=uruguay" rel="uruguay" class="last<?php if($subPageId == "uruguay") echo ' current';?>"><?php echo $pageDescriptions["uruguay"];?></a>
			</div>
			<div id="photo" class="grid_13<?php echo " ".$pageId." ".$subPageId; ?>"></div>
			<h2 id="page_title" class="prefix_3 grid_13"><?php echo $pageDescriptions[$pageId];?></h2>
			<div id="argentina" class="hide prefix_3 grid_13 pais <?php if($subPageId == "argentina") echo "show";?>">
				<h3><?php echo $pageDescriptions["argentina"];?></h3>
				<div class="grid_6 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["direccion"];?></p>
					<p>Av Santa Fe 3041 Piso 12 Dpto A</p>
					<p>Ciudad Autónoma de Buenos Aires</p>
				</div>
				<div class="grid_5 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["telefono"];?></p>
					<p>+54 114 384 1051</p>
					<p><?php echo $formTitles["celular"];?></p>
					<p>+54 911 6605 7215</p>
				</div>
			</div>
			<div id="brasil" class="hide prefix_3 grid_13 pais <?php if($subPageId == "brasil") echo "show";?>">
				<h3><?php echo $pageDescriptions["brasil"];?></h3>
				<div class="grid_6 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["direccion"];?></p>
					<p>Rua João Eugênio, 126</p>
					<p>Paranaguá, PR</p>
				</div>
				<div class="grid_5 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["telefono"];?></p>
					<p>+55 41 3422 9351</p>
					<p><?php echo $formTitles["celular"];?></p>
					<p>+55 41 9948 935</p>
				</div>
			</div>
			<div id="uruguay" class="hide prefix_3 grid_13 pais <?php if($subPageId == "uruguay") echo "show";?>">
				<h3><?php echo $pageDescriptions["uruguay"];?></h3>
				<div class="grid_6 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["direccion"];?></p>
					<p>Calle Av. General Rivera 3519, Apartamento 602</p>
				</div>
				<div class="grid_5 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["telefono"];?></p>
					<p>+59 89553996</p>
				</div>
			</div>
			<div id="usa" class="hide prefix_3 grid_13 pais <?php if($subPageId == "usa") echo "show";?>">
				<h3><?php echo $pageDescriptions["usa"];?></h3>
				<div class="grid_6 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["direccion"];?></p>
					<p>501 Brickell Key Dr. Suite 507</p>
					<p>33131 Miami, Florida</p>
				</div>
				<div class="grid_5 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["telefono"];?></p>
					<p>+1 305 906 2673</p>
				</div>
			</div>
			<div id="venezuela" class="hide prefix_3 grid_13 pais <?php if($subPageId == "venezuela") echo "show";?>">
				<h3><?php echo $pageDescriptions["venezuela"];?></h3>
				<div class="grid_6 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["direccion"];?></p>
					<p>Avenida Venezuela, Torre Lamaletto</p>
					<p>Piso 11, El Rosal, Caracas</p>
				</div>
				<div class="grid_5 bebas">
					<div class="logo"></div>
					<p><?php echo $formTitles["telefono"];?></p>
					<p>+58 212 953 2730</p>
				</div>
			</div>
			<div id="formulario" class="prefix_3 grid_13">
				<?php
					if ( strlen($fname) > 0 && strlen($lname) > 0 && strlen($email) > 0 && strlen($message) > 0 ) {

						$body = "\n\n\n\nNombre: ".$fname;
						$body .= "\n\nApellido: ".$lname;
						$body .= "\n\nEmail: ".$email;
						$body .= "\n\nTeléfono: ".$phone;
						$body .= "\n\nMensaje:\n".$message;

						$body = wordwrap($body, 70);

						if( !mail("email@gmail.com", "Contacto - Fondo Global de Alimentos", $body) /*|| !mail("client@fonglobal.com", "Contacto - Fondo Global de Alimentos", $body)*/ ) {
							echo "<p class='form_result'>".$formTitles["error1"]."</p><p class='form_result'>".$formTitles["error2"]."</p>";
						} else {
							echo "<p class='form_result'>".$formTitles["confirm1"]."</p><p class='form_result'>".$formTitles["confirm2"]."</p>";
						}
					} else {
				?>
				<p>Para ponerse en contacto con nuestras oficinas por favor complete el siguiente formulario y le responderemos lo m&aacute;s pronto posible.</p>
				<form id="contactForm" action="contacto.php" method="post" accept-charset="utf-8">
					<p><?php echo $formTitles["nombre"];?></p>
					<input type="text" name="fname" value="" id="fname" maxlength="50" size="50">
					<p><?php echo $formTitles["apellido"];?></p>
					<input type="text" name="lname" value="" id="lname" maxlength="50" size="50">
					<p><?php echo $formTitles["email"];?></p>
					<input type="text" name="email" value="" id="email" maxlength="50" size="50">
					<p><?php echo $formTitles["telefono"];?></p>
					<input type="text" name="phone" value="" id="phone" maxlength="20" size="20">
					<p><?php echo $formTitles["pais"];?></p>
					<input type="text" name="pais" id="pais" maxlength="20" size="20" value="<?php echo $pageDescriptions[$subPageId];?>"/>
					<p><?php echo $formTitles["mensaje"];?></p>
					<textarea rows="10" cols="45" id="message" name="message" wrap="physical"></textarea>
					<input id="enviar" type="submit" value="<?php echo $formTitles["enviar"];?>">
					<input id="reset" type="reset" value="<?php echo $formTitles["reset"];?>">
				</form>
				<?php
					}
				?>
			</div>
		</div>
	</div>
<?php
	include("../shared/footer.php");
?>
