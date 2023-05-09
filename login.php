<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

if(isset($_SESSION["user"])){
    header("Location: index.php");
}

$error = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $db->login($_POST["username"], $_POST["password"]);
    if ($username) {
        $_SESSION["user"] = $username;
        header('Location: index.php');
        $error = false;
        $_SESSION["message"] = "Successfully Logged in as $username";
    } else {
        $error = true;
    }
}

?>

<div class="wrapper">
    <div class="row center">
        <div class="col-lg-6 col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h1>Log In</h1>
                        <?php if ($error) : ?>
                        <div class="alert alert-danger">
                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                                aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                            <span><b>Invalid Credentials - </b> Incorrect username and password
                            </span>
                        </div>

                        <?php endif ?>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row center">
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mx-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mb-3">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="register.php">Create an account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>