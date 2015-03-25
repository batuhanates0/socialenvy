<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activity</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/default.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="ajax_request/activity.js"></script>

    <script type="text/javascript">
    </script>
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="user/dashboard.php" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        Social Envy
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
                        <span class="label label-success">4</span>
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

                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning">10</span>
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
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                            <p>
                                Mohd Saqib - Web Developer
                                <small>Member since Nov. 2013</small>
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
                                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                <img src="img/avatar3.png" class="img-circle" alt="User Image" />
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
            <li class="active">
                <a href="user/dashboard.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-play"></i> <span>Start All</span> <small class="badge pull-right bg-green"><?php session_start(); echo $_SESSION['rowcount'];?></small>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-stop"></i> <span>Stop All</span> <small class="badge pull-right bg-red"><?php session_start(); echo $_SESSION['rowcount_stop'];?></small>
                </a>
            </li>

            <li>
                <a href="accounts.html">
                    <i class="fa fa-plus"></i> <span>Add Account</span> <small class="badge pull-right bg-blue"></small>
                </a>
            </li>
            <li class="active">
                <a href="https://api.instagram.com/oauth/authorize/?client_id=d699b2681e2644479f4b97b76b2bda33&redirect_uri=http://52.10.69.137/User/InstagramCallback.aspx&response_type=code&&scope=comments+likes+relationships">
                    <i class="fa fa-plus"></i> <span>Subscribe Instagram Application</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-credit-card"></i> <span>Buy Time Package</span> <!--<small class="badge pull-right bg-green">new</small>-->
                </a>
            </li>


            <li>
                <a href="calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
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
        Activity
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Activity</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row" style="border-bottom:1px solid #ccc;">


    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="box-body">
            <div class="callout callout-danger">
                <h4 style="margin-bottom:0px;">Your activity automatically stopped: Activity time is over</h4>

            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-4">

        <p class="text-muted">Stopped</p>

        <p>Time is over <a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></p>

        <p class="text-red">How time works?</p>

<!--        <div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;"><i class="fa fa-play"></i> Start</div>-->
            <div id="dashboard"></div>
        <p class="text-red">How to start?</p>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

        <h4>Select what you want to do</h4>
        <table width="100%" >

            <tr>
                <td width="50%" align="left" valign="middle">Likes:</td>
                <td width="50%" align="right" valign="middle"><strong>2090</strong></td>
            </tr>

            <tr>
                <td width="50%" align="left" valign="middle">Comments:</td>
                <td width="50%" align="right" valign="middle"><strong>0</strong></td>
            </tr>

            <tr>
                <td width="50%" align="left" valign="middle">Follows:</td>
                <td width="50%" align="right" valign="middle"><strong>1408</strong></td>
            </tr>

            <tr>
                <td width="50%" align="left" valign="middle">Unfollows:</td>
                <td width="50%" align="right" valign="middle"><strong>0</strong></td>
            </tr>

        </table>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

        <h4>Buy time package</h4>

        <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">

            <div class="number"><strong>3</strong></div>
            <p class="no-margin">days</p>
            <div class="number" style="color:#000;"><strong>$1.99</strong></div>
            <p class="no-margin">$0.66 per day</p>
            <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">

            <div class="number"><strong>3</strong></div>
            <p class="no-margin">days</p>
            <div class="number" style="color:#000;"><strong>$1.99</strong></div>
            <p class="no-margin">$0.66 per day</p>
            <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 inner-buy-box">

            <div class="number"><strong>3</strong></div>
            <p class="no-margin">days</p>
            <div class="number" style="color:#000;"><strong>$1.99</strong></div>
            <p class="no-margin">$0.66 per day</p>
            <div class="btn-lg btn-success" style="text-align:center; margin-bottom:5px; margin-top:5px;"><i class="fa fa-shopping-cart"></i> Buy</div>
        </div>

        <p class="text-red">Extra time packages</p>

    </div>


</div><!-- top row ends -->

<!--  Main settings starts -->

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <h3>Main settings</h3>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Activity speed<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <select  class="form-control" >
                                <option value="Slow">Slow</option>
                                <option value="Normal">Normal</option>
                                <option value="Fast">Fast</option>
                            </select>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">

                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Media source<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a>
                            <small class="badge pull-left bg-red">New</small></td>


                        <td  align="right" valign="middle">


                            <select  class="form-control" >
                                <option value="Tags">Tags</option>
                                <option value="Locations">Locations</option>
                                <option value="My Feed">My Feed</option>
                            </select>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle" style="padding-bottom:14px;">New media only<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">
                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td align="left" valign="middle">Min. likes filter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="number" placeholder="0"/>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Max. likes filter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="number" placeholder="0"/>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td align="left" valign="middle" style="padding-bottom:6px;">Don't comment same users<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td align="left" valign="middle"></td>

                    </tr>

                </table>
            </div>

        </div>
    </div>
</div><!-- main setting ends -->

<!-- loactions and username  -->
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div  class="inner-setting-box">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

                    <td  align="left" valign="middle">Locations<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a>
                        <small class="badge pull-left bg-red">New</small>

                        <div class="btn-group" style="margin-left:20px;">
                            <button type="button" class="btn btn-info">Add</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Delete all locations</a></li>

                            </ul>
                        </div>

                    </td>




                </tr>

            </table>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div  class="inner-setting-box">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

                    <td  align="left" valign="middle">Usernames<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a>


                        <div class="btn-group" style="margin-left:20px;">
                            <button type="button" class="btn btn-success">Add</button>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Delete all username</a></li>

                            </ul>
                        </div>

                    </td>




                </tr>

            </table>
        </div>

    </div>


</div>
<!-- loactions and username ends -->

<!-- tags -->

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="inner-setting-box" style="min-height:100px;">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>Tags<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                    <td>
                        <ul class="tags">
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>

                        </ul>

                    </td>
                </tr>
            </table>

        </div>

    </div>

</div><!-- tags ends-->

<!-- tags -->

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="inner-setting-box" style="min-height:100px;">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td>Comments<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                    <td>
                        <ul class="tags">
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
                            <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>

                        </ul>


                    </td>
                </tr>
            </table>

        </div>

    </div>

</div><!-- tags ends-->

<!--  Main settings starts -->

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <h3>Auto-stop settings</h3>



        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td align="left" valign="middle">Likes counter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="number" placeholder="0"/>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Comments counter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="number" placeholder="0"/>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Follows counter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="number" placeholder="0"/>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Unfollows counter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="number" placeholder="0"/>


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Timer<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input type="time" />


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        <div class="text-red">Reset all settings to default values</div>
    </div>

</div><!-- main setting ends -->

</section> <!-- /.content -->
</aside> <!-- /.right-side -->
</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="js/app.js" type="text/javascript"></script>

</body>
</html>