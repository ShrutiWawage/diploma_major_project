
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Job Request</title>
</head>
<body  style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("navbar.php");
?>

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -28px;">
				<?php
					include("side_navBar.php");
				?>
			</div>
			<div class="col-md-10">
				<h5 class="text-center my-3 text-white">Job Request</h5>
				<br>
				<div id="show"></div>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		show();
		function show()
		{
			$.ajax({
				url:"ajax_course_diregister.php",
				method:"POST",
				success:function(data)
				{
					$("#show").html(data);
				}
			});
		}

		$(document).on('click','.reject', function()
		{
			var id = $(this).attr("id");

			$.ajax({
				url:"ajax_deregister.php",
				method:"POST",
				data:{id:id},
				success:function(data)
				{
					show();
				}
			});
		});

	});
</script>

</body>
</html>