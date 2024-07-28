<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
					<div class="col-md-12">
						<div class="row">

							<div class="col-md-6" style="margin-top: 20px;">
								<h4 class="text-white">Edit Courses</h4>
                                <br>

								<form method="post" action="update.php" enctype="multipart/form-data">
									
									<div class="form-group">
										<label class="text-white">Select 5th semester Course</label>

                                        <?php

						                    $sql ="SELECT c_name from 5sem_courses";

						                    $res = mysqli_query($connect,$sql);

						                    $output="";

											$output .="
												<select name='5sem' class='form-control' required>
													<option value='-1'>Select</option>
											";

						                    while($row = mysqli_fetch_array($res))
						                    {
							                    $output .= "
													<option required>".$row['c_name']."</option>
                                                ";
											}

											$output .="
												</select>
											";

											echo $output;

										?>
										<br>

											<input type="submit" name="5_submit" value="Edit" class="btn btn-success">
									</div>

									<div class="form-group">
										<label class="text-white">Select 6th semester Course</label>

                                        <?php

						                    $sql ="SELECT c_name from 6sem_courses";

						                    $res = mysqli_query($connect,$sql);

						                    $output="";

											$output .="
												<select name='6sem' class='form-control' required>
													<option value='-1'>Select</option>
											";

						                    while($row = mysqli_fetch_array($res))
						                    {
							                    $output .= "
													<option>".$row['c_name']."</option>
                                                ";
											}

											$output .="
												</select>
											";

											echo $output;

										?>
										<br>

											<input type="submit" name="6_submit" value="Edit" class="btn btn-success">
									</div>


								</form>
							</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>