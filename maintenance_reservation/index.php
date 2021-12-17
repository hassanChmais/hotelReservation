<?php include '../master/header_reservation.php';
include('../connection/conn.php');
$customer_id = $_SESSION['customer_id'];
$sql="SELECT * FROM maintenance";
$result=mysqli_query($con,$sql);

?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Maintenance Reservation</div>

                <div class="panel-body">
<form method="POST" action="add_action.php" id="form">
    <input type="hidden" name="GETid" value="">
        <p>
                                    <p>
        <b>Choose Maintenances</b>
    </p>
 <p>
    <select class="form-control" name="maintenance_ID[]" multiple="multiple">
            <?php
   while ($row=mysqli_fetch_assoc($result))
    {
    echo '<option value='.$row['maintenance_id'].'>'.$row['maintenance_name'].'</option>';
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
