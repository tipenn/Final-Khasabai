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
        $query = "INSERT INTO users VALUES('', '$firstName', '$lastName','$email', '$phoneNumber', '$address', '$password', '$typeUser')";
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
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add custom styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); /* Replace with your image URL */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
        }
        .navbar {
            border-top: 1px solid #ccc; /* Add a separator to the navbar */
            padding-left: 15px;
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
        a {
            text-decoration: none;
            color: black;
        }
        .divup{
            border: solid grey;
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
        a.hover{
            color:white;
        }
        .navbar a:hover{
            color: white;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup Page</title>
</head>
<body>
<nav class="navbar navbar-expand-sm">
  <img src="https://drive.google.com/uc?id=1LxX96O9wKtvMqpRrnqLbcAZkuTpM3DaH" alt="Logo" width="45">

    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <a href="aboutus.php" class="nav-link">
         <li class="nav-item text-center" >
         <i class="fas fa-home fa-lg"></i>
                About us
         </li>
        </a>
            <a href="aboutus.php" class="nav-link">
         <li class="nav-item text-center" >
         <i class="fas fa-info-circle fa-lg"></i>
                About us
         </li>
        </a>
            <a href="login.php" class="nav-link">
         <li class="nav-item text-center active" >
         <i class="fas fa-sign-in-alt fa-lg"></i>
                Log in
         </li>
        </a>
        </ul>
    </div>
    
    <div style="display: flex; align-items: center;">
</div>
    <div class="navbar-nav ml-auto">
    <div style="display: flex; align-items: center;">
        <div>
            <p style="margin: 0; font-size: 18px; font-weight: bold; color: #5B4E2C;">Khasabai</p>
            <p style="margin: 0; font-size: 12px; color: #5B4E2C;">Beauty Products</p>
        </div>
        <div style="margin-left: 10px;  padding-right:20px">
            <img src="https://drive.google.com/uc?id=1LxX96O9wKtvMqpRrnqLbcAZkuTpM3DaH" alt="Logo" width="45">
        </div>
    </div>
</div>

</nav>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-4 divup text-center">
                <br>
                <img src="https://drive.google.com/uc?id=1LxX96O9wKtvMqpRrnqLbcAZkuTpM3DaH">
                <h2> SIGN UP </h2>
                <br>
                <div class="container text-center col-sm-12">
                    <form action="" method="POST">
                        <input type="text" class="form-control" name="firstName" placeholder="First Name" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <input type="text" class="form-control" name="email" placeholder="Email" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <br>
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number(+63)" style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
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