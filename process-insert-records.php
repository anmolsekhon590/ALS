<?php 
    $date = $_POST['date'];
    $teamNumber = $_POST['teamNumber'];
    $nameOfWorker = $_POST['nameOfWorker'];
    $areaVisited = $_POST['areaVisited'];
    $houseVisited = $_POST['houseVisited'];
    $positiveHouses = $_POST['positiveHouses'];
    $containerChecked = $_POST['containerChecked'];
    $positiveContainers = $_POST['positiveContainers'];
    $groupMeetings = $_POST['groupMeetings'];

    $dsn = "mysql:host=us-cdbr-east-03.cleardb.com;dbname=als_db;charset=utf8mb4";

    $dbusername = "bc56ac4fed54dd";
    $dbpassword = "cafe0be2";

    $pdo = new PDO($dsn,$dbusername, $dbpassword);

    $stmt = $pdo->prepare("INSERT INTO `records`(`id`, `date`, `teamNumber`, `nameOfWorker`, 
    `areaVisited`,`houseVisited`, `positiveHouses`, `containerChecked`, `positiveContainers`,
     `groupMeetings`) VALUES (NULL ,'$date','$teamNumber','$nameOfWorker','$areaVisited', 
      '$houseVisited','$positiveHouses','$containerChecked','$positiveContainers', '$groupMeetings')");
    $stmt->execute();

    echo "Record Added Sucessfully";
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
        <a href="insert-records.php">Add Record</a>
    </nav>
</body>
</html>