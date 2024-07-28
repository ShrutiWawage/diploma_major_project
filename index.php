
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>

  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">

  <link href="css/vendor/animate.css/animate.min.css" rel="stylesheet">
 
  <style>
     .backvideo{
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -2;
      }

      @media (min-aspect-ratio:16/9){
          .backvideo{
              width: 100%;
              height: auto;
            }    
        }

      @media (max-aspect-ratio:16/9){
          .backvideo{
              width: auto;
              height: 100%;
          }
      } 
  </style>
  
</head>
<body>

<?php
  include("project/home.php");
?>

  <div style="margin-top: 50px;"></div>

  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Teaching Alongside Learning</h2>
                <p class="animate__animated animate__fadeInUp">A website the enables the teachers to conviniently upload the records of students marks and further have a detailed view of them .The website also gives the admin the authority to view the details and all records related to the students marks .</p>
                <div>
                  <a href="teacher_login.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a><a href="teacher_account.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign up</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
  </section>

  <video autoplay loop muted plays-inline class="backvideo">
        <source src="images/background.mp4" type="video/mp4">
  </video>

</body>
</html>