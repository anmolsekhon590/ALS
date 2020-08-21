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
    <header>
        <h1>Insert Records</h1>
    </header>
    <nav class="nav-bar">
        <div>
            <a href="./select-records.php">View Records</a>
        </div>
        <div class="spacer"></div>
        <div style="margin-right: 20px;">
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="container-form">
        <form action="process-insert-records.php" method="POST">

            <div class="field">
                <label>Date: </label>
                <input class="textfield" type="date" name="date" required>
            </div>

            <div class="field">
                <label>Team number: </label>
                <input class="textfield" type="number" name="teamNumber" required>
            </div>

            <div class="field">
                <label>Name of worker(s): </label>
                <textarea class="textfield" type="text" name="nameOfWorker" rows="2" required> </textarea>
            </div>

            <div class="field">
                <label>Area Visited: </label>
                <textarea class="area-field" type="text" name="areaVisited" rows="4" maxlength="255" required></textarea>
            </div>

            <div class="field">
                <label>Total Houses Visited: </label>
                <input class="textfield" type="number" name="houseVisited" required>
            </div>

            <div class="field">
                <label>Positive Houses: </label>
                <input class="textfield" type="number" name="positiveHouses" required>
            </div>

            <div class="field">
                <label>Total Containers Checked: </label>
                <input class="textfield" type="number" name="containerChecked" required>
            </div>

            <div class="field">
                <label>Positive Containers: </label>
                <input class="textfield" type="number" name="positiveContainers" required>
            </div>

            <div class="field">
                <label>Group Meetings: </label>
                <input class="textfield" type="number" name="groupMeetings" required>
            </div>


            <div class="btn-container">
                <input class="btn-submit" type="submit" value="Add Record">
            </div>
        </form>
    </div>
</body>

</html>