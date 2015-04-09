<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getProcessDetails") {
    $admin = new clsAdmin();

    $admin->UserProcessDetails();
}