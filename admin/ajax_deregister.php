
<?php

	include("../project/connection.php");

	$id = $_POST['id'];

	$sql = "DELETE from sem_status where id='$id'";

	mysqli_query($connect,$sql);

?>