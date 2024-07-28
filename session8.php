<?php
include ("./connect.php");
$name = "ali";
$phone = "1234";
$email = "a@test.com";
$num = 2;
$date = "2024-06-03";
$query = " INSERT INTO users(use_name,phone_number,email,number_of_person,book_date)
VALUES('$name','$phone','$email',$num','$date')";

$conn->exec($query);
echo "<br>data inserted succefully";
?>