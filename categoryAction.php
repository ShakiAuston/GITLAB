<?php

require 'DBConnect.php';
$name = $_GET['name'];
$sql = "insert into categories values(0, '" . $name . "')";
echo modifyDB($sql)."<br>Use back button to return";
?>

