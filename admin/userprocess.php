<?php include('header.php'); ?>



    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../ajax_request/userprocess.js"></script>

    <script type="text/javascript">

    </script>


    <div>
        <ul class="breadcrumb">
            <li>
                <a href="home.php">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="registeredusers.php">Users</a>
            </li>
        </ul>
    </div>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-user"></i>Performed Actions Of Users</h2>
                <div class="box-icon">
                    <!--        <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                    <!--        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>-->
                    <!--        <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>-->
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>UserID</th>
                        <th>ProcessType</th>
                        <th>Date of Action</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="tblBody">

                    </tbody>
                </table>
                <div id="divStatusBar" class="progress progress-danger progress-striped" style="margin-bottom: 9px;">
                    <!--        <div class="bar" style="width: 90%"></div>-->
                    <div class="bar"></div>
                </div>
            </div>
        </div><!--/span-->

    </div><!--/row-->

<?php include('footer.php'); ?>