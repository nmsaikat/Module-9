<?php
$jsonData = file_get_contents('persone.json');
// echo $jsonData;
// $persone = json_decode($jsonData);
// var_dump($persone);

$persone = json_decode($jsonData, true);
// var_dump($persone);
echo $persone['name'];
echo "\n";
print_r($persone);