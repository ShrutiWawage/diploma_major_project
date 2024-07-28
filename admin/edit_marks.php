
<?php
session_start();

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pa1 = $_POST['pa1'];
    $pa2 = $_POST['pa2'];
    $avg = $_POST['avg'];
    $mp = $_POST['mp'];
    $pa30 = $_POST['pa30'];
    $ext = $_POST['ext'];
    $tw = $_POST['tw'];

    $year = $_SESSION['year'];

    $conn=mysqli_connect('localhost','root','',$year);

    $c = $_SESSION['course_y'];

    $sql = "UPDATE $c SET `stud_name` = '$name', `pa1` = '$pa1', `pa2` = '$pa2', `avg` = '$avg', `microproject` = '$mp', `pa30` = '$pa30', `ext` = '$ext', `tw` = '$tw' WHERE `id_code` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "<script>alert('Succesfully Updated...')</script>";

        header("Location:genrate_marksexcelsheet.php");
        exit();
    }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("navbar.php");
?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -28px;">
				<?php
					include("side_navBar.php");
					include("../project/connection.php");
				?>
			</div>
			<div class="col-md-10">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h5 class="text-center text-white">Edit Marks</h5><br>
                            <div class="table-container text-white">
                                    <table id="userTable" class='table table-bordered'>
                                        <tr>
                                            <th>Id_code</th>
                                            <th>Name</th>
                                            <th>PA1</th>
                                            <th>PA2</th>
                                            <th>Average</th>
                                            <th>Microproject</th>
                                            <th>PA/30</th>
                                            <th>Ext</th>
                                            <th>TW</th>
                                            <th>Edit</th>
                                        </tr>
                                        
                                        <tbody>
                                            <?php
                                                $year = $_SESSION['year'];

                                                $conn=mysqli_connect('localhost','root','',$year);

                                                $id = $_GET["id"];

                                                // Retrieve the data of the row from the database
                                                $sql = "SELECT * FROM php WHERE id_code = '$id'";
                                                $result = mysqli_query($conn, $sql);

                                                if (mysqli_num_rows($result) == 1)
                                                {
                                                    $row = mysqli_fetch_assoc($result);
                                                        echo"<form method='post' enctype='multipart/form-data'>";
                                                        echo "<tr>";
                                                        echo "<td>"."<input type='text' name='id' value='" . $row["id_code"] . "' style='width:80px;' readonly>"."</td>";
                                                        echo "<td>"."<input type='text' name='name' value='" . $row["stud_name"] . "' style='width:215px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='pa1' value='" . $row["pa1"] . "' style='width:60px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='pa2' value='" . $row["pa2"] . "' style='width:60px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='avg' value='" . $row["avg"] . "' style='width:60px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='mp' value='" . $row["microproject"] . "' style='width:90px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='pa30' value='" . $row["pa30"] . "' style='width:60px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='ext' value='" . $row["ext"] . "' style='width:60px;'>"."</td>";
                                                        echo "<td>"."<input type='text' name='tw' value='" . $row["tw"] . "' style='width:60px;'>"."</td>";
                                                        echo "<td><input type='submit' name='update' value='Update' class='btn btn-success' style='padding:1px; '></td>";
                                                        echo "</tr>";
                                                        echo"</form>";
                                                } 
                                                else 
                                                {
                                                    echo "<tr><td colspan='3'>No data available</td></tr>";
                                                }   
                                        ?>
                                        </tbody>
                                    </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>