<?php
include('../connection/conn.php');
$id=$_GET['maintenance_id'];
$sql = "DELETE From maintenance where maintenance_id=$id";
mysqli_query($con,$sql);
	header('location:index.php');

?>