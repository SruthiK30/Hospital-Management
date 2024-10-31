<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- <script type="text/javascript">
        window.history.forward();
        //window.history.backward();
    </script> -->
</head>
<body>
<?php
    //include 'connect.php';
 if(isset($_POST['signup'])){
    $email=$_POST['myemail'];
    $password=$_POST['mypassword'];
    //$password=password_hash($_POST['mypassword'],PASSWORD_DEFAULT);
    $password=md5($password);
    //database connection
    $conn=new mysqli("localhost","root","","test");
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    }else{
        $stmt=$conn->prepare("select * from registration where email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        //$run_qry=mysqli_query($con,$stmt);
        if($stmt_result->num_rows>0){
            
            $data=$stmt_result->fetch_assoc();
            if($data['Password']===$password){
                session_start();
            //while($data=mysqli_fetch_assoc($run_qry)){
            //if(password_verify($password,$data['Password'])){
                //$email=$data['$email'];
                // echo "<h2> Login Successful </h2>";
                $_SESSION['myemail']=$data['Email'];
                //$_SESSION['myemail']=$email;
                header("Location: home.php");
                exit();
                // echo '<a href="logout.php"><input type="submit" value="Logout"></a>';
            }else{
                echo "<script>alert('Invalid Email or Password');
                document.location='login.html'</script>";
            }
        //}
        }else{
            echo "<script>alert('Invalid Email or Password');
            document.location='login.html'</script>";
        }
    }
}
 //}<a href="logout.php"><input type="submit" value="Logout"></a>

?>
<!-- <input type="submit" class="btn btn-primary" style="margin-left: 100px; margin-top:40px" value="Logout" name="">
<a href="logout.php">Logout</a> -->
 <!-- <a href="logout.php"><input type="submit" value="Logout"></a> -->
</body>
</html>
