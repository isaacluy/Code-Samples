<?php 
  $page = array(
    'index' => 'home',
    'location' => 'location',
    'contact' => 'contact',
    'work_with_us' => 'work-with-us'
  );

  $title = array(
    'index' => 'Home',
    'location' => 'Our Location',
    'contact' => 'Contact Us',
    'work_with_us' => 'Work with Us'
  );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title[$currentPage];?> | Soca kitchen &amp; pub</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <link href='http://fonts.googleapis.com/css?family=Teko:300|Merriweather:300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <?php if($currentPage == "contact" || $currentPage == "work_with_us") {?>
    <link href="css/bootstrapValidator.min.css" rel="stylesheet">
    <?php }?>
    <link href="css/slicknav.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="<?php echo $page[$currentPage];?>">
    <div class="container-fluid">
      <div id="header" class="row wood2-bg hidden-sm hidden-xs"><!-- Header -->
        <div id="header-inner" class="col-md-12">
          <ul id="menu" class="row list-unstyled"> <!-- Menu -->
            <li class="col-md-2 col-md-offset-1<?php if($currentPage == "index"){ echo " current";}?>"><a href="index.php">HOME</a></li>
            <li class="col-md-2<?php if($currentPage == "location"){ echo " current";}?>"><a href="location.php">LOCATION</a></li>
            <li id="logo" class="col-md-2 hidden-sm hidden-xs">
              <a href="index.php">SOCA Kitchen and Pub</a>
            </li>
            <li class="col-md-2 wwu-shrink<?php if($currentPage == "work_with_us"){ echo " current";}?>"><a href="work_with_us.php">WORK WITH US</a></li>
            <li class="col-md-2 cu-shrink<?php if($currentPage == "contact"){ echo " current";}?>"><a href="contact.php">CONTACT US</a></li>
          </ul> <!-- end Menu -->
        </div>
        <div class="col-md-12 steel-line"></div>
      </div><!-- end Header -->
      