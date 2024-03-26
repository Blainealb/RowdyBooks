<?php
/**
 * File: verifyFunctions.php
 * Description: Provides the functions needed to send
 * verificatiopn codes and to check account
 * verification status.
 * @author Kaleb Phillips
 */

/**
 * Function: checkVerified
 * Description: Searches for an email in the database and
 * checks if it has been verified by comparing the email
 * and email_verified columns match.
 * @param email - the email address to send the code to.
 * @return - a boolean with true if the email has been verified.
 */
function checkVerified ($email) {
	require "dbconnect.php";
        // Search the database for the email
	$query = "SELECT * FROM Users WHERE email = '$email'";
        $result = mysqli_query($connection, $query);
	$row = $result->fetch_assoc();

	// If the email was found
        if($row > 0) {
	    // Compare email to email_verified to determine if email has been verified
	    if ($row['email'] == $row['email_verified']) {
	        return true;
	    }
	}
	return false;
}

/**
 * Function: sendCode
 * Description: Generates a verification code and sends
 * it as an email to the provided email address.
 * @param email - the email address to send the code to.
 */
function sendCode ($email) {
	require "dbconnect.php";
        // Generate code to insert into database
        $code = rand(10000000,99999999);
        // Code will expire after 10 minutes
        $expires = time() + (60 * 10);

        // Save code to database
        $query = "INSERT INTO Verify (code, expires, email) VALUES ('$code','$expires','$email')";
        $result = mysqli_query($connection, $query);
        if($result) {
                // Send email with code
                $command = escapeshellcmd("/var/www/python/sendEmail.py $email $code");
                $output = shell_exec($command);
                echo $output;
        }
        else {
                echo "An error occurred";
        }
}

?>
