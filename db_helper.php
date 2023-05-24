<?php

include "database.php";

class DBHelper extends Database
{

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function add_personal_info($firstname, $lastname, $dob, $nationality)
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
            while ($row = $rs->fetch_assoc()) {
                return $row["username"];
            }
        }
        return false;
    }

    function register($username, $password, $firstname, $lastname)
    {
        $sql = "INSERT INTO tbluseraccount (username, password, firstname, lastname) VALUES (\"$username\", \"$password\", \"$firstname\", \"$lastname\")";
        return $this->query($sql);
    }

    function update_user($firstname, $lastname, $username,  $password)
    {
        $sql = "UPDATE tbluseraccount SET firstname = \"$firstname\", lastname = \"$lastname\", password = \"$password\" WHERE username = \"$username\"";
        return $this->query($sql);
    }

    function get_user($username)
    {
        $sql = "SELECT firstname, lastname FROM tbluseraccount WHERE username = \"$username\"";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array("firstname" => $row[0], "lastname" => $row[1]);
    }

    function delete_personal_info($id)
    {
        $sql = "DELETE FROM tblpersonalinfo WHERE id = $id";
        $this->query($sql);
    }

    function delete_admin($id)
    {
        $sql = "DELETE FROM tbladmin WHERE id = $id";
        $this->query($sql);
    }

    function delete_crew($id)
    {
        $sql = "DELETE FROM tblcrew WHERE id = $id";
        $this->query($sql);
    }

    function delete_aircraft($id)
    {
        $sql = "DELETE FROM tblaircraft WHERE id = $id";
        $this->query($sql);
    }

    function delete_passenger($id)
    {
        $sql = "DELETE FROM tblpassenger WHERE id = $id";
        $this->query($sql);
    }

    function delete_ticket($id)
    {
        $sql = "DELETE FROM tblticket WHERE id = $id";
        $this->query($sql);
    }

    function update_personal_info($id, $firstname, $lastname, $dob, $nationality)
    {
        return $this->query("UPDATE tblpersonalinfo 
                                SET firstname =  '$firstname', lastname = '$lastname', dob = '$dob', nationality = '$nationality'
                                WHERE id = $id ");
    }

    function update_ticket($id, $passenger_id, $seat_number, $arrival_date)
    {
        $sql = "UPDATE tblticket SET firstname = '$passenger_id', seat_number = '$seat_number', arrival_date = '$arrival_date' WHERE id = $id ";
        return $this->query($sql);
    }

    function update_passenger($id, $seat_number, $info_id, $ticket_id)
    {
        $sql = "UPDATE tblpassenger SET seat_number = '$seat_number', info_id = $info_id, ticket_id = $ticket_id WHERE id = $id";
        return $this->query($sql);
    }

    function update_crew($id, $position, $experience, $info_id)
    {
        $sql = "UPDATE tblcrew SET position = '$position', experience = '$experience', info_id = $info_id WHERE id = $id";
        return $this->query($sql);
    }

    function update_aircraft($id, $model, $capacity, $manufacturer)
    {
        $sql = "UPDATE tblaircraft SET mode = '$model', capacity = '$capacity', manufacturer = '$manufacturer' WHERE id = $id";
        return $this->query($sql);
    }

    function update_admin($id, $email, $password, $info_id)
    {
        $sql = "UPDATE tbladmin SET email = '$email', password = '$password', info_id = $info_id WHERE id = $id";
        return $this->query($sql);
    }


    function get_personal_info_by_id($id)
    {
        $sql = "SELECT * FROM tblpersonalinfo WHERE id = $id";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array(
            "firstname" => $row[1],
            "lastname" => $row[2],
            "dob" => $row[3],
            "nationality" => $row[4]
        );
    }

    function get_admin_id($id)
    {
        $sql = "SELECT * FROM tbladmin WHERE id = $id";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array(
            "email" => $row[1],
            "password" => $row[2],
            "info_id" => $row[3],
        );
    }
}
