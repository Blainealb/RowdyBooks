<?php

// Used on the Azure virtual machine to keep credentials secure.
//----------------------------------------------------------------------------
/*
// Remove line below to comment out code
*/

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

// Remove line below to comment out code
/*
*/
//----------------------------------------------------------------------------

/** Used for running a server on a local machine with MAMP
 *  This code can be found at: http://localhost:8888/MAMP/
 *  While running your local server with MAMP.
 *  Your connection parameters should be the same as these
 *  by default, if you have modified them you will need to
 *  change them here to match your own connection parameters.
 */
//----------------------------------------------------------------------------
/*
// Remove line below to comment out code


$user = 'root';
$password = 'root';
$db = 'rowdybooksdata';
$host = 'localhost';
$port = 8889;

$connection = mysqli_init();
$success = mysqli_real_connect(
   $connection,
   $host,
   $user,
   $password,
   $db,
   $port
);

// Remove line below to comment out code

*/
//----------------------------------------------------------------------------

?>
