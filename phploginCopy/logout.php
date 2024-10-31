
<?php
//session_start();
//unset($session['myemail']);
//session_destroy();
//header('location:login.html');
// session_start();

// session_unset();
// header('location:login.html');
session_start();
unset($_SESSION['myemail']);
session_destroy();
header("location: login.html");

?>