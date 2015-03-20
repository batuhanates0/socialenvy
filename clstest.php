<?php

include("classes/clsUser.php");
//include("classes/clsInstagram.php");


$user = new clsUser();

//$user->Login($_POST['email'],$_POST['password']);
////echo $response;

$count = $user->GetUsers();
echo $count.PHP_EOL;

$mail=$user->GetUser($_POST['email']);
echo $mail.PHP_EOL;

//$user->Register($_POST['email'],$_POST['password'],'Active');
//echo $register;

//$instagramAcc = new clsInstagram();
//$instagramuser->AddInstagramAccount($_POST['IGuname'],$_POST['IGpassword']);
//$instagramAcc->AddInstagramAccount("mynew","mynew");

