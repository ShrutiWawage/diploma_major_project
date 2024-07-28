<?php 
session_start();
$year = $_SESSION['year'];

$con = mysqli_connect('localhost','root','',$year);

header('Content-type: application/vnd-ms-excel');
$filename="user_dala.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");
?>
<table class="table table-bordered">
				<thead>
					<tr><th>S_n</th>
					<th>Id_code</th>
						<th>Name</th>
						<th>PA1</th>
						<th>PA2</th>
						<th>Average</th>
						<th>Microproject</th>
						<th>PA/30</th>
						<th>Ext</th>
						<th>TW</th>
</tr>

</thead>

<tbody>

<?php

$c = $_SESSION['course_y'];
  
$sn=1;

$sql="SELECT * from $c"; 
$result = mysqli_query($con, $sql);

while($stud_data=mysqli_fetch_assoc($result))

{

?>

<tr>
	<td><?php echo $sn; ?></td>

<td><?php echo $stud_data['id_code']; ?></td>

<td><?php echo $stud_data['stud_name']; ?></td>

<td><?php echo $stud_data['pa1']; ?></td>

<td><?php echo $stud_data['pa2']; ?></td>

<td><?php echo $stud_data['avg']; ?></td>

<td><?php echo $stud_data['microproject']; ?></td>

<td><?php echo $stud_data['pa30']; ?></td>

<td><?php echo $stud_data['ext']; ?></td>

<td><?php echo $stud_data['tw']; ?></td>

</tr>

<?php

$sn++;

}

?>

</tbody>

</table>


	
</div>

</div>

</body>

</html>