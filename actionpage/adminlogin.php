<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "adminLogin") {
    $admin = new clsAdmin();

    $admin->AdminLogin($_POST['username'], $_POST['password']);
}