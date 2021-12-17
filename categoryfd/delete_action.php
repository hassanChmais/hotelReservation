<?php
include('../connection/conn.php');
$id=$_GET['category_id'];
$sql = "DELETE From category_food_drink where category_food_drink_id=$id";
mysqli_query($con,$sql);
	header('location:index.php');

?>