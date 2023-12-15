<?php
include 'function.php';
session_start();
error_reporting (0);

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Use prepared statement to avoid SQL injection
    $query = "SELECT * FROM products WHERE item_code = ?";
    
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $product_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);


        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }
} else {
    echo "Product ID is not provided in the URL.";
}



if (isset($_POST['cart'])) {
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $address = $_SESSION['address'];
    $itemName = $row['item_name'];
    $quantity = $_POST['quantity'];
    $itemPrice = $row['retail_price'];
    $date = date("Y-m-d");
    $total_price = $quantity * $itemPrice;
    $shipping_fee = $total_price * 0.1;
    $item_code = $_POST['item_code'];
    $image = $row['item_image'];
    $voucher = $_POST['voucher'];
    $message = ""; // Initialize message variable

    if ($quantity > $row['stocks']) {
        $message = "Desired quantity exceeds the current stocks.";
    } else {
        $checkVoucherQuery = "SELECT * FROM order_customer WHERE voucher = '$voucher' AND email = '$email'";
        $ended = $conn->query($checkVoucherQuery);

        if ($ended) {
            if ($ended->num_rows == 0 || $voucher == NULL) {
                // Voucher has not been used for this email address or voucher is NULL
                // Proceed with your order processing logic
                $output = $conn->query("SELECT * FROM voucher WHERE voucher_code = '$voucher'");

                if ($output) {
                    $voucher_row = $output->fetch_assoc();

                    if ($output->num_rows > 0 || $voucher == null) {
                        $discount = $voucher_row['percent'];
                        $currentDate = new DateTime();
                        $expiration_date = new DateTime($voucher_row['expiration_date']);

                        if ($expiration_date < $currentDate) {
                            $message = "The voucher is expired";
                        } else {
                            $total_fee = $shipping_fee + $total_price - $discount;
                            $sequel = "INSERT INTO order_customer (item_code, item_name, item_image, quantity, voucher, voucher_discount, price, total_price, shipping_fee, total_fee, firstName, lastName, email, phoneNumber, address, date, status) 
                                VALUES ('$item_code', '$itemName', '$image', '$quantity', '$voucher', '$discount', '$itemPrice', '$total_price', '$shipping_fee', '$total_fee', '$firstName', '$lastName', '$email', '$phoneNumber', '$address', '$date', 'Cart')";

                            if (mysqli_query($conn, $sequel)) {
                                echo "<script>window.location.href='cart.php';</script>";
                            } else {
                                $message = "Error adding item: " . mysqli_error($conn);
                            }
                        }
                    } else {
                        $message = "There is no such voucher!";
                    }
                }
            } else {
                // Voucher has been used for this email address
                $message = "Voucher has already been used for this email address.";
            }
        } else {
            // Error in query
            $message = "Error in query: " . $conn->error;
        }
    }

    // Output the message, you can handle it as needed (e.g., show it to the user)
    
}
if(isset($_POST['order'])){
   
    $_SESSION['itemName'] = $row['item_name'];
    $_SESSION['quantity'] = $_POST['quantity'];
    $_SESSION['itemPrice'] = $row['retail_price'];
    $_SESSION['date'] = date("Y-m-d");
    $_SESSION['total_price'] = $_SESSION['quantity'] * $_SESSION['itemPrice'];
    $_SESSION['shipping_fee'] = $_SESSION['total_price'] * 0.1;
    $_SESSION['total_fee'] = $_SESSION['shipping_fee'] + $_SESSION['total_price'];
    $_SESSION['item_code'] = $_POST['item_code'];
    $_SESSION['image'] = $row['item_image'];
    $_SESSION['voucher'] = $_POST['voucher'];
    if ( $_POST['quantity'] > $row['stocks']) {
        echo "<script>alert('Desired quantity exceeds the current stocks.');</script>";
    } else {
        // Assuming your database table has columns like id, item_name, item_description, item_quantity, item_price, and date
                echo "<script>window.location.href='checkout.php';</script>";
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
        h1 {
            text-align: center;
            font-family: 'Prata', serif; /* Set font to Prata */
            color: #453321;
            font-size: 60px;
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
        .custom-container {
            width: 175px;
            height: 305px;
            background-color: rgba(255, 255, 255, 0.3); /* Adjust the alpha value (0.0 to 1.0) for opacity */
            border-radius: 20px;
            border: 1px solid black;
            padding: 5px;
            margin: 15px 0px 5px 10px;
            box-shadow: 0 0 0px rgba(0, 0, 0, 100); /* Add a subtle box shadow for the raised effect */
            transition: transform 0.3s ease-in-out; /* Add a transition effect for a smoother animation */
        }
        
        .custom-container:hover{
            transform: scale(1.05); /* Enlarge the card on hover for a pop-out effect */
            box-shadow: 0 0 10px rgba(0, 0, 0, 100); /* Add a subtle box shadow for the raised effect */
        }
        .custom-container p{
            font-size: 10px;
            padding-left: 10px;
            text-align: center;
            font-weight: bold;
            height: 50px;
            width: 160px;
            font-size: 12px;
        }
        .custom-container img{
            border-radius: 20px;
            padding: 10px;
            height: 170px; 
            width:170px;
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
<h1 class="text-center">HOME</h1>
</div>
<br><br>
<form action="#" method="POST">
<input type="hidden" name="item_code" value="<?php echo $row['item_code']?>">
    <div class="container-fluid" style="font-family: raleway;">
        <div class="row">
            <div class="col-5"style="font-style: italic; padding:50px; margin:0px;">
            <img src="assets/<?php echo $row['item_image']; ?>" style="width: 30em;height:30em;">
            </div>
            <div class="col-7 text-start">
                <br><br><br>
                <h5 style="font-style: italic;";><?php echo $row['category'];?></h5><br>
                <div id="message" class="alert alert-danger" style="display: none;"></div>
                <h4> <?php echo $row['item_name']; ?></h4>
                <h3> ₱<?php echo $row['retail_price']; ?></h3>
                
                Quantity
    <button type="button" onclick="decreaseQuantity()"><i class="fa-solid fa-minus"></i></button>
    <input type="number" name="quantity" id="quantity" value="1" min="1" placeholder="1">
    <button type="button" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>
            <?php
        if ($row['stocks'] <= 0){
           
            ?>
            
            <h1> OUT OF STOCK</h1>
    
    <?php
        }else{ ?>
         
         <div style="margin-left: 4em; margin-right: 4em;">
         Voucher:
                    <input type="text" name="voucher" placeholder="xxxxxxx"><br>
            <button type="submit" name="cart" class="addition">Add to Cart</button>
            <button type="submit" name="order" class="addition">Buy Now</button>
        </div>

        <?php
        }
        ?>
        <h4>Product Details</h4>
        <?php echo $row['item_description']; ?>
            </div>
            
        </div>
        
    </div>
    </form>
<script>
    function decreaseQuantity() {
        var quantityInput = document.getElementById("quantity");
        var currentQuantity = parseInt(quantityInput.value);

        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

    function increaseQuantity() {
        var quantityInput = document.getElementById("quantity");
        var currentQuantity = parseInt(quantityInput.value);

        // You can set a maximum limit if needed
        // For example: if (currentQuantity < 10)
        quantityInput.value = currentQuantity + 1;
    }
</script>

<h1>Featured Products</h1>
<div class="text-lead text-center" style="color:grey;">Let your beauty shine through</div>
<?php
$category =$row['category'];
$display="SELECT * FROM products WHERE category='$category'";
$out=$conn->query($display);
?>

<div class="content">
<div class="row">
    <?php   while ($category_row = $out->fetch_assoc()) {?>
    <div class="col">
    <div class="custom-container">
        <a href="product.php?product_id=<?php echo $category_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
        <img src="assets/<?php echo $category_row["item_image"] ?>">
        <p class="text-lead"><?php echo $category_row["item_name"] ?></p><br>
        <p class="text-lead">₱<?php echo $category_row["retail_price"] ?></p>
        </a>
    </div>
    </div>
    <?php }?>
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
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <script>
    function decreaseQuantity() {
        var quantityInput = document.getElementById("quantity");
        var currentQuantity = parseInt(quantityInput.value);

        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

    function increaseQuantity() {
        var quantityInput = document.getElementById("quantity");
        var currentQuantity = parseInt(quantityInput.value);

        // You can set a maximum limit if needed
        // For example: if (currentQuantity < 10)
        quantityInput.value = currentQuantity + 1;
    }
    if ('<?php echo $message; ?>'.trim() !== "") {
    var messageDiv = document.getElementById('message');
    messageDiv.innerText = '<?php echo $message; ?>';
    messageDiv.style.display = 'block';
}
</script>
</body>
</html>