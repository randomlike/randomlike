<?php
$len = $_GET["len"];
echo "Votre Mot De Passe A Ete Generer ::::::: ";
for($i = 0;$i < $len;$i++)
{
echo chr(rand(33,126));
}
echo "<br/><a href=''>Relancer</a>";