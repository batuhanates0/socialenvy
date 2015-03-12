<?php
session_start();


/*$dbHost = "webcloud72.au.syrahost.com";
$port="3306";*/

$dbHost = "localhost";
$dbName = "socialen_instamgt";
$dbUser = "socialen";
$dbPassword = "y2QnRqtW";

/*$dbHost = "mysql1005.ixwebhosting.com:3306";
$dbName = "C325018_socialen_instamgt";
$dbUser = "C325018_socialen";
$dbPassword = "y2QnRqtW";*/




if (!defined('PDO::ATTR_DRIVER_NAME')) {
    echo 'PDO unavailable';
}
else echo('pdo is available');

//$con = new PDO("mysql:host=$dbHost;port=$port;dbname=$dbName",$dbUser,$dbPassword);
try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);

    $email="nirdeshjain29@gmail.com";
    $check1=$conn->prepare("SELECT id FROM tblLogin WHERE email = :email");
    $check1->bindparam(':email', $email);
    $check1->execute();
    $result = $check1->fetch(PDO::FETCH_ASSOC);
    $id=$result['id'];
    echo $id;
   // print_r($result);


    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();

}



