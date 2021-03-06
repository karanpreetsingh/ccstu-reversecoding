<?php
    require('includes/connect.php');
    session_start();
    if(isset($_SESSION["host"])){
        $host = $_SESSION["host"];
    }else{
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
    <?php include('./includes/getStyles.php'); ?>
</head>
<body>
    <div id="wrapper">
        <?php include('includes/sidebar.php'); ?>
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
                    <p>Welcome to Reverse coding host panel.</p>
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
    <?php include('includes/getJs.php'); ?>
</body>

</html>
