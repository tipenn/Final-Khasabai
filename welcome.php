<?php
include 'function.php';
session_start();

if (isset($_POST['shopnow'])) {
            header("Location: log.php");
            exit();
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

         /* ADD */
        .navigation{
            background-color: transparent;
            }
        .navbar a:hover {
            background: linear-gradient(to bottom, transparent 0%, transparent 80%, #83776c 80%, #83776c 100%);
        }
        .navbar {
            padding-left: 15px;
            margin: 0px;
    /* add */
       
        }
        .bar{
            text-align: center;
            padding: 0px;
            margin-top: 0;
            

        }
        .bar li{	
            padding-left: 1.5em;
            font-size: 15px;
            font-family: Roboto;
        
        }

    /* center container */
        .divup{
            border: solid grey;
            border-radius: 5rem !important;
            box-shadow: -6px -6px 6px gray;
            background-color:rgb(232, 225, 218);
            margin-top: 2em;
            padding: 1em;
        }
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            background-repeat: no-repeat;
            background-attachment: fixed;
	    }
    /*input with search icon */

        .search .form-control {
            padding: 0;
            text-align: center;
            background-color: transparent;
            border-color: #453321;
            border-right: none;
            border-radius: 10px;
            margin-left: 3.8em;
            margin-top: 0;
           
        }

        .search .form-control-feedback {
            position: fixed;
            z-index: 2;
            width: 1px;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            
        }

        .left{
            float: right;
            position: fixed;
            margin-top: 7em;
            margin-left: 35em;

        }
        .buttoncst:hover {
            background-color: #835328;
            color: white;
        }
        .buttoncst{
            width: 15%;
            border-radius: 100px;
            background-color: #AC8351;
            height:40px;
            margin-top: 3em;

        }
        .container{
            float: left;
            margin-left: 200px;
            color: #5B4E2C;
        }
        h1 {
            font-family: 'Prata', serif;
            font-size: 130px;
            text-align: left;
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
            background-color: #A19284;
            color: white;
            position:fixed;
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


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khasabai</title>
</head>
  <body class="bg-image" style="background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); background-size: cover;">
  
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm">
   
    <div class="bar">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="welcome.php" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="aboutus.php" class="nav-link active">
                        About Us
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="login.php" class="nav-link active">
                        Log in
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="log.php" class="nav-link active">
                        Cart
                    </a>
                </li>
            </ul>
        </div>
    </div>
   
     <!-- upper right side (nav bar) -->
     <div style="display: flex; align-items: right;">
     <br><br>
            <hr style= "margin-top: 20px; margin-left: 15px; width: 850px; background:#4F3B33; height: 2px;"> </hr>
    </div>
        <br>
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ml-auto">
        <div style="display: flex; align-items: center;">
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: right;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: right;">BEAUTY PRODUCTS</p>
            </div>
                
            <div style="margin-left: 10px;  padding-right:10px; padding-top: 6px;">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
        </div>
    </nav>
    </div>

<!-- second navbar (search btn)-->
<nav class="navbar navbar-expand-sm">
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                <button class="btn btn-secondary" type="button" style="background-color: transparent; border-color: #453321; border-left: none; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 0; border-top-left-radius: 0;">
                <span class="btn-label"><i class="fa-solid fa-magnifying-glass" style="color: #5a4939; "></i></span></button>
                </button>
            </div>
        </div>
    </div>      
 </nav>

 <div class="left">
<img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/403766284_1328901347753917_8860567337254638574_n.png?_nc_cat=105&ccb=1-7&_nc_sid=510075&_nc_eui2=AeGy4R7wp-vm29O8QGkHXQPzQdq5Q-qaJgpB2rlD6pomCoiLz5bFzAHw4Vl1Hqrei0OvLdInbzDh1wL5K-rzJbPd&_nc_ohc=6sBGd7adkqcAX9OO9UB&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRnQwCGPeXgcfZdWF9oUc2bPxm5mnpw2UpZkXGY1g2eVQ&oe=658B0CFE" width="900px" height="600px" >
    </div>
    <div class="container">
    <h1>SKINCARE</h1>
    <h2>HEALTHY SKIN, HEALTHY LIFE</h2>
    <hr style="width: 55%;  margin-bottom: 100px; background:#4F3B33; height: 2px;">
    <h3 class="ladder-text">
        <span>Explore the best new skincare products to</span>
        <span>manage tonal imbalances on your skin, </span>
        <span>dryness, sensitivity and more.</span>
    </h3>
    <form method="post" action="">
    <button type="submit" name="shopnow" class="buttoncst">Shop Now</button>
    </form>
</div>
</div>

<!-- footer -->
<footer class="container-fluid">
    <div class="row">
        <div class="col-6 text-left">
            <p class="text-lead" style="font-size: 15px; padding-top:20px;">2023©Khasabai | <a href="" style="color: white;"> Privacy Policy</a></p>
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