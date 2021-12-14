<?php
$con=mysqli_connect('localhost', 'root','','test');

$aadhar = $_POST['aadhar'];
$email = $_POST['email'];
$lname = $_POST['lname'];
$lnum = $_POST['lnum'];
$cvv = $_POST['cvv'];
$mon = $_POST['mon'];
$year = $_POST['year'];

$sql = "insert into cards(Aadhar,email,cname,cno,cvv,month,year) values('$aadhar','$email', '$lname','$lnum','$cvv','$mon','$year');";
$rs = mysqli_query($con,$sql) or die("cannot insert") ;
header("location:account.php");
?>