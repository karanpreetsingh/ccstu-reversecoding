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
    
    $sql = "SELECT * FROM participants where team_name = '".$team."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user = $row['team_name'];
    }

    $uploadOk = 1;
	$target_dir = "../codes/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is a program - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not a program";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "c" && $imageFileType != "cpp" ) {
    echo "Sorry, only C and CPP files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$newfilename = $user;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "UPDATE participants SET code_submit=1 where team_name = '".$team."'";
        if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $sql = "UPDATE participants set filename = '".$_FILES["fileToUpload"]["name"]."' WHERE team_name = '".$team."'";
    echo $sql;
        if (mysqli_query($conn, $sql)) {
            session_start();
            echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/dashboard.php\"; </script> ";


        } 
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>