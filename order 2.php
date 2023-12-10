<!-- <?php
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
                    header("Location: homecustomer.php");
                } else if ($row["typeUser"] == "Kha") {
                    header("Location: kha.php");
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
                echo "<script>alert('Email or Password is wrong')</script>";
            }
        } 
?>
    -->
<!doctype html>
<html lang="en">
  <head>
    <title>forgot</title>
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
            text-align: centers;
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

        .fa-eye-slash {
            font-family: "Font Awesome 5 Free";
            font-weight: 300;
        }

        .buttoncst{
            width: 5
            0%;
            height: 50px;
            border-radius: 100px;
            background-color: #AC8351;
        }
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;

        }
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
        }
        .navbar {
            padding-top: 0em;
            padding-left: 2em;
            padding-right: 2em; 
        
    /* hover */

        }
        a {
			text-decoration: none;
			color: #453321;
        }
        a:hover{
			color: #5B4E2C;
			background-color: #83776c;
	    }
    
        footer{
            background-color: #A19284;
            color: white;
            position:fixed;
            bottom: 0;
            left:0;
            width:100%;
           
        }

    /* second nav bar */
       
        .main {
            width: 100%;
            margin: 0;
            
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
        h1 {
            text-align: center;
            font-family: 'Prata', serif; /* Set font to Prata */
            color: #453321;
            font-size: 60px;
        }
        .center-box {
            display: flex;
            flex-direction: column; /* Display vertically */
            align-items: flex-end; /* Align items to the right */
            height: 100vh; /* Adjust as needed */
            margin-right: 5%;
        }

        .layered-box {
            background-color: #C9BBAE; /* Updated background color */
            padding: 20px; /* Adjust padding as needed */
            border-radius: 10px; /* Adjust radius as needed */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0; /* Adjust as needed */
            width: 800px; /* Adjust width as needed */
            margin-top: 5%;
            position: relative; /* Added relative positioning for child elements */
        }

        .quantity-box {
            background-color: #ffffff; /* Small box background color */
            padding: 10px; /* Adjust padding as needed */
            border-radius: 5px; /* Adjust radius as needed */
            position: absolute;
            left: 30px; /* Adjust left position as needed */
            top: 25px; /* Adjust top position as needed */
            text-align: center;
            margin: 0%;
        }

        #doneBtn {
            margin-top: 30%; /* Adjust margin as needed */
            margin-right: -68%; /* Adjust as needed */
            flex-direction: column;
            padding: 20px;
            background-color: #835328;
        }
        #deliverBtn {
            margin-top: -120%; /* Adjust margin as needed */
            margin-right: -85%; /* Adjust as needed */
            flex-direction: column;
            padding: 20px;
            background-color: #835328;
        }

        .additional-box {
            background-color: #C9BBAE; /* Updated background color */
            padding: 60px; /* Adjust padding as needed */
            border-radius: 10px; /* Adjust radius as needed */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0; /* Adjust as needed */
            width: 600px; /* Adjust width as needed */
            margin-top: 5%;
            position: absolute; /* Absolute positioning */
            left: 250px; /* Adjust left position to overlap with layered box */
            font-size: 20px;
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
                    <a href="home.html" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="aboutus.html" class="nav-link active">
                        About Us
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="login.html" class="nav-link active">
                        Log in
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="cart.html" class="nav-link active">
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
       
 <h1> Order </h1>
        <div class="center-box">
        <!-- First Layered Box -->
        <div class="layered-box">
            <!-- Quantity Box -->
            <div class="quantity-box">
                <p>Quantity: 1</p>
            </div>

            <h4><b>Rosmar Kaguyaku Bleaching</b></h4>
            <h4><b>Whipped Cream 300g</b></h4>
            
        </div>

        <!-- Second Layered Box -->
        <div class="layered-box">
            <!-- Quantity Box -->
            <div class="quantity-box">
                <p>Quantity: 1</p>
            </div>

            <h4><b>Rosmar Bleaching Whipped</b></h4>
            <h4><b>Lotion 100ml</b></h4>
        </div>

        <div class="additional-box">
            <h4><b>KYLIE ANN GAZZINGAN</b></h4>
            <p>Gen Luna St. Intramuros, Manila Philippines </p>
            <p> +63 9123456789 </p>
            <p> SUB TOTAL:       ₱449.00 </p>
            <p> SHIPPING FEE:    ₱56.00 </p>

            <p>Total: ₱505.00

            </p>
            
        </div>

        <div class="center-box">
        <button class="btn btn-primary" id="doneBtn">Done Pick-Up</button>
    </div>
    <div class="center-box">
        <button class="btn btn-primary" id="deliverBtn">Delivered</button>
    </div>


<!-- footer -->
<footer class="container-fluid">
    
    <div class="row">
        <div class="col-6 text-left">
            <p class="text-lead" style="font-size: 15px; padding-top:20px;"> ©  2023 Khasabai | Privacy Policy</p>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
 </body>
</html>