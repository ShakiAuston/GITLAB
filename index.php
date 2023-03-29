<?php
include 'header.php';
if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

require 'DBConnect.php';
$sql = "select Title, Year, Edition, Cover, Price, Rating from books";
$result = queryDB($sql);
$colCount = 0;
if (gettype($result) == "object") {
  if ($result->num_rows > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
      $colCount += 1;
      $title = $row['Title'];
      $year = $row['Year'];
      $edition = $row['Edition'];
      $cover = $row['Cover'];
      $price = $row['Price'];
      $rating = $row['Rating'];
      ?>
      <div class="col card">
        <img class="card-img-top" src="other\<?php echo $cover ?>" style="height:300px">
        <div class="card-body">
          <h4 class="card-title"><?php echo $title ?></h4>
          <p class="card-text">
            Year: <?php echo $year ?><br>
            Edition: <?php echo $edition ?><br>
            Price: $<?php echo $price ?><br>
            Rating: <?php echo $rating ?>
          </p>
          <a href="cart.php?Title='<?php echo $title ?>' & Price=<?php echo $price ?>" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <?php
      if ($colCount%5 == 0) {
        echo '</div><div class="row">';
      }
    }
    echo '</div>';
  }
} else {
  echo $result;
}
?>



</body>
</html>