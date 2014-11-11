<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Collection Data Formt</title>
</head>

<body>
<?php
	include('header.html');
?>
	<form action = "data_handle.php" method = "post">
    	<p>Name: <input type ="text" name = "vid_title"/>  </p>
       	<p>Video Link: <input type = "text" name = "vid_link"/> </p>
        <p>Length: <input type = "text" name = "vid_length" /> </p>
        <p>Resolution:
            <input type = "radio" name = "vid_resolution" value = "144"> 144p
            <input type = "radio" name = "vid_resolution" value = "240"> 240p
            <input type = "radio" name = "vid_resolution" value = "360"> 360p
            <input type = "radio" name = "vid_resolution" value = "480"> 480p
            <input type = "radio" name = "vid_resolution" value = "720"> 720p
            <input type = "radio" name = "vid_resolution" value = "1080"> 1080p
        </p> 
        
        <p> Description: </p>
        <p><textarea name = "vid_descript" style = "width: 100%" rows ="5" maxlength = "500"> </textarea></p>
        
        <p> Language:
            <input type = "radio" name = "vid_lang" value = "English"> English
            <input type = "radio" name = "vid_lang" value = "Non-English"> Non-English
        </p> 
        
        <p> View Count: <input type = "text" name = "vid_view"> </p>
        <p> Video Type:
        	<input type = "checkbox" name = "vid_type[]" value = "Tutorial"> Tutorial
            <input type = "checkbox" name = "vid_type[]" value = "Entertainment"> Entertainment
            <input type = "checkbox" name = "vid_type[]" value = "Application"> Application
            <input type = "checkbox" name = "vid_type[]" value = "Weapon"> Weapon
          <input type = "checkbox" name = "vid_type[]" value = "Group demo	"> Group Demo
            <input type = "checkbox" name = "vid_type[]" value = "Others"> Others
      	</p>
        
        <p> Video Icon Image <input type = "text" name = "vid_icon"> </p>
        <p> Tags (Seperated by comma): <input type = "text" name = "vid_tag"> </p>
        <p> <input type = "submit">
    </form>
</body>
</html>
