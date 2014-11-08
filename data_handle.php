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
	or die("Could not select table");
	if(isset($_POST['vid_title']) && isset($_POST['vid_link']) && isset($_POST['vid_length']) && isset($_POST['vid_resolution']) && isset($_POST['vid_descript']) && isset($_POST['vid_lang']) && isset($_POST['vid_view']) && isset($_POST['vid_type']) && isset($_POST['vid_icon']) && isset($_POST['vid_tag']))
	{
		printf("Everything is filled");
		$title = $_POST['vid_title'];
		$videolink = $_POST['vid_link'];
		$videolength = $_POST['vid_length'];
		$highestresolution = $_POST['vid_resolution'];
		$description = $_POST['vid_descript'];
		$language = $_POST['vid_lang'];
		$viewcount =  $_POST['vid_view'];
		$videotype = $_POST['vid_type'];
		$iconimage = $_POST['vid_icon'];
		$tag = $_POST['vid_tag'];
		if($selected){
			
		$SQL = "INSERT INTO `fun_video`(`title`, `videolink`, `videolength`,`highestresolution`,`description`,`language`,`viewcount`,`videotype`,`iconimage`,`tag`) VALUES ('$title', '$videolink', '$videolength','$highestresolution', '$description', '$language', '$viewcount', '$videotype', '$iconimage', '$tag')";
		$retval = mysqli_query( $link, $SQL) or die("</br>Error");
		}
	}
	else
	{
		printf("Not everything is filled");
		printf("<pre>");
		print_r($_POST);
		printf("</pre>");
	}	
	
	mysqli_close($link);
?>
</body>
</html>