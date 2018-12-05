<?php
require("randlib.php");
$nb = $_GET["nb"];
$array = array_fill(1,$nb,true);
$rnb = $nb;
while (boolval($rnb))
{
$s = $s + 1;
$t = srcrand(1,$nb + 1);
if ($array[$t] == true)
{
echo "Le Numero ".$t." S'est Etteint A La Position ".$s."<br/>";
$array[$t] = false;
$rnb = $rnb - 1;
}
}