<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['maintenance_id'];
$sql="SELECT * FROM maintenance where maintenance_id = $id";
$result=mysqli_query($con,$sql);
while ($row_get=mysqli_fetch_assoc($result)){
    $maintenance_id = $row_get['maintenance_id'];
    $name = $row_get['maintenance_name'];
}
         ?>
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Maintenance</div>

                <div class="panel-body">
<form method="POST" action="edit_action.php" id="form">
    <input type="hidden" name="GETid" value=<?php echo $maintenance_id; ?> >
        <p>
        <b>Add Maintenance Name</b>
    </p>
        <p>
        <input type="text" required name="maintenance_name" placeholder="Name *" class="form-control" value=<?php echo $name ;?> >
    </p> 
    <p>
        <input type="submit" name="submit_add_edit" value="Update" class="btn btn-primary form-control">
    </p>

    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../master/footer.php'; ?>