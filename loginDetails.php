<?php include('dbconn.php');
//session_start();


//$dbHost = "localhost";
//$dbName = "socialen_instamgt";
//$dbUser = "socialen";
//$dbPassword = "y2QnRqtW";



//$con = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);



if($_POST['action'] == "Login") {

    $responseMessage = '';
    global $con;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check=$con->prepare("SELECT email FROM tblLogin WHERE email = :email");
    $check->bindparam(':email', $email);
    $check->execute();
    $no=$check->rowCount();

    if ($no>0) {
       $result = $con->prepare("select * from tblLogin where email = :email and password=:password");

            $result->bindParam(':email', $email);
            $result->bindParam(':password', $password);

            $result->execute();
            $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

            if ($rows == 1) {
                $_SESSION['login_user'] = $email; // Initializing Session
                //header("location: profile.php"); // Redirecting To Other Page
                $responseMessage = "Login Successfully";
            } else {
                $responseMessage = "Password is invalid";
            }
        }
    else{
        $responseMessage="This Email isnot registered with us.....Please signUp with this Email";
    }

    echo json_encode($responseMessage);
}




if($_POST['action'] == "sign_up") {

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

        $check=$con->prepare("SELECT email FROM tblLogin WHERE email = :email");
        $check->bindparam(':email', $email);
        $check->execute();
        $no=$check->rowCount();


        if ($no>0) {

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


if($_POST['action'] == "register") {

    $responseMessage = '';


    global $con;


    $check1=$con->prepare("SELECT id FROM tblLogin WHERE email = :email");
    $check1->bindparam(':email',$_SESSION['login_user']);
    $check1->execute();
    $result1 = $check1->fetch(PDO::FETCH_ASSOC);

    $uid=$result1['id'];
    //echo $uid;
    $IGuname = $_POST['IGuname'];
    $IGpassword = $_POST['IGpassword'];
    $IGAccstatus='Active';
    $date = date('Y-m-d');




    if(!empty($_POST['IGuname']))
    {
        $responseMessage = "Enter Username";
    }


    if(!empty($_POST['IGpassword']))
    {
        $responseMessage = "Enter Password";
    }






    try {




        $check=$con->prepare("SELECT IGuname FROM tblInstagram WHERE IGuname = :IGuname");
        $check->bindparam(':IGuname', $IGuname);
        $check->execute();
        $no=$check->rowCount();


        if ($no>0) {

            $responseMessage = "This Username is already Exist....Please use another Username";
        }
        else {




                $strQuery = "insert into tblInstagram (`uid`,`IGuname`,`IGpassword`,`IGAccstatus`,`date`)
                              VALUES (:uid,:IGuname,:IGpassword,:IGAccstatus,:date)";


                $result = $con->prepare($strQuery);

                $result->bindParam(':uid', $uid);
                $result->bindParam(':IGuname', $IGuname);
                $result->bindParam(':IGpassword', $IGpassword);
                $result->bindParam(':IGAccstatus', $IGAccstatus);
                $result->bindParam(':date', $date);


                $result->execute();

                //$responseMessage = "Error Code : " .$result->errorCode() . '<br><br>';
                //echo json_encode($responseMessage);
                $rows = $result->rowCount();

                if ($rows == 1) {
                   // $_SESSION['login_user'] = $email; // Initializing Session
                    $responseMessage = "Registered successfully";
                } else {
                    $responseMessage = "Not register";
                }


            //register user
        }
    } catch (PDOException $e) {
        $responseMessage = 'Query failed' . $e->getMessage();
    }
    echo json_encode($responseMessage);

}

