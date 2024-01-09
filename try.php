<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body{
        background: grey;
        font-family: "raleway", sans-serif;
    }
    .center{
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .center button{
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 500;
        color:#2222;
        background-color: white;
        border:none;
        outline: none;
        cursor: pointer;
        border-radius: 5px;
    }
    .popup{
            display: none; /* Add this line to initially hide the popup */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 380px;
            padding: 20px 30px;
            background: white;
            box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.15);
            border-radius: 10px;
    }
    .popup .close-btn{
        position: absolute;
        top: 10px;
        right: 10px;
        background:#888;
        color: #eee;
        text-align: center;
        line-height: 15px;
        border-radius: 15px;
        cursor: pointer;
    }
    .popup .form h2{
        text-align: center;
        color: #222;
        margin: 10px;
        font-size: 25px;
    }
    .popup .form .form-element{
        margin: 15px 0px;
    }
    .popup .form .form-element label{
        font-size: 14px;
        color: #222;
    }
    .popup .form .form-element input{
        margin-top: 5px;
        display:block;
        width: 100%;
        padding: 10px;
        outline: none;
        border: 1px solid #aaa;
        border-radius: 5px;
    }
    .popup .form .form-element button{
        width: 100%;
        height: 40px;
        border:none;
        outline: none;
        font-size: 16px;
        background: #222;
        color: #f5f5f5;
        border-radius: 10px;
        cursor: pointer;
    }
    .popup .form .form-element a{
        display:block;
        text-align: right;
        font-size: 15px;
        color: #1a79ca;
        text-decoration: none;
        font-weight: 600;
    }
</style>
<body>
    <div class="center">
        <button id="show-login" >Login</button>
    </div>
<div class="popup">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Log in</h2>
        <div class="form-element">
            <label for="email"> Email: </label>
            <input type="email" id="email" placeholder="Enter Email">
        </div>
        <div class="form-element">
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Enter Username">
        </div>
        <div class="form-element">
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Enter Password">
        </div>
        <div class="form-element">
            <input type="checkbox" id="remember-me" >
            <label for="remember-me">Remember Me:</label>
        </div>
        <div class="form-element">
            <button type="submit">Sign in</button>
        </div>
        <div class="form-element">
            <a href="#" >Forgot Password?</a>
        </div>
    </div>
</div>
<script>
    // Function to show the login popup
    document.getElementById("show-login").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "block";
    });

    // Function to close the popup when the close button is clicked
    document.querySelector(".close-btn").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "none";
    });

    // Function to handle form submission (you can customize this)
    function signIn() {
        // Add your logic for form submission/validation here
        // For now, let's just close the popup
        document.querySelector(".popup").style.display = "none";
    }
</script>
</body>
</html>