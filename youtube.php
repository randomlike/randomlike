<?php
require("randlib.php");
$list = file_get_contents("youtube.txt");
$listarray = explode("\t",$list);
$t = srcrand(0,count($listarray));
$video = $listarray[$t];
echo "Votre Vidéo Asciinema à Ete Générer :::::<br/>";
echo "<iframe width='768' height='576' src='https://www.youtube.com/embed/".$video."'></iframe>";
echo "<br/><a href=''>Relancer</a>";
