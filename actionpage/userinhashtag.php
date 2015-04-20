<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "addUserTag") {
  //  $company_state = implode(",", $_POST['Tag']);
    $instagramAcc = new clsInstagram();


    $instagramAcc->AdduserTag($_POST['Id'],$_POST['Tag'],$_POST['count']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}