<?php
class Login
{

    public function setProperty($username,$password)
    {
        $this->prop1 = $username;
        $this->prop1=$password;
    }
}

include('dbconn.php');




if($_POST['action'] == "Login") {

    $responseMessage = '';
    global $con;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email=$con->prepare("SELECT email FROM tblLogin WHERE email = :email");
    $check_email->bindparam(':email', $email);
    $check_email->execute();
    $no_email=$check_email->rowCount();

    if ($no_email>0) {
        $result = $con->prepare("select * from tblLogin where email = :email and password=:password");

        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);

        $result->execute();
        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

        if ($rows == 1) {
            $_SESSION['login_user'] = $email; // Initializing Session
            //header("location: profile.php"); // Redirecting To Other Page
            $responseMessage = "Success";
        } else {
            $responseMessage = "Password is invalid";
        }
    }
    else{
        $responseMessage="This Email isnot registered with us.....Please signUp with this Email";
    }

    echo json_encode($responseMessage);
}



if($_POST['action'] == "register") {

    $responseMessage = '';


    global $con;





    $email = $_POST['email'];
    $password = $_POST['password'];
    $status='Active';
    $date = date('Y-m-d');




    if(!empty($_POST['email']))
    {
        $responseMessage = "Enter Email";
    }


    if(!empty($_POST['password']))
    {
        $responseMessage = "Enter Password";
    }






    try {

        $check_mail=$con->prepare("SELECT email FROM tblLogin WHERE email = :email");
        $check_mail->bindparam(':email', $email);
        $check_mail->execute();
        $no_mail=$check_mail->rowCount();


        if ($no_mail>0) {

            $responseMessage = "This Email is already Exist....Please use another Email";
        }
        else {


            if (strlen($password) < 6 || strlen($password) > 25) {
                $responseMessage = "Password Length must be between 6 to 25 characters";
            } else {

                $strQuery = "insert into tblLogin (`email`,`password`,`status`,`date`)
                              VALUES (:email,:password,:status,:date)";


                $result = $con->prepare($strQuery);

                $result->bindParam(':email', $email);
                $result->bindParam(':password', $password);
                $result->bindParam(':status', $status);
                $result->bindParam(':date', $date);


                $result->execute();

                //$responseMessage = "Error Code : " .$result->errorCode() . '<br><br>';
                //echo json_encode($responseMessage);
                $rows = $result->rowCount();

                if ($rows == 1) {
                    $_SESSION['login_user'] = $email; // Initializing Session
                    $responseMessage = "Success";
                } else {
                    $responseMessage = "This  Email Id is already exist...Please use valid  Email Id.";
                }

            }
            //register user
        }
    } catch (PDOException $e) {
        $responseMessage = 'Query failed' . $e->getMessage();
    }
    echo json_encode($responseMessage);

}
?>