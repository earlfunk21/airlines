<?php

include "database.php";

class DBHelper extends Database{

    function __construct($conn){
        $this->conn = $conn;
    }

    function add_student($firstname, $lastname, $dob, $nationality){
        return $this->query("INSERT INTO tblpersonalinfo (id, firstname, lastname, dob, nationality)
                                VALUES (NULL, '$firstname', '$lastname', '$dob', '$nationality')");
    }

    function get_users(){
        $sql = "SELECT * FROM tblpersonalinfo";
        return $this->query($sql);
    }
    
}