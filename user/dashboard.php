

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
<!--        <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />-->
        <!-- jvectormap -->
<!--        <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />-->
        <!-- fullCalendar -->
<!--        <link href="../css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />-->
        <!-- Daterange picker -->
<!--        <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />-->
        <!-- bootstrap wysihtml5 - text editor -->
<!--        <link href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />-->
        <!-- Theme style -->
        <link href="../css/default.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
         <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script src="../ajax_request/accountdetails.js"></script>
        <script src="../js/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" href="../css/jquery.alerts.css" media="screen"/>
        <script src="../js/jquery.alerts.js"></script>

        <script type="text/javascript">
        </script>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="dashboard.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                SocialEnvy
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
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Welcome
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Thanks for join SocialEnvy</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Welcome
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Thanks for join SocialEnvy</p>
                                            </a>
                                        </li><!-- end message -->

                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Welcome
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Thanks for join SocialEnvy</p>
                                            </a>
                                        </li><!-- end message -->

                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Welcome
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Thanks for join SocialEnvy</p>
                                            </a>
                                        </li><!-- end message -->

                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php session_start(); echo $_SESSION['login_user']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php session_start(); echo $_SESSION['login_user']; ?>
                                        <small>Member since <?php session_start(); echo $_SESSION['date']; ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
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
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello,<?php session_start();  echo $_SESSION['login_user']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="dashboard.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                   <!--     <li>
                           <a href="#">
                                <i class="fa fa-play"></i> <span  href="javascript:void(0)" onclick="updatestatusall();">Start All</span> <small class="badge pull-right bg-green"><?php /*session_start(); echo $_SESSION['rowcount'];*/?></small>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-stop"></i> <span href="javascript:void(0)" onclick="updatestopall();">Stop All</span> <small class="badge pull-right bg-red"><?php/*session_start(); echo $_SESSION['rowcount_stop'];*/?></small>
                            </a>
                        </li>-->

                        <li class="active">
                            <a href="../addinstagramaccount.php">
                                <i class="fa fa-plus"></i> <span>Add Account</span> <small class="badge pull-right bg-blue"></small>
                            </a>
                        </li>
                       <!-- <li class="active">
                            <a href="https://api.instagram.com/oauth/authorize/?client_id=bfa277fe0d8c4e4f8f6dd29ea2460ee1&redirect_uri=http://socialenvy.co.nz/&response_type=code&&scope=comments+likes+relationships">
                                <i class="fa fa-plus"></i> <span>Subscribe Instagram Application</span>
                            </a>
                        </li>-->
                        <li>
                            <a href="#">
                                <i class="fa fa-credit-card"></i> <span>Buy Time Package</span> <!--<small class="badge pull-right bg-green">new</small>-->
                            </a>
                        </li>


                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow"></small>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Accounts
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">

                        <li class="active">Sort:</li>
                        <li><a href="#">Default</a></li>
                        <li><a href="#">Username</a></li>
                        <li><a href="#">Status</a></li>
                        <li><a href="#">Time</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">

                      <div id="dashboard-list"></div>
                        <!-- user accounts -->
                           <!--<div class="col-lg-4 col-md-4 col-sm-4">

                               <div id="dashboard-list"  class="inner-accounts-box">

                                   <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                      <div class="pull-left image">
                                        <img src="../img/avatar3.png" class="img-circle" style="width:100px; height:100px; border:1px solid #ccc;" alt="User Image" />
                                      </div>

                                      <div class="pull-left info" style="padding-left:10px;">
                                        <h4 id="IGuname"></h4>
                                        <p>Instagram</p>
                                     </div>

                                     <div class="clearfix"></div>

                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Activity:</td>
                                         <td width="50%">Stopped</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Time:</td>
                                         <td width="50%"><em style="font-style:normal; color:red;">Time is over</em></td>
                                      </tr>

                                  </table>
                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Likes:</td>
                                         <td width="50%" id="likes"></td>
                                      </tr>

                                      <tr>
                                         <td width="50%" >Comments:</td>
                                         <td width="50%" id="comment"></td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Follows:</td>
                                         <td width="50%" id="follows"></td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Unfollows:</td>
                                         <td width="50%" id="unfollows"></td>
                                      </tr>

                                  </table>
                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Start time:</td>
                                         <td width="50%" id="start_time"></td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Stop time:</td>
                                         <td width="50%"id="end_time"></td>
                                      </tr>


                                  </table>
                                  </div>

                                  <div>
                                  <table width="100%" >

                                      <tr>
                                         <td width="35%"><div class="btn btn-danger"><i class="fa fa-play"></i> Start</div></td>
                                         <td width="35%"><div class="btn btn-primary"><i class="fa fa-gear"></i> Settings</div></td>
                                          <td width="30%"><div class="btn-group pull-right">
                                            <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>  More</button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">Likes</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Transfer Time</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Reconnect</a></li>
                                                <li><a href="#">Logout</a></li>
                                            </ul>
                                        </div></td>

                                      </tr>
                                  </table>
                                  </div>


                               </div>
                           </div>
-->
                          <!-- user accounts ends -->

                            <!-- user accounts -->
                          <!-- <div class="col-lg-4 col-md-4 col-sm-4">

                               <div class="inner-accounts-box">

                                   <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                      <div class="pull-left image">
                                        <img src="../img/avatar3.png" class="img-circle" style="width:100px; height:100px; border:1px solid #ccc;" alt="User Image" />
                                      </div>

                                      <div class="pull-left info" style="padding-left:10px;">
                                        <h4>Vivankapoor</h4>
                                        <p>Instagram</p>
                                     </div>

                                     <div class="clearfix"></div>

                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Activity:</td>
                                         <td width="50%">Stopped</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Time:</td>
                                         <td width="50%"><em style="font-style:normal; color:red;">Time is over</em></td>
                                      </tr>

                                  </table>
                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Likes:</td>
                                         <td width="50%">2090</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Comments:</td>
                                         <td width="50%">0</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Follows:</td>
                                         <td width="50%">1408</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Unfollows:</td>
                                         <td width="50%">0</td>
                                      </tr>

                                  </table>
                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Start time:</td>
                                         <td width="50%">Mar 7 2015 5:16 PM</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Stop time:</td>
                                         <td width="50%">Mar 10 2015 6:19 PM</td>
                                      </tr>


                                  </table>
                                  </div>

                                  <div>
                                  <table width="100%" >

                                      <tr>
                                         <td width="35%"><div class="btn btn-danger"><i class="fa fa-play"></i> Start</div></td>
                                         <td width="35%"><div class="btn btn-primary"><i class="fa fa-gear"></i> Settings</div></td>
                                          <td width="30%"><div class="btn-group pull-right">
                                            <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>  More</button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">Likes</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Transfer Time</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Reconnect</a></li>
                                                <li><a href="#">Logout</a></li>
                                            </ul>
                                        </div></td>

                                      </tr>
                                  </table>
                                  </div>


                               </div>
                           </div>
-->
                          <!-- user accounts ends -->

                            <!-- user accounts -->
                           <!--<div class="col-lg-4 col-md-4 col-sm-4">

                               <div class="inner-accounts-box">

                                   <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                      <div class="pull-left image">
                                        <img src="../img/avatar3.png" class="img-circle" style="width:100px; height:100px; border:1px solid #ccc;" alt="User Image" />
                                      </div>

                                      <div class="pull-left info" style="padding-left:10px;">
                                        <h4>Vivankapoor</h4>
                                        <p>Instagram</p>
                                     </div>

                                     <div class="clearfix"></div>

                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Activity:</td>
                                         <td width="50%">Stopped</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Time:</td>
                                         <td width="50%"><em style="font-style:normal; color:red;">Time is over</em></td>
                                      </tr>

                                  </table>
                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Likes:</td>
                                         <td width="50%">2090</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Comments:</td>
                                         <td width="50%">0</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Follows:</td>
                                         <td width="50%">1408</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Unfollows:</td>
                                         <td width="50%">0</td>
                                      </tr>

                                  </table>
                                  </div>

                                  <div style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
                                  <table width="100%" >

                                      <tr>
                                         <td width="50%">Start time:</td>
                                         <td width="50%">Mar 7 2015 5:16 PM</td>
                                      </tr>

                                      <tr>
                                         <td width="50%">Stop time:</td>
                                         <td width="50%">Mar 10 2015 6:19 PM</td>
                                      </tr>


                                  </table>
                                  </div>

                                  <div>
                                  <table width="100%" >

                                      <tr>
                                         <td width="35%"><div class="btn btn-danger"><i class="fa fa-play"></i> Start</div></td>
                                         <td width="35%"><div class="btn btn-primary"><i class="fa fa-gear"></i> Settings</div></td>
                                          <td width="30%"><div class="btn-group pull-right">
                                            <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>  More</button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">Likes</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Transfer Time</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Reconnect</a></li>
                                                <li><a href="#">Logout</a></li>
                                            </ul>
                                        </div></td>


                                      </tr>
                                  </table>
                                  </div>


                               </div>
                           </div>
-->
                          <!-- user accounts ends -->





                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../js/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../js/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../js/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../js/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="../js/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../js/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../js/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../js/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../js/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../js/dashboard.js" type="text/javascript"></script>

    </body>
</html>