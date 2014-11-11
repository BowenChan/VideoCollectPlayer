<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Multiple Video Sort</title>
</head>
<form>
	<!-- video length -->
    <p> Length of Video</p>
	<input type ="radio" name = "vidl" value = "10"> 0 - 10 minutes
    <input type ="radio" name = "vidl" value = "20"> 10 - 20 minutes
    <input type ="radio" name = "vidl" value = "40"> 20 - 40 minutes
    <input type ="radio" name = "vidl" value = "60"> 40 - 60 minutes
    <input type ="radio" name = "vidl" value = "61"> 60+ minutes
    
    <!-- Resolution -->
    <p> Resolution of Video </p>
    <input type ="radio" name = "vidr" value = "144"> 144p
    <input type ="radio" name = "vidr" value = "240"> 240p
    <input type ="radio" name = "vidr" value = "360"> 360p
    <input type ="radio" name = "vidr" value = "480"> 480p
    <input type ="radio" name = "vidr" value = "720"> 720p
    <input type ="radio" name = "vidr" value = "1080"> 1080p
    
    <!-- Language -->
    <p> Language </p>
    <input type ="radio" name = "vidv" value = "eng"> English
    <input type ="radio" name = "vidv" value = "none"> Non-English
    
    <!-- View Count -->
    <p> View Count </p>
    <input type ="radio" name = "vidc" value = "75"> 50,000-75,000
    <input type ="radio" name = "vidc" value = "100"> 75,001-100,000
    <input type ="radio" name = "vidc" value = "125"> 100,001-125,000
    <input type ="radio" name = "vidc" value = "150"> 125,001-150,000
    <input type ="radio" name = "vidc" value = "151"> 150,001+
    
    <!-- Video Type -->
    <p> Video Type </p>
    <input type = "checkbox" name = "vidt[]" value = "Tutorial"> Tutorial
    <input type = "checkbox" name = "vidt[]" value = "Entertainment"> Entertainment
    <input type = "checkbox" name = "vidt[]" value = "Application"> Application
    <input type = "checkbox" name = "vidt[]" value = "Weapon"> Weapon
    <input type = "checkbox" name = "vidt[]" value = "Group demo	"> Group Demo
    <input type = "checkbox" name = "vidt[]" value = "Others"> Others

</form>
<body>
</body>
</html>