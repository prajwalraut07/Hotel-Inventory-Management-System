<?php
session_start();
include "dbconnection.php";
$e=$_POST['email'];
$p=$_POST['pass'];

$query="select * from tbluser where email='$e' and password='$p' ";
$result=mysqli_query($link,$query);
if (!$result) {
    // If there's an error, print it
    $error_message = mysqli_error($link);
    echo "MySQL Error: $error_message";
    exit; // Stop further execution of the script
}
if($result){
    $_SESSION['id']=$e;
    header("location:index.php");
}
else{
    
    header("location:page-login.php?m=1");
}
?>