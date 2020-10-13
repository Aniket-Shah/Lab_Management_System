<?php

include'../Assets/header.php';

?>
<?php

include'../Assets/connect.php';

$room_no = $_GET['room_no'];

$q = "SELECT * FROM info_room WHERE room_no = $room_no";

mysqli_query($con,$q);

?>
<style>
@media only screen and (max-width: 768px) {
    #ras {
        /*Full_inventory.php */
        padding-top: 20% !important;
    }
}
</style>
<div class="container" id="ras" style="padding-left:15% ; padding-top:5%;">
    <div class=" col-lg-9 col-md-12 col-sm-12 col-7">
        <div class="table-reponsive">
            <table id="example" class="table nowrap" style="width: 75%;">
                <thead>
                    <tr>
                        <td><b>Model</b></td>
                        <td><b>Brand</b></td>
                        <td><b>Category</b></td>
                        <td><b>Quantity</b></td>
                        <td><b>Status</b></td>
                        <td><b>Price Per Item</b></td>
                    </tr>
                </thead>
                <tbody>
                <?php 
$displayquery = " SELECT * FROM list_of_item WHERE room_no = $room_no";
$querydisplay = mysqli_query($con,$displayquery);
			
while( $result = mysqli_fetch_array($querydisplay)){
?>                
                    <tr>
                        <td><?php echo $result['model']; ?></td>
                        <td><?php echo $result['brand']; ?></td>
                        <td><?php echo $result['category']; ?></td>
                        <td><?php echo $result['quantity']; ?></td>
                        <td><?php echo $result['status']; ?></td>
                        <td><?php echo $result['price_per_item']; ?></td>
                    </tr><?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php

include'../Assets/footer.php';

?>