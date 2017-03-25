<?php
    $out_of_season = 1;
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
        
    $sql = "SELECT * FROM host where name = 'ccs_admin'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $out_of_season = $row['open'];
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

    <title>Reverse Coding</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel = "icon" href = "myicon.png" type = "image/png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
    <div class = "row">
    <br><br>
        <center>
            <img src = "img/logo.png" height = 80px width = 150px/>
        </center>
        <br><br><br>
    </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php
                if($out_of_season){
            ?>
                <div class="panel panel-danger">
                        <div class="panel-heading">
                            Out Of Season
                        </div>
                        <div class="panel-body">
                            <p>No competition is being hosted at present. Get in touch with our <a href = "https://www.facebook.com/CCSTU">Facebook page </a> to know more about any upcoming Reverse Coding Event!</p>
                        </div>

                    </div>
                    <p align = "center">If you are the host of Reverse Coding, <a href = "host/host">Click here</a></p>

            <?php
                }else{
            ?>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reverse Coding</h3>
                    </div>

                    <div class="panel-body">
                        <form action = "scripts/start.php" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Team name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Member 1" name="member1" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Member 2" name="member2" type="text" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" name="phone" type="text" value="" maxlength = "10">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type = "submit" class="btn btn-lg btn-success btn-block">Start</button>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <p align = "center"><a href = "login">Backdoor Entry</a>, Allowed only if your were stuck somewhere</p>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class = "row footer text-center">
            Powered by CCS
        </div>
    </div>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
