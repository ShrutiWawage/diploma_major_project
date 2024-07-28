<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!--Navigation bar-->
<div class="list-group bg-info" style="height: 110vh; background-color: #1c1e1f!important;">

    <div class="sidebar-brand text-white">
      <span class="material-icons-outlined">inventory</span> MarksUp
    </div><br>

    <a href="index.php" class="text-white" style="text-decoration:none;">
	<li class="sidebar-list-item">
        <span class="material-icons-outlined">dashboard</span> Dashboard
  </li>
  </a>

  <a href="admin_profile.php"  class="text-white" style="text-decoration:none;">
  <li class="sidebar-list-item">
      <span class="material-icons-outlined">person</span> Profile
  </li>
  </a>

  <a href="add_admin.php" class="text-white" style="text-decoration:none;">
  <li class="sidebar-list-item">
      <span class="material-icons-outlined">fact_check</span> Administrators
  </li>
  </a>

  <a href="add_courses.php" class="text-white" style="text-decoration:none;">
  <li class="sidebar-list-item">
      <span class="material-icons-outlined">library_add</span> Add Courses
  </li>
  </a>

  <a href="edit_courses.php" class="text-white" style="text-decoration:none;">
  <li class="sidebar-list-item">
      <span class="material-icons-outlined">post_add</span> Edit Courses
  </li>
  </a>

  <a href="report.php" class="text-white" style="text-decoration:none;">
  <li class="sidebar-list-item">
      <span class="material-icons-outlined">edit_note</span> Report Issue
  </li>
  </a>

</div>
<!-- end of navigation bar-->

   <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>

</body>
</html>