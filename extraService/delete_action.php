<?php
include('../connection/conn.php');
$id=$_GET['extra_services_id'];
$sql = "DELETE From extra_services where extra_services_id=$id";
mysqli_query($con,$sql);
	header('location:index.php');

?>