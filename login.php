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
  <h3>Login Form</h3>
  <p>Please complete the form:</p>  

  <form name="login" action="loginAction.php" class="was-validated">
    <div class="mb-3">
      <label for="uname" class="form-label">Username:</label>
      <input class="form-control" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Username entered.</div>
      <div class="invalid-feedback">Please Enter a Username.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Password entered.</div>
      <div class="invalid-feedback">Please Enter a Password.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>