<?php
session_start();
if(!isset($_SESSION['_username'])){
    header('location:login.php');
}
echo"Dashboard";