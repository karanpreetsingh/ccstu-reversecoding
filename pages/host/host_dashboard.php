<?php
    $servername = "localhost";
    $username = "karanpreet813";
    $password = "1029384756karan";
    $dbname = "reverse_coding";
    $user = 0;
    $out_of_season = 0;
    $phase = 0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    session_start();
    if(isset($_SESSION["host"])){
        $host = $_SESSION["host"];
    }else{
        echo "HOST NOT FOUND!";
        echo "<script> window.location=\"http://reversecoding.ccstu.in\"; </script> ";
    }
    
    $sql = "SELECT * FROM host where name = 'ccs_admin'";
    $sql_part = "SELECT * FROM participants ORDER BY score DESC";
    $result_part = $conn->query($sql_part);
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user = $row['name'];
        $out_of_season = $row['open'];
        $phase = $row['phase'];
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

    <title>Reverse Coding | Creative Computing Society</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

     <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="host_dashboard.php">CREATIVE COMPUTING SOCIETY</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $user; ?></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../index"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="host_dashboard"><i class="fa fa-book fa-fw"></i> Dashboard</a>
                        </li>
                        <?php
                        
                          if(!$out_of_season){
                        ?>  
                        <li>
                        <?php
                            if($phase == 2){
                                echo "<a href='stop_event.php'><i></i> Stop the Event</a>";
                            }else{
                                echo "<a href='start_two.php'><i></i> Start decoding</a>";
                            }
                        ?>
                            
                        </li>
                        <?php
                            }else{
                        ?>
                        <li>
                            <a href="start_event.php"><i class="fa fa-social fa-fw"></i> Start the Event</a>
                        </li>
                        <?php
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
                    <h1 class="page-header">Reverse coding</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class = "row">
                <div class = "col-md-12">
                    <p>Welcome to Reverse coding host panel, I know it's crappy.</p>
                </div>
<div class = "col-md-12">
                
                <?php
                    if(!$out_of_season){
                ?>
                <div class="alert alert-success">
                            An event is going on currently. <?php if($phase == 1) {echo "<br><b>PHASE: CODING GOING ON</b></br>";}else{echo "<br><b>PHASE: DECODING GOING ON</b></br>";} ?>
                </div>
<?php
            }else{
?>
<div class="alert alert-danger">
                            No event if going on currently. Starting a new event will delete the previous records! <b>DO NOT START A NEW EVENT BEFORE DECLARING THE PREVIOUS RESULTS</b>
                </div>
                <?php
            }
                ?>

                     </div>   
            </div>
            
            <div class = "row">
                <div class = "col-md-12">
<?php
                        if(1){
                       ?>
    <div class="panel panel-default">
                        <div class="panel-heading">
                            Participating Teams
                        </div>
                        <!-- /.panel-heading -->
                        

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr><th>Team Name</th><th>Member 1</th><th>Member 2</th><th>Program Uploaded?</th><th>Score</th>
                                    </thead>
                                    <tbody>
                                       <?php
                                            while($row = $result_part->fetch_assoc()) {
                                                $uploaded = "No";
                                                if($row['code_submit'] == 1){
                                                    $uploaded = "Yes";
                                                }
                                            echo "<tr><td><a href = 'submissions?team=".$row['team_name']."'>".$row['team_name']."</a></td><td>".$row['member1']."</td><td>".$row['member2']."</td><td>".$uploaded."</td><td>".$row['Score']."</td></tr>";
                                         }
                                        ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <?php
                        }
                    ?>

                </div>
            </div>
            <div class = "row">
                <div class = "col-md-12">
                    
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>
    <script src="../../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.min.js"></script>

</body>

</html>
