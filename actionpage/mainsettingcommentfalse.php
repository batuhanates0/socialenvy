<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatusfalse") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->ChangeMainSettingCommentStatusfalse($_POST['Id']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}