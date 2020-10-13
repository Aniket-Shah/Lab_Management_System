<?php

include'../Assets/connect.php';

$room_no = $_GET['room_no'];

$q = "DELETE from info_room WHERE room_no = $room_no";

mysqli_query($con,$q);

header('location: Room.php');

?>