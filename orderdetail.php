<?php 
//INCLUDE BACK BUTTON
include 'function.php';
session_start();

if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];

    // Assuming $conn is your database connection
    $sql = "SELECT * FROM order_customer WHERE id = $order_id";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Fetch the row
        $row = $result->fetch_assoc(); }}
        
        if (isset($_POST['ship'])) {
            $order_id = $_POST['order_id'];
            $quantity= $_POST['quantity'];
            $item_code=$_POST['item_code'];
            $sequel = "UPDATE order_customer SET status = 'Waiting for Courier' WHERE id =$order_id";
        
            if ($conn->query($sequel) === TRUE) {
                echo "<script>alert('Shipment status updated successfully.');</script>";
                } else {
                echo "Error updating shipment status: " . $conn->error;
            }
        }
        
?>  

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
        .content{
            background-color: #A19284;
            height: 200px;
            width: 500px;
        }
        .content img{
            height: 150px;
            width: 250px;
            margin-top: 25px;
            margin-left: 25px;
        }
        .mod{
            background-color: #AB7B5B;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            height: 500px;
            width: 600px;
            padding: 0px;
            margin: 0px;
        }
        .ship{
            width: 90%;
            background-color: #AC8351;
            border-radius: 20px;
        }
        .ship:hover{
            color: white;
            background-color: #A19284;

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

<h1 class="text-center">ORDER</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col" style="padding:0px; margin:0px;">
        <i class="fas fa-home">Delivery Address</i>
        <p class="text-lead"><?php echo $row['firstName']?> <?php echo $row['lastName']; ?>
        <br> <?php echo $row["phoneNumber"];?>
        <br><?php echo $row['address']?></p>
        <br>
        <i class="fas fa-truck">ORDER information</i>
        <p class="text-lead"><?php echo $row['date']?></p>
        <div class="content">
            <div class="row"> 
                <div class="col" style="padding: 30px;">
                <p class="text-mute"><?php echo $row['item_name']?> <?php echo $row['item_description'] ?>
                <br><center>₱ <?php echo $row['price']?></center>
                <br>QUANTITY : <?php echo $row['quantity']?></p>
                </div>
            </div>               
            </div>
        </div>
        <div class="col">
            <br><BR><BR>
            <div class="mod">
                <br>
                <center><h4>
                M o d e O f P a y m e n t : Cash on Delivery
                </h4></center>
                <hr style="color: white; height: 2px;">
                <div class="row">
                    <div class="col">
                        SUB TOTAL:
                    </div>
                    <div class="col">
                    ₱<?php echo $row['total_price']?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        SHIPPING FEE:
                    </div>
                    <div class="col">
                    ₱<?php echo $row['shipping_fee']?>
                    </div>
                </div>
                <hr style="color: black; height: 10px;">
                <div class="row" style="padding: 20px;">
                    <div class="col">
                        <b> T O T A L :</b>
                    </div>
                    <div class="col">
                    <b>₱<?php echo $row['total_fee']?></b>
                    </div>
                </div>
                <center>
                <form method="POST">
                    <input type="hidden" name="order_id" value="<?php echo  $order_id;?>">
                    <input type="hidden" name="quantity" value="<?php echo $row['quantity']?>">
                    <input type="hidden" name="item_code" value="<?php echo $row['item_code']?>">

                <button type="submit" name="ship" class="ship"><h2>SHIP</h2></button>
                </form>
                </center>
                
            </div>
        </div>


        </div>
    </div>
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