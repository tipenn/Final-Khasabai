<?php 
include 'function.php';
session_start();


if (isset($_POST['insert'])) {
    $itemName = $_POST['item_name'];
    $itemDescription = $_POST['item_description'];
    $itemImage = $_POST['item_image'];
    $itemQuantity = $_POST['stocks'];
    $itemPrice = $_POST['price'];
    $category = $_POST['category'];

        $query = "INSERT INTO products VALUES('', '$itemName', '$itemDescription','$category', '$itemImage', '$itemQuantity', '$itemPrice')";
        mysqli_query($conn, $query);
        echo "<script>alert('Item successfully added !!');</script>";
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
            width: 90%;
            font-size: 30px;
            margin-top: 15px;
            background-color: #EAD7BB;
            border-radius: 20px;
            border-color: #113946;
        }
        .insert:hover{
            background-color: #BCA37F ;
            border-radius: 20px;
            font-weight: bold;
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
        li{
            padding-right:15px; 
        }
        .option,option{
            background-color: #a79585; 
            border-color: #C9BBAE;
            border-bottom: 2px solid black;
            color:black;
            height: 50px;
            width: 220px;
            font-size: 20px;
            font-weight: 400;
            border-radius: 15px;
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
                <a href="adminpage.php">
                <button type="submit" class="addition" >BACK</button></a>
                <a href="update.php">
                <button type="submit" class="updation">UPDATE</button></a>
                <a href="delete.php">
                <button type="submit" class="deletion">DELETE</button></a>
            </div>
            <div class="col">
                <div class="content">
                <center>
                <form action="" method="POST">
                    <h1 class="text-center" style="color:#453321;">Add Product</h1>
                    <hr>
                    <input type="text"  class="form-control" name="item_name" placeholder="Item Name" required><br><br>
                    <input type="text"  class="form-control" name="item_description" placeholder="Item Description"><br><br>
                    <input type="file"  class="form-control" name="item_image" placeholder="Item Image" required><br><br>
                    <input type="number"  class="form-control" name="stocks" placeholder="Quantity" required><br><br>
                    <input type="number" class="form-control" name="price" placeholder="₱00.00" required><br><br>
                    <label for="category"><h3 style="font-style: italic;">Category: </h3></label>
                    <select id="category" class="option" name="category">
                    <option name="category" value="Beauty Sets">Beauty Sets</option>
                    <option name="category" value="Body Soap and Scrub">Body Soap and Scrub</option>
                    <option  name="category" value="Cosmetics">Cosmetics</option>
                    <option  name="category" value="Face and Body Lotion">Face and Body Lotion</option>
                    <option  name="category" value="Facial Skin Care">Facial Skin Care</option>
                    </select>
                    <br> <br>
                    <button type="submit" class="insert" name="insert">Add Product</button><br><br>
                </form>
                </center>
                </div>
            </div>
        </div>
    </div>

    
<br> <br>
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