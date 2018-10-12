<?php
echo "<h2>Les Statistique De La Source Aléatoire</h2>";
require("randlib.php");
$getcount = file_get_contents("counter.txt");
$srcrand = file_get_contents($randomsource,null,null,0,$getcount);
$h = array_fill(0,256,0);
for ($n = 0;$n < $getcount;$n++)
{
$a = ord($srcrand[$n]);
$h[$a] = $h[$a] + 1;
}
for ($m = 0;$m < 256;$m++)
{
echo "L'octet Numéro ".$m." Apparaissais ".$h[$m]." Fois<br/>";
}
echo "<br/>RAPPELLE ::::: Le Hasard Ne Ce Controle Pas !";
