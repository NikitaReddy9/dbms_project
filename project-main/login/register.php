<?php
session_start();
$con=mysqli_connect('localhost','root','','test');
$name=$_POST['name'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$s = "select * from user where name='$name' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num==1){
    echo "Username already taken";
}
else{
  
        $reg="insert into user(name,password,contact,email,aadhar) values('$name','$password','$contact','$email','$aadhar')";
        mysqli_query($con,$reg);
        echo "Registration Successful";
        header('location:login.php');
   
}



?>