
function ChangeFollowProcess(id)
{
    var processFollowValue = $("#processFollow").html();
    if(processFollowValue=="Start")
    {
        $("#processFollow").html("Stop")
    }else{
        $("#processFollow").html("Start")
    }

    ProcessSelection(id);
}

function ChangeLikeProcess(id)
{
    var processLikeValue = $("#processLike").html();
    if(processLikeValue=="Start")
    {
        $("#processLike").html("Stop")
    }else{
        $("#processLike").html("Start")
    }

    ProcessSelection(id);
}

function ChangeCommentProcess(id)
{
    var processCommentValue = $("#processComment").html();
    if(processCommentValue=="Start")
    {
        $("#processComment").html("Stop")
    }else{
        $("#processComment").html("Start")
    }

    ProcessSelection(id);
}

function ChangeUnFollowProcess(id)
{
    var processUnFollowValue = $("#processUnFollow").html();
    if(processUnFollowValue=="Start")
    {

        $("#processUnFollow").html("Stop")
    }else{
        $("#processUnFollow").html("Start")
    }

    ProcessSelection(id);
}

function ProcessSelection(id) {

    var processFollowValue = $("#processFollow").html();
    var processLikeValue = $("#processLike").html();
    var processCommentValue = $("#processComment").html();
    var processUnFollowValue = $("#processUnFollow").html();
    var Like="";
    var Comment="";
    var Follow="";
    var UnFollow="";
    if(processFollowValue=="Start"){
        Follow="False";
    }
    else {
        Follow ="True";
    }
    if(processCommentValue=="Start"){
        Comment="False";
    }else{
        Comment="True";
    }
    if(processLikeValue=="Start"){
        Like="False";
    }else{
        Like="True";
    }
    if(processUnFollowValue="Start"){
        UnFollow="False";
    }else{
        UnFollow="True";
    }


   // alert(processLikeValue +":"+ processCommentValue +":" +processFollowValue +":"+processUnFollowValue);
    var data = {
        "action": "ChangeStatusTrueFalse"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id,
            "LikeStatus": Like,
            "CommentStatus":Comment,
            "FollowStatus":Follow,
            "UnFollowStatus":UnFollow

        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingtblfalse.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data) {
            data= JSON.stringify(data);
            alert(data);

        }


    });
    return false;
}


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
/////////////////////////////////////////////////////////////update like comment follow unfollow//////////////
function updateliketrue(id) {

     alert(id);
    var data = {
        "action": "changestatustrue"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id,
            "Status" : "True"
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/updateinstatbltrue.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data) {
           // data = eval(data);
            data = Json.stringify(data);
            alert(data);

            // var innerTableHtml = "";
            var temp1 = data(0).id;
            alert(temp1);

            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';
            if (data != "") {


            $("#div1").html("Stop").bind('click',function(){
                updatelikefalse(temp1);
            });
        }

           // $("#div1").html("<i class=\"fa fa-play\"> Stop</i>");

            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        }

    });

    return false;

}

//////////////////////////////////////////////mainsetting tbl false////////////////////
function updatelikefalse(id) {

    // alert(id);
    var data = {
        "action": "changestatusfalse"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingtblfalse.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data, status) {
            data = eval(data);
            // var innerTableHtml = "";


            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';

            $("#div1").html("Start");




            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        },
        error: function (xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
        }
    });

    return false;

}

//////////////////////////////////////////mainsettingtblfalse///////////////

function updatecommenttrue(id) {

    alert(id);
    var data = {
        "action": "changestatustrue"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id,
            "Status" : "True"
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingcommenttrue.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data) {
            data = eval(data);
            // var innerTableHtml = "";
            var temp2 = data(0).id;

            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';
            if (data != "") {


                $("#div2").html("Stop").bind('click',function(){
                    updatecommentfalse(temp2);
                });
            }
            // $("#div1").html("<i class=\"fa fa-play\"> Stop</i>");

            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        }

    });

    return false;

}

//////////////////////////////////////////////mainsetting tbl false////////////////////
function updatecommentfalse(id) {

    // alert(id);
    var data = {
        "action": "changestatusfalse"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingcommentfalse.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data, status) {
            data = eval(data);
            // var innerTableHtml = "";


            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';

            $("#div2").html("Start");




            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        },
        error: function (xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
        }
    });

    return false;

}


function updatefollowtrue(id) {

    alert(id);
    var data = {
        "action": "changestatustrue"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id,
            "Status" : "True"
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingfollowtrue.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data) {
            data = eval(data);
            // var innerTableHtml = "";
            var temp3 = data(0).id;

            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';
            if (data != "") {


                $("#div3").html("Stop").bind('click',function(){
                    updatefollowfalse(temp3);
                });
            }
            // $("#div1").html("<i class=\"fa fa-play\"> Stop</i>");

            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        }

    });

    return false;

}

//////////////////////////////////////////////mainsetting tbl false////////////////////
function updatefollowfalse(id) {

    // alert(id);
    var data = {
        "action": "changestatusfalse"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingfollowfalse.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data, status) {
            data = eval(data);
            // var innerTableHtml = "";


            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';

            $("#div3").html("Start");




            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        },
        error: function (xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
        }
    });

    return false;

}


function updateunfollowtrue(id) {

    alert(id);
    var data = {
        "action": "changestatustrue"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id,
            "Status" : "True"
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingunfollowtrue.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data) {
            data = eval(data);
            // var innerTableHtml = "";
            var temp4 = data(0).id;

            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';
            if (data != "") {


                $("#div4").html("Stop").bind('click',function(){
                    updateunfollowfalse(temp4);
                });
            }
            // $("#div1").html("<i class=\"fa fa-play\"> Stop</i>");

            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        }

    });

    return false;

}

//////////////////////////////////////////////mainsetting tbl false////////////////////
function updateunfollowfalse(id) {

    // alert(id);
    var data = {
        "action": "changestatusfalse"
    };

    if(id!= null)
    {
        var query_data = {
            "Id": id
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data)
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingunfollowfalse.php", //Relative or absolute path to response.php file
        data: data,
        success: function (data, status) {
            data = eval(data);
            // var innerTableHtml = "";


            //  for (var i = 0; i < data.length; i++) {

            // innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Stop</div>';

            $("#div4").html("Start");




            // alert(innerTableHtml);
            //$("#dashboard").hide();
            // $("#dashboard_start").hide();
            // $("#dashboard_stop").show();
            // $('#dashboard').html(innerTableHtml);
            // $("#dashboard_stop").show();

            //  }

            // },
            //  error: function(xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
            //  }
        },
        error: function (xhr, desc, err) {
            // alert(xhr);
            // alert("Details: " + desc + "\nError:" + err);
        }
    });

    return false;

}

////////////////////////////////////////////                                   //////////////////////////////

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
            var temp="";

            for (var i = 0; i < data.length; i++) {

                temp= data[i].id;
                innerTableHtml +='<div class="btn-lg btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="update(\'' + data[i].id + '\')"><i class="fa fa-play"></i> Start</div>';

            }
          //  alert(temp);

            $('#dashboard').html(innerTableHtml);
            //$('#div1').setAttribute("onclick","update("+temp+")");

            $('#processFollow').bind('click',function(){
                ChangeFollowProcess(temp);
            });

            $('#processLike').bind('click',function(){
                ChangeLikeProcess(temp);
            });

            $('#processComment').bind('click',function(){
                ChangeCommentProcess(temp);
            });

            $('#processUnFollow').bind('click',function(){
                ChangeUnFollowProcess(temp);
            });


            //$('#div1').bind('click',function(){
            //    updateliketrue(temp);
            //});
            //$('#div2').bind('click',function(){
            //    updatecommenttrue(temp);
            //});
            //$('#div3').bind('click',function(){
            //    updatefollowtrue(temp);
            //});
            //$('#div4').bind('click',function(){
            //    updateunfollowtrue(temp);
            //});
        }

    });
    return false;
});
////////////////////////////////////////delete usertag tbl data/////////////////////////////////////
     function deletetag(id)
   {

    jConfirm('Do You Really Want To Delete?', 'Confirmation', function (result) {
        if (result) {

            alert("Tag Deleted");

            var data = {
                "action": "DeleteSelectedTag"
            };

            if (id != null) {
                var query_data = {
                    "Id": id
                };

                data = $(this).serialize() + "&" + $.param(data) + "&" + $.param(query_data);

            } else {
                data = $(this).serialize() + "&" + $.param(data);
            }

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "actionpage/DeleteTag.php", //Relative or absolute path to response.php file
                data: data,
                success: function (data, status) {
                    if(data="Success") {
                        $("#" + id).hide();
                    }

                },
                error: function (xhr, desc, err) {

                }
            });
        }
                else {
                   // $("#" + id).show();
                    //alert("false");
                    //$("#loaderImage").attr("style", 'display:block');

                    //window.location.href = "photos.php?photoId=cancel";

                }

            });

            return false;

}


/////////////////////////////////////////// delete usertag tbl data ///////////////////////////////////////////






//////////////////////////////////////////////////////////usertag tbl data
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
        "action": "gethashtags"
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
   // var data = {
 //       "action": "gethashtags"
   // };
   // data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/hashtag.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);
            var innerTableHtml = "";


            for (var i = 0; i < data.length; i++) {

               // innerTableHtml += "<li><a href='#'>"+data[i].tagname+"<button type='button' style='color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button></a></li>";
                innerTableHtml += "<li><a href='#'>"+data[i].tagname;
                innerTableHtml +='<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true" onclick="deletetag(\''+data[i].id+'\')" href="javascript:void(0)">&times;</button>';
                innerTableHtml +="</a></li>";
            }
            $('#hashtag-list').append(innerTableHtml);

        }

    });
    return false;
});
////////////////////////////////////////////////////////
function addTag(){
    var Tagname = $("#inpAddTags").val();

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
        "action": "addUserTag"
    };
    if(user_Id!= null)
    {
        var query_data = {
            "Id": user_Id,
            "Tag":Tagname
        };

        data = $(this).serialize() + "&" + $.param(data)+ "&" + $.param(query_data)

    }else {
        data = $(this).serialize() + "&" + $.param(data);
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/userinhashtag.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data) {

            data = eval(data);
            var innerTableHtml = "";


            innerTableHtml += "<li><a href='#'>"+Tagname;
            innerTableHtml +='<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" data-dismiss="alert" aria-hidden="true" onclick="deletetag(\''+data[0].id+'\')" href="javascript:void(0)">&times;</button>';
            innerTableHtml +="</a></li>";

            $('#hashtag-list').append(innerTableHtml);

        },
        error: function(xhr, desc, err) {
           // alert(xhr);
            //alert("Details: " + desc + "\nError:" + err);
        }


    });
    return false;

}

//////////////////////////////////Mainsettings tbl data/////////////////////////////////////////////////////////////
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
        "action": "getMainSettingtblData"
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
    // var data = {
    //       "action": "gethashtags"
    // };
    // data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/mainsettingDetails.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);
            var innerTableHtml = "";


            for (var i = 0; i < data.length; i++) {

                $('#Activityspeed').val(data[0].Activityspeed);
                $('#Mediasource').val(data[0].Mediasource);
                $('#Minlikesfilter').val(data[0].Minlikesfilter);
                $('#Maxlikesfilter').val(data[0].Maxlikesfilter);
               // $('#imgprevw').attr('src','../userimages/small/' + data[0].Image );
               // $('#articleTitle').val(data[0].articleTitle);
               // $('#articleDescription').val(data[0].articleDescription);


                /*innerTableHtml +="<form id='formsubmit' action='../activity.php' method='post' class='sidebar-form'>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Activity speed<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<select name='Activityspeed' class='form-control' placeholder='"+data[i].Activityspeed+"'>";
                innerTableHtml +="<option value='Slow'>Slow</option>";
                innerTableHtml +="<option value='Normal'>Normal</option>";
                innerTableHtml +="<option value='Fast'>Fast</option>";
                innerTableHtml +="</select>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Media source<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a>";
                innerTableHtml += "<small class='badge pull-left bg-red'>New</small></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<select name='Mediasource' class='form-control' placeholder='"+data[i].Mediasource+"'>";
                innerTableHtml +="<option value='Tags'>Tags</option>";
                innerTableHtml +="<option value='Locations'>Locations</option>";
                innerTableHtml +="<option value='My Feed'>My Feed</option>";
                innerTableHtml +="</select>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle' style='padding-bottom:14px;'>New media only<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right'' valign='middle'>";
                innerTableHtml +="<span class='pull-right'>";
                innerTableHtml +="<input name='newMediaOnly' id='inpNewMediaOnly' class='chk-custom' type='checkbox' data-checked='false'/>";
                innerTableHtml +="<label class='chk-custom' for='inpNewMediaOnly'></label>";
                innerTableHtml +="</span>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td align='left' valign='middle'>Min. likes filter<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Minlikesfilter' type='number' placeholder='"+data[i].Minlikesfilter+"'/>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Max. likes filter<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Maxlikesfilter' type='number' placeholder='"+data[i].Maxlikesfilter+"'/>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td align='left' valign='middle' style='padding-bottom:6px;'>Don't comment same users<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td align='left' valign='middle'></td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
*/
            }
          //  $('#mainsettingtbl-list').append(innerTableHtml);

        }

    });
    return false;
});
////////////////////////////////////////////////////////Mainsettings data//////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////Auto stop setting tbl data/////////////////////////////////////////////////////////
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
        "action": "getAutoStopSettingtblData"
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
    // var data = {
    //       "action": "gethashtags"
    // };
    // data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "actionpage/autostopsettingDetails.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);
            var innerTableHtml = "";


            for (var i = 0; i < data.length; i++) {

                $('#Likescounter').val(data[0].Likescounter);
                $('#Commentscounter').val(data[0].Commentscounter);
                $('#Followscounter').val(data[0].Followscounter);
                $('#Unfollowscounter').val(data[0].Unfollowscounter);
                $('#Timer').val(data[0].Timer);


                /*innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td align='left' valign='middle'>Likes counter<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Likescounter' type='number' placeholder='"+data[i].Likescounter+"'/>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Comments counter<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Commentscounter' type='number' placeholder='"+data[i].Commentscounter+"'/>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Follows counter<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Followscounter' type='number' placeholder='"+data[i].Followscounter+"'/>";
                innerTableHtml += "</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div  class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Unfollows counter<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Unfollowscounter' type='number' placeholder='"+data[i].Unfollowscounter+"'/>";
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
                innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml +="<div class='inner-setting-box'>";
                innerTableHtml +="<table width='100%' cellpadding='0' cellspacing='0'>";
                innerTableHtml +="<tr>";
                innerTableHtml +="<td  align='left' valign='middle'>Timer<a href='#' data-toggle='tooltip'><i class='fa fa-question'></i></a></td>";
                innerTableHtml +="<td  align='right' valign='middle'>";
                innerTableHtml +="<input name='Timer' type='time' placeholder='"+data[i].Timer+"'/>"
                innerTableHtml +="</td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +="</div>";
*/
            }
          //  $('#autostopsettingtbl-list').append(innerTableHtml);

        }

    });
    return false;
});
///////////////////////////////////////////////////Auto stop setting tbl data/////////////////////////////////////////////////////////