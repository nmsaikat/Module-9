<?php
class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage {
    function connect();
    function getType();
}

// class MySQLServer implements NetworkStorage {
//     function connect() {
//         throw new DiskFullException;
//     }
//     function getName() {
//         return "MySQL";
//     }
// }

// class PostgreSQLServer implements NetworkStorage {
//     function connect() {
//         return true;
//     }
//     function getName() {
//         return "PostgreSQL";
//     }
// }

// class MSSQLServer implements NetworkStorage {
//     function connect() {
//         throw new NetworkException;
//     }

//     function getName() {
//         return "MSSQL";
//     }
// }

class ConnectionPool {
    private $connection;
    private $storage;
    function __construct() {
        $this->storage = array();
    }

    function addStorage (NetworkStorage $storage){
        array_push($this->storage, $storage);
    }

    function getConnection() {
        foreach($this->storage as $storage) {
            try {
                $connection = $storage->connect();
            }catch(ServerLoadException $e){
                echo $storage->getName(). "is facing huge Load. \n";
            }catch(NetworkException $e){
                echo $storage->getName(). "is Having some Problems in Network. \n";
            }
        }
    }
}