<?php
function x($a){
    y($a);
}

function y($b){
    z($b*2);
}

function z($c){
    // echo $c;
    if($c<20){
    trigger_error("Too Small {$c}");
    }else{
        echo "{$c} is OK";
    }

}

function w($d, $e){
    x($d + $e);
}

z(12);

w(2, 3);
