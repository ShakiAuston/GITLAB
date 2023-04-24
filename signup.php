<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include 'header.php'; ?>
  
<div class="container w-75 mt-3">
  <h3>Sign-Up Form</h3>
  <p>Please complete the form</p>
  <br>
  <form name="signup" action="signupAction.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input class="form-control" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please Put Something.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please Put Something.</div>
    </div>
    <div class="mb-3">
      <label for="fname" class="form-label">First Name:</label>
      <input class="form-control" placeholder="Enter firstname" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please Put Something.</div>
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Last Name:</label>
      <input class="form-control" placeholder="Enter lastname" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please Put Something.</div>
    </div>
    <div class="mb-3">
      <label for="addr" class="form-label">Address:</label>
      <input class="form-control" placeholder="Street address" name="addr" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please Put Something.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">City:</label>
      <input class="form-control" placeholder="Street address" name="city" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please Put Something.</div>
    </div>
    <div class="mb-3">
      <label for="state" class="form-label">State:</label>
      <select class="form-select" name="state" required>
        <option value="">Select your state from the list below</option>
        <option value="MA">Massachusetts</option>
        <option value="NH">New Hampshire</option>
        <option value="CO">Colorado</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="NY">New York</option>
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please enter a valid state.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">Zip:</label>
      <input class="form-control" placeholder="zip" name="zip" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please enter a valid ZIP.</div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input class="form-control" placeholder="email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please enter a valid email.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">phone:</label>
      <input class="form-control" placeholder="phone" name="phone" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please enter a valid 10 digit phone number.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">Security Question:</label>
      <input class="form-control" placeholder="Street address" name="question" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please enter a security question.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">Security Answer</label>
      <input class="form-control" placeholder="Street address" name="answer" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please specify an answer.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>