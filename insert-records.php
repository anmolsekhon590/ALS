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
    <title>Insert Records</title>
</head>
<body>
    <nav>
        <a href="./select-records.php">View Records</a>
        <a href="logout.php">Logout</a>
    </nav>

    <h1>Insert Records</h1>
    <form action="process-insert-records.php" method="POST">
        
        <label>Date: </label>
        <input type="date" name="date">

        <br><br>
        <label>Team number: </label>
        <input type="number" name="teamNumber">

        <br><br>
        <label>Name of worker: </label>
        <input type="text" name="nameOfWorker">

        <br><br>
        <label>Area Visited: </label>
        <input type="text" name="areaVisited">
        
        <br><br>
        <label>Total Houses Visited: </label>
        <input type="number" name="houseVisited">
        
        <br><br>
        <label>Positive Houses: </label>
        <input type="number" name="positiveHouses">

        <br><br>
        <label>Total Containers Checked: </label>
        <input type="number" name="containerChecked">
        
        <br><br>
        <label>Positive Containers: </label>
        <input type="number" name="positiveContainers">

        <br><br>
        <label>Group Meetings: </label>
        <input type="number" name="groupMeetings">

        <br><br>
        <input type="submit">
    </form>
</body>
</html>