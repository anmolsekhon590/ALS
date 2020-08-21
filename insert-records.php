<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Records</title>
</head>
<body>
    <h1>Insert Records</h1>
    <form action="process-insert-records.php" method="POST">
        
        <label>Date:  </label>
        <input type="date" name="date">

        <br><br>
        <label>Team number: </label>
        <input type="number" name="">

        <br><br>
        <label>Name of worker: </label>
        <input type="text" name="">

        <br><br>
        <label>Area Visited: </label>
        <input type="text" name="">
        
        <br><br>
        <label>Total Houses Visited: </label>
        <input type="number" name="">
        
        <br><br>
        <label>Positive Houses: </label>
        <input type="number" name="">

        <br><br>
        <label>Total Containers Checked: </label>
        <input type="number" name="">
        
        <br><br>
        <label>Group Meetings: </label>
        <input type="number" name="">

        <br><br>
        <input type="submit">
    </form>
</body>
</html>