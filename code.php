<?php
echo "<style>@font-face{font-family:code;src:url('code.ttf');}</style>";
require("randlib.php");
echo "Ton Nom De La Serie A Ete Générer :::::::::::: ";
$wordlistpath = "listfr.txt";
$wordfile = file_get_contents($wordlistpath);
$wordlistarray = explode("\n",$wordfile);
$nbword = count($wordlistarray);
echo "<font face='code' size='7'>code@";
echo $wordlistarray[srcrand(0,$nbword)]. "</font>";
echo "<br/><a href=''>Relancer</a>";