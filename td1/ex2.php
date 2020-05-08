<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>

</head>
<body>
	
<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
    <label for="color"></label>
    <input type="string" value="" name="color" id="size">
    <input type="submit" value="Valider">
</form>
<?php
		echo "<div style ='color :{$_GET["color"]}'style='font-size: {$_GET["size"]}px;'>Message de taille {$_GET["size"]}px en colour </div>";
	?>
</body>

</html>