
$("document").ready(function(){

    $("#alert-errmsg").hide();

    $("#passwordreset").submit(function(){
        $("#alert-errmsg").hide();

        var data = {
            "action": "ResetPassword"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "actionpage/passwordmail.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data, status) {
                if(data=="success")
                {
                     $("#alert-errmsg").show();
                     $("#alert-errmsg").html(data);

                }else
                {
                    $("#alert-errmsg").show();
                    $("#alert-errmsg").html(data);
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
