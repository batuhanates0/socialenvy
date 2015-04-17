<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "DeleteSelectedTag") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->DeleteTag($_POST['Id']);
    // echo json_encode($_POST['Activityspeed']);
    // echo $count;
}