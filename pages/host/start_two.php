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
    $sql1 = "UPDATE host SET phase=2 where name = 'ccs_admin'";

    if ($conn->query($sql1) === TRUE) {
        
            echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host/host_dashboard\"; </script> ";
        
    }else{
        echo "Laboom! Something went wrong!";
    }

?>