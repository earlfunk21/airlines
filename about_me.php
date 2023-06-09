<?php
require_once 'includes/header.php';
require_once 'db_helper.php';
$db = new DBHelper(DBHelper::getConnection());
include 'includes/security.php';
?>

<div class="wrapper">
    <?php include 'includes/sidebar.php' ?>
    <div class="main-panel">
        <div class="content">
            <section>
                <div class="card p-3">
                    <h1>About Me</h1>

                    <h2>Introduction</h2>

                    <p>Greetings! My name is Earl B. Nobe, and I'm a second-year BSIT student at the Cebu Institute of
                        Technology-University. <br>

                        My favorite hobby is watching movie.</p>
                </div>
            </section>
            <section>
                &nbsp;
                <div class="card p-3">
                    <h2>Favorite Online Games</h2>
                    <ul style="list-style-type: none;">
                        <li>Mobile Legends</li>
                        <li>Valorant</li>
                        <li>Clash of clans</li>
                    </ul>
                </div>
            </section>
            <br>
        </div>
    </div>

    <?php require_once 'includes/footer.php' ?>