<?php include '../master/header_reservation.php';
include('../connection/conn.php');

$customer_id = $_SESSION['customer_id'];
$sql="SELECT * FROM bathes";
$result=mysqli_query($con,$sql);
/*$sql_res="SELECT reservation.reservation_id, reservation.reservation_date,reservation.customer_id , customer.name FROM reservation LEFT JOIN customer ON reservation.customer_id=customer.customer_id WHERE customer.customer_id = $customer_id  ORDER By reservation.reservation_id ASC ";
$result_res=mysqli_query($con,$sql_res);*/
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Bathes Reservation</div>

                <div class="panel-body">
<form method="POST" action="add_action.php" id="form">
    <input type="hidden" name="GETid" value="">
        <p>
                                    <p>
        <b>Choose bathes</b>
    </p>
 <p>
    <select class="form-control" name="bathe_ID[]" multiple="multiple">
            <?php
   while ($row=mysqli_fetch_assoc($result))
    {
    echo '<option value='.$row['bathes_id'].'>'.$row['bathes_name'].'</option>';
    }
?>
          </select></p>
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
