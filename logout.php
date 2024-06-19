<?php

session_start();
session_unset();
session_destroy();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Do you need to Logout?');
    window.location.href='safetravel-homepage.php';
    </script>");

//header("Location: safetravel-homepage.php");
die;


?>