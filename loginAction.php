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

// Hash the password with the salt using SHA-512 algorithm
$pswd_hash = hash('sha512', $pswd . $salt);

// Compare the hashed password with the one stored in the database
$sql = "SELECT user_ID FROM user WHERE username_hash = :hashed_uname AND password_hash = :pswd_hash";

if (queryDB($sql)) {
    // session.JSON.loggedin=true
  echo "<script>alert('Database queried successfully, redirecting in 2 seconds');</script>";
  header("Location: update_success.php");
} else {
  echo "Error: " . queryDBError();
}
