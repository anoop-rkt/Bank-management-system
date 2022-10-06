<?php
include('conf.php');
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "INSERT INTO login(username,mobile,email,password)
VALUES ('$username','$mobile','$email','$password')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "<center><h3>User Registered Successfully</h3><br></center>";
    echo "<center><h3><a href=\"login.htm\"><b>Click here to Login</b></a></h3></center>";
}
else{
    if (mysqli_error($conn) == "Duplicate entry '$username' for key 'login.PRIMARY'"){

        echo "Username already exists.<br>";
        echo "Try with another username.<br>";
        echo "<h3>Already Registered ?<a href=\"login.htm\"><b>Click here to Login</b></a></h3>";
    }
    else{
        echo "Registration failed due to ".mysqli_error($conn)."<br>";
    }
}


?>