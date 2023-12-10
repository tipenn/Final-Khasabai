<?php
include 'function.php';
session_start();


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

        // Now $row contains the information of the selected item
        // You can access individual fields like $row['item_name'], $row['price'], etc.

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle the case where the statement preparation failed
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }
} else {
    // Handle the case where product_id is not set in the URL
    echo "Product ID is not provided in the URL.";
}

if (isset($_POST['order'])) {
    
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $address = $_SESSION['address'];
    $itemName = $row['item_name'];
    $itemDescription = $row['item_description'];
    $quantity = $_POST['quantity'];
    $itemPrice = $row['retail_price'];
    $date = date("Y-m-d");
    $total_price = $quantity * $itemPrice;
    $shipping_fee = $total_price * 0.1;
    $total_fee = $shipping_fee + $total_price;
    $item_code = $_POST['item_code'];

    // Check if the quantity exceeds available stock
    if ($quantity > $row['stocks']) {
        echo "<script>alert('Desired quantity exceeds the current stocks.');</script>";
    } else {
        // Assuming your database table has columns like id, item_name, item_description, item_quantity, item_price, and date
        $query = "INSERT INTO order_customer (item_code, item_name, item_description, quantity, price, total_price, shipping_fee, total_fee, firstName, lastName, email, phoneNumber, address, date) 
              VALUES ('$item_code','$itemName', '$itemDescription', '$quantity', '$itemPrice', '$total_price','$shipping_fee','$total_fee', '$firstName', '$lastName', '$email', '$phoneNumber', '$address', '$date')";
        $sequence="UPDATE products SET stocks=stocks-$quantity where item_code";


        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Item successfully ordered !!');</script>";
        } else {
            echo "<script>alert('Error adding item: " . mysqli_error($conn) . "');</script>";
        }
        if(mysqli_query($conn, $sequence)) {
        } else {
            echo "<script>alert('Error adding item: " . mysqli_error($conn) . "');</script>";
        }
    }
}

if(isset($_POST['cart'])){
    header('Location: cart.php');

    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $address = $_SESSION['address'];
    $itemName = $row['item_name'];
    $itemDescription = $row['item_description'];
    $quantity = $_POST['quantity'];
    $itemPrice = $row['retail_price'];
    $date = date("Y-m-d");
    $total_price = $quantity * $itemPrice;
    $shipping_fee = $total_price * 0.1;
    $total_fee = $shipping_fee + $total_price;
    $item_code = $_POST['item_code'];
    $image=$row['item_image'];

    // Check if the quantity exceeds available stock
    if ($quantity > $row['stocks']) {
        echo "<script>alert('Desired quantity exceeds the current stocks.');</script>";
    } else {
        // Assuming your database table has columns like id, item_name, item_description, item_quantity, item_price, and date
        $sequel = "INSERT INTO order_customer (item_code, item_name, item_description, item_image, quantity, price, total_price, shipping_fee, total_fee, firstName, lastName, email, phoneNumber, address, date, status) 
              VALUES ('$item_code','$itemName', '$itemDescription','$image', '$quantity', '$itemPrice', '$total_price','$shipping_fee','$total_fee', '$firstName', '$lastName', '$email', '$phoneNumber', '$address', '$date', 'Cart')";
              if (mysqli_query($conn, $sequel)) {
                echo "<script>alert('Item successfully ordered !!');</script>";
              }else {
                echo "<script>alert('Error adding item: " . mysqli_error($conn) . "');</script>";
            }
}}
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
        .updation{
            width: 90%;
            background-color: #A19284;
            font-size: 30px;
            border-color: #AB7B5B;
            margin-top: 20px;
            color: white;

        }
        .updation:hover{
            background-color: #C9BBAE;
            color: black;

        }
        .deletion{
            width: 90%;
            background-color: #A19284;
            font-size: 30px;
            border-color: #AB7B5B;
            margin-top: 20px;
            color: white;
        }
        .deletion:hover{
            background-color: #C9BBAE;
            color: black;
        }
        
        
        .insert{
            width: 200px;
            background-color: #AC8351;
            font-size: 30px;
            margin-top: 20px;
            color: white;
        }
        .insert:hover{
            background-color: #A19284;
            color: #eceae8;
        }
        .content{
            border: solid grey;
            border-radius: 10px;
            box-shadow: -10px -10px 10px grey;
            background-color: #C9BBAE;  
            height:1000px;
            width:1300px     
        }
        
        .content img{
            height:500px;
            width:1300px;
            border-radius: 10px;

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
<div class="container">
    <div class="row">
        <div class="col">
            <div class="content">
                <center>
                <form action="" method="POST">
    <img src="assets/<?php echo $row['item_image']; ?>">
    <input type="hidden" name="item_code" value="<?php echo $row['item_code']?>">
    <h3 class="text-center"> <?php echo $row['item_name']; ?></h3>
    <h3 class="text-center"> <?php echo $row['item_description']; ?></h3>
    <h3 class="text-center"> ₱<?php echo $row['retail_price']; ?></h3>
    <hr>

    <h3 class="text-start" > Quantity
        <button type="button" onclick="decreaseQuantity()"><i class="fa-solid fa-minus"></i></button>
        <input type="number" name="quantity" id="quantity" value="1" min="1" placeholder="1">
        <button type="button" onclick="increaseQuantity()"><i class="fa-solid fa-plus"></i></button>
    </h3>
        <?php
        if ($row['stocks'] <= 0){
           
            ?>
            
            <h1> OUT OF STOCK</h1>
    
    <?php
        }else{ ?>
         
        <div style="margin-left: 4em; margin-right: 4em;">
        <button type="submit" name="cart" class="addition">Add to Cart</button>
        <button type="submit" name="order" class="addition">Buy Now</button>
        
    </div>
        <?php
        }
        ?>
    
</form>
                </center>
            </div>
        </div>
    </div>
</div>

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

</body>
</html>