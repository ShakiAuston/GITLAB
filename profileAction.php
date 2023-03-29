<?php

require "DBConnect.php";
session_start();
$userID = $_SESSION['userID'];
// collect form data
$pswd = $_GET["pswd"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$addr1 = $_GET["addr1"];
$addr2 = $_GET["addr2"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$question = $_GET["question"];
$answer = $_GET["answer"];

$sql = "update users set Password = '" . $pswd . "', Firstname ='" .
  $fname . "', Lastname = '" . $lname . "', Address1 = '" . $addr1 . 
  "', Address2 = '" . $addr2 . "', Email = '" . 
  $email . "', Phone = '" . $phone . "', SecurityQuestion = '" . $question .
  "', SecurityAnswer = '" . 
  $answer . "' where userID = ".$userID;
echo modifyDB($sql) . "<br>Use back button to return";
?>
