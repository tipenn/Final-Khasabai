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
                echo "<script>window.location.href='adminorder.php';
                alert('Shipment status updated successfully.');</script>";
                } else {
                echo "Error updating shipment status: " . $conn->error;
            }
        }
        
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
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
                padding-left: 15px;
                margin: 0px;         
                background-color: rgba(250, 250, 243, 0.4); /* Light yellow with 90% opacity */
        }
        .bar{
            text-align: center;
            padding: 2px;
            margin-top: 2em;
            margin-left: 15em;
            margin-right: 0px; 
            
        }
        .bar li{	
            padding-left: 10px;
            font-size: 17px;
            font-family: Roboto;
            color: #5B4E2C;
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
        }
        footer a{
            color:#453321;
        }
        footer a:hover{
            color: black;
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
        h1, h2, h3, p {
            font-family: 'Prata', serif;
        }
        .content{
            background-color: rgba(232, 225, 218, 0.7);
            border-style: solid;
            border-color:#C9BBAE;
            height: 80%;
            width: 80%;
            padding: 2em;
            text-align: left;
            margin-left: 4em;
        }
        .mod{
            background-color: rgba(232, 225, 218, 0.7);
            border-style: solid;
            border-color:#C9BBAE;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            height: 500px;
            width: 600px;
            padding-top: 2em;
            margin: 0px;
        }
        .ship{
            font-family: 'Prata', serif;
            width: 35%;
            height: 40px;
            font-size: 22px;
            background-color: #E8E1DA;
            border-radius: 20px;
            color: #2F3E46;
            font-family: Poppins,sans-serif;
        }
        .ship:hover{
            color: white;
            background-color:#A5A5A5;
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
           margin-left: 7em;
    
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
<body class="bg-image" style="background-image: url('https://scontent.xx.fbcdn.net/v/t1.15752-9/406461146_2801070146700533_8926185643662779815_n.png?_nc_cat=100&ccb=1-7&_nc_sid=510075&_nc_eui2=AeE8EUJuE9vK-u7uoH-hFuqfJMSbbB90MD4kxJtsH3QwPj3y99yjqTLFVw1tcQu7VzqIrKIJGB53LEwFWPJUYd4L&_nc_ohc=zgX-7eBLWyMAX8SX_Ve&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQYjVh5cxqmCd-fmKx76irFbBM6szywFFaknbFQjeBJ1A&oe=659E2DAE'); background-size: cover;">

<div class="navigation">
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70"> </div>
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
        <a href="adminprofile.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Profile
        </li>
        </a>
        <a href="adminpage.php" class="nav-link">
         <li class="nav-item text-center active" >
       
                Home
         </li>
        </a>
        <a href="sales.php" class="nav-link">
         <li class="nav-item text-center" >
           
                Sales
         </li>
        </a>
        <a href="inventory.php" class="nav-link">
         <li class="nav-item text-center">
        
                Inventory
         </li>
        </a>
        <a href="adminorder.php" class="nav-link">
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

        <h4 style="color:#453321;  padding-right: 3em; float: left;">
                    <a href="adminorder.php">
                        <button type="button" class="back" style="margin-left: 1em; margin-right: 10px;">
                            <i class="fa-solid fa-arrow-left" style="color: white;"></i></button></a> </h4>
<div class="text-center" style="margin-top: 5em; ">
<div class="container">
    <div class="row">
        <div class="col" style="margin-left: 3em;">
        <div class="content" style="font-size: 20px;">
        <p style="font-family: Roboto; font-size:    20px;"><i class="fas fa-home" style="color: #453321; margin-right: 10px;"></i><b>DELIVERY ADDRESS</b></p>
        <p class="text-lead"><?php echo $row['firstName']?> <?php echo $row['lastName']; ?>
        <br> <?php echo $row["phoneNumber"];?>
        <br><?php echo $row['address']?></p>
        <br>
        <p style="font-family: Roboto; font-size: 20px;"><i class="fas fa-truck" style="color: #453321; margin-right: 10px;"></i><b>ORDER INFORMATION</b></p>
        <p class="text-lead"><?php echo $row['date']?><br>
        <?php echo $row['item_name']?> 
                <br>₱<?php echo $row['price']?>
                <br>Quantity : <?php echo $row['quantity']?></p>
        </div>
    </div>
    
        <div class="col">
            <br><BR><BR>
            <div class="mod">
                <br>
                <center><h4>
               Mode of Payment: Cash on Delivery
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
                <div class="row">
                    <div class="col">
                        VOUCHER USED:
                    </div>
                    <div class="col">
                    ₱<?php if($row['voucher']== NULL){
                        $row['voucher_discount']=0;
                        echo  $row['voucher_discount'];
                    } else{
                    echo $row['voucher_discount'];
                    } ?>
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

                <button type="submit" name="ship" class="ship">SHIP</button>
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
            <p class="text-lead" style="font-size: 15px; padding-top:20px;">2023©Khasabai | <a href="" style="color: white;"> Privacy Policy</a></p>
        </div>
        <div class="col-md-6 text-end sm-3" style="padding-top:20px;">
            <a href="mailto:your-email@example.com" class="d-inline">
                <i class="far fa-envelope" style="margin: 5px;"></i>
            </a>
            <a href="https://www.facebook.com/kylesumabat13" target="_blank" class="d-inline">
                <i class="fab fa-facebook" style="margin: 5px;"></i>
            </a>
            <a href="https://instagram.com/kharyllesumabat?igshid=NzZlODBkYWE4Ng==" target="_blank" class="d-inline">
                <i class="fab fa-instagram" style="margin: 5px;"></i>
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