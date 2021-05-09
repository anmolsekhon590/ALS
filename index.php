<?php
session_start();

if (isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true) {
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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
</head>

<body>
    <header>
        <h1>Login</h1>
    </header>
    <div class="container-form">
        <form action="process-login.php" method="POST">
            <div class="field">
                <label>Username: </label>
                <input class="textfield" type="text" name="login-username" autocomplete="off">
            </div>

            <div class="field">
                <label>Password: </label>
                <input class="textfield" type="password" name="login-password">
            </div>

            <br><br>
            <span style="color: grey">username: "demo" password: "tester"</span>
            <span class="message"><?php echo $loginmessage ?></span>
            
            <br><br>

            <div class="btn-container">
                <input class="btn-submit" type="submit">
            </div>
        </form>
    </div>
</body>

</html>