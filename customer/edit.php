<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['customer_id'];
$sql="SELECT * FROM customer where customer_id = $id";
$result=mysqli_query($con,$sql);
while ($row_get=mysqli_fetch_assoc($result)){
    $customer_id = $row_get['customer_id'];
    $name = $row_get['name'];
    $phone = $row_get['phonenumber'];
}
         ?>
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Customer</div>

                <div class="panel-body">
<form method="POST" action="edit_action.php" id="form" >
    <input type="hidden" name="GETid" value=<?php echo $customer_id; ?>>
        <p>
        <b>Add Customer Name</b>
    </p>
        <p>
        <input required type="text" name="name" placeholder="Name *" class="form-control" value=<?php echo $name ?> >
    </p> 
    <p>
        <b>Add Phone Number</b>
    </p>
        <p>
        <input required type="text"  name="phonenumber" placeholder="Phone Number *" class="form-control" value=<?php echo $phone; ?> >
    </p> 
    <p>
        <input type="submit" value="Update" class="btn btn-primary form-control">
    </p>

    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include '../master/footer.php'; ?>