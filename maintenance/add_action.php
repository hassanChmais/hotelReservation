<?php
include('../connection/conn.php');
$maintenance_name=$_POST['maintenance_name'];

$sql = "INSERT INTO maintenance (maintenance_name) VALUES ('$maintenance_name')";
mysqli_query($con,$sql);
	header('location:index.php');
?>