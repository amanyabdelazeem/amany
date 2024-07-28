<?php
$server = "localhost";
$username = "root";
$pw="";
$dbname="restaurant";
try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname",
   $username,
   $pw);

 $conn->setAttribute(
 PDO::ATTR_ERRMODE,
 PDO::ERRMODE_EXCEPTION
 );
 echo "connected succefully";}
catch (PDOException $e){
echo"connection failed:" .$e->getMessage();
}
