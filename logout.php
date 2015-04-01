<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 03/07/2015
 * Time: 5:39 PM
 */

session_start();

unset($_SESSION["rowcount_stop"]);
unset($_SESSION["rowcount"]);
unset($_SESSION["login_user"]);
//unset($_SESSION["user"]);
//unset($_SESSION["admin_login_user"]);
//unset($_SESSION["login_user"]);
//unset($_SESSION['customerid']);

session_destroy();

header("location:login.php");