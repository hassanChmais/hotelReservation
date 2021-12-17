<?php include '../master/header_reservation.php';
include('../connection/conn.php');
$customer_id = $_SESSION['customer_id'];
$sql="SELECT * FROM food_drink";

$result=mysqli_query($con,$sql);
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Food/Drink Reservation</div>

                <div class="panel-body">
<form method="POST" action="add_action.php" id="form">
    <input type="hidden" name="GETid" value=""> 
        <p>
                                    <p>
        <b>Choose food_drink</b>
    </p>
 <p>
    <select class="form-control" name="fd_ID[]" multiple="multiple">
            <?php
   while ($row=mysqli_fetch_assoc($result))
    {
    echo '<option value='.$row['food_drink_id'].'>'.$row['food_drink_name'].'</option>';
    }
?>
          </select></p>
    </p> 
            <p>
        <input type="text" name="qntite" placeholder="Quantite *" class="form-control" value="" required>
    </p> 
    <p>
        <input type="submit" name="submit_add_edit" value="Save" class="btn btn-primary form-control">
    </p>

    </form>
                </div>
            </div>
        </div>
    </div>
<hr/>

</div>
<?php include '../master/footer.php';?>
