<?php

	include('connect.php');
	include('selectdbt.php');
	session_start();
	$user_check = $_SESSION['login_user'];
	$user_sql = mysqli_query($link, "SELECT username FROM user WHERE username='$user_check'");
	
	$row = mysqli_fetch_assoc($user_sql);
	$login_session = $row['username'];
	if(!isset($login_session)){
		header('location: memberonly.php');
	}
?>