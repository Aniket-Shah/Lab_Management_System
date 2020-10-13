<?php
include'../Assets/header.php';

?>
<div class="container" id="past" style="padding-left: 10%; padding-top: 5%">
    <div class="container" id="pills">
        <ul class="nav nav-pills">
            <li><a href="full_inventory.php">All</a></li>
            <li><a href="New_item.php">New</a></li>
            <li><a href="Old_item.php">Old</a></li>
            <li class="active"><a href="#">Lost</a></li>
        </ul>
    </div>
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
                            <td><b>Price Per Item</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

include'../Assets/connect.php';
$displayquery = "SELECT * FROM list_of_item WHERE status = 'lost'";
$querydisplay = mysqli_query($con,$displayquery);
			
while( $result = mysqli_fetch_array($querydisplay)){
?>
                        <tr>
                            <td><?php echo $result['model']; ?></td>
                            <td><?php echo $result['brand']; ?></td>
                            <td><?php echo $result['category']; ?></td>
                            <td><?php echo $result['quantity']; ?></td>
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