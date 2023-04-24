<?php

require "DBConnect.php";

// collect form data
// WARNING: if functionality breaks, try changing $_POST to $_GET
$uname = $_POST["uname"];
$pswd = $_POST["pswd"];
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

$sql = "insert into user values (0, '" . $uname . "', '" . $pswd . "', '" .
  $fname . "', '" . $lname . "', '" . $addr . "', '" . $addr2 . "', '" . 
  $addr2 . "', '" . $email . "', '" . $phone . "', '" . $question . "', '" . 
  $answer . "', '" . $verified . "' '" . $usertype . "')";
// echo modifyDB($sql) . "<br>Use back button to return"; // professor's code

// returns user to index page upon successful database update
if (modifyDB($sql)) {
  echo "Database successfully updated! You will be redirected in 2 seconds";
  header("Location: index.php");
} else {
  echo "Error: " . modifyDBError();
}
?>

