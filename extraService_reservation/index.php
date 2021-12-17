<?php include '../master/header_reservation.php';
include('../connection/conn.php');
$sql="SELECT * FROM extra_services";
$result=mysqli_query($con,$sql);
$customer_id = $_SESSION['customer_id'];
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Extra services Reservation</div>

                <div class="panel-body">
<form method="POST" action="add_action.php" id="form">
    <input type="hidden" name="GETid" value="">
        <p>
                                    <p>
        <b>Choose extra services</b>
    </p>
 <p>
    <select class="form-control" name="extra_ID[]" multiple="multiple">
            <?php
   while ($row=mysqli_fetch_assoc($result))
    {
    echo '<option value='.$row['extra_services_id'].'>'.$row['extra_services_name'].'</option>';
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
