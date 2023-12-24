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
        .container{
            background-color: #E8E1DA;
            width: 700px;
            margin-bottom: 8em; 
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
        .update{
            width: 30%;
            height:40px;
            font-size: 23px;
            margin-top: 15px;
            background-color:#F6F2EF;
            border-radius: 20px;
        }
        .update:hover{
            background-color: #BCA37F ;
            border-radius: 20px;
            font-weight: bold;
        }
        footer{
            background-color: #A19284;
            color: white;
            bottom: 0;
            left:0;
            width:100%; 
            position: fixed;   
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
            <img src="assets/logo.png" alt="Logo" width="70" height="70">   </div>
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
<!-- content -->
<h4 style="color:#453321;  padding-right: 3em; float: left;">
                    <a href="adminprofile.php">
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
</div>

    <div class="text-center" style="cursor: pointer;">
    <form method="post" >
        <label for="profilePicture" style="display: block; cursor: pointer;">Upload Profile Picture</label>
        <input type="file" id="profilePicture" name="profilePicture" style="display: none;">
        <input type="submit" value="submit" name="upload">
    </form>
</div>
</div>
<?php
if(isset($_POST['upload'])){
    $profile=$_POST['profilePicture'];
    $upload="UPDATE users SET profile ='$profile' WHERE id= '$_SESSION[id]'";
    mysqli_query($conn, $upload);
    echo "<script>window.location.href='adminEditprofile.php';</script>";
}
?>
    </div>
<div class="container">
     <br><br><br> 
<!-- !!!!!!!!!! -->
<form action="" method="POST">
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
        <br><br><br>
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