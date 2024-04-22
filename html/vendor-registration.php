<!-------------------------------------- Modifications by Blaine Byrd: Vendor Registration Page --------------------------------------------
                * Connected to database to add user information 
                * Set up logic if username or email already exists to send them back to login.php 
        --------------------------------------------------------------------------------------------------------------------------------->

<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
session_start();

require_once('dbconnect.php');

$vendor_name = $_POST['vendor_name'];
$vendor_email = $_POST['vendor_email'];
$vendor_pwd = password_hash($_POST['vendor_pwd'], PASSWORD_DEFAULT);

echo "<br>";

$my_query = "SELECT * FROM Vendors WHERE vendor_email = '$vendor_email' OR vendor_name = '$vendor_name'";
$result = mysqli_query($connection, $my_query);


if(mysqli_num_rows($result) > 0) {
    echo "<h1 class='error'>Sorry! This email or username already exists! Please log in.</h1>";
    //Redirect back to the login page after 3 seconds
    header("Location: vendor-login.php");
    exit();

} else {
        $my_query = "INSERT INTO Vendors(vendor_name, vendor_email, vendor_pwd) VALUES ('$vendor_name', '$vendor_email', '$vendor_pwd')";

        echo "<br>";
        $result = mysqli_query($connection, $my_query);

    if($result) {
        // Registration successful, retrieve the userid from the database
        $query = "SELECT vendor_id FROM Vendors WHERE vendor_email = '$vendor_email'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $vendorid = $row['vendor_id'];

        // Store admin_id in the session
        $_SESSION['vendor_id'] = $row['vendor_id'];
        echo "<h1 class='success'>Account Successfully Added!</h1>";
        echo "<h1>Hi, ".$_SESSION['vendor_name']."Welcome to RowdyBooks!</h1>";
	header("Location: index.php");
    } else {
        echo "<h1 class='error'><b>ERROR: Unable to add user</b></h1>";
    }
}
mysqli_close($connection);
?>
   
