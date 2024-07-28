<?php
include("./connect.php");
$data = $conn->query("select * from users")->fetchAll();

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
        <th>phone</th>
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php

        foreach ($data as $row) {
            echo "<tr>
            <td>{$row['use_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone_number']}</td>
        <td><a href='./update.php?id={$row['user_id']}'>edit</a></td>
        <td><a href='./delete.php?id={$row['user_id']}'>delete</a></td>
      </tr>";
           
      
        
    }
     ?>
    </tbody>
  </table>
</div>

</body>
</html>
