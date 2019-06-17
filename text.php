<?php
require("randlib.php");
$wordlistpath = "listfr.txt";
$nb = $_GET["nb"];
$lang = $_GET["lang"];
$wordfile = file_get_contents("list".$lang.".txt");
$wordlistarray = explode("\n",$wordfile);
$nbword = count($wordlistarray);
echo "Votre Texte à Eté Generer ::::::::: ";
for ($n = 0;$n < $nb;$n++)
{
echo $wordlistarray[srcrand(0,$nbword)] . " ";
}
echo "<br/><a href=''>Relancer</a>";
