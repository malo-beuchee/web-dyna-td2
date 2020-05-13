<?php
echo "$title = inscription";
include "header.php";
?>

<body>
<form method="POST">
		<label for="name">nom et pseudo </label>
		<input type="string" value="<$Votre_nom>" name="name" id="name">
		<label for="mail">Adresse mail</label>
		<input type="string" value="<$Votre_email>" name="email" id="email">
		<hr>
		<input type="submit" value="Valider l'incription">
	</form>
</body>
</html>