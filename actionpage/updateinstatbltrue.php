<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatustrue") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->ChangeMainSettingLikeStatusTrue($_POST['Id'],$_POST['Status']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}