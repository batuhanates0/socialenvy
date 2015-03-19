<?php
/**
* Created by PhpStorm.
 * User: DIGICOM
* Date: 03/19/2015
* Time: 5:05 PM
*/

include("classes/clsUser.php");

$user = new clsUser();

//$response = $user->Login('pankaj','mishra');
//echo $response;

$user->GetUsers();