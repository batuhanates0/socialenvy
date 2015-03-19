<?php

session_start();


$dbHost = "localhost";
$dbName = "socialen_instamgt";
$dbUser = "socialen";
$dbPassword = "y2QnRqtW";



$con = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);