<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	$error = '';
	if(isset($_POST['submit'])){
		if(empty($_POST['username']) || empty($_POST['password'])){
			$error = "Username or Password is Invalid";
			header("location: loginindex.php");
			
		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			include_once('connect.php');
	
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($link, $username);
			$password = mysqli_real_escape_string($link, $password);
			
			include_once('selectdbt.php');
			
			$result = mysqli_query($link, "select * from users where password ='$password' AND username = '$username'");
			//$rows = mysqli_num_rows($result);
			if($result){
				$_SESSION['login_user'] = $username;
				header("location: profile.php");
			}
			else {
				$error = "Username or Password is invalid";
				echo $error;
			}
			mysqli_close($link);
		}
	}
?>
<script language = "javascript">
	function check(form){
		if(form.username.value == "username" && form.password.value == "password"){
			window.open('memberonly.only');
		}
		
		
	}
	
</script>
</body>
</html>