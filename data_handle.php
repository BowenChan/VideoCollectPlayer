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
	$link = mysqli_connect($server, $user_name,$password)
	or die("Unable to connect to database");
	
	$selected = mysqli_select_db($link, $table)
	or die("Could not select table");
	if(isset($_POST['vid_title']) && isset($_POST['vid_link']) && isset($_POST['vid_time']) && isset($_POST['vid_resolution']) && isset($_POST['vid_descript']) && isset($_POST['vid_lang']) && isset($_POST['vid_view']) && isset($_POST['vid_type']) && isset($_POST['vid_icon']) && isset($_POST['vid_tag']))
	{
		printf("Everything is filled");
	}
	/*
	if($selected){
		$SQL = "INSERT INTO fun_video(title, videolink, videolength,highestresolution,description,language,viewcount,videotype,iconeimage,tag) VALUES ('$_POST['vid_title']', $_POST['vid_link'], $_POST['vid_time'], $_POST['vid_resolution'], $_POST['vid_descript'], $_POST['vid_lang'],$_POST['vid_view'], $_POST['vid_type'], $_POST['vid_icon'], $_POST['vid_tag'])";
	*/
	
	
?>
</body>
</html>