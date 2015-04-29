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

        ///////////////////////////////////////////
       // $fetch_Image=$dbCon->con->prepare("SELECT ImageUrl FROM tblLogin WHERE `username`=:username");
         // $fetch_Image->bindParam(':username', $_SESSION['login_user']);
         // $fetch_Image->execute();
         // $fetch_Image = $fetch_Image->fetch(PDO::FETCH_ASSOC);

         // $Image=$fetch_Image['ImageUrl'];
         // $_SESSION['ImageUrl']=$Image;

        //////////////////////////////////////////

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
        //////////////////////////////////////////////////////////////////////
        //$fetch_ImageUrl=$dbCon->con->prepare("SELECT ImageUrl FROM tblInstagram WHERE `id`=:id");
        //$fetch_ImageUrl->bindParam(':id', $id);
       // $fetch_ImageUrl->execute();
       // $fetch_ImageUrl = $fetch_ImageUrl->fetch(PDO::FETCH_ASSOC);

       // $ImageUrl=$fetch_ImageUrl['ImageUrl'];
       // $_SESSION['ImageUrl_Id']=$ImageUrl;
        //////////////////////////////////////////////////////////////////////

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

    public function changeaccountstatusinsertdetails($id,$isRunning,$Activityspeed,$Mediasource,$Minlikesfilter,$Maxlikesfilter,$Newmedia,$DontComment,$Likescounter,$Commentscounter,$Followscounter,$Unfollowscounter,$Timer){

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
        $result_checklogin_user =$dbCon->con->prepare("select * from  `tblMainSetting` where `InstaAccId`= :InstaAccId");

        $result_checklogin_user->bindparam(':InstaAccId',$id);
        $result_checklogin_user->execute();
         $rows_user = $result_checklogin_user->rowCount();
        if($rows_user != 0)
        {

            $result_updateuser =$dbCon->con->prepare("UPDATE `tblMainSetting` Set `Activityspeed`= :Activityspeed,
                                                        Mediasource=:Mediasource,Minlikesfilter=:Minlikesfilter,
                                                        Newmediaonly=:Newmediaonly,Dontcommentsameusers=:Dontcommentsameusers,
                                                        Maxlikesfilter=:Maxlikesfilter where `InstaAccId`=:InstaAccId");

            $result_updateuser->bindParam(':InstaAccId', $id);
            $result_updateuser->bindParam(':Activityspeed', $Activityspeed);
            $result_updateuser->bindParam(':Mediasource', $Mediasource);
            $result_updateuser->bindParam(':Minlikesfilter', $Minlikesfilter);
            $result_updateuser->bindParam(':Maxlikesfilter', $Maxlikesfilter);
            $result_updateuser->bindParam(':Newmediaonly', $Newmedia);
            $result_updateuser->bindParam(':Dontcommentsameusers', $DontComment);


            $result_updateuser->execute();

            $rows_update = $result_updateuser->rowCount();
             // echo json_encode($rows_update);
        }
        else {
            //Main setting table code
            $strQuery = "insert into tblMainSetting (`uid`,`InstaAccId`,`Activityspeed`,`Mediasource`,`Minlikesfilter`,`Maxlikesfilter`,`Newmediaonly`,`Dontcommentsameusers`)
                              VALUES (:uid,:InstaAccId,:Activityspeed,:Mediasource,:Minlikesfilter,:Maxlikesfilter,:Newmediaonly,:Dontcommentsameusers)";
            $result_mainsetting = $dbCon->con->prepare($strQuery);

            $result_mainsetting->bindParam(':uid', $uid);
            $result_mainsetting->bindParam(':InstaAccId',$id );
            $result_mainsetting->bindParam(':Activityspeed', $Activityspeed);
            $result_mainsetting->bindParam(':Mediasource', $Mediasource);
            $result_mainsetting->bindParam(':Minlikesfilter', $Minlikesfilter);
            $result_mainsetting->bindParam(':Maxlikesfilter', $Maxlikesfilter);
            $result_mainsetting->bindParam(':Newmediaonly', $Newmedia);
            $result_mainsetting->bindParam(':Dontcommentsameusers', $DontComment);

            $result_mainsetting->execute();

            $rows_mainsetting = $result_mainsetting->rowCount();//  fetch(PDO::FETCH_NUM);
        }
        //end
        $result_checklogin_user_tblauto =$dbCon->con->prepare("select * from  `tblAutoStopSetting` where `InstaAccId`= :InstaAccId");

        $result_checklogin_user_tblauto->bindparam(':InstaAccId',$id);
        $result_checklogin_user_tblauto->execute();
        $rows_user_tblauto = $result_checklogin_user_tblauto->rowCount();
        if($rows_user_tblauto != 0)
        {

            $result_updateuser_tblauto =$dbCon->con->prepare("UPDATE `tblAutoStopSetting` Set `Likescounter`= :Likescounter,
                                                        Commentscounter=:Commentscounter,Followscounter=:Followscounter,
                                                        Unfollowscounter=:Unfollowscounter,Timer=:Timer
                                                         where `InstaAccId`=:InstaAccId");

            $result_updateuser_tblauto->bindParam(':InstaAccId',$id);
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
             $strQuery1 = "insert into tblAutoStopSetting (`uid`,`InstaAccId`,`Likescounter`,`Commentscounter`,`Followscounter`,`Unfollowscounter`,`Timer`)
                              VALUES (:uid,:InstaAccId,:Likescounter,:Commentscounter,:Followscounter,:Unfollowscounter,:Timer)";
             $result_autosetting = $dbCon->con->prepare($strQuery1);

             $result_autosetting->bindParam(':uid', $uid);
             $result_autosetting->bindParam(':InstaAccId',$id);
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

    public function gethashtag($InstaAccId){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblUsertag where InstaAccId=:InstaAccId");

        $result->bindParam(':InstaAccId',$InstaAccId);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        echo json_encode($data);

    }

    public function getMainSettingTblData($InstAccId){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblMainSetting where InstaAccId=:InstaAccId");

        $result->bindParam(':InstaAccId',$InstAccId);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        echo json_encode($data);

    }

    public function getAutoStopSettingTblData($InstAcId){
    $dbCon = new DatabaseConnection();


    $result =$dbCon->con->prepare("select * from tblAutoStopSetting where InstaAccId=:InstaAccId");

    $result->bindParam(':InstaAccId',$InstAcId);


    $result->execute();

    $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
    echo json_encode($data);

}

    public function DeleteTag($id){
        $dbCon = new DatabaseConnection();


      //  $chk_usertag = $dbCon->con->prepare("SELECT * FROM tblUsertag where id=:id");

       // $chk_usertag->bindParam(':id', $id);


       // $chk_usertag->execute();

       // $no_user = $chk_usertag->fetch(PDO::FETCH_OBJ);
        // $data=$chk_username=fetch(PDO::FETCH_OBJ);
       // $uid=$no_user->uid;
       // $InstaAccId=$no_user->InstaAccId;
       // $tagname=$no_user->tagname;
       // echo $uid;
       // echo $InstaAccId;
       // echo $tagname;
       // echo $id;
        /////////////////////////////////////

      //  $chk_Iguname = $dbCon->con->prepare("SELECT * FROM tblInstagram where id=:InstaAccId");

       // $chk_Iguname->bindParam(':InstaAccId', $InstaAccId);


       // $chk_Iguname->execute();

        //$no_Iguname = $chk_Iguname->fetch(PDO::FETCH_OBJ);
        // $data=$chk_username=fetch(PDO::FETCH_OBJ);
       // $Iguname=$no_Iguname->IGuname;
       // echo $Iguname;

        /////////////////////////////////////




        $result =$dbCon->con->prepare("delete from tblUsertag where id=:id");

        $result->bindParam(':id',$id);


        $result->execute();
        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);
       // echo $rows;

        ////////////////////tbl userinhashtag code///////////////////////////////
       // $date=date('Y-m-d');

      //  $strQuery1 = "insert into tblUserInHashTag (`uid`,`InstaAccId`,`username`,`hashtagname`,`date`)
         //                     VALUES (:uid,:InstaAccId,:username,:hashtagname,:date)";
      //  $result_Userinhashtag= $dbCon->con->prepare($strQuery1);
//
      //  $result_Userinhashtag->bindParam(':uid', $uid);
       // $result_Userinhashtag->bindParam(':InstaAccId',$InstaAccId);
       // $result_Userinhashtag->bindParam(':username', $Iguname);
       // $result_Userinhashtag->bindParam(':hashtagname',$tagname );
       // $result_Userinhashtag->bindParam(':date', $date);


       // $result_Userinhashtag->execute();

       // $rows_userinhashtag = $result_Userinhashtag->rowCount();//  fetch(PDO::FETCH_NUM);


        ////////////////////////////tbl userinhashtagcode/////////////////////////


        if ($rows == 1) {
            $responseMsg = "Success";
        } else {
            $responseMsg = "Failed";
        }
        echo json_encode($responseMsg);
    }

    public function ChangeMainSettingLikeStatusTrueFalse($id,$LikeStatus,$CommentStatus,$FollowStatus,$UnFollowStatus)
    {

        $dbCon = new DatabaseConnection();


        $result = $dbCon->con->prepare("UPDATE `tblMainSetting` Set `likes`= :likes,
                                        `comments`= :comments,`follows`= :follows,
                                         `unfollows`= :unfollows where `InstaAccId`=:id");

        $result->bindParam(':id', $id);
        $result->bindParam(':likes', $LikeStatus);
        $result->bindParam(':comments', $CommentStatus);
        $result->bindParam(':follows', $FollowStatus);
        $result->bindParam(':unfollows', $UnFollowStatus);

        $result->execute();

        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);




        $result_fetch =$dbCon->con->prepare("select * from tblMainSetting  where `InstaAccId`=:id");
        $result_fetch->bindParam(':id', $id);
        $result_fetch->execute();
        $data=$result_fetch->fetchall();
        /* echo json_encode($data);

         if ($rows == 1) {
             $responseMsg = "Success";


         } else {
             $responseMsg = "Failed";

         }*/
        echo json_encode($data);

    }

    public function AdduserTag($id,$tag,$count)
    {

        $dbCon = new DatabaseConnection();

        $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE username = :user");
        $check_userid->bindparam(':user',$_SESSION['login_user']);
        $check_userid->execute();
        $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

        $uid=$result_userid['id'];
        foreach($tag as $value) {

            $strQuery1 = "insert into tblUsertag (`uid`,`InstaAccId`,`tagname`)
                              VALUES (:uid,:InstaAccId,:tagname)";
            $result_tblusertag = $dbCon->con->prepare($strQuery1);

            $result_tblusertag->bindParam(':uid', $uid);
            $result_tblusertag->bindParam(':InstaAccId', $id);
            $result_tblusertag->bindParam(':tagname', $value);


            $result_tblusertag->execute();

            $rows_tblusertag = $result_tblusertag->rowCount();//  fetch(PDO::FETCH_NUM);
        }
        //////////////////////////////////////////////
      //  $chk_Iguname = $dbCon->con->prepare("SELECT * FROM tblInstagram where id=:InstaAccId");

       // $chk_Iguname->bindParam(':InstaAccId', $id);


       // $chk_Iguname->execute();

       // $no_Iguname = $chk_Iguname->fetch(PDO::FETCH_OBJ);
        // $data=$chk_username=fetch(PDO::FETCH_OBJ);
       // $Iguname=$no_Iguname->IGuname;
        //////////////////////////////////////////////


        ////////////////////////////////////////////
      //  $date=date('Y-m-d');
       // $strQuery1 = "insert into tblUserInHashTag (`uid`,`InstaAccId`,`hashtagname`,`username`,`date`)
          //                    VALUES (:uid,:InstaAccId,:tagname,:username,:date)";
       // $result_tbluserinhashtag = $dbCon->con->prepare($strQuery1);

       // $result_tbluserinhashtag->bindParam(':uid', $uid);
       // $result_tbluserinhashtag->bindParam(':InstaAccId',$id);
        //$result_tbluserinhashtag->bindParam(':tagname', $tag);
        //$result_tbluserinhashtag->bindParam(':username',$Iguname);
        //$result_tbluserinhashtag->bindParam(':date', $date);

        //$result_tbluserinhashtag->execute();

       // $rows_tbluserinhashtag = $result_tbluserinhashtag->rowCount();//  fetch(PDO::FETCH_NUM);

        /////////////////////////////////////////

         //foreach($tag as $value) {

             $result_fetch = $dbCon->con->prepare("select * from tblUsertag  where `InstaAccId`=:InstaAccId");
            // $result_fetch->bindParam(':tagname', $value);
             $result_fetch->bindParam(':InstaAccId', $id);
             $result_fetch->execute();
             $data = $result_fetch->fetchAll();
             echo json_encode($data);
       //  }
        /* if ($rows == 1) {
             $responseMsg = "Success";


         } else {
             $responseMsg = "Failed";

         }*/
       // echo json_encode($data);

    }

    public function AddLocation($id,$LocationName)
    {

        $dbCon = new DatabaseConnection();

        $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE username = :user");
        $check_userid->bindparam(':user',$_SESSION['login_user']);
        $check_userid->execute();
        $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

        $uid=$result_userid['id'];
        foreach($LocationName as $value) {

            $strQuery1 = "insert into tblLocation (`uid`,`InstaAccId`,`Locationname`)
                              VALUES (:uid,:InstaAccId,:Locationname)";
            $result_tblLocation = $dbCon->con->prepare($strQuery1);

            $result_tblLocation->bindParam(':uid', $uid);
            $result_tblLocation->bindParam(':InstaAccId', $id);
            $result_tblLocation->bindParam(':Locationname', $value);


            $result_tblLocation->execute();

            $rows_tblLocation = $result_tblLocation->rowCount();//  fetch(PDO::FETCH_NUM);
        }

        $result_fetch = $dbCon->con->prepare("select * from tblLocation  where `InstaAccId`=:InstaAccId");
        // $result_fetch->bindParam(':tagname', $value);
        $result_fetch->bindParam(':InstaAccId', $id);
        $result_fetch->execute();
        $data = $result_fetch->fetchAll();
        echo json_encode($data);

    }

    public function getLocation($InstaAccId){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblLocation where InstaAccId=:InstaAccId");

        $result->bindParam(':InstaAccId',$InstaAccId);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        echo json_encode($data);

    }

    public function DeleteLocation($id){
        $dbCon = new DatabaseConnection();



        $result =$dbCon->con->prepare("delete from tblLocation where id=:id");

        $result->bindParam(':id',$id);


        $result->execute();
        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);


        if ($rows == 1) {
            $responseMsg = "Success";
        } else {
            $responseMsg = "Failed";
        }
        echo json_encode($responseMsg);
    }

    public function AddUsername($id,$UserName)
    {

        $dbCon = new DatabaseConnection();

        $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE username = :user");
        $check_userid->bindparam(':user',$_SESSION['login_user']);
        $check_userid->execute();
        $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

        $uid=$result_userid['id'];
        foreach($UserName as $value) {

            $strQuery1 = "insert into tblUsername (`uid`,`InstaAccId`,`username`)
                              VALUES (:uid,:InstaAccId,:username)";
            $result_tblUsername = $dbCon->con->prepare($strQuery1);

            $result_tblUsername->bindParam(':uid', $uid);
            $result_tblUsername->bindParam(':InstaAccId', $id);
            $result_tblUsername->bindParam(':username', $value);


            $result_tblUsername->execute();

            $rows_tblUsername = $result_tblUsername->rowCount();//  fetch(PDO::FETCH_NUM);
        }

        $result_fetch = $dbCon->con->prepare("select * from tblUsername  where `InstaAccId`=:InstaAccId");
        // $result_fetch->bindParam(':tagname', $value);
        $result_fetch->bindParam(':InstaAccId', $id);
        $result_fetch->execute();
        $data = $result_fetch->fetchAll();
        echo json_encode($data);

    }

    public function getUsername($InstaAccId){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblUsername where InstaAccId=:InstaAccId");

        $result->bindParam(':InstaAccId',$InstaAccId);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        echo json_encode($data);

    }

    public function DeleteUsername($id){
        $dbCon = new DatabaseConnection();



        $result =$dbCon->con->prepare("delete from tblUsername where id=:id");

        $result->bindParam(':id',$id);


        $result->execute();
        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);


        if ($rows == 1) {
            $responseMsg = "Success";
        } else {
            $responseMsg = "Failed";
        }
        echo json_encode($responseMsg);
    }

    public function AddComment($id,$Comment)
    {

        $dbCon = new DatabaseConnection();

        $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE username = :user");
        $check_userid->bindparam(':user',$_SESSION['login_user']);
        $check_userid->execute();
        $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

        $uid=$result_userid['id'];
        foreach($Comment as $value) {

            $strQuery1 = "insert into tblComment (`uid`,`InstaAccId`,`comment`)
                              VALUES (:uid,:InstaAccId,:comment)";
            $result_tblComment = $dbCon->con->prepare($strQuery1);

            $result_tblComment->bindParam(':uid', $uid);
            $result_tblComment->bindParam(':InstaAccId', $id);
            $result_tblComment->bindParam(':comment', $value);


            $result_tblComment->execute();

            $rows_tblUsername = $result_tblComment->rowCount();//  fetch(PDO::FETCH_NUM);
        }

        $result_fetch = $dbCon->con->prepare("select * from tblComment  where `InstaAccId`=:InstaAccId");
        // $result_fetch->bindParam(':tagname', $value);
        $result_fetch->bindParam(':InstaAccId', $id);
        $result_fetch->execute();
        $data = $result_fetch->fetchAll();
        echo json_encode($data);

    }

    public function getComment($InstaAccId){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblComment where InstaAccId=:InstaAccId");

        $result->bindParam(':InstaAccId',$InstaAccId);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        echo json_encode($data);

    }

    public function DeleteComment($id){
        $dbCon = new DatabaseConnection();



        $result =$dbCon->con->prepare("delete from tblComment where id=:id");

        $result->bindParam(':id',$id);


        $result->execute();
        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);


        if ($rows == 1) {
            $responseMsg = "Success";
        } else {
            $responseMsg = "Failed";
        }
        echo json_encode($responseMsg);
    }

    public function GetSelectedInstaAccount($id){
        $dbCon = new DatabaseConnection();


        $result_fetch =$dbCon->con->prepare("select * from tblProcessDetails where InstaAccId=:id");

        $result_fetch->bindParam(':id', $id);


        $result_fetch->execute();

        $data = $result_fetch->fetchall();//  fetch(PDO::FETCH_NUM);
        //////////////////////////////////////////////////////////////////////
        $fetch_SelectImageUrl=$dbCon->con->prepare("SELECT ImageUrl FROM tblInstagram WHERE `id`=:id");
        $fetch_SelectImageUrl->bindParam(':id', $id);
        $fetch_SelectImageUrl->execute();
        $fetch_SelectImageUrl = $fetch_SelectImageUrl->fetch(PDO::FETCH_ASSOC);

        $SelectImageUrl=$fetch_SelectImageUrl['ImageUrl'];
        $_SESSION['ImageUrl_Id']=$SelectImageUrl;
        //////////////////////////////////////////////////////////////////////

        echo json_encode($data);

    }

    public function TblLoginImageurl(){
        $dbCon = new DatabaseConnection();
        $username=$_SESSION['login_user'];


        ///////////////////////////////////////////
        $fetch_Image=$dbCon->con->prepare("SELECT ImageUrl FROM tblLogin WHERE `username`=:username");
        $fetch_Image->bindParam(':username',$username);
        $fetch_Image->execute();
        $data = $fetch_Image->fetchall();
        //////////////////////////////////////////

        echo json_encode($data);
    }

    public function GetSelectedInstaAccountImageUrl($id){
        $dbCon = new DatabaseConnection();


        $result =$dbCon->con->prepare("select * from tblInstagram where id=:id");

        $result->bindParam(':id', $id);


        $result->execute();

        $data = $result->fetchall();//  fetch(PDO::FETCH_NUM);
        //////////////////////////////////////////////////////////////////////
        //$fetch_ImageUrl=$dbCon->con->prepare("SELECT ImageUrl FROM tblInstagram WHERE `id`=:id");
        //$fetch_ImageUrl->bindParam(':id', $id);
        // $fetch_ImageUrl->execute();
        // $fetch_ImageUrl = $fetch_ImageUrl->fetch(PDO::FETCH_ASSOC);

        // $ImageUrl=$fetch_ImageUrl['ImageUrl'];
        // $_SESSION['ImageUrl_Id']=$ImageUrl;
        //////////////////////////////////////////////////////////////////////

        echo json_encode($data);

    }

    public function ChangeDefaultSettings($id){
        $dbCon = new DatabaseConnection();
        //////update tblMainSetting
        $Activityspeed="slow";
        $Mediasource="Tags";
        $Minlikesfilter=0;
        $Maxlikesfilter=0;
        $Newmediaonly="false";
        $Dontcommentsameusers="false";


        $result_updateuser =$dbCon->con->prepare("UPDATE `tblMainSetting` Set `Activityspeed`= :Activityspeed,
                                                        Mediasource=:Mediasource,Minlikesfilter=:Minlikesfilter,
                                                        Newmediaonly=:Newmediaonly,Dontcommentsameusers=:Dontcommentsameusers,
                                                        Maxlikesfilter=:Maxlikesfilter where `InstaAccId`=:InstaAccId");

        $result_updateuser->bindParam(':InstaAccId', $id);
        $result_updateuser->bindParam(':Activityspeed', $Activityspeed);
        $result_updateuser->bindParam(':Mediasource', $Mediasource);
        $result_updateuser->bindParam(':Minlikesfilter', $Minlikesfilter);
        $result_updateuser->bindParam(':Maxlikesfilter', $Maxlikesfilter);
        $result_updateuser->bindParam(':Newmediaonly', $Newmediaonly);
        $result_updateuser->bindParam(':Dontcommentsameusers', $Dontcommentsameusers);


        $result_updateuser->execute();

        $rows_update = $result_updateuser->rowCount();
        //////update tblMainsetting end
        //////////////////////update tblAuto-StopSettings
        $Likescounter=0;
        $Commentscounter=0;
        $Followscounter=0;
        $Unfollowscounter=0;
        $Timer="00:00";
        $result_updateuser_tblauto =$dbCon->con->prepare("UPDATE `tblAutoStopSetting` Set `Likescounter`= :Likescounter,
                                                        Commentscounter=:Commentscounter,Followscounter=:Followscounter,
                                                        Unfollowscounter=:Unfollowscounter,Timer=:Timer
                                                         where `InstaAccId`=:InstaAccId");

        $result_updateuser_tblauto->bindParam(':InstaAccId',$id);
        $result_updateuser_tblauto->bindParam(':Likescounter', $Likescounter);
        $result_updateuser_tblauto->bindParam(':Commentscounter', $Commentscounter);
        $result_updateuser_tblauto->bindParam(':Followscounter', $Followscounter);
        $result_updateuser_tblauto->bindParam(':Unfollowscounter', $Unfollowscounter);
        $result_updateuser_tblauto->bindParam(':Timer', $Timer);
        $result_updateuser_tblauto->execute();

        $rows_update_tblauto = $result_updateuser_tblauto->rowCount();
        echo json_encode($rows_update);


    }











}