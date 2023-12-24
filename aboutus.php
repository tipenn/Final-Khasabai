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
                background-color: rgba(250, 250, 243, 0.5); /* Light yellow with 90% opacity */
        }
         .bar{
            text-align: center;
            padding: 2px;
            margin-top: 2em;
            margin-right: 0px; 
            margin-left: 20em;
            
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
        .float{
            float: center;

        }
        .right{
            background-color: rgba(232, 225, 218, 0.5);
            text-align: justify;
            width: 600px;
            padding: 1em;
            position: absolute;
            top: 130%;
            left: 5.5%;
            font-size: 30px;
        }
        .left{
            float: left;
            margin-right: 30em;
            position: relative;
            margin-top: 2em;
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
        .slide {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: 200ms opacity ease-in-out;
        transition-delay: 200ms;
        }

        .slide > img {
        display: block;

        width: 100%;
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
        width: 50%;
        height: 600px;
        background-color: #F1E3E6;
        border-top:2px solid #cccccc;
        left: 50%;
        }
        .carousel > ul {
        margin-left:2em ;
        padding: 0;
        list-style: none;
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
        .text-top{
            background-color: rgba(232, 225, 218, 0.5);
            text-align: justify;
            width: 600px;
            padding: 1em;
            position: absolute;
            top: 220%;
            left: 31%;
            font-style: 30px;

        }
    </style>


 <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70">
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
        <img src="assets/abt2.png" style="width: 100%; height:800px; max-width: 100%; margin-top: -10em;">
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
        <div class="right">
       <p>Welcome to Khasabai. Khasabai serves as the best way of delivering a great user experience by deeply understanding what people want and love. We provided authentic products, descriptions, and inclusions of the products that are most helpful, relevant, and timely. That's why it makes users happy and loyal.
</div>
<div class="float">
        <img src="assets/aboutus.png" style="width: 100%; height:800px; max-width: 100%;">
        <h1 style="font-size: 48px; position: absolute; top: 18em; left: 13%; ">Know our story.</h1><br><br></div>
<div class="text-top">
    <p> Our mission is to transform the online shopping experience by providing a seamless journey that blends dependability, convenience, and tailored recommendations. We aim for customer satisfaction, so this website upholds complete transparency and ensures that every transaction is a secure and trustworthy experience. Our platform is designed to be your go-to destination for all your skincare shopping needs.</p>
</div>

        

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
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordToggle = document.getElementById('showPasswordToggle');
    
        showPasswordToggle.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
 </body>
</html>