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

$sql = "insert into users values (0, '" . $uname . "', '" . $pswd . "', '" .
  $fname . "', '" . $lname . "', '" . $addr . "', '" . $addr2 . "', '" . 
  $addr2 . "', '" . $email . "', '" . $phone . "', '" . $question . "', '" . 
  $answer . "', '" . $verified . "' '" . $usertype . "')";
echo modifyDB($sql) . "<br>Use back button to return";
?>
