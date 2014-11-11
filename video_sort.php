<pre><?php
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
	$constr = isset($_GET['constr']) ? $_GET['constr'] : "";
	echo $constr;
	switch($constr)
	{
		//resolution
		case '144':
			$constr1 = "WHERE `highestresolution` = '144'";
			break;
		case '240':
			$constr1 = "WHERE `highestresolution` = '240'";
			break;
		case '360':
			$constr1 = "WHERE `highestresolution` = '360'";
			break;
		case '480':
			$constr1 = "WHERE `highestresolution` = '480'";
			break;
		case '720':
			$constr1 = "WHERE `highestresolution` = '720'";
			break;
		case '1080':
			$constr1 = "WHERE `highestresolution` = '1080'";
			break;
		default:
			$constr1 = "";
			break;
		
	}
?></pre>