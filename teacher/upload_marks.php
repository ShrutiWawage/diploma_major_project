
<?php
use SimpleExcel\SimpleExcel;

	session_start();

include("../project/connection.php");

$output="";
$output1="";
$course="";
$count=0;
$count1=0;
$count2=1;
$ou="";
$ou1="";


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
			$count1 = $count1 + 1;

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

		if($sem == "-1")
  		{
    		echo "<script>alert('Select semester')</script>";
 		}
		else
		if($sem == "5th_semester")
		{
        $sql ="SELECT c_name from 5sem_courses";
		$count = $count + 1;
		$count2 = $count2 + 1;
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
		
		if(isset($_POST['upload']))
		{
			$course = $_POST['course'];
		}

		}
		else
		if($sem == "6th_semester")
		{
			$count = $count + 1;
			$count2 = $count2 + 1;
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

	if(isset($_POST['upload']))
	{
		$course="";

		$c = $_POST['course'];
		$user = $_SESSION['teacher'];
		$s = $_SESSION['semester'];

		$sql ="SELECT * from sem_status where teacher_n='$user' && semester='$s'";

		$res = mysqli_query($connect,$sql);

		$row = mysqli_fetch_array($res);

		if(mysqli_num_rows($res) < 1)
		{
			echo "<script>alert('Course is not registered please registered firstly......')</script>";
		}
		else{
			$course = $row['course'];
			$_SESSION['cou'] = $course;
		}

		if($c == $course)
		{
			//create database 
			$input_date = $_POST['date'];
			// Create a DateTime object from the input value
			$date_object = new DateTime($input_date);
			// Extract the year from the DateTime object
			$year = $date_object->format('Y');

			$yeardb = "y_".$year;

			$_SESSION['year'] = $yeardb;

			$conn = new mysqli("localhost", "root", "");

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Check if database exists
			$sql = "SHOW DATABASES LIKE '$yeardb'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
				
			} 
			else 
			{
				$connection = mysqli_connect("localhost", "root", "");

				// Create the database
				$sql3 = "CREATE DATABASE $yeardb";
				$result = mysqli_query($connection, $sql3);
			}

			// Close connection
			$conn->close();

			// Create connection
			$conn = new mysqli("localhost", "root","", $yeardb);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Table name to check

			// Check if table exists
			$sql = "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '$yeardb' AND table_name = '$c'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
			{
				$row = $result->fetch_assoc();
				$table_count = $row["COUNT(*)"];
				if ($table_count > 0) 
				{
					echo "<script>alert('Data is already uploaded......')</script>";

					$ou .="
						<input type='submit' name='another_response' value='Submit another response' class='btn btn-success' style='width:200px;'>
		   	 		";

					$ou1 .="
					<u><h4 class='text-danger'>Warning:</h4></u><h5 class='text-danger'>Your old data is deleted and new response is uploaded </h5> 
					";
				} 
				else 
				{
					if(move_uploaded_file($_FILES['excel_file']['tmp_name'],$_FILES['excel_file']['name']))
					{
						require_once('SimpleExcel/SimpleExcel.php'); 
			
						$excel = new SimpleExcel('csv');                  
			
						$excel->parser->loadFile($_FILES['excel_file']['name']);           
			
						$foo = $excel->parser->getField(); 

						$count = 6;
						$db = mysqli_connect('localhost','root','',$yeardb);

						$sql = "
						CREATE TABLE `$c` (
							`id_code` varchar(50) NOT NULL,
							`stud_name` varchar(50) NOT NULL,
							`pa1` varchar(30) NOT NULL,
							`pa2` varchar(30) NOT NULL,
							`avg` varchar(50) NOT NULL,
							`microproject` varchar(50) NOT NULL,
							`pa30` varchar(30) NOT NULL,
							`ext` varchar(30) NOT NULL,
							`tw` varchar(50) NOT NULL
						);
						";

						$result = mysqli_query($db,$sql);

						if($result)
						{
							while(count($foo)>$count)
							{
								$id = $foo[$count][1];
								$name = $foo[$count][2];
								$pa1 = $foo[$count][3];
								$pa2 = $foo[$count][4];
								$avg = $foo[$count][5];
								$mp = $foo[$count][6];
								$pa30 = $foo[$count][7];
								$ext = $foo[$count][8];
								$tw = $foo[$count][9];

								$query = "INSERT INTO $c (id_code,stud_name,pa1,pa2,avg,microproject,pa30,ext,tw) ";
								$query.="VALUES ('$id','$name','$pa1','$pa2','$avg','$mp','$pa30','$ext','$tw')";
								mysqli_query($db,$query);
								$count++;
							}
						}
					}

			

					$sql ="UPDATE sem_status set sem_status='Completed' where course='$c'";

					$res = mysqli_query($connect,$sql);

					if($res)
					{
						echo "<script>alert('Succesfully uploaded......')</script>";
						$count = 0;
					}
				
				}
			} 
			else 
			{
				echo "Error: " . $conn->error;
			}

			// Close connection
			$conn->close();

			
		}
		else
		{
			if($course != "")
			echo "<script>alert('Course is not registered please registered firstly......')</script>";
		}
	
	}

	if(isset($_POST['another_response']))
	{
		$cou = $_SESSION['cou'];
		$y = $_SESSION['year'];

		$conn = new mysqli("localhost", "root", "",$y);
	
		$sqlq = "DROP TABLE $cou";
		mysqli_query($conn,$sqlq);
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
			<div class="col-md-2" style="margin-left: -31px;">

				<?php

				 include("side_navBar.php");
				?>

			</div>
			<div class="col-md-10">
				<br>
				<h4 class="text-white">Upload Marks...</h4>
				<br>
				<form method="post" enctype="multipart/form-data">
					
					<div class="form-group text-white">
						<?php
						if($count1 == 1)
						{
							echo $output;
						}
						else
						if($count == 0){
						echo "
						<label style='font-size:20px;' class='text-white'>Select Year:</label>
						<select name='year' required>
							<option value='-1'>Select Year</option>
							<option>3rd_year</option>
						</select>
						<input type='submit' name='click' value='>'>";
						}

						if($count2 == 2)
						{
							echo $output1;
						}
						?>
					</div>

					<div class="form-group">
						<label style="font-size:19px;" class='text-white'>Select Date:</label>
						<input type="date" name="date">
					</div>

					<div class="form-group">
						<label style="font-size:20px;" class='text-white'>Browse ExcelSheet</label>
						<input type="file" name="excel_file" class="form-control" style="width:400px;">
					</div>

					<input type="submit" name="upload" value="Upload" class="btn btn-success">
					<br><br>
					<?php
						echo $ou;
					?>
				</form>
				<br><br><br><br>
				<?php
					echo $ou1;
				?>
			</div>
		</div>
	</div>
</div>

</body>
</html>