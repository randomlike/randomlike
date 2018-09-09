<?php
require("randlib.php");
$r = srcrand(0,256);
$g = srcrand(0,256);
$b = srcrand(0,256);
echo "Votre Couleur A Ete Generer :::: rgb(".$r.",".$g.",".$b.")<br/>";
echo "<svg width='500' height='500'><rect width='500' height='500' style='fill:rgb(".$r.",".$g.",".$b.");stroke-width:1;stroke:rgb(0,0,0)'/></svg>";
echo "<br/><a href=''>Relancer</a>";
