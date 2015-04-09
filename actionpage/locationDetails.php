<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getLocations") {
    $admin = new clsAdmin();

    $admin->Location();
}