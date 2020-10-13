<?php

include'../Assets/header.php';

?>
<?php 

include'../Assets/connect.php';
if(isset ($_POST['Submit'])){
    $room_name = $_POST['room_name'];
    $room_no = $_POST['room_no'];
    $q = "INSERT INTO `info_room`( `room_name`, `room_no`) VALUES ('$room_name','$room_no')";
    $query = mysqli_query($con,$q); 
}
?>
<style>
@media only screen and (max-width: 768px) {
    #ras {
        /*Full_inventory.php */
        padding-top: 20% !important;
    }
}
</style>
<div class="container" id="ras" style="padding-left:15%; padding-top:5%">
    <div class="container" style="padding-left:15% ; padding-top:5%;">
        <div class=" col-lg-9 col-md-12 col-sm-12 col-7">
            <div class="table-reponsive">
                <table id="example" class="table nowrap" style="width: 75%;">
                    <thead>
                        <tr>

                            <td><b>Room Name</b></td>
                            <td><b>Room Number</b></td>
                            <td><b>View Room</b></td>
                            <td><b>Delete Room</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

$displayquery = " SELECT * FROM info_room ";
$querydisplay = mysqli_query($con,$displayquery);
			
while( $result = mysqli_fetch_array($querydisplay)){

?>
                        <tr>
                            <td><?php echo $result['room_name']; ?></td>
                            <td><?php echo $result['room_no']; ?></td>
                            <td>
                                <button type="button" class="btn btn-info"><a
                                        href="View.php?room_no=<?php echo $result['room_no']; ?>"
                                        style="text-decoration: none;color: white;">View</a></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" name="delete"><a
                                        href="Delete.php?room_no=<?php echo $result['room_no']; ?>"
                                        style="text-decoration: none;color: white;">Delete</a></button>
                            </td>
                        </tr><?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container" id="modal_form" style="padding-left: 10%; padding-top:5%;">
        <button type="button" class="btn btn-primary btn-lg btn-md btn-sm btn" data-toggle="modal"
            data-target="#myModal">ADD ROOM</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Room</h4>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="Room Name"><b>Room Name:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Room Name" name="room_name"
                                    required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="Room Number"><b>Room Number:</b></label>
                                <input type="number" class="form-control" placeholder="Enter Room Number" name="room_no"
                                    required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="Submit"
                                style="float:right; padding-right:5%;">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php

include'../Assets/footer.php';

?>