
<?php
  
  session_start();

  include("project/connection.php");

  if(isset($_POST['login']))
  {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    if(empty($username))
    {
      $error['clg_admin'] = "Enter Username";
    }
    elseif(empty($password))
    {
      $error['clg_admin'] = "Enter Password";
    }

    if(count($error) == 0)
    {
      $sql = "SELECT * FROM clg_admin WHERE username='$username' and password='$password'";

      $result = mysqli_query($connect,$sql);

      if(mysqli_num_rows($result) == 1)
      {
        echo "<script>alert('You have login As an admin...')</script>";

        $_SESSION['clg_admin'] = $username;

        header("Location:admin/index.php");
        exit();
      }
      else
      {
        echo "<script>alert('Invalid Username or password')</script>";
      }
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>

	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body style="background-image: url(images/123.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
  include("project/home.php");
?>

  <div style="margin-top: 7%;"></div>

  <div class="container">
  	<div class="col-md-12">
  		<div class="row">
  			<div class="col-md-3"></div>

  			<div class="col-md-6 jumbotron" style="background-color: #3b434a73;">

  				<img src="images/admin1.jpg" class="col-md-12" id="img_login" style="border-radius:40px;">

  				<form method="post" class="my-2">
  					<div class="form-group">
  						<label for="user" class="text-white">Username</label>
  						<input type="text" name="uname" id="user" class="form-control" autocomplete="off" placeholder="Enter Username">
  					</div>
  					<div class="form-group">
  						<label for="secur" class="text-white">Password</label>
  						<input type="password" name="pass" id="secur" class="form-control" autocomplete="off" placeholder="Enter Password">
  					</div>

  					<input type="submit" name="login" value="Login" class="btn btn-success" style="margin-left: 40%;">
  				</form>
  			</div>

  			<div class="col-md-3"></div>
  		</div>
  	</div>
  </div>

</body>
</html>