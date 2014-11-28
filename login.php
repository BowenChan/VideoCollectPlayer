<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	$_SESSION['login_user'] = $username;
	echo $_SESSION['login_user'];
?>
<form name = "login" action = "" method="post">
	<p> Username: <input type = "text" name ="username" placeholder = "username"/></p>
    <p> Password: <input type = "password" name = "password" placeholder = "********"/></p>
    <p><input name ="submit" type ="submit" value = "login"></p>
</form>
<script language = "javascript">
	function check(form){
		if(form.username.value == "username" && form.password.value == "password"){
			window.open('memberonly.only');
		}
		
		
	}
	
</script>
</body>
</html>