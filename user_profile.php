<head> <link rel="stylesheet" href="CalendarTheme.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
// TODO import the navbar from the header.php file
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="./img/logo.png" width="50" height="50" title="Logo" alt="Logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="user.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="public.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>This is the user profile page</h1>
<br>
<h1>User must be logged in to access this page</h1>
</body>
