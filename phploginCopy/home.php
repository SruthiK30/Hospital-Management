<?php
    session_start();
    include 'connect.php';
     
    //if($_SESSION['myemail']){
        //$linkIsSet = isset($link) && isset($linkText) && isset($imageSrc);
        // $kmchlink = "dept.php";
        // $kmchlinkText = "KMCH";
        // $kmchimageSrc = "kmch.jpg";
        // if(isset($kmchlink) && isset($kmchlinkText) && isset($kmchimageSrc)){
        //     header("location: login.php");
        // }
        // else{
        //     echo "Error:".$conn->error;
        // }

        ///if($_SESSION['myemail']){
        ///  if(isset($_POST['kmch'])){
        ///    header("location: dept.php");
        ///   }
        ///    else{
        ///        echo "Error:".$conn->error;
        ///    }
        ///}
        if (!isset($_SESSION['myemail'])) {
            header("Location: login.html");
            exit;
        }
        
        // Check if the form has been submitted
        if (isset($_POST['kmch'])) {
            header("Location: dept.php");
            exit;
        }
    //}
    //$userprofile=$_SESSION['myemail'];
    //if($userprofile==true){
    // $conn=new mysqli('localhost','root','','test');
    // if($conn->connect_error){
    //     echo "Failed to connect to DB".$conn->connect_error;
    // }
    // }else{
    //         header("location:login.php");
    // }

//     if (!isset($_SESSION) || session_id() == "" || session_status() === PHP_SESSION_NONE)
// session_start();
// include("connect.php");
//include ("security.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script type="text/javascript">
        window.history.forward();
    </script> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            margin-left: 0!important;
            margin-right: 0!important;
            padding-top: 50px;
        }

        .card-img {
            height: 200px;
            width: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .card-link {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }
        .card-link:hover{
            color:rgb(31, 178, 236);
        }
    </style>
</head>
<body>

    <!-- <nav>
        <ul class="sidebar">
            <li onclick=hideSideBar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Log Out</a></li>
        </ul> 
    </nav>
    <script>
        function showSideBar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSideBar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script> -->
    <nav>
        <ul class="sidebar">
            <li onclick=hideSideBar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <!-- <li><a href="login.html">Log Out</a></li> -->
            <!-- <li><a href="logout.php"><input type="submit" value="Logout"></a></li> -->
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
    
    <script>
        function showSideBar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSideBar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
    <div class="container">
        <img class="card-img" src="kmch.jpg" alt="KMCH">
        <div class="card-text">
            <form action="dept.php" method="post">
        <input type="submit" class="btn btn-primary w-100" value="KMCH" name="kmch">
        </form>
        <!-- <a class="card-link" href="dept.php">KMCH</a> -->
        </div>
    </div>
</body>
</html>
