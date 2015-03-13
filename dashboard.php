<!--<a href="logout.php">LogOut</a>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>Instagress / Dashboard</title>





    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/favicon.png?v=154"/>
    <link rel="icon" type="image/png" href="/favicon.png?v=154"/>

    <!-- Apple touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/apple-touch-icon-152x152.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/apple-touch-icon-144x144.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/apple-touch-icon-120x120.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/apple-touch-icon-114x114.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/apple-touch-icon-76x76.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/apple-touch-icon-72x72.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/apple-touch-icon-57x57.png?v=154"/>
    <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-60x60.png?v=154"/>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"/>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css?v=154" media="all"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css?v=154" media="all"/>
    <link rel="stylesheet" href="css/font-awesome.min.css?v=154" media="all"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css?v=154" media="all"/>
    <link rel="stylesheet" href="css/emojify.min.css" media="all"/>
    <link rel="stylesheet" href="css/emojione.min.css" media="all"/>
    <link rel="stylesheet" href="css/common.css?v=154" media="all"/>
    <link rel="stylesheet" href="css/main.css?v=154" media="all"/>
    <link rel="stylesheet" href="css/main-new.css?v=154" media="all"/>

    <!-- Scripts -->
    <script src="/js/jquery-1.11.0.min.js?v=154"></script>
    <script src="/js/jquery.cookie.min.js?v=154"></script>
    <script src="/js/jquery.fancybox.pack.js?v=154"></script>
    <script src="/js/jquery.maskedinput.min.js?v=154"></script>
    <script src="/js/underscore.min.js?v=154"></script>
    <script src="/lib/bootstrap-3/js/bootstrap.min.js?v=154"></script>
    <script src="/js/json2.min.js?v=154"></script>
    <script src="/lib/emojify.js/js/emojify.min.js"></script>
    <script src="/lib/emojione/js/emojione.min.js"></script>
    <script src="/js/helper.min.js?v=154"></script>
    <script src="/js/popup.min.js?v=154"></script>
    <script src="/js/main.min.js?v=154"></script>


    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-43454158-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header>



<div class="top-row">
    <div class="info-row -warning-row -info-row -warning-row">
        <div class="container">
            <strong>New Features:</strong> <a href="/blog/spintax-comments">{Spintax|Spinning} Comments</a> and <a href="/blog/protected-time-transfer">Protected Time Transfer</a>
        </div>
    </div>
</div>






<div class="container navbar-main">
<a href="/" class="logo-new">
    <img src="img/instagress-logo.png?v=154"
         srcset="img/instagress-logo-2x.png?v=154 2x"
         alt="Instagress"/>
</a>

<a href="#" class="btn-navbar-menu" data-ui-menu-toggle="navbar-menu"></a>
<a href="#" class="btn-navbar-menu-login" data-ui-menu-toggle="navbar-menu-login"></a>

<div class="navbar-mobile-menu" data-ui="navbar-menu">
    <ul>


        <li class="">
            <a href="/about" >About</a>

        </li>


        <li class="more">
            <a href="/terms" >Terms</a>

        </li>


        <li class="">
            <a href="/prices" >Prices</a>

        </li>


        <li class="">
            <a href="/guide" >Guide</a>

        </li>


        <li class="">
            <a href="/faq" >FAQ</a>

        </li>


        <li class="more">
            <a href="/blog" >Blog</a>

        </li>


        <li class="more">
            <a href="#" data-popup-open="#popup-support">Support</a>

        </li>

        <li class="toggle-more">
            <a href="#" class="btn-navbar-menu-more"
               data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
            <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                <ul>



                    <li class="">
                        <a href="/terms" >Terms</a>

                    </li>





                    <li class="">
                        <a href="/blog" >Blog</a>

                    </li>


                    <li class="">
                        <a href="#" data-popup-open="#popup-support">Support</a>

                    </li>

                </ul>

            </div>
        </li>
    </ul>

</div>
<div class="navbar-mobile-menu" data-ui="navbar-menu-login">

    <ul>

        <li class="menu-header hidden-md hidden-lg">nirdesh@resiliencesoft.com</li>
        <li class="menu-header visible-md visible-lg">Account</li>
        <li><a href="/account">Dashboard</a></li>
        <li><a href="/account/billing/history">Billing History</a></li>
        <li><a href="/account/settings">Settings</a></li>
        <li><a href="/account/logout">Log out</a></li>



    </ul>


</div>

<div class="navbar-desktop-menu">
    <ul>


        <li class="">
            <a href="/about" >About</a>

        </li>


        <li class="more">
            <a href="/terms" >Terms</a>

        </li>


        <li class="">
            <a href="/prices" >Prices</a>

        </li>


        <li class="">
            <a href="/guide" >Guide</a>

        </li>


        <li class="">
            <a href="/faq" >FAQ</a>

        </li>


        <li class="more">
            <a href="/blog" >Blog</a>

        </li>


        <li class="more">
            <a href="#" data-popup-open="#popup-support">Support</a>

        </li>

        <li class="toggle-more">
            <a href="#" class="btn-navbar-menu-more"
               data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
            <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                <ul>



                    <li class="">
                        <a href="/terms" >Terms</a>

                    </li>





                    <li class="">
                        <a href="/blog" >Blog</a>

                    </li>


                    <li class="">
                        <a href="#" data-popup-open="#popup-support">Support</a>

                    </li>

                </ul>

            </div>
        </li>
    </ul>

</div>
<div class="navbar-desktop-menu navbar-desktop-menu-right">

    <ul>
        <li>
            <a href="#" class="btn-navbar-menu-account"
               data-ui-menu-toggle="navbar-menu-account" data-ui-role="dropdown">

                nirdesh@resiliencesoft.com

            </a>
            <div class="navbar-popup-menu navbar-popup-menu-right" data-ui="navbar-menu-account">
                <ul>

                    <li class="menu-header hidden-md hidden-lg">nirdesh@resiliencesoft.com</li>
                    <li class="menu-header visible-md visible-lg">Account</li>
                    <li><a href="/account">Dashboard</a></li>
                    <li><a href="/account/billing/history">Billing History</a></li>
                    <li><a href="/account/settings">Settings</a></li>
                    <li><a href="/account/logout">Log out</a></li>



                </ul>

            </div>
        </li>
    </ul>

</div>
</div>
</header>


<div class="usermenu accountmenu">
    <div class="container">

    </div>
</div>





<div id="popup-time-transfer" class="popup">
    <h3>Time Transfer</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-time-transfer"></a>

    <div class="color-gray mb20">
        Using this tool you can transfer your time from one username to another.
        Only purchased time can be transferred.
    </div>

    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>

    <form action="/account/time/transfer" class="form-horizontal form-ajax mt20" method="post">
        <div class="form-group">
            <div class="col-md-12 field-wrap" data-field="userFromId">
                <label class="control-label text-align-left" for="inpUserFromId">From:</label>
                <select name="userFromId" id="inpUserFromId" class="form-control js-sel-username">
                    <option value="">Transfer time from...</option>


                    <option value="5502acce1252626266001c5d" data-username="nirdesh_123">
                        nirdesh_123 (3 days)
                    </option>


                </select>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 field-wrap" data-field="userToId">
                <label class="control-label text-align-left" for="inpUserToId">To:</label>
                <select name="userToId" id="inpUserToId" class="form-control js-sel-username">
                    <option value="">Transfer time to...</option>


                    <option value="5502acce1252626266001c5d" data-username="nirdesh_123">
                        nirdesh_123 (3 days)
                    </option>


                </select>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-4 field-wrap" data-field="timeDays">
                <label class="control-label text-align-left" for="inpTimeDays">Days:</label>
                <input type="number" name="timeDays" id="inpTimeDays"
                       class="form-control js-inp-time" min="0" value="0"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
            <div class="col-xs-4 field-wrap" data-field="timeHours">
                <label class="control-label text-align-left" for="inpTimeHours">Hours:</label>
                <input type="number" name="timeHours" id="inpTimeHours"
                       class="form-control js-inp-time" min="0" max="23" value="0"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
            <div class="col-xs-4 field-wrap" data-field="timeMinutes">
                <label class="control-label text-align-left" for="inpTimeMinutes">Minutes:</label>
                <input type="number" name="timeMinutes" id="inpTimeMinutes"
                       class="form-control js-inp-time" min="0" max="59" value="0"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label class="chk-custom mt10" for="inpTimeAll">
                    <input type="checkbox" name="timeAll" id="inpTimeAll" class="chk-custom" value="yes"/>
                    <label class="chk-custom mr10" for="inpTimeAll"></label>
                    Transfer all purchased time
					<span class="help-tip"
                          title="Purchased time"
                          data-content="Only purchased part of the remaining
						  	time will be transferred.">?</span>
                </label>
            </div>
        </div>

        <div class="text-align-center">
            <button type="submit"
                    class="btn btn-plain btn-success"
                    data-loading-text="Transferring...">Transfer</button>
        </div>
    </form>
</div>

<div id="popup-activity-error-help" class="popup">
    <h3>Activity Error Help</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-activity-error-help"></a>
    <div class="mb20">
        <p>
            Your Activity stopped with error? These can be the possible reasons:
        </p>
        <ul class="nice-list">
            <li>
                <p><strong>No connection to Instagram API</strong></p>
                <p>
                    This error may occur due to temporary networking issues on our
                    servers or when Instagram API is temporarily unavailable.
                </p>
                <p class="text-small">
                    How to solve: Try to restart your Activity after a while.
                </p>
            </li>
            <li>
                <p><strong>Unable to perform selected action</strong></p>
                <p>
                    It looks like Instagram has temporarily blocked one of your
                    actions (like, comment, follow or unfollow) due to high speed of
                    your activity.
                </p>
                <p class="text-small">
                    How to solve: Try to restart your Activity using Slow or Normal
                    speed after 12-24 hours.
                </p>
            </li>
            <li>
                <p><strong>Access to Instagram API has been reset</strong></p>
                <p>
                    This error may occur when access token or password of your username
                    was reseted by Instagram due to high speed of your activity or if you
                    using Instagram on your mobile device or with third-party websites.
                </p>
                <p class="text-small">
                    How to solve: Try to reconnect your username after a while
                    and then restart your Activity.
                </p>
            </li>
        </ul>
        <p>
            If you will continue to receive any activity errors, please
            <a href="#" class="link-ajax"
               data-popup-open="#popup-support">contact&nbsp;us</a>.
        </p>
    </div>
    <div class="text-align-center">
        <button class="btn btn-plain" data-popup-close="#popup-activity-error-help">Close</button>
    </div>
</div>


<section class="account-index">
    <div class="account-index-head">
        <div class="container">
            <h1>Dashboard</h1>









            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-push-4">
                    <div class="title-block">Add new account to your dashboard</div>



                    <div class="-add-account-cont">
                        <button class="btn btn-plain btn-big btn-add-account btn-danger js-btn-add-account"
                                data-popup-open="#popup-login">Add account</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-md-pull-4 start-stop-block">


                    <div class="-start-stop-cont clearfix">
                        <div class="title-block -mb10">Start/stop all accounts</div>

                        <div class="row mt10">
                            <div class="col-xs-6 color-red start-all-btn-cont">
                                <button id="btn-start-all"
                                        class="btn btn-plain btn-big btn-start-stop btn-danger"
                                        data-loading-text="Start all">Start all</button>
                                <div class="mt10">
                                    <span id="count-started">0</span> started
                                </div>
                            </div>
                            <div class="col-xs-6 color-gray stop-all-btn-cont">
                                <button id="btn-stop-all"
                                        class="btn btn-plain btn-big btn-start-stop"
                                        data-loading-text="Stop all">Stop all</button>
                                <div class="mt10">
                                    <span id="count-stopped">0</span> stopped
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 -col-xs-4 new-features-block">

                    <div class="title-block">
                        Buy time package
                    </div>
                    <a href="/order/new" class="btn btn-plain btn-success btn-big form-control">Buy time package</a>


                    <div class="mt10">
                        <a href="#" class="link-ajax" data-popup-open="#popup-time-transfer">Transfer time</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="account-index-list container">
        <div class="row">
            <div class="col-md-4">
                <h2>Accounts</h2>
            </div>
            <div class="col-md-8">
                <ul class="account-sort-menu">
                    <li>Sort:</li>
                    <li><a href="/account/users/sort/default">Default</a></li>
                    <li><a href="/account/users/sort/username">Username</a></li>
                    <li><a href="/account/users/sort/status">Status</a></li>
                    <li><a href="/account/users/sort/time">Time</a></li>
                </ul>
            </div>
        </div>
        <div class="row clearfix">

            <div class="col-md-4 col-sm-6">
                <div class="account-entry nice-block"
                     data-user-id="5502acce1252626266001c5d"
                     data-username="nirdesh_123">
                    <div class="account-head">
                        <a href="/account/user/select/5502acce1252626266001c5d" class="account-user">
                            <img src="/img/default-avatar.png"
                                 class="account-avatar"
                                 alt="nirdesh_123"/>
                            <span class="account-username">nirdesh_123</span>
                        </a>
                        <div class="account-type">Instagram</div>
                        <div class="account-type-icon fa fa-instagram fa-lg"></div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Activity:</div>
                        <div class="col-xs-8 col-lg-7 status status-stopped">
                            <span class="status-text">stopped</span>
				<span class="stat-alert alert-success hidden"
                      data-alert-class="success"
                      data-hidden="true"
                      data-toggle="tooltip"
                      title="Activity automatically stopped:<br/>"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Time:</div>
                        <div class="col-xs-8 col-lg-7 payment-timer">
				<span class="label-ok ">
					3 days
				</span>
				<span class="label-over color-red hidden">
					Time is over
				</span>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Likes:</div>
                        <div class="col-xs-8 col-lg-7 todo-count count-likes">0</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Comments:</div>
                        <div class="col-xs-8 col-lg-7 todo-count count-comments">0</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Follows:</div>
                        <div class="col-xs-8 col-lg-7 todo-count count-follows">0</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Unfollows:</div>
                        <div class="col-xs-8 col-lg-7 todo-count count-unfollows">0</div>
                    </div>

                    <hr/>
                    <div class="row mt10">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Start time:</div>
                        <div class="col-xs-8 col-lg-7 time-start">

                            -

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-lg-5 color-gray pr0">Stop time:</div>
                        <div class="col-xs-8 col-lg-7 time-stop">

                            -

                        </div>
                    </div>
                    <hr/>
                    <div class="clearfix mt10">
                        <div class="btn-start-stop-cont">
                            <button class="btn btn-plain btn-start-stop btn-start "
                                    data-loading-text="Start">Start</button>
                            <button class="btn btn-plain btn-start-stop btn-stop hidden"
                                    data-loading-text="Stop">Stop</button>
                        </div>
                        <div class="btn-settings-cont">
                            <a href="/account/user/select/5502acce1252626266001c5d" class="btn btn-plain">Settings</a>
                        </div>
                        <div class="btn-more-cont">
                            <div class="btn-group">
                                <button type="button" class="btn btn-plain btn-block dropdown-toggle" data-toggle="dropdown">
                                    More <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="/account/user/select/5502acce1252626266001c5d?next=/profile">Profile</a></li>
                                    <li><a href="/account/user/select/5502acce1252626266001c5d?next=/likes">Likes</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-ui="btn-time-transfer" data-username="nirdesh_123">Transfer time</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-ui="btn-reauth" data-username="nirdesh_123">Reconnect</a></li>
                                    <li><a href="/account/user/remove/5502acce1252626266001c5d">Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="logo-footer-new">
                    <img src="img/instagress-logo-footer.png?v=154"
                         srcset="/img/instagress-logo-footer-2x.png?v=154 2x"
                         alt="Instagress"/>
                </a>
                <div class="copyright">&copy; 2013-2015</div>
            </div>
            <div class="col-md-6 menu-cont">
                <ul>


                    <li class="">
                        <a href="/about" >About</a>

                    </li>


                    <li class="more">
                        <a href="/terms" >Terms</a>

                    </li>


                    <li class="">
                        <a href="/prices" >Prices</a>

                    </li>


                    <li class="">
                        <a href="/guide" >Guide</a>

                    </li>


                    <li class="">
                        <a href="/faq" >FAQ</a>

                    </li>


                    <li class="more">
                        <a href="/blog" >Blog</a>

                    </li>


                    <li class="more">
                        <a href="#" data-popup-open="#popup-support">Support</a>

                    </li>

                    <li class="toggle-more">
                        <a href="#" class="btn-navbar-menu-more"
                           data-ui-menu-toggle="navbar-menu-more" data-ui-role="dropdown"></a>
                        <div class="navbar-popup-menu" data-ui="navbar-menu-more">
                            <ul>



                                <li class="">
                                    <a href="/terms" >Terms</a>

                                </li>





                                <li class="">
                                    <a href="/blog" >Blog</a>

                                </li>


                                <li class="">
                                    <a href="#" data-popup-open="#popup-support">Support</a>

                                </li>

                            </ul>

                        </div>
                    </li>
                </ul>

            </div>
            <div class="col-md-3">
                <div class="social-icons clearfix">
                    <a href="https://www.facebook.com/instagress"
                       class="icon-fb" target="_blank" title="Follow us on Facebook">
                        <img src="/img/icon-social-fb.png?v=154"
                             srcset="/img/icon-social-fb-2x.png?v=154 2x"
                             alt="Follow us on Facebook"/>
                    </a>

                    <a href="https://twitter.com/instagress"
                       class="icon-tw" target="_blank" title="Follow us on Twitter">
                        <img src="/img/icon-social-tw.png?v=154"
                             srcset="/img/icon-social-tw-2x.png?v=154 2x"
                             alt="Follow us on Twitter"/>
                    </a>

                    <a href="http://instagress.tumblr.com/"
                       class="icon-tb" target="_blank" title="Follow us on Tumblr">
                        <img src="/img/icon-social-tb.png?v=154"
                             srcset="/img/icon-social-tb-2x.png?v=154 2x"
                             alt="Follow us on Tumblr"/>
                    </a>
                </div>
                <div class="support">
                    <a href="mailto:support@instagress.com">support@instagress.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="popup-alert" class="popup popup-small">
    <a href="#" class="btn-close-x" data-popup-close="#popup-alert"></a>
    <div class="text"></div>
</div>

<div id="popup-support" class="popup">
    <h3>Support</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-support"></a>
    <div class="color-gray mb20">
        Please use the form below if you have any questions, comments
        or would like to give us some feedback. Your opinion is very important to us!
    </div>
    <div class="alert alert-info">
        If you have a question or you want to ask about an error,
        please try to find an answer on the <a href="/faq">FAQ</a> page by yourself at first.
    </div>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/contact" class="form-horizontal form-ajax mt20" method="post">
        <input type="hidden" name="token" value=""/>
        <div class="form-group field-wrap" data-field="subject">
            <div class="col-md-12">
                <label class="control-label text-align-left" for="inpSupportSubject">Subject:</label>
                <select name="subject" id="inpSupportSubject" class="form-control" autofocus>

                    <option value="question">Question</option>

                    <option value="error">Error</option>

                    <option value="idea">Idea</option>

                    <option value="payment">Payment</option>

                    <option value="refund">Refund</option>

                    <option value="discount">Discount</option>

                    <option value="security">Security</option>

                    <option value="other">Other</option>

                </select>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
                <label class="control-label text-align-left" for="inpSupportEmail">Email:</label>

                <input type="text" name="email" id="inpSupportEmail"
                       class="form-control" placeholder="Your email"
                       value="nirdesh@resiliencesoft.com"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="username">
            <div class="col-md-12">
                <label class="control-label text-align-left" for="inpSupportUsername">Username:</label>
                <input type="text" name="username" id="inpSupportUsername"
                       class="form-control" placeholder="Your Instagram username (optional)"
                       value=""/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="message">
            <div class="col-md-12">
                <label class="control-label text-align-left" for="inpSupportMessage">Message:</label>
                <textarea name="message" id="inpSupportMessage" rows="4"
                          class="form-control" placeholder="Your message"></textarea>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-plain btn-success" data-loading-text="Sending...">Send</button>
        </div>
    </form>
</div>

<div id="popup-login" class="popup">
    <h3>

        Add Instagram Account

    </h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-login"></a>
    <div class="alert alert-success">
        <strong>Your privacy is important to us!</strong><br/>
        We won't store your password and use it only to obtain required data
        for Instagram <abbr title="Application programming interface">API</abbr>.
        Please, check out <a href="/guide">Guide</a> page before you sign in.
    </div>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/auth/login" id="login-form" class="form-horizontal form-ajax mb0" method="post">
        <div class="form-group field-wrap" data-field="username">
            <div class="col-md-12">
                <input type="text" name="username" id="inpLoginUsername"
                       class="form-control input-icon input-icon-username"
                       placeholder="Instagram username" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpLoginPassword"
                       class="form-control input-icon input-icon-password"
                       placeholder="Instagram password"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit"
                    class="btn btn-plain btn-success mb20"
                    data-loading-text="Signing in...">Sign in</button>
        </div>



        <div>
            <a href="#" class="link-ajax" data-popup-open="#popup-login-help">Sign in help</a>
        </div>


    </form>
</div>

<div id="popup-login-help" class="popup">
    <h3>Sign in Help</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-login-help"></a>
    <div class="mb20">
        <p>
            Having trouble logging in with your Instagram credentials?
            These can be the possible reasons:
        </p>
        <ul class="nice-list">
            <li>
                <p><strong>Wrong username or password</strong></p>
                <p>
                    Check that you have not misspelled your username or password.
                </p>
            </li>
            <li>
                <p><strong>Instagram reseted your password</strong></p>
                <p>
                    In rare cases Instagram can reset your password when you trying
                    to login on the third-party website. Go to your email (associated
                    with your Instagram account) and check your inbox/spam for a message
                    from Instagram with password reset link.
                </p>
            </li>
            <li>
                <p><strong>Integrity checkpoint</strong></p>
                <p>
                    This error means that Instagram is asking you to verify your account
                    by entering a captcha. You must be logged in on Instagram website
                    with this Instagram account to do it.
                </p>
            </li>
        </ul>
        <p>
            If you will continue to receive any login errors, please
            <a href="#" class="link-ajax"
               data-popup-open="#popup-support">contact&nbsp;us</a>.
        </p>
    </div>
    <div class="text-align-center">
        <button class="btn btn-plain" data-popup-close="#popup-login-help">Close</button>
    </div>
</div>

<div id="popup-reauth" class="popup">
    <h3>Account Reconnect</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-reauth"></a>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/auth/login?mode=reauth&next=/account" id="reauth-form" class="form-horizontal form-ajax mb0" method="post">
        <div class="form-group field-wrap" data-field="username">
            <div class="col-md-12">
                <input type="text" name="username" id="inpReauthUsername"
                       class="form-control input-icon input-icon-username"
                       placeholder="Instagram username" readonly/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpReauthPassword"
                       class="form-control input-icon input-icon-password"
                       placeholder="Instagram password" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit"
                    class="btn btn-plain btn-success mb20"
                    data-loading-text="Signing in...">Sign in</button>
        </div>
        <div>
            <a href="#" class="link-ajax" data-popup-open="#popup-login-help">Sign in help</a>
        </div>
    </form>
</div>

<div id="popup-account-signup" class="popup">
    <h3>Sign up</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-account-signup"></a>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/account/signup" id="account-signup-form" class="form-horizontal form-ajax mb0" method="post">
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
                <input type="text" name="email" id="inpAccountSignupEmail"
                       class="form-control input-icon input-icon-email"
                       placeholder="Email" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpAccountSignupPassword"
                       class="form-control input-icon input-icon-password"
                       placeholder="Password (random by default)"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit"
                    class="btn btn-plain btn-success mb20"
                    data-loading-text="Signing up...">Sign up</button>
        </div>
        <div class="mb10">
            By signing up, you agree to the <a href="/terms" target="_blank">Terms of Service</a>.
        </div>
        <div>
            Already have an account?
            <a href="#" class="link-ajax"
               data-popup-close="#popup-account-signup"
               data-popup-open="#popup-account-login">Log in</a>
        </div>
        <hr/>
        <div class="color-gray -mb20">
            <i class="fa fa-instagram fa-lg mr5"></i>
            <a href="#" class="link-ajax"
               data-popup-close="#popup-account-signup"
               data-popup-open="#popup-login">Sign in with Instagram</a>
        </div>
    </form>
</div>

<div id="popup-account-login" class="popup">
    <h3>Log in</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-account-login"></a>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/account/login" id="account-login-form" class="form-horizontal form-ajax mb0" method="post">
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
                <input type="text" name="email" id="inpAccountLoginEmail"
                       class="form-control input-icon input-icon-email"
                       placeholder="Email" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div class="form-group field-wrap" data-field="password">
            <div class="col-md-12">
                <input type="password" name="password" id="inpAccountLoginPassword"
                       class="form-control input-icon input-icon-password"
                       placeholder="Password"/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit"
                    class="btn btn-plain btn-success mb20"
                    data-loading-text="Logging in...">Log in</button>
        </div>
        <div class="mb10">
            <a href="#" class="link-ajax" data-popup-open="#popup-account-password-reset">Password reset</a>
        </div>
        <div>
            Don't have an account?
            <a href="#" class="link-ajax"
               data-popup-close="#popup-account-login"
               data-popup-open="#popup-account-signup">Sign up</a>
        </div>
        <hr/>
        <div class="color-gray -mb20">
            <i class="fa fa-instagram fa-lg mr5"></i>
            <a href="#" class="link-ajax"
               data-popup-close="#popup-account-login"
               data-popup-open="#popup-login">Sign in with Instagram</a>
        </div>
    </form>
</div>

<div id="popup-account-password-reset" class="popup">
    <h3>Password Reset</h3>
    <a href="#" class="btn-close-x" data-popup-close="#popup-account-password-reset"></a>
    <div class="color-gray mb20">
        If you forgot your password, request a new one by entering your email address in this form.
    </div>
    <div class="alerts">
        <div class="alert alert-danger alert-error"></div>
        <div class="alert alert-success"></div>
    </div>
    <form action="/account/password/reset" id="account-password-reset-form" class="form-horizontal form-ajax mb0" method="post">
        <div class="form-group field-wrap" data-field="email">
            <div class="col-md-12">
                <input type="text" name="email" id="inpAccountPasswordResetEmail"
                       class="form-control input-icon input-icon-email"
                       placeholder="Email" value="nirdesh@resiliencesoft.com" autofocus/>
                <span class="help-block text-danger text-error hidden"></span>
            </div>
        </div>
        <div>
            <button type="submit"
                    class="btn btn-plain btn-success"
                    data-loading-text="Sending request...">Send request</button>
        </div>
    </form>
</div>



</body>
</html>
