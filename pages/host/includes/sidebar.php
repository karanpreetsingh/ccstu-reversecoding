<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="host_dashboard">Reverse Coding</a>
            </div>
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
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                       <li>
                            <a href="host_dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                            <a href="start_event.php"><i class="fa fa-play fa-fw"></i> Start the Event</a>
                        </li>
                        <?php
                        }
                        ?>
                        <li>
                            <a href="question_bank"><i class="fa fa-book fa-fw"></i> Question bank</a>
                        </li>       
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
