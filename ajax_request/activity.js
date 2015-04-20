
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
       // $('#divFollow').css("background",'green');
        $('#divFollow').css("background",'#3e8f3e');
        $('#processFollow').removeClass('fa fa-stop');
        $('#processFollow').addClass('fa fa-play');
        Follow="False";
    }
    else {
        $('#divFollow').css("background",'#b92c28');
        $('#processFollow').removeClass('fa fa-play');
        $('#processFollow').addClass('fa fa-stop');
        Follow ="True";
    }
    if(processCommentValue=="Start"){
        $('#divComment').css("background",'#3e8f3e');
        $('#processComment').removeClass('fa fa-stop');
        $('#processComment').addClass('fa fa-play');
        Comment="False";
    }else{
        $('#divComment').css("background",'#b92c28');
        $('#processComment').removeClass('fa fa-play');
        $('#processComment').addClass('fa fa-stop');
        Comment="True";
    }
    if(processLikeValue=="Start"){
        $('#divLikes').css("background",'#3e8f3e');
        $('#processLike').removeClass('fa fa-stop');
        $('#processLike').addClass('fa fa-play');
        Like="False";
    }else{
        $('#divLikes').css("background",'#b92c28');
        $('#processLike').removeClass('fa fa-play');
        $('#processLike').addClass('fa fa-stop');
        Like="True";
    }
    if(processUnFollowValue=="Start"){
        $('#divUnFollow').css("background",'#3e8f3e');
        $('#processUnFollow').removeClass('fa fa-stop');
        $('#processUnFollow').addClass('fa fa-play');
        UnFollow="False";
    }else{
        $('#divUnFollow').css("background",'#b92c28');
        $('#processUnFollow').removeClass('fa fa-play');
        $('#processUnFollow').addClass('fa fa-stop');
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

                innerTableHtml +='<div class="btn btn-success" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="update(\'' + data[i].id + '\')"><i class="fa fa-save"></i> Save Your Settings</div>';

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

                innerTableHtml +='<div class="btn btn-danger" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="updatestatus_stop(\'' + data[i].id + '\')"><i class="fa fa-stop"></i> Stop Your Settings</div>';

            }



                      $('#dashboard').html(innerTableHtml);


        }

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
                innerTableHtml +='<div class="btn btn-success" style="text-align:center; margin-bottom:10px;" href="javascript:void(0)" onclick="update(\'' + data[i].id + '\')"><i class="fa fa-save"></i> Save Your Settings</div>';

            }


            $('#dashboard').html(innerTableHtml);


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



        }

    });
    return false;
});
////////////////////////////////////////delete usertag tbl data/////////////////////////////////////
     function deletetag(id)
   {

    jConfirm('Do You Really Want To Delete?', 'Confirmation', function (result) {
        if (result) {



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
                    $("#"+id).hide();
                    alert("Tag Deleted");
                },
                error: function (xhr, desc, err) {

                }
            });
        }
                else {

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
                innerTableHtml += "<li id='"+data[i].id +"'><a>"+data[i].tagname;
                innerTableHtml +='<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" href="javascript:void(0)"  onclick="deletetag(\''+data[i].id+'\')">&times;</button>';
                innerTableHtml +="</a></li>";
            }
            $('#hashtag-list').append(innerTableHtml);

        }

    });
    return false;
});
////////////////////////////////////////////////////////
function addTag(){
    //var Tagname = $("#inpAddTags").val();
    var Tagname = [];
    Tagname = $('#inpAddTags').val().split(',');
    alert(Tagname);
    var count=Tagname.length;
   // alert(count);
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
            "Tag":Tagname,
            "count":count
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
          //  for (j=0; j<splitter.length; i++)
          //  {
                for(i=0; i<data.length; i++){
                    alert(data[i].id + " " +data[i].tagname );
                    innerTableHtml += "<li id='"+data[i].id+"'><a>"+data[i].tagname;
                    innerTableHtml +='<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" onclick="deletetag(\''+data[i].id+'\')" href="javascript:void(0)">&times;</button>';
                    innerTableHtml +="</a></li>";

                }

          //  }


           // innerTableHtml += "<li id='"+data[0].id+"'><a>"+Tagname;
            //innerTableHtml +='<button type="button" style="color: #fff;float: left;margin-left: -12px;margin-right: 5px;margin-top: 5px;text-shadow:0 1px 0 #000" class="close" onclick="deletetag(\''+data[0].id+'\')" href="javascript:void(0)">&times;</button>';
            //innerTableHtml +="</a></li>";

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

            }


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



            }


        }

    });
    return false;
});
///////////////////////////////////////////////////Auto stop setting tbl data/////////////////////////////////////////////////////////