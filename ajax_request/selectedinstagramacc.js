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
        "action": "SelectedAccountId"
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
        url: "../actionpage/instagramaccountactive.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);
            var innerTableHtml = "";
            // var temp_data = [];
            var temp_data="";

            // innerTableHtml +="<div class='row'>";
            // innerTableHtml +="<div class='col-sm-12 col-md-4 col-md-push-4'>";
            // innerTableHtml +="<div class='title-block'>Add new account to your dashboard</div>";
            // innerTableHtml +="<div class='-add-account-cont'>";
            // innerTableHtml +="<button class='btn btn-plain btn-big btn-danger btn-add-account js-btn-add-account' data-popup-open='#popup-login'>Add account</button>";
            // innerTableHtml +="</div>";
            // innerTableHtml +="</div>";


            for (var i = 0; i < data.length; i++) {
                // temp_data.push(data[i].id);
                temp_data=data[i].id;
                innerTableHtml += "<div class='col-lg-4 col-md-4 col-sm-4'>";
                innerTableHtml += "<div class='inner-accounts-box'>";
                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
               // innerTableHtml += "<div class='pull-left image'>";
               // innerTableHtml += "<img src="+data[i].ImageUrl+" class='img-circle' style='width:100px; height:100px; border:1px solid #ccc;' alt='User Image' />";
               // innerTableHtml += "</div>";
                innerTableHtml += "<div class='pull-left info' style='padding-left:10px;'>";
                innerTableHtml += "<h4>"+data[i].IGusername+"</h4>";
                innerTableHtml += "<p>Instagram</p>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div class='clearfix'></div>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                innerTableHtml += "<table width='100%' >";
                innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Process Type:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].Status+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "<tr>";
               ////// innerTableHtml += "<td width='50%'>Time:</td>";
               ////// innerTableHtml += "<td width='50%'><em style='font-style:normal; color:red;'>Time is over</em></td>";
            //////    innerTableHtml += "</tr>";
                innerTableHtml += "</table>";
                innerTableHtml +="</div>";

                    innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                    innerTableHtml += "<table width='100%'' >";
                    innerTableHtml += "<tr>";
                   if(data[i].Status =="Liked" || data[i].Status =="Commented" ) {
                       innerTableHtml += "<img src="+data[i].UserImageUrl+" class='img-circle' style='width:100px; height:100px; border:1px solid #ccc;'/>";
                   }
                   else{
                       innerTableHtml += "<td width='50%'>IGProfile:</td>";
                       innerTableHtml += "<td width='50%'>https://instagram.com/"+ data[i].ImageUrl + "</td>";
                   }
                    innerTableHtml += "</tr>";
                    //  innerTableHtml += "<tr>";
                    // innerTableHtml += "<td width='50%'>Comments:</td>";
                    //  innerTableHtml += "<td width='50%'>"+data[i].comment+"</td>";
                    //  innerTableHtml += "</tr>";
                    //  innerTableHtml += "<tr>";
                    //  innerTableHtml += "<td width='50%'>Follows:</td>";
                    //  innerTableHtml += "<td width='50%'>"+data[i].follows+"</td>";
                    // innerTableHtml += "</tr>";
                    // innerTableHtml += "<tr>";
                    //  innerTableHtml += "<td width='50%'>Unfollows:</td>";
                    // innerTableHtml += "<td width='50%'>"+data[i].unfollows+"</td>";
                    // innerTableHtml += "</tr>";
                    innerTableHtml += "</table>";
                    innerTableHtml += "</div>";

                innerTableHtml += "<div style='border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;'>";
                innerTableHtml += "<table width='100%'>";
              //////  innerTableHtml += "<tr>";
               ////// innerTableHtml += "<td width='50%'>Status:</td>";
               ////// innerTableHtml += "<td width='50%'>"+data[i].Status+"</td>";
               ////// innerTableHtml += "</tr>";
               innerTableHtml += "<tr>";
                innerTableHtml += "<td width='50%'>Date & Time:</td>";
                innerTableHtml += "<td width='50%'>"+data[i].DateTime+"</td>";
                innerTableHtml += "</tr>";
                innerTableHtml += "</table>";
                innerTableHtml += "</div>";
                innerTableHtml += "<div>";
               ////// innerTableHtml += "<table width='100%'>";
               ////// innerTableHtml += "<tr>";
                ////  if(data[i].isRunning !="Active") {
                ////     innerTableHtml += "<td width='35%'><div id='clickstart_" + data[i].id + "' class='btn btn-success' href='javascript:void(0)' onclick='test("+data[i].id+")'>";
                ////    innerTableHtml += "<i id='divActivity_" + data[i].id + "' class='fa fa-play'>Start</i></div></td>";
                ////  }
                ////  else{
                ////    innerTableHtml += "<td width='35%'><div id='clickstart_" + data[i].id + "' class='btn btn-danger' href='javascript:void(0)' onclick='test(" + data[i].id + ")'>";
                ////    innerTableHtml += "<i id='divActivity_" + data[i].id + "' class='fa fa-stop'>Stop</i></div></td>";
                ////  }
                // innerTableHtml +="<td width='35%'><div class='btn btn-primary'><i class='fa fa-gear'></i><a href='../activity.php'> Settings</a></div></td>";
               ////// innerTableHtml +="<td width='35%'><div><a class='btn btn-primary' href='../activity.php?id="+data[i].id+"'><i class='fa fa-gear'></i>Settings</a></div></td>";
               ////// innerTableHtml += "<td width='30%'><div class='btn-group pull-right'>";
               ////// innerTableHtml +="<a class='btn btn-warning btn-sm dropdown-toggle' href='accountdetails.php?id="+data[i].id+"'><i class='fa fa-bars'></i> Account Details</a>";
                ////  innerTableHtml +="<button class='btn btn-warning btn-sm dropdown-toggle' data-toggle='dropdown'><i class='fa fa-bars'></i>  More</button>";
                ////  innerTableHtml += "<ul class='dropdown-menu pull-right' role='menu'>";
                ////  innerTableHtml += "<li><a href='#'>Profile</a></li>";
                //// innerTableHtml += "<li><a href='#'>Likes</a></li>";
                ////  innerTableHtml +="<li class='divider'></li>";
                ///// innerTableHtml +="<li><a href='#'>Transfer Time</a></li>";
                //// innerTableHtml +="<li class='divide'></li>";
                //// innerTableHtml +="<li><a href='#'>Reconnect</a></li>";
                //// innerTableHtml += "<li><a href='#'>Logout</a></li>";
                // innerTableHtml += "</ul>";
                // innerTableHtml +="</div></td>";
               ////// innerTableHtml +="</tr>";
               ////// innerTableHtml +="</table>";
                innerTableHtml +="</div>";
                innerTableHtml +='</div>';
                innerTableHtml +='</div>';



            }

            $('#selectedInsACc-list').append(innerTableHtml);

        }





        // }

    });
    return false;
});

/////////////////////////////////////////fetch last image from tblLogin////////////////////
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
        "action": "TblInstagramImageUrl"
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
        url: "../actionpage/instagramaccountactive.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);

            $('#ImgUrl').attr('src',data[0].ImageUrl);

        }
    });
    return false;
});
////////////////////////////////////////////fetch last image from tblLogin//////////////////


