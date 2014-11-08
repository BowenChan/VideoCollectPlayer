<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cs174";
	$table = "fun_video";
	$link = mysqli_connect($server, $username,$password)
	or die("Unable to connect to database");
	
	$selected = mysqli_select_db($link, $dbname)
	or die("Could not select database");
	printf("Connection to the Server Opened");
	
?>
</body>
</html>