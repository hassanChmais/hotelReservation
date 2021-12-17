<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['bathes_id'];
$sql="SELECT * FROM bathes where bathes_id = $id";
$result=mysqli_query($con,$sql);
while ($row_get=mysqli_fetch_assoc($result)){
    $bathes_id = $row_get['bathes_id'];
    $name = $row_get['bathes_name'];
}
         ?>
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Bathes</div>

                <div class="panel-body">
<form method="POST" action="edit_action.php" id="form">
    <input type="hidden" name="GETid" value=<?php echo $bathes_id ;?>>
        <p>
        <b>Update Bathes Name</b>
    </p>
        <p>
        <input type="text" required name="bathes_name" placeholder="Name *" class="form-control" value=<?php echo $name; ?> >
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