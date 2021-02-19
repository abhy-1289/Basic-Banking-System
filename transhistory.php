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
    color: #f44336;
    padding: 15px 20px;
    text-align: left;
    margin-top:16px;
    margin-right: 180px;
    }
    table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
    text-align: center;
    padding: 16px;
    }
    tr:hover {background-color: #f5f5f5;}
    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
<div align="right">
<a href="customers.php">Customer Details</a>
<a href="transhistory.php">Transaction History</a> 
</div>
<h1>Customer Details</h1> 

<table>
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $conn = new mysqli($servername, $username,"",'bank');
            $sq="select * from transactions";
            $stm=$conn->prepare($sq);
            $stm->execute();
            $results=$stm->get_result();
            if ($results->num_rows > 0){
            while($row=$results->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['sender']?></td>
                    <td><?php echo $row['receiver']?></td>
                    <td><?php echo $row['amount']?></td>
                </tr>
    
            <?php
            }}
            ?>
        </tbody>
</table>
</body>
</html>