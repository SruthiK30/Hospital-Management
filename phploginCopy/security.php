<?php
//session_start();

if(!$_SESSION['myemail'])
{
    header("Location: login.html");
}

?>