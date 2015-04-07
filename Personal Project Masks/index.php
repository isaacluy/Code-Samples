<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Masks Trainer | The Pochinko Technique - Clown Through Mask</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="css/lib/960gs/reset.css" />
		<link rel="stylesheet" href="css/lib/960gs/text.css" />
		<link rel="stylesheet" href="css/lib/960gs/960.css" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<div class="container_16">
			<div class="prefix_3 grid_10 suffix_3">
				<h1>Masks Trainer</h1>
				<p class="first">This is a small tool that was created for people who have done the <a href="http://www.canadianclowning.com/classes.php" target="_blank">Clown 	Through Mask</a> workshop.</p>
				<p>To help you keep working on your masks and (as <a href="http://www.canadianclowning.com/about.php" target="_blank">Sue</a> would say) build muscle so the masks 	can serve you, instead of the other way around.</p>
				<form id="form" action="go.php" method="post" accept-charset="utf-8">
					<p>Select the number of masks you wish to train:</p>
					<select name="masks" id="masks">
						<option value="1">1 (1E)</option>
						<option value="2">2 (1I)</option>
						<option value="3">3 (2E)</option>
						<option value="4">4 (2I)</option>
						<option value="5">5 (3E)</option>
						<option value="6">6 (3I)</option>
						<option value="7">7 (4E)</option>
						<option value="8">8 (4I)</option>
						<option value="9">9 (5E)</option>
						<option value="10">10 (5I)</option>
						<option value="11">11 (6E)</option>
						<option value="12" selected="selected">12 (All)</option>
					</select>
					<p>Sound ON or OFF?</p>
					<select name="sound" id="sound">
  						<option value="1" selected="selected">ON</option>
						<option value="0">OFF</option>
					</select>
					<p>Random ON or OFF?</p>
					<select name="order" id="order">
  						<option value="0">ON</option>
						<option value="1" selected="selected">OFF</option>
					</select>
					<p>Joey and Auguste ON or OFF?</p>
					<p class="small">(Only recomended for people who did the <a href="http://www.canadianclowning.com/classes.php#janda" target="_blank">Joey and Auguste</a> 	workshop)</p>
					<select name="janda" id="janda">
  						<option value="1">ON</option>
						<option value="0" selected="selected">OFF</option>
					</select>
					<p></p>
					<input id="go" type="submit" value="Go">
					<input id="reset" type="reset" value="Reset">
				</form>
			</div>
		</div>
	</body>
</html>