<?php
session_start();
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:03 PM
 */
include "DatabaseConnection.php";

class clsAdmin
{

    public $responseMessage = '';

    public function GetAllUsers()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblLogin");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }

    public function GetAllInstaAcc()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblInstagram");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }

    public function AdminLogin($username, $password)
    {
        $dbCon = new DatabaseConnection();

            $result = $dbCon->con->prepare("SELECT * FROM tblLogin where username=:username and password=:password");

            $result->bindParam(':username', $username);
            $result->bindParam(':password', $password);

            $result->execute();

            $userCount = $result->rowCount();

            if ($userCount == 1) {
                $responseMessage = "Success";


            } else {
                $responseMessage = "Username or Password is invalid";
            }
            // return $userCount;

            echo json_encode($responseMessage);
        }

    public function Location()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblLocation");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }

    public function GetUsername()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblUsername");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }

    public function MainSettings()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblMainSetting");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }
    public function AutoSettings()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblAutoStopSetting");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }
    public function UserComments()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblComment");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }

    public function UserTags()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblUsertag");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }

    public function UserProcessDetails()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblProcessDetails");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }
}