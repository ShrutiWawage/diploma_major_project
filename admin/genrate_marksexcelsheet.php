<?php

session_start();

include("../project/connection.php");
$output1="";
	if(isset($_POST['submit']))
	{
		$year = $_POST['year'];

		$yeardb = "y_".$year;

		$_SESSION['year'] = $yeardb;

		$output1 .="
			<form method='post' action='view_marks.php' enctype='multipart/form-data'>
		";

        $output1 .="
		<label style='font-size:20px;' class='text-white'>Select Course:</label>
			<select name='course'  class='form-control' style='width: 160px;'>
				<option value='-1'>Select course</option>
		";
	
		// Create connection
		$conn = new mysqli("localhost","root","", $yeardb);
        
        $result = $conn->query("SHOW TABLES");
        while ($row = $result->fetch_array()) 
        {
			
        	$output1 .= "
					<option>".$row[0]."</option>
            	";
			
        }

		$output1 .="
			</select><br>
			<input type='submit' name='view' value='View' class='btn btn-success'>
			</form>
		 ";

    }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

	<?php
		include("navbar.php");

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
							<h4 class="my-2 text-white">View Marks</h4>
                            <br>
                        
                            <form method="post" enctype="multipart/form-data">
                                <label class="text-white">Select Year</label>
                                <?php

                                            $result = mysqli_query($connect, "SHOW DATABASES WHERE `Database` LIKE 'y_%'");

						                    $output="";

											$output .="
												<select name='year' class='form-control' required style='width: 100px;'>
													<option value='-1'>Select</option>
											";

						                    while ($row = mysqli_fetch_assoc($result))
						                    {
                                                $string = $row['Database'];
                                                $substring = substr($string, 2);
							                    $output .= "
													<option required>".$substring."</option>
                                                ";
											}

											$output .="
												</select>
											";

											echo $output;

										?>
                                <br>
                                <input type="submit" name="submit" value="Search" class="btn btn-success">
                            </form>
                            <br>
                        		
							<div class="form-group">
                            <?php
                                if((isset($_POST['submit'])))
						        {
							        echo $output1;
						        }
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