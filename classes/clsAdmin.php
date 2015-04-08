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
                //   $_SESSION['login_user']=$username;
                //   $_SESSION['date']=$date;

                // $_SESSION['msg']="success";
                // echo  $_SESSION['msg'];

            } else {
                $responseMessage = "Username or Password is invalid";
            }
            // return $userCount;

            echo json_encode($responseMessage);
        }


}