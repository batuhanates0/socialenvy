<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "getAutoStopSettingtblData") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getAutoStopSettingTblData($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}