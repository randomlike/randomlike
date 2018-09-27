<?php

$randomsourceinfo = "srandom";
echo "<h1>Bienvenue Dans RandomLike !</h1>";
echo "Vous Avez Le Choix De Mes Services ::::: <br/><a href='number.php?min=0&max=100'>Nombre Aléatoire</a><br/><a href='color.php'>Couleur Aléatoire</a><br/><a href='password.php?len=16'>Mot De Passe Aléatoire</a><br/><a href='race.php?pist=6&len=10'>Course Aléatoire</a><br/>";
$count = file_get_contents("counter.txt");
echo "<br/>Le Site A Générer ::::::: " . $count . " Octet -:- Source Aléatoire :::::: ".$randomsourceinfo;

?>
