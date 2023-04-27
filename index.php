<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());
?>

<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    CT
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
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
                    <a href="#">
                        <i class="tim-icons icon-atom"></i>
                        <p>Add new User</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="tim-icons icon-pin"></i>
                        <p>Add new Admin</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="tim-icons icon-single-02"></i>
                        <p>About Me</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title">Personal Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table tablesorter " id="">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                First Name
                                            </th>
                                            <th>
                                                Last Name
                                            </th>
                                            <th>
                                                Date of Birth
                                            </th>
                                            <th>
                                                Nationality
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($db->get_users() as $user): ?>
                                        <tr>
                                            <td>
                                                <?= $user['id'] ?>
                                            </td>
                                            <td>
                                                <?= $user['firstname'] ?>
                                            </td>
                                            <td>
                                                <?= $user['lastname'] ?>
                                            </td>
                                            <td>
                                                <?= $user['dob'] ?>
                                            </td>
                                            </td>
                                            <td>
                                                <?= $user['nationality'] ?>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="card-title"> Simple Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table tablesorter " id="">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Country
                                            </th>
                                            <th>
                                                City
                                            </th>
                                            <th class="text-center">
                                                Salary
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Dakota Rice
                                            </td>
                                            <td>
                                                Niger
                                            </td>
                                            <td>
                                                Oud-Turnhout
                                            </td>
                                            <td class="text-center">
                                                $36,738
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Minerva Hooper
                                            </td>
                                            <td>
                                                Curaçao
                                            </td>
                                            <td>
                                                Sinaai-Waas
                                            </td>
                                            <td class="text-center">
                                                $23,789
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sage Rodriguez
                                            </td>
                                            <td>
                                                Netherlands
                                            </td>
                                            <td>
                                                Baileux
                                            </td>
                                            <td class="text-center">
                                                $56,142
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Philip Chaney
                                            </td>
                                            <td>
                                                Korea, South
                                            </td>
                                            <td>
                                                Overland Park
                                            </td>
                                            <td class="text-center">
                                                $38,735
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Doris Greene
                                            </td>
                                            <td>
                                                Malawi
                                            </td>
                                            <td>
                                                Feldkirchen in Kärnten
                                            </td>
                                            <td class="text-center">
                                                $63,542
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mason Porter
                                            </td>
                                            <td>
                                                Chile
                                            </td>
                                            <td>
                                                Gloucester
                                            </td>
                                            <td class="text-center">
                                                $78,615
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jon Porter
                                            </td>
                                            <td>
                                                Portugal
                                            </td>
                                            <td>
                                                Gloucester
                                            </td>
                                            <td class="text-center">
                                                $98,615
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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