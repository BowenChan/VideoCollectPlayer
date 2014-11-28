<!doctype html>
<html>
<head>
<?php
	include('session.php');
?>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	
<body>
	<div> Welcome : <?php echo $login_session; ?> </div>
    <div> <a href = "logout.php"> Log Out </a></div>
</body>
</html>