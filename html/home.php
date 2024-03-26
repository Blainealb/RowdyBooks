<?php
session_start();


// Check if the session variable is set
if(isset($_SESSION['userid'])) {
    // User session exists, the user is logged in
    echo "User session is active. User is logged in.";
} else {
    // User session does not exist, the user is not logged in
    echo "User session is not active. User is not logged in.";
}


require_once('dbconnect.php');

$email = $_POST['email'];
$pwd = $_POST['pwd'];

echo "<br>";

$my_query = "SELECT * FROM Users WHERE email = '$email' AND pwd = '$pwd' ";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Store user data in session
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['username'] = $row['username'];
			
    echo "<h1 class='success'>Congrats, you are now logged in</h1>";
    echo "<h1>Welcome back, ".$_SESSION['username']."!</h1>";
    echo "<p>The best website for trading your textbooks!</p>";

    
} else {
    echo "<h1 class='error'>Invalid email or password</h1>";
    echo "<p>Please try again...</p>";
    header("refresh:3;url=index.php");
    exit();
    
}

mysqli_close();

?>

