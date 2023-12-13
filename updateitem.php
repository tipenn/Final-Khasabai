<?php 
include 'function.php';
session_start();

    
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
        
        .addition{
            width: 90%;
            font-size: 30px;
            margin-top: 15px;
            background-color: #EAD7BB;
            border-radius: 20px;
            border-color: #113946;
        }
        .addition:hover{
            background-color: #BCA37F;
            border-radius: 20px;
            font-weight: bold;
        }
        .updation{
            width: 90%;
            font-size: 30px;
            margin-top: 15px;
            background-color: #EAD7BB;
            border-radius: 20px;
            border-color: #113946;

        }
        .updation:hover{
            background-color: #BCA37F;
            border-radius: 20px;
            font-weight: bold;

        }
        .deletion{
            width: 90%;
            font-size: 30px;
            margin-top: 15px;
            background-color: #EAD7BB;
            border-radius: 20px;
            border-color: #113946;

        }
        .deletion:hover{
            background-color: #BCA37F;
            border-radius: 20px;
            font-weight: bold;
        }
        
        .form-control{
            width: 500px;
            background-color: #a79585; 
            border-color: #C9BBAE;
            border-bottom: 2px solid black;
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
            padding: 20px;
            border: solid grey;
            border-radius: 10px;
            box-shadow: -10px -10px 10px grey;
            background-color: #C9BBAE;       
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
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
<h1 class="text-center">HOME</h1>
</div>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <br><br><br><br><br>
                <a href="add.php">
                <button type="submit" class="addition" >ADD</button></a>
                <a href="update.php">
                <button type="submit" class="updation">BACK</button></a>
                <a href="delete.php">
                <button type="submit" class="deletion">DELETE</button></a>
            </div>
            <div class="col">
                <div class="content">
                <center>
                <form action="" method="POST" enctype="multipart/form-data">
    <h1 class="text-center" style="color:#453321;">Change Product</h1>
    <hr>
    <?php
    // Retrieve information from URL parameters
    $itemCode = isset($_GET['item_code']) ? urldecode($_GET['item_code']) : '';
    $itemName = isset($_GET['item_name']) ? urldecode($_GET['item_name']) : '';
    $itemDescription = isset($_GET['item_description']) ? urldecode($_GET['item_description']) : '';
    $itemImage = isset($_GET['item_image']) ? urldecode($_GET['item_image']) : '';
    $itemQuantity = isset($_GET['stocks']) ? urldecode($_GET['stocks']) : '';
    $itemPrice = isset($_GET['retail_price']) ? urldecode($_GET['retail_price']) : '';
    ?>
<div id="message" class="alert alert-success" style="display: none;"></div>
<script>
        var message = "<?php echo isset($message) ? $message : ''; ?>";

if (message.trim() !== "") {
    var messageDiv = document.getElementById('message');
    messageDiv.innerText = message;
    messageDiv.style.display = 'block';
}
</script>

    <input type="hidden" class="form-control" name="item_code" value="<?php echo $itemCode; ?>" required><br><br>
    <h6> Item Name</h6>
    <input type="text" class="form-control" name="item_name" value="<?php echo $itemName; ?>" required><br><br>
    <h6> Item Description</h6>
    <input type="text" class="form-control" name="item_description" value="<?php echo $itemDescription; ?>" required><br><br>
    
    <h6> Item Stock</h6>
    <input type="number" class="form-control" name="item_stock" value="<?php echo $itemQuantity; ?>" required><br><br>
    <h6> Item Price</h6>
    <input type="number" class="form-control" name="price" value="<?php echo $itemPrice; ?>" required><br><br>
    <button type="submit" class="insert" name="change_item">Confirm</button><br><br>
</form>
<form method="post" enctype="multipart/form-data">
<h6> Item Image</h6>
    <input type="file" class="form-control" name="item_image" value="<?php echo $itemImage; ?>"><br><br>
    <button type="submit" name="upload">hah</button>
</form>
</center>

<?php
if (isset($_POST['change_item'])) {
    $itemUpdateName = empty($_POST['item_name']) ? $itemName : $_POST['item_name'];
    $itemUpdateDescription = empty($_POST['item_description']) ? $itemDescription : $_POST['item_description'];
    $itemQuantity = empty($_POST['item_stock']) ? $itemQuantity : $_POST['item_stock'];
    $itemUpdatePrice = empty($_POST['price']) ? $itemPrice : $_POST['price'];

    $query = "UPDATE products SET 
                item_name = '$itemUpdateName',
                item_description = '$itemUpdateDescription',
                stocks = '$itemQuantity',
                retail_price = '$itemUpdatePrice'
                WHERE item_code = $itemCode";

    $result = mysqli_query($conn, $query);
    $message="Item successfully change!";
    

    if ($result) {
        echo "<script>
                    window.location.href='cart.php';
                    alert('Item successfully added !!');
                    </script>";
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
if (isset($_POST['upload'])) {
    $itemUpdateImage = $_FILES['item_image']['name'];
        $upload = "UPDATE products SET         item_image = '$itemUpdateImage' WHERE item_code = $itemCode";
        $output = mysqli_query($conn, $upload);
        if ($output) {
            $message="Item successfully change!";
        }else {
            echo "Error updating record: " . mysqli_error($conn);
        }

}
?>

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
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>