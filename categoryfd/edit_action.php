<?php
include('../connection/conn.php');
$category_food_drink_id=$_POST['GETid'];
$name=$_POST['category_food_drink_name'];

$sql = " UPDATE category_food_drink SET category_food_drink_name = '$name' WHERE category_food_drink_id = $category_food_drink_id ";
mysqli_query($con,$sql);
	header('location:index.php');


	?>