<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['room_id'];
$sql="SELECT * FROM room where room_id = $id";
$result=mysqli_query($con,$sql);

?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Room</div>

                <div class="panel-body">
<form method="POST" action="edit_action.php" id="form">

    <input type="hidden" name="GETid" value=<?php 
while ($row_get=mysqli_fetch_assoc($result)){
    $roomID = $row_get['room_id'];
  echo $row_get['room_id'];
}
         ?> >
        <p>
        <b>Add Room ID</b>
    </p>
        <p>
        <input required type="text" name="room_id" placeholder="Room id *" class="form-control" value=<?php 
echo $roomID;
         ?>   >
    </p> 
    <p>
        <input type="submit" name="submit_add_edit" value="Update" class="btn btn-primary form-control">
    </p>

    </form>
                </div>
            </div>
        </div>
    </div>
<hr/>
</div>
<?php include '../master/footer.php'; ?>