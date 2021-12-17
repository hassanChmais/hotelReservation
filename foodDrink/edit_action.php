<?php
include('../connection/conn.php');
$food_drink_id=$_POST['GETid'];
$name=$_POST['food_drink_name'];
$descrption=$_POST['food_drink_descrption'];
$price=$_POST['price'];
$cat=$_POST['catID'];

if($_FILES['image']['size'] != NULL)
{
$pic_name =$_FILES['image']['name'];
$pic_loc = $_FILES['image']['tmp_name'];
$folder="../Images/";
move_uploaded_file($pic_loc,$folder.$pic_name);
 $sql = "UPDATE food_drink SET food_drink_name = '$name' ,food_drink_descrption ='$descrption' , price = $price , pic_url = '$pic_name' , category_food_drink_id = $cat   WHERE food_drink_id = $food_drink_id";

}
else{
 $sql = "UPDATE food_drink SET food_drink_name = '$name' ,food_drink_descrption ='$descrption' , price = $price ,  category_food_drink_id = $cat   WHERE food_drink_id = $food_drink_id";

}
mysqli_query($con,$sql);
	header('location:index.php');


	?>