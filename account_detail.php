<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Digital Savings Account Opening </title>  
<link rel="icon" href="title.png" type="image">
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
}  

.maroontheme{
    background: #861f41;
    position: relative;
    z-index: 9999;
    box-shadow: 0 1px 5px #ababab;
    padding:28px ;
}
ul { 
  
  display: inline;
  list-style-type: none;
  margin:3%;
  padding:0;
  top: 0;
}
li {
    background:rgb(255, 241, 251) ;
    float:right;

}
li a{
    display:block;
    color:black;
    text-align: center;
    padding:14px 16px;
    text-decoration: none;
}
li a:hover:not(a.active)
{
    background-color: #97144d;
    color: white;
    font-size: medium;
}

 .container {  
    width:50%;
    height:auto;
    margin-left: 23%; ; 
    padding: 20px;   
    background-color: rgb(250, 220, 243);  
    font-size:larger;
    }   
</style>   
</head>    
<body> 
    <div class="maroontheme">
        <img src="logo-white.png" id="logo">
    </div>   
    <div >
        <ul >
            <li ><a href="#" >Deposit</a></li>
            <li ><a href="#" >Loan</a></li>
            <li ><a href="#" >Open A/C</a></li>
            <li ><a href="#" >Dashboard</a></li>
        </ul>
    </div>
    <center style="margin-top: 4%;"> <h1> Customer Details </h1> </center>   
        <div class="container">   
        <center>
<?php
include('conf.php');
$name = $_GET["name"];
$sql="SELECT * FROM customer WHERE Customer_name='$name' ";
$res=mysqli_query($conn,$sql);
if($res)
{
   $result=mysqli_fetch_assoc($res);
        echo "<h3>Customer name:".$result["Customer_name"] ;
        echo "<br>";
        echo "<h3>Address:".$result["Customer_street"] ;
        echo "<br>";
        echo "<h3>City:".$result["Customer_city"] ;
        echo "<br>";
    }

?>
</center>
             <br>
          
        </div>   
    </form>     
</body>     
</html>  
