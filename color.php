<?php
$r = rand(0,255);
$g = rand(0,255);
$b = rand(0,255);
echo "Votre Couleur A Ete Generer :::: rgb(".$r.",".$g.",".$b.")<br/>";
echo "<svg width='500' height='500'><rect width='500' height='500' style='fill:rgb(".$r.",".$g.",".$b.");stroke-width:1;stroke:rgb(0,0,0)'/></svg>";