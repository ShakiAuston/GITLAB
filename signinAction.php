<?php
require "DBConnect.php";

$user = $_POST["user"];
$pwd = $_POST["pwd"];

$sql = "select username, password, firstname, lastname from users where username = '".$user.
        "' and password = '".$pwd."'";
$result = queryDB($sql);
if (gettype($result) == "object") {
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    session_start();
    $_SESSION['id'] = $firstname." ".$lastname;
    header("Location:index.php");
        exit;
  } else
    echo "Login Failed";
} else
  echo $result . "<br>";
?>