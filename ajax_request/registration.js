
$("document").ready(function(){

    // $(".alert-error").hide();

    $("#register").submit(function(){
        // $(".alert-error").hide();

        var data = {
            "action": "register"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "classes/clsLogin.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data, status) {
                if(data=="Success")
                {
                    // $("#alert-error").show();
                    // $("#alert-error").html(data);
                    //window.location.href="dashboard.php";
                     alert("successful");
                }else
                {
                   // $("#alert-error").show();
                   // $("#alert-error").html(data);
                    alert("unsuccessful");
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
