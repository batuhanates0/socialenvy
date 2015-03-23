<?php

include("../classes/InstagramLogin.php");
if($_POST['action'] == "InsLogin") {
    $insta = new InstagramLogin();
    $insta->Login($_POST['IGuname'],$_POST['IGpassword']);
   // echo $response;
}
/**
 * Created by PhpStorm.
 * User: RESILIENCE
 * Date: 3/23/2015
 * Time: 6:14 PM
 */ 