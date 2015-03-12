<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 12/02/2014
 * Time: 2:29 PM
 */
session_start();


$dbHost = "localhost";
$dbName = "socialen_instamgt";
$dbUser = "socialen";
$dbPassword = "y2QnRqtW";



$con = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);