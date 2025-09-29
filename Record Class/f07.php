<?php
$filename = "/Users/nmsaikat/Desktop/Module 9/Record Class/f07.text";
$students = array (
    array(
        "name"=>"Saikat",
        "age"=>24, 
        "dept"=>"CSE"
    ),
    array(
        "name"=>"Arafat", 
        "age"=>25, 
        "dept"=>"EEE"
    ),
    array(
        "name"=>"Rafi", 
        "age"=>23, 
        "dept"=>"BBA"
    )
);

// $data = serialize($students);
// file_put_contents($filename, $data, LOCK_EX);

$dataFormFile = file_get_contents($filename);
$allStudents = unserialize($dataFormFile);
print_r($allStudents);