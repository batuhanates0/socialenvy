<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatus_stop") {
    $instagramAcc = new clsInstagram();
    $active="Stopped";
    $instagramAcc->changeaccountstatus_stop($_POST['Id'],$active);
    // echo json_encode($_POST['Id']);
    // echo $count;
}