<?php
	
	//DATABASE VARIABLES
	$server = "localhost";
    $username = "username";
    $password = "password";
    $database = "3E7B2D";

	
	//START MY XML FILE
	header( "content-type: text/xml" );
	$xml = '<?xml version="1.0" encoding="UTF-8"?>';
	$xml = $xml.'<messages>';
	
	// CONNECT TO DATABASE
	$db = mysql_connect($server, $username, $password);
	mysql_select_db($database,$db);
	
	// EXECUTING QUERY AND CREATIN XML
	$query = "SELECT * FROM SMS ORDER BY Date ASC";
	$result = mysql_query($query,$db);
	
	if ($result) {
		//$file= fopen("results.xml", "w");
		while ($myrow = mysql_fetch_array($result)) {		
			$xml = $xml."<sms id=\"".$myrow["ID"]."\" author=\"".$myrow["Author"]."\" date=\"".$myrow["Date"]."\">";
			$xml = $xml.$myrow["Message"];
			$xml = $xml."</sms>";
		}
		//fwrite($file, $xml);
		//fclose($file);
	} else {
		$error = "<p><b>Sorry! And error occured</b></p>";  
		echo $error;
	}
	
	$xml = $xml."</messages>";
	echo $xml;
	mysql_close($db);
	return;
?>