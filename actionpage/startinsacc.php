<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "changestatus") {
    $instagramAcc = new clsInstagram();
    $active="Active";
    $instagramAcc->changeaccountstatus($_POST['Id'],$active);
   // echo json_encode($_POST['Id']);
    // echo $count;
}