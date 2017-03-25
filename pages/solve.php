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
        $flag = $row['code_submit'];
    }
    if($flag == 1){
        echo "<script> window.location=\"http://reversecoding.ccstu.in/pages/dashboard.php\"; </script> ";
    }
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative Computing Society</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation --><!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Creative Computing Society</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Team <?php echo $user; ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="dashboard.php"><i class="fa fa-book fa-fw"></i> Instructions</a>
                        </li>
                        <?php

                            if($flag == 0){
                                echo" <li><a href=\"solve.php\"><i class=\"fa fa-dashboard fa-fw\"></i> Solve your program</a></li>";
                            }else if($flag == 1){
                                echo "<li><a href=\"#\"><i class=\"fa fa-files-o fa-fw\"></i> Decode programs<span class=\"fa arrow\"></span></a><ul class=\"nav nav-second-level\">";
                                $sql1 = "SELECT ID, name FROM users";
                                $result1 = $conn->query($sql1);
                                if ($result1->num_rows > 0) {
                                    // output data of each row
                                    while($row1 = $result1->fetch_assoc()) {
                                    echo "<li>";
                                    echo "<a href=\"blank.html\">Team ".$row1['name']."</a>";
                                    echo "</li>";
                                }
                                } 
                            }
                            ?>
                                                        
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Submit your code</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div id="sample">
                    <form action = "submit_code.php" enctype="multipart/form-data" method = "post">
                    <div class = "form-group">
                    <label>Make sure the name of your file is same as your team name! </label>
                            <label>Select your file </label>
                            <input class = "form-control" type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            
                            <button class = "btn btn-default" type = "submit">
                                Complete submission!
                            </button>
                            
                    </form>
            </div>
  
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.min.js"></script>

</body>

</html>
