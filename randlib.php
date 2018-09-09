<?php
$randomsource = "/dev/srandom"; // edited if you need
function srcrand($min,$max)
{
global $randomsource;
$out = 0;
$raw = file_get_contents($randomsource,null,null,0,8);
for($n = 0;$n < 8;$n++)
{
$out =+ (pow(256,$n)*ord($raw[$n]));
}
return intval(($out/pow(256,8))*$max+$min);
}