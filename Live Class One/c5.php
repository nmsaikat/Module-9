<?php
$username = "jimy";
$password = "12345";

$userData = file_get_contents('users.json');
$users = json_decode($userData, true);
print_r($users);