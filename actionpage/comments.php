<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getComments") {
    $admin = new clsAdmin();

    $admin->UserComments();
}