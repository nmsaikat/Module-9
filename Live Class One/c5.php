<?php
// $username = "jimmy";
// $password = 12345;

$username = "admin";
$password = "admin123";

$userData = file_get_contents("users.json");
$users = json_decode($userData, true);

foreach ($users as $u=>$p){
    if ($u==$username && $p==$password){
        echo "Login Successful\n";
        exit;
    }
}

echo "Login Failed\n";