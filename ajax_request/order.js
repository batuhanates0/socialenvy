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


            for (var i = 0; i < data.length; i++) {

                innerTableHtml +="<span class='unit-username unit-username-select'>";
                innerTableHtml +="<span>";
                innerTableHtml +=data[i].IGuname;
                innerTableHtml +="<span class='color-gray-light'>";
                innerTableHtml +="(2 days 00:08)";
                innerTableHtml +="</span>";
                innerTableHtml += "</span>";
                innerTableHtml +="<img src='"+data[i].ImageUrl+"' class='unit-username-avatar' height='40px' width='40px'/>";
                innerTableHtml +="<span class='unit-username-chk'>";
                innerTableHtml +="<input id='username-1757782255' class='chk-custom' type='checkbox' data-checked='false' data-notime='false' name='user_ids[]' value='5502acce1252626266001c5d'/>";
                innerTableHtml +="<label for='username-1757782255' class='chk-custom'></label>";
                innerTableHtml +="</span>";
                innerTableHtml +="</span>";
            }

            $('#order-list').append(innerTableHtml);

        }





        // }

    });
    return false;
});
