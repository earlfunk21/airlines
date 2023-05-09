<?php
require_once 'includes/header.php';
require_once 'db_helper.php';
include 'includes/security.php';

$db = new DBHelper(DBHelper::getConnection());

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->update_user($_POST["firstname"], $_POST["lastname"], $_SESSION["user"], $_POST["password"]);
    header("Location: index.php");
}

?>

<div class="wrapper">
    <div class="row center">
        <div class="col-lg-6 col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h1>Update Account</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row center">
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input autocomplete="off" type="text" class="form-control" placeholder="First Name"
                                        name="firstname">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input autocomplete="off" type="text" class="form-control" placeholder="Last Name"
                                        name="lastname">
                                </div>
                            </div>
                            <div class=" col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input autocomplete="off" type="password" class="form-control"
                                        placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mb-3">Update</button>
                            </div>
                            <div class="text-center">
                                <a href="index.php">Return to home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once 'includes/footer.php' ?>