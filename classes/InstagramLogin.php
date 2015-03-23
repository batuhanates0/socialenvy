<?php

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

//                $check_userid=$dbCon->con->prepare("SELECT id FROM tblLogin WHERE email = :email");
//                $check_userid->bindparam(':email',$_SESSION['login_user']);
//                $check_userid->execute();
//                $result_userid = $check_userid->fetch(PDO::FETCH_ASSOC);
//
//                $uid=$result_userid['id'];
                $uid=1;

                $IGAccstatus='Active';
                $date = date('Y-m-d');



                $strQuery = "insert into tblInstagram (`uid`,`IGuname`,`IGpassword`,`IGAccstatus`,`date`)
                              VALUES (:uid,:IGuname,:IGpassword,:IGAccstatus,:date)";


                $result =$dbCon-> con->prepare($strQuery);

                $result->bindParam(':uid', $uid);
                $result->bindParam(':IGuname', $username);
                $result->bindParam(':IGpassword', $password);
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

           // return "true";
        }else{
            $responseMsg="Username Or Password is invalid.";
        }
        echo json_encode($responseMsg);
    }
}