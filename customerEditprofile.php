<?php
include 'function.php';
session_start();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = "UPDATE users SET 
                firstName = ?,
                lastName = ?,
                email = ?,
                phoneNumber = ?,
                address = ?,
                password = ?
                WHERE id = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssssi", $firstname, $lastname, $email, $contact, $address, $password, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $message= "Profile updated successfully! Please reload the page to view the changes.";
        
        $_SESSION['email'] = $email;
        $_SESSION['firstName'] = $firstname;
        $_SESSION['lastName'] = $lastname;
        $_SESSION['address'] = $address;
        $_SESSION['phoneNumber'] = $contact;
} else {
echo "Error updating user: " . mysqli_error($conn);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
</head>


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
                background-color: rgba(250, 250, 243, 0.4); /* Light yellow with 90% opacity */
        }
        .bar{
            text-align: center;
            padding: 2px;
            margin-top: 2em;
            margin-right: 0px; 
            margin-left: 18em;
            
        }
        .bar li{	
            padding-left: 10px;
            font-size: 20px;
            font-family: Neuzeit S LT W01 Book;
            color: #5B4E2C;
        
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
        .update{
            width: 30%;
            height:40px;
            font-size: 23px;
            margin-top: 15px;
            background-color:#F6F2EF;
            border-radius: 20px;
            margin-bottom: 2em;
        }
        .update:hover{
            background-color: #BCA37F ;
            border-radius: 20px;
            font-weight: bold;
        }
            a {
			text-decoration: none;
			color: #453321;
        }
        a:hover{
			color: #5B4E2C;
        }
        footer{
            background-color:#514F4D ;
            color: white;
            bottom: 0;
            left:0;
            width:100%;
            height: 100px;
            margin-top: -2em;
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
           margin-left: 6em;
           position: relative;
    
        }
    </style>


 <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>KHASABAI</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body class="bg-image" style="background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); background-size: cover;">

<div class="navigation">
<nav class="navbar navbar-expand-sm">
        <div style="display: flex; align-items: center;">
            <div style="margin-right: 10px; margin-left: 2em; padding-left:10px; padding-top: 6px;">
            <img src="assets/logo.png" alt="Logo" width="70" height="70"> </div>
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
        <a href="customerprofile.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Profile
        </li>
        </a>
        <a href="customerhome.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Home
        </li>
        </a>
        <a href="orderstatus.php" class="nav-link">
        <li class="nav-item text-center" >
           
                Orders
        </li>
        </a>
        <a href="cart.php" class="nav-link">
         <li class="nav-item text-center">
        
                Cart
         </li>
        </a>
        <a href="logout.php" class="nav-link">
         <li class="nav-item text-center">
        
                Logout
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
        </div> 
<!-- content -->
<h4 style="color:#453321;  padding-right: 3em; float: left;">
                    <a href="customerprofile.php">
                        <button type="button" class="back" style="margin-left: 1em; margin-right: 10px;">
                            <i class="fa-solid fa-arrow-left" style="color: white;"></i></button></a> </h4>
<div class="text-center" style="margin-top: 5em; ">

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
            ?><img src="assets/<?php echo $row['profile']; ?>"  alt="Profile Picture" style="height: 150px; width:150px; border-radius:100%;">

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
</div>


    <div class="text-center" style="cursor: pointer;">
    <form method="post" >
        <label for="profilePicture" style="display: block; cursor: pointer;">Upload Profile Picture</label>
        <input type="file" id="profilePicture" name="profilePicture" style="display: none;">
        <input type="submit" value="Submit" name="upload">
    </form>
</div>
</div>
<?php
if(isset($_POST['upload'])){
    $profile=$_POST['profilePicture'];
    $upload="UPDATE users SET profile ='$profile' WHERE id= '$_SESSION[id]'";
    mysqli_query($conn, $upload);
    echo "<script>window.location.href='customerEditprofile.php';</script>";
}
?>
    </div>
<div class="container">
     <br><br><br> 
<!-- !!!!!!!!!! -->
<form action="" method="POST" onsubmit>
<div id="message" class="alert alert-success" style="display: none;"></div>

    <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['id'] ?>">
    <h7>Email Address</h7>
    <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>"><br>
    <h7>First Name</h7>
    <input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['firstName'] ?>"><br>
    <h7>Last Name</h7>
    <input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['lastName'] ?>"><br>
    <h7>Address</h7>
    <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['address'] ?>"><br>
    <h7>Phone Number</h7>
    <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['phoneNumber'] ?>"><br>
    <h7>Password</h7>
    <input type="password" class="form-control" name="password" value="<?php echo $_SESSION['password']?>"><br>
    <div class="text-center">
    <button type="submit" class="update" name="update">Update Profile</button>
    </div>
</form>
                </center>
                
                </div>
            </div>
        </div>
    </div>
    </div>
   
    <!-- footer -->
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
<script>
    var message = "<?php echo isset($message) ? $message : ''; ?>";
    
if (message.trim() !== "") {
    var messageDiv = document.getElementById('message');
    messageDiv.innerText = message;
    messageDiv.style.display = 'block';
}

</script>
 </body>
</html>