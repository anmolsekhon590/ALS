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

    $dsn = "mysql:host=localhost;dbname=als_db;charset=utf8mb4";

    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn,$dbusername, $dbpassword);

    $stmt = $pdo->prepare("INSERT INTO `records`(`id`, `date`, `teamNumber`, `nameOfWorker`, 
    `areaVisited`,`houseVisited`, `positiveHouses`, `containerChecked`, `positiveContainers`,
     `groupMeetings`) VALUES (NULL ,'$date','$teamNumber','$nameOfWorker','$areaVisited', 
      '$houseVisited','$positiveHouses','$containerChecked','$positiveContainers', '$groupMeetings')");
    $stmt->execute();

    echo "Date: " . $date;
    echo "";
    echo "Team No: ". $teamNumber;
    echo "Name of Worker" . $nameOfWorker;
    echo "Area: " . $areaVisited ;
    echo "No. of Houses Visited: " . $houseVisited;
    echo "Positive Houses: " . $positiveHouses;
    echo "Container Checked: " . $containerChecked;
    echo "Positive Containers: " . $positiveContainers;
    echo "No. of Group Meetings: " . $groupMeetings;
?>

