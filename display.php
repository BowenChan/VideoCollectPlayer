<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
    	<th> id </th>
        <th> video title </th>
        <th> video link </th>
        <th> video length </th>
        <th> Highest Resolution </th>
        <th> Description </th>
        <th> View Count </th>
        <th> Video Type </th>
        <th> Icon Image </th>
        <th> Video Tags </th>
        </tr>
<?php
	while($current_vid = mysqli_fetch_array($res))
	{
		$output = "<tr> ". 
		"<td>" . $current_vid['id'] . "</td>" .
		"<td>" . $current_vid['title'] . "</td>" .
		"<td>" . $current_vid['videolink'] . "</td>" .
		"<td>" . $current_vid['videolength'] . " minutes</td>" .
		"<td>" . $current_vid['highestresolution'] . "</td>" .
		"<td>" . $current_vid['description'] . "</td>" .
		"<td> " . $current_vid['language'] . "</td>" .
		"<td>" . $current_vid['viewcount'] . "</td>" .
		"<td> <img src =" . $current_vid['iconimage'] . " alt=picture></td>" .
		"<td>" . $current_vid['tag'] . "</td>" .
		"</tr>";
		echo $output;
	}
?>
</body>
</html>