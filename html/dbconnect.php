<?php
//set connection variables
$host='localhost';
$username='azureuser4';
$password='z06Lk58:';
$database_name='RowdyBooksData';

//connection to server and database
$connection = mysqli_connect($host, $username, $password, $database_name);

//check connection
if (mysqli_connect_error()):
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
endif;

?>
