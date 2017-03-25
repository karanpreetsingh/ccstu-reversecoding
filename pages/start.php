	<?php
	session_start();
	session_unset();
	session_destroy();
	    $servername = "localhost";
	    $username = "karanpreet813";
	    $password = "1029384756karan";
	    $dbname = "reverse_coding";
	    $user = 0;
	    // Create connection
	    $conn = mysqli_connect($servername, $username, $password, $dbname);


	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . $conn->connect_error);
	    } 

		$team_name = $_POST['name'];
		$member1 = $_POST['member1'];
		$member2 = $_POST['member2'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$sql = "INSERT into participants (team_name, member1, member2, phone, email) VALUES ('".$team_name."','".$member1."','".$member2."','".$phone."','".$email."')";
		if (mysqli_query($conn, $sql)) {
			session_start();
    	 	$_SESSION["team"] = $team_name;
    		echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/dashboard.php\"; </script> ";


		} 
		mysqli_close($conn);
	?>
