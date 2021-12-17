<?php 
include '../master/header.php';
include('../connection/conn.php');
$sql_cat="SELECT * FROM category_food_drink ORDER BY category_food_drink_id DESC";
$result_cat=mysqli_query($con,$sql_cat);
$sql="SELECT food_drink.food_drink_id, food_drink.food_drink_name ,food_drink.food_drink_descrption,food_drink.price, food_drink.pic_url , category_food_drink.category_food_drink_name FROM food_drink LEFT JOIN category_food_drink ON food_drink.category_food_drink_id=category_food_drink.category_food_drink_id";
$result=mysqli_query($con,$sql);
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Food Drink</div>

                <div class="panel-body">
<form method="POST" enctype="multipart/form-data" action="add_action.php" id="form" >
        <p>
        <input type="text" name="food_drink_name" placeholder="Name *" class="form-control" value="" required>
    </p>
            <p>
        <input type="text" name="food_drink_descrption" placeholder="Description *" class="form-control" value="" required>
    </p>
    <p>           
        <input type="text" name="price" placeholder="Price *" class="form-control" value="" required>
    </p>
    <p>
                    <p>
        <b>Choose Categorie Food Drink</b>
    </p>
 
    <select class="form-control" name="catID">
            <?php
   while ($row_cat=mysqli_fetch_assoc($result_cat))
    {
    echo '<option value='.$row_cat['category_food_drink_id'].'>'.$row_cat['category_food_drink_name'].'</option>';
    }
?>
          </select>
         
    
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
                <th>Food/Drink ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Category</th>
                <th colspan="2">Action</th>
            </tr>
            <tbody>
            <?php
   while ($row=mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td><?php echo $row['food_drink_id']; ?></td>
                    <td><?php echo $row['food_drink_name']; ?></td>
                    <td><?php echo $row['food_drink_descrption']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>        <div class="panel-body" style="height:150px ; background: url('../Images/<?php echo $row['pic_url'];?>'); background-size: 200px; background-position: center center;background-repeat: no-repeat;">
    </div></td>
                    <td><?php echo $row['category_food_drink_name']; ?></td>
                    
<td>
                        <a class="btn btn-primary form-control" href=edit.php?<?php echo'food_drink_id='.$row['food_drink_id'].''?> >Edit</a>
                    </td>
                                        <td>
                        <a class="btn btn-danger form-control text-light" href=delete_action.php?<?php echo'food_drink_id='.$row['food_drink_id'].''?> >Delete</a>
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