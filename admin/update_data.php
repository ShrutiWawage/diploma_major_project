<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(img/123.jpg); background-size: cover; background-repeat: no-repeat;">

<?php
	include("../project/connection.php");

    $c_name = $_POST['c_name'];
    $t_max = $_POST['t_max'];
    $t_min = $_POST['t_min'];
	$p_max = $_POST['p_max'];
	$p_min = $_POST['p_min'];
    $prac_max = $_POST['prac_max'];
	$prac_min = $_POST['prac_min'];
	$o_max = $_POST['o_max'];
	$o_min = $_POST['o_min'];
	$c_credit = $_POST['c_credit'];
	$t_hour = $_POST['t_hour'];
	$o_exam = $_POST['o_exam'];
	$sem = $_POST['sem'];

    if($sem == "5th_Semester")
	{
        $sql ="UPDATE 5sem_courses set theory_max=$t_max, theory_min=$t_min, pa_max=$p_max, pa_min=$p_min, prac_max=$prac_max, prac_min=$prac_min, oral_max=$o_max, oral_min=$o_min, c_credit=$c_credit, theory_hour=$t_hour where c_code ='$c_name' ";
        $res = mysqli_query($connect,$sql);

        if($res)
		{
			echo "<script>alert('Updated.....')</script>";
		}
		else
		{
			echo "<script>alert('Failed')</script>";
		}
        header("Location:index.php");
    }
    else
    {
        if($sem == "6th_Semester")
	    {
        $sql ="UPDATE 6sem_courses set theory_max=$t_max, theory_min=$t_min, pa_max=$p_max, pa_min=$p_min, prac_max=$prac_max, prac_min=$prac_min, oral_max=$o_max, oral_min=$o_min, c_credit=$c_credit, theory_hour=$t_hour where c_code ='$c_name' ";
        $res = mysqli_query($connect,$sql);

        if($res)
		{
			echo "<script>alert('Updated.....')</script>";
		}
		else
		{
			echo "<script>alert('Failed')</script>";
		}
        header("Location:index.php");
        }
    }
    
?>

</body>
</html>