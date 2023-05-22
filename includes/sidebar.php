<?php
$user = $db->get_user($_SESSION["user"]);
?>
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <h6><?= $user["firstname"]; ?> <?= $user["lastname"]; ?> </h6>
            <a href="javascript:void(0)" class="h3 simple-text logo-normal text-center">
                Airlines
            </a>
        </div>
        <ul class="nav">
            <li class="active ">
                <a href="index.php">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="add_personal_info.php">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>Add new Personal Info</p>
                </a>
            </li>
            <li>
                <a href="add_admin.php">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>Add new Admin</p>
                </a>
            </li>
            <li>
                <a href="add_crew.php">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>Add new Crew</p>
                </a>
            </li>
            <li>
                <a href="add_passenger.php">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>Add new Passenger</p>
                </a>
            </li>
            <li>
                <a href="add_aircraft.php">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>Add new Aircraft</p>
                </a>
            </li>
            <li>
                <a href="add_ticket.php">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>Add new Ticket</p>
                </a>
            </li>
            <li>
                <a href="about_me.php">
                    <i class="tim-icons icon-single-02"></i>
                    <p>About Me</p>
                </a>
            </li>
            <li>
                <a href="edit_profile.php">
                    <i class="tim-icons icon-pencil"></i>
                    <p>Edit Profile</p>
                </a>
            </li>
        </ul>
        <div class="text-center">
            <a href="logout.php" type="button" class="btn btn-primary mb-3">Logout</a>
        </div>

        <div class="text-center">
            <p>&copy; Earl B. Nobe BSIT-2.</p>
        </div>
    </div>
</div>