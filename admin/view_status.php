
<?php
	session_start();

	include("../project/connection.php");

	$output="";

	if(isset($_POST['view']))
	{

		$sem = $_POST['sem'];

		if($sem != "-1")
		{
		$sql ="SELECT teacher_n, semester, course, sem_status from sem_status where semester='$sem' order by id asc";

		$res = mysqli_query($connect,$sql);

		$output .="
			<table class='table table-bordered' style='font-size:20px;'>
				<tr>
					<th>Name</th>
					<th>semester</th>
					<th>Course</th>
					<th>Status</th>
				</tr>
		";

		while($row = mysqli_fetch_array($res))
		{
			if($row['sem_status'] == "Pending")
			{
				$clr="<i class='	far fa-dot-circle bg-danger'></i><span class='ms-1'> ".$row['sem_status']."</span>";
			}
			else
			{
				$clr="<i class='far fa-check-circle green'></i><span class='ms-1'> ".$row['sem_status']."</span>";
			}

			$output .= "
				<tr class='text-white'>
					<td>".$row['teacher_n']." sir</td>
					<td>".$row['semester']."</td>
					<td>".$row['course']."</td>
					<td>$clr</td>
			";
						
		}

		$output .="
			</tr>
			</table>
		";
		}
		else{
			echo "<script>alert('Select semester')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

		body{
    		font-family: 'Open Sans', sans-serif;
		}
		.search{
		
		top:6px;
		left:10px;
		}

		.form-control{
			
			border:none;
			padding-left:32px;
		}

		.form-control:focus{
			
			border:none;
			box-shadow:none;
		}

		.green{
			
			color:green;
		}
	</style>
</head>
<body style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

	<?php
		include("navbar.php");

		include("../project/connection.php");
	?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -29px;">

				<?php

				 include("side_navBar.php");
				?>

			</div>

			<div class="col-md-10">
				<div class="col-md-12">
					<div class="row">

						<div class="col-md-6">
						<div class="container mt-5 px-2">

						<form method="post" enctype="multipart/form-data">
							<label style='font-size:20px;' class="text-white">Select Semster:</label>
							<select name='sem' class='form-control' style="width:200px;">
								<option value='-1'>Select</option>
								<option>5th_semester</option>
								<option>6th_semester</option>
							</select>
							<br>
							<div>
							<input type='submit' name='view' value='View' class="btn btn-success">
							</div>
						</form>

						<br><br>

						<?php
						echo $output;
						?>	
  
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