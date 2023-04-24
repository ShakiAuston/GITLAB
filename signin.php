<?php include 'header.php'; ?>

<div class="container mt-3">
    <h2>Sign In</h2>
    <form name="signin" action="signinAction.php" method="post">
        <div class="mb-3 mt-3">
            <label for="user">Username:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="user">
        </div>
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="forgotpwd.php">Forgot Password</a>
</div>
