<?php
include 'function.php';
session_start();
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
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #E8E1DA;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
         /* ADD */
        }
        .navigation{
            background-color: transparent;
            }
        .navbar a:hover {
            background: linear-gradient(to bottom, transparent 0%, transparent 80%, #83776c 80%, #83776c 100%);
        }
        .navbar {
            padding-left: 15px;
            margin: 0px;
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
        .details{
            background-color: #C5B9AF;
            width: 70%;
            border-radius: 3em;
            padding: 2em;
            margin-bottom: 3em;

        }
        h1 {
            font-size: 50px; 
            font-family: 'Prata', sans-serif; 
            color:#453321; 
            letter-spacing: 3px;
        }

        p.small {
            line-height: 1.4;
            font-size: 20px; 
            font-family: Raleway;
            color: #231F20; 
            text-align: justify;
            letter-spacing: 3px;
            padding-left: 1em;
            padding-right: 1em;
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
            <br>
            <hr style= "margin-top: 10px; margin-left: 15px; width: 850px; background:#4F3B33; height: 2px;"> </hr>
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
    <br>
<center>
<div class="details">
            <h1> ABOUT US </h1>
            <hr>
            <p class="small"> The primary objective of this study is to assess the feasibility, benefits, and limitations of implementing an Online Skincare Purchasing System within Khasabai's enterprise procurement framework. It seeks to provide a comprehensive understanding of the potential impact of this digital approach on skincare product acquisition, aiming to guide Khasabai in making informed decisions.
            <br>
            <br> Furthermore, the study aims to analyze the current skincare procurement processes at Khasabai, identify the organization's skincare needs, and evaluate the technical infrastructure to determine its readiness for the adoption of an online system. By exploring the capabilities and limitations of this digital transformation, the study equips Khasabai with insights that will aid in optimizing skincare procurement processes, enhancing vendor relations, and ultimately ensuring the consistent delivery of high-quality skincare products to its customers.
    </p>
    </div>

    </center>
    </div>
    </div>
    </div>
<br>

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