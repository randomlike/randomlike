<?php
$randomsource = "sample.bin"; // edited because this is a sample, create a own
if (!file_exists("counter.txt"))
{
file_put_contents("counter.txt",0);
}
$raw = file_get_contents($randomsource);
function srcrand($min,$max)
{
global $raw;
$out = 0;
$pos = file_get_contents("counter.txt");
for($n = 0;$n < 2;$n++)
{
$out =+ (pow(256,$n)*ord($raw[$n+$pos]));
}
file_put_contents("counter.txt",$pos + 2);
return intval((($out/pow(256,2))*($max-$min))+$min);
}
function srcrand8bit()
{
global $raw;
$pos = file_get_contents("counter.txt");
$out = ord($raw[$pos]);
file_put_contents("counter.txt",$pos + 1);
return $out;
}
