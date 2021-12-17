<?php include '../master/header.php';
include('../connection/conn.php');
$sql="SELECT * FROM category_food_drink";
$result=mysqli_query($con,$sql);
?>
<div class="container">
 <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Category Food Drink</div>

                <div class="panel-body">
<form method="POST" action="add_action.php" id="form" >
    <input type="hidden" name="GETid" value="">
        <p>
        <b>Add Category Food Drink Name</b>
    </p>
        <p>
        <input type="text" name="category_food_drink_name" placeholder="Name *" class="form-control" value="" required>
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
    <div class="col-md-4 "></div>
    <div class="col-md-4 ">
                <table class="table table-bordered">
            <tr class="first-row">
                <th>Category Food/Drink Name</th>
                <th colspan="2">Action</th>

                
            </tr>
            <tbody>
            <?php
   while ($row=mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td><?php echo $row['category_food_drink_name']; ?></td>
                                        <td>
                        <a class="btn btn-primary form-control" href=edit.php?<?php echo'category_id='.$row['category_food_drink_id'].''?> >Edit</a>
                    </td>
                                        <td>
                        <a class="btn btn-danger form-control text-light" href=delete_action.php?<?php echo'category_id='.$row['category_food_drink_id'].''?> >Delete</a>
                    </td>
                </tr>
           <?php     
            } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4 "></div>
</div>
        </div>


<?php include '../master/footer.php';?>