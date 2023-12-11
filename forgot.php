<?php
error_reporting(0);
include 'function.php';
if (isset($_POST['submit'])) {
$email = $_POST['email'] ;
$sql="SELECT * FROM users WHERE email= '$email';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentPassword = $row['password'];
}else{
    $errorMessage = "Email not found";
}
require_once "C:\\xampp\\htdocs\\aet\\Mailer\\PHPMailerAutoload.php";
$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='khasabai337@gmail.com';
$mail->Password='yjuv ymrx cgnt ojvy';

$mail->setFrom('khasabai337@gmail.com', 'Here is your password');
$mail->addAddress($_POST["email"]);

$mail->isHTML(true);
$mail->Subject="Password Reset";
$mail->Body="<p>Dear user, </p> Your current password is <h2>" . $currentPassword . "</h2><br><h3> Upon logging in, please remember to change your password for added security. </h3>
<br><br>
";


$mail->send();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget Password</title>
<style>



</style>
</head>
<body>
    <h2>Forget Password</h2>
    <form action="#" method="post">
    <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit" name="submit">Reset Password</button>
    </form>

    <script>
         var error = <?php echo isset($errorMessage) ? json_encode(htmlspecialchars($errorMessage)) : "''"; ?>;
    if (error.trim() !== "") {
        var errorDiv = document.getElementById('errorMessage');
        errorDiv.innerHTML = error;
        errorDiv.style.display = 'block';
    }
    </script>
</body>
</html>