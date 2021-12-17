<?php
include('../connection/conn.php');
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];

$sql = "INSERT INTO customer (name,phonenumber) VALUES ('$name','$phonenumber')";
mysqli_query($con,$sql);
	header('location:index.php');


           
?>