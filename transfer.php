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
    input[type=submit]{
    background-color: #f44336;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    form{
        margin-top:25px;
        margin-left:240px;
    }
    select{
      display: block;
      font-size: 16px;
      font-family: sans-serif;
      /* color:mediumseagreen; */
      padding: 12px 8px;
      align:"center"; 
      width: 50%;
      box-sizing: border-box;
      border: 1px solid #aaa;
      box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
      appearance: none;
      background-color: #fff;
      }
      input[type=text]{
        display: block;
        /* color:mediumseagreen; */
        font-size: 16px;
        font-family: sans-serif;
        padding: 12px 8px;
        align:"center"; 
        width: 50%;
        box-sizing: border-box;
        border: 1px solid #aaa;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        appearance: none;
        background-color: #fff;
      }
      h1{
          color:#f44336;
      }
      h2{
          color:slateblue;
      }
    </style>
</head>
<body>
<div align="right">
<a href="customers.php">Customer Details</a>
<a href="transhistory.php">Transaction History</a> 
</div>
<h1>Transfer Money</h1>
    <div class="form">
    <form  method="POST" action="transactions.php">
    <h2>Sender:</h2>
    <select name="sender" > 
            <option value=sender>Select sender</option>
            <option value="john">John</option>
            <option value="david">David</option>
            <option value="joseph">Joseph</option> 
            <option value="michael">Michael</option> 
            <option value="philip">Philip</option> 
            <option value="robert">Robert</option> 
            <option value="williamson">Williamson</option> 
            <option value="simon">Simon</option> 
            <option value="smith">Smith</option> 
            <option value="ravi">Ravi</option> 
    </select>
    <br>
    <h2>Receiver:</h2>
    <select name="receiver" > 
        <option value="receiver">Select receiver</option>
        <option value="john">John</option>
        <option value="david">David</option>
        <option value="joseph">Joseph</option> 
        <option value="michael">Michael</option> 
        <option value="philip">Philip</option> 
        <option value="robert">Robert</option> 
        <option value="williamson">Williamson</option> 
        <option value="simon">Simon</option> 
        <option value="smith">Smith</option> 
        <option value="ravi">Ravi</option> 
    </select>
    <h2>Amount: </h2><input type="text" name="amount"><br>
    <input type="submit" value="Transfer">
    </form>
    </div>
</body>
</html>