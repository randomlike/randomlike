<?php
$randomsource = "sample.bin"; // edited because this is a sample, create a own
if (!file_exists("counter.txt"))
{
file_put_contents("counter.txt",0);
}
function srcrand($min,$max)
{
global $randomsource;
$out = 0;
$pos = file_get_contents("counter.txt");
$raw = file_get_contents($randomsource,null,null,0+$pos,3+$pos);
for($n = 0;$n < 3;$n++)
{
$out =+ (pow(256,$n)*ord($raw[$n]));
}
file_put_contents("counter.txt",$pos + 3);
return intval((($out/pow(256,8))*($max-$min))+$min);
}
