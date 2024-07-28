
<?php

session_start();

include("../project/connection.php");

	if(isset($_POST['submit']))
	{
		$c_name = $_POST['c_name'];
		$c_code = $_POST['c_code'];
		$t_max = $_POST['t_max'];
		$t_min = $_POST['t_min'];
		$p_max = $_POST['p_max'];
		$p_min = $_POST['p_min'];
		$prac_max = $_POST['prac_max'];
		$prac_min = $_POST['prac_min'];
		$o_max = $_POST['o_max'];
		$o_min = $_POST['o_min'];
		$c_credit = $_POST['c_credit'];
		$t_hour = $_POST['t_hour'];
		$o_exam = $_POST['o_exam'];
		$sem = $_POST['sem'];


		//inserting value to the database
		if($sem == "5th_Semester")
		{
			$sql = "INSERT into 5sem_courses values('$c_name','$c_code', $t_max, $t_min, $p_max, $p_min, $prac_max, $prac_min, $o_max, $o_min, $c_credit, $t_hour, '$o_exam', '$sem')";

			$res = mysqli_query($connect,$sql);

			if($res)
			{
				echo "<script>alert('Inserted.....')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}
		}
		else
		{
			$sql = "INSERT into 6sem_courses values('$c_name','$c_code', $t_max, $t_min, $p_max, $p_min, $prac_max, $prac_min, $o_max, $o_min, $c_credit, $t_hour, '$o_exam', '$sem')";

			$res = mysqli_query($connect,$sql);

			if($res)
			{
				echo "<script>alert('Inserted.....')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}
		}
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
					<h5 class="text-center text-white" style="margin-bottom: 25px; margin-top: 15px;">Add Courses</h5>

                    <form method="post">
				    <table class='table' style="width:800px;">
						<tr>
							<td class="text-white">Course Name </td>
							<td colspan="2"><input type="text" name="c_name" class="form-control" autocomplete="off" required style="width:200px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Course Code </td>
							<td colspan="2"><input type="text" name="c_code" class="form-control" autocomplete="off" required style="width:200px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Theory </td>
							<td><input type="number" name="t_max" class="form-control" autocomplete="off" placeholder="Max Marks" required style="width:300px;"></td>
                            <td><input type="number" name="t_min" class="form-control" autocomplete="off" placeholder="Min Marks" required style="width:300px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Progressive Test </td>
							<td><input type="number" name="p_max" class="form-control" autocomplete="off" placeholder="Max Marks" required style="width:300px;"></td>
                            <td><input type="number" name="p_min" class="form-control" autocomplete="off" placeholder="Min Marks" required style="width:300px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Practical </td>
							<td><input type="number" name="prac_max" class="form-control" autocomplete="off" placeholder="Max Marks" required style="width:300px;"></td>
                            <td><input type="number" name="prac_min" class="form-control" autocomplete="off" placeholder="Min Marks" required style="width:300px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Oral </td>
							<td><input type="number" name="o_max" class="form-control" autocomplete="off" placeholder="Max Marks" required style="width:300px;"></td>
                            <td><input type="number" name="o_min" class="form-control" autocomplete="off" placeholder="Min Marks" required style="width:300px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Course Credit </td>
							<td colspan="2"><input type="number" name="c_credit" class="form-control" autocomplete="off" placeholder="Credits" required style="width:200px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Theory Exam Hours </td>
							<td><input type="number" name="t_hour" class="form-control" autocomplete="off" required style="width:200px;"></td>
						</tr>
                        <tr>
							<td class="text-white">Online Exam </td>
							<td>
                            <select name="o_exam" class="form-control" required style="width:200px;">
							    <option value="-1">select</option>
                                <option>True</option>
							    <option>False</option>
						    </select>
                            </td>
						</tr>
						<tr>
							<td class="text-white">Semester </td>
							<td>
                            <select name="sem" class="form-control" required style="width:200px;">
							    <option value="-1">select</option>
                                <option>5th_Semester</option>
							    <option>6th_Semester</option>
						    </select>
                            </td>
						</tr>

                        <tr>
                            <td><input type="submit" name="submit" class="btn btn-success" value="Submit"></td>
							<td></td>
                            <td></td>
						</tr>
                    </table>
                    </form>
						
				</div>
			</div>
		</div>
	</div>

</body>
</html>