<?php
require 'DBConnect.php';
include 'header.php';
if (!(isset($_SESSION['name']))) {
  header("Location:index.php");
  exit;
}
?>

<div class="container-fluid">
  <div class="w3-container w3-blue">
    <div class="row">
      <div class="col-sm-10 w3-center"><h1>Admin Page</h1></div>
    </div>
  </div>  

  <!-- FORMS -->
    <br>
    <div class="col-sm-4">
      <div class="w3-container w3-topbar w3-bottombar w3-border-blue">
        <h2>Add New Creator</h2>
        <form name="creator" action="creatorAction.php">
          <div class="form-group">
            <label>Name:</label>
            <input class="form-control" placeholder="Enter creator name" name="name" required>
          </div>
          <div class="form-group">
            <label>Phone:</label>
            <input class="form-control" placeholder="Enter phone number" name="phone">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    <br>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-6">
      <div class="w3-container w3-topbar w3-bottombar w3-border-blue">
        <h2>Add New Game</h2>
        <form name="book" action="gameAction.php" method="post">
          <div class="form-group">
            <label>Title:</label>
            <input class="form-control" placeholder="Enter title" 
                   name="title" required>
          </div
          <div class="form-group">
            <label>Year:</label>
            <input class="form-control" placeholder="Enter year" 
                   name="year" required>
          </div>
          <div class="form-group">
            <label>Edition:</label>
            <input class="form-control" placeholder="Enter edition" name="edition">
          </div>
          <div class="form-group">
            <label>Picture:</label>
            <input type="file" class="form-control" placeholder="Add Picture" name="pic">
          </div>
          <div class="form-group">
            <label>Price:</label>
            <input class="form-control" placeholder="Enter price" name="price">
          </div>
          <div class="form-group">
            <label>Quantity:</label>
            <input class="form-control" placeholder="Enter quantity" name="quantity">
          </div>
          <div class="form-group">
            <label>Today's Date: <?php echo date('m/d/Y') ?></label>
            <input type="hidden" value="<?php echo date('Y-m-d') ?>" name="date">
          </div>
          <div class="form-group">
            <label>Amazon Review:</label>
            <textarea name="review"rows="5" cols="60">Amazon Review:</textarea>
          </div>
          <div class="form-group">
            <label>Amazon Rating:</label>
            <input class="form-control" placeholder="Enter rating" name="rating">
          </div>
          <div class="form-group">
            <label>Staff: <?php echo $_SESSION['name'] ?></label>
            <input type="hidden" value="<?php echo $_SESSION['userID'] ?>" name="staff">
          </div>
          <div class="form-group">
            <label>Select publisher:</label>
            <select class="w3-select" name="pubID" required>
              <option value="" disabled selected>Choose your option</option>
              <?php
              $sql = "select pubID, name from publishers order by name";
              $result = queryDB($sql);
              if (gettype($result) == "object") {
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['pubID'] . "'>" .
                    $row['name'] . "</option>";
                  }
                }
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label>Select subject:</label>
            <select class="w3-select" name="subID" required>
              <option value="" disabled selected>Choose your option</option>
              <?php
              $sql2 = "select subID, name from subjects order by name";
              $result = queryDB($sql2);
              if (gettype($result) == "object") {
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['subID'] . "'>" .
                    $row['name'] . "</option>";
                  }
                }
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
</div>
</body>
</html>
