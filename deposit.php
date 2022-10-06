<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="title.png" type="image">
    <style>
        Body {
            font-family: Calibri, Helvetica, sans-serif;
        }

        .maroontheme {
            background: #861f41;
            position: relative;
            z-index: 9999;
            box-shadow: 0 1px 5px #ababab;
            padding: 28px;
        }

        ul {

            display: inline;
            list-style-type: none;
            margin: 3%;
            padding: 0;
            top: 0;
        }

        li {
            background: rgb(255, 241, 251);
            float: right;

        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(a.active) {
            background-color: #97144d;
            color: white;
            font-size: medium;
        }
table{
        border-collapse: collapse;
        border:#97144d;
        width: 95%;
     }
th {
  height: 70px;
  padding: 8px;

 
}
td{
    text-align: center;
    padding: 8px;
    background-color: rgb(270, 220, 243);
}
.h tr :hover {background-color:pink;}
    </style>

    <head>
    </head>

<body>
    <div class="maroontheme">
        <img src="logo-white.png" id="logo">
    </div>
    <div>
        <ul>
            <li><a href="#">Deposit</a></li>
            <li><a href="#">Loan</a></li>
            <li><a href="#">Open A/C</a></li>
            <!--<li><a href="#">Dashboard</a></li>-->
        </ul>
    </div>
    <center style="margin-top: 4%;">
        <h1> Dashboard </h1>
    </center>
    <table align="center"  cellpadding="20px">

        <tr><th style="padding-right:150px;"><h2>List of depositors</h2></th> 
               <th style="  padding-left:150px;"><h2>List of borrowers</h2> </th> </tr>
               <tr>
              <th style="  padding-right:150px;">
        
      <div class="h">            
    <?php
include('conf.php');
$sql="SELECT cust_name, depositor.Acc_number, Balance 
FROM depositor INNER JOIN account 
ON depositor.Acc_number = account.Account_number" ;
$res=mysqli_query($conn, $sql);
echo "<table align= \"left\" border=4 >";
echo "<tr> <td> Name </td>
<td> A/C No. </td>
<td> Balance </td>
<td> Details </td></tr>";
while($result=mysqli_fetch_assoc($res))
{
echo '<tr><td>'. $result['cust_name'] . '</td><td>'. 
$result['Acc_number'] . '</td><td>' . $result['Balance'] . '</td><td><a 
href="account_detail.php?name=' . $result['cust_name'] .' ">View 
Details</a></td></tr>';
}
echo '</table>';
?>
</div> 
               
            </th > <th  style="  padding-left:150px;">
        <a href="borrow.php" ><b>Click to view</b></a>
        </th>
        
           
   
</body>
</html>