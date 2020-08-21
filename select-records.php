<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
    <nav>
        <a href="./insert-records.php">Add Record</a>
        <a href="logout.php">Logout</a>
    </nav>
    <form action="records.php" method="GET">
        <label>Date: </label>
        <input type="date" name="date">

        <br><br>
        <input type="submit">
    </form>
</body>

</html>