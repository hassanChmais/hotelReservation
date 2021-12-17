<?php
include('../connection/conn.php');
    session_start();
$room_id=$_SESSION['room_id'];
$customer_id=$_SESSION['customer_id'];
$sql_insert =  "INSERT INTO reservation (room_id  ,customer_id  ) VALUES  ($room_id,$customer_id)";
mysqli_query($con,$sql_insert);

$sql_select="SELECT * FROM reservation ORDER BY reservation_id DESC LIMIT 1 " ;
$result=mysqli_query($con,$sql_select);
$row=mysqli_fetch_assoc($result);
$id = $row['reservation_id'];



if(isset($_POST['bathe_ID']) != Null ){
foreach ($_POST['bathe_ID'] as $selectedOption) {
$sql = "INSERT INTO bathes_resrvation (resrvation_id , bathes_id) VALUES ($id , $selectedOption)";
mysqli_query($con,$sql);
}
header('location:index.php');
}
	else{
		header('location:index.php?error=error');
	}
?>