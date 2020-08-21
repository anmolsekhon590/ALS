<?php 
    session_start();
 
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        header("location: ./insert-records.php");
        exit;
    }
?>