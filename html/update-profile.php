<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!isset($_SESSION['userid'])) {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit();
}

require_once('dbconnect.php');

// Retrieve user ID from session
$userid = $_SESSION['userid'];

// Retrieve form data
$newPassword = password_hash($_POST['newpwd'], PASSWORD_DEFAULT);

// Update user's password in the database
$updateQuery = "UPDATE Users SET pwd = ? WHERE userid = ?";
$stmt = mysqli_prepare($connection, $updateQuery);
mysqli_stmt_bind_param($stmt, "si", $newPassword, $userid);
mysqli_stmt_execute($stmt);

// Check if update was successful
if (mysqli_stmt_affected_rows($stmt) > 0) {
	echo "Profile updated successfully!";
	header("Location: profile.php");
	exit(); 
} else {
    echo "Failed to update profile. Please try again.";
}

mysqli_close($connection);

?>

