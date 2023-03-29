<?php 
include 'header.php'; 
if (!(isset($_SESSION['name']))) {
  header("Location:index.php");
  exit;
}
?>

<div class="container-fluid">
  <div class="w3-container w3-pink">
    <div class="row">
      <div class="col-sm-10 w3-center"><h1>Staff Page</h1></div>
    </div>
  </div>  

  <div class="row">
    <div class="col-sm-4">
      <div class="w3-container w3-topbar w3-bottombar w3-border-purple">
        <h2>Add New Category</h2>
        <form name="category" action="categoryAction.php">
          <div class="form-group">
            <label>Name:</label>
            <input class="form-control" placeholder="Enter category name" 
                   name="name" required>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    <br>
    <div class="col-sm-4">
      <div class="w3-container w3-topbar w3-bottombar w3-border-purple">
        <h2>Add New Game Publisher</h2>
        <form name="publisher" action="publisherAction.php">
          <div class="form-group">
            <label>Name:</label>
            <input class="form-control" placeholder="Enter game publisher name" name="name" required>
          </div>
          <div class="form-group">
            <label>Web address:</label>
            <input class="form-control" placeholder="Enter comapny web address" name="web">
          </div>
          <div class="form-group">
            <label>Phone #:</label>
            <input class="form-control" placeholder="Enter comapny phone number" name="phone">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    <br>
    <div class="col-sm-4">
      <div class="w3-container w3-topbar w3-bottombar w3-border-red">
        <h2>Add New Creator</h2>
        <form name="creator" action="creatorAction.php">
          <div class="form-group">
            <label>First name:</label>
            <input class="form-control" placeholder="Enter first name" 
                   name="fname" required>
          </div>
          <div class="form-group">
            <label >Last name:</label>
            <input class="form-control" placeholder="Enter last name" 
                   name="lname" required>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-6">
      <div class="w3-container w3-topbar w3-bottombar w3-border-purple">
        <h2>Add New Game</h2>
        <form name="game" action="gameAction.php" method="post">
          <div class="form-group">
            <label>Title:</label>
            <input class="form-control" placeholder="Enter title" 
                   name="title" required>
          </div>
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
            <label>Today's Date: <?php echo date('m/d/Y') ?></label>
            <input type="hidden" value="<?php echo date('Y-m-d') ?>" name="date">
          </div>
          <div class="form-group">
            <label>Review:</label>
            <textarea name="review"rows="5" cols="60">Review:</textarea>
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
            <label>Select Category:</label>
            <select class="w3-select" name="catID" required>
              <option value="" disabled selected>Choose your option</option>
              <?php
              $sql2 = "select catID, name from subjects order by name";
              $result = queryDB($sql2);
              if (gettype($result) == "object") {
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['catID'] . "'>" .
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
    </form>
  </div>
</div>
</body>
</html>


