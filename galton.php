<?php
require("randlib.php");
$v = 0;
$l = 257;
echo "La Balle Dans La Planche De Galton A Tombé :::::: ";
for ($n = 0;$n < $l;$n++)
{
$b = sprintf("%08d",decbin(srcrand8bit()));
for ($m = 0;$m < 8;$m++)
{
if (boolval($b[$m])){$v = $v + (1/$l*8);}else{$v = $v - (1/$l*8);}
}
}
echo $v/64;
echo "<br/><a href=''>Relancer</a>";
