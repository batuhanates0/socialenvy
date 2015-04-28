<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "InstagramAccount") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->InstagramAccount();
   // echo $count;
}

if($_POST['action'] == "TblLoginImageUrl") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->TblLoginImageurl();
    // echo $count;
}