<?php 
include 'function.php';
session_start();

$sql = "SELECT item_code, item_name, SUM(quantity) AS total_quantity, SUM(total_price) AS total_price FROM sales GROUP BY item_code, item_name";
$result = $conn->query($sql);
$sequence="SELECT * FROM sales";
$output=$conn->query($sequence);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome 6 CSS (Replace with the correct version when available) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Raleway Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap">


    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
        }
        .navigation{
                background-color: #FAFAF3;
            }
        .navbar a:hover {
            font-weight: bold;
            background: linear-gradient(to bottom, transparent 0%, transparent 80%, #83776c 80%, #83776c 100%, white);
        }
        .navbar {
            border-top: 1px solid #ccc;
            padding-left: 15px;
            margin: 0px;
            background-color: #FAFAF3; /* Add this line */
        }
        li{
            padding-right:15px; 
        }
        footer{
            background-color: #A19284;
            color:white;
        }
        footer a{
            color:#453321;
        }
        footer a:hover{
            color:black;
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
        }
        .headings{
            background-color: #A19284;
            color: #453321;
        }
        
        .show{
            background-color: #EAD7BB;
            border-radius: 5px;
            border-color: #113946;
            width: 100%;
            text-align: start;
        }
        .show:hover{
            background-color: #BCA37F;
            border-radius: 5px;
        }
        .col{
            border: 3px solid black;
        }
        a{
            text-decoration: none;
            color:black;
        }
        .container .col-6{
            font-size: 30px;
            border-bottom: 2px solid #cccccc	;
        }
        .container .col-6 a:hover{
            font-weight: bold;
            color:#E3963E;            
        }
        .card{
            background-color: #eedaca;
        }
    </style>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ADMIN HOME</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="bg-image" style="background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); background-size: cover;">
<div class="navigation">
<nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">BEAUTY PRODUCTS</p>
            </div>
                <br>
                <br>
    </div>
    <hr>
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
        <ul class="navbar-nav ml-auto ">
        <a href="profileadmin.php" class="nav-link">
        <li class="nav-item text-center" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="adminpage.php" class="nav-link">
         <li class="nav-item text-center active" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="sales.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
                Sales
         </li>
        </a>
        <a href="inventory.php" class="nav-link">
         <li class="nav-item text-center">
            <i class="fas fa-box"></i>
                Inventory
         </li>
        </a>
        <a href="adminorder.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-shopping-cart"></i>
                Order
         </li>
        </a>
        <a href="logout.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-sign-out-alt"></i>
                Log out
         </li>
        </a>
        </ul>
    </div>
</nav>

<h1 class="text-center">SALES</h1>
</div>


<div class="container">
<div class="row">
    <div class="col-6 text-center" style="border-bottom: 2px solid #FFAC1C; font-weight:bold;">
        <a href="" disable><span style="color: #E3963E;">Order History</span></a>
    </div>
    <div class="col-6 text-center">
        <a href="summary.php">Sales Summary</a>
    </div>
</div>
            
</div>
<br>
<div class="card card-body">
            <div class="row">
                <div class="col-2">
                    <h5><b>Customer</b></h5>
                </div>
                <div class="col-2">
                    <h5><b>Item Name</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Phone Number</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Ordered Date</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Date of Arrival</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Kha</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Quantity</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Total Price</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Shipping Fee</b></h5>
                </div>
                <div class="col-1">
                    <h5><b>Total Fee</b></h5>
                </div>
            </div>
            <div class="row">
            <?php 
            while ($row = $output->fetch_assoc()) { 
                ?>
                <div class="col-2">
                    <?php echo $row['customer_email']?>
                </div>
                <div class="col-2">
                    <?php echo $row['item_name']?>
                </div>
                <div class="col-1">
                   <?php echo $row['phoneNumber']?>
                </div>
                <div class="col-1">
                    <?php echo $row['ordered_date']?> 
                </div>
                <div class="col-1">
                    <?php echo $row['delivered_date']?>
                </div>
                <div class="col-1">
                    <?php echo $row['kha']?>
                </div>
                <div class="col-1">
                    <?php echo $row['quantity']?>
                </div>
                <div class="col-1">
                ₱  <?php echo $row['total_price']?>
                </div>
                <div class="col-1">
                ₱ <?php echo $row['shipping_fee']?>
                </div>
                <div class="col-1">
                ₱ <?php echo $row['total_fee']?>
                </div>
                <?PHP }?>
            </div>
</div>

<br>
    <footer class="container-fluid" style="background-color: #A19284; color: white;">
    
    <div class="row">
        <div class="col-6 text-left">
            <p class="text-lead" style="font-size: 15px; padding-top:20px;">2023©Khasabai | Privacy Policy</p>
        </div>
        <div class="col-md-6 text-end sm-3" style="padding-top:20px;">
            <a href="mailto:your-email@example.com" class="d-inline">
                <i class="far fa-envelope" style="margin-right: 10px;"></i>
            </a>
            <a href="https://www.facebook.com/kylesumabat13" target="_blank" class="d-inline">
                <i class="fab fa-facebook" style="margin-right: 10px;"></i>
            </a>
            <a href="https://instagram.com/kharyllesumabat?igshid=NzZlODBkYWE4Ng==" target="_blank" class="d-inline">
                <i class="fab fa-instagram" style="margin-right: 10px;"></i>
            </a>
        </div>
    </div>

</footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</body>
</html>