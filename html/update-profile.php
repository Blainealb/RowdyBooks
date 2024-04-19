<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Redirect user to login page if not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

require_once('dbconnect.php');

// Retrieve user ID from session
$userid = $_SESSION['userid'];

// Retrieve form data
$email = $_POST['email'];
$newPassword = $_POST['newpwd'];
$confirmPassword = $_POST['confirmpwd'];

// Check if the new password matches the confirmed password
if ($newPassword !== $confirmPassword) {
	$_SESSION['error'] = "Passwords do not match. Please try again.";
	header("Location: update-profile.php");	
    	exit();
}

// Hash the new password
$newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

// Update user's password in the database
$updateQuery = "UPDATE Users SET pwd = ? WHERE userid = ?";
$stmt = mysqli_prepare($connection, $updateQuery);
mysqli_stmt_bind_param($stmt, "si", $newPasswordHash, $userid);
mysqli_stmt_execute($stmt);

// Check if update was successful
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Profile updated successfully!";
    header("Location: profile.php");
    exit();
} else {
	$_SESSION['error'] = "Failed to update profile. Please try again.";
    	header("Location: update-profile.php");
    	exit();
}

mysqli_close($connection);
?>





































