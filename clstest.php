<?php

include("classes/clsUser.php");

$user = new clsUser();

//$response = $user->Login('pankaj','mishra');
//echo $response;

$count = $user->GetUsers();
echo $count;
