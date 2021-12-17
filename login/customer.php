<?php 
include('../connection/conn.php');
   ob_start();
   session_start();
?>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
   <body>
      <div class="row">
    <div class="col-md-4 "></div>
    <div class="col-md-4 ">
      <h2>Enter RoomID and CustomerID</h2> </div>
      <div class = "container form-signin">
                  <?php
                  $msg = '';
            if (isset($_POST['save'])) {
          
      $room_id=$_POST['room_id'];
      $customer_id=$_POST['customer_id'];
$sql = " select * from room as r CROSS JOIN customer as c where r.room_id = $room_id and c.customer_id = $customer_id ";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$_SESSION['room_id']=$row['room_id'];
$_SESSION['customer_id']=$row['customer_id'];
if($_SESSION['room_id'] != Null &&  $_SESSION['customer_id'] !=Null ){
  header('location:../bathes_reservation/index.php');
}
 

            }

          
      ?>
      </div> <!-- /container -->
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "room_id" placeholder = "Room ID" 
               required autofocus autocomplete="off"></br>
            <input type = "text" class = "form-control"
               name = "customer_id" placeholder = "Customer ID" required autocomplete="off"></br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "save">GO to Services Reservation</button>
         </form>
			
        
         
      </div> 
   </body>
</html>