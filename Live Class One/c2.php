<?php
$persone = [
    "name" => "Saikat",
    "age" => 27,
    "hobbise" => ["reding", "travlling"],
];

$json = json_encode($persone, JSON_PRETTY_PRINT);
// echo $json;
file_put_contents('persone.json', $json);

