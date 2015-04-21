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
    <script src="js/popup.min.js?v=155"></script>
    <script src="ajax_request/activity.js"></script>
    <script src="js/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" href="css/jquery.alerts.css" media="screen"/>
    <script src="js/jquery.alerts.js"></script>


    <!-- Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"/>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css?v=155" media="all"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css?v=155" media="all"/>
    <link rel="stylesheet" href="css/font-awesome.min.css?v=155" media="all"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css?v=155" media="all"/>
    <link rel="stylesheet" href="css/emojify.min.css" media="all"/>
    <link rel="stylesheet" href="css/emojione.min.css" media="all"/>
    <link rel="stylesheet" href="css/common.css?v=155" media="all"/>
    <link rel="stylesheet" href="css/main.css?v=155" media="all"/>
    <link rel="stylesheet" href="css/main-new.css?v=155" media="all"/>

    <!-- Scripts -->
    <script src="js/jquery-1.11.0.min.js?v=155"></script>
    <script src="js/jquery.cookie.min.js?v=155"></script>
    <script src="js/jquery.fancybox.pack.js?v=155"></script>
    <script src="js/jquery.maskedinput.min.js?v=155"></script>
    <script src="js/underscore.min.js?v=155"></script>
    <script src="js/bootstrap.min.js?v=155"></script>
    <script src="js/json2.min.js?v=155"></script>
    <script src="js/emojify.min.js"></script>
    <script src="js/emojione.min.js"></script>
    <script src="js/helper.min.js?v=155"></script>
    <script src="js/popup.min.js?v=155"></script>
    <script src=js/main.min.js?v=155"></script>





    <script type="text/javascript">
       /* $(document).ready(function() {

        });
        function addTag(inpAddTags){
            alert(inpAddTags);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "actionpage/hashtag.php", //Relative or absolute path to response.php file
                data: data,
                success: function(data, status) {
                    data = eval(data);
                    var innerTableHtml = "";


                    //for (var i = 0; i < data.length; i++) {

                    // innerTableHtml += "<li><a href='#'>"+data[i].tagname+"<button type='button' style='color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button></a></li>";
                    innerTableHtml += "<li><a href='#'>"+inpAddTags;
                    innerTableHtml +='<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true" onclick="deletetag(\''+data[i].id+'\')" href="javascript:void(0)">&times;</button>';
                    innerTableHtml +="</a></li>";
                    //}
                    $('#hashtag-list').append(innerTableHtml);

                }

            });
            return false;

        }
*/
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
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                            <p>
                                <?php session_start(); echo $_SESSION['login_user']; ?>
                                <small>Member since <?php session_start(); echo $_SESSION['date']; ?></small></small>
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
                <a href="user/dashboard.php">
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
                <a href="addinstagramaccount.php">
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
                <a href="calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <small class="badge pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="mailbox.html">
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
<!--            <div id="dashboard_stop"></div>-->
<!--             <div id="dashboard_start"></div>-->
        <p class="text-red">How to start?</p>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">

        <h4>Select what you want to do</h4>
        <table width="100%" >

            <tr>
                <td width="50%" align="left" valign="middle">Likes:</td>
                <td width="50%" align="right" valign="middle"><div id="divLikes" class="btn btn-success"><i id="processLike" class='fa fa-play'>Start</i></div></td>
            </tr>

            <tr>
                <td width="50%" align="left" valign="middle">Comments:</td>
                <td width="50%" align="right" valign="middle"><div id="divComment" class="btn btn-success"><i id="processComment" class='fa fa-play'>Start</i></div></td>
            </tr>

            <tr>
                <td width="50%" align="left" valign="middle">Follows:</td>
                <td  width="50%" align="right" valign="middle"><div id="divFollow"  class="btn btn-success" style="background-color:3e8f3e"><i id="processFollow" class='fa fa-play'>Start</i></div></td>
            </tr>

            <tr>
                <td width="50%" align="left" valign="middle">Unfollows:</td>
                <td width="50%" align="right" valign="middle"><div id="divUnFollow" class="btn btn-success"><i id="processUnFollow" class='fa fa-play'>Start</i></div></td>
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
         <div id="mainsettingtbl-list"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td  align="left" valign="middle">Activity speed<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <select  id="Activityspeed" name="Activityspeed" class="form-control" >
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


                            <select id="Mediasource" name="Mediasource" class="form-control" >
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
                              <span class="pull-right">
							<input name="newMediaOnly" id="inpNewMediaOnly" class="chk-custom" type="checkbox"
                                   data-checked="false"/>
							<label class="chk-custom" for="inpNewMediaOnly"></label>
						</span>
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


                            <input id="Minlikesfilter" name="Minlikesfilter" type="number" placeholder="0"/>


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


                            <input id="Maxlikesfilter" name="Maxlikesfilter" type="number" placeholder="0"/>


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

        <div class="inner-setting-box" style="min-height:100px;">

            <table cellpadding="0" cellspacing="0">
               <tbody>
                <tr>

                    <td>Locations<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a>
<!--                       <small class="badge pull-left bg-red">New</small>-->
                    </td>
                        <!--<div class="btn-group" style="margin-left:20px;">
                            <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-locations">Add</button>
                            <button class="btn btn-plain dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Delete all locations</a></li>

                            </ul>
                        </div>-->

                    <td>
                           <ul>
                            <div id="location-list"></div>

                            <li>
                                <div class="input-group">
                                    <input id="inpAddLocation" class="form-control" type="text"/>
                                    <div class="input-group-btn">
                                        <input type="button" class="btn btn-plain" onclick="addLocation()" value="ADD"/>
                                        <!--<button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                            <span class="caret"></span>
                                        </button>-->
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="btn-del-tags">Delete all Locations</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                           </ul>

                    </td>





                </tr>
               </tbody>

            </table>
        </div>

    </div>
    </div>
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div  class="inner-setting-box" style="min-height:100px;">

            <table cellpadding="0" cellspacing="0">
              <tbody>
                <tr>

                    <td>Usernames<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                    <td>
                        <ul>
                            <div id="username-list"></div>

                            <li>
                                <div class="input-group">
                                    <input id="inpAddUsername" class="form-control" type="text"/>
                                    <div class="input-group-btn">
                                        <input type="button" class="btn btn-plain" onclick="addUsername()" value="ADD"/>


                                        <!--<div class="btn-group" style="margin-left:20px;">
                                            <button class="btn btn-plain" tabindex="-1" data-popup-open="#popup-activity-usernames">Add</button>
                                            <button class="btn btn-plain dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>

                                        -->
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="btn-del-tags">Delete all Usernames</a></li>
                                        </ul>

                                </div>
                            </div>
                          </li>
                       </ul>
                    </td>




                </tr>
              </tbody>
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
                            <div id="hashtag-list"></div>
                           <!-- <li><a href="#">awesome<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></a></li>
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
-->
                            <li>
                            <div class="input-group">
                                <input id="inpAddTags" class="form-control" type="text"/>
                                <div class="input-group-btn">
                                    <input type="button" class="btn btn-plain btn-add-tags" onclick="addTag()" value="ADD"/>
                                    <!--<button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                        <span class="caret"></span>
                                    </button>-->
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" class="btn-del-tags">Delete all tags</a></li>
                                    </ul>
                                </div>
                            </div>
                            </li>
                        </ul>

                    </td>

                </tr>

            </table>

        </div>

    </div>


</div><!-- tags ends-->

<!-- tags -->

<!--<div class="row">

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

<div class="list-row form-group comments"
     data-field="comments"
     data-hidden="false">
    <div class="nice-block clearfix">
					<span class="label-wrap">
						<label class="control-label">Comments</label>
						<span class="help-tip"
                              title="Comments"
                              data-content="Add comments to comment media.
								Comments for each photo or video will be selected randomly.
								Our system remembers commented photos and videos to interact
								with them only once. We recommend using at least 10 different
								neutral comments like: Nice, Like it, Beautiful, etc.<br/><br/>
								The total length of the comment cannot exceed 300 characters.<br/>
								The comment cannot contain more than 4 hashtags.<br/>
								The comment cannot contain more than 1 URL.<br/>
								The comment cannot consist of all capital letters.<br/>
								The comments must be different as much as possible.<br/><br/>
								Maximum allowed 100 comments.">?</span>
					</span>

        <textarea name="comments"
                  id="inpComments"
                  class="hidden"></textarea>

        <script id="tplComment" type="text/html">
            <span class="unit-comment" data-comment="{{ comment }}">
							<span>{{ comment }}</span>
							<a href="#" tabindex="-1">&times;</a>
						</span>
        </script>

					<span class="comments-row">

					</span>

        <div class="btn-group">
            <button class="btn btn-plain" tabindex="-1">Add</button>
            <button class="btn btn-plain dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="/emoji" target="_blank">Emoji cheat sheet</a></li>
                <li class="divider"></li>
                <li><a href="#" class="btn-del-comments">Delete all comments</a></li>
            </ul>
        </div>
    </div>
</div>

<!--  Main settings starts -->

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <h3>Auto-stop settings</h3>

<!--     <div id="autostopsettingtbl-list"></div>-->

       <div class="col-lg-4 col-md-4 col-sm-4">

            <div  class="inner-setting-box">
                <table width="100%" cellpadding="0" cellspacing="0">

                    <tr>

                        <td align="left" valign="middle">Likes counter<a href="#" data-toggle="tooltip"><i class="fa fa-question"></i></a></td>
                        <td  align="right" valign="middle">


                            <input id="Likescounter" name="Likescounter" type="number" placeholder="0"/>


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


                            <input id="Commentscounter" name="Commentscounter" type="number" placeholder="0"/>


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


                            <input id="Followscounter" name="Followscounter" type="number" placeholder="0"/>


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


                            <input id="Unfollowscounter" name="Unfollowscounter" type="number" placeholder="0"/>


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


                            <input id="Timer" name="Timer" type="time" />


                        </td>

                    </tr>

                </table>
            </div>

        </div>

        </form>
        <div class="text-red">Reset all settings to default values</div>
    </div>

</div><!-- main setting ends -->


<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>




<div id="popup-activity-locations" class="popup">
    <h3>Add Locations</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-locations"></a>

    <div class="color-gray mb10">
        Find locations by name, address or city and get the most popular places nearby.
        Or just click on the Search button to start exploring locations on the current map position.
    </div>

    <div class="alerts">
        <div class="alert alert-danger alert-error js-txt-error"></div>
        <div class="alert alert-success js-txt-status"></div>
    </div>

    <input type="hidden"
           class="js-inp-lat"
           value="29.85"/>
    <input type="hidden"
           class="js-inp-lng"
           value="76.6667"/>

    <div class="mb20">
        <div class="input-group input-group-with-gap">
            <input type="text"
                   class="form-control input-icon input-icon-location js-inp-address"
                   placeholder="Location"
                   autofocus/>
			<span class="input-group-btn">
				<button class="btn btn-plain btn-success js-btn-find">Search</button>
			</span>
        </div>
        <span class="help-block text-danger text-error hidden"></span>
    </div>

    <div class="map js-wgt-map js-hidden"></div>

    <div class="mt20 js-wgt-results js-hidden"></div>

    <div class="loader mt20 js-wgt-loader js-hidden"></div>

    <div class="text-align-center mt20">
        <button class="btn btn-plain js-btn-close js-hidden"
                data-popup-close="#popup-activity-locations">Close</button>
        <button class="btn btn-plain btn-success js-btn-add js-hidden">Add</button>
    </div>
</div>

<div id="popup-activity-usernames" class="popup">
    <h3>Add Usernames</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-usernames"></a>

    <div class="alerts">
        <div class="alert alert-danger alert-error" data-ui="txt-error"></div>
        <div class="alert alert-success" data-ui="txt-status"></div>
    </div>

    <div class="mb20">
        <div class="input-group input-group-with-gap">
            <input type="text"
                   class="form-control input-icon input-icon-username"
                   placeholder="Username"
                   autofocus
                   data-ui="inp-search"/>
			<span class="input-group-btn">
				<button class="btn btn-plain btn-success" data-ui="btn-search">Search</button>
			</span>
        </div>
        <span class="help-block text-danger text-error hidden"></span>
    </div>

    <div class="mt20" data-ui="results"></div>

    <div class="loader mt20 hidden" data-ui="loader"></div>

    <div class="text-align-center mt20">
        <button class="btn btn-plain hidden" data-ui="btn-close"
                data-popup-close="#popup-activity-usernames">Close</button>
        <button class="btn btn-plain btn-success hidden" data-ui="btn-add">Add</button>
    </div>
</div>
<script>
    $(function() {
        var schedule = JSON.parse('null');
        console.log(schedule);

        var scDays  = [
            'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
        ];

        var scHours = [
            '12 AM', '1 AM', '2 AM', '3 AM', '4 AM', '5 AM', '6 AM', '7 AM', '8 AM', '9 AM', '10 AM', '11 AM',
            '12 PM', '1 PM', '2 PM', '3 PM', '4 PM', '5 PM', '6 PM', '7 PM', '8 PM', '9 PM', '10 PM', '11 PM'
        ];

        var $popup 	   = $('#popup-activity-schedule');
        var $table 	   = $('table', $popup);
        var $tableHead = $('thead', $table);
        var $tableBody = $('tbody', $table);

        // Render table head, create row
        var $tr = $('<tr></tr>');

        // Add empty hour cell
        $tr.append('<th></th>');

        // Add days cells
        _.each(scDays, function(day) {
            $tr.append('<th>' + day + '</th>');
        });

        // Put row into table head
        $tableHead.append($tr);

        // Render table body
        _.each(scHours, function(hour, i) {
            // Create row
            var $tr = $('<tr></tr>');

            // Add hour cell
            $tr.append('<td>' + hour + '</td>');

            // Add days cells
            _.each(scDays, function(day, j) {
                // Create cell
                var $td = $('<td></td>');

                // Set attributes
                $td.attr('data-day', j);
                $td.attr('data-hour', i);
                $td.attr('data-state', 0);

                // Put cell into row
                $tr.append($td);
            });

            // Put row into table body
            $tableBody.append($tr);
        });

        // Attach events to the cells
        $('td:nth-child(n+2)', $tableBody).on('click', function(e) {
            e.preventDefault();

            var $td = $(this);

            if ( ! parseInt($td.attr('data-state'))) {
                $td.attr('data-state', 1).addClass('active');
            }
            else {
                $td.attr('data-state', 0).removeClass('active');
            }
        });

        // Attach event to "select all" button
        $('.js-btn-select-all', $popup).on('click', function(e) {
            e.preventDefault();
            $('td:nth-child(n+2)', $tableBody).attr('data-state', 1).addClass('active');
        });

        // Attach event to "select none" button
        $('.js-btn-select-none', $popup).on('click', function(e) {
            e.preventDefault();
            $('td:nth-child(n+2)', $tableBody).attr('data-state', 0).removeClass('active');
        });

        // Attach event to "save" button
        $('.js-btn-save', $popup).on('click', function(e) {
            e.preventDefault();

            var data = [];
            var $tds = $('td:nth-child(n+2)', $tableBody);

            // Go through all days
            _.each(scDays, function(day, j) {
                var dayData = [];

                // Go through all hours for each day
                _.each(scHours, function(hour, i) {
                    // Get state of the day hour
                    dayData.push(parseInt($tds.filter('[data-day=' + j +'][data-hour=' + i + ']').attr('data-state')));
                });

                data.push(dayData);
            });

            // Output data
            _.each(data, function(dayData) {
                console.log(dayData.toString());
            });

            console.log(JSON.stringify(data));
        });

        // Attach event to popup
        $popup.on('popup.open', function() {
            if (schedule === null) {
                // Activate all cells if no schedule saved yet
                $('td:nth-child(n+2)', $tableBody).attr('data-state', 1).addClass('active');
            }
            else {
                // Populate last saved schedule state
                // todo: ...
            }
        });
    });
</script>
-->
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


