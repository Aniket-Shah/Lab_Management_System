
<?php
include'../Assets/header.php';

?>
<div class="container" id="past" style="padding-left: 10%; padding-top: 5%">
    <div class="container" id="pills">
        <ul class="nav nav-pills">
            <li class="active"><a href="#">All</a></li>
            <li><a href="New_item.php">New</a></li>
            <li><a href="Old_item.php">Old</a></li>
            <li><a href="Lost_item.php">Lost</a></li>
        </ul>
    </div>
    <br />
    <div class="container" id="ras" style="padding-left:15% ; padding-top:5%;">
        <div class=" col-lg-9 col-md-12 col-sm-12 col-7">
            <div class="table-reponsive">
                <table id="example" class="table nowrap" style="width: 75%;">
                    <thead>
                        <tr>
                            <td><b>Image</b></td>
                            <td><b>Model</b></td>
                            <td><b>Brand</b></td>
                            <td><b>Category</b></td>
                            <td><b>Quantity</b></td>
                            <td><b>Quantity Left</b></td>
                            <td><b>Status</b></td>
                            <td><b>Type</b></td>
                            <td><b>Serial ID/Device ID</b></td>
                            <td><b>Description</b></td>
                            <td><b>Room Number</b></td>
                            <td><b>Price Per Item</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

include'../Assets/connect.php';
$displayquery = " SELECT * FROM list_of_item ";
$querydisplay = mysqli_query($con,$displayquery);
			
while( $result = mysqli_fetch_array($querydisplay)){
?>
                        <tr>
                            <td><img src="<?php echo $result['image']; ?>" height="100px" width="100px"> </td>
                            <td><?php echo $result['model']; ?></td>
                            <td><?php echo $result['brand']; ?></td>
                            <td><?php echo $result['category']; ?></td>
                            <td><?php echo $result['quantity']; ?></td>
                            <td><?php echo $result['quantity_left']; ?></td>
                            <td><?php echo $result['status']; ?></td>
                            <td><?php echo $result['type']; ?></td>
                            <td><?php echo $result['serial_ID']; ?></td>
                            <td><?php echo $result['description']; ?></td>
                            <td><?php echo $result['room_no']; ?></td>
                            <td><?php echo $result['price_per_item']; ?></td>
                        </tr><?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php

include'../Assets/footer.php';

?>