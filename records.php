<?php 
    $date = $_GET['date'];

    $dsn = "mysql:host=localhost;dbname=als_db;charset=utf8mb4";

    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn,$dbusername, $dbpassword);
    $stmt = $pdo->prepare("SELECT * FROM `records` WHERE `date` = '$date' ");
    $row = $stmt->fetch();
    $stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
</head>
<body>
    <table style="border: 2px solid black; border-collapse: collapse;">
        <tr style="border: 2px solid black; border-collapse: collapse;">
            <th>Team No.</th>
            <th>Name of Worker</th>
            <th>Name of Area</th>
            <th>Total No. of Houses Visited</th>
            <th>+ve Houses</th>
            <th>Containers Checked</th>
            <th>+ve Containers</th>
            <th>Group Meetings</th>
        </tr>

        <tr>
            <td><?php $row['teamNumber']?></td>
        </tr>
    </table>
</body>
</html>