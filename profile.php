<?php
require 'DBConnect.php';
include 'header.php';
if (!(isset($_SESSION['userID']))) {
  header("Location:index.php");
  exit;
} else {
  $userID = $_SESSION['userID'];
//  global $username, $password, $firstname, $lastname, $addr1, $addr2, $email, 
//    $phone, $question, $answer;
  $sql = "select username, password, firstname, lastname, address1, address2," .
    "email, phone, securityquestion, securityanswer from users where userID = " .
    $userID;
  $result = queryDB($sql);
  if (gettype($result) == "object") {
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $username = $row['username'];
      $password = $row['password'];
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      $addr1 = $row['address1'];
      $addr2 = $row['address2'];
      $email = $row['email'];
      $phone = $row['phone'];
      $question = $row['securityquestion'];
      $answer = $row['securityanswer'];
    }
    echo "";
  } else {
    header("Location:index.php?msg=" . $result);
    exit;
  }
}
?>
<div class="container w-75 mt-3">
  <h3>Edit your info and click on Update button</h3>

  <form name="Profile" action="profileAction.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input class="form-control" value="<?php echo $username ?>" name="uname" disabled>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" value="<?php echo $password ?>" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="fname" class="form-label">Firstname:</label>
      <input class="form-control" value="<?php echo $firstname ?>" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Lastname:</label>
      <input class="form-control" value="<?php echo $lastname ?>" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="addr1" class="form-label"> Street Address:</label>
      <input class="form-control" value="<?php echo $addr1 ?>" name="addr1" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="addr2" class="form-label">City, State Zip:</label>
      <input class="form-control" value="<?php echo $addr2 ?>" name="addr2" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input class="form-control" value="<?php echo $email ?>" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone:</label>
      <input class="form-control" value="<?php echo $phone ?>" name="phone">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="question" class="form-label">Security Question:</label>
      <input class="form-control" value="<?php echo $question ?>" name="question" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="answer" class="form-label">Security Question:</label>
      <input class="form-control" value="<?php echo $answer ?>" name="answer" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>