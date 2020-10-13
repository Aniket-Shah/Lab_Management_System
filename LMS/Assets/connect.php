<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "lab_management_system";

$con = mysqli_connect($server ,$user ,$password ,$db);

if($con){
    ?>
        <script>
            console.log("Connection Successful");
        </script>
    <?php
}else{
    ?>
        <script>
            console.log("No Connection");
        </script>
    <?php
}

?>