<?php

require 'DBConnect.php';
$gameID = $_POST['gameID'];
$title = $_POST['title'];
$year = $_POST['year'];
$edition = $_POST['edition'];
$cover = $_POST['pic'];
$price = $_POST['price'];
$rating = $_POST['review'];
$staffID = $_POST['staffID'];
$pubID = $_POST['pubID'];
$catID = $_POST['catID'];
$sql = "insert into books values(0, '" . $gameID . "', '" . $title . "', '" .
  $year ."', '" . $edition . "', '" . $cover . "', '" . $price . "', '" . $rating . "', '" .
  $staffID . "', '" . $pubID . "', '" . $catID ."')";
echo modifyDB($sql)."<br>Use back button to return";
?>

