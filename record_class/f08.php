<?php
$filename = "/Users/nmsaikat/Desktop/Module 9/Record Class/f08.text";
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

// $encodedData = json_encode($students);
// file_put_contents($filename, $encodedData, LOCK_EX);

$data = file_get_contents($filename);
$allStudents = json_decode($data,);
// print_r($allStudents);
echo $allStudents[0]->name;