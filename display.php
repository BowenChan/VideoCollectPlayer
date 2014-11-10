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
		
	//number of display per page
	$display = 3;
	
	//detemine the pages
	
	if(isset($_GET['p']) && is_numeric($_GET['p'])){
		$pages = $_GET['p'];
	}
	else
	{
		$q = mysqli_query($link,"SELECT COUNT(*) FROM `fun_video`");
		$number = mysqli_fetch_row($q,MYSQLI_NUM);
		$num_rec = $number[0];
		
		if($num_rec > $display){
			$pages = ceil($num_rec/$display);
		}
		else
		{
			$pages = 1;
		}
	}
	
	if(isset($_['s'])&& is_numeric($_GET['s']))
	{
		$start = $_GET['s'];
	}
	else
	{
		$start = 0;
	}
	
	$q =  mysqli_query($link,"SELECT * FROM `fun_video` ORDER BY 'id' ASC LIMIT $start, $display");
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
	while($current_vid = mysqli_fetch_array($q, MYSQLI_ASSOC))
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
	mysqli_free_result($q);
	mysqli_close($link);
	
	if($pages > 1)
	{
		echo '<br /><p?';
		
		$current_page = ($start/$display) + 1;
		
		if($current_page != 1){
			echo '<a href="video.php?s=' .($start - $display) . '&p=' .$pages .'"> Previous</a> ';
		}
		
		for($i = 1; $i <= $pages; $i++){
			if($i != $current_page){
				echo '<a href = "video.php?s='. (($display * ($i - 1))) . '&p=' . $pages . '">' . $i . '</a> ';
			}
			else
			{
				echo $i . ' ';
			}
		}
		
		if($current_page != $pages) {
			echo ' <a href = "video.php?s=' . ($start + $display) . '&p=' . $pages . '"> Next </a>';
		}
	}
?>
</body>
</html>