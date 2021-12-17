<?php
include('../connection/conn.php');
$customer_id=$_POST['GETid'];
$name=$_POST['name'];
$phone=$_POST['phonenumber'];
if(isset($_POST['GETid']) && isset($_POST['name']) && isset($_POST['GETid'])){
$sql = " UPDATE customer SET name = '$name' , phonenumber = $phone  WHERE customer_id = $customer_id ";
mysqli_query($con,$sql);
	header('location:index.php');
}else{
	header('location:edit.php?customer_id='.$customer_id);
}

	?>