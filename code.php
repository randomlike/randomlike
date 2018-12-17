<?php
echo "<style>@font-face{font-family:code;src:url('code.ttf');}</style>";
require("randlib.php");
echo "Ton Nom De La Serie A Ete Générer :::::::::::: ";
$one = ["ya","lyo","sys","ma","xa","ra","che","ja","ku","ho","ha","geo","kyo","far"];
$two = ["ko","ki","kia","na","mo","zo","va","ro","cho","tchu"];
$oc = count($one);
$tc = count($two);
echo "<font face='code' size='7'>code@";
echo $one[srcrand(0,$oc)].$two[srcrand(0,$tc)]. "</font>";
echo "<br/><a href=''>Relancer</a>";
