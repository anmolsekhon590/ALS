<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="process-login.php" method="POST">
        <label>Username: </label>
        <input type="text" name="login-username" autocomplete="off">
        
        <br><br>
        
        <label>Password: </label>
        <input type="password" name="login-password">
        
        <br><br>
        
        <input type="submit">
    </form>
</body>
</html>