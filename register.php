<!doctype html>
<html>
<head>
<?php
	include('header.html');
?>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<div style = "text-align: center; width: 200px; margin: 10px auto; border: 1px solid red">
	<p> Register Form </p>
</div>
<form name = "regi" action = "post" style = "margin: 20px auto; padding: 15px ; text-align:center; display: block; width: 200px; border: 2px solid black">
    <p>First Name: </br><input type="text" placeholder="First Name" id="firstname" name="firstname" value=""/> </p>
    <p>Last Name: </br><input type="text" placeholder="Last Name" name="lastname" value=""/></p>
    <p>Email: </br><input type="text" placeholder="Email" name="email" value=""/></p>
    <p>Username: </br><input type = "text" placeholder="Username" name ="username" value = ""/> </p>
    <p>Password: </br><input type="password" placeholder="Password" name="pass1"/></p>
    <p>Confirm Password: </br><input type="password" placeholder="Confirm Password" name="pass2"/></p> 
    <p><input id="register" type="submit" value="Register" /></p>
</form>
</body>
</html>