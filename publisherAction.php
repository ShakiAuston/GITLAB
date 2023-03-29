<?php

require 'DBConnect.php';
$name = $_GET['name'];
$web = $_GET['web'];
$phone = $_GET['phone'];
$sql = "insert into publishers values(0, '" . $name . "', '" . $web . "', '" . $phone . "')";
echo modifyDB($sql)."<br>Use back button to return";
?>