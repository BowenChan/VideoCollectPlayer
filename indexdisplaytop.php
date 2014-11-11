<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	include_once('connect.php');
	include_once('selectdb.php');
	
	$q = mysqli_query($link, "SELECT `iconimage` from `fun_video` LIMIT 0, 5");
	$row = mysqli_fetch_array($q);
	
	
?>

<body>
</body>
</html>