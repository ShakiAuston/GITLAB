<?php include 'header.php'; ?>
<div class="container w-75 mt-3">
  <h3>Sign Up Form to join the website</h3>
  <p>Please complete and submit the form below</p>

  <form name="signup" action="signupAction.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input class="form-control" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="fname" class="form-label">First Name:</label>
      <input class="form-control" placeholder="Enter firstname" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Last Name:</label>
      <input class="form-control" placeholder="Enter lastname" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="addr" class="form-label">Address:</label>
      <input class="form-control" placeholder="Street address" name="addr" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">City:</label>
      <input class="form-control" placeholder="Street address" name="city" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
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
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">Zip:</label>
      <input class="form-control" placeholder="Street address" name="zip" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input class="form-control" placeholder="Email address" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">phone:</label>
      <input class="form-control" placeholder="Street address" name="phone" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">Security Question:</label>
      <input class="form-control" placeholder="Street address" name="question" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="mb-3">
      <label for="addr" class="form-label">Security Answer</label>
      <input class="form-control" placeholder="Street address" name="answer" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
