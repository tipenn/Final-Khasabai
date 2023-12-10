

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <style>
   .here{
    background-color: lightblue;
    border:5px solid blue;
    border-radius: 10px;
    margin: 500px;

    transition-duration: .5s;
    transition-timing-function: ease;
    transition-delay: 0s;
   }
   .here:hover{
    transform: translateY(-2rem);
   }
   .content {
      border: 1px solid black;
      padding: 10px;
      display: none; /* Hide content initially */
    }
    </style>


    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>homepage</title>
    <link rel="icon" type="image/x-icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/369627246_289801410057308_7488894476029786008_n.png?_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeHREZSn9SSNmamdnSsRCcVxI9F0L_pc2Fgj0XQv-lzYWNfYyCBB0reg-zh1OLoO1jlcXtuHY_x2uQ3r8lBI6mYY&_nc_ohc=qWkxmDrrYZkAX9n5wr3&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTlJoLVkthf50CQvYCphnSimKF4flckWwAbIeWb2MQAig&oe=657E214B">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body class="bg-image" style="background-image: url('https://drive.google.com/uc?id=1VdMQTbNwy9vY_nWoi4Zmi67F8QM1QeTu'); background-size: cover;">
    
<div class="all" style="display: inline-block; cursor: pointer;" onclick="toggleContent('all')">All</div>
<div class="cleanser" style="display: inline-block; cursor: pointer;" onclick="toggleContent('cleanser')">Cleanser</div>

<div id="allContent" class="content">Content for All</div>
<div id="cleanserContent" class="content">Content for Cleanser</div>

<script>
  function toggleContent(element) {
    // Hide all content divs
    document.getElementById('allContent').style.display = 'none';
    document.getElementById('cleanserContent').style.display = 'none';

    // Show the clicked content div
    document.getElementById(element + 'Content').style.display = 'block';
  }
</script>
<button class="here">Click me</button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>