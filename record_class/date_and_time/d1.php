<?php
// echo microtime(true);

// $mt = microtime(true);
// printf("%10.8f\n", $mt);
$startTime = microtime(true);
factorial(1000);
sleep(1);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f \n", $executionTime);
function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}