<?php include '../master/header.php';

include('../connection/conn.php');
$sql="select f.food_drink_name , fd.quantity  , res.room_id
from reservation as res , food_drink_resrvation as  fd , food_drink as f
where res.reservation_id= fd.resrvation_id and f.food_drink_id=fd.food_drink_id";
$result=mysqli_query($con,$sql);
$sql2="SELECT b.bathes_name ,r.room_id
from reservation as r , bathes_resrvation as bathr , bathes as b
where r.reservation_id= bathr.resrvation_id and bathr.bathes_id=b.bathes_id";
$result2=mysqli_query($con,$sql2);
$sql3="SELECT s.extra_services_name ,r.room_id from reservation as r , extra_services_resrvation as exr , extra_services as s where r.reservation_id= exr.resrvation_id and exr.extra_services_id=s.extra_services_id";
$result3=mysqli_query($con,$sql3);
$sql4="SELECT m.maintenance_name ,r.room_id
from reservation as r , maintenance_resrvation as mr , maintenance as m
where
r.reservation_id= mr.resrvation_id and mr.maintenance_id=m.maintenance_id";
$result4=mysqli_query($con,$sql4);
?>
<div class="container">
 <div class="row">
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Food/Drink</div>

                <div class="panel-body">

        <table class="table table-bordered">
            <tr class="first-row">
                <th>Food/Drink Name</th>
                <th>Quantity</th>
                <th>Room ID</th>
                
            </tr>
            <tbody>
            <?php
   while ($row=mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td><?php echo $row['food_drink_name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['room_id']; ?></td>
                </tr>
           <?php     
            } ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
        <div class="col-md-2 ">
            <div class="panel panel-default">
                <div class="panel-heading">Bathes</div>

                <div class="panel-body">

        <table class="table table-bordered">
            <tr class="first-row">
                <th>Bathes Name</th>
                <th>Room ID</th>
                
            </tr>
            <tbody>
            <?php
   while ($row2=mysqli_fetch_assoc($result2)) {

                ?>
                <tr>
                    <td><?php echo $row2['bathes_name']; ?></td>
                    <td><?php echo $row2['room_id']; ?></td>
                </tr>
           <?php     
            } ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
                <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Extra Services</div>

                <div class="panel-body">

        <table class="table table-bordered">
            <tr class="first-row">
                <th>Extra Services</th>
                <th>Room ID</th>
                
            </tr>
            <tbody>
            <?php
   while ($row3=mysqli_fetch_assoc($result3)) {

                ?>
                <tr>
                    <td><?php echo $row3['extra_services_name']; ?></td>
                    <td><?php echo $row3['room_id']; ?></td>
                </tr>
           <?php     
            } ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>

                        <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">Maintenance</div>

                <div class="panel-body">

        <table class="table table-bordered">
            <tr class="first-row">
                <th>Maintenance</th>
                <th>Room ID</th>
                
            </tr>
            <tbody>
            <?php
   while ($row4=mysqli_fetch_assoc($result4)) {

                ?>
                <tr>
                    <td><?php echo $row4['maintenance_name']; ?></td>
                    <td><?php echo $row4['room_id']; ?></td>
                </tr>
           <?php     
            } ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>

    </div>
        </div>

<?php include '../master/footer.php';?>