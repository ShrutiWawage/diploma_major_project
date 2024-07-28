
<?php

include("../project/connection.php");

$sql = "SELECT * from teacher where status='Pending' order by date_reg asc";
$res = mysqli_query($connect,$sql);

$output="";

$output .="

	<table class='table table-bordered text-white'>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Date Registered</th>
			<th>Action</th>
		</tr>
";

if(mysqli_num_rows($res) < 1)
{
	$output .="
		<tr>
			<td colspan='5'>No login Request Yet.</td>
		</tr>
	";
}

while($row = mysqli_fetch_array($res))
{
	$output .= "
		<tr>
			<td>".$row['id']."</td>
			<td>".$row['fname']."</td>
			<td>".$row['email']."</td>
			<td>".$row['date_reg']."</td>
			<td>
				<div class='col-md-10'>
					<div class='row'>
						<div class='col-md-4'>
							<button id='".$row['id']."' class='btn btn-success approve'>Approve</button>
						</div>
						<div class='col-md-4'>
							<button id='".$row['id']."' class='btn btn-danger reject'>Reject</button>
						</div>
					</div>
				</div>
			</td>
	";
}

	$output .="
		</tr>
		</table>
	";

	echo $output;

?>