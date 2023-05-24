<?php
require_once 'db_helper.php';
include 'includes/security.php';

$deleteMapping = [
    'personal_info_id' => 'delete_personal_info',
    'admin_id' => 'delete_admin',
    'crew_id' => 'delete_crew',
    'aircraft_id' => 'delete_aircraft',
    'passenger_id' => 'delete_passenger',
    'ticket_id' => 'delete_ticket'
];

foreach ($deleteMapping as $param => $method) {
    if (isset($_GET[$param])) {
        $id = $_GET[$param];
        $db = new DBHelper(DBHelper::getConnection());
        $db->$method($id);
        $_SESSION["message"] = "Successfully Deleted";
        break;
    }
}

header("Location: index.php");
