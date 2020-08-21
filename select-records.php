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
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/select-records.css">
</head>

<body>
    <header>
        <h1>View Records</h1>
    </header>
    <nav class="nav-bar">
        <a href="./insert-records.php">Go Back</a>
        <div class="spacer"></div>
        <a href="logout.php" style="margin-right: 20px;">Logout</a>
    </nav>

    <div class="container-form">
        <form action="records.php" method="GET">
            <label>Date: </label>
            <input class="field" type="date" name="date" placeholder="Select Date" required>

            <div class="btn-container">
                <input class="btn-submit" type="submit">
            </div>
        </form>
    </div>
</body>

</html>