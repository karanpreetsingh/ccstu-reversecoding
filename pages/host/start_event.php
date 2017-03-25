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
    if(isset($_SESSION["host"])){
        $user = $_SESSION["host"];
    }else{
        
        echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host/host_dashboard\"; </script> ";
    }
    $sql = "UPDATE host SET open=0 where name = 'ccs_admin'";
    $sql1 = "UPDATE host SET phase=1 where name = 'ccs_admin'";
    echo "Starting";
    if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
        if($conn->query("DELETE FROM participants") === TRUE && $conn->query("DELETE FROM submissions") === TRUE){
            echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host/host_dashboard\"; </script> ";
        }else{
            echo "Went wrong";
        }
    }else{
        echo "Laboom! Something went wrong!";
    }

?>