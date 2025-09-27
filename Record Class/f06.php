<?php
$filename = "/Users/nmsaikat/Desktop/Module 9/Record Class/f01.text";
$student = array (
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

/*$fb = fopen($filename,"w");
foreach($student as $student) {
    $data = sprintf("%s,%s,%s\n", $student['name'], $student['age'], $student['dept']);
    fwrite($fb, $data);
    fputcsv($fb, $student);
};
fclose($fb);*/

$fb = fopen($filename,"r");
while ($data = fgets($fb)){
    $student = explode (",", $data);
    printf("Name = %s\n, Age = %s\n, Dept = %s\n", $student[0], $student[1], $student[2]);
}
fclose($fb);


// $fb = fopen($filename,"r");
// while($student = fgetcsv($fp) ){
//     printf("Name = %s\n, Age = %s\n, Dept = %s\n", $student[0], $student[1], $student[2]);
// }
// fclose($fb);