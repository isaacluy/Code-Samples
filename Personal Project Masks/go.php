<?php 

	//echo "GO!!!";
	//GET FORM POST VARIABLES
	if(isset($_POST["masks"])) $masks = $_POST["masks"];
	if(isset($_POST["sound"])) $sound = $_POST["sound"];
	if(isset($_POST["order"])) $order = $_POST["order"];
	if(isset($_POST["janda"])) $janda = $_POST["janda"];

	
	// echo $masks."!";
	// echo $sound."!";
	// echo $order."!";
	// echo $janda."!";
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Masks Trainer | The Pochinko Technique - Clown Through Mask</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="css/lib/960gs/reset.css" />
		<link rel="stylesheet" href="css/lib/960gs/text.css" />
		<link rel="stylesheet" href="css/lib/960gs/960.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript">
			var flashvars = { masks: "<?php echo $masks; ?>", sound: "<?php echo $sound; ?>", order: "<?php echo $order; ?>", janda: "<?php echo $janda; ?>" };
        	var params = { menu: "false", scale: "noScale", allowFullscreen: "true", allowScriptAccess: "always", bgcolor: "", wmode: "direct" };
        	var attributes = { id:"FlashVars" };
			swfobject.embedSWF("MasksTrainer.swf", "alternative", "1024", "768", "10.0.0", false, flashvars, params, attributes);
		</script>
	</head>
	<body>
		<div id="container">
			<div id="alternative">
				<a href="http://www.adobe.com/go/getflashplayer">
					<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
				</a>
			</div>
		</div>
	</body>
</html>
