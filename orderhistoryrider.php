<!-- <?php
include 'function.php';
session_start();
$kha=$_SESSION['email'];
$sql = "SELECT * FROM order_customer WHERE kha='$kha' ORDER BY date_arrival ASC, id DESC";
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
       
       body {
            font-family: 'Roboto', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
        }
            .navbar a {
                transition: color 0.5s ease; /* Initial transition property for non-hover state */
            }

            .navbar a:hover {
                font-weight: bold;
                transition: color 0.5s ease 1s; /* Transition with a 1-second delay */
                background: linear-gradient(to bottom, transparent 0%, transparent 90%, #83776c 90%, #83776c 100%, white);
            }

            .navbar {
                border-top: 1px solid #ccc;
                padding-left: 12px;
                margin: 0px;         
                background-color: rgba(250, 250, 243, 0.4); /* Light yellow with 90% opacity */
        }
        .bar{
            text-align: center;
            padding: 2px;
            margin-top: 2em;
            margin-left: 20em;
            margin-right: 0px; 
            
        }
        .bar li{	
            margin-left: 3px;
            font-size: 17px;
            font-family: Roboto;
            color: #5B4E2C;
        }
        .search .form-control {
        text-align: center;
        background-color: transparent;
        border-color: #453321;
        border-radius: 10px;
        width: 10px;
        }
        .search{
            width: 240px;
           margin-left: 11em;
        
        }
        .search .form-control {
            text-align: center;
            background-color: transparent;
            border-color: #453321;
            border-radius: 10px;
            width: 10px;
        }
        
        .container{
            background-color: transparent;
            width: 400px; 
        }
        .back{
            width: 40px;
            height: 40px;
            background-color: #C9BBAE;
            font-size: 30px;
            border-color: #AB7B5B;
            border-radius: 20em;
            margin-top: 15px;
            color: white;
        }
        .back:hover{
            background-color: #A19284;
            color: black;
        }
        table{
            background-color:#F6F2EF; 
            width: 400px; 
            margin-right: 35em;
            box-shadow: -2px -2px 2px grey;
        }
        tr{
            height:50px;  
            text-align:left; 
            color:black;
        }
        td{
            padding-left:10px;
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
            padding-top: 0;
        }
        a {
			text-decoration: none;
			color: #453321;
        }
        a:hover{
			color: #5B4E2C;
        }
        footer{
            background-color: #A19284;
            color: white;
            bottom: 0;
            left:0;
            width:100%;    
            position: fixed;
        }
        footer a{
            color:#453321;
        }
        footer a:hover{
            color: black;
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
        }
        .box{
        background-color: #F1E6DF;     
        margin: 5px;  
        border: 3px solid #5B4E2C; /* Add border style */
        padding: 10px;
        margin-bottom: 5em;
        }
        .prata-text {
        font-family: 'Prata', serif;
        color: black; /* Set the color to match your design */
        }
      
    </style>

<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin page</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="bg-image" style="background-image: url('https://i.pinimg.com/564x/12/be/79/12be7911a1d8941448cc1fc5d8935167.jpg'); background-size: cover;">

<div class="navigation">
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70">    </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway;font-weight: bold; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway;font-weight: bold;  text-align: left;">BEAUTY PRODUCTS</p>
            </div>
                <br>
                <br>
                
    </div>
    
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>
        
    <div class="collapse navbar-collapse justify-content" id="navbarNav" >
    <div class="bar">
        <ul class="navbar-nav ">
        <a href="profilerider.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Profile
        </li>
        </a>
        <a href="rider.php" class="nav-link">
         <li class="nav-item text-center active" >
       
                Home
         </li>
        </a>
        <a href="orderhistoryrider.php" class="nav-link">
         <li class="nav-item text-center" >
            
                Order
         </li>
        </a>
        <a href="logout.php" class="nav-link">
         <li class="nav-item text-center" >
            
                Log out
        </li>
        </a>
   
<div class="search">
        <form method="GET" action="" class="search">
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholder="Search..."
                    style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit"
                        style="background-color: transparent; border-color: #453321; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-top-left-radius: 0; border-bottom-left-radius: 0;">
                        <span class="btn-label"><i class="fas fa-search" style="color: #5a4939;"></i></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
    </nav>
        </div>

 <div class="container-fluid">
<div class="box">
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="row">
                <!-- First Column -->
                <!-- <?php echo $row['id']?> -->
                <div class="col prata-text" style="margin-left: 5em;"><b>Customer: </b><?php echo $row['email'] ?> <br> <b>Phone Number: </b><?php echo $row['phoneNumber'] ?><br> <b>Address: </b><?php echo $row['address'] ?><br> <b>Delivered Date:</b> <?php echo $row['date_arrival'] ?><br> <b>Status: </b><?php echo $row['status']?></div>
                <div class="col prata-text"><b>Quantity: </b><?php echo $row['quantity'] ?><br><br><b> Item Name: </b><?php echo $row['item_name'] ?></div>
                <div class="col prata-text"><b>Sub Total:</b> ₱<?php echo $row['total_price'] ?><br><br><b>Shipping Fee: </b>₱<?php echo $row['shipping_fee'] ?><br> <br><b>Total:</b> ₱<?php echo $row['total_fee'] ?></div>
                <!-- Second Column -->
            </div>
            <hr>
        <?php 
        }
    }
    $conn->close();
    ?>

</div>
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
