
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info" style="background-color: #1c1e1f!important;">
    	<h5 class="text-white">Marks Management System</h5>

    	<div class="mr-auto"></div>

    	<ul class="navbar-nav">
      <?php

      if(isset($_SESSION['clg_admin']))
      {
        $user = $_SESSION['clg_admin'];

        echo '
          <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
        ';
      }

      ?>

    	</ul>
    	
    </nav>
</body>
</html>