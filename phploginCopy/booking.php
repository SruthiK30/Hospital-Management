<?php
    $name=$_POST['myname'];
    $age=$_POST['myage'];
    $reason=$_POST['myreason'];
    $email=$_POST['myemail'];
    $contact=$_POST['mycontact'];

    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into booking(name,age,reason,email,contact)values(?,?,?,?,?)");
        $stmt->bind_param("sissi",$name,$age,$reason,$email,$contact);
        $stmt->execute();
        echo "Appointment Booked";
        $stmt->close();
        $conn->close();
    }
?>