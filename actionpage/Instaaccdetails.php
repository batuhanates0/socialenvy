<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getAllinstaAcc") {
    $admin = new clsAdmin();

    $admin->GetAllInstaAcc();
}