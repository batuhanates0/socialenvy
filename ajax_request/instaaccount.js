$("document").ready(function(){

    var counter = 0;
    setInterval(function () {
        ++counter;
        var wcount = counter+"%";

        $('#bar').css('width', wcount);
        $('.bar').css('width', wcount);
    }, 1000);

    var data = {
        "action": "getAllinstaAcc"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../actionpage/Instaaccdetails.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {

            data = eval(data);

            var innerTableHtml ="";

            for (var i=0;i<data.length;i++) {


                innerTableHtml += "<tr>";
                innerTableHtml += "<td>"+data[i].unique_username+"</td>";
                innerTableHtml += "<td>"+data[i].IGuname+"</td>";
                //innerTableHtml += "<td class='center'>"+data[i].status+"</td>";
                //innerTableHtml += "<td class='center'>"+data[i].Last_name+"</td>";
                innerTableHtml += "<td class='center'>"+data[i].date+"</td>";
                innerTableHtml += "<td class='center'>";
                if(data[i].IGAccstatus=="Active") {
                    innerTableHtml += "<span class='label label-success'>"+data[i].IGAccstatus+"</span>";
                }else
                {
                    innerTableHtml += "<span class='label label-important'>"+data[i].IGAccstatus+"</span>";
                }
                innerTableHtml += "</td>";
                innerTableHtml += "<td class='center'>";
                innerTableHtml += "<a class='btn btn-success' href=''>";
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
            //alert(innerTableHtml);
            $('.tblBody').append(innerTableHtml);

        },
        error: function(xhr, desc, err) {
            alert(xhr);
            alert("Details: " + desc + "\nError:" + err);
        }
    });
    return false;
});

