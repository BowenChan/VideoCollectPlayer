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
	include('header.html');
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['vid_title']) && isset($_POST['vid_link']) && isset($_POST['vid_length']) && isset($_POST['vid_resolution']) && isset($_POST['vid_descript']) && isset($_POST['vid_lang']) && isset($_POST['vid_view']) && isset($_POST['vid_type']) && isset($_POST['vid_icon']) && isset($_POST['vid_tag']))
		{
			$title = $_POST['vid_title'];
			$videolink = $_POST['vid_link'];
			$videolength = intval($_POST['vid_length']);
			$highestresolution = $_POST['vid_resolution'];
			$description = $_POST['vid_descript'];
			$language = $_POST['vid_lang'];
			$viewcount =  intval($_POST['vid_view']);
			$videotype = $_POST['vid_type'];
			$iconimage = $_POST['vid_icon'];
			$tag = $_POST['vid_tag'];
			if($selected){
			$type = implode(",", $videotype);
			$SQL = "INSERT INTO `fun_video`(`title`, `videolink`, `videolength`,`highestresolution`,`description`,`language`,`viewcount`,`videotype`,`iconimage`,`tag`) VALUES ('$title', '$videolink', '$videolength','$highestresolution', '$description', '$language', '$viewcount', '$type', '$iconimage', '$tag')";
			$retval = mysqli_query($link, $SQL) or die("</br>Error: " . mysqli_error($link));
			}
			printf ("<h1 style = 'text-align:center'>Thank you for your video submission</h1>");
		}
		else
		{
			printf("Not everything is filled");
			printf("<pre>");
			print_r($_POST);
			printf("</pre>");
		}	
	}
	
	mysqli_close($link);
?>

</body>
</html>