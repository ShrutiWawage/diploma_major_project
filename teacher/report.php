<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(img/aaa.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("navbar.php");

	include("../project/connection.php");
?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -29px">
				<?php
					include("side_navBar.php");    
				?>
			</div>
			<div class="col-md-10">
				<div class="container-fluid">

					<?php

						if(isset($_POST['send']))
						{
							$title = $_POST['title'];
							$message = $_POST['message'];

                            $user = $_SESSION['teacher'];

							$query = "INSERT into report( title,message,username,date_send) values('$title','$message','$user',NOW())";

							$res = mysqli_query($connect,$query);

							if($res)
							{
								echo "<script>alert('You have sent Your Report')</script>";
							}
						}
					?>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-8 jumbotron my-5" style="background-image: url(img/1234.jpg); background-size: cover; background-repeat: no-repeat;" >
								<h5 class="text-center text-white">Send A Report</h5>
								<form method="post">
									<label class="text-white" >Title</label>
									<input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter Title of report" required>
                                    <br>
									<label class="text-white">Message</label>
									<input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter Message" required>
                                    <br>
									<input type="submit" name="send" value="Send Report" class="btn btn-success my-2">
								</form>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>