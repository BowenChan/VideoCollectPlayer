<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	sesion_start();
	if(session_destroy())
	{
		header("Location: index.php");
	}
?>
<body>
</body>
</html>