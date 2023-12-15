<?php 
include 'function.php';
session_start();


$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$phoneNumber = $_SESSION['phoneNumber'];
$address = $_SESSION['address'];
$itemName = $_SESSION['itemName'];
$quantity = $_SESSION['quantity'];
$itemPrice = $_SESSION['itemPrice'];
$item_code = $_SESSION['item_code'];
$image = $_SESSION['image'];
$voucher= $_SESSION['voucher'];
$date = date("Y-m-d");

$sql="SELECT * FROM products WHERE item_code='$item_code'";
$result=$conn->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    
    
    <style>
        .navigation{
            background-color: #FAFAF3;
            }
        .navbar a:hover {
            background: linear-gradient(to bottom, transparent 0%, transparent 80%, #83776c 80%, #83776c 100%, white);
        }
        .navbar {
            border-top: 1px solid #ccc;
            padding-left: 15px;
            margin: 0px; 
            padding-right: 2em;
        }
        .bar{
            text-align: center;
            padding: 0px;
            margin-top: 0;
            margin-right: 2em;
        }
        .bar li{	
            padding-left: 10px;
            font-size: 16px;
            font-family: Roboto;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #E8E1DA;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
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

        .addition{
            width: 90%;
            background-color: #A19284;
            font-size: 30px;
            border-color: #AB7B5B;
            margin-top: 15px;
            color: white;
            
        }
        .addition:hover{
            background-color: #C9BBAE;
            color: black;
        }
        .items{
            height: 180px;
            width: 400px;
            padding-left: 55px;
            padding-top: 40px;
            margin-top: 2em;
            margin-right: 56em;
            background-color: #C9BBAE;
            border-radius: 6em;
            color: #453321;
        }
        .items2{
            height: 180px;
            width: 400px;
            padding-left: 55px;
            padding-top: 40px;
            margin-top: 2em;
            margin-right: 56em;
            border: 2px solid #5B4E2C;
            border-radius: 6em;
            color: #453321;
            background-color: transparent;
        }
        .vl {
            border-left: 3px solid #5B4E2C;
            height: 620px;
            position: absolute;
            left: 40%;
            margin-left: -3px;
            top: 25%;
            margin-bottom: 20%;
            }
        .col-5{
            border:2px solid black;
            margin:10px;
            background-color: transparent;
            float: right;   
            margin-right: 10em;
            margin-top: -35em;
            margin-bottom: 20%;
            padding: 2em;
        }
        .pack{
            background-color: #A19284;
            color:WHITE;
            width:200px;
            margin:10px;
            display:center;
       }
       .pack:hover{
            background-color: #E8E1DA;
            color:black;
       }
        
        h1, h2, h3, p {
            font-family: 'Prata', serif;
            color: #453321;
        }

        h4, p{
            font-family: Roboto;
            font-size: 20px;
            color: #453321;
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
    </style>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
</head>
  <!-- navbar -->
  <body>
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
    </div>
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
    <div class="bar">
        <ul class="navbar-nav ">
        <a href="cProfile.php" class="nav-link">
        <li class="nav-item text-center" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="cHome.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="cOrderstatus.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
                Orders
         </li>

        </a>
        <a href="cCart.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-shopping-cart"></i>
                Cart
            </li>
        </a>

        </a>
        <a href="logout.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-sign-out-alt"></i>
                Log out
         </li>
        </a>
        </ul>
    </div>
    </div>
</nav>

<h1 class="text-center">CHECKOUT</h1>
</div>
<br><br>

<!-- content -->
<h4 style="color:#453321;  padding-right: 3em; float: left;">
<a href="product.php?product_id=<?php echo $item_code; ?>">
                        <button type="button" class="back" style="margin-left: 1em; margin-right: 10px;">
                            <i class="fa-solid fa-arrow-left" style="color: white;"></i></button></a> </h4>
<br><br>
<!--body-->
    <div class="container">
        <form method="POST">
    <div class="row justify-content-center">
            <div class="items">
                <div class="col-11">
                <h5><b><?php echo $_SESSION['firstName'] . ' '. $_SESSION['lastName'];?><b></h5>
                <h7 style="padding-left: 1em;"><?php echo $_SESSION['address']?></h7>
                <h5 style="padding-top: 5px;"><b>MOBILE NUMBER</b></h5>
                <h7 style="padding-left: 1em;"><?php echo $_SESSION['phoneNumber']?></h7>
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="items2">
                <div class="col-11">
                <h5><b><?php echo $_SESSION['firstName'] . ' '. $_SESSION['lastName'];?><b></h5>
                
                <h7 style="padding-left: 1em;"><?php echo $_SESSION['address']?></h7>
                <h5 style="padding-top: 5px;"><b>MOBILE NUMBER<?php echo $item_code ;?></b></h5>
                <h7 style="padding-left: 1em;"><?php echo $_SESSION['phoneNumber']?></h7>
    </div>
    </div>
    </div>
    <br>
        <div class="row" style="float: left; width: 450px; ">
                <br><br><br><br><br>
            </div>
    </div>
    </div>
    

    <div class="vl"></div>
   
    <div class="col-5">
            <center> 
            <div id="message" class="alert alert-success" style="display: none;"></div>

                <h2><b>ORDER SUMMARY</b></h2> </center>
                <h4><?php echo $_SESSION['firstName'] . ' '. $_SESSION['lastName'];?></h4>
                <h6>Address: <input type="text" value="<?php echo $_SESSION['address']?>" name="address"></h6>
                <h7><?php echo $_SESSION['phoneNumber']?></h7>
                <br>Item Name: 
                <?php echo $itemName;?>
                <br>Quantity: 
                <?php echo $quantity;?>
                <br>Voucher: 
                <?php 
                $check = "SELECT * FROM voucher WHERE voucher_code = '$voucher'";
                $output = $conn->query($check);
                
                if ($output) {
                    if ($output->num_rows > 0) {
                        // Voucher found
                        $row = $output->fetch_assoc();
                        $currentDate = new DateTime();
                        $expiration_date=$row['expiration_date'];
                        if ($expiration_date < $currentDate) {
                            echo "The voucher is expired";
                        }else{
                        echo $voucher;
                        }
                    } else {
                        // Voucher not found
                        echo "There is no such voucher";
                        $voucher= NULL;
                    }
                } else {
                    // Error in query
                    echo "Error in query: " . $conn->error;
                }
                
                ?>
                  
                <center><h7>
                    
               Mode of Payment: Cash on Delivery
                </h7></center>
                <hr style="color: #5B4E2C; height: 5px;">
                <div class="row">
                    <div class="col" >
                        SUB TOTAL:
                    </div>
                    <div class="col">
                    ₱<?php 
                    $sub_total=$itemPrice * $quantity;
                    echo $sub_total?>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        SHIPPING FEE:
                    </div>
                    <div class="col">
                    ₱<?php 
                    $shipping_fee=$sub_total*0.1;
                    echo $shipping_fee?>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        Voucher Discount:
                    </div>
                    <div class="col">
                    ₱ <?php   
                    if ($output->num_rows > 0) {
                        if ($row['expiration_date'] < $currentDate) {
                            $discount = 0;
                            echo $discount;
                        } else {
                            $discount = $row['percent'];
                            echo $discount;
                        }
                    } else {
                        $discount = 0;
                        echo $discount;
                    }
                   ?>
                    </div>
                </div>
                <hr style="color: #5B4E2C; height: 5px;">
                <div class="row" style="padding: 20px;">
                    <div class="col">
                        <b> T O T A L :</b>
                    </div>
                    <div class="col">
                    <b>₱<?php 
                    $total_fee=$shipping_fee+$sub_total-$discount;
                    echo $total_fee;
                    ?></b>
                    </div>
                </div>

    </div>
    <button type="submit" name="btn_checkout">dgsa</button>

                </form>
    <?php if(isset($_POST['btn_checkout'])){

$checkVoucherQuery = "SELECT * FROM order_customer WHERE voucher = '$voucher' AND email = '$email'";

$ended = $conn->query($checkVoucherQuery);

if ($ended) {
    if ($ended->num_rows == 0 || $voucher == NULL ) {
        // Voucher has been used for this email address
        $home=$_POST['address'];
        $status="Ordered";  
        $insert = "INSERT INTO order_customer 
        VALUES ('', '$firstName', '$lastName', '$email', '$phoneNumber', '$home', '$item_code', '$itemName', '$image', '$quantity', '$voucher', '$discount', '$itemPrice', '$sub_total', '$shipping_fee', '$total_fee', '$date', '', '', '$status')";
        $outcome=$conn->query($insert);    
        $message='order processed';
        
    } else {
        // Voucher has not been used for this email address
        echo "Voucher has already been used for this email address.";
    }
} 


        


    }
?>
<script>
    if ('<?php echo $message; ?>'.trim() !== "") {
    var messageDiv = document.getElementById('message');
    messageDiv.innerText = '<?php echo $message; ?>';
    messageDiv.style.display = 'block';
}
    // JavaScript code to submit the form when the button is clicked
    document.getElementById('packForm').addEventListener('submit', function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Submit the form
        this.submit();
    });
</script>

   <!-- footer -->
<footer class="container-fluid">
    <div class="row">
        <div class="col-6 text-left">
            <p class="text-lead" style="font-size: 15px; padding-top:20px;">2023©Khasabai | <a href="" style="color: white;"> Privacy Policy</p>
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
 </body>
</html>
