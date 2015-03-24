<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatusforall") {
    $instagramAcc = new clsInstagram();
    $active="Active";
    $instagramAcc->changeallaccountstatus($active);
    // echo json_encode($_POST['Id']);
    // echo $count;
}