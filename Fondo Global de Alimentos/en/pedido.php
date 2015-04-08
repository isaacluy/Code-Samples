<?php
	
	//GET PAGE ID
	$fullUri = explode("/", $_SERVER["PHP_SELF"]);
	$lang = $fullUri[2];
	$pageId = substr($fullUri[3], 0, strrpos($fullUri[3], ".php"));
	
	//GET GET VARIABLES
	if(isset($_GET["c"])) $c = $_GET["c"];
	if(isset($_GET["p"])) $p = $_GET["p"];
	
	//GET FORM POST VARIABLES
	if(isset($_POST["empresa"])) $empresa = $_POST["empresa"];
	if(isset($_POST["fname"])) $fname = $_POST["fname"];
	if(isset($_POST["lname"])) $lname = $_POST["lname"];
	if(isset($_POST["email"])) $email = $_POST["email"];
	if(isset($_POST["phone"])) $phone = $_POST["phone"];
	if(isset($_POST["categoria"])) $categoria = $_POST["categoria"];
	if(isset($_POST["producto"])) $producto = $_POST["producto"];
	if(isset($_POST["cantidad"])) $cantidad = $_POST["cantidad"];
	if(isset($_POST["unidad"])) $unidad = $_POST["unidad"];
	if(isset($_POST["puerto_salida"])) $puerto_salida = $_POST["puerto_salida"];
	if(isset($_POST["puerto_llegada"])) $puerto_llegada = $_POST["puerto_llegada"];
	if(isset($_POST["message"])) $message = $_POST["message"];
	
	// INCLUDE HEADER 
	include("../shared/header.php");
?>
	<div id="middle">
		<div id="content" class="container_16">
			<p><a href="productos.php">&larr; <?php echo $pageDescriptions["productos"];?></a></p>
			<h2 class="grey_line">Orders Form</h2>
			<div id="formulario">
				<?php
					if ( strlen($fname) > 0 && strlen($lname) > 0 && strlen($email) > 0 && strlen($puerto_salida) > 0 && strlen($puerto_llegada) > 0 && strlen($message) > 0 ) {

						$body = "\n\n\n\nEmpresa: ".$empresa;
						$body .= "\n\nNombre: ".$fname;
						$body .= "\n\nApellido: ".$lname;
						$body .= "\n\nEmail: ".$email;
						$body .= "\n\nTeléfono: ".$phone;
						$body .= "\n\nCategoría: ".$categoria;
						$body .= "\n\nProducto: ".$producto;
						$body .= "\n\nCantidad: ".$cantidad." ".$unidad;
						$body .= "\n\nPuerto de Salida: ".$puerto_salida;
						$body .= "\n\nPuerto de Llegada: ".$puerto_llegada;
						$body .= "\n\nMensaje:\n".$message;

						$body = wordwrap($body, 70);

						if( !mail("isaacluy@gmail.com", "Pedido - Fondo Global de Alimentos", $body) /*|| !mail("calidad@fonglobal.com", "Pedido - Fondo Global de Alimentos", $body)*/ ) {
							echo "<p class='form_result'>".$formTitles["error1"]."</p><p class='form_result'>".$formTitles["error2"]."</p>";
						} else {
							echo "<p class='form_result'>".$formTitles["confirm1"]."</p><p class='form_result'>".$formTitles["confirm2"]."</p>";
						}
					} else {
				?>
				<p>By filling out the following form you can contact our main offices to get more information about any of our products.</p>
				<form id="pedidoForm" action="pedido.php" method="post" accept-charset="utf-8">
					<div class="grid_10">
						<p><?php echo $formTitles["empresa"];?></p>
						<input type="text" name="empresa" value="" id="empresa" maxlength="30" size="30">
						<p><?php echo $formTitles["nombre"];?></p>
						<input type="text" name="fname" value="" id="fname" maxlength="30" size="30">
						<p><?php echo $formTitles["apellido"];?></p>
						<input type="text" name="lname" value="" id="lname" maxlength="30" size="30">
						<p><?php echo $formTitles["email"];?></p>
						<input type="text" name="email" value="" id="email" maxlength="30" size="30">
						<p><?php echo $formTitles["telefono"];?></p>
						<input type="text" name="phone" value="" id="phone" maxlength="20" size="20">
					</div>
					<div class="grid_6">
						<p><?php echo $formTitles["categoria"];?></p>
						<select name="categoria" id="categoria">
							<option value="granos"<?php if($c == "granos"){ echo ' selected="selected"';}?>><?php echo $pageDescriptions["granos"];?></option>
							<option value="animales"<?php if($c == "animales"){ echo ' selected="selected"';}?>><?php echo $pageDescriptions["animales"];?></option>
							<option value="aceites"<?php if($c == "aceites"){ echo ' selected="selected"';}?>><?php echo $pageDescriptions["aceites"];?>&nbsp;</option>
						</select>
						<!-- <input type="text" name="categoria" value="" id="categoria" maxlength="20" size="20"> -->
						<p><?php echo $formTitles["producto"];?></p>
						<select name="producto" id="producto_granos" class="hide">
							<option value="maiz"<?php if($p == "maiz"){ echo ' selected="selected"';}?>>Corn</option>
							<option value="trigo"<?php if($p == "trigo"){ echo ' selected="selected"';}?>>Wheat</option>
							<option value="cebada"<?php if($p == "cebada"){ echo ' selected="selected"';}?>>Barley</option>
							<option value="sorgo"<?php if($p == "sorgo"){ echo ' selected="selected"';}?>>Sorghum</option>
							<option value="cafe"<?php if($p == "cafe"){ echo ' selected="selected"';}?>>Coffee</option>
							<option value="cafe_organico"<?php if($p == "cafe_organico"){ echo ' selected="selected"';}?>>Organic Coffee&nbsp;</option>
						</select>
						<select name="producto" id="producto_animales" class="hide">
							<option value="aves"<?php if($p == "aves"){ echo ' selected="selected"';}?>>Poultry&nbsp;</option>
							<option value="bovino"<?php if($p == "bovino"){ echo ' selected="selected"';}?>>Bovine&nbsp;</option>
							<option value="porcino"<?php if($p == "porcino"){ echo ' selected="selected"';}?>>Porcine&nbsp;</option>
						</select>
						<select name="producto" id="producto_aceites" class="hide">
							<option value="aceite_maiz"<?php if($p == "aceite_maiz"){ echo ' selected="selected"';}?>>Corn oil</option>
							<option value="aceite_girasol"<?php if($p == "aceite_girasol"){ echo ' selected="selected"';}?>>Sunflower oil</option>
							<option value="aceite_oliva"<?php if($p == "aceite_oliva"){ echo ' selected="selected"';}?>>Olive oil</option>
							<option value="aceite_soya"<?php if($p == "aceite_soya"){ echo ' selected="selected"';}?>>Soy oil</option>
							<option value="aceite_pescado"<?php if($p == "aceite_pescado"){ echo ' selected="selected"';}?>>Fish oil</option>
							<option value="azucar"<?php if($p == "azucar"){ echo ' selected="selected"';}?>>Sugar</option>
							<option value="azucar_organica"<?php if($p == "azucar_organica"){ echo ' selected="selected"';}?>>Organic Sugar&nbsp;</option>
						</select>
						<!-- <input type="text" name="producto" value="" id="producto" maxlength="20" size="20"> -->
						<p><?php echo $formTitles["cantidad"];?></p>
						<input type="text" name="cantidad" value="0" id="cantidad" maxlength="5" size="5">
						<select name="unidad" id="unidad">
							<option value="kg">Kg</option>
							<option value="tons">Tons</option>
							<option value="lts">Litres</option>
							<option value="gallons">Gallons</option>
						</select>
						<p><?php echo $formTitles["puerto_salida"];?></p>
						<select name="puerto_salida" id="puerto_salida">
							<option value="" selected="selected">Select boarding port&nbsp;</option>
							<option value="usa"><?php echo $pageDescriptions["usa"];?></option>
							<option value="venezuela"><?php echo $pageDescriptions["venezuela"];?></option>
							<option value="brasil"><?php echo $pageDescriptions["brasil"];?></option>
							<option value="argentina"><?php echo $pageDescriptions["argentina"];?></option>
							<option value="uruguay"><?php echo $pageDescriptions["uruguay"];?></option>
						</select>
						<!-- <input type="text" name="puerto_salida" id="puerto_salida" maxlength="20" size="20" value=""/> -->
						<p><?php echo $formTitles["puerto_llegada"];?></p>
						<select name="puerto_llegada" id="puerto_llegada">
							<option value="" selected="selected">Select destination port&nbsp;</option>
							<option value="usa"><?php echo $pageDescriptions["usa"];?></option>
							<option value="venezuela"><?php echo $pageDescriptions["venezuela"];?></option>
							<option value="brasil"><?php echo $pageDescriptions["brasil"];?></option>
							<option value="argentina"><?php echo $pageDescriptions["argentina"];?></option>
							<option value="uruguay"><?php echo $pageDescriptions["uruguay"];?></option>
						</select>
						<!-- <input type="text" name="puerto_llegada" id="puerto_llegada" maxlength="20" size="20" value=""/> -->
					</div>
					<div class="grid_16">
						<p><?php echo $formTitles["mensaje"];?></p>
						<textarea rows="10" cols="45" id="message" name="message" wrap="physical"></textarea>
						<input id="enviar" type="submit" value="<?php echo $formTitles["enviar"];?>">
						<input id="reset" type="reset" value="<?php echo $formTitles["reset"];?>">
					</div>
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