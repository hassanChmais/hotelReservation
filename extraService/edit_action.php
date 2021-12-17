<?php
include('../connection/conn.php');
$extra_services_id=$_POST['GETid'];
$name=$_POST['extra_services_name'];
$price=$_POST['extra_services_price'];
$description=$_POST['description'];

if($_FILES['image']['size'] != NULL)
{
$pic_name =$_FILES['image']['name'];
$pic_loc = $_FILES['image']['tmp_name'];
$folder="../Images/";
move_uploaded_file($pic_loc,$folder.$pic_name);
 $sql = "UPDATE extra_services SET extra_services_name = '$name' , extra_services_price = $price , pic_url = '$pic_name' , descrption =  '$description'   WHERE extra_services_id = $extra_services_id";

}
else{
 $sql = "UPDATE extra_services SET extra_services_name = '$name' , extra_services_price = $price , descrption =  '$description'   WHERE extra_services_id = $extra_services_id";

}
mysqli_query($con,$sql);
	header('location:index.php');


	?>