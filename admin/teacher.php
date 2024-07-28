<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Total Teacher</title>
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
					<h5 class="text-center text-white" style="margin-bottom: 25px; margin-top: 15px;">Total Teacher</h5>
					<?php

						$sql ="SELECT * from teacher order by id asc";

						$res = mysqli_query($connect,$sql);

						$output="";

						$output .="

							<table class='table table-bordered text-white'>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Date Registered</th>
							</tr>
						";

						if(mysqli_num_rows($res) < 1)
						{
							$output .="
								<tr>
									<td colspan='4'>No Teacher Yet.</td>
								</tr>
							";
						}

						while($row = mysqli_fetch_array($res))
						{
							$output .= "
								<tr>
									<td>".$row['id']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['email']."</td>
									<td>".$row['date_reg']."</td>
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