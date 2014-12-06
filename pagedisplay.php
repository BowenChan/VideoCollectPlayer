<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page Display</title>
</head>

<body style = "text-align:center">
<?php
if ($num_pages > 1) {
	if(isset($constr))
	{
	}
	else
		$constr = "";
	echo '<br /><p>';
	$current_page = ($start/$display) + 1;
	
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="video.php?s=' . ($start - $display) . '&p=' . $num_pages . '&sort=' . $sort . '&constr=' . $constr .'">Previous</a> ';
	}
	
	// Make all the numbered pages:
	for ($i = 1; $i <= $num_pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="video.php?s=' . (($display * ($i - 1))) . '&p=' . $num_pages . '&sort=' . $sort . '&constr=' . $constr .'">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	
	// If it's not the last page, make a Next button:
	if ($current_page != $num_pages) {
		echo '<a href="video.php?s=' . ($start + $display) . '&p=' . $num_pages . '&sort=' . $sort . '&constr=' . $constr . '">Next</a>';
	}
	
	echo '</p>'; // Close the paragraph.
	
} // End of links section.
?>
</body>
</html>