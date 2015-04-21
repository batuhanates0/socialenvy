/**
 * Created by RESILIENCE on 3/21/2015.
 */

function updatestopall() {

    // alert(id);
    var data = {
        "action": "stopstatusforall"
    };

    data = $(this).serialize() + "&" + $.param(data);


    $.ajax({
        type: "POST",
        dataType: "json",
        url:"../actionpage/stopallincacc.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            // $("#"+photoId).hide();
            //alert("Photo deleted Successfully");
            // alert("status updated");

        },
        error: function(xhr, desc, err) {
            //alert(xhr);
            //alert("Details: " + desc + "\nError:" + err);
        }
    });

    return false;

}

function updatestatusall() {

    // alert(id);
    var data = {
        "action": "changestatusforall"
    };

    data = $(this).serialize() + "&" + $.param(data);


    $.ajax({
        type: "POST",
        dataType: "json",
        url:"../actionpage/startallinsacc.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            // $("#"+photoId).hide();
            //alert("Photo deleted Successfully");
            // alert("status updated");
        },
        error: function(xhr, desc, err) {
            //alert(xhr);
            //alert("Details: " + desc + "\nError:" + err);
        }
    });

    return false;

}
function updatestatusstop(id) {

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
        url:"../actionpage/stopinsacc.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data=eval(data);

            $("#status_"+data[0].IGuname+"").html("Stopped");
            // $("#divActivity_"+data[0].IGuname+"").html("Stop");
            //$("#divActivity_"+data[0].IGuname+"").html("Start")




        }

        // },
        //  error: function(xhr, desc, err) {
        // alert(xhr);
        // alert("Details: " + desc + "\nError:" + err);
        //  }
    });

    return false;

}


function updatestatus(id) {
   //alert(id);
   // jConfirm('If You activate this account..Rest will be stopped..Do You really want to continue?', 'Confirmation', function (result) {
       // if (result) {

           // alert("Account Activated");
            //$("#status").val("Active");


            var data = {
                "action": "changestatus"
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
                url: "../actionpage/startinsacc.php", //Relative or absolute path to response.php file
                data: data,
                success: function(data) {
                    data = eval(data);
                   // alert(data);
                   // alert(data[0].IGuname);
                   // $('#status_' + data[0].IGuname  + "'").val("Active");
                    var temp=data[0].id;
                    $("#status_"+data[0].IGuname+"").html("Active");
                   // $("#divActivity_"+data[0].IGuname+"").html("Stop");
                   // $("#divActivity_"+data[0].IGuname+"").html("Stop").bind('click',function(){
                       // updatestatusstop(temp);
                   // });





                },

                error: function (xhr, desc, err) {
                    // alert(xhr);
                    // alert("Details: " + desc + "\nError:" + err);
                }
            });
     //   }
      //  else{

      //  }
    //});

    return false;

}


function test(id) {

   // var divActivity = "divActivity" + "_" +id ;
    var valueOfdiv =$("#divActivity"+ "_" +id).html();
    alert(valueOfdiv);

    if(valueOfdiv=='Start')
    {
        $("#divActivity" + "_" +id).html("Stop");
        $("#clickstart").removeClass('btn btn-success');
        $("#clickstart").addClass('btn btn-danger');
        $("#divActivity" + "_" +id).removeClass('fa fa-play');
        $("#divActivity" + "_" +id).addClass('fa fa-stop');
        updatestatus(id);
    }else{
        $("#divActivity" + "_" +id).html("Start");
        $("#clickstart").removeClass('btn btn-danger');
        $("#clickstart").addClass('btn btn-success');
        $("#divActivity" + "_" +id).removeClass('fa fa-stop');
        $("#divActivity" + "_" +id).addClass('fa fa-play');
        updatestatusstop(id);
    }
}

$("document").ready(function(){
    var data = {
        "action": "InstagramAccount"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../actionpage/ajaxaccountdetails.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);
            var innerTableHtml = "";
           // var temp_data = [];
            var temp_data="";

            for (var i = 0; i < data.length; i++) {
               // temp_data.push(data[i].id);
                temp_data=data[i].id;
                innerTableHtml += "<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml += "<div class='inner-accounts-box'>";
                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                innerTableHtml += "<div class='pull-left image'>";
                innerTableHtml += "<img src='../img/avatar3.png' class='img-circle' style='width:100px; height:100px; border:1px solid #ccc;' alt='User Image' />";
                innerTableHtml += "</div>";
                innerTableHtml += "<div class='pull-left info' style='padding-left:10px;'>";
                innerTableHtml += "<h4>"+data[i].IGuname+"</h4>";
                innerTableHtml += "<p>Instagram</p>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div class='clearfix'></div>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                innerTableHtml += "<table width='100%' >";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Activity:</td>";
                innerTableHtml += "<td id='status_"+data[i].IGuname+"' width='50%'>"+data[i].isRunning+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Time:</td>";
                innerTableHtml += "<td width='50%'><em style='font-style:normal; color:red;'>Time is over</em></td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "</table>";
                innerTableHtml +="</div>";
                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                innerTableHtml += "<table width='100%'' >";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Likes:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].likes+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Comments:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].comment+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Follows:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].follows+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Unfollows:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].unfollows+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "</table>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                innerTableHtml += "<table width='100%'>";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Start time:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].start_time+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Stop time:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].end_time+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "</table>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div>";
                innerTableHtml += "<table width='100%'>";
                innerTableHtml += "<tr>";
                innerTableHtml += '<td width="35%"><div id="clickstart" class="btn btn-success" href="javascript:void(0)" onclick="test(\'' + data[i].id + '\')">';
                innerTableHtml += "<i id='divActivity_"+data[i].id+"' class='fa fa-play'>Start</i></div></td>";
               // innerTableHtml +="<td width='35%'><div class='btn btn-primary'><i class='fa fa-gear'></i><a href='../activity.php'> Settings</a></div></td>";
                innerTableHtml +="<td width='35%'><div><a class='btn btn-primary' href='../activity.php?id="+data[i].id+"'><i class='fa fa-gear'></i>Settings</a></div></td>";
                innerTableHtml += "<td width='30%'><div class='btn-group pull-right'>";
                innerTableHtml +="<button class='btn btn-warning btn-sm dropdown-toggle' data-toggle='dropdown'><i class='fa fa-bars'></i>  More</button>";
                innerTableHtml += "<ul class='dropdown-menu pull-right' role='menu'>";
                innerTableHtml += "<li><a href='#'>Profile</a></li>";
                innerTableHtml += "<li><a href='#'>Likes</a></li>";
                innerTableHtml +="<li class='divider'></li>";
                innerTableHtml +="<li><a href='#'>Transfer Time</a></li>";
                innerTableHtml +="<li class='divide'></li>";
                innerTableHtml +="<li><a href='#'>Reconnect</a></li>";
                innerTableHtml += "<li><a href='#'>Logout</a></li>";
                innerTableHtml += "</ul>";
                innerTableHtml +="</div></td>";
                innerTableHtml +="</tr>";
                innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +='</div>';
                innerTableHtml +='</div>';

               // $("#clickstart").click(updatestatus(data[i].id));



                //alert(temp_data);


            }
            if(innerTableHtml =="")
            {
                $("#loginMsg").show();
                innerTableHtml = "<div id='loginMsg' class='alert alert-danger'>No Instagram account found. To add Instagram account click <a href='../addinstagramaccount.php'>here</a> </div>"
            }
            $('#dashboard-list').append(innerTableHtml);

           // for (var i = 0; i < temp_data.length; i++) {
              //  var temp_data = temp_data[i];
              //  alert(temp_data);
            //$('#divActivity_'+ temp_data).on('click', function (e) {
            //       e.preventDefault();
            //        $(this).text(function (_, text) {
            //            if (text != "Stop") {
            //                updatestatus(temp_data);
            //            } else {
            //                updatestatusstop(temp_data);
            //            }
            //            return text === 'Stop' ? 'Start' : 'Stop';
            //        }).toggleClass('stop_button');
            //    });
            }





       // }

    });
    return false;
});
