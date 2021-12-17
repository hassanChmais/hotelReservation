<?php
include('../connection/conn.php');
$room_id=$_POST['GETid'];
$new_id=$_POST['room_id'];

$sql = "UPDATE room SET room_id = $new_id WHERE room_id = $room_id";
mysqli_query($con,$sql);
	header('location:index.php');
	?>