
$("document").ready(function () {

    $("#alert-err").hide();

    $("#login").submit(function () {
        $("#alert-err").hide();

        var data = {
            "action": "InsLogin"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "actionpage/ajaxaddinstagramaccount.php", //Relative or absolute path to response.php file
            data: data,
            success: function (data, status) {
                if (data == "Success") {
                     $("#alert-err").show();
                     $("#alert-err").html(data);
                   // window.location.href = "user/dashboard.php";
                    // alert("successful");
                } else {
                    $("#alert-err").show();
                    $("#alert-err").html(data);
                    //alert("unsuccessful");
                    //window.location.href="signup.php";
                }
            },
            error: function (xhr, desc, err) {
                // $(".alert-error").show();
                //$(".alert-error").html("Details: " + desc + "\nError:" + err);
            }
        });
        return false;
    });
});
