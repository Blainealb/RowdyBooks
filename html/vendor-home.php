<!-------------------------------------- Modifications by Blaine Byrd: Admin Home Page --------------------------------------------
                * Connected to database to add user information 
                * Set up logic to send them back to login.php if incorrect email or password
                * NOTE: Need to add utsa email regex 
        --------------------------------------------------------------------------------------------------------------------------------->

<?php
session_start();

require_once('dbconnect.php');

$vendor_email = $_POST['vendor_email'];
$vendor_pwd = $_POST['vendor_pwd'];

// Fetch the user's hashed password from the database
$my_query = "SELECT * FROM Vendors WHERE vendor_email = '$vendor_email'";
$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['vendor_pwd']; // The hashed password stored in the database

    // Use password_verify to compare the entered password with the hashed password
    if (password_verify($vendor_pwd, $hashedPassword)) {
        // Password is correct

        // Store user data in session
        $_SESSION['vendor_id'] = $row['vendor_id'];
	$_SESSION['vendor_name'] = $row['vendor_name'];

        echo "<h1 class='success'>Congrats, you are now logged in</h1>";
        echo "<h1>Welcome back, ".$_SESSION['vendor_name']."!</h1>";
        echo "<p>The best website for trading your textbooks!</p>";
        header("Location: index.php");
    } else {
        // Password is incorrect
        echo "<h1 class='error'>Invalid password</h1>";
        echo "<p>Please try again...</p>";
        header("Location: vendor-login.php");
        exit();
    }
} else {
    // No user found with that email
    echo "<h1 class='error'>Invalid email or password</h1>";
    echo "<p>Please try again...</p>";
    header("refresh:3;url=vendor-login.php");
    exit();
}

mysqli_close();
?>

