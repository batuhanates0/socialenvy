<?php
unset($_SESSION);
session_destroy();
//echo "user Found " . $_SESSION['admin_login_user'];
//echo "user Found ";
header ("Location: login.php");