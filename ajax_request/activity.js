
function updatestatus_stop(id) {

    // alert(id);
    var data = {
        "action": "changestatus_stop"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data);

    }else {
        data = $(this).serialize() + "&" + $.param(data);
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url:"actionpage/stopinsacc.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data=eval(data);
            var innerTableHtml = "";


            for (var i = 0; i < data.length; i++) {

                innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="update(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Start</div>';

            }

           // $("#dashboard_stop").hide();
           // $("#dashboard").hide();
            $('#dashboard').html(innerTableHtml);

        }

        // },
        //  error: function(xhr, desc, err) {
        // alert(xhr);
        // alert("Details: " + desc + "\nError:" + err);
        //  }
    });

    return false;

}


function update(id) {

    // alert(id);
    var data = {
        "action": "changestatus"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data) + "&" + $('#formsubmit').serialize();

    }else {
        data = $(this).serialize() + "&" + $.param(data) + "&" + $('#formsubmit').serialize();
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url:"actionpage/startinstaaccactivity.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data=eval(data);
            var innerTableHtml = "";


            for (var i = 0; i < data.length; i++) {

                innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';

            }
           // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
           // $("#dashboard_stop").show();
            $('#dashboard').html(innerTableHtml);
           // $("#dashboard_stop").show();

        }

       // },
      //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
      //  }
    });

    return false;

}





$("document").ready(function(){
    function GetParameterValues(param) {
        var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < url.length; i++) {
            var urlparam = url[i].split('=');
            if (urlparam[0] == param) {
                return urlparam[1];
            }
        }
    }

    var user_Id = GetParameterValues('id');

    var data = {
        "action": "accountid"
    };
    if(user_Id!= null)
    {
        var query_data = {
            "Id": user_Id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data);

    }else {
        data = $(this).serialize() + "&" + $.param(data);
    }
   // data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/instagramaccountactive.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);

            var innerTableHtml = "";


            for (var i = 0; i < data.length; i++) {


                innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="update(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Start</div>';

            }

            $('#dashboard').html(innerTableHtml);

        }

    });
    return false;
});