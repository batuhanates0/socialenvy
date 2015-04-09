<?php
include("../classes/clsAdmin.php");

if($_POST['action'] == "getUserTags") {
    $admin = new clsAdmin();

    $admin->UserTags();
}