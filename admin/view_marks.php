
<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        .table-container {
            height: 400px;
            width: 900px;
        overflow-y: scroll;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        }

        th, td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
        }
    </style>
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
					?>
				</div>
				<div class="col-md-10">
					<div class="col-md-12">
						<div class="row">
                            <?php
                                $course = $_POST['course'];
                            ?>

							<div class="col-md-6" style="margin-top: 20px;">
								<h4 class="text-white"><?php echo $course ?></h4>
                                <br>

                                <?php
                                    $sn=1;

                                    $year = $_SESSION['year'];

                                    $_SESSION['course_y'] = $course;

                                    $con=mysqli_connect('localhost','root','',$year);

                                    $sql="SELECT * from $course"; 
                                    $result =mysqli_query($con, $sql);
                                ?>

                                <h5 class="text-white">Search Student</h5>

                                <input type="text" id="searchInput" placeholder="Search for user..." class="form-control" autocomplete="off"> 
                                <br>
                                <div class="table-container text-white">
                                    <table id="userTable">
                                        <thead>
                                        <tr>
                                            <th>S_n</th>
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
                                        </thead>
                                        <tbody>
                                            <?php
                                                if ($result->num_rows > 0) 
                                                {
                                                    while($stud_data= $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $sn . "</td>";
                                                        echo "<td>" . $stud_data['id_code'] . "</td>";
                                                        echo "<td>" . $stud_data['stud_name'] . "</td>";
                                                        echo "<td>" . $stud_data['pa1'] . "</td>";
                                                        echo "<td>" . $stud_data['pa2'] . "</td>";
                                                        echo "<td>" . $stud_data['avg'] . "</td>";
                                                        echo "<td>" . $stud_data['microproject'] . "</td>";
                                                        echo "<td>" . $stud_data['pa30'] . "</td>";
                                                        echo "<td>" . $stud_data['ext'] . "</td>";
                                                        echo "<td>" . $stud_data['tw'] . "</td>";
                                                        echo "<td><button class='btn btn-success' style='padding:1px; ' ><a href='edit_marks.php?id=" . $stud_data['id_code'] . "' class='nav-link text-white'>Edit</a></button></td>";
                                                        echo "</tr>";

                                                        $sn++;
                                                    }
                                                } 
                                                else 
                                                {
                                                    echo "<tr><td colspan='3'>No data available</td></tr>";
                                                }   
                                        ?>
                                        </tbody>
                                    </table>
                                </div><br>
                                <div>
                                    <a href="user_data_download.php" class="btn btn-primary" target="-blank">Data Export</a>      <a href="genrate_marksexcelsheet.php" class="btn btn-primary" target="-blank">Back</a>
                                </div>
                            </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    // Get the input element and table
    var input = document.getElementById("searchInput");
    var table = document.getElementById("userTable");

    // Add event listener to input element
    input.addEventListener("keyup", function() {
      // Get the user's input
      var filter = input.value.toUpperCase();

      // Loop through all table rows
      for (var i = 1; i < table.rows.length; i++) {
        var row = table.rows[i];

        // Hide the row by default
        row.style.display = "none";

        // Loop through all the cells in the row
        for (var j = 1; j < row.cells.length; j++) {
          var cell = row.cells[j];

          // If the cell contains the search text, show the row
          if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
            row.style.display = "";
            break;
          }
        }
      }
    });
  </script>

</body>
</html>