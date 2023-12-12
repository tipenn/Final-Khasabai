<!-- <?php
include 'function.php';
session_start();
$kha=$_SESSION['email'];
$sql = "SELECT * FROM order_customer WHERE (status='Waiting for Courier' OR status='Is on the way') AND (kha = '$kha' OR kha='');";
$result = $conn->query($sql);

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
            color:white;
            background-color: #A19284;
            color: white;
            position: fixed;
            bottom: 0%;
            width: 100%;
            text-align: left;
            z-index: 1000;
           
        }
        footer a{
            color:#453321;
        }
        footer a:hover{
            color:black;
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
            margin-top: -50px; /* Adjusted margin-top */
            margin-bottom: 0px; /* Adjusted margin-bottom */
        
        }

      

        
        
        .buttons {
            display: flex;
            gap: 10px;
        }

        .button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .accept {
            background-color: #4CAF50; /* Green */
            color: white;
        }

        .reject {
            background-color: #f44336; /* Red */
            color: white;
        }
        



        body {
            font-family: 'Roboto', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
        }
        .navbar {
            border-top: 1px solid #ccc; /* Add a separator to the navbar */
            padding-left: 15px;
        }
        .navigation{
            background-color: #FAFAF3;

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
        .navbar a:hover{
            color: #FFBC7A;
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
        }
       .col-5{
        border:2px solid black;
        margin:10px;
        background-color: #C9BBAE;
       }
       .pack{
        background-color: #A19284;
        color:WHITE;
        width:200px;
        margin:10px;
        display:center;
       }
       .pack:hover{
        background-color: #E8E1DA;
        color:black;
       }
       .custom-heading {
    font-family: "Prata", sans-serif;
    /* Add any other styling properties as needed */
}
    </style>

<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>profile</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
    <div class="navigation"  style="margin-bottom:-7px;">
    <nav class="navbar navbar-expand-sm" style="margin-bottom: 0px;">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">BEAUTY PRODUCTS</p>
            </div>
                <br>
                <hr style= "margin-top: 10px; margin-left: 15px; margin-right: 2em; width: 700px; background:#4F3B33; height: 2px;"> </hr>           
                <br>
    </div>
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

<div class="bar">
<div style="display: flex; align-items: right;">
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
        <ul class="navbar-nav ml-auto ">
        <a href="profilerider.php" class="nav-link">
        <li class="nav-item text-center active" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="rider.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="orderhistoryrider.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
                Order
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
       <br>
       <br>
 <h1> RIDER HOMEPAGE </h1>
    
    
 <div class="container">
<div class="row justify-content-center">
<?php if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { 
?>
        <div class="col-5"> 
            <br>
            <h4 class="custom-heading"><?php echo $row['id'] . ' ' . $row['lastName'];?></h4>

            <h2 class="text-center custom-heading"><?php echo $row['firstName'] . ' ' . $row['lastName'];?></h2>
            <h5 class="text-center custom-heading"><?php echo $row['email'] ?></h5>
            <h5 class="text-center custom-heading"><?php echo $row['address'] ?></h5>
            <h5 class="text-center custom-heading"><?php echo $row['phoneNumber'] ?></h5>
            <p class="text-lead text-center">
                Sub Total: ₱<?php echo $row['total_price'] ?><br>
                Shipping Fee: <?php echo $row['shipping_fee'] ?><br>
            </p>
            <h5 class="custom-heading">TOTAL: ₱<?php echo $row['total_price'] ?></h5>
            <form method="POST" action="orderrider.php" id="packForm">
                <input type="hidden" name="order_id" value="<?php echo $row['id']; ?>">
                <center>
                    <button type="submit" name="pack" class="pack">
                        <i class="fas fa-shipping-fast">Ship</i> 
                    </button>
                </center>
            </form>
        </div>
<?php 
    }
}
$conn->close();
?>
            

        </div>
    </div>
    <br>
    <br>
    <br>
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