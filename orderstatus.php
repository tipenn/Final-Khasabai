<!-- <?php
include 'function.php';
session_start();
$email=$_SESSION['email'];
$sql = "SELECT * FROM order_customer WHERE email='$email' AND status != 'Cart'ORDER BY  id DESC";
$result = $conn->query($sql);

?>
    -->
<!doctype html>
<html lang="en">
  <head>
    <title>forgot</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
</head>


    <style>
       
        .bar{
            text-align: centers;
            padding: 0px;
            margin-top: 0;

        }
        .bar li{	
            padding-left: 1.5em;
            font-size: 15px;
            font-family: Roboto;
        
        }

    /* center container */
        
        
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;

        }
        
        .navbar {
            padding-top: 0em;
            padding-left: 2em;
            padding-right: 2em; 
        
    /* hover */

        }
        a {
			text-decoration: none;
			color: #453321;
        }
        a:hover{
			color: #5B4E2C;
			background-color: #83776c;
	    }
    
        footer{
            background-color: #A19284;
            color:white;
            background-color: #A19284;
            color: white;
            position: fixed;
            bottom: 0%;
            width: 100%;
            text-align: left;
            z-index: 1000;
           
        }
        footer a{
            color:#453321;
        }
        footer a:hover{
            color:black;
        }

    /* second nav bar */
       
        .main {
            width: 100%;
            margin: 0;
            
        }

    /*input with search icon */

        .search .form-control {
            padding: 0;
            text-align: center;
            background-color: transparent;
            border-color: #453321;
            border-right: none;
            border-radius: 10px;
            margin-left: 3.8em;
            margin-top: 0;
           
        }

        .search .form-control-feedback {
            position: fixed;
            z-index: 2;
            width: 1px;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            
        }
        h1 {
            text-align: center;
            font-family: 'Prata', serif; /* Set font to Prata */
            color: #453321;
            font-size: 60px;
        }

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
        .row{
        background-color: pink;     
        margin: 5px;  
        }
       
        
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khasabai</title>
</head>
<body class="bg-image" style="background-image: url('assets/bgcustomer.jpg'); background-size: cover;">
  
    <!-- navbar -->
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
        <a href="customerprofile.php" class="nav-link">
        <li class="nav-item text-center active" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="customerhome.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="orderstatus.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
                Orders
         </li>
        </a>
        <a href="cart.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-shopping-cart"></i>
                Cart
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
 <h1> My Orders </h1>
 <div class="container">
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="row">
                <!-- First Column -->
                <?php echo $row['id']?>
                <div class="col"><b>Delivered by:</b> <?php echo $row['kha'] ?> <br><b>Ordered Date:</b> <?php echo $row['date'] ?><br><b>Date of Arrival: </b><?php echo $row['date_arrival'] ?><br> <b><a href="progressbar.php?id=<?php echo $row['id']; ?>">Status: <?php echo $row['status']?></b></a></div>
                <div class="col"><b>Quantity: </b> <?php echo $row['quantity'] ?><br><b> Name of product: </b><?php echo $row['item_name'] ?></div>
                <div class="col"><b> Sub Total:</b> ₱<?php echo $row['total_price'] ?><br><b>Shipping Fee:</b> ₱<?php echo $row['shipping_fee'] ?><br> <b>Total:</b> ₱<?php echo $row['total_fee'] ?></div>
                <img src="assets/<?php echo $row['item_image'];?>">                
            </div>
        <?php 
        }
    }
    $conn->close();
    ?>
</div>
            
 </div>
       
<!-- footer -->
<footer class="container-fluid">
    <div class="row">
        <div class="col-6 text-left">
            <p class="text-lead" style="font-size: 15px; padding-top:20px;"> ©  2023 Khasabai | Privacy Policy</p>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
 </body>
</html>