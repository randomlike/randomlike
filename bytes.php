<?php
set_time_limit(0);
require("randlib.php");
$len = $_GET["len"];
header("Content-Type:application/octet-stream");
$len_limit = 999999; // define the limit
if ($len > $len_limit)
{
echo "C'est Limité à ".$len_limit." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
for ($n = 0;$n < $len;$n++)
{
echo chr(srcrand8bit());
}
