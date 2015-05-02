<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/default.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../ajax_request/accountdetails.js"></script>
    <script src="../ajax_request/payment.js"></script>
<!--    <script src="ajax_request/activity.js"></script>-->


    <!-- Fonts -->
    <script type="text/javascript">
    </script>

</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="dashboard.php" class="logo">
        <img src="../img/SocialEnvyLogoNew.PNG" width="150px" height="40" />
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div>
            <ul class="nav navbar-nav">
                <li class="header">
                    <a href="../index.php">HOME</a>
                </li>
                <li class="header">
                    <a href="../services.php">SERVICES</a>
                </li>
                <li class="header">
                    <a href="../team.php">TEAM</a>
                </li>
                <li class="header">
                    <a href="../guide.php">GUIDE</a>
                </li>
                <li class="header">
                    <a href="../contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
<!--                <li class="dropdown messages-menu">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                        <i class="fa fa-envelope"></i>-->
<!--                        <span class="label label-success">4</span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li class="header">You have 4 messages</li>-->
<!--                        <li>-->
<!--                            <!-- inner menu: contains the actual data -->
<!--                            <ul class="menu">-->
<!--                                <li><!-- start message -->
<!--                                    <a href="#">-->
<!--                                        <div class="pull-left">-->
<!--                                            <img src="img/avatar3.png" class="img-circle" alt="User Image"/>-->
<!--                                        </div>-->
<!--                                        <h4>-->
<!--                                            Welcome-->
<!--                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
<!--                                        </h4>-->
<!--                                        <p>Thanks for join SocialEnvy</p>-->
<!--                                    </a>-->
<!--                                </li><!-- end message -->
<!--                                <li><!-- start message -->
<!--                                    <a href="#">-->
<!--                                        <div class="pull-left">-->
<!--                                            <img src="img/avatar3.png" class="img-circle" alt="User Image"/>-->
<!--                                        </div>-->
<!--                                        <h4>-->
<!--                                            Welcome-->
<!--                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
<!--                                        </h4>-->
<!--                                        <p>Thanks for join SocialEnvy</p>-->
<!--                                    </a>-->
<!--                                </li><!-- end message -->
<!---->
<!--                                <li><!-- start message -->
<!--                                    <a href="#">-->
<!--                                        <div class="pull-left">-->
<!--                                            <img src="img/avatar3.png" class="img-circle" alt="User Image"/>-->
<!--                                        </div>-->
<!--                                        <h4>-->
<!--                                            Welcome-->
<!--                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
<!--                                        </h4>-->
<!--                                        <p>Thanks for join SocialEnvy</p>-->
<!--                                    </a>-->
<!--                                </li><!-- end message -->
<!---->
<!--                                <li><!-- start message -->
<!--                                    <a href="#">-->
<!--                                        <div class="pull-left">-->
<!--                                            <img src="img/avatar3.png" class="img-circle" alt="User Image"/>-->
<!--                                        </div>-->
<!--                                        <h4>-->
<!--                                            Welcome-->
<!--                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
<!--                                        </h4>-->
<!--                                        <p>Thanks for join SocialEnvy</p>-->
<!--                                    </a>-->
<!---->
<!--                                </li><!-- end message -->
<!---->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="footer"><a href="#">See All Messages</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <!-- Notifications: style can be found in dropdown.less -->
<!--                <li class="dropdown notifications-menu">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                        <i class="fa fa-warning"></i>-->
<!--                        <span class="label label-warning">10</span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li class="header">You have 10 notifications</li>-->
<!--                        <li>-->
<!--                            <!-- inner menu: contains the actual data -->
<!--                            <ul class="menu">-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="ion ion-ios7-people info"></i> 5 new members joined today-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="fa fa-users warning"></i> 5 new members joined-->
<!--                                    </a>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="ion ion-ios7-cart success"></i> 25 sales made-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="ion ion-ios7-person danger"></i> You changed your username-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="footer"><a href="#">View all</a></li>-->
<!--                    </ul>-->
<!--                </li>-->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span><?php session_start(); echo $_SESSION['login_user']; ?> <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img id="myImgid1" class="img-circle" alt="User Image" />
                            <p>
                                <?php session_start(); echo $_SESSION['login_user']; ?>
                                <small>Member since <?php session_start(); echo $_SESSION['date']; ?></small></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
<!--                        <li class="user-body">-->
<!--                            <div class="col-xs-4 text-center">-->
<!--                                <a href="#">Followers</a>-->
<!--                            </div>-->
<!--                            <div class="col-xs-4 text-center">-->
<!--                                <a href="#">Sales</a>-->
<!--                            </div>-->
<!--                            <div class="col-xs-4 text-center">-->
<!--                                <a href="#">Friends</a>-->
<!--                            </div>-->
<!--                        </li>-->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img id="img_url" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello,<?php session_start();  echo $_SESSION['login_user']; ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form -->
            <form id="formsubmit" action="activity.php" method="post" class="sidebar-form">
                <!--    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                    </div>-->

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <!--  <li>
                <a href="#">
                    <i class="fa fa-play"></i> <span>Start All</span> <small class="badge pull-right bg-green"><?php /*session_start(); echo $_SESSION['rowcount'];*/?></small>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-stop"></i> <span>Stop All</span> <small class="badge pull-right bg-red"><?php /*session_start(); echo $_SESSION['rowcount_stop'];*/?></small>
                </a>
            </li>-->

                    <li>
                        <a href="../addinstagramaccount.php">
                            <i class="fa fa-plus"></i> <span>Add Account</span> <small class="badge pull-right bg-blue"></small>
                        </a>
                    </li>
                    <!--    <li class="active">
                            <a href="https://api.instagram.com/oauth/authorize/?client_id=d699b2681e2644479f4b97b76b2bda33&redirect_uri=http://52.10.69.137/User/InstagramCallback.aspx&response_type=code&&scope=comments+likes+relationships">
                                <i class="fa fa-plus"></i> <span>Subscribe Instagram Application</span>
                            </a>
                        </li>-->

                    <li>
                        <a href="#">
                            <i class="fa fa-credit-card"></i> <span>Buy Time Package</span> <!--<small class="badge pull-right bg-green">new</small>-->
                        </a>
                    </li>
                    <li>
                        <a href="passwordreset.php">
                            <i class="glyphicon glyphicon-user"></i> <span>Profile</span> <!--<small class="badge pull-right bg-green">new</small>-->
                        </a>
                    </li>



                    <!--                    <li>-->
<!--                        <a href="calendar.html">-->
<!--                            <i class="fa fa-calendar"></i> <span>Calendar</span>-->
<!--                            <small class="badge pull-right bg-red">3</small>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="mailbox.html">-->
<!--                            <i class="fa fa-envelope"></i> <span>Mailbox</span>-->
<!--                            <small class="badge pull-right bg-yellow">12</small>-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Buy time package
                <small></small>
            </h1>
<!--            <ol class="breadcrumb">-->
<!--                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--                <li class="active">Buy Plans</li>-->
<!--            </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">

           <!--<div class="row" style="border-bottom:1px solid #ccc;">




                <div class="col-lg-6 col-md-6 col-sm-6">-->
                    <div id="plan-list"></div>
<!---->
<!--<!--                    <h4>Buy time package</h4>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>1 Day</strong></div>-->
<!--                        <div class="number" style="color:#000;"><strong>$2.97 Price</strong></div>-->
<!--                        <p class="no-margin">$0.00 Saving</p>-->
<!--                        <p class="no-margin">$2.97 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                   </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--<!--                    <p class="text-red">Extra time packages</p>-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-6 col-md-6 col-sm-6">-->
<!---->
<!--<!--                    <h4>Buy time package</h4>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--<!--                    <p class="text-red">Extra time packages</p>-->
<!---->
<!--               </div>-->
<!---->
<!---->
<!---->

<!--            </div><!-- top row ends -->
<!--            <div class="row" style="border-bottom:1px solid #ccc;">-->
<!---->
<!---->
<!---->
<!---->
<!--                <div class="col-lg-6 col-md-6 col-sm-6">-->
<!---->
<!--                    <!--                    <h4>Buy time package</h4>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>1 Day</strong></div>-->
<!--                        <div class="number" style="color:#000;"><strong>$2.97 Price</strong></div>-->
<!--                        <p class="no-margin">$0.00 Saving</p>-->
<!--                        <p class="no-margin">$2.97 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <!--                    <p class="text-red">Extra time packages</p>-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-6 col-md-6 col-sm-6">-->
<!---->
<!--                    <!--                    <h4>Buy time package</h4>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">-->
<!---->
<!--                        <div class="number"><strong>3</strong></div>-->
<!--                        <p class="no-margin">days</p>-->
<!--                        <div class="number" style="color:#000;"><strong>$1.99</strong></div>-->
<!--                        <p class="no-margin">$0.66 per day</p>-->
<!--                        <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>-->
<!--                    </div>-->
<!---->
<!--                    <!--                    <p class="text-red">Extra time packages</p>-->
<!---->
<!--                </div>-->
<!---->
<!---->
<!---->
<!---->
<!--            </div><!-- top row ends -->

        </section> <!-- /.content -->
    </aside> <!-- /.right-side -->
</div><!-- ./wrapper -->



<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/app.js" type="text/javascript"></script>

</body>
</html>
