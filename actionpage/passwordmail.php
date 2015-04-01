<?php
include("../classes/clsUser.php");

if($_POST['action'] == "passwordmail") {
    $user = new clsUser();

    $user->PasswordMail($_POST['username']);
}