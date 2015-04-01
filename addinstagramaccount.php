<?php ?>

<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>Instagram Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/default.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
     <![endif]-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="ajax_request/instagram.js"></script>

    <script type="text/javascript">

        /*    $("document").ready(function(){

         $("#alert-error").hide();

         $("#login").submit(function(){
         $("#alert-error").hide();

         var data = {
         "action": "Login"
         };
         data = $(this).serialize() + "&" + $.param(data);
         $.ajax({
         type: "POST",
         dataType: "json",
         url: "clstest.php/Login", //Relative or absolute path to response.php file
         data: data,
         success: function(data) {

         if(data=="success")
         {
         $("#alert-error").html(data);
         $("#alert-error").show();

         //window.location.href="dashboard.php";
         // alert("successful");
         }else
         {
         $("#alert-error").html(data);
         $("#alert-error").show();

         // alert("unsuccessful");
         //window.location.href="signup.php";
         }
         },
         error: function(xhr, desc, err) {
         // $(".alert-error").show();
         //$(".alert-error").html("Details: " + desc + "\nError:" + err);
         }
         });
         return false;
         });
         });
         */
    </script>

</head>
<body class="bg-black">

<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <form id="login" action="addinstagramaccount.php" method="post">
        <div class="body bg-gray">
            <div class="form-group">

                <div id="alert-err" class="alert alert-danger"></div>
                <input type="text" name="IGuname" class="form-control" placeholder="Instagram Username"/>
            </div>
            <div class="form-group">
                <input type="password" name="IGpassword" class="form-control" placeholder="Instagram Password"/>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember_me"/> Remember me
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block">Sign me in</button>

            <p><a href="#">I forgot my password</a></p>

            <a href="register.html" class="text-center">Register a new membership</a>
        </div>
    </form>

    <div class="margin text-center">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>