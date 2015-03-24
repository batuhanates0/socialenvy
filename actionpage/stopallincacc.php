<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "stopstatusforall") {
    $instagramAcc = new clsInstagram();
    $active="Stopped";
    $instagramAcc->stopallaccountstatus($active);
    // echo json_encode($_POST['Id']);
    // echo $count;
}