<!-- <?php
include 'function.php';
session_start();
$order_id=$_POST['order_id'];
$sql = "SELECT * FROM order_customer where id=$order_id;";
$result = $conn->query($sql);

$kha= $_SESSION['email'];
if (isset($_POST['done_pickup'])) {
    $status_sql = "UPDATE order_customer SET status = 'Is on the way' WHERE id = $order_id";

    if ($conn->query($status_sql) === TRUE) {
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $date_arrival = date("Y-m-d H:i:s");
    $kha_sql = "UPDATE order_customer SET kha = '$kha', date_arrival = '$date_arrival' WHERE id = $order_id";

    if ($conn->query($kha_sql) === TRUE) {
    } else {
        echo "Error updating kha and date_arrival: " . $conn->error;
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
        .divup{
            border: solid grey;
            border-radius: 5rem !important;
            box-shadow: -6px -6px 6px gray;
            background-color:rgb(232, 225, 218);
            margin-top: 2em;
            padding: 1em;

        }

        .fa-eye-slash {
            font-family: "Font Awesome 5 Free";
            font-weight: 300;
        }

        .buttoncst{
            width: 5
            0%;
            height: 50px;
            border-radius: 100px;
            background-color: #AC8351;
        }
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;

        }
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
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
            color: white;
            position:fixed;
            bottom: 0;
            left:0;
            width:100%;
           
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
        .center-box {
            display: flex;
            flex-direction: column; /* Display vertically */
            align-items: flex-end; /* Align items to the right */
            height: 100vh; /* Adjust as needed */
            margin-right: 5%;
        }

        .layered-box {
            background-color: #C9BBAE; /* Updated background color */
            padding: 20px; /* Adjust padding as needed */
            border-radius: 10px; /* Adjust radius as needed */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0; /* Adjust as needed */
            width: 800px; /* Adjust width as needed */
            margin-top: 5%;
            position: relative; /* Added relative positioning for child elements */
        }

        .quantity-box {
            background-color: #ffffff; /* Small box background color */
            padding: 10px; /* Adjust padding as needed */
            border-radius: 5px; /* Adjust radius as needed */
            position: absolute;
            left: 30px; /* Adjust left position as needed */
            top: 25px; /* Adjust top position as needed */
            text-align: center;
            margin: 0%;
        }

        #confirmBtn {
            margin-top: 30%; /* Adjust margin as needed */
            margin-right: -93%; /* Adjust as needed */
            flex-direction: column;
            padding: 20px;
            background-color: #835328;
        }

        .additional-box {
            background-color: #C9BBAE; /* Updated background color */
            padding: 60px; /* Adjust padding as needed */
            border-radius: 10px; /* Adjust radius as needed */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0; /* Adjust as needed */
            width: 600px; /* Adjust width as needed */
            margin-top: 5%;
            position: absolute; /* Absolute positioning */
            left: 250px; /* Adjust left position to overlap with layered box */
            font-size: 20px;
        }
        .left{
            background-color: #E8E1DA;
        }
        .right{
            background-color: #E8E1DA;

        }
        button {
    padding: 10px;
    border: 1px solid black;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.1s, color 0.1s; /* Add transition for smooth effect */
}

button:hover {
    background-color: #453321; /* Change to your desired hover background color */
    color: black; /* Change to your desired hover text color */
}
.prata-text {
            font-family: 'Prata', serif;
            text-align: center;
            font-size: 24px; /* Adjust font size as needed */
            color: #453321; /* Set the color to match your design */
        }
        .prata-font {
    font-family: 'Prata', serif;
    color: #453321; /* Set the color to match your design */
}

.prata-font span {
    font-size: 20px; /* Adjust the size of the check sign */
    margin-left: 5px; /* Add some spacing between the text and the check sign */
}

    </style>

<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>profile</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
    <div class="navigation"  style="margin-bottom:-7px;">
    <nav class="navbar navbar-expand-sm" style="margin-bottom: 0px;">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">BEAUTY PRODUCTS</p>
            </div>
                <br>
                <hr style= "margin-top: 10px; margin-left: 15px; margin-right: 2em; width: 700px; background:#4F3B33; height: 2px;"> </hr>           
                <br>
    </div>
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

<div class="bar">
<div style="display: flex; align-items: right;">
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
        <ul class="navbar-nav ml-auto ">
        <a href="profilerider.php" class="nav-link">
        <li class="nav-item text-center active" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="rider.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="orderhistoryrider.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
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
       <br>
       <br>
       
 <h1> Order </h1>
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
                                <?php echo $row['firstName']?> <?php echo $row['lastName']?><br>
                                <?php echo $row['address']?><br>
                                <?php echo $row['phoneNumber']?>
                                <div class="row">
                                <div class="col">
                                    Sub Total: <br>
                                    Shipping Fee: 
                                </div>
                                <div class="col">
                                <?php echo $row['total_price']?><br>
                                <?php echo $row['shipping_fee']?><br>
                                </div>
                                </div>
                                <center>
                                Total: <?php echo $row['total_fee']?>
                                </center>

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
                                    <?php echo $row['item_description']?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <form method="POST" style="text-align: center;">
    <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
    <button type="submit" name="done_pickup" id="done_pickup_btn" onclick="return disableDonePickup()">Done Pick up</button>
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
            echo '<script>
                    function disableDelivered() {
                        // Disable the "Delivered" button
                        document.getElementById("delivered_btn").disabled = true;
                        
                        // Allow the form submission to proceed
                        return true;
                    }
    
                    disableDelivered();
                    alert("Data inserted into sales table successfully!");
                  </script>';
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
        ?> <script>
        function disableDonePickup() {
            // Disable the "Done Pick up" button
            document.getElementById('done_pickup_btn').disabled = true;
    
            return true; // Allow the form submission to proceed
        }
        </script>
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
    
 </body>
</html>