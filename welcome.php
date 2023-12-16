<?php 
include 'function.php';
session_start();

//all
$sql="SELECT * FROM products;";
$result=$conn->query($sql);


$beauty="SELECT * FROM products where category = 'Beauty Sets'";
$output=$conn->query($beauty);

$soap_scrub="SELECT * FROM products where category ='Body Soap and Scrub'";
$outcome=$conn->query($soap_scrub);

$lotion="SELECT * FROM products where category ='Face and Body Lotion'";
$end=$conn->query($lotion);

$cosmetics="SELECT * FROM products where category ='Cosmetics'";
$last=$conn->query($cosmetics);

$skincare="SELECT * FROM products where category ='Facial Skin Care'";
$follow=$conn->query($skincare);



if (isset($_POST['order'])) {
    header('Location: ordercustomer.php'); // Provide the complete URL
    exit(); // Make sure to exit after a header redirect
}

if (isset($_POST['cart'])) {
    header('Location: cart.php'); // Provide the complete URL
    exit(); // Make sure to exit after a header redirect
}
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

if (!empty($searchQuery)) {
    // If there's a search query, modify the SQL query
    $sql = "SELECT * FROM products WHERE item_name LIKE '%$searchQuery%' OR item_description LIKE '%$searchQuery%';";
} else {
    // If no search query, retrieve all products
    $sql = "SELECT * FROM products;";
}


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
        .welcome{
            float: left;
            color: #5B4E2C;
            margin-top: -30em;
            margin-left:-20em;
        }
        .left{
            float: right;
            margin-left: 30em;
            margin-top:2em;
            position: relative;
        }
        .custom-container {
            width: 250px;
            height: 305px;
            padding: 5px;
            margin: 15px 0px 5px 10px;
            background-color:#F6F2EF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 100); /* Add a subtle box shadow for the raised effect */
            transition: transform 0.3s ease-in-out; /* Add a transition effect for a smoother animation */
        }
        
        .custom-container:hover{
            transform: scale(1.05); /* Enlarge the card on hover for a pop-out effect */
            box-shadow: 0 0 10px rgba(0, 0, 0, 100); /* Add a subtle box shadow for the raised effect */
        }
        .custom-container img{
            padding: 10px;
            height: 170px; 
            width:210px;
        }
        .custom-container p{
            padding-left: 10px;
            text-align: center;
            font-weight: bold;
            height: 40px;
            width: 220px;
            font-size: 15px;
            margin-bottom: 1px;
    
            
        }        
        button{
            width:40%;     
        }

        .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: 200ms opacity ease-in-out;
        transition-delay: 200ms;
        }

        .slide > img {
        display: block;
        width: 50%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        }

        .slide[data-active] {
        opacity: 1;
        z-index: 1;
        transition-delay: 0ms;
        }
        
        .carousel {
        width: 100%;
        height: 700px;
        background-color: #F1E3E6;
        border-top:2px solid #cccccc;
        align: center;

        }
        .carousel > ul {
        margin: 0;
        padding: 0;
        list-style: none;
        }
        .carousel-button {
        position: absolute;
        z-index: 2;
        background: none;
        border: none;
        font-size: 3rem;
        top: 50%;
        color: black;
        cursor: pointer;
        border-radius: .25rem;
        padding: 0;
        width: 6%;
        }

        .carousel-button:hover{
        color: white;
        background-color: rgba(0, 0, 0, .1);
        }

        .carousel-button:focus {
        outline: 1px solid black;
        }

        .carousel-button.prev {
        left: 1rem;
        }
        .carousel-button.next {
        right: 1rem;
        }

        .lotion_category, 
        .beauty_set_category, 
        .body_soap_category, 
        .cosmetics_category, 
        .skincare_category {
            display: none;
    
        }
        .category{
            width: 100%; 
            padding-left:2em;
            align: left;
            
        }
        .content{
            float: center;  
            margin-top: -1em;
            background-color:#F6F2EF;
            box-shadow:  -2px 2px grey;
            width: 90%;
            border:2px solid #cccccc;
            height: auto;
        }
        .fit{
            background-image: url("https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu");
            width: 100%;
            align: center;

        }
        .wrap{
            font-size: 25px; 
            text-align: center;
            width:100%;
            margin-top: 5em;
            padding:10px 10px 3px 10px;
            font-family: Neuzeit S LT W01 Book;
        }
        .head {
            transform: translateY(0); /* Baseline transform */
            transition: box-shadow 0.5s, transform 0.5s;
            padding: 3px 3px 3px 3px;
            color: #383633;
            
        }

        .head:hover{
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); /* Adjusted shadow on hover*/
            transform: translateX(-5px); /* Adjusted translateY value */
            background: linear-gradient(to bottom, #F6EEE3, #E3CCCC);
        }
        h1 {
            font-family: 'Prata', serif;
            font-size: 130px;
            text-align: center;
        }
        h2 {
            font-family: 'Raleway', sans-serif;
            font-size: 45px;
            text-align: left;
            color: #5B4E2C;
            margin-top: -25px;
        }
        h3 {
            font-family: 'Raleway', sans-serif;
            font-size: 30px;
            text-align: left;
            font-style: italic;
            margin-top: -70px;
        }

        .ladder-text {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .ladder-text span {
            display: inline-block;
            margin-bottom: 5px;
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
           margin-left: 9em;
           position: relative;
    
        }
        .scroll{
            overflow-y: scroll;
            max-height: 50em;
        }
        .card{
            background-color: rgba(232, 225, 218, 0.5);
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
        <a href="welcome.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Home
        </li>
        </a>
        <a href="aboutus.php" class="nav-link">
        <li class="nav-item text-center" >
           
                About Us
        </li>
        </a>
        <a href="log.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Login
        </li>
        </a>
        <a href="customerprofile.php" class="nav-link">
         <li class="nav-item text-center" >
           
                Profile
         </li>
        </a>
        <a href="cart.php" class="nav-link">
         <li class="nav-item text-center">
        
                Cart
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
        
        <h1 style="font-size: 70px;">Unveil Your Radiance with Khasabai</h1><br><br>
        <p style="font-family: 'raleway', serif; position: absolute; top: 32%; left: 16%; transform: translate(-10%, -40%); color: #453321; font-size: 28px; font-weight: bold; font-style: italic; text-align: center;">
  <span style="font-size: 32px;"><br>Elevate Your Beauty Rituals with Exquisite Beauty Products Crafted for Timeless Elegance.</span> 
  </p>
    <br><br><br>
 <!-- content -->
<center>
  <!-- <p style="font-family: 'raleway', serif; position: absolute; top: 70%; left: 60%; transform: translate(-10%, -40%); color: #453321; font-size: 28px; font-weight: bold; font-style: italic; text-align: center;">
  <span style="font-size: 32px;"><br>Elevate Your Beauty Rituals with Exquisite Beauty Products Crafted for Timeless Elegance.</span> 
  </p> -->

<div class="content">
<section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev"><i class="fa-solid fa-angle-left" style="margin-right: 10px;"></i></button>
        <button class="carousel-button next" data-carousel-button="next"><i class="fa-solid fa-angle-right" style="margin-right: 10px;"></i></button>
        <ul data-slides>
    <?php
    $result->data_seek(0); // Reset the internal pointer to the beginning
    $firstSlide = true; // Flag to identify the first slide

    while ($row = $result->fetch_assoc()) {
        $activeAttribute = $firstSlide ? 'data-active' : ''; // Add 'data-active' attribute to the first slide
        ?>
        <li class="slide" <?php echo $activeAttribute; ?>>
            <img src="assets/<?php echo $row["item_image"] ?>" alt="Product">
        </li>
        <?php
        $firstSlide = false; // Set the flag to false after the first slide
    }
    ?>
</ul>
    </div>
</section>

<script>
    function showNextSlide() {
        const slides = document.querySelector('[data-slides]');
        const activeSlide = slides.querySelector('[data-active]');
        const nextSlide = activeSlide.nextElementSibling || slides.firstElementChild;

        // Remove data-active from the current active slide
        delete activeSlide.dataset.active;

        // Add data-active to the next slide or the first slide if there is no next slide
        if (nextSlide) {
            nextSlide.dataset.active = true;
        } else {
            // If there is no next slide, go back to the first slide
            slides.firstElementChild.dataset.active = true;
        }
    }

    // Set interval to show the next slide every 1000 milliseconds (1 second)
    setInterval(showNextSlide, 5000); // Change the interval time according to your preference
</script>

<div class="left">
  <img src="assets/bg.png" style="width: 100%; max-width: 100%; border-radius: 10px;">
  <div class="welcome">
    <div class="text-start">
    <h1>SKINCARE</h1>
    <hr style="width: 55%;  margin-bottom: 100px; background:#4F3B33; height: 2px;">
    <h3 class="ladder-text">
        <span>Explore the best new skincare products to</span>
        <span>manage tonal imbalances on your skin, </span>
        <span>dryness, sensitivity and more.</span>
    </h3>
    </div> 
    </div>
    </div>
    <hr style="width: 100%; margin-bottom: -8em; background:#4F3B33; height: 3px;">
<div class="wrap" >
    <div class="row">
    <div class="col-1">
    <div class="all head" style="display: inline-block;  cursor: pointer; margin: 0;"   onclick="toggleContent('all')" >All</div></div>
    <div class="col-2">
    <div class="beauty-sets head" style="display: inline-block;  cursor: pointer; margin-left: 1em;"   onclick="toggleContent('beauty_set_')">Beauty Sets</div></div>
    <div class="col-3">
    <div class="soap-scrub head" style="display: inline-block;  cursor: pointer;margin-left: 1em;"   onclick="toggleContent('body_soap_')">Body Soup and Scrub</div></div>
    <div class="col-3">
    <div class="face-body head" style="display: inline-block;  cursor: pointer; margin-left: 1em;" onclick="toggleContent('lotion_')">Face and Body Lotion</div></div>
    <div class="col-1">
    <div class="cosmetics head" style="display: inline-block;  cursor: pointer; margin-left: 1em;" onclick="toggleContent('cosmetics_')">Cosmetics</div></div>
    <div class="col-2">
    <div class="skincare head" style="display: inline-block;  cursor: pointer; margin-left: 1em; " onclick="toggleContent('skincare_')">Skincare</div></div>
    </div>
</div>   

<div class="card card-body scroll">
<div id="allcategory" class="category allcategory" >
<div class="row">
            <div class="col" style="max-width: 100%;">
                    <div class="row">
                        <?php
                        $result->data_seek(0); // Reset the internal pointer to the beginning
                        while ($row = $result->fetch_assoc()) {?>
                            <div class="col-3">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $row["item_name"]?></p><br>
                                    <p class="text-lead">₱<?php echo $row["retail_price"] ?></p>
                                    </a>
                                </div>
                                        
                            </div>
                        <?php
                        } ?>
                    </div>
                
        </div>
    
</div>
</div>

<div id="beauty_set_category" class="category beauty_set_category" >
            <div class="scrollable-section">
                    <div class="row">
                        <?php
                        while ($beauty_sets_row = $output->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $beauty_sets_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $beauty_sets_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $beauty_sets_row["item_name"] ?></p><br>
                                    <p class="text-lead">₱<?php echo $beauty_sets_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>


<div id="body_soap_category" class="category body_soap_category">
            <div class="scrollable-section">
                    <div class="row">
                        <?php
                        while ($body_soap_row = $outcome->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $body_soap_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $body_soap_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $body_soap_row["item_name"] ?></p><br>
                                    <p class="text-lead">₱<?php echo $body_soap_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>

<div id="lotion_category" class="category lotion_category" >
            <div class="scrollable-section">
                    <div class="row">
                        <?php
                        while ($lotion_row = $end->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $lotion_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $lotion_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $lotion_row["item_name"] ?></p><br>
                                    <p class="text-lead">₱<?php echo $lotion_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>

<div id="cosmetics_category" class="category cosmetics_category" >
            <div class="scrollable-section">
                    <div class="row">
                        <?php
                        while ($cosmetics_row = $last->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $cosmetics_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $cosmetics_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $cosmetics_row["item_name"] ?></p><br>
                                    <p class="text-lead">₱<?php echo $cosmetics_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>

<div id="skincare_category" class="category skincare_category">
            <div class="scrollable-section">
                    <div class="row">
                        <?php
                        while ($skincare_row = $follow->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $skincare_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $skincare_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $skincare_row["item_name"] ?></p><br>
                                    <p class="text-lead">₱<?php echo $skincare_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
                    

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
    <script>

const buttons = document.querySelectorAll("[data-carousel-button]")
    buttons.forEach(button => {
    button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]")

    const activeSlide = slides.querySelector("[data-active]")
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0

    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})

function toggleContent(element) {
    document.getElementById('allcategory').style.display = 'none';
    document.getElementById('beauty_set_category').style.display = 'none';
    document.getElementById('body_soap_category').style.display = 'none';
    document.getElementById('lotion_category').style.display = 'none';
    document.getElementById('cosmetics_category').style.display = 'none';
    document.getElementById('skincare_category').style.display = 'none';
    document.getElementById(element + 'category').style.display = 'block';
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
 
</body>
</html>