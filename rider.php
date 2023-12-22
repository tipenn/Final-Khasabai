<!-- <?php
include 'function.php';
session_start();
$kha=$_SESSION['email'];
$sql = "SELECT * FROM order_customer WHERE (status='Waiting for Courier' OR status='Is on the way') AND (kha = '$kha' OR kha='');";
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
            width: 850px; 
        }       
        footer{
            background-color: #A19284;
            color: white;
            bottom: 0;
            left:0;
            width:100%;    
        }
        footer a{
            color:#453321;
        }
        footer a:hover{
            color: black;
        }
       .col-5{
        border:3px solid #5B4E2C;
        border-radius: 15px;
        margin:10px;
        background-color: #F1E6DF;   
       }
       .pack{
        background-color: #5B4E2C;
        color:#F1E6DF;
        width:150px;
        margin:10px;
        display:center;
        border:1px solid #5B4E2C;
       }
       .pack:hover{
        background-color: #E8E1DA;
        color:#5B4E2C;
       }
       .custom-heading {
    font-family: "Prata", sans-serif;
    /* Add any other styling properties as needed */
}
.col-5 h2,
        .col-5 h4,
        .col-5 h5,
        .col-5 p {
            font-family: 'Roboto', sans-serif;
            color: #5B4E2C;
            font-weight: bold;
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
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
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
    
 <div class="container">
<div class="row justify-content-center">
<?php if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { 
?>
        <div class="col-5"> 
            <br>
            <h4 class="custom-heading"><?php echo $row['id'] . ' ' . $row['lastName'];?></h4>

            <div class="text-right d-flex align-items-right">
    <i class='fas fa-user-alt' style='font-size:30px; color: #5B4E2C; margin-right: 15px; margin-left: 30px;'></i>
    <h2 class="custom-heading"><?php echo $row['firstName'] . ' ' . $row['lastName'];?></h2>
</div>

<div class="text-right d-flex align-items-right">
    <i class='fa fa-envelope icon' style='font-size:30px; color: #5B4E2C; margin-right: 15px; margin-left: 30px;'></i>
    <h5 class="text-center custom-heading"><?php echo $row['email'] ?></h5>
</div>
    
<div class="text-right d-flex align-items-center">
    <i class='fa fa-home icon' style='font-size:30px; color: #5B4E2C; margin-right: 17px; margin-left: 30px;'></i>
    <h5 class="text-center custom-heading"><?php echo $row['address'] ?></h5>
</div>
            <div class="text-right d-flex align-items-center">
    <i class='fa fa-phone icon' style='font-size:30px; color: #5B4E2C; margin-right: 17px; margin-left: 30px; '></i>
    <h5 class="text-center custom-heading"><?php echo $row['phoneNumber'] ?></h5>
</div>
<h5 class="text-lead text-center">
    <span style="float: left;">Sub Total:</span>
    <span style="float: right;">₱ &nbsp;&nbsp; <?php echo $row['total_price'] ?></span><br>
    <span style="float: left;">Shipping Fee:</span>
    <span style="float: right;">₱ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['shipping_fee'] ?></span><br>
    </h5>
    <h5 class="custom-heading" style="text-align: left;">TOTAL:</h5> 
    <h5 class="custom-heading" style="text-align: right; margin-top: -35px;">₱  &nbsp;&nbsp;&nbsp;<?php echo $row['total_price'] ?></h5>
            <form method="POST" action="orderrider.php" id="packForm">
                <input type="hidden" name="order_id" value="<?php echo $row['id']; ?>">
                <center>
                    <button type="submit" name="pack" class="pack">
                        <i class="fas fa-shipping-fast">Ship</i> 
                    </button>
                </center>
            </form>
        </div>
<?php 
    }
}
$conn->close();
?>
            

        </div>
    </div>
    <br>
    <br>
    <br>
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