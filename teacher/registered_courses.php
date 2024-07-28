<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Regiistered Courses</title>
</head>
<body style="background-image: url(img/aaa.jpg); background-size: cover; background-repeat: no-repeat;">
	<?php
		include("navbar.php");

		include("../project/connection.php");
	?>

	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" style="margin-left: -30px;">
					<?php
						include("side_navBar.php");
					?>
				</div>

				<div class="col-md-10">
					<h5 class="text-center text-white" style="margin-bottom: 25px; margin-top: 15px;">Registered Courses</h5>
					<?php

                    $user = $_SESSION['teacher'];

						$sql ="SELECT * from sem_status where teacher_n='$user'";

						$res = mysqli_query($connect,$sql);

						$output="";

						$output .="

							<table class='table table-bordered text-white'>
							<tr>
								<th>Semester</th>
								<th>Course</th>
								<th>Date registered</th>
								<th>View</th>
							</tr>
						";

						if(mysqli_num_rows($res) < 1)
						{
							$output .="
								<tr>
									<td colspan='8'>No Registered Courses Yet.</td>
								</tr>
							";
						}

						while($row = mysqli_fetch_array($res))
						{
							$output .= "
								<tr>
									<td>".$row['semester']."</td>
									<td>".$row['course']."</td>
									<td>".$row['date_reg']."</td>
									<td>
									   <a href='update.php?course=".$row['course']."&semester=".$row['semester']."'>
									   		<button class='btn btn-info'>View</button>
									   </a>
									</td>
							";
						}

						$output .="
							</tr>
							</table>
						";

						echo $output;

					?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>