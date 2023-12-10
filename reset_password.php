<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;// reset_password.php
include 'function.php'; // Your database connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Set a default password or generate a new secure password
    $newPassword = 'new_secure_password'; // You can use a function to generate a secure password

    // Update the user's password in the database
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $query = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
    mysqli_query($conn, $query);

    // Send an email notification
    $subject = "Password Reset Confirmation";
    $message = "Your password has been reset. You can now log in with the new password: $newPassword";
    mail($email, $subject, $message);

    echo "Password reset successfully. Check your email for further instructions.";
}
?>