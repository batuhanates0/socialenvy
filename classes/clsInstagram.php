<?php
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

        $result = $dbCon->con->prepare("SELECT * FROM tblInstagram");
        $result->execute();

        $data = $result->fetchall();
        echo json_encode($data);
    }
}