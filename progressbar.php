<?php 
//INCLUDE BACK BUTTON
include 'function.php';
session_start();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Now you can use $status as needed in your code
} else {
    // Handle the case where the status parameter is not set
}
$sql="SELECT * FROM order_customer WHERE id='$id'";

$result = $conn->query($sql);
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
            background-attachment: fixed;
        }

        .card {
            z-index: 0;
            padding-bottom: 20px;
            margin-top: 90px;
            margin-bottom: 90px;
            border-radius: 10px;
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: black;
            margin-left: 8em;
            padding-left: 0;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 23%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        #progressbar .step0::before {
            font-family: FontAwesome;
            content: '\f10c';
            color: #A19284;
        }

        #progressbar li::before {
            width: 40px;
            height: 40px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            background: 38493hd;
            border-radius: 50%;
            margin: auto;
            padding: 0;
        }

        #progressbar li::after {
            content: '';
            width: 100%;
            height: 12px;
            background-color:#A19284;
            position: absolute;
            top: 16px;
            left: 0;
            z-index: -1;
        }

        #progressbar li:last-child::after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: -50%;
        }

        #progressbar li:nth-child(2)::after,
        #progressbar li:nth-child(3)::after {
            left: -50%;
        }

        #progressbar li:first-child::after {
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: 50%;
        }

        #progressbar li.active::before,
        #progressbar li.active::after {
            background-color: #453324;
        }

        #progressbar li.active::before {
            font-family: FontAwesome;
            content: '\f00c';
        }

        .icon {
            width: 60px;
            height: 60px;
            margin-left: 17em;

        }

        .icon-content {
            padding-bottom: 20px;
            padding-left: 2em;
            padding-right: 15em;
        }

        @media screen and (max-width: 992px) {
            .icon-content {
                width: 50%;
            }
        }
        .details{
            background-color: #FAFAF3;
            width: 100%;  
            height: 250px;
            padding-left: 6em;
            padding-top: 1em;
            padding-bottom: 1em;
            margin-bottom: 2em;
        }
        .items{
            height: 180px;
            width: 500px;
            margin-top: 1em;
            margin-left: 15em;
            background-color: #C9BBAE;
        }
        .items img{
            height: 150px;
            width: 200px;
            margin-top: 10px;
            margin-left: 25px;
            border-radius: 20px;
            padding: 10px;
        }
        .addition{
            width: 40px;
            height: 40px;
            background-color: #C9BBAE;
            font-size: 30px;
            border-color: #AB7B5B;
            border-radius: 20em;
            margin-top: 15px;
            color: white;
        }
        .addition:hover{
            background-color: #A19284;
            color: black;
        }
        .ship{
            width: 90%;
            background-color: #AC8351;
            border-radius: 20px;
        }
        .ship:hover{
            color: white;
            background-color: #A19284;
        }
        .total{
        
            width: 500px;
            height: 280px;
            margin-top: 2em;
            margin-left: 15em;
            margin-bottom: 2em;
            padding: 1em;
            background-color: #C9BBAE;
        }
        h1, h2, p {
            font-family: 'Prata', serif;
        }
        h4, h6{
            font-family: 'Roboto Flex', sans-serif;
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


<head>   <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
</head>

  <!-- navbar -->
    <div class="navigation"  style="margin-bottom:-7px;">
    <nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B" alt="Logo" width="70" height="70">
            </div>
            <div>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">KHASABAI</p>
                <p style="margin: 0;  font-size: 18px; color:#5B4E2C ; font-family: Raleway; text-align: left;">BEAUTY PRODUCTS</p>
            </div>
                <br>
                <br>
    </div>
    <hr>
    <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
        <ul class="navbar-nav ml-auto ">
        <a href="customerprofile.php" class="nav-link">
        <li class="nav-item text-center active" >
            <i class="fas fa-user fa"></i>
                Profile
        </li>
        </a>
        <a href="customerhome.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-home"></i>
                Home
         </li>
        </a>
        <a href="orderstatus.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-chart-line"></i>
                Orders
         </li>
        </a>
        <a href="cart.php" class="nav-link">
         <li class="nav-item text-center" >
            <i class="fas fa-shopping-cart"></i>
                Cart
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
<h1 class="text-center" >MY ORDERS</h1>
</div>

<!--body-->
<body>
                <h4 class="text-start" style="color:#453321;  padding-right: 3em;">
                    <a href="customerhome.php">
                        <button type="submit" class="addition" style="margin-left: 1em; margin-right: 10px;">
                            <i class="fa-solid fa-arrow-left" style="color: white;"></i></button></a>ORDER DETAILS</h4>
    </div><div>
<!-- order details-->

<hr>
        <!-- order status -->
        <body>
        <div class="container px-1 px-md-4 py-5 mx-auto">

        <!-- active -->
        <?php //if status is ordered
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row['status'] == "Ordered"){?>
            
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
                </ul>
            </div>
        </div>
                <?php } else if($row['status'] == "Waiting for Courier"){?>
            
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="step0"></li>
                        <li class="step0"></li>
                    </ul>
                </div>
            </div>
                    <?php }else if($row['status'] == "Is on the way"){?>
            
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="step0"></li>
                    </ul>
                </div>
            </div>
                    <?php }else if($row['status'] == "Delivered"){?>
            
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                    </ul>
                </div>
            </div>
                    <?php } ?>
        <!-- Images aligned in a row -->
        <div class="row justify-content-center top">
            <div class="col-2 d-flex justify-content-center icon-content">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/404396686_365611989462370_7871669805847773527_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHfAvNvmemRxkpRR_FHQ2om9tYdRBGCyL721h1EEYLIvhS5Rh8dIU6NwGfik4j481HibG0v75w3a_7j1hFHNqM_&_nc_ohc=81f2P9BvypQAX8TgtAn&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdT4OZkOlmbMvICMSBIjFy8Zg7z1uMmYpWWGfqrIwe_UFQ&oe=658993E8" alt="" class="icon" />
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br />Processed</p>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center icon-content">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/405401356_344709854910116_5711353361089251914_n.png?_nc_cat=104&ccb=1-7&_nc_sid=510075&_nc_eui2=AeE0ci88mB41sV5w8a5TSealpkK1_1msLFGmQrX_WawsUStuhvHxiuaP4R80zXGNcLRx8ArqJH-s7-jK3IB-IJ1F&_nc_ohc=Dt6UFv6qE_wAX8f2VHI&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQsCD53ZCgdc6lh0V4tZvaxvwov9DnfOG0VYi9kI3dMHg&oe=6589A42E" alt="" class="icon" />
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br />Shipped</p>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center icon-content">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/403659380_1772431786539726_8336683894784272492_n.png?_nc_cat=100&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHtejwoIjO8ZhgVYZqF322GnWJLjVO5EbCdYkuNU7kRsMR27eRyHavdY4XqcuZzNsepYsu63xS20EERt9e63BAt&_nc_ohc=DpwasR54p58AX-1HTfw&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlo91g1tnyDgKTiucrnJOfw9A1XkmRlVyqDgTyTDGlqQ&oe=65899C44" alt="" class="icon" />
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">In<br />Transit</p>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center icon-content">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/403632774_1435427850354239_1401872490265573399_n.png?_nc_cat=108&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHVFkpx2YC_glwmOmJiZiYkLCufF1K0M10sK58XUrQzXVEx_MCKeYhT2gZ-JvqRtOzUzQQuY5v6M3TCyjxI_SUp&_nc_ohc=5Nx7ZU_RSVIAX9wPiz_&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRWkB_3JG1n-lIojNdTaizDnOB71y97KnnHXb7adeBTZQ&oe=6589AFAF" alt="" class="icon" />
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br />Delivered</p>
                </div>
            </div>
        </div>
        </div>
        </div>
                </div>
            </div>
        </div>
        </div>
        <hr>
<!--main-->
<div class="container">
    <div class="row">
        <div class="col" style="padding:0px; margin:0px;">
        <p style="font-family: Roboto; font-size: 20px;"><i class="fas fa-home" style="color: #453321; margin-right: 10px;"></i>DELIVERY ADDRESS</p>
        <p class="text-lead"><?php echo $row['firstName']?> <?php echo $row['lastName']; ?>
        <br> <?php echo $row["phoneNumber"];?>
        <br><?php echo $row['address']?></p>
        <br>
        <p style="font-family: Roboto; font-size: 20px;"><i class="fas fa-truck" style="color: #453321; margin-right: 10px;"></i>SHIPPING INFORMATION</p>
        <p class="text-lead" style="margin-left: 2em; font-size: 20px; ">STANDARD INTERNATIONAL -76117393703<br>PARCEL IS OUT FOR DELIVERY<br>12 - 11 - 2023 - 19:26</p>
        <br>
        <!-- <p style="font-family: Roboto; font-size: 20px;"><i class="fas fa-box" style="color: #453321; margin-right: 10px;"></i>ORDER STATUS</P>
        <p class="text-lead" style="margin-left: 2em; font-size: 20px; ">ORDER ID 74299<br>PARCEL RECEIVED<br>12 - 11 - 2023 - 19:26</p> -->
        <a href="cOrderhistory.php" style="color: black;">View Purchase History</a>
    </div>
   
    <div class="total">
        <br>
                <center><h6>
               Mode of Payment: Cash on Delivery
                </h6></center>
                <hr style="color: #5B4E2C; height: 5px;">
                <div class="row">
                    <div class="col" >
                        SUB TOTAL:
                    </div>
                    <div class="col">
                    ₱<?php echo $row['total_price']?>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        SHIPPING FEE:
                    </div>
                    <div class="col">
                    ₱<?php echo $row['shipping_fee']?>
                    </div>
                </div>
                <hr style="color: #5B4E2C; height: 5px;">
                <div class="row" style="padding: 20px;">
                    <div class="col">
                        <b> T O T A L :</b>
                    </div>
                    <div class="col">
                    <b>₱<?php echo $row['total_fee']?></b>
                    </div>
    </div>
    </Div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php }?>
<script>
    // JavaScript code to submit the form when the button is clicked
    document.getElementById('packForm').addEventListener('submit', function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Submit the form
        this.submit();
    });
</script>

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