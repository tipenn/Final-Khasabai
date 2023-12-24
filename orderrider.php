<!-- <?php
include 'function.php';
session_start();
$order_id=$_POST['order_id'];
$sql = "SELECT * FROM order_customer where id=$order_id;";
$result = $conn->query($sql);

$kha= $_SESSION['email'];
if(isset($_POST['done_pickup'])){

    // Assuming $order_id and $kha are already defined

    // Update status
    $status_sql = "UPDATE order_customer SET status= 'Is on the way' WHERE id = $order_id";
    if ($conn->query($status_sql) === TRUE) {
    } else {
    }

    // Update kha
    $kha_sql = "UPDATE order_customer SET kha= '$kha' WHERE id = $order_id";
    if ($conn->query($kha_sql) === TRUE) {
    } else {
    $conn->error;
    }
}

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
    
        .left{
            margin-top: 5em;
            background-color: #E8E1DA;
            width: 500px;
            border:3px solid #5B4E2C;
            border-radius: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-left: 80px;
        }
     
        .right{
            margin-top: 9em;
            background-color: #E8E1DA;
            width: 500px;
            border:3px solid #5B4E2C;
            border-radius: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-right: 80px;
        }
        #done_pickup_btn {
    padding: 10px;
    border: 1px solid #5B4E2C;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.1s, color 0.1s;
    background-color: #5B4E2C;
    color: white;
    font-weight: bold;
    width: 200px;
    float: left;
    margin-left: 3em;
}

#done_pickup_btn:hover {
    background-color: #E8E1DA;
    color: #5B4E2C;
}

/* Styling for "Delivered" button */
#delivered_btn {
    padding: 10px;
    border: 1px solid #5B4E2C;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.1s, color 0.1s;
    background-color: #5B4E2C;
    color: white;
    font-weight: bold;
    width: 200px;
    float: right;
    margin-right: 11em;
}

#delivered_btn:hover {
    background-color:  #E8E1DA;
    color: #5B4E2C;
}
.prata-text {
            font-family: 'Roboto', serif;
            font-size: 24px; /* Adjust font size as needed */
            color: #453321; /* Set the color to match your design */
            
        }
        .prata-font {
    font-family: 'Roboto', serif;
    color: #453321; /* Set the color to match your design */
    font-weight: bold;
}

.prata-font span {
    font-size: 20px; /* Adjust the size of the check sign */
    margin-left: 5px; /* Add some spacing between the text and the check sign */
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
            <img src="assets/logo.png" alt="Logo" width="70" height="70">   </div>
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
    <div class="row">
        <br>
    <?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { 
                        $email_customer = $row['email']; // Make sure to define $row appropriately
                        $phoneNumber_customer = $row['phoneNumber'];
                        $item_code = $row['item_code'];
                        $item_name = $row['item_name'];
                        $ordered_date = $row['date'];
                        $delivered_date = date("Y-m-d H:i:s"); // Use the current date and time for delivered_date
                        $kha_value = $kha; // Make sure to define $kha appropriately
                        $quantity_value = $row['quantity'];
                        $total_price_value = $row['total_price'];
                        $shipping_fee_value = $row['shipping_fee'];
                        $total_fee_value = $row['total_fee'];
                        ?>
                       
                        <div class="col">
                        
                        <div class="left prata-text">
                        <div class="text-right d-flex align-items-right">
    <i class='fas fa-user-alt' style='font-size:30px; color: #5B4E2C; margin-right: 10px; margin-left: 150px;'></i>
    <h2 class="custom-heading"><?php echo $row['firstName'] . ' ' . $row['lastName'];?></h2>
</div>
<div class="text-right d-flex align-items-right">
    <i class='fa fa-home icon' style='font-size:30px; color: #5B4E2C; margin-right: 10px;  margin-left: 150px; margin-top: 4px;'></i>
    <h2 class="custom-heading"> <?php echo $row['address']?></h2>
</div>
<div class="text-right d-flex align-items-right">
    <i class='fa fa-phone icon' style='font-size:30px; color: #5B4E2C; margin-right: 10px;  margin-left: 150px; margin-top: 4px;'></i>
    <h3 class="custom-heading">  <?php echo $row['phoneNumber']?></h3>
</div>
            
<h3 class="text-lead text-center">
    <span style="float: left; padding-left: 20px;">Sub Total:</span>
    <span style="float: right; padding-right: 20px;">₱ <?php echo $row['total_price'] ?></span><br>
    <span style="float: left; padding-left: 20px;">Shipping Fee:</span>
    <span style="float: right; padding-right: 20px;">₱ <?php echo $row['shipping_fee'] ?></span><br>
<span style="float: left; padding-left: 20px;">Voucher Discount:</span>
    <span style="float: right; padding-right: 20px;">₱ <?php 
     if($row['voucher']== NULL){
        $row['voucher_discount']=0;
        echo  $row['voucher_discount'];
    } else{
    echo $row['voucher_discount'];
    } ?></span><br></h3>
<h3 class="custom-heading" style="text-align: left; padding-left: 20px;">TOTAL:</h3> 
<h3 class="custom-heading" style="text-align: right; margin-top: -45px; padding-right: 20px;">₱  &nbsp;&nbsp;&nbsp;<?php echo $row['total_fee'] ?></h3>


                            </div>
                           
                        </div>
                      
                        <div class="col">
                            <div class="right prata-text">
                                <div class="row">
                                    <div class="col">
                                    Quantity: <?php echo $row['quantity']?>
                                    </div>
                                    <div class="col">
                                    <?php echo $row['item_name']?><br>
                                    <!-- <?php echo $row['item_description']?> -->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <form method="POST" style="text-align: center;">
        <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
        <button type="submit" name="done_pickup" id="done_pickup_btn" onclick="return disableDonePickup()">Done Pick up</button>
    </form>
    <form method="POST" style="text-align: center;">
        <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
        <button type="submit" name="delivered" id="delivered_btn" onclick="return disableDelivered()">Delivered</button>
    </form>
    
</div>
        <?php 
        
    }
    if (isset($_POST['delivered'])) {
        // Update order status
        $sequence = "UPDATE order_customer SET status='Delivered', date_arrival = NOW() WHERE id = $order_id";
    
        if ($conn->query($sequence) === TRUE) {
            echo '<p class="prata-font" style="text-align: center;">Order marked as Delivered <span>&#10003;</span></p>';
        } else {
            echo "Error updating status: " . $conn->error;
        }
    
        // Insert into sales table
        $seq = "INSERT INTO `sales` 
                (`customer_email`, `phoneNumber`, `item_code`, `item_name`, `ordered_date`, `delivered_date`, `kha`, `quantity`, `total_price`, `shipping_fee`, `total_fee`) 
                VALUES 
                ('$email_customer', '$phoneNumber_customer', '$item_code', '$item_name', '$ordered_date', '$delivered_date', '$kha_value', '$quantity_value', '$total_price_value', '$shipping_fee_value', '$total_fee_value')";
    
        if ($conn->query($seq) === TRUE) {
        } else {
            echo "Error: " . $conn->error;
        }
    }}
?>

    </div>
   </div>
   <?php
   if (isset($_POST['done_pickup'])) {
    // Assuming $order_id and $kha are already defined

    // Update status
    $status_sql = "UPDATE order_customer SET status= 'Is on the way' WHERE id = $order_id";
    if ($conn->query($status_sql) === TRUE) {
        // Status updated successfully
    } else {
        echo "Error updating status: " . $conn->error;
    }

    // Update kha
    $kha_sql = "UPDATE order_customer SET kha= '$kha' WHERE id = $order_id";
    if ($conn->query($kha_sql) === TRUE) {
        // kha updated successfully

        // Echo the styled message after both updates
        echo '<p class="prata-font" style="text-align: center;">Deliver the package to the said location <span>&#10003;</span></p>';
        ?> 
        <?php
        
    } else {
        echo "Error updating kha: " . $conn->error;
    }
}

$conn->close();
?>
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
    <script>
    
</script>
 </body>
</html>