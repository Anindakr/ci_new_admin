<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LogIn</title>
</head>
<body>
<form method="post">
	Enter E-mail:<input type="text" name="email"><br>
	Enter Password:<input type="text" name="password"><br>
	<input type="submit" name="submit" value="LogIn">
	<a href="<?php echo base_url().'index.php/Myfinalcontroller/savedata'?>">New Registration</a>
</form>
</body>
</html>