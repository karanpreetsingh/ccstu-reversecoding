<?php
	$servername = "localhost";
    $username = "karanpreet813";
    $password = "1029384756karan";
    $dbname = "reverse_coding";
    $user = 0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    $team = $_SESSION['team_in_question'];
    // Check connection
    $score = $_GET['score'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    session_start();
       
    $sql = "UPDATE participants set score = '".$score."' WHERE team_name = '".$team."'";
    
        if (mysqli_query($conn, $sql)) {
            session_start();
            echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host/host_dashboard\"; </script> ";


        } 
    
?>