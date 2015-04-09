<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getAutoSettings") {
    $admin = new clsAdmin();

    $admin->AutoSettings();
}