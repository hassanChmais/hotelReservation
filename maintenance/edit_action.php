<?php
include('../connection/conn.php');
$maintenance_id=$_POST['GETid'];
$name=$_POST['maintenance_name'];

$sql = " UPDATE maintenance SET maintenance_name = '$name' WHERE maintenance_id = $maintenance_id ";
mysqli_query($con,$sql);
	header('location:index.php');


	?>