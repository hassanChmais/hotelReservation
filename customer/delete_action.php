<?php
include('../connection/conn.php');
$id=$_GET['customer_id'];
$sql = "DELETE From customer where customer_id=$id";
mysqli_query($con,$sql);
	header('location:index.php');

?>