[NEEDS TESTING]
-Added return to index.php upon successful database update. Implemented redundantly in DBConnect.php and signupAction.php
-Changed sql database to store a password hash for the password; need to implement the same for the user; may need an object in the database to store the salt


[NEEDS DOING]
-Sanitize alphanumeric inputs (and other inputs)
-Sanitize forms from SQL injection (ban certain characters like /\)
