<?php


// This page updates the user password
$con=mysqli_connect('localhost','root','','test');
session_start();

$op = $_POST['op'];
#$op = mysqli_real_escape_string($con, $op);
$np = $_POST['np'];
#$np = mysqli_real_escape_string($con, $np);
$rnp = $_POST['rnp'];
#$rnp = mysqli_real_escape_string($con, $rnp);
$query ="SELECT password FROM user WHERE email ='".$_SESSION['email']."'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

//check old password and password taken from db
if (strcmp($op,$orig_pass)!=0 || strcmp($np,$rnp)!=0) {
    #header('location: account.php?error=The two passwords don\'t match.');
    echo"password not matched";
} else {
    if ($op == $orig_pass) {
        $query = "update user SET password='".$np."' where email='".$_SESSION['email']."' ";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: account.php?error=Password Updated Successfully');
    } else
    echo" not updated";
        #header('location: account.php?error=Wrong Old Password.');
}
?>