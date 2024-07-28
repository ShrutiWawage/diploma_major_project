<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    try
    {
        if(isset($_POST["send"])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'marksupgpa@gmail.com';
        $mail->Password = 'rvjsysemoytqqhmp'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('marksupgpa@gmail.com'); 

        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Subject = $_POST["subject"]; 
        $mail->Body = $_POST["message"];

        $mail->send();

        echo
        "
        <script>
        alert('Send Successfully');
        document.location.href = 'index.php';
        </script>
        ";
        }
    }
    catch(Exception $e)
    {
        echo
        "
        <script>
        alert('Please check your internet connection!....');
        document.location.href = 'index.php';
        </script>
        ";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>

    <style>
        *{
	margin: 0;
	padding: 0;
	box-sizing: border-box; 
	font-family: 'poppins', sans-serif;
    }

        .container 
        {

            width: 100%;
            height: 100vh;
            background: #b3b3e6;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form
        {
        background: black;
        display: flex;
        flex-direction: column;
        padding: 2vw 4vw;
        width: 90%;
        max-width: 600px;
        border-radius: 10px;
        }

        form h3
        {
            color: #0d0d26;
            font-weight: 800;
            margin-bottom: 20px;
        }

        form input, form textarea
        {
        border: 0;
        margin: 10px 0;
        padding: 20px;
        outline: none;
        background: #f5f5f5;
        font-size: 16px;
        }



        form button
        {
        padding: 15px;
        background: #333399;
        color: #fff;
        font-size: 18px;
        border: 0;
        outline: none;
        cursor: pointer; 
        width: 150px;
        margin: 20px auto 0;
        border-radius: 30px;
        }
    </style>
</head>
<body style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("navbar.php");
?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -31px;">
				<?php
					include("side_navBar.php");
				?>
			</div>
			<div class="col-md-10">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h5 class="text-center text-white">Report Issue</h5><br>
                            <form method="post" enctype="multipart/form-data">

                            <h3 class="text-white">GET IN TOUCH</h3>

                            <input type="text" id="name" placeholder="Your Name" required> <input type="email" name="email" id="email" placeholder="Email id" required>
                            
                            <input type="text" name="subject" id="email" placeholder="Subject" required>
                            <textarea id="message" rows="4" name="message" placeholder="Type your message.."></textarea> 

                            <input type="submit" value="Send" name="send" class="btn btn-success">

                            </form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>