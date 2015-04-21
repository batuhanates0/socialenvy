<?php
include("../classes/clsInstagram.php");



if($_POST['action'] == "getUsernames") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getUsername($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "addUsername") {
    //  $company_state = implode(",", $_POST['Tag']);
    $instagramAcc = new clsInstagram();


    $instagramAcc->AddUsername($_POST['Id'],$_POST['Username']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "DeleteSelectedUsername") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->DeleteUsername($_POST['Id']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}