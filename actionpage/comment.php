<?php
include("../classes/clsInstagram.php");



if($_POST['action'] == "getComments") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getComment($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "addComment") {
    //  $company_state = implode(",", $_POST['Tag']);
    $instagramAcc = new clsInstagram();


    $instagramAcc->AddComment($_POST['Id'],$_POST['Comment']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "DeleteSelectedComment") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->DeleteComment($_POST['Id']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}