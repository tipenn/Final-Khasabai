<?php
include 'function.php';
if (isset($_POST['submit'])) {
$email = $_POST['email'] ;
$sql="SELECT * FROM users WHERE email= '$email';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentPassword = $row['password'];
}else{
    $errorMessage = "Email not found";
}
require 'C:\xampp\htdocs\GitHub\Final-Khasabai\Mailer\PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='khasabai337@gmail.com';
$mail->Password='yjuv ymrx cgnt ojvy';

$mail->setFrom('khasabai337@gmail.com', 'Here is your password');
$mail->addAddress($_POST["email"]);

$mail->isHTML(true);
$mail->Subject="Password Reset";
$mail->Body="<p>Dear user, </p> Your current password is <h2>" . $currentPassword . "</h2><br><h3> Upon logging in, please remember to change your password for added security. </h3>
<br><br>
";
$mail->send();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
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
        footer{
            background-color:#514F4D ;
            color: white;
            bottom: 0;
            left:0;
            width:100%;
            height: 100px;
            position: fixed;
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
        
        .divup{
            align: center;
            border: solid grey;
            border-radius: 30px;
            box-shadow: -10px -10px 10px grey;
            background-color: #E8E1DA;
        }
        
        .divdown{
            border-top: 1px solid white;
            border-radius: 5px;
            background-color: white;
            box-shadow: 5px 10px 15px white;
            margin-left: -17px;
            margin-right: -18px;
        }
        .buttoncst{
            width: 90%;
            border-radius: 100px;
            background-color: #AC8351;
        }
        .buttoncst:hover {
            background-color: #835328;
            color: white;
        }
       
        .form-control {
            text-align: center;
            background-color: transparent;
            border-bottom: 3px solid #453321;
            border-radius: 10px;
            width: 90%;
            background-color:rgb(239, 232, 227, 0.9);
        }
        .button{
            border-radius: 100px;
            background-color:#D8CEC2  ;
            width: 60%;
            font-size: 20px;
        }
        .button :hover{
            background-color:black ;
        }
</style>


</head>
<body class="bg-image" style="background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); background-size: cover;">
<nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70"></div>
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
    <br><br><br><br>
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-4 offset-md-3 offset-sm-2 divup">
        <br>
                <h2 class="text-center">
                <img src="assets/logo.png" alt="Logo" width="70" height="70"> </h2>
                <center><h2>Forget Password</h2></center>
                <hr>
                <div class="container text-center">

                <form action="#" method="post">
    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

        <label for="email" > </label>
    <center>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
    </center>
        <br>
        <button type="submit" name="submit" class="button">Reset Password</button>
    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    </div>
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
         var error = <?php echo isset($errorMessage) ? json_encode(htmlspecialchars($errorMessage)) : "''"; ?>;
    if (error.trim() !== "") {
        var errorDiv = document.getElementById('errorMessage');
        errorDiv.innerHTML = error;
        errorDiv.style.display = 'block';
    }
    </script>

</body>
</html>