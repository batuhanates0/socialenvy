<?php
session_start();
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:49 PM
 */
include "DatabaseConnection.php";
class clsInstagram {

    public $responseMsg='';

    public function AddInstagramAccount($instagramUser,$InstagramPassword)
    {
        $dbCon = new DatabaseConnection();

        $check_username =$dbCon->con->prepare("SELECT IGuname FROM tblInstagram WHERE IGuname = :IGuname");
        $check_username->bindparam(':IGuname',$instagramUser);
        $check_username->execute();
        $result_username = $check_username->rowCount();
        if ($result_username ==0){

            $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE email = :email");
            $check_userid->bindparam(':email',$_SESSION['login_user']);
            $check_userid->execute();
            $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

            $uid=$result_userid['id'];

            $IGAccstatus='Active';
            $date = date('Y-m-d');



            $strQuery = "insert into tblInstagram (`uid`,`IGuname`,`IGpassword`,`IGAccstatus`,`date`)
                              VALUES (:uid,:IGuname,:IGpassword,:IGAccstatus,:date)";


                $result =$dbCon-> con->prepare($strQuery);

                $result->bindParam(':uid', $uid);
                $result->bindParam(':IGuname', $instagramUser);
                $result->bindParam(':IGpassword', $InstagramPassword);
                $result->bindParam(':IGAccstatus', $IGAccstatus);
                $result->bindParam(':date', $date);


                $result->execute();

                //$responseMessage = "Error Code : " .$result->errorCode() . '<br><br>';
                //echo json_encode($responseMessage);
                $rows = $result->rowCount();

                if ($rows == 1) {
                    // $_SESSION['login_user'] = $email; // Initializing Session
                    $responseMsg = "Success";
                } else {
                    $responseMsg = "Not register";
                }


                //register user
            }
        else{
            $responseMsg = "Username already exist";
        }

        echo json_encode($responseMsg);


    }
    public function InstagramAccount(){
        $dbCon = new DatabaseConnection();
         $username=$_SESSION['login_user'];
        $result = $dbCon->con->prepare("SELECT * FROM tblInstagram where unique_username =:username");
        $result->bindparam(':username',$username);
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }
    public function changeaccountstatus($id,$isRunning){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRunning  where `id`=:id");

        $result->bindParam(':id', $id);
        $result->bindParam(':isRunning', $isRunning);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);
        $result_fetch =$dbCon->con->prepare("select * from tblInstagram  where `id`=:id");
        $result_fetch->bindParam(':id', $id);
        $result_fetch->execute();
        $data=$result_fetch->fetchall();

       // if ($rows == 1) {
        //    $responseMsg = "Success";

            //return true;
      //  } else {
        //   $responseMsg = "Failed";
           // return false;
      //  }
      //  echo json_encode($responseMsg);
        echo json_encode($data);
    }
    public function changeallaccountstatus($isRunning){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRunning");


        $result->bindParam(':isRunning', $isRunning);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

        $result_row = $dbCon->con->prepare("SELECT * FROM tblInstagram");
        $result_row->execute();

        $data = $result_row->fetchall();
        $no_rows=count($data);

        if ($rows > 0) {
            $responseMsg = "Success";
            $_SESSION['rowcount']=$no_rows;
            //return true;
        } else {
            $responseMsg = "Failed";
            // return false;
        }
        echo json_encode($responseMsg);
    }
    public function stopallaccountstatus($isRunning){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRunning");


        $result->bindParam(':isRunning', $isRunning);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

        $result_row = $dbCon->con->prepare("SELECT * FROM tblInstagram");
        $result_row->execute();

        $data = $result_row->fetchall();
        $no_rows=count($data);

        if ($rows > 0) {
            $responseMsg = "Success";
            $_SESSION['rowcount_stop']=$no_rows;
            //return true;
        } else {
            $responseMsg = "Failed";
            // return false;
        }
        echo json_encode($responseMsg);
    }
    public function getid($id){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblInstagram where id=:id");

        $result->bindParam(':id', $id);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
       echo json_encode($data);

    }
    public function changeaccountstatus_stop($id,$isRunning){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRunning  where `id`=:id");

        $result->bindParam(':id', $id);
        $result->bindParam(':isRunning', $isRunning);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);
        $result_fetch =$dbCon->con->prepare("select * from tblInstagram  where `id`=:id");
        $result_fetch->bindParam(':id', $id);
        $result_fetch->execute();
        $data=$result_fetch->fetchall();

        // if ($rows == 1) {
        //    $responseMsg = "Success";

        //return true;
        //  } else {
        //   $responseMsg = "Failed";
        // return false;
        //  }
        //  echo json_encode($responseMsg);
        echo json_encode($data);
    }

}