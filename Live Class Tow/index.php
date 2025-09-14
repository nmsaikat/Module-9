<?php
/*
// Parse Error (Syntax Error)
ech "Hello World";
*/

/*
// Fatal Error
function demo(){
    echo 1+1;
}
demu();
*/

/*
// Warning Error
echo"Hello World";
echo "\n";
include"flie.php";
*/

/*
// Notice Error
$x = "Hello World";
echo $y;
*/

/*
// Deprecated Error
$lat = 34;
$lon = 114;
$sunrise = data_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon);
echo $sunrise;
*/



// Error Handel

// Warning Error

/*
function RiskyFunction(){
    if (rand(0,1) === 0){
        throw new Exception("Something went wrong!");
    }
    return "All is Well";
}

try{
    echo RiskyFunction();
}
catch(Exception $e){
    error_log($e->getMessage(),3, "error.log");
    echo "Please Try Again Later";
}
*/

/*
// Read A File
$fileName = "/TODO.text";
$content = file_get_contents($fileName);
echo $content;
*/


/*
// Write A File
$fileName = "example.text";
$content = "Hello";
file_put_contents($fileName, $content);
*/


/*
// Append A File
$fileName = "example.text";
$content = "\nWorld";
file_put_contents($fileName, $content, FILE_APPEND);
echo "File Updated Successfully";
*/

// Delete A File
$fileName = "example.text";
unlink($fileName);


