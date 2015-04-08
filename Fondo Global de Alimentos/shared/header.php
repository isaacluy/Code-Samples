<?php
	include("constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang?>" lang="<?php echo $lang?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="icon" type="image/vnd.microsoft.icon" href="../images/favicon.ico" />

	<title><?php echo $pageDescriptions[$pageId]; ?> | Fondo Global de Alimentos</title>
	
	<meta name="description" content="<?php echo $pageDescriptions[$pageId]; ?>" />
	<meta name="keywords" content="FGA, trading, food, corn, maiz, animal feed, global commerce, cme, storage grains, soy, soya, soja, rice, beams, chicago board exchange" />
	
	<link rel="stylesheet" href="../css/lib/960gs/reset.css" />
	<link rel="stylesheet" href="../css/lib/960gs/text.css" />
	<link rel="stylesheet" href="../css/lib/960gs/960.css" />
	<link rel="stylesheet" href="../css/lib/nivo-slider.css" />
	<link rel="stylesheet" href="../css/styles.css" />

<?php
	if($pageId == "index" || $pageId == "pedido" || $pageId == "noticias" || $pageId == "contacto") {
?>	
	<script type="text/javascript" src="../js/lib/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="../js/lib/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/lib/jquery.zrssfeed.js"></script>
	<script type="text/javascript" src="../js/core.js"></script>
<?php
	}
?>
	<script type="text/javascript" src="http://use.typekit.com/sbp2tfg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
</head>

<body id="<?php echo $pageId."_".$lang; ?>" class="<?php echo $pageId." ".$lang; ?>">

	<div id="top">
		<div class="container_16">
			<div id="language" class="grid_16">
				<a href="/fga/es/" id="spanish" <?php if( $lang == "es" ) echo 'class="hide"'; ?>>Espa&ntilde;ol</a>
				<a href="/fga/en/" id="english" <?php if( $lang == "en" ) echo 'class="hide"'; ?>>English</a>
			</div>
			<h1 id="logo" class="grid_6"><a href="/fga/<?php echo $lang;?>/">Fondo Global de Alimentos</a></h1>
			<div id="menu" class="grid_9">
				<ul>
					<li id="index">
						<?php echo ($pageId == "index") ? '<a class="current">'.$pageDescriptions["index"].'</a>' : '<a href="index.php">'.$pageDescriptions["index"].'</a>'; ?>
					</li>
					<li id="quienes_somos">
						<?php echo ($pageId == "quienes_somos") ? '<a class="current">'.$pageDescriptions["quienes_somos"].'</a>' : '<a href="quienes_somos.php">'.$pageDescriptions["quienes_somos"].'</a>'; ?>
					</li>
					<li id="productos">
						<?php echo ($pageId == "productos") ? '<a class="current">'.$pageDescriptions["productos"].'</a>' : '<a href="productos.php">'.$pageDescriptions["productos"].'</a>'; ?>
					</li>
					<li id="noticias">
						<?php echo ($pageId == "noticias") ? '<a class="current">'.$pageDescriptions["noticias"].'</a>' : '<a href="noticias.php">'.$pageDescriptions["noticias"].'</a>'; ?>
					</li>
					<li id="contacto">
						<?php echo ($pageId == "contacto") ? '<a class="current">'.$pageDescriptions["contacto"].'</a>' : '<a href="contacto.php">'.$pageDescriptions["contacto"].'</a>'; ?>
					</li>
				</ul>
			</div>
		</div>
	</div>