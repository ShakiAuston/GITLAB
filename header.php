<head>
    <link rel="stylesheet" href="CalendarTheme.css">
    <script>
        var hasJS = ('querySelector' in document && 'addEventListener' in window);
        if (!hasJS) {window.location.href = 'nojs.php';} // Redirect to a JavaScript-disabled version of the page
</script>

</head>

<body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./img/logo.png" width="50" height="50" title="Logo" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_profile.php">My Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
