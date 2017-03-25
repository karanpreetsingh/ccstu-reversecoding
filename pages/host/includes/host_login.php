	<?php
		session_start();
		include('connect.php');
		$user = 0;
		$host_name = $_POST['name'];
		$pass = $_POST['passkey'];
		$sql = "SELECT * FROM host where name = 'ccs_admin' and passkey = '".$pass."'";
		$result = $conn->query($sql);
    	if ($result->num_rows == 1) {
        	$row = $result->fetch_assoc();
        	session_start();
        	$_SESSION["host"] = 'ccs_admin';
        	$open = $row['open'];
        	echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host/host_dashboard\"; </script> ";
    	}else{
    		$_SESSION['host_loginerror'] = "INVALID PASS-KEY";
    		echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/host/host\"; </script> ";
    	}
		mysqli_close($conn);
	?>
