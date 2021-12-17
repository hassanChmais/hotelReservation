<?php include '../master/header.php';
include('../connection/conn.php');
$sql="SELECT * FROM extra_services";
$result=mysqli_query($con,$sql);
session_start();
if ($_SESSION['Adminid'] == ""){
  header('location:../login/adminLogin.php');
}
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Extra Service</div>

                <div class="panel-body">
<form method="POST" enctype="multipart/form-data" action="add_action.php" >
        <p>
        <input type="text" name="extra_services_name" placeholder="Name *" class="form-control" value="" required>
    </p>
    <p>
                    <p>
        <input type="text" name="extra_services_price" placeholder="Price *" class="form-control" value="" required>
    </p>
    </p>
    <p>
        <b>
            Choose a photo
        </b>
    </p>
    <p>
        <input type="file" name="image" class="form-control" required>
    </p>
    <p>
        <input type="text" name="description" placeholder="Description *" class="form-control" value="" required>
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
 <div class="row">
        <div class="col-md-12 ">
        <table class="table table-bordered">
            <tr class="first-row">
                <th>Extra service ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
            <tbody>
            <?php
   while ($row=mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td><?php echo $row['extra_services_id']; ?></td>
                    <td><?php echo $row['extra_services_name']; ?></td>
                    <td><?php echo $row['extra_services_price']; ?></td>
                    <td>        <div class="panel-body" style="height:150px ; background: url('../Images/<?php echo $row['pic_url'];?>'); background-size: 200px; background-position: center center;background-repeat: no-repeat;">
    </div></td>
                    <td><?php echo $row['descrption']; ?></td>
                    
<td>
                        <a class="btn btn-primary form-control" href=edit.php?<?php echo'extra_services_id='.$row['extra_services_id'].''?> >Edit</a>
                    </td>
                                        <td>
                        <a class="btn btn-danger form-control text-light" href=delete_action.php?<?php echo'extra_services_id='.$row['extra_services_id'].''?> >Delete</a>
                    </td>
                </tr>
                <?php 
            } ?>
            </tbody>
        </table>
    </div>

            </div>


</div>
<?php include '../master/footer.php';?>