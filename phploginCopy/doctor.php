<?php
    session_start();
    include 'connect.php';
    if (!isset($_SESSION['myemail'])) {
        header("Location: login.html");
        exit;
    }
    
    // Check if the form has been submitted
    if (isset($_POST['book'])) {
        header("Location: booking.html");
        exit;
    }
    //include 'security.php';
    // if($_SESSION['myemail']){
    // $conn=new mysqli('localhost','root','','test');
    // if($conn->connect_error){
    //     echo "Failed to connect to DB".$conn->connect_error;
    // }
    // }else{
    //         header("location:login.html");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .doc{
            padding-top: 20px;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="sidebar">
            <li onclick=hideSideBar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <!-- <li><a href="login.html">Log Out</a></li> -->
            <li><a href="logout.php">Logout</a></li>
        </ul> 
        <ul>
            <li style="padding-left: 50px;"><a href="#">Hospital Management System</a></li>
            <!-- <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Log Out</a></li> -->
            <li onclick=showSideBar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>
    <div class="doc">
        <h1 id="doctor">Dr.Mohan</h1>
        <h3 id="book" style="color:darkcyan;"></h3>
        <!-- <button id="bookbtn" onclick="window.location.href = 'booking.html'">Book Appointment</button> -->

        <form action="booking.html" method="post">
            <input type="submit" class="btn btn-primary w-100" value="Book Appointment" name="book">
        </form>
    </div>
    <script>
        function showSideBar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSideBar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
        //var book=document.getElementById("book")
        //function appoint(){
            //book.textContent="Appointment Booked"
            //bookbtn.style.display="none"
        //}
    </script>
</body>
</html>