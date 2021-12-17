<?php
session_start();
include('../connection/conn.php');
$sql_login="SELECT * FROM login ";

 $result_login=mysqli_query($con,$sql_login);
   while ($row_login=mysqli_fetch_assoc($result_login))
    {
$username = $row_login['username'];
$password = $row_login['password'];
if (isset($_POST)) {
	$post_username = $_POST['user'];
	$post_password = $_POST['pass'];
	if ($username == $post_username && $password == $post_password) {
	$_SESSION['id'] = $row_login['user_id'];
	echo 'nnn' ;
}
}

}

?>