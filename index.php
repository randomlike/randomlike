<?php
echo "<h1>Bienvenue Dans RandomLike !</h1>";
echo "Vous Avez Le Choix De Mes Service ::::: <br/><a href='number.php?min=0&max=100'>Nombre Aleatoire</a><br/><a href='color.php'>Couleur Aleatoire</a><br/><a href='password.php?len=16'>Mot De Passe Aleatoire</a><br/><a href='race.php?pist=6&len=10'>Course Aleatoire</a>";
$count = file_get_contents("counter.txt");
echo "</br>Le Site A Génerer ::::::: " . $count . "Octet";
