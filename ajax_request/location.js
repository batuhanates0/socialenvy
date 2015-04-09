$("document").ready(function(){

    var counter = 0;
    setInterval(function () {
        ++counter;
        var wcount = counter+"%";

        $('#bar').css('width', wcount);
        $('.bar').css('width', wcount);
    }, 1000);

    var data = {
        "action": "getLocations"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../actionpage/locationDetails.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {

            data = eval(data);
            var innerTableHtml ="";

            for (var i=0;i<data.length;i++) {

                innerTableHtml += "<tr>";
                innerTableHtml += "<td class='center'>"+data[i].login_user+"</td>";
                innerTableHtml += "<td>"+data[i].Locationname+"</td>";
               // innerTableHtml += "<td>"+data[i].NewsLink+"</td>";
               // innerTableHtml += "<td class='center'>"+data[i].Date+"</td>";
                innerTableHtml += "<td class='center'>";
                innerTableHtml += "<a class='btn btn-success' href='#'>";
                innerTableHtml += "<i class='icon-zoom-in icon-white'></i>";
                innerTableHtml += "View";
                innerTableHtml += "</a>";
                innerTableHtml += "<a class='btn btn-danger' href='#'>";
                innerTableHtml += "<i class='icon-trash icon-white'></i>";
                innerTableHtml += "Delete";
                innerTableHtml += "</a>";
                innerTableHtml += "</td>";
                innerTableHtml += "</tr>";

            }

            $('.tblBody').append(innerTableHtml);

        },
        error: function(xhr, desc, err) {
            alert(xhr);
            alert("Details: " + desc + "\nError:" + err);
        }
    });
    return false;
});
