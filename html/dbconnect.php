<?php
// Retrieve credentials
$credentials = json_decode(exec('python3 /var/database/database.py'), true);

//set connection variables
$host=$credentials['host'];
$username=$credentials['username'];
$password=$credentials['password'];
$database_name=$credentials['database_name'];

//connection to server and database
$connection = mysqli_connect($host, $username, $password, $database_name);

//check connection
if (mysqli_connect_error()):
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
endif;

?>
