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
       // $isRun='Stopped';

        $result =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRunning  where `id`=:id");

        $result->bindParam(':id', $id);
        $result->bindParam(':isRunning', $isRunning);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

        //$result_stop =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRun  where `id`!=:id");

       // $result_stop->bindParam(':id', $id);
       // $result_stop->bindParam(':isRun', $isRun);

        //$result_stop->execute();

       // $rows_stop = $result_stop->rowCount();//  fetch(PDO::FETCH_NUM);


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

    public function changeaccountstatusinsertdetails($id,$isRunning,$Activityspeed,$Mediasource,$Minlikesfilter,$Maxlikesfilter,$Likescounter,$Commentscounter,$Followscounter,$Unfollowscounter,$Timer){

        $dbCon = new DatabaseConnection();
       // $isRun='Stopped';
        $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE username = :user");
        $check_userid->bindparam(':user',$_SESSION['login_user']);
        $check_userid->execute();
        $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

        $uid=$result_userid['id'];


        $login_user = $_SESSION['login_user'];

        $result =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRunning  where `id`=:id");

        $result->bindParam(':id', $id);
        $result->bindParam(':isRunning', $isRunning);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

       // $result_stop =$dbCon->con->prepare("UPDATE `tblInstagram` Set `isRunning`= :isRun  where `id`!=:id");

       // $result_stop->bindParam(':id', $id);
       // $result_stop->bindParam(':isRun', $isRun);

       // $result_stop->execute();

       // $rows_stop = $result_stop->rowCount();//  fetch(PDO::FETCH_NUM);
        $result_checklogin_user =$dbCon->con->prepare("select * from  `tblMainSetting` where `login_user`= :loginuser");

        $result_checklogin_user->bindparam(':loginuser',$login_user);
        $result_checklogin_user->execute();
         $rows_user = $result_checklogin_user->rowCount();
        if($rows_user != 0)
        {

            $result_updateuser =$dbCon->con->prepare("UPDATE `tblMainSetting` Set `Activityspeed`= :Activityspeed,
                                                        Mediasource=:Mediasource,Minlikesfilter=:Minlikesfilter,
                                                        Maxlikesfilter=:Maxlikesfilter where `login_user`=:loginuser");

            $result_updateuser->bindParam(':loginuser', ucfirst($login_user));
            $result_updateuser->bindParam(':Activityspeed', $Activityspeed);
            $result_updateuser->bindParam(':Mediasource', $Mediasource);
            $result_updateuser->bindParam(':Minlikesfilter', $Minlikesfilter);
            $result_updateuser->bindParam(':Maxlikesfilter', $Maxlikesfilter);

            $result_updateuser->execute();

            $rows_update = $result_updateuser->rowCount();

        }
        else {
            //Main setting table code
            $strQuery = "insert into tblMainSetting (`uid`,`login_user`,`Activityspeed`,`Mediasource`,`Minlikesfilter`,`Maxlikesfilter`)
                              VALUES (:uid,:loginuser,:Activityspeed,:Mediasource,:Minlikesfilter,:Maxlikesfilter)";
            $result_mainsetting = $dbCon->con->prepare($strQuery);

            $result_mainsetting->bindParam(':uid', $uid);
            $result_mainsetting->bindParam(':loginuser', ucfirst($login_user));
            $result_mainsetting->bindParam(':Activityspeed', $Activityspeed);
            $result_mainsetting->bindParam(':Mediasource', $Mediasource);
            $result_mainsetting->bindParam(':Minlikesfilter', $Minlikesfilter);
            $result_mainsetting->bindParam(':Maxlikesfilter', $Maxlikesfilter);

            $result_mainsetting->execute();

            $rows_mainsetting = $result_mainsetting->rowCount();//  fetch(PDO::FETCH_NUM);
        }
        //end
        $result_checklogin_user_tblauto =$dbCon->con->prepare("select * from  `tblAutoStopSetting` where `login_user`= :loginuser");

        $result_checklogin_user_tblauto->bindparam(':loginuser',$login_user);
        $result_checklogin_user_tblauto->execute();
        $rows_user_tblauto = $result_checklogin_user_tblauto->rowCount();
        if($rows_user_tblauto != 0)
        {

            $result_updateuser_tblauto =$dbCon->con->prepare("UPDATE `tblAutoStopSetting` Set `Likescounter`= :Likescounter,
                                                        Commentscounter=:Commentscounter,Followscounter=:Followscounter,
                                                        Unfollowscounter=:Unfollowscounter,Timer=:Timer
                                                         where `login_user`=:loginuser");

            $result_updateuser_tblauto->bindParam(':loginuser', ucfirst($login_user));
            $result_updateuser_tblauto->bindParam(':Likescounter', $Likescounter);
            $result_updateuser_tblauto->bindParam(':Commentscounter', $Commentscounter);
            $result_updateuser_tblauto->bindParam(':Followscounter', $Followscounter);
            $result_updateuser_tblauto->bindParam(':Unfollowscounter', $Unfollowscounter);
            $result_updateuser_tblauto->bindParam(':Timer', $Timer);
            $result_updateuser_tblauto->execute();

            $rows_update_tblauto = $result_updateuser_tblauto->rowCount();


        }
         else {
             //Auto Stop setting tbl code
             $strQuery1 = "insert into tblAutoStopSetting (`uid`,`login_user`,`Likescounter`,`Commentscounter`,`Followscounter`,`Unfollowscounter`,`Timer`)
                              VALUES (:uid,:loginuser,:Likescounter,:Commentscounter,:Followscounter,:Unfollowscounter,:Timer)";
             $result_autosetting = $dbCon->con->prepare($strQuery1);

             $result_autosetting->bindParam(':uid', $uid);
             $result_autosetting->bindParam(':loginuser', ucfirst($login_user));
             $result_autosetting->bindParam(':Likescounter', $Likescounter);
             $result_autosetting->bindParam(':Commentscounter', $Commentscounter);
             $result_autosetting->bindParam(':Followscounter', $Followscounter);
             $result_autosetting->bindParam(':Unfollowscounter', $Unfollowscounter);
             $result_autosetting->bindParam(':Timer', $Timer);

             $result_autosetting->execute();

             $rows_autosetting = $result_autosetting->rowCount();//  fetch(PDO::FETCH_NUM);
         }
        //end


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


    public function gethashtag(){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblHashTag where login_user=:login_user");

        $result->bindParam(':login_user', $_SESSION['login_user']);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        echo json_encode($data);

    }

}