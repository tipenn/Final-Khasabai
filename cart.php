<?php 
error_reporting(0);

include 'function.php';
session_start();
$email=$_SESSION['email'];
$sql = "SELECT * FROM order_customer WHERE email='$email' AND status='Cart'";
$result = $conn->query($sql);
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
        h1 {
            text-align: center;
            font-family: 'Prata', serif; /* Set font to Prata */
            color: #453321;
            font-size: 60px;
        }
        .scrollable-section {
            height: 500px; 
            width: 700px;
            margin-top: -3em;
            margin-left: 5em;
            margin-right: 5em;
            margin-bottom: -5em;
            padding:0px;
         
        }
        .items{
            height: 10%;
            width: 500px;
            float: left;
            margin-top: 2em;
            margin-left: 5em;
            background-color: #B8A588;
            border-color: grey;
            box-shadow: -2px -2px 5px 2px grey;

        }
        .items img{
            height: 200px;
            width: 250px;
            margin-top: 10px;
            margin-left: 10px;
            border-radius: 20px;
            padding: 10px;
        }
        .total{
            float:right;
            width: 400px;
            height: 300px; 
            margin-top: -30em;
            margin-right: -20em;
            padding: 1em;
            border: 1px solid gray;
            text-align: left;
        }
        
        .scrollable-section {
            height: 700px; /* Adjust the height as needed */
            overflow-y: auto;
            border: 1px solid #ddd; /* Optional: Add a border for better visibility */
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
        }
        .delete_cart{
            border: none;
            background-color: #C9BBAE;
        }
        .delete_cart:hover{
            color:red;     
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
            margin-top: -2em;
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
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
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
        <br><br>
<!-- content left side-->
<div class="container">
<br><br><br><br>
<div class="row">
    <div class="col-md-9">
<div class="scrollable-section">

    <?php 
            while ($row = $result->fetch_assoc()) { 
                ?>
    <div class ="col-md-4">
    <div class="items">
                <div class="col">
            <div class="content">
        <div class="row ">
            <div class="col">
                    <img src="assets/<?php echo $row['item_image']?>">
                </div>
                <div class="col" style="padding:40px">
                <p class="text-mute">
                <?php echo $row['id'] . $row['item_name']?> <br>₱<?php echo $row['price']?>
                <br>Quantity : <?php echo $row['quantity']?></p>
                <form method="POST">
                    <!-- Hidden input for item ID -->
                    <input type="hidden" name="item_code" value="<?php echo $row['id']; ?>">

                    <!-- Select button -->
                    <button type="submit" name="check_out<?php echo $row["id"]; ?>" class="check_out">
                        <i class="fas fa-check">SELECT</i>
                    </button>

                    <!-- Delete button -->
                    <p style="float: right;">
                        <button type="submit" class="delete_cart"  name="delete_cart" >
                            <i class="fa-solid fa-x delete_cart"></i>
                        </button>
                    </p>
                </form>
                <?php if (isset($_POST['check_out' . $row["id"]])) {
                    $id = $row['id'];
                    $query="SELECT * FROM order_customer where id= '$id' ";
                    $output = $conn->query($query);
                    
                }
                if (isset($_POST['delete_cart'])) {
                    $itemCode = $_POST['item_code'];
                
                    // Use prepared statement to delete the item
                    $query = "DELETE FROM order_customer WHERE id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('i', $itemCode);
                    $stmt->execute();
                    $stmt->close();

                    ?><script>
                        window.location.href='cart.php';
                    </script>
                        
                    <?php
                }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
    </div>
    <!-- content right side-->
        <div class="total">
        <br>
        
        <center><h6>
                <?php
if ($output === null) { ?>
    <h4>Please select a product</h4>
    <?php
}
 else {
    while ($row = $output->fetch_assoc()) {
        ?>        <form action="#" method="post">

        <center><h6>Mode of Payment: Cash on Delivery</h6></center>
        <hr style="color: #5B4E2C; height: 5px;">
        <div class="row">
            <div class="col">
                SUB TOTAL:
            </div>
            <div class="col">
                ₱<?php echo $row['total_price']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                SHIPPING FEE:
            </div>
            <div class="col">
                ₱<?php echo $row['shipping_fee']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Voucher Discount:
            </div>
            <div class="col">
                ₱<?php echo $row['voucher_discount'];
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
                $total = $row['shipping_fee'] + $row['total_price'] - $row['voucher_discount'];
                 echo $total ?></b>
            </div>
        </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" name="ship" class="ship" style="float: right; background-color:#835328; border-radius: 2em; width: 120px; height:30px; ">
            <h6>Check out</h6>
        </button>
        </form>
        <?php
       
    }}echo $total;
    if(isset($_POST['ship'])){
        $id = $_POST['id'];
        $mysequel = "UPDATE order_customer SET status = 'Ordered' WHERE id='$id'";
        if(mysqli_query($conn, $mysequel)) {
            echo "<script>alert('Item successfully ordered !!');</script>";
        } else {
            echo "<script>alert('Error updating item: " . mysqli_error($conn) . "');</script>";
        }
    }?>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>

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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>