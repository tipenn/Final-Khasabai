<?php
require 'function.php';

if (isset($_POST['signup'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $typeUser = $_POST['typeUser'];

    if ($_POST['password'] === $_POST['confirmPassword']) {
        $query = "INSERT INTO users VALUES('', '$firstName', '$lastName','$email','', '$phoneNumber', '$address', '$password', '$typeUser')";
        mysqli_query($conn, $query);
        header("Location:login.php");
        echo "<script>alert('Account successfully created!!');</script>";

    } else {
        echo "<script>alert('Password do not match');</script>";
    }
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
                background-color:rgb(239, 232, 227, 0.9); /* Light yellow with 90% opacity */
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
        .buttoncst:hover {
            background-color: #835328;
            color: white;
        }
        .buttoncst{
            width: 90%;
            border-radius: 100px;
            background-color: #AC8351;
            height:40px;
        }
        .divup{
            border: solid grey;
            width: 500px;
            border-radius: 30px;
            box-shadow: -10px -10px 10px grey;
            background-color: #E8E1DA;
        }
        .custom-bg-color {
            background-color: #FAFAF3;
        }
        .divdown{
            border-top: 1px solid white;
            border-radius: 5px;
            background-color: white;
            box-shadow: 5px 10px 15px white;
            margin-left: -17px;
            margin-right: -18px;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
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
            <img src="assets/logo.png" alt="Logo" width="70" height="70"> </div>
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
        <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-4 offset-md-3 offset-sm-2 divup">
        <br>
                <h2 class="text-center">
                <img src="assets/logo.png" alt="Logo" width="70" height="70">  </h2>
                <p style="margin: 0;  font-size: 25px; color:#5B4E2C ; font-family: Roboto; font-weight: bold; text-align: center;">SIGN UP</p>
                <hr>
                <div class="container text-center col-sm-12">
                    <form action="" method="POST">
                        <input type="text" class="form-control" name="firstName" placeholder="First Name" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <input type="text" class="form-control" name="email" placeholder="Email" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" maxlength="11"style="background-color: #EDE9E8; border-bottom: 1px solid black;" pattern="[0-9]+" title="Please enter only numbers" required>
                        <br>
                        <input type="text" class="form-control" name="address" placeholder="Address" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                            <button class="btn btn-outline-secondary" type="button" id="showPasswordToggle">
                            <i class="toggle-password fas fa-eye" onclick="togglePassword()"></i>                               </button>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                            <button class="btn btn-outline-secondary" type="button" id="showConfirmPasswordToggle">
                            <i class="toggle-password fas fa-eye" onclick="togglePassword()"></i>                               </button>
                        </div>
                        <br>
                        <h5 class="text-start">Type of user:</h5>
                        <div class="row">
                            <div class="col">
                                <input type="radio" name="typeUser" id="customer" value="Customer" required>
                                <label for="customer">Customer</label>
                            </div>
                            <div class="col">
                                <input type="radio" name="typeUser" id="kha" value="Kha">
                                <label for="kha">Kha</label>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="signup" class="buttoncst">Sign up</button>
                        <p class="text-muted" style="font-size: 10px;">Already have an account?</p>
                        <a href="login.php" style="text-decoration: none; color: black">Log in</a>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

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
    <!-- Include Bootstrap 5 JavaScript at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const passwordInput = document.getElementById('password');
            const showPasswordToggle = document.getElementById('showPasswordToggle');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const showConfirmPasswordToggle = document.getElementById('showConfirmPasswordToggle');

            showPasswordToggle.addEventListener('click', function () {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });

            showConfirmPasswordToggle.addEventListener('click', function () {
                if (confirmPasswordInput.type === 'password') {
                    confirmPasswordInput.type = 'text';
                } else {
                    confirmPasswordInput.type = 'password';
                }
            });
        });
    </script>
</body>
</html>