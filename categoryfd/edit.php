<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['category_id'];
$sql="SELECT * FROM category_food_drink where category_food_drink_id = $id";
$result=mysqli_query($con,$sql);
while ($row_get=mysqli_fetch_assoc($result)){
    $category_id = $row_get['category_food_drink_id'];
    $name = $row_get['category_food_drink_name'];
}
         ?>
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Category Food Drink</div>

                <div class="panel-body">
<form method="POST" action="edit_action.php" id="form">
    <input type="hidden" name="GETid" value=<?php echo $category_id ; ?>>
        <p>
        <b>Add Category Food Drink</b>
    </p>
        <p>
        <input type="text" required name="category_food_drink_name" placeholder="Name *" class="form-control" value= <?php echo $name ; ?> >
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