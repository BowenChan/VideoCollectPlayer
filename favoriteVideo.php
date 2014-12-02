<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include('connect.php');
	include('selectdbfav.php');
	if(isset($_SESSION['id'])){
		$userID = $_SESSION['sess_user'];
		$vidID = $_GET['id'];
		$result = mysqli_query($link, "SELECT * FROM `fav_video` WHERE `user_id`=".$userID." AND `video_id`=".$vidID);
		if(mysqli_num_rows($result) === 0)
		{
			$sql = "INSERT INTO `fav_video`(`user_id`,`video_id`) VALUES ('$userID', '$vidID')";
			$retval = mysqli_query($link, $sql) or die("</br>Error: " . mysqli_error($link));
			
		}
	}
	else{
		header('Location: login.php');
	}
?>
</body>
</html>