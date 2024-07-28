	
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard of Admin</title>
</head>
<body style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

	<?php
		include("navbar.php");

		include("../project/connection.php");
	?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -31px;">

				<?php

				 include("side_navBar.php");
				?>

			</div>
			<div class="col-md-10">

				<h4 class="my-2 text-white">Admin Dashboard</h4>

				<div class="col-md-12 my-1">
					<div class="row">
						<div class="col-md-3 mx-2 my-2" style="height: 130px; background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="text-white">View</h5>
										<h5 class="text-white">status</h5>
									</div>
									<div class="col-md-4">
									<a href="view_status.php"><i class="fa fa-book-open fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 mx-2 my-2" style="height: 130px; background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;"">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<h5 class="text-white">View</h5>
										<h5 class="text-white">Marks</h5>
									</div>
									<div class="col-md-4">
										<a href="genrate_marksexcelsheet.php"><i class="fa fa-book-open fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 mx-2 my-2" style="height: 130px; background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
										<?php
											$teacher = mysqli_query($connect,"SELECT * from teacher");

											$num2 = mysqli_num_rows($teacher);
										?>
										<h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num2 ?></h5>
										<h5 class="text-white">Total</h5>
										<h5 class="text-white">Teachers</h5>
									</div>
									<div class="col-md-4">
										<a href="teacher.php"><i class="fa fa-users-cog fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px; background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">

										<?php

											$job = mysqli_query($connect,"SELECT * from teacher where status='Pending'");

											$num1 = mysqli_num_rows($job);
										?>

										<h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num1 ?></h5>
										<h5 class="text-white">Total</h5>
										<h5 class="text-white">Login Request</h5>
									</div>
									<div class="col-md-4">
										<a href="request_job.php"><i class="fa fa-book-open fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						
						<div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px; background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;"">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">

										<?php
											$p1 = mysqli_query($connect,"SELECT * from report");

											$pp1 = mysqli_num_rows($p1);
										?>

										<h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $pp1; ?></h5>
										<h5 class="text-white">Total</h5>
										<h5 class="text-white">Report</h5>
									</div>
									<div class="col-md-4">
										<a href="teacher_report.php"><i class="fa fa-flag fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px; background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;"">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">

										<?php
											$p1 = mysqli_query($connect,"SELECT * from sem_status");

											$pp1 = mysqli_num_rows($p1);
										?>

										<h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $pp1; ?></h5>
										<h5 class="text-white">Registered</h5>
										<h5 class="text-white">Courses</h5>
									</div>
									<div class="col-md-4">
										<a href="registered_courses.php"><i class="fa fa-flag fa-3x my-4" style="color: white;"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

</body>
</html>