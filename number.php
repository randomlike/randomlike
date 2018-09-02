<?php
$min = $_GET["min"];
$max = $_GET["max"];
echo "Votre Nombre A Ete Generer ::: ".rand($min,$max);
echo "<br/><a href=''>Relancer</a>";
