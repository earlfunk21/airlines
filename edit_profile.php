<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->update_user($_SESSION["user"], $_POST["firstname"], $_POST["lastname"]);
    header("Location: index.php");
}

?>

<div class="wrapper">
    <div class="row center">
        <div class="col-lg-6 col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h1>Sign Up</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row center">
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Username" name="firstname">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Username" name="lastname">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>Your password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mb-3">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once 'includes/footer.php' ?>