<?php
/**
 * File: verifyFunctions.php
 * Description: Provides the functions needed to send
 * verificatiopn codes and to check account
 * verification status.
 * @author Kaleb Phillips
 */

// Goobal variable for database connection
require "dbconnect.php";
$connection;

// If ajax was used to call a function in this file.
if (isset($_POST['functionname']) && isset($_POST['login']) && isset($_POST['email'])) {
	// Get the function name
	$name = $_POST['functionname'];
	// Get the login status and email
	$status = $_POST['login'];
	$email = $_POST['email'];

	// Convert login status from string to boolean
	if ($status == "true") {
		$loggedin = true;
	}
	else {
		$loggedin = false;
	};

	// If the function to call is sendCode
	if ($name == 'validRequest') {
		// Call the function and return the proper message to indicate the result
		$result = validRequest($loggedin, $email);
		if ($result == 0) {
			echo json_encode(["request" => "You're code has been sent"]);
		}
		else if ($result == 1) {
			echo json_encode(["request" => "You're already verified"]);
		}
		else if ($result == 2) {
			echo json_encode(["request" => "You are not logged in"]);
		}
		else {
			echo json_encode(["request" => "Error"]);
		}
	}
	// If tthe function to call is verifyCode
	else if ($name == 'verifyCode') {
		// Get the id of the user
		$id = $_POST['id'];
		// Get the code the user input
		$code = $_POST['code'];

		// Call the function and return the proper message to indicate the result
		$result = verifyCode($loggedin, $id, $email, $code);
		if ($result == 0) {
			echo json_encode(["code" => "Thank you for verifying you're email"]);
		}
		else if ($result == 1) {
			echo json_encode(["code" => "Code expired"]);
		}
		else if ($result == 2) {
			echo json_encode(["code" => "Wrong code"]);
		}
		else if ($result == 3) {
			echo json_encode(["code" => "You're already verified"]);
		}
		else if ($result == 4) {
			echo json_encode(["code" => "You are not logged in"]);
		}
		else {
			echo json_encode(["code" => "Error"])
		}
	}
}

/**
 * Function: checkVerified
 * Description: Searches for an email in the database and
 * checks if it has been verified by comparing the email
 * and email_verified columns to see if they match.
 * @param email - the email address to send the code to.
 * @return - a boolean with true if the email has been verified.
 */
function checkVerified ($email) {
	// Use the global variable for connection
	global $connection;
	// Search the database for the email
	$query = "SELECT * FROM Users WHERE email = '$email'";
	$result = mysqli_query($connection, $query);
	$row = $result->fetch_assoc();

	// If the email was found
	if($row > 0) {
		// Compare email to email_verified to determine if email has been verified
		if ($row['email'] == $row['email_verified']) {
			// The email is verified
			return true;
		}
		else {
			// The email is not verified
			return false;
		}
	}
	else {
		// The email was not found in database
		return false;
	}
}

/**
 * Function: sendCode
 * Description: Generates a verification code and sends
 * it as an email to the provided email address.
 * @param email - the email address to send the code to.
 * @return - an int with zero to indicate success.
 */
function sendCode ($email) {
	// Use the global variable for connection
    global $connection;
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
		$output = exec($command, $output, $return_var);
		// If the return value is zero, the code was sent
		return $return_var;
	}
	else {
		// Code was not inserted into database
		return 1;
	}
}

/**
 * Function: validRequest
 * Description: Validates that all the conditions
 * for a request to send a code have been met
 * and calls sendCode accordingly.
 * @param loggedin - a boolean with true if the user is loggedin..
 * @param email - the email address to send the code to.
 * @return - an int with zero to indicate success.
 */
function validRequest ($loggedin, $email) {
	// Check if user is logged in
	if ($loggedin) {
		// Check if the email has already been verified
		if(!checkVerified($email)) {
			// Send the new code
			$return_value = sendCode($email);
			// If the return value is zero, the code was sent
			return $return_value;
		}
		else {
			// User already verified
			return 1;
		}
	}
	else {
		// User not logged in
		return 2;
	}
}

/**
 * Function: validRequest
 * Description: Validates that all the conditions
 * for a request to send a code have been met
 * and calls sendCode accordingly.
 * @param loggedin - a boolean with true if the user is loggedin.
 * @param id - the user ID of the user.
 * @param email - the email address of the user..
 * @param code - the code entered by the user to validate.
 * @return - an int with zero to indicate success.
 */
//require "dbconnect.php";
function verifyCode ($loggedin, $id, $email, $code) {
	// Use the global variable for connection
	global $connection;
	// Check if user is logged in
	if ($loggedin) {
		// Check if the email has already been verified
		if(!checkVerified($email)) {
			// Check the length of the code before searching database
			if (strlen($code) < 8) {
				// Wrong code
				return 2;
			}

			// Search database for the code that was entered
			$query = "SELECT * FROM Verify WHERE code = '$code' AND email = '$email'";
			$result = mysqli_query($connection, $query);
			$row = $result->fetch_assoc();

			// If the code exists in the database
			if($row > 0) {
				// Get current time
				$time = time();

				// Check if code has expired
				if($row['expires'] > $time) {
					// Set the email as verified
					$query = "UPDATE Users SET email_verified = '$email' WHERE userid = '$id' LIMIT 1";
					$result = mysqli_query($connection, $query);
					// Successfully verified
					return 0;
				}
				else {
					// Code expired
					return 1;
				}
			}
			else {
				// Wrong code
				return 2;
			}
		}
		else {
			// User is already verified
			return 3;
		}
	}
	else
	{
		// User is not logged in
		return 4;
	}
}

?>
