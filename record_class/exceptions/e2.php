<?php
class MyException extends Exception {  
};
class NetworkException extends Exception {  
};

function testException() {  
    throw new NetworkException();
};

try{
    testException();
}catch(MyException $e) {
    echo "MyException caught\n";
}catch(NetworkException $e) {
    echo "NetworkException caught\n";
}finally{
    echo "Cleanup\n";
}