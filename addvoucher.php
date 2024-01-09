<?php 
include 'function.php';
session_start();


if (isset($_POST['insert'])) {
    $voucher_code=$_POST['voucher_code'];
    $percent=$_POST['percent'];
    $expiration_date=$_POST['expiration_date'];

        $query = "INSERT INTO voucher (`voucher_code`, `percent`,  `expiration_date`) VALUES('$voucher_code','$percent','$expiration_date')";
        mysqli_query($conn, $query);

       $message="Voucher successfully added!!!";
    } 

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
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
                padding-left: 15px;
                margin: 0px;         
                background-color: rgba(250, 250, 243, 0.4); /* Light yellow with 90% opacity */
        }
        .bar{
            text-align: center;
            padding: 2px;
            margin-top: 2em;
            margin-left: 15em;
            margin-right: 0px; 
            
        }
        .bar li{	
            padding-left: 10px;
            font-size: 17px;
            font-family: Roboto;
            color: #5B4E2C;
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
        .addition{
            width: 60%;
            font-size: 25px;
            padding: 5px;
            margin-top: 15px;
            margin-left: 2em;
            background-color:#F6F2EF;
            border-radius: 20px;
            color: #2F3E46;
            font-family: Poppins,sans-serif;
          
        }
        .addition:hover{
            background-color:#A5A5A5;;
            border-radius: 20px;
            color: white;
        }
        .updation{
            width: 60%;
            font-size: 25px;
            padding: 5px;
            margin-top: 15px;
            margin-left: 2em;
            background-color:#F6F2EF;
            border-radius: 20px;
            color: #2F3E46;
            font-family: Poppins,sans-serif;
          

        }
        .updation:hover{
            background-color:#A5A5A5;;
            border-radius: 20px;
            color: white;

        }
        .deletion{
            width: 60%;
            font-size: 25px;
            padding: 5px;
            margin-top: 15px;
            margin-left: 2em;
            background-color:#F6F2EF;
            border-radius: 20px;
            color: #2F3E46;
            font-family: Poppins,sans-serif;
         

        }
        .deletion:hover{
            background-color:#A5A5A5;;
            border-radius: 20px;
            color: white;
        }
        .insert{
            width: 60%;
            font-size: 30px;
            margin-top: 15px;
            background-color:#F6F2EF;
            border-radius: 20px;
        }
        .insert:hover{
            background-color: #BCA37F ;
            border-radius: 20px;
            font-weight: bold;
        }
        .form-control{
            width: 500px;
            background-color: #e8dfda; 
            border-color: #C9BBAE;
            border-bottom: 2px solid black;
        }
        
        .content{
            padding: 20px;
            border: solid grey;
            border-radius: 10px;
            box-shadow: -10px -10px 10px grey;
            background-color: #E8E1DA;        
        }
        h1, h2, h3, p {
            font-family: 'Prata', serif;
        
        }
        .option,option{
            background-color: #e8dfda; 
            border-color: #C9BBAE;
            border-bottom: 2px solid black;
            color:black;
            height: 50px;
            width: 300px;
            font-size: 20px;
            font-weight: 400;
            border-radius: 15px;
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
           margin-left: 7em;
        
        }
        .search .form-control {
            text-align: center;
            background-color: transparent;
            border-color: #453321;
            border-radius: 10px;
            width: 10px;
        }
        .header{
            text-decoration: none;
            color:black;
            font-size: 30px;

        }
        .header :hover{
            color:#3e2723;
            font-weight: bold;

        }
    </style>


    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='zIE=edge'>
    <title>Admin page</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="bg-image" style="background-image: url('https://scontent.xx.fbcdn.net/v/t1.15752-9/406461146_2801070146700533_8926185643662779815_n.png?_nc_cat=100&ccb=1-7&_nc_sid=510075&_nc_eui2=AeE8EUJuE9vK-u7uoH-hFuqfJMSbbB90MD4kxJtsH3QwPj3y99yjqTLFVw1tcQu7VzqIrKIJGB53LEwFWPJUYd4L&_nc_ohc=zgX-7eBLWyMAX8SX_Ve&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQYjVh5cxqmCd-fmKx76irFbBM6szywFFaknbFQjeBJ1A&oe=659E2DAE'); background-size: cover;">

<div class="navigation">
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
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
        <a href="adminprofile.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Profile
        </li>
        </a>
        <a href="adminpage.php" class="nav-link">
         <li class="nav-item text-center active" >
       
                Home
         </li>
        </a>
        <a href="sales.php" class="nav-link">
         <li class="nav-item text-center" >
           
                Sales
         </li>
        </a>
        <a href="inventory.php" class="nav-link">
         <li class="nav-item text-center">
        
                Inventory
         </li>
        </a>
        <a href="adminorder.php" class="nav-link">
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
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <br><br><br><br><br>
                <a href="adminpage.php">
                <button type="submit" class="addition" >BACK</button></a>
                <a href="update.php">
                <button type="submit" class="updation">UPDATE</button></a>
                <a href="delete.php">
                <button type="submit" class="deletion">DELETE</button></a>
            </div>
            <div class="col">
                <div class="content">
                <center>
                <form action="" method="POST">
                <div class="container">
                <div class="row">
                    <div class="header col-6 text-center" >
                        <a href="add.php" >Add Product</a>
                    </div>
                    <div class="header col-6 text-center" style="font-weight:bold;  border-bottom:5px solid #3e2723">
                        <a  href="addvoucher.php" disable><span style="color: #3e2723;">Add Voucher</span></a>
                    </div>
                </div>      
                </div>                    
                <hr>
                <br>
                <div id="message" class="alert alert-success" style="display: none;"></div>
               
                <br><br><br>
                <input type="text" name="voucher_code" class="form-control" placeholder="Voucher Code" required><br>
                <input type="number" name="percent" class="form-control" placeholder="00.00" required><br>
                Expiration Date: 
                <input type="date" class="form-control" placeholder="Expiration Date"name="expiration_date" required><br>
                <br>    
                    <button type="submit" class="insert" name="insert">Add Product</button><br><br>
                </form>
                </center>
                </div>
            </div>
        </div>
    </div>

    
<br> <br>
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
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
<script>
    if ('<?php echo $message; ?>'.trim() !== "") {
    var messageDiv = document.getElementById('message');
    messageDiv.innerText = '<?php echo $message; ?>';
    messageDiv.style.display = 'block';
}
</script>
</body>
</html>