<!-------------------------------------- Modifications by Blaine Byrd: Admin Registration Page --------------------------------------------
                * Connected to database to add user information 
                * Set up logic if username or email already exists to send them back to login.php 
        --------------------------------------------------------------------------------------------------------------------------------->

<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
session_start();

require_once('dbconnect.php');

$admin_fname = $_POST['admin_fname'];
$admin_lname = $_POST['admin_lname'];
$admin_username = $_POST['admin_username'];
$admin_email = $_POST['admin_email'];
$admin_pwd = password_hash($_POST['admin_pwd'], PASSWORD_DEFAULT);

echo "<br>";

$my_query = "SELECT * FROM Admin WHERE admin_email = '$admin_email' OR admin_username = '$admin_username'";
$result = mysqli_query($connection, $my_query);


if(mysqli_num_rows($result) > 0) {
    echo "<h1 class='error'>Sorry! This email or username already exists! Please log in.</h1>";
    //Redirect back to the login page after 3 seconds
    header("Location: login.php");
    exit();

} else {
        $my_query = "INSERT INTO Admin(admin_fname, admin_lname, admin_username, admin_email, admin_pwd) VALUES ('$admin_fname', '$admin_lname', '$admin_username', '$admin_email', '$admin_pwd')";

        echo "<br>";
        $result = mysqli_query($connection, $my_query);

    if($result) {
        // Registration successful, retrieve the userid from the database
        $query = "SELECT admin_id FROM Admin WHERE admin_email = '$admin_email'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $userid = $row['admin_id'];

        // Store admin_id in the session
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['admin_username'] = $row['admin_username'];
        echo "<h1 class='success'>Account Successfully Added!</h1>";
        echo "<h1>Hi, ".$_SESSION['admin_username']."Welcome to RowdyBooks!</h1>";

        header("Location: dashboard_admin.php");
	exit(); } else {
        echo "<h1 class='error'><b>ERROR: Unable to add user</b></h1>";
    }
}
mysqli_close();
?>
