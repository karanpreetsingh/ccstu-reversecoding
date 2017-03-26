<?php
    require('includes/connect.php');
    session_start();
    if(isset($_SESSION["host"])){
        $host = $_SESSION["host"];
    }else{
        echo "<script> window.location=\"http://reversecoding.ccstu.in\"; </script> ";
    }
    
    $sql = "SELECT * FROM host where name = 'ccs_admin'";
    $sql_ques = "SELECT * FROM question_bank";
    $result_ques = $conn->query($sql_ques);
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
                    <h1 class="page-header">Question Bank</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class = "row">
                <div class = "col-md-12">
                    <p>Add new questions here. One of these questions will be allotted to the teams.</p>
                </div>
<div class = "col-md-12">
                
                
                     </div>   
            </div>
            
            <div class = "row">
                <div class = "col-md-12">
<?php
                        if(1){
                       ?>
    <div class="panel panel-default">
                        <div class="panel-heading">
                            Questions List
                        </div>
                        <!-- /.panel-heading -->
                        

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr><th>Q. No.</th><th>Question</th></tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            while($row = $result_ques->fetch_assoc()) {
                                                $uploaded = "No";
                                                echo "<tr><td>".$row['ques_number']."</a></td><td>".$row['question']."</td></tr>";
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
