<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    


    h1 {
    color: black;
    padding: 15px 20px;
    text-align: left;
    margin-top:16px;
    margin-right: 180px;
    }

    a{
    background-color: black;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    .bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.9;
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
<img class="bg" src="cusbg.jpg" alt="AP_TOURISM">
<div align="right">
<a href="transfer.php">Transfer Money</a>
<a href="transhistory.php">Transaction History</a> 
</div>
<h1>Customer Details</h1> 
<table>
        <thead>
            <tr>
                <th>Account Number</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $conn = new mysqli($servername, $username,"",'bank');
            $sq="select * from customers";
            $stm=$conn->prepare($sq);
            $stm->execute();
            $results=$stm->get_result();
            if ($results->num_rows > 0){
            while($row=$results->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['AccountNumber']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Balance']?></td>
                </tr>
    
            <?php
            }}
            ?>
        </tbody>
</table>
</body>
</html>