<?php
include 'function.php';
session_start();



?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    
    
    <style>
        .navigation{
            background-color: #FAFAF3;
            }
        .navbar a:hover {
            background: linear-gradient(to bottom, transparent 0%, transparent 80%, #83776c 80%, #83776c 100%, white);
        }
        .navbar {
            border-top: 1px solid #ccc;
            padding-left: 15px;
            margin: 0px; 
            padding-right: 2em;
        }
        .bar{
            text-align: center;
            padding: 0px;
            margin-top: 0;
            margin-right: 2em;
        }
        .bar li{	
            padding-left: 10px;
            font-size: 16px;
            font-family: Roboto;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #E8E1DA;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Optional, for a fixed background */
        }
        .container{
            background-color: #E8E1DA;
            width: 700px;
            margin-bottom: 5em; 
        }
        .back{
            width: 40px;
            height: 40px;
            background-color: #C9BBAE;
            font-size: 30px;
            border-color: #AB7B5B;
            border-radius: 20em;
            margin-top: 15px;
            color: white;
        }
        .back:hover{
            background-color: #A19284;
            color: black;
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
            padding-top: 0;
        }
        h5, h7 {
            margin-left: 8px;
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

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
</head>
  <!-- navbar -->
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
    </div>
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
    <div class="bar">
        <ul class="navbar-nav ">
        <a href="profileadmin.php" class="nav-link">
        <li class="nav-item text-center" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="adminpage.php" class="nav-link">
         <li class="nav-item text-center active" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="sales.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
                Sales
         </li>
        </a>
        <a href="inventory.php" class="nav-link">
         <li class="nav-item text-center">
            <i class="fas fa-box"></i>
                Inventory
         </li>
        </a>
        <a href="adminorder.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-shopping-cart"></i>
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
<h4 style="color:#453321;  padding-right: 3em; float: left;">
                    <a href="profileadmin.php">
                        <button type="button" class="back" style="margin-left: 1em; margin-right: 10px;">
                            <i class="fa-solid fa-arrow-left" style="color: white;"></i></button></a> </h4>
<div class="text-center" style="margin-top: -5em; margin-right: 10em;">
    <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t1.15752-9/370213952_364363432641642_6964461321948811988_n.png?_nc_cat=106&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGOw_wN8RWHce7Vnf11dNCOWYdjE5LcbEdZh2MTktxsR4y4pW7ksvReZ5fwCIo-Ck8m83qwlV1VbwuNx-pycUy_&_nc_ohc=HPCyVBGTPtoAX8yvlPJ&_nc_ht=scontent.fmnl30-1.fna&oh=03_AdTMFWsfcjqPlj4KwNF3eIgp_ZuHg380NSrvKMfZFIVhLg&oe=6582A2B8" width="10%"; height="10%">
    </div>
   
    </div>
<div class="container">
     <br><br><br> 
<!-- !!!!!!!!!! -->
     <form action="" method="POST">
     <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['id'] ?>">
<h7> Email Address</h7>
<input type="text" class="form-control" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"><br>
<h7> First Name</h7>
<input type="text" class="form-control" name="firstname" value="<?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?>"><br>
<h7> Last Name</h7>
<input type="text" class="form-control" name="lastname" value="<?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?>"><br>
<h7>Address</h7>
<input type="text" class="form-control" name="address" value="<?php echo isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?>"><br>
<h7>Phone Number </h7>
<input type="text" class="form-control" name="contact" value="<?php echo isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : ''; ?>"><br>
<h7>Password </h7>
<?php
    $string = $_SESSION['password'];
    $length = strlen($string);
    $pass = str_repeat('*', $length);
?>
<input type="password" class="form-control" name="password" value="<?php echo isset($_SESSION['password'])?>" placeholder="<?php echo $pass ?>"><br>
<div class="text-center">
    <button type="submit" class="update" name="update" style="background-color:#835328; border-radius: 2em; width: 150px; height:40px;" >Update Profile</button><br><br>
</form>
                </center>
                <?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    $query = "UPDATE users SET 
                firstName = '$firstname',
                lastName = '$lastname',
                email = '$email',
                phoneNumber = '$contact',
                address = '$address',
                password = '$password'
                WHERE id = '$id'";

$result=mysqli_query($conn, $query);

    if ($result) {
        echo "User updated successfully!";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}

                     
        ?>     
                </div>
            </div>
        </div>
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