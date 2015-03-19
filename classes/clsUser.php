<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:03 PM
 */
include "DatabaseConnection.php";

class clsUser
{

//    private $dbHost = "localhost";
//    private $dbName = "socialen_instamgt";
//    private $dbUser = "socialen";
//    private $dbPassword = "y2QnRqtW";

    public function Login($Username, $Password)
    {
        return "Hello";
    }

    public function GetUsers()
    {
        echo "Start Connecting";
        //$this->$con = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPassword);

       $dbCon = new DatabaseConnection();
//        $dbCon->Connect();

        echo "connected";
        $dbCon->con->
        $result = $dbCon->$dbCon->prepare("SELECT * FROM tblLogin");
        $result->execute();

        $userCount = $getLogins->rowCount();
        echo "count row";
        return $userCount;
    }
}