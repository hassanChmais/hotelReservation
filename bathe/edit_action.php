<?php
include('../connection/conn.php');
$bathes_id=$_POST['GETid'];
$name=$_POST['bathes_name'];

$sql = " UPDATE bathes SET bathes_name = '$name' WHERE bathes_id = $bathes_id ";
mysqli_query($con,$sql);
	header('location:index.php');


	?>