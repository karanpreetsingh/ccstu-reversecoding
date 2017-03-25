<?php
    $servername = "localhost";
    $username = "karanpreet813";
    $password = "1029384756karan";
    $dbname = "reverse_coding";
    $user = 0;
    $flag = 0;
    $submitted = 0;
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
        echo "<script> window.location=\"http://reversecoding.ccstu.in\"; </script> ";
    }
    $sql = "SELECT * FROM submissions where team_name = '".$_SESSION["team"]."' AND for_file = '".$_GET['file']."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $submitted = 1;
    }
    $sql = "SELECT * FROM participants where team_name = '".$team."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user = $row['team_name'];
        $flag = $row['code_submit'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    *{
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reverse Coding | Creative Computing Society</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

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

        <!-- Navigation -->
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
                                $dir = "../codes/";
                                if(is_dir($dir)){
                                    if ($dh = opendir($dir)){
                                        while (($file = readdir($dh)) !== false){
                                            if($file == ".." || $file == "dashboard.php" || $file == "." )
                                                continue;
                                            $_SESSION["filename"] = $_GET['file'];
                                            echo "<li>";
                                            echo "<a href=\"decoder.php?file=".$file."\">File Name: ".$file."</a>";
                                            echo "</li>";
                                        }
                                    closedir($dh);
                                    }
                                }else{
                                    die("Boom!");
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reverse coding | <?php echo $_GET['file']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class = "row">
                
            </div>
            <?php 
                    if(!$submitted){
                ?>
            <div class = "row">
                <?php
                    if($flag == 1){
                        echo "<div class= \"col-md-12\"><label>Now it's time to be super awesome and decode your competitiors' code. Refresh to load more codes as they are uploaded.</label></div>";   
                    }
                ?>
            
            </div>

            <div class = "row">
                <div class = "col-md-12">

                    <p>
                    <?php
                      $file = "../codes/".$_GET['file'];
                        echo "<iframe src=\"".$file."\" frameborder=\"0\" height=\"400\" width=\"95%\"></iframe>"
?>
                    </p>
                </div>
                </div>
                
                <div class = "row">
                <form method = "post" action = "answer.php">
                <div class = "col-md-8">
                    <input type = "text" name = "answer" class = "form-control" placeholder = "Your answer" required/>
                    </div>
                    <div class = "col-md-4"><button  class = "btn btn-default">Submit Answer</button></div>
                    </form>
            </div>
            <?php
                }else{
                    echo "<div class = 'container'><b>You have already submitted this one. You might want to try another one</b></div>";
                }
            ?>
            <br><br>
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

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.min.js"></script>

</body>

</html>
