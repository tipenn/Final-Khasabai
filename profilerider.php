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
        
        body {
            font-family: 'Roboto', sans-serif;
            background-size: cover;
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
                padding-left: 12px;
                margin: 0px;         
                background-color: rgba(250, 250, 243, 0.4); /* Light yellow with 90% opacity */
        }
        .bar{
            text-align: center;
            padding: 2px;
            margin-top: 2em;
            margin-left: 20em;
            margin-right: 0px; 
            
        }
        .bar li{	
            margin-left: 3px;
            font-size: 17px;
            font-family: Roboto;
            color: #5B4E2C;
        }
        .search .form-control {
        text-align: center;
        background-color: transparent;
        border-color: #453321;
        border-radius: 10px;
        width: 10px;
        }
        .search{
            width: 240px;
           margin-left: 11em;
        
        }
        .search .form-control {
            text-align: center;
            background-color: transparent;
            border-color: #453321;
            border-radius: 10px;
            width: 10px;
        }
        
        .container{
            background-color: transparent;
            width: 400px; 
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
        table{
            background-color:#F6F2EF; 
            width: 400px; 
            margin-right: 35em;
            box-shadow: -2px -2px 2px grey;
        }
        tr{
            height:50px;  
            text-align:left; 
            color:black;
        }
        td{
            padding-left:10px;
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
            padding-top: 0;
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

<head>
    
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="bg-image" style="background-image: url('https://i.pinimg.com/564x/12/be/79/12be7911a1d8941448cc1fc5d8935167.jpg'); background-size: cover;">

<div class="navigation">
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70"> </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway;font-weight: bold; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway;font-weight: bold;  text-align: left;">BEAUTY PRODUCTS</p>
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
        <a href="profilerider.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Profile
        </li>
        </a>
        <a href="rider.php" class="nav-link">
         <li class="nav-item text-center active" >
       
                Home
         </li>
        </a>
        <a href="orderhistoryrider.php" class="nav-link">
         <li class="nav-item text-center" >
            
                Order
         </li>
        </a>
        <a href="logout.php" class="nav-link">
         <li class="nav-item text-center" >
            
                Log out
        </li>
        </a>
   
<div class="search">
        <form method="GET" action="" class="search">
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholder="Search..."
                    style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit"
                        style="background-color: transparent; border-color: #453321; border-top-right-radius: 10px; border-bottom-right-radius: 10px; border-top-left-radius: 0; border-bottom-left-radius: 0;">
                        <span class="btn-label"><i class="fas fa-search" style="color: #5a4939;"></i></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
    </nav>
        </div>

<!-- content -->
<div class="text-center" style="margin-top: 2em; ">
<center>
<?php
$sql = "SELECT * FROM users WHERE id = '$_SESSION[id]'";
$result = $conn->query($sql);

if ($result) {
    // Check if the result set is not empty
    if ($result->num_rows > 0) {
        // Fetch the data here
        $row = $result->fetch_assoc();

        // Check if the 'profile' column is not null and not empty
        if ($row['profile'] !== null && $row['profile'] !== '') {
            // Profile has data
            ?><img src="assets/<?php echo $row['profile']; ?>"  alt="Profile Picture" style="height: 170px; width:170px; border-radius:100%;">

            <?php
        } else {
            // Profile is null or empty
            ?> 
            <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t1.15752-9/370213952_364363432641642_6964461321948811988_n.png?_nc_cat=106&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGOw_wN8RWHce7Vnf11dNCOWYdjE5LcbEdZh2MTktxsR4y4pW7ksvReZ5fwCIo-Ck8m83qwlV1VbwuNx-pycUy_&_nc_ohc=HPCyVBGTPtoAX8yvlPJ&_nc_ht=scontent.fmnl30-1.fna&oh=03_AdTMFWsfcjqPlj4KwNF3eIgp_ZuHg380NSrvKMfZFIVhLg&oe=6582A2B8" width="10%"; height="10%">

            <?php
        }
    } else {
        // No matching user found
        echo "User not found.";
    }
} else {
    // Query execution failed
    echo "Error executing the query: " . $conn->error;
}
?>   
</center>
    <div class="text-right" style="margin-right: 30em; float: right; ">
    <button type="button" class="btn btn-outline-secondary btn-lg" onclick="myFunction()"> <i class="fa-solid fa-pencil" style="color: #453321;"></i></button>
    </button> 
    </div>
    </div>
    <br>
    
<div class="container">
    <table align="center" >
    <tr >     
     <td scope ="col"> <b> Email: </b>  <?php echo $_SESSION['email'] ?> </td>
     
    </tr>
    </table>
        <br>
    
        <table align="center">
    <tr >     
     <td scope ="col" > <b> Name: </b>   <?php echo $_SESSION['firstName'] ?> <?php echo $_SESSION['lastName'] ?></td>
    </tr>
    </table>
        <br>

    <table>
    <tr>     
     <td scope ="col"> <b> Address: </b>  <?php echo $_SESSION['address'] ?>  </td>
    </tr>
    </table>
        <br>

    <table align="center">
    <tr >     
     <td scope ="col"> <b> Contact: </b>  <?php echo $_SESSION['phoneNumber'] ?>  </td>
    </tr>
    </table>
        <br>

        <!-- asterisk- private -->
        <table>
    <tr>     
        <?php
        $string = $_SESSION['password'];
        $length = strlen($string);
        $pass = str_repeat('*', $length);
        ?>
    <td scope ="col"> <b> Password: </b>  <?php echo $pass ?>  </td>     
    </tr>
  </table>

</body>
    </div>
                  
     <br><br><br> <br><br><br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
 
 
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

<script>
function myFunction() {
    window.location.href = 'editprofilerider.php';
}
</script>
</script>
</body>
</html>