
<?php

include("project/connection.php");

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$con_pass = $_POST['con_pass'];

		$error = array();


		if($con_pass != $password)
		{
			$error['ac'] = "Both Password do not match";
		}

		//inserting value to the database
		if(count($error) == 0)
		{
			$sql = "INSERT into teacher(fname,email,t_password,date_reg,status) values('$name','$email','$password',NOW(),'Pending')";

			$res = mysqli_query($connect,$sql);

			if($res)
			{
				header("Location:teacher_login.php");
			}
			else
			{
				echo "<script>alert('Failed')</script>";
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
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-10">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form method="post" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" id="form3Example1c" class="form-control" placeholder="Enter Your Name" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="form3Example3c" class="form-control" placeholder="Enter email" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="pass" id="form3Example4c" class="form-control" placeholder="Enter password" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="con_pass" id="form3Example4cd" class="form-control" placeholder="Repeat your Password" />
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input type="submit" name="submit" class="btn btn-success" value="Submit">
                  </div>
                  <p>I already have an account <a href="teacher_login.php">Click here</a></p>
                </form>

              </div>
              <div class="col-md-8 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/signup.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>