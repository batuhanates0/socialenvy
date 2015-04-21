<?php
include("../classes/clsInstagram.php");



if($_POST['action'] == "getLocations") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getLocation($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "addNewLocation") {
    //  $company_state = implode(",", $_POST['Tag']);
    $instagramAcc = new clsInstagram();


    $instagramAcc->AddLocation($_POST['Id'],$_POST['LocationName']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "DeleteSelectedLocation") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->DeleteLocation($_POST['Id']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}