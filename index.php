<?php
    session_start();
 
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        header("location: ./insert-records.php");
        exit;
    }

    $loginmessage = $_GET['message'];
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

        <span><?php  ?></span>
        
        <input type="submit">
    </form>
</body>
</html>