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



<!doctype html>
<html lang="en">
  <head>
    <title>KHASABAI</title>
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
            background-color:#F6F2EF;
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
            margin-right: 0px; 
            margin-left: 18em;
            
        }
        .bar li{	
            padding-left: 10px;
            font-size: 20px;
            font-family: Neuzeit S LT W01 Book;
            color: #5B4E2C;
        
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
            text-align: center;
            background-color: rgb(211, 196, 176, 0.7);
            padding:40px;
            margin-top: 2em;
            margin-right: 56em;
            border-radius: 10px;
            color: #453321;
        }
        .items2{
            height: 180px;
            width: 400px;
            text-align: center;
            background-color: rgb(211, 196, 176, 0.7);
            padding: 40px;
            margin-top: 2em;
            margin-right: 56em;
            border-radius: 10px;
            color: #453321;
        }
        .vl {
            border-left: 3px solid #5B4E2C;
            height: 590px;
            position: absolute;
            left: 40%;
            margin-left: -3px;
            top: 25%;
            margin-bottom: 20%;
            }
        .col-5{
            border:2px solid black;
            margin:10px;
            background-color:#F6F2EF;
            position: absolute;
            top: 25%;
            left: 50%;
            padding: 1em;
            height: 583px;

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
        .place{
            width: 35%;
            height:40px;
            font-size: 23px;
            background-color:#AC8351;
            margin-top: 1em;
            border-radius: 20px;
            margin-bottom: 2em;
            color: white;
            font-family: Neuzeit S LT W01 Book;
           
        }
        .place:hover{
            background-color: #BCA37F;
            font-weight: bold;
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
            background-color:#514F4D ;
            color: white;
            bottom: 0;
            left:0;
            width:100%;
            height: 100px;
            margin-top: 4em;
           
        }
        footer a{
            color:#EFE8E3;
        }
        footer a:hover{
            color: black;
        }
        .search .form-control {
        text-align: center;
        background-color: transparent;
        border-color: #453321;
        border-radius: 10px;
       width: 10%;
        }
        .search{
            width: 240px;
           margin-left: 6em;
           position: relative;
    
        }
    </style>


 <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="bg-image" style="background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); background-size: cover;">

<div class="navigation">
<nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70"> </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway;font-weight: bold; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway;font-weight: bold;  text-align: left;">BEAUTY PRODUCTS</p></a>
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
        <a href="customerprofile.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Profile
        </li>
        </a>
        <a href="customerhome.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Home
        </li>
        </a>
        <a href="orderstatus.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Orders
        </li>
        </a>
        <a href="cart.php" class="nav-link">
         <li class="nav-item text-center">
        
                Cart
         </li>
        </a>
        <a href="logout.php" class="nav-link">
         <li class="nav-item text-center">
        
                Logout
         </li>
        </a>
        
        <div class="search">
        <form method="GET" action="" class="search">
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholder="Search..."
                    style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                
                    <button class="btn btn-secondary" type="submit"
                        style="background-color: transparent;width:15%; border-color: #453321; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-top-left-radius: 0; border-bottom-left-radius: 0;">
                        <span class="btn-label"><i class="fas fa-search" style="color: #5a4939;"></i></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
    </nav>
        </div>


<!-- content -->
<h4 style="color:#453321;  padding-right: 3em; float: left;">
<a href="product.php?product_id=<?php echo $item_code; ?>">
                        <button type="button" class="back" style="margin-left: 1em; margin-right: 10px;">
                            <i class="fa-solid fa-arrow-left" style="color: white;"></i></button></a> </h4>
<br><br><br>
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
                <h5 style="padding-top: 5px;"><b>MOBILE NUMBER</b></h5>
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

                <h2 style=" padding-top: 30px;"><b>ORDER SUMMARY</b></h2> </center>
               <?php echo $_SESSION['firstName'] . ' '. $_SESSION['lastName'];?><br>
                Address: <input type="text" value="<?php echo $_SESSION['address']?>" name="address"><br>
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
                        $expirationDate = new DateTime($row['expiration_date']);
                        
                        if ($expirationDate < $currentDate) {
                            echo "The voucher is expired";
                            $discount=0;

                        } else {
                            $voucher = $row['voucher_code'];
                            
                            // Check if the customer has already used the voucher
                            $checkUsedQuery = "SELECT * FROM order_customer WHERE email = '$_SESSION[email]' AND voucher = '$voucher'";
                            $checkUsedResult = $conn->query($checkUsedQuery);
                            
                            if ($checkUsedResult && $checkUsedResult->num_rows > 0) {
                                echo "The voucher has already been used by this customer";
                                $discount=0;
                            } else {
                                // Display the voucher code
                                echo $voucher;
                                $discount=$row['percent'];
                            }
                        }
                    } else {
                        // Voucher not found
                        echo "No voucher";
                        $voucher = NULL;
                        $discount=0;

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
                <div class="row" style="margin-left: 5em;">
                    <div class="col" >
                        SUB TOTAL:
                    </div>
                    <div class="col" style="margin-left: 8.7em;">
                    ₱<?php 
                    $sub_total=$itemPrice * $quantity;
                    echo $sub_total?>
                    </div>
                </div>
                <div class="row" style="margin-left: 5em;">
                    <div class="col" >
                        SHIPPING FEE:
                    </div>
                    <div class="col" style="margin-left: 8.7em;">
                    ₱<?php 
                    $shipping_fee=$sub_total*0.1;
                    echo $shipping_fee?>
                    </div>
                </div>
                <div class="row" style="margin-left: 5em;">
                    <div class="col" >
                        Voucher Discount:
                    </div>
                    <div class="col" style="margin-left: 8.7em;">
                    ₱ <?php   
                    
                    echo $discount;
                   ?>
                    </div>
                </div>
                <hr style="color: #5B4E2C; height: 5px;">
                <div class="row" style="padding-right: 20px; color: #AC8351; margin-left: 5em;">
                    <div class="col">
                        <b> T O T A L :</b>
                    </div>
                    <div class="col" style="margin-left: 10em;">
                    <b>₱<?php 
                    $total_fee=$shipping_fee+$sub_total-$discount;
                    echo $total_fee;
                    ?></b>
                    </div>
            </div>
                      <div class="text-center">
        <button type="submit" class="place" name="btn_checkout">Place Order</button></div>
                </div>

    </div>
                </form>
    
    <?php if(isset($_POST['btn_checkout'])){

$checkVoucherQuery = "SELECT * FROM order_customer WHERE voucher = '$voucher' AND email = '$email'";

$ended = $conn->query($checkVoucherQuery);

if ($ended) {
    if ($ended->num_rows == 0 || $voucher == NULL ) {
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
            <p class="text-lead" style="font-size: 18px; padding-top:2em; color: #EFE8E3;padding-left: 2em;">2023©Khasabai | Privacy Policy</p>
        </div>
        <div class="col-md-6 text-end sm-3" style="padding-top:2em  ; ">
            <a href="mailto:your-email@example.com" class="d-inline">
                <i class="far fa-envelope" style="margin-right: 10px; font-size: 28px;  "></i>
            </a>
            <a href="https://www.facebook.com/kylesumabat13" target="_blank" class="d-inline">
                <i class="fab fa-facebook" style="margin-right: 10px; font-size: 28px; "></i>
            </a>
            <a href="https://instagram.com/kharyllesumabat?igshid=NzZlODBkYWE4Ng==" target="_blank" class="d-inline">
                <i class="fab fa-instagram" style="margin-right: 2em; font-size: 28px; "></i>
            </a>
        </div>
    </div>
</footer>
 </body>
</html>
