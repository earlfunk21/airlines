<?php
require_once 'includes/header.php';
require_once 'db_helper.php';
include 'includes/security.php';

$db = new DBHelper(DBHelper::getConnection());

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->add_aircraft($_POST["model"], $_POST["capacity"], $_POST["manufacturer"]);
    header('Location: index.php');
}

?>

<div class="wrapper">
    <?php include 'includes/sidebar.php' ?>
    <div class="main-panel">
        <div class="content">
            <div class="row center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Add new Aircraft</h5>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" class="form-control" placeholder="Model" name="model">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <div class="form-group">
                                            <label>Capacity</label>
                                            <input type="text" class="form-control" placeholder="Capacity"
                                                name="capacity">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label>Manufacturer</label>
                                            <input type="text" class="form-control" placeholder="Manufacturer"
                                                name="manufacturer">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-fill btn-primary">Add new Aircraft</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary active" data-color="primary"></span>
                            <span class="badge filter badge-info" data-color="blue"></span>
                            <span class="badge filter badge-success" data-color="green"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line text-center color-change">
                    <span class="color-label">LIGHT MODE</span>
                    <span class="badge light-badge mr-2"></span>
                    <span class="badge dark-badge ml-2"></span>
                    <span class="color-label">DARK MODE</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php' ?>