<?php
	$servername = "localhost";
    $username = "karanpreet813";
    $password = "1029384756karan";
    $dbname = "reverse_coding";
    $user = 0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    session_start();
    if(isset($_SESSION["team"])){
        $team = $_SESSION["team"];
    }else{
        echo "Not found";
        echo "<script> window.location=\"http://reversecoding.ccstu.in\"; </script> ";
    }
    
    $sql = "INSERT into submissions (team_name, answer, for_file) VALUES ('".$_SESSION["team"]."','".$_POST["answer"]." "."','".$_SESSION["filename"]."')";
    
        if (mysqli_query($conn, $sql)) {
            session_start();
            echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/dashboard.php\"; </script> ";


        } 
    
?>