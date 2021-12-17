<?php
session_start();
unset($_SESSION['room_id']);
unset($_SESSION['customer_id']);
header('location:customer.php');
?>