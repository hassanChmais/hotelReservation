<?php include '../master/header.php';
include('../connection/conn.php');
$id=$_GET['food_drink_id'];
$sql="SELECT * FROM food_drink where food_drink_id = $id";
$result=mysqli_query($con,$sql);
while ($row_get=mysqli_fetch_assoc($result)){
    $food_drink_id = $row_get['food_drink_id'];
    $name = $row_get['food_drink_name'];
    $descrption=$row_get['food_drink_descrption'];
    $price=$row_get['price'];
    $cat_id=$row_get['category_food_drink_id'];
    $pic=$row_get['pic_url'];
}
$sql_cat="SELECT * FROM category_food_drink";
$result_cat=mysqli_query($con,$sql_cat);
         ?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Update Food/Drink</div>

                <div class="panel-body">
<form method="POST" enctype="multipart/form-data" action="edit_action.php" id="form" >
    <input type="hidden" name="GETid" value="<?php echo $food_drink_id; ?>">
        <p>
        <input type="text" name="food_drink_name" placeholder="Name *" class="form-control" value="<?php echo $name ; ?>" required>
    </p>
            <p>
        <input type="text" name="food_drink_descrption" placeholder="Name *" class="form-control" value="<?php echo $descrption ; ?>" required>
    </p>
    
                    <p>
        <input type="text" name="price" placeholder="Price *" class="form-control" value="<?php echo $price ; ?>" required>
    </p>
        <p>
                    <p>
        <b>Choose Categorie Food Drink</b>
    </p>
 
             <?php
                                    echo "<select class=\"form-control\" name=\"catID\">";
                                    while ($row_cat=mysqli_fetch_assoc($result_cat)){
             echo "<option value=\"".$row_cat['category_food_drink_id']."\"";
             if($row_cat['category_food_drink_id'] == $cat_id ) {
                echo "selected";
             }

              echo ">" .$row_cat['category_food_drink_name']. "</option>";
                                    }
                                    echo "</select>";
                                ?> 
         
    
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
        <input type="submit" name="submit_add_edit" value="Update" class="btn btn-primary form-control">
    </p>
        <div class="panel-body" style="height:150px ; background: url('../Images/<?php echo $pic;?>'); background-size: 100px; background-position: center center;background-repeat: no-repeat;">
    </div>

    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../master/footer.php'; ?>