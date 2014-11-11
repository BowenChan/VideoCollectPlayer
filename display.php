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
	include('video_sort.php');

	/*
	$res = mysqli_query($link, "SELECT * FROM `fun_video` ORDER BY id ASC")
	or die("This is failing");
	*/
	$organize = "";
	$video_data = array();
			
	//number of display per page
	$display = 10;
	$num_rec = null;
	$num_pages = 0;
	if(isset($_GET[$num_rec]))
	{
		$num_rec = 0;
	}
	//detemine the pages

	else($num_rec != mysqli_fetch_array(mysqli_query($link,"SELECT COUNT(*) FROM `fun_video` $constr1"),MYSQLI_NUM));
		$q = mysqli_query($link,"SELECT COUNT(*) FROM `fun_video` $constr1");
		$row = mysqli_fetch_array($q,MYSQLI_NUM);
		$num_rec = $row[0];
	if($num_rec == 0)
	{
	}
	else{
		if($num_rec > $display){
			$num_pages = ceil($num_rec/$display);
		}
		else
		{
			$num_pages = 1;
		}
	if(isset($_GET['s']))
	{
		$start = $_GET['s'];
	}
	else
	{
		$start = 0;
	}
	$q =  mysqli_query($link,"SELECT * FROM `fun_video` $constr1 ORDER by $order LIMIT $start, $display");
	}
?>
	<table style="width:100%">
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
	if($num_rec != 0)
	{
	while($row = mysqli_fetch_array($q, MYSQLI_ASSOC))
	{
		echo "<tr style=text-align:center> ". 
		"<td>" . $row['id'] . "</td>" .
		"<td>" . $row['title'] . "</td>" .
		"<td>" . $row['videolength'] . " minutes</td>" .
		"<td>" . $row['highestresolution'] . "</td>" .
		"<td>" . $row['description'] . "</td>" .
		"<td> " . $row['viewcount'] . "</td>" .
		"<td>" . $row['language'] . "</td>" .
		"<td><a href = " . $row['videolink'] . "><img src =" . $row['iconimage'] . " alt=picture></a></td>" .
		"<td>" . $row['tag'] . "</td>" .
		"</tr>";
	}
	mysqli_free_result($q);
	mysqli_close($link);
	
	
	include('pagedisplay.php');
	
	echo '</p>'; // Close the paragraph.
	echo '</table>';
	include('pagedisplay.php');
	}
	else
	{
		echo '</table>';
		echo "<h1 style=text-align:center>" . "There is no video matching this category" . "</h1>";
	}
?>
</body>
</html>