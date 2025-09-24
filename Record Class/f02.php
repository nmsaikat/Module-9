<?php
$filename = "/Users/nmsaikat/Desktop/Module 9/Record Class/f01.text";
$fp = fopen($filename, "w");
fwrite ($fp, "Mercury\nVenus\nEarth\nMars\nJupiter\nSaturn\nUranus\nNeptune");
fclose($fp);