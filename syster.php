<?php
require("randlib.php");
$limit_frame = 1000; // Define The Limite Frame
header("Content-Type:text/plain");
$demi = boolval($_GET["demi"]);
$tp = $_GET["tp"];
$frame = $_GET["frame"];
if ($frame > $limit_frame)
{
echo "C'est Limité à ".$limit_frame." Désoler Mais Ne Gaspiller Pas Non Plus";
exit(1);
}
for ($n = 1;$n <= $frame;$n++)
{
$offset1 = srcrand(0,256);
$increment1 = (srcrand(0,128)*2)+1;
if ($demi)
{
$offset2 = srcrand(0,256);
$increment2 = (srcrand(0,128)*2)+1;
}
else
{
$offset2 = $offset1;
$increment2 = $increment1;
}
echo "frame ".$n.";".$tp.";".$offset1.";".$increment1.";".$offset2.";".$increment2."\n";
}