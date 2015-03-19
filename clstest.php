<?php
/**
* Created by PhpStorm.
 * User: DIGICOM
* Date: 03/19/2015
* Time: 5:05 PM
*/

//$dbHost = "localhost";
//$dbName = "socialen_instamgt";
//$dbUser = "socialen";
//$dbPassword = "y2QnRqtW";
//
//$con = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);
//
//$check_email=$con->prepare("SELECT * FROM tblLogin");
//
//$check_email->execute();
//$no_email=$check_email->rowCount();
//echo $no_email;

include("classes/clsUser.php");




$user = new clsUser();

//$response = $user->Login('pankaj','mishra');
//echo $response;

echo 'Current PHP version: ' . phpversion();
echo "start user";
$count = $user->GetUsers();
echo $count;
echo "end user";