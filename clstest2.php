<?php
/**
 * Created by PhpStorm.
 * User: RESILIENCE
 * Date: 3/20/2015
 * Time: 4:16 PM
 */
include("classes/clsInstagram.php");

$instagramAcc = new clsInstagram();
//$instagramuser->AddInstagramAccount($_POST['IGuname'],$_POST['IGpassword']);
$instagramAcc->AddInstagramAccount("mynew","mynew");