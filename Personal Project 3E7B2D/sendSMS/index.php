<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>3E7B2D</title>
<style>
	*{
		margin:0px;
		padding:0px;
		font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
	
	body{
		background-color:#000;
	}
	
	#main{
		width:320px;
		height:480px;
		background-image:url(sendSMS_BG.jpg);
		background-repeat:no-repeat;
	}
	
</style>
</head>

<body>

	<div id="main">
    	<br /><br /><br /><br /><br />
    	<form name="sendSMS"  id="sendSMS" method="post" action="confirm.php">
			<p style="color:#FFF;">Nickname: </p>
            <input type="text" name="nick"  id="nick" value="" size="40">
            <br /><br />
            <p style="color:#FFF;">Message: </p>
            <textarea name="message" id="message" cols="25" rows="3" wrap="yes"></textarea>
            <br /><br />
            <p><input type="submit" name="submit" value="Send"></p>	
		</form>
    </div>

</body>
</html>