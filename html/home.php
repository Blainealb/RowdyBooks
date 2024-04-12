<!-------------------------------------- Modifications by Blaine Byrd: Home Page --------------------------------------------
                * Connected to database to add user information 
		* Set up logic to send them back to login.php if incorrect email or password
		* NOTE: Need to add utsa email regex 
        --------------------------------------------------------------------------------------------------------------------------------->

<?php
session_start();

require_once('dbconnect.php');

$email = $_POST['email'];
$pwd = $_POST['pwd']; // This is the password entered by the user in the login form

// Fetch the user's hashed password from the database
$my_query = "SELECT * FROM Users WHERE email = '$email'";
$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['pwd']; // The hashed password stored in the database
    
    // Use password_verify to compare the entered password with the hashed password
    if (password_verify($pwd, $hashedPassword)) {
        // Password is correct
        
        // Store user data in session
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $row['username'];
        
        echo "<h1 class='success'>Congrats, you are now logged in</h1>";
        echo "<h1>Welcome back, ".$_SESSION['username']."!</h1>";
        echo "<p>The best website for trading your textbooks!</p>";
        header("Location: index.php");  
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
    header("refresh:3;url=login.php");
    exit();
}

mysqli_close();
?>

