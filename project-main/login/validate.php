<?php
$con=mysqli_connect('localhost','root','','test');
session_start();

$password=$_POST['password'];
$email=$_POST['email'];
$_SESSION['email']=$email;

$result = mysqli_query($con,"select * from user where email='$email' and password='$password' ") ;
$num =mysqli_num_rows($result);

if($num!=1){
    header("location:login.php?msg=0");
}
else{
    header("location:../home/home.php");
}
?>