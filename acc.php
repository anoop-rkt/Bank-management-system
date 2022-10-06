<?php
include('conf.php');
$username=$_POST['username'];
$address=$_POST['address'];
$city=$_POST['city'];
$sql = "INSERT INTO customer(Customer_name,Customer_street,Customer_city)
VALUES ('$username','$address','$city')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "<center><h3>User Registered Successfully</h3><br></center>";
    echo "<center><h3><a href=\"login.htm\"><b>Click here to Login</b></a></h3></center>";
}
else{
    if (mysqli_error($conn) == "Duplicate entry '$username' for key 'login.PRIMARY'"){

        echo "Username already exists.<br>";
        echo "Try with another username.<br>";
        echo "<h3>Already Registered ?<a href=\"test.html\"><b>Click here to Login</b></a></h3>";
    }
    else{
        echo "Registration failed due to ".mysqli_error($conn)."<br>";
    }
}


?>