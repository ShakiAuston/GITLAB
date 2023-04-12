<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="public.php">public</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="user.php">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">admin</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
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
