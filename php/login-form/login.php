<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="username">Username/Email: <input type="text" name="username" id="username"></label>
            </div>
            <div class="form-group">
                <label for="password">Password: <input type="password" name="password" id="password"></label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="rememberme" id="rememberme"> Remember Me
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
</body>
</html>