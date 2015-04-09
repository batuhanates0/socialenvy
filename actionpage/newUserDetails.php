<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getNewUsers") {
    $admin = new clsAdmin();

    $admin->GetUsername();
}