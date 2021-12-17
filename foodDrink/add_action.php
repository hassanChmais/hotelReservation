<?php
include('../connection/conn.php');
$food_drink_name=$_POST['food_drink_name'];
$food_drink_descrption=$_POST['food_drink_descrption'];
$price=$_POST['price'];
$catID=$_POST['catID'];

$pic_name =$_FILES['image']['name'];
$pic_loc = $_FILES['image']['tmp_name'];
$folder="../Images/";
move_uploaded_file($pic_loc,$folder.$pic_name);

$sql ="INSERT INTO food_drink (food_drink_name,food_drink_descrption,price,category_food_drink_id,pic_url)
 VALUES ('$food_drink_name','$food_drink_descrption','$price','$catID', '$pic_name')";
mysqli_query($con,$sql);
	header('location:index.php');
?>