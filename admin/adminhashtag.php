<?php include('header.php'); ?>

<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="../js/bootstrap.min.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">-->



<script type="text/javascript">
    $("document").ready(function(e){
        $("#loginMsg").hide();

        $("#create_myalbum").submit(function(){

            $("#loginMsg").hide();

            var data = {
                "action": "create_myalbum"
            };

            data = $(this).serialize() + "&" + $.param(data);

            //e.preventDefault();

            $.ajax({
                type: "POST",
                dataType: "json",
                url: "../classes/albumDetails.php", //Relative or absolute path to response.php file
                data: data,
                success: function(data, status) {
                    if(data=="Success")
                    {
                        $("#loginMsg").show();
                        $("#loginMsg").html("Album Created Successfully.");
                        //alert("Album Successfully Created.");
                    }else
                    {
                        // alert(data);
                        $("#loginMsg").show();
                        $("#loginMsg").html(data);

                    }
                },
                error: function(xhr, desc, err) {

                    //alert(xhr);
                    //alert("Details: " + desc + "\nError:" + err);

                    $("loginMsg").show();
                    $("loginMsg").html(err);

                }
            });
            return false;
        });
    });
</script>


<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Users</a>
        </li>
    </ul>
</div>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Create Your Album</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">

            <form id="create_myalbum" class="form-horizontal" action="adminalbum.php"
                  method="post" enctype="multipart/form-data">


                <fieldset>
                    <div id="loginMsg" class="alert alert-danger"></div>


                    <div class="control-group">
                        <label class="control-label">HashTag Name</label>
                        <div class="controls">
                            <input type="text" id="albumName" name="albumName" required="required">

                        </div>
                    </div>



                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary">Create Album</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->

<?php include('footer.php'); ?>
