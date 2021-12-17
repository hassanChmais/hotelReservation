<?php
include('../connection/conn.php');
$category_food_drink_name=$_POST['category_food_drink_name'];

$sql = "INSERT INTO category_food_drink (category_food_drink_name) VALUES ('$category_food_drink_name')";
mysqli_query($con,$sql);
	header('location:index.php');
?>