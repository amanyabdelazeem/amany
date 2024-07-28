<?php
include("./connect.php");
$id=$_GET['id'];
$sql= "DELETE FROM users where user_id='$id' ";
$conn->exec($sql);
echo "<br>. data deleted success";
header('refresh:3 URL=./task11.php' );
?>