<?php
include('../connection/conn.php');

$bathes_name=$_POST['bathes_name'];

$sql = "INSERT INTO bathes (bathes_name) VALUES ('$bathes_name')";
mysqli_query($con,$sql);
	header('location:index.php');
?>