<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    a{
    background-color: #f44336;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    h1 {
    color: slateblue;
    padding: 15px 20px;
    text-align: left;
    margin-top:16px;
    margin-right: 180px;
    margin-left:480px;
    }
  </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";

    $conn = new mysqli($servername, $username,"",'bank');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $amount = $_POST["amount"];
    $tsql="insert into transactions(sender,receiver,amount) values (?, ?, ? )";
    $stm=$conn->prepare($tsql);
    $stm->bind_param('sss',$sender, $receiver, $amount);
    $stm->execute();
    $result=$stm->get_result();

    $ssql="select balance from customers where name=?";
    $sstm=$conn->prepare($ssql);
    $sstm->bind_param('s',$sender);
    $sstm->execute();
    $result=$sstm->get_result();
    if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
      $ups= $row["balance"]-$amount;
    }
    }

    $susql="update customers set balance=? where name=?";
    $sustm=$conn->prepare($susql);
    $sustm->bind_param('ss',$ups,$sender);
    $sustm->execute();
    $resultsu=$sustm->get_result();

    $rsql="select balance from customers where name=?";
    $rstm=$conn->prepare($ssql);
    $rstm->bind_param('s',$receiver);
    $rstm->execute();
    $resultr=$rstm->get_result();
    if ($resultr->num_rows > 0){
    while($row=$resultr->fetch_assoc()){
      $upr= $row["balance"]+$amount;
    }
    }

    $rusql="update customers set balance=? where name=?";
    $rustm=$conn->prepare($rusql);
    $rustm->bind_param('ss',$upr,$receiver);
    $rustm->execute();
    $resultru=$rustm->get_result();
?>
<div align="right">
<a href="customers.php">Customer Details</a>
<a href="transhistory.php">Transaction History</a> 
</div>
<h1>Your transaction is successfull!!</h1>
</body>
</html>