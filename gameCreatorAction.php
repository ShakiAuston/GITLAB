<?php

require 'DBConnect.php';
$gameID = $_GET['gameID'];
$authorID = $_GET['creatorID'];
$sql = "insert into gamecreator values(0, '" . $gameID . "', '" . $creatorID . "')";
echo modifyDB($sql)."<br>Use back button to return";
?>

