<?php
include("./connect.php");
$sql="SELECT users.use_name,users.email,orders.order_date,orders.order_price
from users INNER JOIN orders
ON users.user_id=orders.user_id";
$data=$conn->query($sql)->fetchAll();
echo substr("Hello world",6);
echo date("d/m/Y",strtotime("15 Apr 2023"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>user name</th>
        <th>email</th>
        <th>order date</th>
        <th>order price</th>
       
      </tr>
    </thead>
    <tbody>
        <?php

        foreach ($data as $row) {
            echo "<tr>
           <td>{$row['use_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['order_date']}</td>
        <td>{$row['order_price']}</td>
    
        </tr>";
           
      
        
    }
     ?>
    </tbody>
  </table>
</div>

</body>

</html>
