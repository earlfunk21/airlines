<?php
require_once 'includes/header.php';
require_once 'db_helper.php';
include 'includes/security.php';

$db = new DBHelper(DBHelper::getConnection());

?>

<div class="wrapper">
	<?php include 'includes/sidebar.php' ?>
	<div class="main-panel">

		<?php if (isset($_SESSION["message"])) : ?>
			<div class="alert alert-success">
				<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
					<i class="tim-icons icon-simple-remove"></i>
				</button>
				<b><?= $_SESSION["message"]; ?></b>
			</div>
			<?php unset($_SESSION["message"]); ?>
		<?php endif; ?>
		<div class="content">
			<div class="row">

				<!-- Personal Info -->
				<div class="col-lg-6 col-md-12">
					<div class="card ">
						<div class="card-header">
							<h4 class="card-title">Personal Info</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablesorter " id="">
									<thead class="text-primary">
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
											<th class="text-center">
												Update
											</th>
											<th class="text-center">
												Delete
											</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($db->get_users() as $user) : ?>
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
												<td>
													<?= $user['nationality'] ?>
												</td>
												<td class="text-center">
													<a href="update_personal_info.php?id=<?= $user['id'] ?>"><i class="tim-icons icon-pencil"></i></a>
												</td>
												<td class="text-center">
													<a href="delete.php?personal_info_id=<?= $user['id'] ?>"><i class="tim-icons icon-trash-simple"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- Admin -->
				<div class="col-lg-6 col-md-12">
					<div class="card ">
						<div class="card-header">
							<h4 class="card-title">Admin</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablesorter " id="">
									<thead class=" text-primary">
										<tr>
											<th>
												ADMIN ID
											</th>
											<th>
												EMAIL
											</th>
											<th>
												PASSWORD
											</th>
											<th>
												INFORMATION ID
											</th>
											<th>
												UPDATE
											</th>
											<th>
												DELETE
											</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($db->get_admins() as $admin) : ?>
											<tr>
												<td>
													<?= $admin['id'] ?>
												</td>
												<td>
													<?= $admin['email'] ?>
												</td>
												<td>
													<?= $admin['password'] ?>
												</td>
												<td class="text-center">
													<?= $admin['info_id'] ?>
												</td>
												<td class="text-center">
													<a href="update_admin.php?id=<?= $admin['id'] ?>"><i class="tim-icons icon-pencil"></i></a>
												</td>
												<td class="text-center">
													<a href="delete.php?admin_id=<?= $admin['id'] ?>"><i class="tim-icons icon-trash-simple"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Crew -->
				<div class="col-lg-6 col-md-12">
					<div class="card ">
						<div class="card-header">
							<h4 class="card-title">Crew</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablesorter " id="">
									<thead class=" text-primary">
										<tr>
											<th>
												CREW ID
											</th>
											<th>
												POSITION
											</th>
											<th>
												EXPERIENCE
											</th>
											<th>
												INFORMATION ID
											</th>
											<th>
												DELETE
											</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($db->get_crews() as $crew) : ?>
											<tr>
												<td>
													<?= $crew['id'] ?>
												</td>
												<td>
													<?= $crew['position'] ?>
												</td>
												<td>
													<?= $crew['experience'] ?>
												</td>
												<td class="text-center">
													<?= $crew['info_id'] ?>
												</td>
												<td class="text-center">
													<a href="delete.php?crew_id=<?= $crew['id'] ?>"><i class="tim-icons icon-trash-simple"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Passenger -->
				<div class="col-lg-6 col-md-12">
					<div class="card ">
						<div class="card-header">
							<h4 class="card-title">Passenger</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablesorter " id="">
									<thead class=" text-primary">
										<tr>
											<th>
												PASSENGER ID
											</th>
											<th>
												SEAT NUMBER
											</th>
											<th class="text-center">
												TICKET ID
											</th>
											<th class="text-center">
												INFORMATION ID
											</th>
											<th>
												DELETE
											</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($db->get_passengers() as $passenger) : ?>
											<tr>
												<td>
													<?= $passenger['id'] ?>
												</td>
												<td>
													<?= $passenger['seat_number'] ?>
												</td>
												<td class="text-center">
													<?= $passenger['ticket_id'] ?>
												</td>
												<td class="text-center">
													<?= $passenger['info_id'] ?>
												</td>
												<td class="text-center">
													<a href="delete.php?passenger_id=<?= $passenger['id'] ?>"><i class="tim-icons icon-trash-simple"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Aircraft -->
				<div class="col-lg-6 col-md-12">
					<div class="card ">
						<div class="card-header">
							<h4 class="card-title">Aircraft</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablesorter " id="">
									<thead class=" text-primary">
										<tr>
											<th>
												AIRCRAFT ID
											</th>
											<th>
												MODEL
											</th>
											<th>
												CAPACITY
											</th>
											<th>
												MANUFACTURER
											</th>
											<th>DELETE</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($db->get_aircrafts() as $aircraft) : ?>
											<tr>
												<td>
													<?= $aircraft['id'] ?>
												</td>
												<td>
													<?= $aircraft['model'] ?>
												</td>
												<td class="text-center">
													<?= $aircraft['capacity'] ?>
												</td>
												<td class="text-center">
													<?= $aircraft['manufacturer'] ?>
												</td>
												<td class="text-center">
													<a href="delete.php?aircraft_id=<?= $aircraft['id'] ?>"><i class="tim-icons icon-trash-simple"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Ticket -->
				<div class="col-lg-6 col-md-12">
					<div class="card ">
						<div class="card-header">
							<h4 class="card-title">TICKET</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table tablesorter " id="">
									<thead class=" text-primary">
										<tr>
											<th>
												TICKET ID
											</th>
											<th>
												PASSENGER ID
											</th>
											<th>
												SEAT NUMBER
											</th>
											<th>
												ARRIVAL DATE
											</th>
											<th>DELETE</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($db->get_tickets() as $ticket) : ?>
											<tr>
												<td>
													<?= $ticket['id'] ?>
												</td>
												<td>
													<?= $ticket['passenger_id'] ?>
												</td>
												<td class="text-center">
													<?= $ticket['seat_number'] ?>
												</td>
												<td class="text-center">
													<?= $ticket['arrival_date'] ?>
												</td>
												<td class="text-center">
													<a href="delete.php?ticket_id=<?= $ticket['id'] ?>"><i class="tim-icons icon-trash-simple"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
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