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
<<<<<<< HEAD
	$link = mysqli_connect($server, $username,$password)
	or die("Unable to connect to database");
	
	$selected = mysqli_select_db($link, $dbname)
	or die("Could not select database");
=======
	$link = mysqli_connect($server, $user_name,$password)
	or die("Unable to connect to database");
	
	$selected = mysqli_select_db($link, $table)
	or die("Could not select table");
>>>>>>> d2ef2cfbc21acb6bf5640e1fc010561e6d41c827
	printf("Connection to the Server Opened");
	
?>
</body>
</html>