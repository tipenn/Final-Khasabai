<?php
include 'function.php';
session_start();

if (isset($_POST['submit_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
        if ($result->num_rows > 0) {
                if ($row["typeUser"] == "Customer") {
                    header("Location: customerhome.php");
                } else if ($row["typeUser"] == "Kha") {
                    header("Location: rider.php");
                } else {
                    header("Location: adminpage.php");
                }

                $_SESSION['id'] = $row['id'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phoneNumber'] = $row['phoneNumber'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['password'] = $row['password'];
            } else {
                // Password is incorrect
                $error = "Incorrect email or password";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 


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
        .divup{
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
        
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
         /* ADD */
        }
        .navigation{
            background-color: transparent;
        }
        .navbar {
            padding-left: 15px;
            margin: 0px;
        }
        .navbar a:hover {
            background: linear-gradient(to bottom, transparent 0%, transparent 80%, #83776c 80%, #83776c 100%);
         /*input with search icon */
        }
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
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-8 offset-lg-4 offset-md-3 offset-sm-2 divup">
        <br>
                <h2 class="text-center">
                    <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B"alt="Logo" width="70" height="70">
                </h2>
                <p style="margin: 0;  font-size: 25px; color:#5B4E2C ; font-family: Roboto; font-weight: bold; text-align: center;">LOGIN</p>
                <hr>
                <div class="container text-center">

                    <form action="" method="POST">
                    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>



                    
                    <input type="email" class="form-control" name="email" placeholder="Email"  style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                    <br>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                               style="background-color: #EDE9E8; border-bottom: 1px solid black;" required>
                        <button class="btn btn-outline-secondary" type="button"  id="showPasswordToggle">
                        <i class="toggle-password fas fa-eye" onclick="togglePassword()"></i>                        </button>
                    </div>                  
                    <a href="forgot.php" class="float-end" style="font-size: 10px; text-decoration: none; color: #835328; ">Forgot password?</a> 
                    <br>
                    <button type="submit" onclick="error()" name="submit_btn" class="btn buttoncst">Log in</button>
                    </form>
                    <p class="text-muted" style="font-size: 10px;">Don't have an account yet?</p>
                    <a href="signup.php" style="text-decoration: none; color:#835328;">Sign up</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>
    
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

        var error = "<?php echo isset($error) ? $error : ''; ?>";
    if (error.trim() !== "") {
        var errorDiv = document.getElementById('errorMessage');
        errorDiv.innerText = error;
        errorDiv.style.display = 'block';
    }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
 </body>
</html>