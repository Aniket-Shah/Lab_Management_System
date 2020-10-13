<?php

include'../Assets/header.php';

?>

<?php 

include'../Assets/connect.php';
if(isset ($_POST['submit'])){
 
   $model = $_POST['model'];
   $category = $_POST['category'];
   $brand = $_POST['brand'];
   $quantity = $_POST['quantity'];
   $quantity_left = $_POST['quantity_left'];
   $status = $_POST['status'];
   $description = $_POST['description'];
   $type = $_POST['type'];
   $room_no = $_POST['room_no'];
   $price_per_item = $_POST['price_per_item'];
   $serial_ID = $_POST['serial_ID'];
   $files = $_FILES['myfile'];
 
   $filename = $files['name'];
   $fileerror = $files['error'];
   $filetmp = $files['tmp_name'];
   $fileext = explode('.',$filename);
   $filecheck = strtolower(end($fileext));
 
   $fileextstored = array('png','jpg','jpeg');

   if(in_array($filecheck,$fileextstored)){
 
     $destinationfile = '../Upload/'.$filename;
     move_uploaded_file($filetmp,$destinationfile);
 
     $q = "INSERT INTO `list_of_item`(`image`, `model`, `category`, `brand`, `quantity`, `quantity_left`, `status`, `description`, `type`, `room_no`, `price_per_item`, `serial_ID`) 
     VALUES ('$destinationfile','$model','$category','$brand','$quantity','$quantity_left','$status','$description','$type','$room_no','$price_per_item','$serial_ID')";
         
     $query = mysqli_query($con,$q);
   }
}

?>
<div class="container" id="form" style="padding-left:15% ; padding-top:5%;">
    <form method="POST" enctype="multipart/form-data" class="mainform">
        <div class="form-group">
            <label for="model"><b>Model:</b></label>
            <input type="text" class="form-control" placeholder="Enter Model" name="model" required>
        </div>
        <div class="form-group">
            <label for="category"><b>Category:</b></label>
            <input type="text" class="form-control" placeholder="Enter Category" name="category" required>
        </div>
        <div class="form-group">
            <label for="brand"><b>Brand:</b></label>
            <input type="text" class="form-control" placeholder="Enter Brand" name="brand" required>
        </div>
        <div class="form-group">
            <label for="quantity"><b>Quantity:</b></label>
            <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="quantity_left"><b>Quantity Left:</b></label>
            <input type="text" class="form-control" placeholder="Enter Quantity Left" name="quantity_left" required>
        </div>
        <div class="form-group">
            <label for="serial_ID"><b>Serial ID/Device ID:</b></label>
            <input type="text" class="form-control" placeholder="Enter Serial ID/Device ID" name="serial_ID" required>
        </div>
        <div class="form-group">
            <label for="description"><b>Description:</b></label>
            <input type="text" class="form-control" placeholder="Enter Description" name="description" required>
        </div>
        <div class="form-group">
            <label for="type"><b>Type:</b></label>
            <input type="text" class="form-control" placeholder="Enter Type" name="type" required>
        </div>
        <div class="form-group">
            <label for="room_no"><b>Room Number:</b></label>
            <input type="text" class="form-control" placeholder="Enter Room Number" name="room_no" required>
        </div>
        <div class="form-group">
            <label for="price_per_item"><b>Price Per Item:</b></label>
            <input type="text" class="form-control" placeholder="Enter Price Per Item" name="price_per_item" required>
        </div>
        <div class="form-group">
            <label for="status"><b>Status:</b></label>
            <select name="status">
                <option selected hidden value="">Select Status</option>
                <option value="new">NEW</option>
                <option value="old">OLD</option>
                <option value="lost">LOST</option>
            </select>
        </div>
        <label for="Image"><b>Image:</b></label>
        <input type="file" name="myfile" id="myfile">
        <br>
        <input type="submit" class="btn btn-primary" name="submit">
    </form>
</div>

<?php

include'../Assets/footer.php';

?>