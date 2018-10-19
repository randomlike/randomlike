<?php
echo "<h2>Les Statistique De La Source Aléatoire</h2>";
require("config.php");
$getcount = intval(file_get_contents($randomsourcecount));
$randmoment = file_get_contents($randomsource,null,null,0,$getcount);
$h = array_fill(0,256,0);
$p = array_fill(0,256,0);
for ($n = 0;$n < $getcount;$n++)
{
$a = ord($randmoment[$n]);
$h[$a] = $h[$a] + 1;
$p[$a] = $n + 1;
}
for ($m = 0;$m < 256;$m++)
{
echo "L'octet Numéro ".$m." Apparaissais ".$h[$m]." Fois, Et Son Dernier Apparition Est A La Position ".$p[$m]."<br/>";
}
echo "<br/>RAPPELLE ::::: Le Hasard Ne Ce Controle Pas !";
