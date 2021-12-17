<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['extra_services_id'];
$sql="SELECT * FROM extra_services where extra_services_id = $id";
$result=mysqli_query($con,$sql);
while ($row_get=mysqli_fetch_assoc($result)){
    $extra_services_id = $row_get['extra_services_id'];
    $name = $row_get['extra_services_name'];
    $price=$row_get['extra_services_price'];
    $pic=$row_get['pic_url'];
    $descrption=$row_get['descrption'];
}
         ?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Update Extra Services</div>

                <div class="panel-body">
<form method="POST" enctype="multipart/form-data" action="edit_action.php" id="form">
    <input type="hidden" name="GETid" value=<?php echo $extra_services_id; ?>>
        <p>
        <input type="text" required name="extra_services_name" placeholder="Name *" class="form-control" value=<?php echo $name; ?> >
    </p>
    <p>
                    <p>
        <input type="text" required name="extra_services_price" placeholder="Price *" class="form-control" value=<?php echo $price ; ?> >
    </p>
    </p>
    <p>
        <b>
            Choose a photo
        </b>
    </p>
    <p>
        <input type="file" name="image" class="form-control">
    </p>
    <p>
        <input type="text" required name="description" placeholder="Description *" class="form-control" value=<?php echo  $descrption ; ?> >
    </p>
    <p>
        <input type="submit" name="submit_add_edit" value="Update" class="btn btn-primary form-control">
    </p>
        <div class="panel-body" style="height:150px ; background: url('../Images/<?php echo $pic ;?>'); background-size: 100px; background-position: center center;background-repeat: no-repeat;">
    </div>

    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../master/footer.php'; ?>