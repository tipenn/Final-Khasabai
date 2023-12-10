<?php 
include 'function.php';
session_start();

$sql = "SELECT * FROM products;";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        .item{
            background-color: #E8E1DA;
            
        }
        .col{
            border-right: 20px solid rgba(161, 146, 132, 0.5);
            border-bottom: 20px solid rgba(161, 146, 132, 0.5);
            padding: 20px;
            font-family: 'Raleway', sans-serif;
        } 
        .col img{
            height:100px;
            width: 150px;
        }
        .update_stocks{
            background-color: #EAD7BB;
            border-radius: 20px;
            border-color: #113946;

        }
        .update_stocks:hover{
            background-color: #BCA37F;
            border-radius: 20px;
            font-weight: bold;
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

<h1 class="text-center">INVENTORY</h1>
</div>
<div class="container-fluid">
    <?php if ($result->num_rows > 0) { ?>
        <!-- Display header row outside the loop -->
        <div class="headings text-center">
            <div class="row">
                <div class="col">
                    <h3><b>Item Code</b></h3>
                </div>
                <div class="col">
                    <h3><b>Item Name</b></h3>
                </div>
                <div class="col">
                    <h3><b>Item Description</b></h3>
                </div>
                <div class="col">
                    <h3><b>Item Image</b></h3>
                </div>
                <div class="col">
                    <h3><b>Stocks</b></h3>
                </div>
                <div class="col">
                    <h3><b>Item Price</b></h3>
                </div>
            </div>
        </div>

        <div class="item text-center">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="row">
                    <div class="col">
                        <?php echo $row["item_code"] ?>
                    </div>
                    <div class="col">
                        <?php echo $row["item_name"] ?>
                    </div>
                    <div class="col">
                        <?php echo $row["item_description"] ?>
                    </div>
                    <div class="col">
                        <img src="assets/<?php echo $row["item_image"] ?>">
                    </div>
                    <div class="col">
                    <?php if ($row["stocks"] < 20){?>
                        <p style="color:red; font-weight:bold;"><?php echo $row["stocks"]?></p>
                        <?php
                    }else{
                        echo $row["stocks"];
                    }
                    ?>
           
                    </div>
                    <div class="col">
                        ₱<?php echo $row["retail_price"] ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

    

<footer class="container-fluid">
    
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

</body>
</html>