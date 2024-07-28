<?php

session_start();

include("project/connection.php");

if(isset($_POST['login']))
{
	$ename = $_POST['ename'];
	$pass = $_POST['pass'];

	if(empty($ename))
	{
		echo "<script>alert('Enter Username')</script>";
	}
	elseif (empty($pass)) 
	{
		echo "<script>alert('Enter Password')</script>";
	}

  $error = array();

  $q = "SELECT * from teacher where email='$ename' and t_password='$pass'";
	$qq = mysqli_query($connect,$q);

	$row = mysqli_fetch_array($qq);

	if($row['status'] == "Pending")
	{
		echo "<script>alert('Please Wait For the admin to confirm')</script>";
	}
	elseif($row['status'] == "Rejected")
	{
		echo "<script>alert('Try again later....')</script>";
	}
  else
	{
		$sql = "SELECT * from teacher where email='$ename' and t_password='$pass'";

		$res = mysqli_query($connect,$sql);

    $row = mysqli_fetch_array($res);

		if(mysqli_num_rows($res) == 1)
		{
			header("Location: teacher/index.php");

			$_SESSION['teacher'] = $row['fname'];
		}
		else
		{
			echo "<script>alert('Invalid Account')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-image: url(images/123.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("project/home.php");
  include("project/connection.php");
?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/login.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form method="post">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0, form-label">Login here....</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="ename" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="pass" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          
          <div class="text-center text-lg-start mt-4 pt-2">
          <input type="submit" name="login" class="btn btn-success" value="Login">
            <p class="small fw-bold mt-2 pt-1 mb-0, form-label">Don't have an account? <a href="teacher_account.php"
                class="link-danger, reg">Register</a></p>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

</body>
</html>