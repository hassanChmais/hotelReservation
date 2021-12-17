<?php
include('../connection/conn.php');
$id=$_GET['room_id'];
$sql = "DELETE From room where room_id=$id";
mysqli_query($con,$sql);
$msg="Successufly Deleted";
	header('location:index.php');

?>