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
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="styleshewet" type="text/css">
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
                session_start();
                if(isset($_SESSION['error'])){
                    echo "<div class=\"alert alert-danger\">".$_SESSION["error"]."</div>";
                }
            ?>
            
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reverse Coding | Backdoor Entry</h3>
                    </div>
                    <div class="panel-body">
                        <form action = "scripts/backdoor.php" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Team name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Pass-Key | Ask the organisers" name="passkey" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type = "submit" class="btn btn-lg btn-success btn-block">Start</button>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <p align = "center"><a href = "index">Normal Way</a>, Trust me, it's easier</p>
                <p align = "center"><a href = "host/host">Hosts' Portal</a></p>
            </div>
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