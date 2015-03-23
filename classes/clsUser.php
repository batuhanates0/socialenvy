<?php
session_start();
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:03 PM
 */
include "DatabaseConnection.php";

class clsUser
{
    public $responseMessage='';

    public function Login($email, $password)
    {
        $dbCon = new DatabaseConnection();
        $chk_email = $dbCon->con->prepare("SELECT * FROM tblLogin where email=:email");

        $chk_email->bindParam(':email', $email);


        $chk_email->execute();

        $no_email = $chk_email->rowCount();
        if ($no_email == 0){
            $responseMessage= "Email_Id isnot valid";
        }
      else {
          $result = $dbCon->con->prepare("SELECT * FROM tblLogin where email=:email and password=:password");

          $result->bindParam(':email', $email);
          $result->bindParam(':password', $password);

          $result->execute();

          $userCount = $result->rowCount();

          if ($userCount == 1) {
              $responseMessage = "success";
              $_SESSION['login_user']=$email;

              // $_SESSION['msg']="success";
              // echo  $_SESSION['msg'];

          } else {
              $responseMessage = "Password is wrong";
          }
          // return $userCount;
      }
        echo json_encode($responseMessage);
    }

    public function GetUsers()
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblLogin");
        $result->execute();

        $userCount = $result->rowCount();
        return $userCount;
    }

    public function GetUser($email)
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("SELECT * FROM tblLogin where email=:email");
        $result->bindParam(':email', $email);
        $result->execute();

        $userCount = $result->rowCount();
        return $userCount;
    }

    public function Register($email, $password, $status)
    {

        $dbCon = new DatabaseConnection();
        $result = $dbCon->con->prepare("SELECT * FROM tblLogin where email=:email");
        $result->bindParam(':email', $email);

        $result->execute();
        $userCount = $result->rowCount();

        if ($userCount == 0) {

            $date = date('Y-m-d');

            $strQuery = "insert into tblLogin (`email`,`password`,`status`,`date`)
                              VALUES (:email,:password,:status,:date)";

            $register_result = $dbCon->con->prepare($strQuery);

            $register_result->bindParam(':email', $email);
            $register_result->bindParam(':password', $password);
            $register_result->bindParam(':status', $status);
            $register_result->bindParam(':date', $date);

            $register_result->execute();
            $rows = $register_result->rowCount();

            if ($rows == 1) {
                $_SESSION['login_user'] = $email; // Initializing Session
                $responseMessage= "success";
            } else {
                $responseMessage = "failed";
            }
        } else {
            $responseMessage= "Email already Exists";
        }
      echo json_encode($responseMessage);
    }
}