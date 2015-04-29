<?php
include("../classes/clsUser.php");

if($_POST['action'] == "passwordmail") {
    $user = new clsUser();

    $user->PasswordMail($_POST['username']);
}



if($_POST['action'] == "ResetPassword") {
    $user = new clsUser();

    $user->ResetPassword($_POST['oldpassword'],$_POST['password'],$_POST['password2']);
}