<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getMainSettings") {
    $admin = new clsAdmin();

    $admin->MainSettings();
}