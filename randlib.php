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
$out = (pow(256,2)*ord($raw[$pos+2]))+(pow(256,1)*ord($raw[$pos+1]))+(pow(256,0)*ord($raw[$pos]));
file_put_contents("counter.txt",$pos + 3);
return intval((($out/16777216)*($max-$min))+$min);
}
function srcrand8bit()
{
global $raw;
$pos = file_get_contents("counter.txt");
$out = ord($raw[$pos]);
file_put_contents("counter.txt",$pos + 1);
return $out;
}
