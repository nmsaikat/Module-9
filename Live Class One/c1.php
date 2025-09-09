<?php
$persone = [
    "name" => "Saikat",
    "age" => 27,
    "hobbise" => ["reding", "travlling"],
];

echo $persone['name'];
echo "\n";

echo serialize($persone);

// $newArray unserialize('a:3:{s:4:"name";s:6:"Saikat";s:3:"age";i:27;s:7:"hobbise";a:2:{i:0;s:6:"reding";i:1;s:9:"travlling";}}');
// echo $newArray['age'];