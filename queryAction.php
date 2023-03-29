<?php

require 'DBConnect.php';
include 'header.php';

$sql = $_GET['query'];
$result = queryDB($sql);
if (gettype($result) == "object") {
  echo "<table class='w3-table w3-striped w3-border'>";
  echo "<tr class='w3-green'>";
  while ($col = $result->fetch_field()) {
    echo "<th>" . $col->name . "</th>";
    $cols[] = $col->name;
  }
  echo '</tr>';
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<tr>';
      for ($i = 0; $i < count($cols); $i++)
        echo "<td>" . $row[$cols[$i]] . "</td>";
      echo '</tr>';
    }
  }
  echo '</table';
}
?>
