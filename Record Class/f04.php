<?php
$filename = "/Users/nmsaikat/Desktop/Module 9/Record Class/f01.text";
$fb = fopen($filename,"r+");
$line = fgets($fb);
echo $line;
fwrite($fb, "Uranus\n");
$line = fgets($fb);
echo $line;
fclose($fb);
