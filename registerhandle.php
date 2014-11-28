<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include_once('connect.php');
	include_once('selectdbt.php');
	include('header.html');
	session_start();
	if(isset($_SESSION['id'])) {
		header("location: user.php?id".$_SESSION['id']);
	}
	$first = "";
	$last = "";
	$email = "";
	$username = "";
	$redirect = "";
	
	$firsterror = "";
	$lasterror = "";
	$emailerror = "";
	$usererror ="";
	$pass1error = "";
	$pass2error = "";
	$error = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$first = $_POST['firstname'];
		$last = $_POST['lastname'];
		$email = $_POST['email'];
		
		if (strlen($_POST['firstname']) == 0){
			$firsterror = "*";
		} 
		if (strlen($_POST['lastname']) == 0){
			$lasterror = "*";
		} 
		if (strlen($_POST['email']) == 0){
			$emailerror = "*";
		} 
		if (strlen($_POST['username']) == 0){
			$usererror = "*";
		}
		if (strlen($_POST['pass1']) < 9){
			$pass1error = "*";
			$error .= "Your password must be at least 9 characters long. ";
		} 
		if (strlen($_POST['pass2']) == 0){
			$pass2error = "*";
		} 
		if($_POST['pass1'] !== $_POST['pass2']) {
			$pass2error = "*";
			$error .= "Your passwords do not match. ";
		}
		
		if(strlen($_POST['pass1']) > 0 && strlen($_POST['pass2']) > 0 && $_POST['pass1'] === $_POST['pass2']) {
			$pass = $_POST['pass1'];
			$SQLd = "INSERT INTO `user` (`firstname`, `lastname`,`email`, `username`,`password`) VALUES ($first,$last,$email,$username,$pass)";
			$retval = mysqli_query($link, $SQLd);
			
			$results = mysqli_stmt_affected_rows($retval);
			if($results == 1) {
				$sql = "SELECT * from `user` where email='".$email."' LIMIT 1";
				$raw_results = $mysqli->query($sql);		
				if($row = mysqli_fetch_array($raw_results)) {
					$_SESSION['id']=$row['id'];
					$_SESSION['email'] = $row['email'];
					$redirect = "<script>$(document).ready(function() {document.location = 'user.php?id=".$row['id']."'	});</script>";
					//$error = "Login successful";
				}
			} else {
				$error = "Someone has already registered with this email.";
			}
			
		}
	}
?>
</body>
</html>