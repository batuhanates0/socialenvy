$("document").ready(function(){

    $(".alert-err").hide();

    $(".form-horizontal").submit(function(){
        $(".alert-err").hide();

        var data = {
            "action": "adminLogin"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../actionpage/adminlogin.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data, status) {
                if(data=="Success")
                {
                    window.location.href="home.php";
                }else
                {
                    $(".alert-err").show();
                    $(".alert-err").html(data);
                }
            },
            error: function(xhr, desc, err) {
                $(".alert-err").show();
                $(".alert-err").html("Details: " + desc + "\nError:" + err);
            }
        });
        return false;
    });
});