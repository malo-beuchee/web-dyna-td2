<a href="?message=Hello world!">Afficher Hello world!</a><br>
<a href="?message=un Message">Afficher un Message</a><br>
<a href="?message=mundo dos cumprimentos">Afficher en Portugais</a>
<?php
echo "<h1>" . $_GET["message"]??"" . "</h1>";
