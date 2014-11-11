<?php
	$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';

	switch($sort)
	{
		case 'ttl':
			$order = 'title ASC';
			break;
		case 'lgnth':
			$order = 'videolength ASC';
			break;
		case 'rsltn':
			$order = 'highestresolution DESC';
			break;
		case 'lang':
			$order = 'language ASC';
			break;						
		case 'vwcnt':
			$order = 'viewcount ASC';
			break;	
		case 'vtype':
			$order = 'videotype ASC';
			break;
		default:
			$order = 'id ASC';
			$sort = 'id';
			break;
	}
	
	$constraint = "`highestresolution` = '720'";
	$sort2 = isset($_GET['sort2']) ? $_GET['sort2'] : 'id';
	
	switch($sort2)
	{
	}
?>