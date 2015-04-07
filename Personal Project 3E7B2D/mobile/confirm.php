<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3E7B2D</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div id="wrapper">

						
        <div class="boxes">
    	<?php
				$server = "localhost";
				$username = "username";
				$password = "password";
				$database = "3E7B2D";
				$error = "ERROR!";
				
				$nick = $_POST['nick'];
				
				$message = $_POST['message'];
	
				$date = date("Y-m-d");
				
				// CONNECT TO DATABASE
				$db = mysql_connect($server, $username, $password);
				mysql_select_db($database,$db);
				
				// INSERT INTO DATABASE
				$query = "INSERT INTO SMS (ID, Message, Author, Date) VALUES ('', '$message','$nick','$date')";
				$result = mysql_query($query,$db);
				
				if (!$result) {
					echo "<p>".$error."</p>";
					return;
				}
				
				//GIVING FEEDBACK TO THE USER
				echo '<p> Your message has been saved </p>';
				
				mysql_close($db);
			?>
    </div>
</div>
</body>
</html>