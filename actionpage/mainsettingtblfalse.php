<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "ChangeStatusTrueFalse") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->ChangeMainSettingLikeStatusTrueFalse($_POST['Id'],$_POST['LikeStatus'],$_POST['CommentStatus'],$_POST['FollowStatus'],$_POST['UnFollowStatus']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}