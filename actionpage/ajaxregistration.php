<?php
include("../classes/clsUser.php");

if($_POST['action'] == "register") {
    $user = new clsUser();

    $user->Register($_POST['email'],$_POST['password'],'Active',$_POST['password2'],$_POST['username']);
}