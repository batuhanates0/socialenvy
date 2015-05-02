<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "BuyPackage") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getBuyPackage();
    //echo json_encode($_POST['Id']);
    // echo $count;
}


if($_POST['action'] == "UserImage") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->GetSelectedInstaAccountImage($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}
