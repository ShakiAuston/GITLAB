<?php

require "DBConnect.php";

// collect form data using login.php
$uname = $_GET["uname"];
$pswd = $_GET["pswd"];


// hash form data using PHP sha512 built-in lib and a salt
////////////////////////////////////////////////////
///

// Hash the username without salt using SHA-512 algorithm
$uname_hash = hash('sha512', $uname);
$query = "SELECT salt FROM user WHERE username_hash = $uname_hash";

$stmt = $db->prepare($query);

// Bind the username parameter to the statement
$stmt->bind_param("s", $username);
// Execute the query
$stmt->execute();
// Bind the result to a variable
$stmt->bind_result($salt);
// Fetch the result
$stmt->fetch();
// Close the statement, The $salt variable now contains the salt value for the specified user
$stmt->close();


// Hash the password with the salt using SHA-512 algorithm
$pswd_hash = hash('sha512', $pswd . $salt);

// Compare the hashed password with the one stored in the database
$sql = "SELECT user_ID FROM user WHERE username_hash = :hashed_uname AND password_hash = :pswd_hash";
$stmt = $pdo->prepare($sql);
$stmt->execute([':hashed_uname' => $hashed_uname, ':pswd_hash' => $pswd_hash]);

// Check if there's a matching user in the database
if ($stmt->rowCount() == 1) {
    // Login successful! Redirect to the index page
    echo "Login successful! You'll be redirected soon";
    sleep(5);
    header("Location: index.php");
} else {
    // Login failed, show an error message
    echo "Invalid username or password.";
}

?>
