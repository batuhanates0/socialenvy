$("document").ready(function(){
    var data = {
        "action": "BuyPackage"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../actionpage/paymentDetails.php", //Relative or absolute path to response.php file
        data: data,
        success: function(data, status) {
            data = eval(data);
            var innerTableHtml = "";

            var OuterCounter =0;
            var InnerCounter =0;

            innerTableHtml +="<div class='row' style='border-bottom:1px solid #ccc;'>";

              for (var i = 0; i < data.length; i++) {

                  //if(InnerCounter==0) {
                  //    innerTableHtml += "<div class='col-lg-6 col-md-6 col-sm-6'>";
                  //}
                    innerTableHtml +="<div class='col-lg-4 col-md-4 col-sm-4 inner-buy-box'>";
                    innerTableHtml +="<div class='number'><strong>"+data[i].Plan_day+"Day</strong></div>";
                    innerTableHtml +="<div class='number' style='color:#000;'><strong>"+data[i].Plan_price+" Price</strong></div>";
                    innerTableHtml +="<p class='no-margin'>"+data[i].Plan_saving+" Saving</p>";
                    innerTableHtml +="<p class='no-margin'>"+data[i].Plan_perday+" per day</p>";
                    innerTableHtml +="<a href='../user/order.php'><div class='btn-lg btn-success' style='text-align:center; margin-bottom:5px; margin-top:5px;'><i class='fa fa-shopping-cart'></i> Buy</div></a>";
                    innerTableHtml +="</div>";

                  //if(InnerCounter==0) {
                  //    innerTableHtml += "</div>";
                  //}
                  //
                  //InnerCounter++;
                  //
                  //if(InnerCounter==3)
                  //{
                  //    InnerCounter=0;
                  //}


            }


            innerTableHtml +="</div>";
            $('#plan-list').append(innerTableHtml);

        }

    });
    return false;
});



 /////////////////////////////////////fetch from instagram table/////////////////////$("document").ready(function(){
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
                "action": "UserImage"
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
                url: "../actionpage/paymentDetails.php", //Relative or absolute path to response.php file
                data: data,
                success: function(data, status) {
                    data = eval(data);
                   $('#img_url').attr('src',data[0].ImageUrl);

                }

            });
            return false;

        });








