<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reverse Coding</title>
    <?php include('./includes/getStyles.php'); ?>
</head>
<body>
    <div class="container">
        <img src = "../img/logo.png" class = "center-block logo-main"/>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reverse Coding | HOST</h3>
                    </div>
                    <div class="panel-body">
                        <form action = "includes/host_login.php" role="form" method="post">
                            <fieldset>
                                <?php 
                                    session_start();
                                    if(isset($_SESSION['host_loginerror'])){
                                        echo "<div class='alert alert-danger'>Invalid Pass-key. Please contact the site admin</div>";
                                        unset($_SESSION['host_loginerror']);
                                    } 
                                    session_destroy();
                                ?>
                            
                                <div class="form-group">
                                    <input class="form-control" placeholder="Pass-Key" name="passkey" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type = "submit" class="btn btn-lg btn-success btn-block">Start</button>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <p align = "center">Powered by <a href = "https://www.ccstu.in">Creative computing Society</a></p>
            </div>
        </div>
    </div>
    <?php include('includes/getJs.php'); ?>
</body>
</html>
