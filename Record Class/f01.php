<?php

$filename = "/Users/nmsaikat/Desktop/Module 9/Record Class/f01.text";
$fb = fopen($filename,"r");
while($line = fgetc($fb)){
    echo $line;
}
fclose($fb);

$data = file($filename);
print_r($data);
echo"\n";

$data = file_get_contents($filename);
echo $data;