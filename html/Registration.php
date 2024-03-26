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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

echo "<br>";

$my_query = "SELECT * FROM Users WHERE email = '$email' OR username = '$username'";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0) {
    echo "<h1 class='error'>Sorry! This email or username already exists! Please log in.</h1>";
    
    //send them back to login
    echo "<p>Redirecting back to login...</p>";
    // Redirect back to the login page after 3 seconds
    header("refresh:3;url=index.php");
    exit();     
    
} else {
    $my_query = "INSERT INTO Users(fname, lname, username, email, pwd) VALUES ('$fname', '$lname', '$username', '$email', '$pwd')";
    echo "<br>";
    $result = mysqli_query($connection, $my_query);

    if($result) {
	// Registration successful, retrieve the userid from the database
    	$query = "SELECT userid FROM Users WHERE email = '$email'";
    	$result = mysqli_query($connection, $query);
    	$row = mysqli_fetch_assoc($result);
    	$userid = $row['userid'];


	// Store userid in the session
	$_SESSION['userid'] = $row['userid'];
	$_SESSION['username'] = $row['username'];
		
        echo "<h1 class='success'>Account Successfully Added!</h1>";
        echo "<h1>Hi, ".$_SESSION['username']."Welcome to RowdyBooks!</h1>";

        // Send an email to the email address provided
	require "verifyFunctions.php";
	sendCode($email);
	header("Location: verify.php");
    	die();
    } else {
        echo "<h1 class='error'><b>ERROR: Unable to add user</b></h1>";
    }
}

mysqli_close();
?>
