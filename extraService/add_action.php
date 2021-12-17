<?php
include('../connection/conn.php');
if($_POST['$extra_services_name'] == Null){
	header('location:../room/index.php');
}
$extra_services_name=$_POST['extra_services_name'];
$extra_services_price=$_POST['extra_services_price'];
$description = $_POST['description'];


$pic_name =$_FILES['image']['name'];
$pic_loc = $_FILES['image']['tmp_name'];
$folder="../Images/";
move_uploaded_file($pic_loc,$folder.$pic_name);



$sql = "INSERT INTO extra_services (extra_services_name,extra_services_price,pic_url,descrption) VALUES ('$extra_services_name' , '$extra_services_price' , '$pic_name' , '$description' )";
mysqli_query($con,$sql);
	header('location:index.php');
?>