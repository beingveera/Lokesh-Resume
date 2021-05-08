<?php

$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];


$con=new mysqli('localhost','root','running');
if($con->connect_error){
    die('Connection Failed : ',$con->connect_error);
}else{
    $stmt=$con->prepare("insert into contact(name,email,subject,message) values(?,?,?,?)");
    $stmt->bind_param('sssssi',$name,$email,$subject,$message);
    $stmt->execute();
    echo "successfully...";
    $stmt->close();
    $stmt->close();
}
?>