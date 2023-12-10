<?php
include 'function.php';
session_start()

?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        
        .bar{
            text-align: centers;
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
        h1, h2, h3, p {
            font-family: 'Prata', serif;
            padding-top: 0;
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
        <a href="profile.php" class="nav-link">
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
<h1 class="text-center">PROFILE</h1>
</div>

<!-- header profile -->
<img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/370294778_751432686945500_347985182151363932_n.png?_nc_cat=100&ccb=1-7&_nc_sid=510075&_nc_eui2=AeGCPGugVNahQB8KChqoLgX8TpFBwMKbBMpOkUHAwpsEyl6jaiGbL7Czxdo0advIa1Qafq9b07lhOhtpLSqKMi0i&_nc_ohc=z84QS1qaurUAX8N8nEM&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdSqPJnlByOKYh_BcMouN2KNxD6QhbdK8mI-sWsCFDDf6w&oe=6582BDD0" width="100%"; height="150px";>
<!-- content -->
<div class="text-center" style="margin-top: -5em;">
    <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t1.15752-9/370213952_364363432641642_6964461321948811988_n.png?_nc_cat=106&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGOw_wN8RWHce7Vnf11dNCOWYdjE5LcbEdZh2MTktxsR4y4pW7ksvReZ5fwCIo-Ck8m83qwlV1VbwuNx-pycUy_&_nc_ohc=HPCyVBGTPtoAX8yvlPJ&_nc_ht=scontent.fmnl30-1.fna&oh=03_AdTMFWsfcjqPlj4KwNF3eIgp_ZuHg380NSrvKMfZFIVhLg&oe=6582A2B8" width="10%"; height="10%">
    </div>
<!--     
    <div class="text-right"  style="margin-top: -5em; height: 100%; width: 100%;"> -->
    <div class="text-right" style="margin-right: 10em; float: right;">
    <button type="button" class="btn btn-outline-secondary btn-lg" >
        <i class="fa-solid fa-pencil"></i>
    </button> 
    </div>
    </div>
    <br>

    <table style="background-color: #A19284; width: 400px; margin-right: 35em;" align="center" >
    <tr style= "height:50px;  text-align:left; color:black; ">     
     <td scope ="col" style="padding-left:10px;"> <b> Email: </b>  <?php echo $_SESSION['email'] ?> </td>
    </tr>
    </table>
        <br>
        <table style="background-color: #A19284; width: 400px; margin-right: 35em;" align="center">
    <tr style= "height:50px;  text-align:left; color:black; ">     
     <td scope ="col" style="padding-left:10px; " > <b> Name: </b>   <?php echo $_SESSION['firstName'] ?> <?php echo $_SESSION['lastName'] ?></td>
    </tr>
    </table>
        <br>
    <table style="background-color: #A19284; width: 400px; padding-bottom: 5px;" align="center">
    <tr style= "height:50px; text-align:left; color:black;">     
     <td scope ="col" style="padding-left:10px;"> <b> Address: </b>  <?php echo $_SESSION['address'] ?>  </td>
    </tr>
    </table>
        <br>
    <table style="background-color: #A19284; width: 400px; padding-bottom: 5px;" align="center">
    <tr style= "height:50px;  text-align: left; color:black;">     
     <td scope ="col" style="padding-left:10px;"> <b> Contact: </b>  <?php echo $_SESSION['phoneNumber'] ?>  </td>
    </tr>
    </table>
        <br>
        <!-- asterisk- private -->
        <table style="background-color: #A19284; width: 400px; padding-bottom: 5px;" align="center">
    <tr style= "height:50px;  text-align:left; color:black;">     
     <td scope ="col" style="padding-left:10px;"> <b> Password: </b>  <?php echo $_SESSION['password'] ?>  </td>     
    </tr>
  </table>
</body>

                  
     <br><br><br> <br><br><br>


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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">

</body>
</html>