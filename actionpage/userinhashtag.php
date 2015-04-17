<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "addUserTag") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->AdduserTag($_POST['Id'],$_POST['Tag']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}