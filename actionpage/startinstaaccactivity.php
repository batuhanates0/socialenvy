<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatus") {
    $instagramAcc = new clsInstagram();
    $active="Active";
    $instagramAcc->changeaccountstatusinsertdetails($_POST['Id'],$active,$_POST['Activityspeed'],$_POST['Mediasource'],$_POST['Minlikesfilter'],$_POST['Maxlikesfilter'],$_POST['Likescounter'],$_POST['Commentscounter'],$_POST['Followscounter'],$_POST['Unfollowscounter'], $_POST['Timer']);
   // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}