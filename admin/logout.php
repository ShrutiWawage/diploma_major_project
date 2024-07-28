<?php
session_start();

if(isset($_SESSION['clg_admin']))
{
	unset($_SESSION['clg_admin']);

	header("Location:../index.php");
	
}

?>