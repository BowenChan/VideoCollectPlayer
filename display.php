<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel = "stylesheet" href = "table.css">
<title>Untitled Document</title>
</head>

<body>
<?php 
	require_once("connect.php");
	require_once("selectdb.php");
	$res = mysqli_query($link, "SELECT * FROM `fun_video` ORDER BY id ASC")
	or die("This is failing");
	$organize = "";
	$video_data = array();
?>
	<table>
    	<tr>
    	<th style = "border:none"> id </th>
        <th style = "border:none"> video title </th>
        <th style = "border:none"> video length </th>
        <th style = "border:none"> Highest Resolution </th>
        <th style = "border:none"> Description </th>
        <th style = "border:none"> View Count </th>
        <th style = "border:none"> Video Type </th>
        <th style = "border:none"> Icon Image </th>
        <th style = "border:none"> Video Tags </th>
        </tr>
<?php
	while($current_vid = mysqli_fetch_array($res))
	{
		$output = "<tr style=text-align:center> ". 
		"<td>" . $current_vid['id'] . "</td>" .
		"<td>" . $current_vid['title'] . "</td>" .
		"<td>" . $current_vid['videolength'] . " minutes</td>" .
		"<td>" . $current_vid['highestresolution'] . "</td>" .
		"<td>" . $current_vid['description'] . "</td>" .
		"<td> " . $current_vid['viewcount'] . "</td>" .
		"<td>" . $current_vid['language'] . "</td>" .
		"<td><a href = " . $current_vid['videolink'] . "><img src =" . $current_vid['iconimage'] . " alt=picture></a></td>" .
		"<td>" . $current_vid['tag'] . "</td>" .
		"</tr>";
		echo $output;
	}
?>
</body>
</html>