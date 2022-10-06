<?php
 session_start();
 include('conf.php');
     $username=$_POST["username"];
     $password=$_POST["password"];
     $sql="SELECT * FROM `login` WHERE `username`='$username' and `password`='$password' ";
     $res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['username']=$result['username'];
header('location:acc.htm');
}
else
{   echo "Wrong credentials!";
    header('location:login.htm');
}



?>