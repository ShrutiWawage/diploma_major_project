
<?php

	include("../project/connection.php");

	$id = $_POST['id'];

	$sql = "UPDATE teacher set status='Rejected' where id='$id'";

	mysqli_query($connect,$sql);

?>