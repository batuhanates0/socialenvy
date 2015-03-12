<!DOCTYPE html>
<html lang="en">
<head>


    <script src="js/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        $("document").ready(function(){

            // $(".alert-error").hide();

            $("#signup").submit(function(){
                // $(".alert-error").hide();

                var data = {
                    "action": "sign_up"
                };
                data = $(this).serialize() + "&" + $.param(data);
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "loginDetails.php", //Relative or absolute path to response.php file
                    data: data,
                    success: function(data, status) {
                        if(data=="Success")
                        {
                          //  $(".alert-error").show();
                           // $(".alert-error").html(data);
                            window.location.href="instagram.php";
                            //alert("successful");
                        }else
                        {
                             $(".alert-error").show();
                             $(".alert-error").html(data);
                            //alert("unsuccessful");
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
    </script>


</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="span12 center login-header">

            </div><!--/span-->
        </div><!--/row-->

        <div class="row-fluid">
            <div class="well span5 center login-box">
                <div class="alert alert-info">
                    Please SignUp with your Email_id and Password.
                </div>
                <div class="alert alert-error"></div>

                <form id="signup" action="signup.php" method="post" >
                    <table>
                        <!-- <tr>
                             <td><div id="loginMsg" class="alert alert-danger"></div></td>
                         </tr>-->
                        <tr>

                            <td>Email <input id="email" type="text" placeholder="please enter your email" name="email" required="required" /></td>



                        </tr>

                        <tr>

                            <td>Password <input type="password" placeholder="please enter your password" id="password" name="password" required="required" /> </td>



                        </tr>
                        <tr>

                            <td><div align="center"><input type="submit" class="no-margin-top" value="SignUp" /> <input type="reset" class="no-margin-top" value="Reset" />

                    </table>
                </form>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/fluid-row-->

</div><!--/.fluid-container-->




</body>
</html>
