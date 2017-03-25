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
        
        echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host_dashboard.php\"; </script> ";
    }
    $sql = "UPDATE host SET open=1 where name = 'ccs_admin'";
    if ($conn->query($sql) === TRUE) {
    
    echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host_dashboard.php\"; </script> ";
    }else{
        echo "Kaboom! Something went wrong";
    }

?>