<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ./index.php");
    exit;
}

$date = $_GET['date'];

$dsn = "mysql:host=localhost;dbname=als_db;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT * FROM `records` WHERE `date` = '$date' ");
$stmt->execute();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/records.css">
</head>

<body>
    <header>
        <h1>Anti-Larvae Scheme, Civil Surgeon Office, Ludhiana</h1>
    </header>
    <nav>
        <a href="insert-records.php">Add Record</a>
        <a href="select-records.php">View Record</a>
        <a href="logout.php">Logout</a>
    </nav>
    <table>
        <tr>
            <th>Team No.</th>
            <th>Name of Worker(s)</th>
            <th>Name of Area</th>
            <th>Total No. of Houses Visited</th>
            <th>+ve Houses</th>
            <th>Containers Checked</th>
            <th>+ve Containers</th>
            <th>Group Meetings</th>
        </tr>

        <?php
        while ($row = $stmt->fetch()) {
        ?><tr>
                <td><?php echo $row['teamNumber'] ?></td>
                <td><?php echo $row['nameOfWorker'] ?></td>
                <td><?php echo $row['areaVisited'] ?></td>
                <td><?php echo $row['houseVisited'] ?></td>
                <td><?php echo $row['positiveHouses'] ?></td>
                <td><?php echo $row['containerChecked'] ?></td>
                <td><?php echo $row['positiveContainers'] ?></td>
                <td><?php echo $row['groupMeetings'] ?></td>
            </tr> <?php
                }
                    ?>

    </table>

    <button type="button" onclick="print()">Print</button>
</body>

</html>