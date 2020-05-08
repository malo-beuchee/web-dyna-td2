<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>exercise 2</title>

		</head>
	<body>
			<!--message, size et color passés dans l'URL dans une div -->
		<div>
			<?php
				echo "<font color ='{$_GET["colr"]}'size='{$_GET["siz"]}px;'>Message de taille {$_GET["siz"]}px en {$_GET["colr"]} </font>";
			?>
		</div>	
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