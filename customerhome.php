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

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        
        .bar{
            text-align: center;
            padding: 0px;
            margin-top: 0;
            margin-right: 2em;

        }
        .bar li{	
            padding-left: 10px;
            font-size: 15px;
            font-family: Roboto;
        
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #E8E1DA;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
            margin:0px;
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
            font-family: Raleway;
            background-color: rgba(250, 250, 243, 0.4); /* Light yellow with 90% opacity */
            position:relative;

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
        
        .container p{
            font-size: 10px;
            padding-left: 10px;
            text-align: center;
            font-weight: bold;
            height: 50px;
            width: 160px;
            font-size: 12px;
        }
        .container img{
            border-radius: 20px;
            padding: 10px;
            height: 170px; 
            width:170px;
        }
        .scrollable-section {
            height: 600px; /* Adjust the height as needed */
            overflow-y: auto;
            border-radius: 30px;

        }
        
        button{
            width:40%;     
        }
        .search{
            height: 100px; 
            width: 400px;
        
        }
        .search .form-control {
            text-align: center;
            background-color: transparent;
            border-color: #453321;
            border-radius: 10px;
            width: 10px;
        }
       
.carousel {
  width: 70rem;
  height: 50rem;
  position: relative;

}

.carousel > ul {
  margin: 0;
  padding: 0;
  list-style: none;
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

.carousel-button {
  position: absolute;
  z-index: 2;
  background: none;
  border: none;
  font-size: 4rem;
  top: 50%;
  color: rgba(255, 255, 255, .5);
  cursor: pointer;
  border-radius: .25rem;
  padding: 0;
  background-color: rgba(0, 0, 0, .1);
  width: 20%;
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
    background-color: rgba(255, 192, 203, 0.5);
    width: 100%;
    box-shadow: 0 50px 50px #757676;
    border:2px solid #cccccc;
    border-radius: 30px;

}


.wrap{
    margin:0px;
    background-color: rgba(255, 192, 203, 0.5);
    box-shadow: 0 50px 50px #757676;
    border:2px solid #cccccc;
    font-size: 25px; 
    width:79%;
    border-radius: 30px;
    padding:0px 10px 3px 10px;
}
.head {
    transform: translateY(0); /* Baseline transform */
    transition: box-shadow 0.5s, transform 0.5s;
    padding: 3px 3px 3px 3px;
}

.head:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); /* Adjusted shadow on hover */
    transform: translateX(-5px); /* Adjusted translateY value */
    background: linear-gradient(to bottom, #f0f8ff, #fc94a4);
    background-color: rgba(252, 148, 164, 0.3);
}

    
    </style>


    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>homepage</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body class="bg-image" style="background-image: url('assets/bgcustomer.jpg'); background-size: cover;">
<nav class="navbar navbar-expand-sm" >
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
</div>
<!-- content -->
<center>
<section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev"><i class="fas fa-arrow-left" style="margin-right: 10px;"></i></button>
        <button class="carousel-button next" data-carousel-button="next"><i class="fas fa-arrow-right" style="margin-right: 10px;"></i></button>
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

<div style="position: relative; margin: 20em 0px 10em 0px">
  <img src="assets/cover.jpg" style="width: 100%; max-width: 100%; opacity: 0.7; border-radius: 10px;">
  <p style="font-family: Raleway; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-style: italic;color: white; font-size: 28px; font-weight: bold; text-align: center;">
  <span style="font-size: 32px;">Unveil Your Radiance with Khasabai:</span> <br>Elevate Your Beauty Rituals with Exquisite Beauty Products Crafted for Timeless Elegance.
</p></div></center>


<center>
<div class="search">
        <form method="GET" action="" class="search">
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholder="Search..."
                    style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit"
                        style="background-color: transparent; border-color: #453321; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-top-left-radius: 0; border-bottom-left-radius: 0;">
                        <span class="btn-label"><i class="fas fa-search" style="color: #5a4939;"></i></span>
                    </button>
                </div>
            </div>
        </form>
</div>
</center>

<div class="container">
    
<div class="wrap" >
    <div class="all head" style="display: inline-block;  cursor: pointer; margin: 0;"   onclick="toggleContent('all')">All</div>
    <div class="beauty-sets head" style="display: inline-block;  cursor: pointer; margin: 0;"   onclick="toggleContent('beauty_set_')">Beauty Sets</div>
    <div class="soap-scrub head" style="display: inline-block;  cursor: pointer; margin: 0;"   onclick="toggleContent('body_soap_')">Body Soup and Scrub</div>
    <div class="face-body head" style="display: inline-block;  cursor: pointer; margin: 0;" onclick="toggleContent('lotion_')">Face and Body Lotion</div>
    <div class="cosmetics head" style="display: inline-block;  cursor: pointer; margin: 0;" onclick="toggleContent('cosmetics_')">Cosmetics</div>
    <div class="skincare head" style="display: inline-block;  cursor: pointer; margin: 0; " onclick="toggleContent('skincare_')">Facial Skincare</div>
</div>  


<div id="allcategory" class="category allcategory" >
<div class="row">
            <div class="col" style="max-width: 100%;">
            <div class="scrollable-section" style="max-width: 100%;">
                <div class="content" >
                    <div class="row">
                        <?php
                        $result->data_seek(0); // Reset the internal pointer to the beginning
                        while ($row = $result->fetch_assoc()) {?>
                            <div class="col">
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
</div>
</div>



<div id="beauty_set_category" class="category beauty_set_category" >
            <div class="scrollable-section">
                <div class="content" style="width:100%;">
                    <div class="row">
                        <?php
                        while ($beauty_sets_row = $output->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $beauty_sets_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $beauty_sets_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $beauty_sets_row["item_name"]?></p><br>
                                    <p class="text-lead">₱<?php echo $beauty_sets_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
</div>



<div id="body_soap_category" class="category body_soap_category">
            <div class="scrollable-section">
                <div class="content" style="width:100%;">
                    <div class="row">
                        <?php
                        while ($body_soap_row = $outcome->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $body_soap_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $body_soap_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $body_soap_row["item_name"]?></p><br>
                                    <p class="text-lead">₱<?php echo $body_soap_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
</div>



<div id="lotion_category" class="category lotion_category" >
            <div class="scrollable-section">
                <div class="content" style="width:100%;">
                    <div class="row">
                        <?php
                        while ($lotion_row = $end->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $lotion_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $lotion_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $lotion_row["item_name"]?></p><br>
                                    <p class="text-lead">₱<?php echo $lotion_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
</div>


<div id="cosmetics_category" class="category cosmetics_category" >
            <div class="scrollable-section">
                <div class="content" style="width:100%;">
                    <div class="row">
                        <?php
                        while ($cosmetics_row = $last->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $cosmetics_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $cosmetics_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $cosmetics_row["item_name"]?></p><br>
                                    <p class="text-lead">₱<?php echo $cosmetics_row["retail_price"] ?></p>
                                    </a>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
</div>


<div id="skincare_category" class="category skincare_category">
            <div class="scrollable-section">
                <div class="content" style="width:100%;">
                    <div class="row">
                        <?php
                        while ($skincare_row = $follow->fetch_assoc()) {?>
                            <div class="col">
                                <div class="custom-container">
                                    <a href="product.php?product_id=<?php echo $skincare_row['item_code']; ?>" style="text-decoration: none; color: inherit;">
                                    <img src="assets/<?php echo $skincare_row["item_image"] ?>">
                                    <p class="text-lead"><?php echo $skincare_row["item_name"]?></p><br>
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