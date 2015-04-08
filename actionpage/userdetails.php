<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getUser") {
    $admin = new clsAdmin();

    $admin->GetAllUsers();
}