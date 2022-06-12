<?php
//header("Location: ../../index.php");
session_start();

if(isset($_SESSION['email']))
{
//    print_r($_SESSION['email']);
//    die();
    unset($_SESSION['email']);

}
//else {
//    session_destroy();
//    header("Location: ../../index.php");
//}

header("Location: ../../index.php");
die;


