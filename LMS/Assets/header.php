<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="../Statics/Style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body onload="tp()" style="overflow-x: hidden;">
    <header>
        <div class="tophead" style="
						background-color: #343a40;
						color: white;
						display: flex;
						justify-content: space-between;
						width: 100%;
						height: 50px;
						align-items: center;
						position: fixed;
					">
            <div class="brandlogo">Laboratory Management System</div>
            <div class="menulines">
                <a href="#" class="mobile-icon" id="mob" onclick="myFunction()"
                    style="text-decoration: none; color: white"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </header>
    <div class="sidenav" id="mySidenav" style="background-color: #f8f9fa;">
        <ul>
            <li>
                <a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard</a>
            </li>
            <li class="parent">
                <a href="#">
                    <span onclick="tp2()" class="collapsed" id="dropdown"><i
                            class="fas fa-angle-down"></i>&nbsp;&nbsp;Transaction
                    </span></a>
                <ul class="children" style="display: none;" id="down">
                    <li>
                        <a href="#"><i class="far fa-eye"></i>&nbsp;&nbsp;Reservation</a>
                    </li>
                    <li class="">
                        <a href="#"><i class="fa fa-plus"></i>&nbsp;&nbsp;New</a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-clipboard"></i>&nbsp;&nbsp;Borrowed Item</a>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-check-circle"></i>&nbsp;&nbsp;Returned Item</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../View/Item.php"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Item</a>
            </li>
            <li>
                <a href="../View/Add_item.php"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Item</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Borrower</a>
            </li>
            <li>
                <a href="../View/Room.php"><i class="fa fa-window-maximize"></i>&nbsp;&nbsp;Room</a>
            </li>
            <li>
                <a href="../View/full_inventory.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Inventory</a>
            </li>
            <!-- <li>
                <a href="#"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;Graph</a>
            </li> -->
            <li>
                <a href="#"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;User</a>
            </li>
            <li>
                <a href="#"><i class="far fa-clock"></i>&nbsp;&nbsp;History</a>
            </li>
        </ul>
    </div>