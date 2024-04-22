<!-------------------------------------- Modifications by Blaine Byrd: Admin Home Page --------------------------------------------
                * Connected to database to add user information 
                * Set up logic to send them back to login.php if incorrect email or password
                * NOTE: Need to add utsa email regex 
        --------------------------------------------------------------------------------------------------------------------------------->

<?php
session_start();

require_once('dbconnect.php');

$admin_email = $_POST['admin_email'];
$admin_pwd = $_POST['admin_pwd'];

// Fetch the user's hashed password from the database
$my_query = "SELECT * FROM Admin  WHERE admin_email = '$admin_email'";
$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['admin_pwd']; // The hashed password stored in the database

    // Use password_verify to compare the entered password with the hashed password
    if (password_verify($admin_pwd, $hashedPassword)) {
        // Password is correct

        // Store user data in session
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['admin_username'] = $row['admin_username'];

        echo "<h1 class='success'>Congrats, you are now logged in</h1>";
        echo "<h1>Welcome back, ".$_SESSION['admin_username']."!</h1>";
        echo "<p>The best website for trading your textbooks!</p>";
        header("Location: dashboard_admin.php");
    } else {
        // Password is incorrect
        echo "<h1 class='error'>Invalid email or password</h1>";
        echo "<p>Please try again...</p>";
        header("Location: login.php");
        exit();
    }
} else {
    // No user found with that email
    echo "<h1 class='error'>Invalid email or password</h1>";
    echo "<p>Please try again...</p>";
    header("refresh:3;url=admin-login.php");
    exit();
}

mysqli_close();
?>

