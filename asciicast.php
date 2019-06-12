<?php
require("randlib.php");
$list = file_get_contents("asciicast.txt");
$listarray = explode("\n",$list);
$t = srcrand(0,count($listarray));
$cast = $listarray[$t];
echo "Votre Vidéo Asciinema à Ete Générer :::::<br/>";
echo "<script id='asciicast-".$cast."' src='https://asciinema.org/a/".$cast.".js' async></script>";
echo "<br/><a href=''>Relancer</a>";
