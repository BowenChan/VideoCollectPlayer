<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	require_once("connect.php");
	require_once("selectdb.php");
	$res = mysqli_query($link, "SELECT * FROM `fun_video` ORDER BY id ASC")
	or die("This is failing");
	$organize = "";
	$video_data = array();
	while($current_vid = mysqli_fetch_array($res))
	{
		printf($current_vid['id']. "</br>");
	}
?>
</body>
</html>