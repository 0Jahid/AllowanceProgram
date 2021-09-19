<?php

    session_start();
    unset($_SESSION['login_user']);
    $_SESSION['isadmin'] = 'False';
    $_SESSION['message'] = "Logout Successfull";
    header('location: index.php')
?>
