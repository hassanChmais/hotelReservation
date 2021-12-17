<?php
include('../connection/conn.php');
$room_id=$_POST['room_id'];

$sql = "INSERT INTO room (room_id) VALUES ('$room_id')";
mysqli_query($con,$sql);
	header('location:index.php');
?>