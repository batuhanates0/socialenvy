<?php
session_start();
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/19/2015
 * Time: 5:52 PM
 */
include "DatabaseConnection.php";
class InstagramLogin
{
    public $responseMsg='';
    public function Login($username,$password)
    {
        $dbCon = new DatabaseConnection();
        $useragent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31"; // Yes cause that's the way I roll
        $cookie = "InstagramCookie.txt";

        $ch = curl_init();
        unlink('/tmp/' . $cookie);

        curl_setopt($ch, CURLOPT_URL, "https://instagram.com/");
        curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/' . $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, '/tmp/' . $cookie);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.13) Gecko/20101206 Ubuntu/10.10 (maverick) Firefox/3.6.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);

        $page1 = curl_exec($ch);
        $firstPosition = strpos($page1, "_sharedData =");
        $secondPosition = strpos($page1, ";", $firstPosition);
        $csrf1 = substr($page1, $firstPosition, $secondPosition - $firstPosition);

        $csrf_val = str_replace("_sharedData = ", "", $csrf1);

        $obj = json_decode($csrf_val);
        $token = $obj->config->csrf_token;

        $request_headers = array();
        $request_headers[] = 'X-CSRFToken: ' . $token;
        $request_headers[] = 'X-Requested-With: XMLHttpRequest';

        $post = "username=".$username."&password=".$password."&intent=";
        //echo $post;

        curl_setopt($ch, CURLOPT_URL, "https://instagram.com/accounts/login/ajax/");
        curl_setopt($ch, CURLOPT_REFERER, "https://instagram.com/accounts/login/ajax/?targetOrigin=https%3A%2F%2Finstagram.com");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($ch, CURLOPT_HEADER , 0);

        $Finalpage = curl_exec($ch);
        $obj_LoggedId = json_decode($Finalpage);
        //var_dump($obj_LoggedId);
        $Islogin = $obj_LoggedId->authenticated;

        if($Islogin)
        {
            $check_username =$dbCon->con->prepare("SELECT IGuname FROM tblInstagram WHERE IGuname = :IGuname");
            $check_username->bindparam(':IGuname',$username);
            $check_username->execute();
            $result_username = $check_username->rowCount();
            if ($result_username ==0){

                $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE username = :user");
                $check_userid->bindparam(':user',$_SESSION['login_user']);
                $check_userid->execute();
                $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);

                $uid=$result_userid['id'];
                $unique_username= $_SESSION['login_user'];

                $IGAccstatus='Active';
                $date = date('Y-m-d');
                $isRunning='Stopped';



                $strQuery = "insert into tblInstagram (`uid`,`unique_username`,`IGuname`,`IGpassword`,`IGAccstatus`,`date`,`isRunning`)
                              VALUES (:uid,:unique_username,:IGuname,:IGpassword,:IGAccstatus,:date,:isRunning)";


                $result =$dbCon-> con->prepare($strQuery);

                $result->bindParam(':uid',$uid);
                $result->bindParam(':unique_username',ucfirst($unique_username));
                $result->bindParam(':IGuname', $username);
                $result->bindParam(':IGpassword', $password);
                $result->bindParam(':IGAccstatus', $IGAccstatus);
                $result->bindParam(':date', $date);
                $result->bindParam(':isRunning', $isRunning);


                $result->execute();

                $rows = $result->rowCount();

                //instagram table id fetch code
                $fetch_InsAccid=$dbCon->con->prepare("SELECT id FROM tblInstagram WHERE IGuname = :IG_uname");
                $fetch_InsAccid->bindparam(':IG_uname',$username);
                $fetch_InsAccid->execute();
                $fetch_InsAccid = $fetch_InsAccid->fetch(PDO::FETCH_ASSOC);

                $InsAccid=$fetch_InsAccid['id'];


                //instagram table fetch id code end


                /////////Main setting table insert code
                $Activityspeed="slow";
                $Mediasource="Tags";
                $Minlikesfilter=0;
                $Maxlikesfilter=0;
                $Newmediaonly="false";
                $Dontcommentsameusers="false";

                $strQuery = "insert into tblMainSetting (`uid`,`InstaAccId`,`Activityspeed`,`Mediasource`,`Minlikesfilter`,`Maxlikesfilter`,`Newmediaonly`,`Dontcommentsameusers`)
                              VALUES (:uid,:InsAccid,:Activityspeed,:Mediasource,:Minlikesfilter,:Maxlikesfilter,:Newmediaonly,:Dontcommentsameusers)";
                $result_mainsetting = $dbCon->con->prepare($strQuery);

                $result_mainsetting->bindParam(':uid', $uid);
                $result_mainsetting->bindParam(':InsAccid', $InsAccid);
                $result_mainsetting->bindParam(':Activityspeed', $Activityspeed);
                $result_mainsetting->bindParam(':Mediasource', $Mediasource);
                $result_mainsetting->bindParam(':Minlikesfilter', $Minlikesfilter);
                $result_mainsetting->bindParam(':Maxlikesfilter', $Maxlikesfilter);
                $result_mainsetting->bindParam(':Newmediaonly', $Newmediaonly);
                $result_mainsetting->bindParam(':Dontcommentsameusers', $Dontcommentsameusers);

                $result_mainsetting->execute();

                $rows_mainsetting = $result_mainsetting->rowCount();//  fetch(PDO::FETCH_NUM);

                ///////////////////////////main setting table insert code end

                //Auto Stop setting tbl code
                $Likescounter=0;
                $Commentscounter=0;
                $Followscounter=0;
                $Unfollowscounter=0;
                $Timer="00:00";


                $strQuery1 = "insert into tblAutoStopSetting (`uid`,`InstaAccId`,`Likescounter`,`Commentscounter`,`Followscounter`,`Unfollowscounter`,`Timer`)
                              VALUES (:uid,:InsAccid,:Likescounter,:Commentscounter,:Followscounter,:Unfollowscounter,:Timer)";
                $result_autosetting = $dbCon->con->prepare($strQuery1);

                $result_autosetting->bindParam(':uid', $uid);
                $result_autosetting->bindParam(':InsAccid',$InsAccid);
                $result_autosetting->bindParam(':Likescounter', $Likescounter);
                $result_autosetting->bindParam(':Commentscounter', $Commentscounter);
                $result_autosetting->bindParam(':Followscounter', $Followscounter);
                $result_autosetting->bindParam(':Unfollowscounter', $Unfollowscounter);
                $result_autosetting->bindParam(':Timer', $Timer);

                $result_autosetting->execute();

                $rows_autosetting = $result_autosetting->rowCount();//  fetch(PDO::FETCH_NUM);
                // auto stop seeting code end

                //usertag table insert code
                $check_hashtag=$dbCon->con->prepare("SELECT hashtagname FROM tblHashTag");

                $check_hashtag->execute();
               // $result_hashtag = $check_hashtag->fetchall();


                while($result = $check_hashtag->fetch(PDO::FETCH_OBJ))
                {
                   foreach($result as $val){


                       $strQuery1 = "insert into tblUsertag (`tagname`,`uid`,`InstaAccId`)
                              VALUES (:tag,:uid,:InstaAccId)";
                       $result_usertag = $dbCon->con->prepare($strQuery1);

                       $result_usertag->bindParam(':tag', $val);
                       $result_usertag->bindParam(':uid', $uid);
                       $result_usertag->bindParam(':InstaAccId', $InsAccid);

                       $result_usertag->execute();

                       $rows_usertag= $result_usertag->rowCount();


                   }
                }






                //end of usertag table insert code

                //$responseMessage = "Error Code : " .$result->errorCode() . '<br><br>';
                //echo json_encode($responseMessage);


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

           // return "true";
        }else{
            $responseMsg="Username Or Password is invalid.";
        }
        echo json_encode($responseMsg);
    }
}