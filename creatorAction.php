<?php

require 'DBConnect.php';
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$sql = "insert into creators values(0, '" . $firstname . "', '" . $lastname . "')";
echo modifyDB($sql)."<br>Use back button to return";
?>

