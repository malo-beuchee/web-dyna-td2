<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Hello</title>
	</head>
	<body>
		<?php
		#exemple d'addresse: http://127.0.0.1/tpmalo/tp1/exo1.php?page=1&name=malo&faire=jsp
		echo "vous etes sur la page ". $_GET["page"];
		echo "<br/>";	
		echo " Bonjour ". $_GET["name"];
		echo "<br/>";
		echo " Qu'est ce que tu fait ici ". $_GET["faire"];
		?>
	</body>
</html>