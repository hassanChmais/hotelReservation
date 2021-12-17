<?php
include('../connection/conn.php');
$id=$_GET['food_drink_id'];
$sql = "DELETE From food_drink where food_drink_id=$id";
mysqli_query($con,$sql);
	header('location:index.php');

?>