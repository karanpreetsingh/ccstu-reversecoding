	<?php
		session_start();
		session_unset();
		session_destroy();
	    $servername = "localhost";
	    $username = "karanpreet813";
	    $password = "1029384756karan";
	    $dbname = "reverse_coding";
	    // Create connection
	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . $conn->connect_error);
	    } 
	    
	    $user = 0;
		$team_name = $_POST['name'];
		$pass = $_POST['passkey'];
		$sql = "SELECT * FROM participants where team_name = '".$team_name."' and passkey = '".$pass."'";
		$result = $conn->query($sql);
    	if ($result->num_rows == 1) {
        	$row = $result->fetch_assoc();
        	session_start();
        	$_SESSION["team"] = $team_name;
        	$flag = $row['code_submit'];
        	echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/dashboard.php\"; </script> ";
    	}else{
    		echo "Unautorized Access attemped! This has been Logged";
    	}
		mysqli_close($conn);
	?>
