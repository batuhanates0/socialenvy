
$("document").ready(function(){

     $("#alert-msg").hide();

    $("#register").submit(function(){
         $("#alert-msg").hide();

        var data = {
            "action": "register"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "actionpage/ajaxregistration.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data, status) {
                if(data=="success")
                {
                   // $("#alert-msg").show();
                    // $("#alert-msg").html(data);
                    window.location.href="user/dashboard.php";
                     //alert("successful");
                }else
                {
                    $("#alert-msg").show();
                    $("#alert-msg").html(data);
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
