<?php
    if(isset($_POST['register'])){
    $name=$_POST['myname'];
    $email=$_POST['myemail'];
    $password=$_POST['mypassword'];
    //$password=password_hash($_POST['mypassword'],PASSWORD_DEFAULT);
    $password=md5($password);

    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $checkEmail="select *from registration where email='$email'";
        $result=$conn->query($checkEmail);
        if($result->num_rows>0){
            echo "<script>alert('Email Address Already Exists !');
            document.location='register.html'</script>";
        }
        else{
            $stmt=$conn->prepare("insert into registration(name,email,password)values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
        echo "<script>alert('Registration Successful');
                document.location='register.html'</script>";
        $stmt->close();
        $conn->close();
        }
        
    }
}
?>