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

    public function Login($username, $password)
    {
        $dbCon = new DatabaseConnection();
        $chk_username = $dbCon->con->prepare("SELECT * FROM tblLogin where username=:username");

        $chk_username->bindParam(':username', $username);


        $chk_username->execute();

        $no_user = $chk_username->fetch(PDO::FETCH_OBJ);
       // $data=$chk_username=fetch(PDO::FETCH_OBJ);
        $date=$no_user->date;

        if ($no_user == ""){
            $responseMessage= "You are not registered with us";
        }
      else {
          $result = $dbCon->con->prepare("SELECT * FROM tblLogin where username=:username and password=:password");

          $result->bindParam(':username', $username);
          $result->bindParam(':password', $password);

          $result->execute();

          $userCount = $result->rowCount();

          if ($userCount == 1) {
              $responseMessage = "success";
              $_SESSION['login_user']=$username;
              $_SESSION['date']=$date;

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

    public function Register($email, $password, $status,$password_confirm,$username)
    {

        $dbCon = new DatabaseConnection();

        $result_username = $dbCon->con->prepare("SELECT * FROM tblLogin where username=:username");
        $result_username->bindParam(':username', $username);

        $result_username->execute();
        $userCount_username = $result_username->rowCount();

        if ($userCount_username == 0) {

            $result_email = $dbCon->con->prepare("SELECT * FROM tblLogin where email=:email");
            $result_email->bindParam(':email', $email);

            $result_email->execute();
            $userCount = $result_email->rowCount();

            if ($userCount == 0) {
                if ($password != $password_confirm) {

                    $responseMessage = "Password & confirm Password must be same";
                } else {
                    $date = date('Y-m-d');

                    $strQuery = "insert into tblLogin (`email`,`password`,`status`,`date`,`username`)
                              VALUES (:email,:password,:status,:date,:username)";

                    $register_result = $dbCon->con->prepare($strQuery);

                    $register_result->bindParam(':email', $email);
                    $register_result->bindParam(':password', $password);
                    $register_result->bindParam(':status', $status);
                    $register_result->bindParam(':date', $date);
                    $register_result->bindParam(':username', ucfirst($username));

                    $register_result->execute();
                    $rows = $register_result->rowCount();

                    if ($rows == 1) {
                        $_SESSION['login_user'] = $username; // Initializing Session
                        $responseMessage = "success";
                    } else {
                        $responseMessage = "failed";
                    }
                }
            } else {
                $responseMessage = "Email already Exists";
            }
        }else{
            $responseMessage="Username already Exists";
        }
      echo json_encode($responseMessage);
    }

    public function PasswordMail($user)
    {
        $dbCon = new DatabaseConnection();

        $result = $dbCon->con->prepare("select * from tblLogin where username=:user or email=:user");
        $result->bindParam(':user', $user);
        $result->execute();

        $data = $result->fetch(PDO::FETCH_OBJ);
        if ($data !=null) {
            $pass = $data->password;
            $email = $data->email;
            // if ($result !=null) {

            //  foreach ($result as $row) {


            $to = $email;
            $subject = 'Password recovery';
            $message = 'hello' . PHP_EOL . 'Your Password is ->' . $pass;
            $headers = 'From: support@socialenvy.co.nz' . "\r\n" .
                'Reply-To: support@socialenvy.co.nz' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
            //  }

            // echo $to;
            // echo "Thank you for contacting us!";
            $responseMessage = "Thank you for contacting us!";
        }


        else{
            $responseMessage="Sorry....This Email or username isnot registered with us.";
        }
       echo json_encode($responseMessage);

    }
}
