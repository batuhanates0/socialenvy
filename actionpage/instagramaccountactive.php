<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "accountid") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getid($_POST['Id']);
     //echo json_encode($_POST['Id']);
    // echo $count;
}


if($_POST['action'] == "SelectedAccountId") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->GetSelectedInstaAccount($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}

if($_POST['action'] == "TblInstagramImageUrl") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->GetSelectedInstaAccountImageUrl($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}