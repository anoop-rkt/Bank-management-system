<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Banking</title>
 
</head>
<body >

 <?php
 session_start();
 include('conf.php');
     $username=$_POST["username"];
     $password=$_POST["password"];
     $sql="SELECT * FROM `master_login` WHERE `userid`='$username' and `passwd`='$password' ";
     $res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['userid']=$result['userid'];
header('location:dashboard.htm');
}
else
{
    header('location:masterlogin.htm');
}

     
    ?>
</center>
</div>
</body>
</html>