<?php 
    $username = $_POST["login-username"];
    $password = $_POST["login-password"];

    $dsn = "mysql:host=localhost;dbname=als_db;charset=utf8mb4";

    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn,$dbusername, $dbpassword);
    
    // check if username is empty or not
    if (empty(trim($username))) {
        header("Location: ./index.php?message=please_enter_a_username");
    } else {
        // only select all usernames to check
        $stmt = $pdo->prepare("SELECT `username` FROM `userlogin` WHERE `username` = '$username' ");
        $stmt->execute();
        $row = $stmt->fetch();
        
        if ($row['username'] == $username) {
            // then check for password

            // selects everything
            $stmt = $pdo->prepare("SELECT * FROM `userlogin` WHERE `username` = '$username' ");
            $stmt->execute();
            $row = $stmt->fetch();
            
            if ($row['password'] == $password) {
                // all credentials are correct
                
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;

                header("Location: ./session.php");
            } else {
                header("Location: ./index.php?message=Invalid_Password");
            }
            
        } else {
            // then display error message
            header("Location: ./index.php?message=Invalid_Username");
        }
                
    }
?>