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
    <title>Insert Records</title>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/insert-records.css">
</head>

<body>
    <nav>
        <a href="./select-records.php">View Records</a>
        <a href="logout.php">Logout</a>
    </nav>
    <header>
        <h1>Insert Records</h1>
    </header>
    <div class="container-form">
        <form action="process-insert-records.php" method="POST">

            <div class="field">
                <label>Date: </label>
                <input class="textfield" type="date" name="date">
            </div>

            <div class="field">
                <label>Team number: </label>
                <input class="textfield" type="number" name="teamNumber">
            </div>

            <div class="field">
                <label>Name of worker: </label>
                <input class="textfield" type="text" name="nameOfWorker">
            </div>

            <div class="field">
                <label>Area Visited: </label>
                <input class="textfield" type="text" name="areaVisited">
            </div>

            <div class="field">
                <label>Total Houses Visited: </label>
                <input class="textfield" type="number" name="houseVisited">
            </div>

            <div class="field">
                <label>Positive Houses: </label>
                <input class="textfield" type="number" name="positiveHouses">
            </div>

            <div class="field">
                <label>Total Containers Checked: </label>
                <input class="textfield" type="number" name="containerChecked">
            </div>

            <div class="field">
                <label>Positive Containers: </label>
                <input class="textfield" type="number" name="positiveContainers">
            </div>

            <div class="field">
                <label>Group Meetings: </label>
                <input class="textfield" type="number" name="groupMeetings">
            </div>


            <div class="btn-container">
                <input class="btn-submit" type="submit" value="Add Record">
            </div>
        </form>
    </div>
</body>

</html>