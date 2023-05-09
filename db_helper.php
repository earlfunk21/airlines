<?php

include "database.php";

class DBHelper extends Database
{

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function add_user($firstname, $lastname, $dob, $nationality)
    {
        return $this->query("INSERT INTO tblpersonalinfo (id, firstname, lastname, dob, nationality)
                                VALUES (NULL, '$firstname', '$lastname', '$dob', '$nationality')");
    }
    function add_admin($email, $password, $info_id)
    {
        return $this->query("INSERT INTO tbladmin (id, email, password, info_id)
                                VALUES (NULL, '$email', '$password', $info_id)");
    }

    function add_crew($position, $experience, $info_id)
    {
        return $this->query("INSERT INTO tblcrew (id, position, experience, info_id)
                                VALUES (NULL, '$position', '$experience', $info_id)");
    }
    function add_passenger($seat_number, $ticket_id, $info_id)
    {
        return $this->query("INSERT INTO tblpassenger (id, seat_number, ticket_id, info_id)
                                VALUES (NULL, '$seat_number', '$ticket_id', $info_id)");
    }

    function add_aircraft($model, $capacity, $manufacturer)
    {
        return $this->query("INSERT INTO tblaircraft (id, model, capacity, manufacturer)
                                VALUES (NULL, '$model', $capacity, '$manufacturer')");
    }

    function add_ticket($passenger_id, $seat_number, $arrival_date)
    {
        return $this->query("INSERT INTO tblticket (id, passenger_id, seat_number, arrival_date)
                                VALUES (NULL, '$passenger_id', '$seat_number', '$arrival_date')");
    }

    function get_users()
    {
        $sql = "SELECT * FROM tblpersonalinfo";
        return $this->query($sql);
    }

    function get_admins()
    {
        $sql = "SELECT * FROM tbladmin";
        return $this->query($sql);
    }

    function get_crews()
    {
        $sql = "SELECT * FROM tblcrew";
        return $this->query($sql);
    }

    function get_passengers()
    {
        $sql = "SELECT * FROM tblpassenger";
        return $this->query($sql);
    }

    function get_aircrafts()
    {
        $sql = "SELECT * FROM tblaircraft";
        return $this->query($sql);
    }

    function get_tickets()
    {
        $sql = "SELECT * FROM tblticket";
        return $this->query($sql);
    }

    function login($username, $password)
    {
        $sql = "SELECT * FROM tbluseraccount WHERE username = \"$username\" and password = \"$password\"";
        $rs = $this->query($sql);
        if ($rs->num_rows > 0) {
            while($row = $rs->fetch_assoc()){
                return $row["username"];
            }
        }
        return false;
    }

    function register($username, $password){
        $sql = "INSERT INTO tbluseraccount (username, password) VALUES (\"$username\", \"$password\")";
        return $this->query($sql);
    }
    
    function update_user($username, $firstname, $lastname){
        $sql = "UPDATE tbluseraccount SET firstname = \"$firstname\" and lastname = \"$lastname\" WHERE username = \"$username\"";
        return $this->query($sql);
    }
}


