<?php
session_start();

if(isset($_SESSION['teacher']))
{
	unset($_SESSION['teacher']);

	header("Location:../teacher_login.php");
	
}

?>