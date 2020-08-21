<?php 
    session_start();
 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ./index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
</head>
<body>
    <form action="records.php" method="GET">
        <label>Date: </label>
        <input type="date" name="date">

        <br><br>
        <input type="submit">
    </form>
</body>
</html>