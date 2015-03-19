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

    public function Login($Username, $Password)
    {
        return "Hello";
    }

    public function GetUsers()
    {
        $dbCon = new DatabaseConnection();
        $dbCon->Connect();

        $getLogins = $dbCon->con->prepare("SELECT * FROM tblLogin");
        $getLogins->execute();
        $userCount = $getLogins->rowCount();
        echo $userCount;
    }
}