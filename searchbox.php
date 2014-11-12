<!doctype html>
<?php
	if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
		
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
    Search: <input name = "searchquery" type = "text">
    <input name ="submitbtn" type = "submit" value = "search">
    <select name = "filter">
    	<option value= "All Video"></option>
        <option value= "All Video"></option>
    </select>
    </form>
    <div>
    <?php $search_output; ?>
    </div>
</body>
</html>