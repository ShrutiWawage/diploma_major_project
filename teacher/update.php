<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(img/aaa.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("navbar.php");
	include("../project/connection.php");
?>

	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" style="margin-left: -28px;">
					<?php
					include("side_navBar.php");
					?>
				</div>
				<div class="col-md-10">
					<div class="col-md-12">
						<div class="row">

							<div class="col-md-6" style="margin-top: 20px;">
								<h4 class="text-white">Courses</h4>
                                <br>

                                <?php
                                
									$course = $_GET['course'];
									$semester = $_GET['semester'];

                                    if($semester == "5th_semester")
                                    {
                                        $sql ="SELECT * from 5sem_courses where c_name='$course'";
                                    }

                                    if($semester == "6th_semester")
                                    {
                                        $sql ="SELECT * from 6sem_courses where c_name='$course'";
                                    }

                                    $res = mysqli_query($connect,$sql);

                                    $output="";

                                    $output .="
							            <table class='table' style='width:800px;'>
						            ";

                                    if($row = mysqli_fetch_array($res))
                                    {
                                        $c_name = $row['c_name'];
                                        $c_code = $row['c_code'];
		                                $t_max = $row['theory_max'];
		                                $t_min = $row['theory_min'];
		                                $p_max = $row['pa_max'];
		                                $p_min = $row['pa_min'];
		                                $prac_max = $row['prac_max'];
		                                $prac_min = $row['prac_min'];
		                                $o_max = $row['oral_max'];
		                                $o_min = $row['oral_min'];
		                                $c_credit = $row['c_credit'];
		                                $t_hour = $row['theory_hour'];
										$o_ex = $row['online_ex'];
                                        $sem = $row['sem'];
		        
                                        $output .= "
                                        <tr>
                                            <td class='text-white'>Course Name</td>
                                            <td colspan='2'><input type='text' value='$c_name' name='c_name' class='form-control' autocomplete='off' readonly required style='width:200px;'></td>
                                        </tr>
                                        <tr>
							                <td class='text-white'>Course Code </td>
							                <td colspan='2'><input type='text' value='$c_code' name='c_name' class='form-control' autocomplete='off' readonly required style='width:200px;'></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Theory </td>
							                <td><input type='number' name='t_max' value='$t_max' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
                                            <td><input type='number' name='t_min' value='$t_min' class='form-control' autocomplete='off' readonly required style='width:300px;''></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Progressive Test </td>
							                <td><input type='number' name='p_max' value='$p_max' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
                                            <td><input type='number' name='p_min' value='$p_min' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Practical </td>
							                <td><input type='number' name='prac_max' value='$prac_max' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
                                            <td><input type='number' name='prac_min' value='$prac_min' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Oral </td>
							                <td><input type='number' name='o_max' value='$o_max' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
                                            <td><input type='number' name='o_min' value='$o_min' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Course Credit </td>
							                <td colspan='2'><input type='number' name='c_credit' value='$c_credit' class='form-control' readonly autocomplete='off' required style='width:300px;'></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Theory Exam Hours </td>
							                <td><input type='number' name='t_hour' value='$t_hour' class='form-control' autocomplete='off' readonly required style='width:300px;'></td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Online Exam </td>
							                <td>
                                            <select name='o_exam' class='form-control' required readonly style='width:200px;'>
							                    <option>$o_ex</option>
						                    </select>
                                            </td>
						                </tr>
                                        <tr>
							                <td class='text-white'>Semester </td>
							                <td>
                                                <select name='sem' class='form-control' readonly required style='width:200px;'>
							                        <option>$sem</option>
						                        </select>
                                             </td>
						                </tr>

                                        ";
                                    }

                                    $output .="
							            </table>
						            ";

						            echo $output;
                                ?>
							</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>