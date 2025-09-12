<?php
$Fruit = $_COOKIE['Fruit']?? 
null;

if ($Fruit){
    echo "Your Favorite Fruit is: $Fruit";
}else{
    echo "No Favorite Fruit Set";
}