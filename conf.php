<?php
$DB_USERNAME="root";
$DB_PASS="";
$DB_HOSTNAME="localhost";
$DB_NAME="21bcs026";
$conn=mysqli_connect($DB_HOSTNAME,$DB_USERNAME,$DB_PASS,$DB_NAME);
if (!$conn){
    die("Sorry, we failed to connect.".mysqli_connect_error()."<br>");
}
else{
    # echo "Successful Connection<br>";
}

?>