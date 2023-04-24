<?php

require "DBConnect.php";

// collect form data
$uname = $_GET["uname"];
$pswd = $_GET["pswd"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$addr = $_GET["addr"];
$city = $_GET["city"];
$state = $_GET["state"];
$zip = $_GET["zip"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$question = $_GET["question"];
$answer = $_GET["answer"];
$addr2 = $city . ", " . $state . " " . $zip;
$verified = 0;
$usertype = 3;

// TODO: VERIFY INPUTS HERE
// TODO: PASS ERROR STRING TO update_failed.php
// note: setting constraint within SQL does not seem to work, updates to SQL are still successful
// 

// pswd must be at least 8 long
if (strlen($pswd) <= 7){
    header("Location: update_failed_bad_input.php");
}

// username must be alphanumeric
if (!ctype_alnum($uname)) {
    // If $uname contains non-alphanumeric characters, handle the error here
    header("Location: update_failed_bad_input.php");
}

// first and last name must be alphabetic only
if (!ctype_alpha($fname)) {
  //$error_message=
  header("Location: update_failed_bad_input.php");
}

if (!ctype_alpha($lname)) {
  //$error_message=
  header("Location: update_failed_bad_input.php");  
}

// state and city must be alphabetic only
if (!ctype_alpha($city)) {
   //$error_message=
  header("Location: update_failed_bad_input.php");
}

if (!ctype_alpha($state)) {
  //$error_message=  
  header("Location: update_failed_bad_input.php");  
}



// generate random salt
$salt = bin2hex(random_bytes(16));

$sql = "insert into user values (0, '" . $uname . "', '" . $pswd . "', '" . "', '" . $salt . "', '" .
  $fname . "', '" . $lname . "', '" . $addr . "', '" . $addr2 . "', '" . 
  $addr2 . "', '" . $email . "', '" . $phone . "', '" . $question . "', '" . 
  $answer . "', '" . $verified . "' '" . $usertype . "')";

// returns user to index page upon successful database update
if (modifyDB($sql) == "Update Successful") {
  echo "Database successfully updated! You will be redirected in 2 seconds";
  sleep(2);
  header("Location: update_success.php");
} else {
  echo "Error: " . modifyDBError();
  
}
