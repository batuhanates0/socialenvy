<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "getMainSettingtblData") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getMainSettingTblData($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}