<?php
include("../classes/clsUser.php");

if($_POST['action'] == "Login") {
    $user = new clsUser();

    $user->Login($_POST['username'], $_POST['password']);
}