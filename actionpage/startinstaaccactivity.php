<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatus") {
    $instagramAcc = new clsInstagram();
    /*if(!empty($_POST['Newmediaonly'])){
     $Newmediaonly="True";
    } else {
        $Newmediaonly="False";
    }
    if(!empty($_POST['Dontcommentsameusers'])){
        $Dontcommentsameusers="True";
    } else {
        $Dontcommentsameusers="False";
    }*/
    $active="True";
    $instagramAcc->changeaccountstatusinsertdetails($_POST['Id'],$active,$_POST['Activityspeed'],$_POST['Mediasource'],$_POST['Minlikesfilter'],$_POST['Maxlikesfilter'],$_POST['Newmediaonly'],$_POST['Dontcommentsameusers'],$_POST['Likescounter'],$_POST['Commentscounter'],$_POST['Followscounter'],$_POST['Unfollowscounter'], $_POST['Timer']);
   // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}

if($_POST['action'] == "changesettings") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->ChangeDefaultSettings($_POST['Id']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}