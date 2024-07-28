
<?php

session_start();

include("../project/connection.php");


$output="";
$output1="";
$course="";


	if(isset($_POST['click']))
	{
		$year = $_POST['year'];

		if($year == "-1")
  		{
    		echo "<script>alert('Select year')</script>";
 		}
		else
		if($year == "3rd_year")
		{
			$output .="
			<label style='font-size:20px;'>Select Semester:</label>
				<select name='sem'>
				  <option value='-1'>Select Semester</option>
				  <option>5th_semester</option>
				  <option>6th_semester</option>
			";

			$output .="
				</select>
				<input type='submit' name='click1' value='>'>
		    ";

		}
	}

	if(isset($_POST['click1']))
	{
		$sem = $_POST['sem'];

		$_SESSION['semester'] = $sem;

		if($sem == "5th_semester")
		{
        $sql ="SELECT c_name from 5sem_courses";

	    $res = mysqli_query($connect,$sql);

		$output1="";

		$output1 .="
		<label style='font-size:20px;'>Select Semester:</label>
			<select name='course'>
				<option value='-1'>Select sem course</option>
		";

		while($row = mysqli_fetch_array($res))
		{
			$output1 .= "
				<option>".$row['c_name']."</option>
            ";
		}

		$output1 .="
			</select>
		 ";

		}
		else
		if($sem == "6th_semester")
		{
			$sql ="SELECT c_name from 6sem_courses";

			$res = mysqli_query($connect,$sql);

			$output1="";

			$output1 .="
			<label style='font-size:20px;'>Select Semester:</label>
				<select name='course'>
					<option value='-1'>Select sem course</option>
                ";

				while($row = mysqli_fetch_array($res))
				{
					$output1 .= "
						<option required>".$row['c_name']."</option>
                    ";
			  	}

				$output1 .="
					</select>
				";

				if(isset($_POST['upload']))
				{
					$course = $_POST['course'];
				}
		}
			
	}

	if(isset($_POST['register']))
	{
		$count = 0;
		$c = $_POST['course'];
		$user = $_SESSION['teacher'];
		$date_reg = $_POST['date_reg'];
		$s = $_SESSION['semester'];

		$query="SELECT teacher_n, course from sem_status";
		$res = mysqli_query($connect,$query);

		while($row = mysqli_fetch_array($res))
		{
			if($c == $row['course'])
			{
				$count += 1; 
			}
            
		}

		if($count == 0)
		{
			$sql = "INSERT into sem_status(teacher_n,semester,course,date_reg) values('$user','$s','$c','$date_reg')";

			$res = mysqli_query($connect,$sql);

			if($res)
			{
				echo "<script>alert('Succesfully Registered......')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}
		}
		else
		{
			echo "<script>alert('Failed because course is already registered........')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard of teacher</title>
	
</head>
<body style="background-image: url(img/aaa.jpg); background-size: cover; background-repeat: no-repeat;">

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
				<div class="container py-5 h-70">
					<div class="row d-flex justify-content-center align-items-center h-80">
					<div class="col-lg-8 col-xl-6">
						<div class="card rounded-3" style="border-left: 0px; padding: 0px;">
						<img src="img/1234.jpg"
							class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; height:200px;"
							alt="Sample photo">
						<div class="card-body p-4 p-md-5" style="background-image:url('img/123.jpg');">
							<h3 class="text-white">Register Your Subject.....</h3>
							<br>
							<form method="post" enctype="multipart/form-data">

								<div class="form-group text-white">
									<?php
									if((isset($_POST['click'])))
									{
										echo $output;
									}
									else
									if(!isset($_POST['click1'])){
									echo "
									<label style='font-size:20px;'>Select Year:</label>
									<select name='year'>
										<option value='-1'>Select Year</option>
										<option>3rd_year</option>
									</select>
									<input type='submit' name='click' value='>'>";
									}

									if((isset($_POST['click1'])))
									{
										echo $output1;
									}
									?>
								</div>

							<div class="row">
								<div class="col-md-6 mb-4">

								<div class="form-outline datepicker">
									<input type="date" class="form-control" name="date_reg" id="exampleDatepicker1"/>
									<label for="exampleDatepicker1" class="form-label text-white" style='font-size:20px;'>Select a date</label>
								</div>

								</div>
								</div>

								<input type="submit" name="register" value="Register" class="btn btn-success">

							</form>

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