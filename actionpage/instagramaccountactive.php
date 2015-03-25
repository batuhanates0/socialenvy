<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "accountid") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->getid($_POST['Id']);
     //echo json_encode($_POST['Id']);
    // echo $count;
}