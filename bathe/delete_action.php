<?php
include('../connection/conn.php');
$id=$_GET['bathes_id'];
$sql = "DELETE From bathes where bathes_id=$id";
mysqli_query($con,$sql);
	header('location:index.php');

?>