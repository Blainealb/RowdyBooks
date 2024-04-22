<?php
session_start();

function sendCodeToAdmin($admin_email) {
    require "dbconnect.php";
    // Generate code to insert into database
    $code = rand(10000000, 99999999);
    // Code will expire after 10 minutes
    $expires = time() + (60 * 10);

    // Save code to database
    $query = "INSERT INTO Verify (code, expires, email) VALUES ('$code','$expires','$admin_email')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        // Send email with code to admin
        $to = "blainealb@icloud.com"; // Your email address
        $subject = "Verification Code for Admin Registration";
        $message = "The verification code for admin registration is: $code";
        $headers = "From: your_email@example.com"; // Replace this with your email address

        if (mail($to, $subject, $message, $headers)) {
            echo "Verification code sent to admin successfully.";
        } else {
            echo "Failed to send verification code to admin.";
        }
    } else {
        echo "An error occurred";
    }
}

// Call the function to send the verification code to the admin
sendCodeToAdmin("blainealb@icloud.com"); // Replace this with your email address
?>

