<?php

class Database {
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "dbg2nobe";

    protected $conn;

    public static function getConnection(){
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conn->connect_error)
            die("Connection failed: " . $conn->connect_error);
        return $conn;
    }

    function query($sql){
        $result = $this->conn->query($sql);
        return $result;
    }

    function __destruct()
    {
        $this->conn->close();
    }
    
}